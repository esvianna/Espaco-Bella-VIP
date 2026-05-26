# Changelog

Todas as mudanças notáveis deste projeto serão documentadas neste arquivo.

## [1.2.2] - Correções, Self-hosting de Fontes e Preparação para WordPress.org - 2026-05-26
### Added
- Baixadas as fontes Google Fonts (Inter e Playfair Display) localmente para a pasta `bella-vip/assets/fonts/` e configuradas via `@font-face` no Tailwind CSS, eliminando chamadas externas.
- Criados arquivos de template obrigatórios para conformidade: `single.php`, `page.php`, `comments.php` e `sidebar.php` (com chamada `dynamic_sidebar`).
- Adicionados suportes do tema obrigatórios e recomendados em `functions.php` (Gutenberg, layout, feeds, etc.) e registrado padrão de bloco (`register_block_pattern`).
- Criados placeholders de imagens SVG locais (`placeholder.svg`, `avatar-placeholder.svg`) para substituir recursos remotos.

### Fixed
- Substituída a sanitização `wp_kses_post` do campo de Mapa no Customizer por uma função personalizada `bellavip_sanitize_iframe` para permitir que tags `<iframe>` com atributos seguros sejam salvas corretamente no banco de dados.
- Corrigidas as URLs padrão de placeholder do Unsplash e UI Avatars em todo o tema, substituindo-as por imagens locais licenciadas GPL e eliminando referências externas (incompatíveis com as regras do WordPress.org).
- Renomeada a pasta física do tema para `bella-vip` e atualizados Text Domain de todos os arquivos para `bella-vip` (slug oficial do WordPress.org).
- Alterados os créditos de desenvolvimento no rodapé do tema para "Desenvolvido com carinho por VTIS", direcionando para vtis.com.br.
- Recortada e otimizada a imagem `screenshot.png` para a proporção exata de 4:3 (1200x900px) e salva como PNG de 8 bits comprimido, reduzindo o arquivo de 1.3 MB para 311 KB.

## [1.2.1] - Limpeza de Arquivos Obsoletos e Reestruturação de Desenvolvimento - 2026-05-26
### Removed
- Exclusão do arquivo obsoleto `acf-export.json` na raiz do tema.
- Exclusão da pasta `patterns/` e de seu registro em `functions.php` (Gutenberg Block Patterns inativos).

### Changed
- Reestruturação do ambiente de desenvolvimento: movidos `node_modules/`, `package.json`, `package-lock.json` e `src/` para fora da pasta do tema, mantendo-os na pasta pai `/wp-theme/`.
- O tema `./wp-theme/bellavip/` agora contém estritamente os arquivos que devem subir para produção.
- Geração do arquivo `bellavip.zip` diretamente do diretório limpo do tema, reduzindo o tamanho de 6.5 MB para ~726 KB.

## [1.2.0] - Home 100% Controlável pelo Customizer (Sem Gutenberg) - 2026-05-26
### Added
- Criação dos novos template parts na pasta `template-parts/` para cada uma das seções da Landing Page (`home-hero.php`, `home-services.php`, `home-gloss-express.php`, `home-about.php`, `home-gallery.php`, `home-testimonials.php`, `home-location.php`).
- Mapeamento completo e registro de todos os campos da Home (textos, imagens, links e iframes do Google Maps) no WordPress Customizer dentro de um painel unificado `bellavip_homepage_panel` ("Página Inicial Bella VIP").
- Suporte a fallback inteligente: caso o usuário não configure nenhuma informação, o site carrega os textos e imagens padrão do protótipo automaticamente.

### Changed
- Refatoração de `front-page.php` para renderizar as seções via chamadas de `get_template_part` dinâmicas ao invés de Gutenberg Block Patterns, blindando o layout contra erros acidentais de usuários inexperientes.
- Opcionalmente renderiza blocos do Gutenberg apenas no final do site, se existirem no editor.

## [1.1.1] - Correção do Fallback de Seções na Home - 2026-05-26
### Fixed
- Correção em `front-page.php` para exibir todas as seções (Block Patterns) em ordem como fallback caso o conteúdo da página inicial no painel do WordPress esteja vazio.

## [1.1.0] - Tema WordPress 100% Nativo FSE / WP.org Standards - 2026-05-19
### Changed
- Refatoração profunda da arquitetura do tema Bella VIP.
- Remoção total do plugin ACF e de seus usos em código hardcoded.
- Adoção da Customizer API para cores (`bella-terracotta`, `bella-nude`) e informações globais (WhatsApp, Endereço).
- Migração de todos os `template-parts` para **Padrões de Bloco (Block Patterns)** nativos do Gutenberg (`patterns/*.php`).
- Aplicação estrita de `Text Domain` (`bellavip`) e internacionalização (i18n) em todo o código PHP.
- `front-page.php` agora usa `the_content()` com Graceful Degradation (fallback para padrões se vazio).

## [1.0.0] - Prototipação - 2026-05-18
### Added
- Setup do projeto com React, Vite e Tailwind CSS v4.
- `Header.jsx` com navegação simples.
- `Hero.jsx` com chamada forte e CTA.
- `About.jsx` evidenciando diferenciais.
- `Services.jsx` com listagem de serviços principais.
- `GlossExpress.jsx` com destaque visual alternado.
- `Gallery.jsx` e `Testimonials.jsx` para prova social.
- `Location.jsx` com espaço para mapa e contato.
- `Footer.jsx` com informações completas e `FloatingWhatsApp.jsx`.
- Documentação de governança (`AGENTS.md`, `ROADMAP.md`, etc).

### Fixed
- Erro de configuração entre PostCSS e Tailwindcss v4 resolvido usando `@tailwindcss/vite`.
- Erros de exportação de ícones (`lucide-react`) resolvidos com a remoção de imports ausentes.
