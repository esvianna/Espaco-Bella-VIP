<?php
/**
 * Funções e definições do tema Bella VIP
 *
 * @package Bella_VIP
 */

if ( ! defined( 'BELLA_VIP_VERSION' ) ) {
	// Substitua pela versão do tema definida no style.css
	define( 'BELLA_VIP_VERSION', '1.0.0' );
}

/**
 * Configurações padrão e suporte do tema
 */
function bellavip_setup() {
	// Suporte a tag title
	add_theme_support( 'title-tag' );

	// Suporte a thumbnails
	add_theme_support( 'post-thumbnails' );

	// Suporte a HTML5 nativo
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Registrar menus
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bellavip' ),
		)
	);
}
add_action( 'after_setup_theme', 'bellavip_setup' );

/**
 * Enfileirar scripts e estilos.
 */
function bellavip_scripts() {
	// CSS do Tailwind (Compilado)
	wp_enqueue_style( 'bellavip-tailwind', get_template_directory_uri() . '/assets/css/output.css', array(), filemtime( get_template_directory() . '/assets/css/output.css' ) );

	// CSS Principal do Tema (para requisitos do WP)
	wp_enqueue_style( 'bellavip-style', get_stylesheet_uri(), array(), BELLA_VIP_VERSION );

	// Fontes do Google
	wp_enqueue_style( 'bellavip-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap', array(), null );

    // Script global (Navegação mobile, WhatsApp, etc)
    wp_enqueue_script( 'bellavip-main', get_template_directory_uri() . '/assets/js/main.js', array(), filemtime( get_template_directory() . '/assets/js/main.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'bellavip_scripts' );
