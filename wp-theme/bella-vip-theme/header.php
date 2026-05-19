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
// Obter ID da página inicial para puxar o campo global
$front_page_id = get_option( 'page_on_front' );
$whatsapp_number = get_field( 'global_whatsapp_number', $front_page_id ) ?: '5541999999999';
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text sr-only" href="#primary"><?php esc_html_e( 'Skip to content', 'bellavip' ); ?></a>

	<header id="masthead" class="fixed w-full z-50 transition-all duration-300 bg-transparent py-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
          
          <div class="flex-shrink-0 flex items-center">
            <?php
            if ( has_custom_logo() ) {
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="h-12 w-auto object-contain max-w-[200px]">';
                echo '</a>';
            } else {
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="font-serif text-2xl font-bold text-bella-text tracking-wide">';
                bloginfo( 'name' );
                echo '</a>';
            }
            ?>
          </div>

          <nav id="site-navigation" class="hidden md:flex space-x-8">
            <a href="#servicos" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors">Serviços</a>
            <a href="#gloss-express" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors">Gloss Express</a>
            <a href="#sobre" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors">Sobre</a>
            <a href="#localizacao" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors">Localização</a>
          </nav>

          <div class="hidden md:flex">
            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary py-2 px-5 text-sm">
              Agendar Atendimento
            </a>
          </div>

          <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-bella-text hover:text-bella-terracotta focus:outline-none" aria-label="Abrir Menu">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Menu (Hidden by default) -->
      <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-bella-nude absolute w-full transition-all">
          <div class="px-4 pt-2 pb-6 space-y-1 shadow-lg">
            <a href="#servicos" class="mobile-link block px-3 py-3 text-base font-medium text-bella-text hover:bg-bella-nude rounded-md">Serviços</a>
            <a href="#gloss-express" class="mobile-link block px-3 py-3 text-base font-medium text-bella-text hover:bg-bella-nude rounded-md">Gloss Express</a>
            <a href="#sobre" class="mobile-link block px-3 py-3 text-base font-medium text-bella-text hover:bg-bella-nude rounded-md">Sobre</a>
            <a href="#localizacao" class="mobile-link block px-3 py-3 text-base font-medium text-bella-text hover:bg-bella-nude rounded-md">Localização</a>
            <div class="mt-4 pt-4 border-t border-bella-nude">
              <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full mt-2">
                Agendar pelo WhatsApp
              </a>
            </div>
          </div>
      </div>
	</header><!-- #masthead -->
