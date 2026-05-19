<?php
/**
 * Template part: Location Section
 *
 * @package Bella_VIP
 */

$loc_title = get_field('location_title') ?: 'Estamos no Campo Comprido, em Curitiba';
$loc_desc = get_field('location_description') ?: 'Um espaço de fácil acesso, preparado com todo conforto para receber você. Agende seu horário e venha nos fazer uma visita.';
$loc_address = get_field('location_address') ?: 'R. Eduardo Sprada, 0000 - Campo Comprido<br>Curitiba - PR';
$loc_iframe = get_field('location_map_iframe');

// Global WhatsApp
$front_page_id = get_option( 'page_on_front' );
$whatsapp_number = get_field( 'global_whatsapp_number', $front_page_id ) ?: '5541999999999';
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );
?>

<section id="localizacao" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
        
        <div>
            <h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-6">
            <?php echo esc_html($loc_title); ?>
            </h2>
            <div class="text-lg text-bella-subtext mb-8">
            <?php echo wp_kses_post($loc_desc); ?>
            </div>
            
            <div class="flex items-start mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-bella-terracotta mt-1 mr-3 flex-shrink-0"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
            <div>
                <p class="font-medium text-bella-text text-lg">Espaço Bella VIP</p>
                <div class="text-bella-subtext"><?php echo wp_kses_post($loc_address); ?></div>
            </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
            <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer" class="btn-secondary">
                Como chegar
            </a>
            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary group">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle mr-2 h-5 w-5 group-hover:scale-110 transition-transform"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
                Agendar pelo WhatsApp
            </a>
            </div>
        </div>

        <!-- Map -->
        <div class="bg-bella-nude rounded-2xl overflow-hidden h-[400px] shadow-inner relative border border-bella-nude flex items-center justify-center">
            <?php if($loc_iframe): ?>
                <div class="w-full h-full [&>iframe]:w-full [&>iframe]:h-full">
                    <?php echo $loc_iframe; // Renderiza o iframe puro ?>
                </div>
            <?php else: ?>
                <div class="text-center p-6 bg-white/80 backdrop-blur-sm rounded-xl m-4 border border-bella-rose/20">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin mx-auto text-bella-terracotta mb-2"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                <p class="text-bella-text font-medium mb-1">Mapa do Google</p>
                <p class="text-sm text-bella-subtext">Edite a página inicial e cole o iframe do Google Maps no campo ACF correspondente.</p>
                </div>
            <?php endif; ?>
        </div>

        </div>
    </div>
</section>
