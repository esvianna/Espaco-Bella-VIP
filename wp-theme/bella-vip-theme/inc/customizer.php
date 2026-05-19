<?php
/**
 * Tema Bella VIP Customizer
 *
 * @package Bella_VIP
 */

/**
 * Registra os painéis e controles do Customizer
 */
function bellavip_customize_register( $wp_customize ) {

	// Seção Bella VIP
	$wp_customize->add_section( 'bellavip_settings', array(
		'title'       => esc_html__( 'Configurações Bella VIP', 'bellavip' ),
		'description' => esc_html__( 'Personalize as cores principais e os contatos do tema.', 'bellavip' ),
		'priority'    => 30,
	) );

	// WhatsApp Number
	$wp_customize->add_setting( 'bellavip_whatsapp_number', array(
		'default'           => '5541999999999',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_whatsapp_number', array(
		'label'       => esc_html__( 'Número do WhatsApp', 'bellavip' ),
		'description' => esc_html__( 'Apenas números (Ex: 5541999999999)', 'bellavip' ),
		'section'     => 'bellavip_settings',
		'type'        => 'text',
	) );

	// Endereço
	$wp_customize->add_setting( 'bellavip_address', array(
		'default'           => 'R. Eduardo Sprada, 0000 - Campo Comprido<br>Curitiba - PR',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'bellavip_address', array(
		'label'       => esc_html__( 'Endereço (Rodapé)', 'bellavip' ),
		'section'     => 'bellavip_settings',
		'type'        => 'textarea',
	) );

	// Cor Terracotta
	$wp_customize->add_setting( 'bellavip_color_terracotta', array(
		'default'           => '#df9a81',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bellavip_color_terracotta', array(
		'label'    => esc_html__( 'Cor Principal (Terracotta)', 'bellavip' ),
		'section  ' => 'bellavip_settings',
		'settings' => 'bellavip_color_terracotta',
	) ) );

	// Cor Nude
	$wp_customize->add_setting( 'bellavip_color_nude', array(
		'default'           => '#fdf7f3',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bellavip_color_nude', array(
		'label'    => esc_html__( 'Cor de Fundo (Nude)', 'bellavip' ),
		'section'  => 'bellavip_settings',
		'settings' => 'bellavip_color_nude',
	) ) );
}
add_action( 'customize_register', 'bellavip_customize_register' );

/**
 * Gera e injeta as variáveis CSS personalizadas no <head>
 */
function bellavip_customizer_css() {
	$terracotta = get_theme_mod( 'bellavip_color_terracotta', '#df9a81' );
	$nude       = get_theme_mod( 'bellavip_color_nude', '#fdf7f3' );

	$css = "
		:root {
			--color-bella-terracotta: {$terracotta};
			--color-bella-nude: {$nude};
		}
	";

	wp_add_inline_style( 'bellavip-style', wp_strip_all_tags( $css ) );
}
add_action( 'wp_enqueue_scripts', 'bellavip_customizer_css' );
