<?php
/**
 * DIAGNÓSTICO 3 - VER O JSON DO customize_pane_settings
 * 
 * Coloque na RAIZ do WordPress. Acesse: https://espacobellavip.com.br/diagnostico3.php
 * Você PRECISA estar logado no WP admin para isso funcionar.
 * APAGUE após uso!
 */
define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-load.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-screen.php');
require_once(ABSPATH . 'wp-admin/includes/screen.php');
require_once(ABSPATH . 'wp-includes/class-wp-customize-manager.php');

// Verifica autenticação
if (!current_user_can('customize')) {
    wp_die('Acesso negado. Você precisa estar logado como administrador.');
}

echo '<pre style="background:#111;color:#0f0;padding:20px;font-family:monospace;font-size:11px;white-space:pre-wrap;word-break:break-all;">';
echo '<h2 style="color:#ff0">DIAGNÓSTICO 3 — JSON DO CUSTOMIZER</h2>';

// Capturar TUDO que é emitido durante a inicialização do Customizer
ob_start();
$wp_customize = new WP_Customize_Manager();
do_action('customize_register', $wp_customize);
$leaked_during_init = ob_get_clean();

if (!empty($leaked_during_init)) {
    echo "🔴 SAÍDA DETECTADA DURANTE customize_register:\n";
    echo esc_html($leaked_during_init) . "\n\n";
} else {
    echo "✅ Nenhuma saída durante customize_register.\n\n";
}

// Verificar os settings com HTML nos valores padrão
echo "=== SETTINGS COM HTML NOS DEFAULTS ===\n";
$settings = $wp_customize->settings();
foreach ($settings as $id => $setting) {
    $default = $setting->default;
    if (is_string($default) && (strpos($default, '<') !== false || strpos($default, '>') !== false)) {
        echo "⚠️  Setting: {$id}\n";
        echo "   Default: " . esc_html($default) . "\n";
        $encoded = wp_json_encode($default);
        echo "   JSON:    " . esc_html($encoded) . "\n\n";
    }
}

// Verificar os controles com HTML nos labels
echo "\n=== CONTROLES COM HTML NOS LABELS ===\n";
$controls = $wp_customize->controls();
foreach ($controls as $id => $control) {
    if (is_string($control->label) && (strpos($control->label, '<') !== false)) {
        echo "⚠️  Control: {$id}\n";
        echo "   Label: " . esc_html($control->label) . "\n";
        $encoded = wp_json_encode($control->label);
        echo "   JSON:  " . esc_html($encoded) . "\n\n";
    }
    if (is_string($control->description) && (strpos($control->description, '<') !== false)) {
        echo "⚠️  Control (description): {$id}\n";
        echo "   Description: " . esc_html($control->description) . "\n\n";
    }
}

// Testar o json_encode completo do que o Customizer vai exportar
echo "\n=== TESTE DE JSON_ENCODE DOS SETTINGS ===\n";
$settings_data = array();
foreach ($wp_customize->settings() as $id => $setting) {
    $settings_data[$id] = array(
        'value'     => $setting->value(),
        'transport' => $setting->transport,
        'dirty'     => false,
        'type'      => $setting->type,
    );
}

$json = wp_json_encode($settings_data);
if ($json === false) {
    echo "🔴 FALHA NO json_encode! Erro: " . json_last_error_msg() . "\n";
    echo "Código do erro: " . json_last_error() . "\n";
} else {
    echo "✅ json_encode bem-sucedido. Tamanho: " . strlen($json) . " bytes.\n";
    // Verificar se o JSON contém < não-escapado
    if (preg_match('/"[^"]*<[^"]*"/', $json)) {
        echo "⚠️  O JSON contém '<' dentro de strings. Pode causar problemas em certos contextos.\n";
        preg_match_all('/"[^"]*(<[^"]*)"/', $json, $matches);
        foreach ($matches[0] as $match) {
            $trimmed = substr($match, 0, 150);
            echo "   Trecho: " . esc_html($trimmed) . "\n";
        }
    }
}

// Verificar wp_kses_post - o sanitizador que aceita HTML
echo "\n=== VALORES SALVOS NO BANCO (theme_mods) ===\n";
$theme_mods = get_theme_mods();
if ($theme_mods) {
    foreach ($theme_mods as $k => $v) {
        if (is_string($v) && strpos($v, '<') !== false) {
            echo "⚠️  {$k}: " . esc_html($v) . "\n";
        }
    }
    echo "✅ Verificação de theme_mods concluída.\n";
} else {
    echo "Nenhum theme_mod salvo no banco.\n";
}

echo "\n<b style='color:#ff0'>⚠️ APAGUE ESTE ARQUIVO APÓS O USO!</b>";
echo '</pre>';
?>
