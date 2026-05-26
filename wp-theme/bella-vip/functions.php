<?php
/**
 * Funções e definições do tema Bella VIP
 *
 * @package Bella_VIP
 */



if ( ! defined( 'BELLA_VIP_VERSION' ) ) {
	// Substitua pela versão do tema definida no style.css
	define( 'BELLA_VIP_VERSION', '1.2.3' );
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
	// Determinar versões com fallback seguro se os arquivos não existirem
	$tailwind_path = get_template_directory() . '/assets/css/output.css';
	$tailwind_ver  = file_exists( $tailwind_path ) ? filemtime( $tailwind_path ) : BELLA_VIP_VERSION;

	$main_js_path  = get_template_directory() . '/assets/js/main.js';
	$main_js_ver   = file_exists( $main_js_path ) ? filemtime( $main_js_path ) : BELLA_VIP_VERSION;

	// CSS do Tailwind (Compilado)
	wp_enqueue_style( 'bellavip-tailwind', get_template_directory_uri() . '/assets/css/output.css', array(), $tailwind_ver );

	// CSS Principal do Tema (para requisitos do WP)
	wp_enqueue_style( 'bellavip-style', get_stylesheet_uri(), array(), BELLA_VIP_VERSION );

	// Script global (Navegação mobile, WhatsApp, etc)
	wp_enqueue_script( 'bellavip-main', get_template_directory_uri() . '/assets/js/main.js', array(), $main_js_ver, true );

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

/**
 * Registrar padrões e estilos de bloco customizados.
 */
function bellavip_register_block_features() {
	// Registrar padrão de bloco
	register_block_pattern(
		'bella-vip/cta',
		array(
			'title'       => esc_html__( 'Agendamento WhatsApp', 'bella-vip' ),
			'description' => esc_html_x( 'Um bloco de chamada para agendamento de atendimentos no WhatsApp.', 'Block pattern description', 'bella-vip' ),
			'content'     => '<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem"}}} --><p class="has-text-align-center" style="font-size:1.5rem"><strong>' . esc_html__( 'Gostaria de agendar um atendimento?', 'bella-vip' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html__( 'Fale conosco diretamente pelo WhatsApp para reservar o seu horário personalizado.', 'bella-vip' ) . '</p><!-- /wp:paragraph -->',
			'categories'  => array( 'buttons' ),
		)
	);

	// Registrar estilo de bloco personalizado (Botão Terracota do Tema)
	register_block_style(
		'core/button',
		array(
			'name'  => 'bella-vip-terracotta',
			'label' => esc_html__( 'Botão Terracota Bella VIP', 'bella-vip' ),
		)
	);
}
add_action( 'init', 'bellavip_register_block_features' );

/**
 * Corrige o bug de tela branca no Customizer causado por erros/notices PHP de outros plugins.
 * Desativa a exibição de erros na tela durante requisições do Customizer e Admin,
 * evitando que avisos quebrem a sintaxe do JSON JS inline gerado pelo WordPress.
 */
function bellavip_silence_customizer_errors() {
	if ( is_customize_preview() || is_admin() ) {
		@ini_set( 'display_errors', 0 );
	}
}
add_action( 'init', 'bellavip_silence_customizer_errors', 1 );

/**
 * Fallback de compatibilidade: Registra temporariamente o post type 'elementor_library'
 * se o Elementor estiver desativado. Isso evita que o WordPress gere avisos do tipo
 * _doing_it_wrong() na checagem de capacidades de itens de menu antigos que apontavam
 * para modelos do Elementor, prevenindo o corrompimento da tela de personalização.
 */
function bellavip_register_elementor_library_fallback() {
	if ( ! post_type_exists( 'elementor_library' ) ) {
		register_post_type( 'elementor_library', array(
			'public'             => false,
			'publicly_queryable' => false,
			'show_ui'            => false,
			'show_in_menu'       => false,
			'query_var'          => false,
			'rewrite'            => false,
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'supports'           => array( 'title' ),
		) );
	}
}
add_action( 'init', 'bellavip_register_elementor_library_fallback', 5 );
