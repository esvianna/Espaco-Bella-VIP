<?php
/**
 * Funções e definições do tema Bella VIP
 *
 * @package Bella_VIP
 */

if ( ! defined( 'BELLA_VIP_VERSION' ) ) {
	// Substitua pela versão do tema definida no style.css
	define( 'BELLA_VIP_VERSION', '1.2.2' );
}

/**
 * Configurações padrão e suporte do tema
 */
function bellavip_setup() {
	// Internacionalização (i18n)
	load_theme_textdomain( 'bella-vip', get_template_directory() . '/languages' );

	// Suporte a tag title
	add_theme_support( 'title-tag' );

	// Suporte a thumbnails
	add_theme_support( 'post-thumbnails' );

	// Suporte a logotipo customizado
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 250,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

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
			'menu-1' => esc_html__( 'Primary', 'bella-vip' ),
		)
	);

	// Suporte a feeds de RSS automáticos
	add_theme_support( 'automatic-feed-links' );

	// Suportes para Gutenberg
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	// Suporte a cabeçalho e fundos personalizados
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );

	// Adiciona estilos para o editor Gutenberg
	add_editor_style( 'assets/css/output.css' );
}
add_action( 'after_setup_theme', 'bellavip_setup' );

/**
 * Registrar área de widgets.
 */
function bellavip_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bella-vip' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Adicione widgets aqui.', 'bella-vip' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s mb-8 bg-bella-nude/30 p-6 rounded-xl border border-bella-rose/20">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title text-xl font-serif text-bella-text mb-4">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bellavip_widgets_init' );

/**
 * Enfileirar scripts e estilos.
 */
function bellavip_scripts() {
	// CSS do Tailwind (Compilado)
	wp_enqueue_style( 'bellavip-tailwind', get_template_directory_uri() . '/assets/css/output.css', array(), filemtime( get_template_directory() . '/assets/css/output.css' ) );

	// CSS Principal do Tema (para requisitos do WP)
	wp_enqueue_style( 'bellavip-style', get_stylesheet_uri(), array(), BELLA_VIP_VERSION );

	// Script global (Navegação mobile, WhatsApp, etc)
	wp_enqueue_script( 'bellavip-main', get_template_directory_uri() . '/assets/js/main.js', array(), filemtime( get_template_directory() . '/assets/js/main.js' ), true );

	// Habilitar script de resposta de comentários condicionalmente
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bellavip_scripts' );

/**
 * Customizer e Configurações do Tema
 */
require get_template_directory() . '/inc/customizer.php';


