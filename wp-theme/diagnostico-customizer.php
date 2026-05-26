<?php
/**
 * DIAGNÓSTICO DO CUSTOMIZER - BELLA VIP
 * 
 * INSTRUÇÃO: Coloque este arquivo na RAIZ do WordPress (onde fica o wp-config.php).
 * Acesse: https://espacobellavip.com.br/diagnostico-customizer.php
 * APAGUE o arquivo após usar!
 */

// Carrega o WordPress
define('ABSPATH', dirname(__FILE__) . '/');
define('WPINC', 'wp-includes');

// Inicia output buffering para capturar qualquer saída estranha
ob_start();

// Carrega apenas o necessário para ler as opções do WP
require_once(ABSPATH . 'wp-load.php');

// Captura qualquer saída que possa ter vazado durante o carregamento
$leaked_output = ob_get_clean();

echo '<pre style="background:#111;color:#0f0;padding:20px;font-family:monospace;">';
echo '<h2 style="color:#ff0">DIAGNÓSTICO DO CUSTOMIZER BELLA VIP</h2>';

// 1. Qual tema está ativo?
$active_theme = get_option('stylesheet');
$active_theme_name = get_option('current_theme');
echo "1. TEMA ATIVO (stylesheet): <b style='color:#0ff'>" . esc_html($active_theme) . "</b>\n";
echo "   TEMA ATIVO (name): <b style='color:#0ff'>" . esc_html($active_theme_name) . "</b>\n\n";

// 2. Existe alguma saída vazada durante o carregamento?
if (!empty($leaked_output)) {
    echo "2. ⚠️  SAÍDA VAZADA DETECTADA DURANTE wp-load.php:\n";
    echo "<b style='color:#f00'>" . esc_html($leaked_output) . "</b>\n\n";
} else {
    echo "2. ✅ Nenhuma saída vazada durante o carregamento do WordPress.\n\n";
}

// 3. Verificar se o functions.php do tema ativo tem ini_set
$theme_dir = get_template_directory();
$functions_file = $theme_dir . '/functions.php';
echo "3. Caminho do tema ativo: <b>" . esc_html($theme_dir) . "</b>\n";

if (file_exists($functions_file)) {
    $content = file_get_contents($functions_file);
    if (strpos($content, 'ini_set') !== false) {
        echo "   ⚠️  <b style='color:#f00'>PROBLEMA ENCONTRADO: ini_set() detectado no functions.php do servidor!</b>\n";
        echo "   Isso está corrompendo o JSON do Customizer.\n";
        echo "   Faça o upload do novo ZIP para corrigir.\n\n";
    } else {
        echo "   ✅ Nenhum ini_set() no functions.php do tema.\n\n";
    }
} else {
    echo "   ⚠️ functions.php não encontrado!\n\n";
}

// 4. Verificar arquivos do tema
echo "4. Arquivos na pasta do tema:\n";
$files = scandir($theme_dir);
foreach ($files as $f) {
    if ($f !== '.' && $f !== '..') {
        echo "   - " . esc_html($f) . "\n";
    }
}

// 5. Versão do PHP e WordPress
echo "\n5. Versão PHP: <b>" . phpversion() . "</b>\n";
echo "   Versão WordPress: <b>" . get_bloginfo('version') . "</b>\n";

// 6. Verificar se tem plugins suspeitos que possam interferir
echo "\n6. Plugins ativos:\n";
$active_plugins = get_option('active_plugins');
foreach ($active_plugins as $plugin) {
    echo "   - " . esc_html($plugin) . "\n";
}

// 7. Testar output buffering do Customizer
echo "\n7. Teste de output buffering:\n";
ob_start();
echo "   Teste interno de echo";
$test = ob_get_clean();
if ($test === "   Teste interno de echo") {
    echo "   ✅ Output buffering funciona corretamente.\n";
} else {
    echo "   ⚠️ Problema com output buffering!\n";
}

echo "\n\n<b style='color:#ff0'>⚠️ APAGUE ESTE ARQUIVO IMEDIATAMENTE APÓS O DIAGNÓSTICO!</b>";
echo '</pre>';
?>
