<?php
/**
 * DIAGNÓSTICO 2 - LER ERROR LOG E ISOLAR PLUGIN CULPADO
 * 
 * INSTRUÇÃO: Coloque na RAIZ do WordPress. Acesse a URL. APAGUE após uso.
 * https://espacobellavip.com.br/diagnostico2.php
 */
define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-load.php');

echo '<pre style="background:#111;color:#0f0;padding:20px;font-family:monospace;white-space:pre-wrap;word-break:break-all;">';
echo '<h2 style="color:#ff0">DIAGNÓSTICO 2 — ERROR LOG & PLUGINS</h2>';

// 1. Ler o error_log do tema
$theme_dir    = get_template_directory();
$error_log    = $theme_dir . '/error_log';
$wp_error_log = WP_CONTENT_DIR . '/debug.log';

echo "=== 1. ERROR LOG DA PASTA DO TEMA ===\n";
if ( file_exists( $error_log ) ) {
    $size = filesize( $error_log );
    echo "Tamanho: {$size} bytes\n";
    echo "Últimas 5000 caracteres:\n";
    echo "---\n";
    $content = file_get_contents( $error_log );
    // Mostra só as últimas 5000 chars para não sobrecarregar
    echo esc_html( substr( $content, -5000 ) );
    echo "\n---\n\n";
} else {
    echo "Arquivo error_log não encontrado no tema.\n\n";
}

echo "=== 2. WP DEBUG LOG (/wp-content/debug.log) ===\n";
if ( file_exists( $wp_error_log ) ) {
    $content = file_get_contents( $wp_error_log );
    echo esc_html( substr( $content, -3000 ) );
} else {
    echo "Arquivo debug.log não encontrado.\n";
}
echo "\n\n";

// 3. Verificar o plugin head-footer-code
echo "=== 3. CONTEÚDO INJETADO PELO PLUGIN head-footer-code ===\n";
$hfc_head   = get_option( 'hfc_script_header', '' );
$hfc_footer = get_option( 'hfc_script_footer', '' );
$hfc_body   = get_option( 'hfc_script_body', '' );

if ( ! empty( $hfc_head ) ) {
    echo "⚠️  HEAD CODE:\n" . esc_html( $hfc_head ) . "\n\n";
} else {
    echo "✅ Nenhum código no HEAD.\n";
}
if ( ! empty( $hfc_body ) ) {
    echo "⚠️  BODY CODE:\n" . esc_html( $hfc_body ) . "\n\n";
} else {
    echo "✅ Nenhum código no BODY.\n";
}
if ( ! empty( $hfc_footer ) ) {
    echo "⚠️  FOOTER CODE:\n" . esc_html( $hfc_footer ) . "\n\n";
} else {
    echo "✅ Nenhum código no FOOTER.\n";
}
echo "\n";

// 4. Really Simple SSL - verificar configurações
echo "=== 4. REALLY SIMPLE SSL ===\n";
$ssl_options = get_option( 'rlrsssl_options', array() );
echo "Opções RSSSL:\n";
foreach ( $ssl_options as $k => $v ) {
    if ( is_scalar($v) ) {
        echo "  {$k} => " . esc_html( (string)$v ) . "\n";
    }
}
echo "\n";

// 5. Teste crítico: simular o que o Customizer faz
echo "=== 5. SIMULAÇÃO DO customize_pane_settings ===\n";
ob_start();
do_action( 'customize_register', new WP_Customize_Manager() );
$output_during_customize = ob_get_clean();
if ( ! empty( $output_during_customize ) ) {
    echo "🔴 SAÍDA DETECTADA DURANTE customize_register:\n";
    echo esc_html( $output_during_customize ) . "\n";
} else {
    echo "✅ Nenhuma saída durante customize_register.\n";
}

echo "\n<b style='color:#ff0'>⚠️ APAGUE ESTE ARQUIVO APÓS O USO!</b>";
echo '</pre>';
?>
