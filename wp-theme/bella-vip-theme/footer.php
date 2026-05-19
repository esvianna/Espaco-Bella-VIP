<?php
/**
 * O template para exibir o rodapé
 *
 * @package Bella_VIP
 */

$front_page_id = get_option( 'page_on_front' );
$whatsapp_number = get_field( 'global_whatsapp_number', $front_page_id ) ?: '5541999999999';
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );

// Fallback de textos do rodapé caso queira adicionar ao ACF no futuro, 
// por enquanto mantendo fixos conforme design aprovado, atualizando apenas o WhatsApp
?>

	<footer id="colophon" class="bg-bella-nude/50 pt-16 pb-8 border-t border-bella-rose/20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-12 mb-12 text-center md:text-left">
          
          <div>
            <?php
            if ( has_custom_logo() ) {
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home" class="mb-4 inline-block">';
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" style="max-height: 110px; width: auto; object-fit: contain;">';
                echo '</a>';
            } else {
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="font-serif text-2xl font-bold text-bella-text tracking-wide mb-4 inline-block">';
                bloginfo( 'name' );
                echo '</a>';
            }
            ?>
            <p class="text-bella-subtext">
              Cuidado, beleza e bem-estar para mulheres no coração do Campo Comprido.
            </p>
          </div>

          <div>
            <h4 class="font-serif text-lg text-bella-text mb-4">Contato</h4>
            <p class="text-bella-subtext mb-2">WhatsApp: <?php echo esc_html( preg_replace('/^55/', '', $whatsapp_number) ); ?></p>
            <p class="text-bella-subtext mb-4">R. Eduardo Sprada, 0000 - Curitiba</p>
            <div class="flex justify-center md:justify-start space-x-4 text-bella-terracotta">
              <a href="#" class="hover:text-[#c27a5d] transition-colors font-medium">Instagram</a>
              <a href="#" class="hover:text-[#c27a5d] transition-colors font-medium">Facebook</a>
            </div>
          </div>

          <div>
            <h4 class="font-serif text-lg text-bella-text mb-4">Pronta para cuidar de você?</h4>
            <p class="text-bella-subtext mb-4">
              Fale conosco pelo WhatsApp e encontre o melhor horário para seu atendimento.
            </p>
            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full md:w-auto">
              Agendar atendimento
            </a>
          </div>

        </div>

        <div class="pt-8 border-t border-bella-rose/20 text-center text-sm text-bella-subtext flex flex-col md:flex-row justify-between items-center">
          <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. Todos os direitos reservados.</p>
          <p class="mt-2 md:mt-0">Desenvolvido com carinho para Campo Comprido.</p>
        </div>
      </div>
	</footer><!-- #colophon -->

    <!-- Floating WhatsApp -->
    <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" id="floating-whatsapp" class="fixed bottom-6 right-6 z-50 p-4 rounded-full bg-[#25D366] text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center opacity-0 translate-y-10 pointer-events-none" aria-label="Agendar pelo WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
        <span class="absolute -top-10 right-0 bg-white text-bella-text text-sm py-1 px-3 rounded-lg shadow-md whitespace-nowrap opacity-0 transition-opacity duration-300 hover:opacity-100 peer-hover:opacity-100">
            Agende seu horário!
        </span>
    </a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
