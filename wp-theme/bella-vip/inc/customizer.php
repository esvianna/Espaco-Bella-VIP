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

	// Seção Geral Bella VIP (Existente)
	$wp_customize->add_section( 'bellavip_settings', array(
		'title'       => esc_html__( 'Configurações Bella VIP', 'bella-vip' ),
		'description' => esc_html__( 'Personalize as cores principais e os contatos do tema.', 'bella-vip' ),
		'priority'    => 30,
	) );

	// WhatsApp Number
	$wp_customize->add_setting( 'bellavip_whatsapp_number', array(
		'default'           => '5541999999999',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_whatsapp_number', array(
		'label'       => esc_html__( 'Número do WhatsApp', 'bella-vip' ),
		'description' => esc_html__( 'Apenas números (Ex: 5541999999999)', 'bella-vip' ),
		'section'     => 'bellavip_settings',
		'type'        => 'text',
	) );

	// Endereço
	$wp_customize->add_setting( 'bellavip_address', array(
		'default'           => 'R. Eduardo Sprada, 0000 - Campo Comprido<br>Curitiba - PR',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'bellavip_address', array(
		'label'       => esc_html__( 'Endereço (Rodapé)', 'bella-vip' ),
		'section'     => 'bellavip_settings',
		'type'        => 'textarea',
	) );

	// Cor Terracotta
	$wp_customize->add_setting( 'bellavip_color_terracotta', array(
		'default'           => '#df9a81',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bellavip_color_terracotta', array(
		'label'    => esc_html__( 'Cor Principal (Terracotta)', 'bella-vip' ),
		'section'  => 'bellavip_settings',
		'settings' => 'bellavip_color_terracotta',
	) ) );

	// Cor Nude
	$wp_customize->add_setting( 'bellavip_color_nude', array(
		'default'           => '#fdf7f3',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bellavip_color_nude', array(
		'label'    => esc_html__( 'Cor de Fundo (Nude)', 'bella-vip' ),
		'section'  => 'bellavip_settings',
		'settings' => 'bellavip_color_nude',
	) ) );

	// ----------------------------------------------------
	// PAINEL DA PÁGINA INICIAL
	// ----------------------------------------------------
	$wp_customize->add_panel( 'bellavip_homepage_panel', array(
		'title'       => esc_html__( 'Página Inicial Bella VIP', 'bella-vip' ),
		'description' => esc_html__( 'Personalize todas as seções da Landing Page.', 'bella-vip' ),
		'priority'    => 31,
	) );

	// SEÇÃO HERO
	$wp_customize->add_section( 'bellavip_home_hero', array(
		'title'    => esc_html__( 'Hero - Banner Principal', 'bella-vip' ),
		'panel'    => 'bellavip_homepage_panel',
		'priority' => 10,
	) );

	$wp_customize->add_setting( 'bellavip_hero_tagline', array(
		'default'           => 'Campo Comprido, Curitiba',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_hero_tagline', array(
		'label'   => esc_html__( 'Tagline / Localização', 'bella-vip' ),
		'section' => 'bellavip_home_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_hero_title', array(
		'default'           => 'Cabelo, beleza e bem-estar',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'bellavip_hero_title', array(
		'label'   => esc_html__( 'Título Principal (aceita HTML como <br>)', 'bella-vip' ),
		'section' => 'bellavip_home_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_hero_description', array(
		'default'           => 'Atendimento feminino e personalizado para quem deseja cuidar dos cabelos, relaxar e realçar a autoestima em um ambiente acolhedor.',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'bellavip_hero_description', array(
		'label'   => esc_html__( 'Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_hero',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_hero_btn_text', array(
		'default'           => 'Conhecer serviços',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_hero_btn_text', array(
		'label'   => esc_html__( 'Texto do Botão', 'bella-vip' ),
		'section' => 'bellavip_home_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_hero_btn_url', array(
		'default'           => '#servicos',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_hero_btn_url', array(
		'label'   => esc_html__( 'Link do Botão', 'bella-vip' ),
		'section' => 'bellavip_home_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_hero_image', array(
		'default'           => get_template_directory_uri() . '/assets/images/placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_hero_image', array(
		'label'   => esc_html__( 'Imagem Lateral', 'bella-vip' ),
		'section' => 'bellavip_home_hero',
	) ) );


	// SEÇÃO SERVIÇOS
	$wp_customize->add_section( 'bellavip_home_services', array(
		'title'    => esc_html__( 'Serviços', 'bella-vip' ),
		'panel'    => 'bellavip_homepage_panel',
		'priority' => 20,
	) );

	$wp_customize->add_setting( 'bellavip_services_title', array(
		'default'           => 'Nossos Serviços',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_services_title', array(
		'label'   => esc_html__( 'Título da Seção', 'bella-vip' ),
		'section' => 'bellavip_home_services',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_services_subtitle', array(
		'default'           => 'Soluções completas de beleza e bem-estar, com atendimento exclusivo e foco em resultados reais.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_services_subtitle', array(
		'label'   => esc_html__( 'Subtítulo da Seção', 'bella-vip' ),
		'section' => 'bellavip_home_services',
		'type'    => 'textarea',
	) );

	// Card 1
	$wp_customize->add_setting( 'bellavip_service1_title', array(
		'default'           => 'Gloss Express',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_service1_title', array(
		'label'   => esc_html__( 'Serviço 1: Nome', 'bella-vip' ),
		'section' => 'bellavip_home_services',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_service1_desc', array(
		'default'           => 'Ideal para suavizar e disfarçar fios brancos, dar brilho intenso e renovar o visual sem aspecto de coloração pesada.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_service1_desc', array(
		'label'   => esc_html__( 'Serviço 1: Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_services',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_service1_image', array(
		'default'           => get_template_directory_uri() . '/assets/images/placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_service1_image', array(
		'label'   => esc_html__( 'Serviço 1: Imagem', 'bella-vip' ),
		'section' => 'bellavip_home_services',
	) ) );

	// Card 2
	$wp_customize->add_setting( 'bellavip_service2_title', array(
		'default'           => 'Cabelo',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_service2_title', array(
		'label'   => esc_html__( 'Serviço 2: Nome', 'bella-vip' ),
		'section' => 'bellavip_home_services',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_service2_desc', array(
		'default'           => 'Corte, escova, progressiva, tratamentos de hidratação profunda e finalização perfeita para o seu dia a dia.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_service2_desc', array(
		'label'   => esc_html__( 'Serviço 2: Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_services',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_service2_image', array(
		'default'           => get_template_directory_uri() . '/assets/images/placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_service2_image', array(
		'label'   => esc_html__( 'Serviço 2: Imagem', 'bella-vip' ),
		'section' => 'bellavip_home_services',
	) ) );

	// Card 3
	$wp_customize->add_setting( 'bellavip_service3_title', array(
		'default'           => 'Massagens',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_service3_title', array(
		'label'   => esc_html__( 'Serviço 3: Nome', 'bella-vip' ),
		'section' => 'bellavip_home_services',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_service3_desc', array(
		'default'           => 'Técnicas de relaxamento, bem-estar e alívio de tensões para você se desconectar e recarregar as energias.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_service3_desc', array(
		'label'   => esc_html__( 'Serviço 3: Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_services',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_service3_image', array(
		'default'           => get_template_directory_uri() . '/assets/images/placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_service3_image', array(
		'label'   => esc_html__( 'Serviço 3: Imagem', 'bella-vip' ),
		'section' => 'bellavip_home_services',
	) ) );


	// SEÇÃO GLOSS EXPRESS
	$wp_customize->add_section( 'bellavip_home_gloss', array(
		'title'    => esc_html__( 'Destaque: Gloss Express', 'bella-vip' ),
		'panel'    => 'bellavip_homepage_panel',
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'bellavip_gloss_tagline', array(
		'default'           => 'Destaque',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gloss_tagline', array(
		'label'   => esc_html__( 'Tagline / Selo', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_gloss_title', array(
		'default'           => 'Gloss Express: uma alternativa leve para suavizar fios brancos',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gloss_title', array(
		'label'   => esc_html__( 'Título de Destaque', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_gloss_description', array(
		'default'           => 'Para quem deseja suavizar os fios brancos sem partir para uma coloração pesada, o Gloss Express ajuda a renovar o visual, trazer brilho e manter um resultado mais natural e iluminado.',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'bellavip_gloss_description', array(
		'label'   => esc_html__( 'Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_gloss_feature1', array(
		'default'           => 'Menos agressivo que tinturas convencionais',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gloss_feature1', array(
		'label'   => esc_html__( 'Benefício 1', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_gloss_feature2', array(
		'default'           => 'Proporciona brilho espelhado',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gloss_feature2', array(
		'label'   => esc_html__( 'Benefício 2', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_gloss_feature3', array(
		'default'           => 'Manutenção mais fácil e espaçada',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gloss_feature3', array(
		'label'   => esc_html__( 'Benefício 3', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_gloss_btn_text', array(
		'default'           => 'Quero saber se serve para meu cabelo',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gloss_btn_text', array(
		'label'   => esc_html__( 'Texto do Botão', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_gloss_btn_url', array(
		'default'           => '#',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gloss_btn_url', array(
		'label'   => esc_html__( 'Link do Botão', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_gloss_image', array(
		'default'           => get_template_directory_uri() . '/assets/images/placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_gloss_image', array(
		'label'   => esc_html__( 'Imagem do Destaque', 'bella-vip' ),
		'section' => 'bellavip_home_gloss',
	) ) );


	// SEÇÃO SOBRE
	$wp_customize->add_section( 'bellavip_home_about', array(
		'title'    => esc_html__( 'Sobre o Espaço', 'bella-vip' ),
		'panel'    => 'bellavip_homepage_panel',
		'priority' => 40,
	) );

	$wp_customize->add_setting( 'bellavip_about_title', array(
		'default'           => 'Um espaço pensado para cuidar de você',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_about_title', array(
		'label'   => esc_html__( 'Título Principal', 'bella-vip' ),
		'section' => 'bellavip_home_about',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_about_description', array(
		'default'           => 'No Espaço Bella VIP, cada atendimento é feito com atenção, carinho e cuidado aos detalhes. Oferecemos serviços de cabelo, Gloss Express, massagens e cuidados de beleza para mulheres que desejam se sentir bem, bonitas e confiantes.',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'bellavip_about_description', array(
		'label'   => esc_html__( 'Descrição Principal', 'bella-vip' ),
		'section' => 'bellavip_home_about',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_about_image1', array(
		'default'           => get_template_directory_uri() . '/assets/images/placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_about_image1', array(
		'label'   => esc_html__( 'Imagem Decorativa 1', 'bella-vip' ),
		'section' => 'bellavip_home_about',
	) ) );

	$wp_customize->add_setting( 'bellavip_about_image2', array(
		'default'           => get_template_directory_uri() . '/assets/images/placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_about_image2', array(
		'label'   => esc_html__( 'Imagem Decorativa 2', 'bella-vip' ),
		'section' => 'bellavip_home_about',
	) ) );

	// Diferencial 1
	$wp_customize->add_setting( 'bellavip_about_feat1_title', array(
		'default'           => 'Profissionais Especializadas',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_about_feat1_title', array(
		'label'   => esc_html__( 'Diferencial 1: Título', 'bella-vip' ),
		'section' => 'bellavip_home_about',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_about_feat1_desc', array(
		'default'           => 'Equipe treinada para entender e realçar a sua beleza natural.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_about_feat1_desc', array(
		'label'   => esc_html__( 'Diferencial 1: Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_about',
		'type'    => 'textarea',
	) );

	// Diferencial 2
	$wp_customize->add_setting( 'bellavip_about_feat2_title', array(
		'default'           => 'Ambiente Acolhedor',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_about_feat2_title', array(
		'label'   => esc_html__( 'Diferencial 2: Título', 'bella-vip' ),
		'section' => 'bellavip_home_about',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_about_feat2_desc', array(
		'default'           => 'Um momento só seu. Tome um café, relaxe e esqueça a pressa do dia a dia.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_about_feat2_desc', array(
		'label'   => esc_html__( 'Diferencial 2: Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_about',
		'type'    => 'textarea',
	) );

	// Diferencial 3
	$wp_customize->add_setting( 'bellavip_about_feat3_title', array(
		'default'           => 'Produtos Premium',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_about_feat3_title', array(
		'label'   => esc_html__( 'Diferencial 3: Título', 'bella-vip' ),
		'section' => 'bellavip_home_about',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_about_feat3_desc', array(
		'default'           => 'Trabalhamos apenas com marcas renomadas para garantir a saúde dos seus fios e pele.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_about_feat3_desc', array(
		'label'   => esc_html__( 'Diferencial 3: Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_about',
		'type'    => 'textarea',
	) );


	// SEÇÃO GALERIA
	$wp_customize->add_section( 'bellavip_home_gallery', array(
		'title'    => esc_html__( 'Galeria', 'bella-vip' ),
		'panel'    => 'bellavip_homepage_panel',
		'priority' => 50,
	) );

	$wp_customize->add_setting( 'bellavip_gallery_title', array(
		'default'           => 'Resultados e momentos no Espaço Bella VIP',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gallery_title', array(
		'label'   => esc_html__( 'Título Principal', 'bella-vip' ),
		'section' => 'bellavip_home_gallery',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_gallery_subtitle', array(
		'default'           => 'Um pouquinho do nosso dia a dia e dos resultados que entregamos com tanto amor.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_gallery_subtitle', array(
		'label'   => esc_html__( 'Subtítulo', 'bella-vip' ),
		'section' => 'bellavip_home_gallery',
		'type'    => 'textarea',
	) );

	for ( $i = 1; $i <= 4; $i++ ) {
		$default_img = '';
		if ( $i == 1 ) {
			$default_img = get_template_directory_uri() . '/assets/images/placeholder.svg';
		} elseif ( $i == 2 ) {
			$default_img = get_template_directory_uri() . '/assets/images/placeholder.svg';
		} elseif ( $i == 3 ) {
			$default_img = get_template_directory_uri() . '/assets/images/placeholder.svg';
		} elseif ( $i == 4 ) {
			$default_img = get_template_directory_uri() . '/assets/images/placeholder.svg';
		}

		$wp_customize->add_setting( "bellavip_gallery_img{$i}", array(
			'default'           => $default_img,
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "bellavip_gallery_img{$i}", array(
			'label'   => sprintf( esc_html__( 'Imagem %d', 'bella-vip' ), $i ),
			'section' => 'bellavip_home_gallery',
		) ) );
	}


	// SEÇÃO DEPOIMENTOS
	$wp_customize->add_section( 'bellavip_home_testimonials', array(
		'title'    => esc_html__( 'Depoimentos', 'bella-vip' ),
		'panel'    => 'bellavip_homepage_panel',
		'priority' => 60,
	) );

	$wp_customize->add_setting( 'bellavip_testimonials_title', array(
		'default'           => 'Clientes que já viveram essa experiência',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_testimonials_title', array(
		'label'   => esc_html__( 'Título Principal', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'text',
	) );

	// Testemunho 1
	$wp_customize->add_setting( 'bellavip_test1_text', array(
		'default'           => '"O Gloss Express salvou meu cabelo! Escondeu meus brancos sem precisar de tinta pesada. O ambiente é maravilhoso, super relaxante."',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test1_text', array(
		'label'   => esc_html__( 'Depoimento 1: Texto', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'textarea',
	) );
	$wp_customize->add_setting( 'bellavip_test1_author', array(
		'default'           => 'Ana C.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test1_author', array(
		'label'   => esc_html__( 'Depoimento 1: Nome do Autor', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'text',
	) );
	$wp_customize->add_setting( 'bellavip_test1_info', array(
		'default'           => 'Cliente desde 2023',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test1_info', array(
		'label'   => esc_html__( 'Depoimento 1: Detalhe do Autor', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'text',
	) );
	$wp_customize->add_setting( 'bellavip_test1_avatar', array(
		'default'           => get_template_directory_uri() . '/assets/images/avatar-placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_test1_avatar', array(
		'label'   => esc_html__( 'Depoimento 1: Foto do Autor (100x100 recomendado)', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
	) ) );

	// Testemunho 2
	$wp_customize->add_setting( 'bellavip_test2_text', array(
		'default'           => '"Sempre faço meu corte e hidratação aqui. As meninas são super atenciosas e o resultado é sempre impecável. Recomendo muito!"',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test2_text', array(
		'label'   => esc_html__( 'Depoimento 2: Texto', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'textarea',
	) );
	$wp_customize->add_setting( 'bellavip_test2_author', array(
		'default'           => 'Juliana T.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test2_author', array(
		'label'   => esc_html__( 'Depoimento 2: Nome do Autor', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'text',
	) );
	$wp_customize->add_setting( 'bellavip_test2_info', array(
		'default'           => 'Cliente',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test2_info', array(
		'label'   => esc_html__( 'Depoimento 2: Detalhe do Autor', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'text',
	) );
	$wp_customize->add_setting( 'bellavip_test2_avatar', array(
		'default'           => get_template_directory_uri() . '/assets/images/avatar-placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_test2_avatar', array(
		'label'   => esc_html__( 'Depoimento 2: Foto do Autor', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
	) ) );

	// Testemunho 3
	$wp_customize->add_setting( 'bellavip_test3_text', array(
		'default'           => '"A massagem relaxante é o meu momento favorito do mês. É um espaço realmente acolhedor, você se sente em casa."',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test3_text', array(
		'label'   => esc_html__( 'Depoimento 3: Texto', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'textarea',
	) );
	$wp_customize->add_setting( 'bellavip_test3_author', array(
		'default'           => 'Mariana S.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test3_author', array(
		'label'   => esc_html__( 'Depoimento 3: Nome do Autor', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'text',
	) );
	$wp_customize->add_setting( 'bellavip_test3_info', array(
		'default'           => 'Cliente desde 2024',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_test3_info', array(
		'label'   => esc_html__( 'Depoimento 3: Detalhe do Autor', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
		'type'    => 'text',
	) );
	$wp_customize->add_setting( 'bellavip_test3_avatar', array(
		'default'           => get_template_directory_uri() . '/assets/images/avatar-placeholder.svg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bellavip_test3_avatar', array(
		'label'   => esc_html__( 'Depoimento 3: Foto do Autor', 'bella-vip' ),
		'section' => 'bellavip_home_testimonials',
	) ) );


	// SEÇÃO LOCALIZAÇÃO
	$wp_customize->add_section( 'bellavip_home_location', array(
		'title'    => esc_html__( 'Localização e Mapa', 'bella-vip' ),
		'panel'    => 'bellavip_homepage_panel',
		'priority' => 70,
	) );

	$wp_customize->add_setting( 'bellavip_location_title', array(
		'default'           => 'Estamos no Campo Comprido, em Curitiba',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_location_title', array(
		'label'   => esc_html__( 'Título Principal', 'bella-vip' ),
		'section' => 'bellavip_home_location',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_location_description', array(
		'default'           => 'Um espaço de fácil acesso, preparado com todo conforto para receber você. Agende seu horário e venha nos fazer uma visita.',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'bellavip_location_description', array(
		'label'   => esc_html__( 'Descrição', 'bella-vip' ),
		'section' => 'bellavip_home_location',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_location_name', array(
		'default'           => 'Espaço Bella VIP',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_location_name', array(
		'label'   => esc_html__( 'Nome do Espaço', 'bella-vip' ),
		'section' => 'bellavip_home_location',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_location_address', array(
		'default'           => 'R. Eduardo Sprada, 0000 - Campo Comprido<br>Curitiba - PR',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'bellavip_location_address', array(
		'label'       => esc_html__( 'Endereço Completo (aceita HTML)', 'bella-vip' ),
		'section'     => 'bellavip_home_location',
		'type'        => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_location_map_html', array(
		'default'           => '',
		'sanitize_callback' => 'bellavip_sanitize_iframe',
	) );
	$wp_customize->add_control( 'bellavip_location_map_html', array(
		'label'       => esc_html__( 'Iframe / HTML do Google Maps', 'bella-vip' ),
		'description' => esc_html__( 'Cole o código HTML (<iframe>) gerado pelo Google Maps aqui.', 'bella-vip' ),
		'section'     => 'bellavip_home_location',
		'type'        => 'textarea',
	) );

	$wp_customize->add_setting( 'bellavip_location_btn1_text', array(
		'default'           => 'Como chegar',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_location_btn1_text', array(
		'label'   => esc_html__( 'Botão 1: Texto', 'bella-vip' ),
		'section' => 'bellavip_home_location',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_location_btn1_url', array(
		'default'           => 'https://maps.google.com',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_location_btn1_url', array(
		'label'   => esc_html__( 'Botão 1: Link', 'bella-vip' ),
		'section' => 'bellavip_home_location',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'bellavip_location_btn2_text', array(
		'default'           => 'Agendar pelo WhatsApp',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bellavip_location_btn2_text', array(
		'label'   => esc_html__( 'Botão 2 (WhatsApp): Texto', 'bella-vip' ),
		'section' => 'bellavip_home_location',
		'type'    => 'text',
	) );

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

/**
 * Sanitiza o HTML do iframe do Google Maps, permitindo apenas tags <iframe> com atributos seguros.
 */
function bellavip_sanitize_iframe( $input ) {
	return wp_kses( $input, array(
		'iframe' => array(
			'src'             => true,
			'width'           => true,
			'height'          => true,
			'style'           => true,
			'allowfullscreen' => true,
			'loading'         => true,
			'referrerpolicy'  => true,
			'class'           => true,
			'frameborder'     => true,
		),
	) );
}
