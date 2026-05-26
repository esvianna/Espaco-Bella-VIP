<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>


</head>

<body <?php body_class( 'bg-bella-white text-bella-text font-sans antialiased' ); ?>>
<?php wp_body_open(); ?>

<?php
$whatsapp_number = get_theme_mod( 'bellavip_whatsapp_number', '5541999999999' );
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );
?>

<div id="page" class="site overflow-x-hidden">
	<a class="skip-link screen-reader-text sr-only" href="#primary"><?php esc_html_e( 'Skip to content', 'bella-vip' ); ?></a>

    <!-- Header original sem background, ganha a classe glass-header via JS no scroll -->
	<header id="masthead" class="fixed w-full z-50 transition-all duration-500 py-4 lg:py-6" style="z-index: 50;">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
          
          <div class="flex-shrink-0 flex items-center">
            <?php
            if ( has_custom_logo() ) {
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( is_array( $logo ) ) {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home" class="block transition-transform duration-300 hover:scale-105">';
                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" style="max-height: 90px; width: auto; object-fit: contain;">';
                    echo '</a>';
                } else {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="font-serif text-2xl lg:text-3xl font-bold text-bella-text tracking-wide transition-colors hover:text-bella-terracotta">';
                    bloginfo( 'name' );
                    echo '</a>';
                }
            } else {
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="font-serif text-2xl lg:text-3xl font-bold text-bella-text tracking-wide transition-colors hover:text-bella-terracotta">';
                bloginfo( 'name' );
                echo '</a>';
            }
            ?>
          </div>

          <nav id="site-navigation" class="hidden md:flex space-x-8 items-center">
            <a href="#servicos" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors"><?php esc_html_e( 'Serviços', 'bella-vip' ); ?></a>
            <a href="#gloss-express" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors"><?php esc_html_e( 'Gloss Express', 'bella-vip' ); ?></a>
            <a href="#sobre" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors"><?php esc_html_e( 'Sobre', 'bella-vip' ); ?></a>
            <a href="#localizacao" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors"><?php esc_html_e( 'Localização', 'bella-vip' ); ?></a>
          </nav>

          <div class="hidden md:flex">
            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary py-2.5 px-6 text-sm shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
              <?php esc_html_e( 'Agendar Atendimento', 'bella-vip' ); ?>
            </a>
          </div>

          <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-bella-text hover:text-bella-terracotta transition-transform" aria-label="Abrir Menu">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Menu (Full Screen Overlay Style) -->
      <div id="mobile-menu" class="transition-opacity duration-300" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.98); z-index: 100; opacity: 0; pointer-events: none; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          
          <button id="mobile-menu-close" class="text-bella-text hover:text-bella-terracotta p-2" aria-label="Fechar Menu" style="position: absolute; top: 1.5rem; right: 1.5rem; z-index: 110;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
          </button>
          
          <div style="display: flex; flex-direction: column; align-items: center; width: 100%; gap: 2rem; padding: 0 1.5rem;">
            <a href="#servicos" class="mobile-link text-2xl font-serif text-bella-text hover:text-bella-terracotta transition-colors"><?php esc_html_e( 'Serviços', 'bella-vip' ); ?></a>
            <a href="#gloss-express" class="mobile-link text-2xl font-serif text-bella-text hover:text-bella-terracotta transition-colors"><?php esc_html_e( 'Gloss Express', 'bella-vip' ); ?></a>
            <a href="#sobre" class="mobile-link text-2xl font-serif text-bella-text hover:text-bella-terracotta transition-colors"><?php esc_html_e( 'Sobre', 'bella-vip' ); ?></a>
            <a href="#localizacao" class="mobile-link text-2xl font-serif text-bella-text hover:text-bella-terracotta transition-colors"><?php esc_html_e( 'Localização', 'bella-vip' ); ?></a>
            
            <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid rgba(223, 192, 178, 0.3); width: 100%; max-width: 300px; display: flex; justify-content: center;">
              <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full text-center py-4 text-lg" style="width: 100%; text-align: center;">
                <?php esc_html_e( 'Agendar pelo WhatsApp', 'bella-vip' ); ?>
              </a>
            </div>
          </div>
      </div>
	</header><!-- #masthead -->


