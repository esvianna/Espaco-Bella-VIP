const fs = require('fs');
const path = require('path');
const https = require('https');

const USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36';
const FONT_URL = 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap';

const FONTS_DIR = path.join(__dirname, 'bellavip', 'assets', 'fonts');

if (!fs.existsSync(FONTS_DIR)) {
  fs.mkdirSync(FONTS_DIR, { recursive: true });
}

function fetch(url, headers = {}) {
  return new Promise((resolve, reject) => {
    https.get(url, { headers }, (res) => {
      let data = '';
      res.on('data', (chunk) => { data += chunk; });
      res.on('end', () => resolve(data));
    }).on('error', reject);
  });
}

function downloadFile(url, dest) {
  return new Promise((resolve, reject) => {
    const file = fs.createWriteStream(dest);
    https.get(url, (res) => {
      res.pipe(file);
      file.on('finish', () => {
        file.close();
        resolve();
      });
    }).on('error', (err) => {
      fs.unlink(dest, () => {});
      reject(err);
    });
  });
}

async function main() {
  console.log('Fetching Google Fonts CSS...');
  const css = await fetch(FONT_URL, { 'User-Agent': USER_AGENT });

  // Parse CSS to extract @font-face blocks, specifically for 'latin' subset
  // CSS contains sections like:
  // /* latin */
  // @font-face { ... }
  
  const blocks = css.split('}');
  const localCssLines = [];
  
  for (const block of blocks) {
    if (!block.trim()) continue;
    
    // We only want the latin subset for simplicity and performance
    const isLatin = block.includes('/* latin */') || block.includes('unicode-range: U+0000-00FF');
    if (!isLatin) continue;
    
    // Extract font family, style, weight, and url
    const familyMatch = block.match(/font-family:\s*['"]?([^'"]+)['"]?/);
    const styleMatch = block.match(/font-style:\s*([^;]+)/);
    const weightMatch = block.match(/font-weight:\s*([^;]+)/);
    const urlMatch = block.match(/src:\s*url\(([^)]+)\)/);
    
    if (familyMatch && styleMatch && weightMatch && urlMatch) {
      const family = familyMatch[1];
      const style = styleMatch[1].trim();
      const weight = weightMatch[1].trim();
      const remoteUrl = urlMatch[1].trim();
      
      // Generate clean filename: e.g. inter-normal-400.woff2
      const safeFamilyName = family.toLowerCase().replace(/\s+/g, '-');
      const filename = `${safeFamilyName}-${style}-${weight}.woff2`;
      const destPath = path.join(FONTS_DIR, filename);
      
      console.log(`Downloading ${family} (${style}, ${weight}) -> ${filename}...`);
      try {
        await downloadFile(remoteUrl, destPath);
      } catch (err) {
        console.error(`Failed to download ${remoteUrl}:`, err.message);
        continue;
      }
      
      // Construct local @font-face
      const localFontFace = `@font-face {
  font-family: '${family}';
  font-style: ${style};
  font-weight: ${weight};
  font-display: swap;
  src: url('../fonts/${filename}') format('woff2');
}`;
      localCssLines.push(localFontFace);
    }
  }
  
  const localCss = localCssLines.join('\n\n') + '\n';
  const outputPath = path.join(__dirname, 'src', 'fonts.css');
  fs.writeFileSync(outputPath, localCss);
  console.log(`Saved CSS declarations to ${outputPath}`);
}

main().catch(console.error);
