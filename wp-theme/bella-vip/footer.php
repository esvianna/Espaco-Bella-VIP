<?php
/**
 * O template para exibir o rodapé
 *
 * @package Bella_VIP
 */

$whatsapp_number = get_theme_mod( 'bellavip_whatsapp_number', '5541999999999' );
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );

// Pegar o endereço da página inicial para exibir no rodapé (Via Customizer agora)
$address = get_theme_mod('bellavip_address', 'R. Eduardo Sprada, 0000 - Campo Comprido<br>Curitiba - PR');
?>

	<footer id="colophon" class="bg-bella-nude/50 pt-16 pb-8 border-t border-bella-rose/20 relative z-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-12 mb-12 text-center md:text-left">
          
          <div>
            <?php
            if ( has_custom_logo() ) {
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home" class="mb-4 inline-block hover:opacity-80 transition-opacity">';
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" style="max-height: 110px; width: auto; object-fit: contain;">';
                echo '</a>';
            } else {
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="font-serif text-2xl font-bold text-bella-text tracking-wide mb-4 inline-block hover:text-bella-terracotta transition-colors">';
                bloginfo( 'name' );
                echo '</a>';
            }
            ?>
            <p class="text-bella-subtext">
              <?php esc_html_e( 'Cuidado, beleza e bem-estar para mulheres no coração do Campo Comprido.', 'bella-vip' ); ?>
            </p>
          </div>

          <div>
            <h4 class="font-serif text-lg text-bella-text mb-4"><?php esc_html_e( 'Contato', 'bella-vip' ); ?></h4>
            <p class="text-bella-subtext mb-2">WhatsApp: <?php echo esc_html( preg_replace('/^55/', '', $whatsapp_number) ); ?></p>
            <div class="text-bella-subtext mb-4">
                <?php echo wp_kses_post( $address ); ?>
            </div>
            <div class="flex justify-center md:justify-start space-x-4 text-bella-terracotta">
              <a href="#" class="hover:text-[#c27a5d] transition-colors font-medium">Instagram</a>
              <a href="#" class="hover:text-[#c27a5d] transition-colors font-medium">Facebook</a>
            </div>
          </div>

          <div>
            <h4 class="font-serif text-lg text-bella-text mb-4"><?php esc_html_e( 'Pronta para cuidar de você?', 'bella-vip' ); ?></h4>
            <p class="text-bella-subtext mb-4">
              <?php esc_html_e( 'Fale conosco pelo WhatsApp e encontre o melhor horário para seu atendimento.', 'bella-vip' ); ?>
            </p>
            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full md:w-auto shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
              <?php esc_html_e( 'Agendar atendimento', 'bella-vip' ); ?>
            </a>
          </div>

        </div>

        <div class="pt-8 border-t border-bella-rose/20 text-center text-sm text-bella-subtext flex flex-col md:flex-row justify-between items-center">
          <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Todos os direitos reservados.', 'bella-vip' ); ?></p>
          <p class="mt-2 md:mt-0">
            <?php 
            $developer_url = esc_url( 'https://vtis.com.br/' );
            $developer_link = sprintf(
              '<a href="%1$s" target="_blank" rel="noopener noreferrer" class="font-medium text-bella-terracotta hover:underline">%2$s</a>',
              $developer_url,
              'VTIS'
            );
            printf(
              wp_kses(
                /* translators: %s: developer link */
                __( 'Desenvolvido com carinho por %s.', 'bella-vip' ),
                array(
                  'a' => array(
                    'href'   => array(),
                    'target' => array(),
                    'rel'    => array(),
                    'class'  => array(),
                  ),
                )
              ),
              $developer_link
            ); 
            ?>
          </p>
        </div>
      </div>
	</footer><!-- #colophon -->

    <!-- Floating WhatsApp Premium UX -->
    <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" id="floating-whatsapp" class="fixed bottom-6 right-6 z-50 p-4 rounded-full bg-[#25D366] text-white shadow-[0_8px_30px_rgb(37,211,102,0.4)] hover:shadow-[0_8px_30px_rgb(37,211,102,0.6)] transition-all duration-300 transform hover:scale-110 flex items-center justify-center opacity-0 translate-y-10 pointer-events-none group" aria-label="Agendar pelo WhatsApp">
        
        <!-- Ícone com animação de pulse (heartbeat suave) -->
        <div class="relative">
            <div class="absolute inset-0 bg-white opacity-20 rounded-full animate-ping group-hover:animate-none"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle relative z-10"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
        </div>
        
        <!-- Tooltip que aparece após carregar e no hover -->
        <span class="absolute -top-12 right-0 bg-white text-bella-text text-sm py-2 px-4 rounded-xl shadow-lg border border-bella-nude whitespace-nowrap opacity-0 transition-opacity duration-500 group-hover:opacity-100 font-medium" id="whatsapp-tooltip">
            <?php esc_html_e( 'Agende seu horário!', 'bella-vip' ); ?>
            <!-- Triângulo da tooltip -->
            <div class="absolute right-6 top-full" style="width: 0; height: 0; border-left: 6px solid transparent; border-right: 6px solid transparent; border-top: 6px solid white;"></div>
        </span>
    </a>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
