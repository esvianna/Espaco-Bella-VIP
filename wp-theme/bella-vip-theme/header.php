<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <!-- Custom CSS for Premium Animations -->
    <style>
        /* Fade In Up Animation for Hero */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
            opacity: 0;
        }
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }
        
        /* Glassmorphism Header Class */
        .glass-header {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(223, 192, 178, 0.3); /* bella-rose */
        }
        
        /* Mobile Overlay Transition */
        #mobile-menu {
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
    </style>
</head>

<body <?php body_class( 'bg-bella-white text-bella-text font-sans antialiased' ); ?>>
<?php wp_body_open(); ?>

<?php
// Obter ID da página inicial para puxar o campo global
$front_page_id = get_option( 'page_on_front' );
$whatsapp_number = get_field( 'global_whatsapp_number', $front_page_id ) ?: '5541999999999';
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );
?>

<div id="page" class="site overflow-x-hidden">
	<a class="skip-link screen-reader-text sr-only" href="#primary"><?php esc_html_e( 'Skip to content', 'bellavip' ); ?></a>

    <!-- Header original sem background, ganha a classe glass-header via JS no scroll -->
	<header id="masthead" class="fixed w-full z-50 transition-all duration-500 py-4 lg:py-6" style="z-index: 50;">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
          
          <div class="flex-shrink-0 flex items-center">
            <?php
            if ( has_custom_logo() ) {
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home" class="block transition-transform duration-300 hover:scale-105">';
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" style="max-height: 90px; width: auto; object-fit: contain;">';
                echo '</a>';
            } else {
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="font-serif text-2xl lg:text-3xl font-bold text-bella-text tracking-wide transition-colors hover:text-bella-terracotta">';
                bloginfo( 'name' );
                echo '</a>';
            }
            ?>
          </div>

          <nav id="site-navigation" class="hidden md:flex space-x-8 items-center">
            <a href="#servicos" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors">Serviços</a>
            <a href="#gloss-express" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors">Gloss Express</a>
            <a href="#sobre" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors">Sobre</a>
            <a href="#localizacao" class="text-sm font-medium text-bella-subtext hover:text-bella-terracotta transition-colors">Localização</a>
          </nav>

          <div class="hidden md:flex">
            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary py-2.5 px-6 text-sm shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
              Agendar Atendimento
            </a>
          </div>

          <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-bella-text hover:text-bella-terracotta focus:outline-none transition-transform" aria-label="Abrir Menu">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Menu (Full Screen Overlay Style) -->
      <div id="mobile-menu" class="transition-opacity duration-300" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.98); z-index: 100; opacity: 0; pointer-events: none; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          
          <button id="mobile-menu-close" class="text-bella-text hover:text-bella-terracotta focus:outline-none p-2" aria-label="Fechar Menu" style="position: absolute; top: 1.5rem; right: 1.5rem; z-index: 110;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
          </button>
          
          <div style="display: flex; flex-direction: column; align-items: center; width: 100%; gap: 2rem; padding: 0 1.5rem;">
            <a href="#servicos" class="mobile-link text-2xl font-serif text-bella-text hover:text-bella-terracotta transition-colors">Serviços</a>
            <a href="#gloss-express" class="mobile-link text-2xl font-serif text-bella-text hover:text-bella-terracotta transition-colors">Gloss Express</a>
            <a href="#sobre" class="mobile-link text-2xl font-serif text-bella-text hover:text-bella-terracotta transition-colors">Sobre</a>
            <a href="#localizacao" class="mobile-link text-2xl font-serif text-bella-text hover:text-bella-terracotta transition-colors">Localização</a>
            
            <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid rgba(223, 192, 178, 0.3); width: 100%; max-width: 300px; display: flex; justify-content: center;">
              <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full text-center py-4 text-lg" style="width: 100%; text-align: center;">
                Agendar pelo WhatsApp
              </a>
            </div>
          </div>
      </div>
	</header><!-- #masthead -->

    <!-- Script for Sticky Header & Mobile Menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.getElementById('masthead');
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileClose = document.getElementById('mobile-menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');
            
            // Glassmorphism on scroll
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('glass-header');
                    header.classList.replace('py-6', 'py-3');
                } else {
                    header.classList.remove('glass-header');
                    header.classList.replace('py-3', 'py-6');
                }
            });

            // Mobile Menu Toggle
            let menuOpen = false;
            function toggleMenu(e) {
                if(e) e.preventDefault();
                menuOpen = !menuOpen;
                if(menuOpen) {
                    mobileMenu.style.opacity = '1';
                    mobileMenu.style.pointerEvents = 'auto';
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                } else {
                    mobileMenu.style.opacity = '0';
                    mobileMenu.style.pointerEvents = 'none';
                    document.body.style.overflow = '';
                }
            }

            if(mobileBtn) mobileBtn.addEventListener('click', toggleMenu);
            if(mobileClose) mobileClose.addEventListener('click', toggleMenu);
            
            mobileLinks.forEach(link => {
                link.addEventListener('click', toggleMenu);
            });
        });
    </script>
