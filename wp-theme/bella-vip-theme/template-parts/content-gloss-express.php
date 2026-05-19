<?php
/**
 * Template part: Gloss Express Section
 *
 * @package Bella_VIP
 */

$gloss_tag = get_field('gloss_tag') ?: 'Destaque';
$gloss_title = get_field('gloss_title') ?: 'Gloss Express: uma alternativa leve para suavizar fios brancos';
$gloss_desc = get_field('gloss_description') ?: 'Para quem deseja suavizar os fios brancos sem partir para uma coloração pesada, o Gloss Express ajuda a renovar o visual, trazer brilho e manter um resultado mais natural e iluminado.';
$gloss_image = get_field('gloss_image') ?: 'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80';

// Global WhatsApp
$front_page_id = get_option( 'page_on_front' );
$whatsapp_number = get_field( 'global_whatsapp_number', $front_page_id ) ?: '5541999999999';
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );

$fallback_bullets = array(
    'Menos agressivo que tinturas convencionais',
    'Proporciona brilho espelhado',
    'Manutenção mais fácil e espaçada'
);
?>

<section id="gloss-express" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-bella-rose/10 rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden border border-bella-rose/20">
        
        <!-- Decorative shapes -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full mix-blend-overlay filter blur-3xl opacity-50 transform translate-x-1/2 -translate-y-1/2"></div>
        
        <div class="grid lg:grid-cols-2 gap-12 items-center relative z-10">
            <div>
            <span class="text-bella-terracotta font-bold tracking-wider uppercase text-sm mb-2 block"><?php echo esc_html($gloss_tag); ?></span>
            <h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-6">
                <?php echo esc_html($gloss_title); ?>
            </h2>
            <div class="text-lg text-bella-subtext mb-8">
                <?php echo wp_kses_post($gloss_desc); ?>
            </div>
            
            <ul class="space-y-4 mb-8">
                <?php 
                $bullets = [];
                for($i = 1; $i <= 4; $i++) {
                    $b = get_field('gloss_bullet_'.$i);
                    if($b) $bullets[] = $b;
                }

                if(empty($bullets)) {
                    $bullets = $fallback_bullets;
                }

                foreach($bullets as $bullet):
                ?>
                <li class="flex items-center text-bella-text">
                    <span class="w-1.5 h-1.5 bg-bella-terracotta rounded-full mr-3"></span>
                    <?php echo esc_html($bullet); ?>
                </li>
                <?php endforeach; ?>
            </ul>

            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full sm:w-auto">
                Quero saber se serve para meu cabelo
            </a>
            </div>
            
            <div class="relative">
            <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-lg border-4 border-white">
                <img 
                src="<?php echo esc_url($gloss_image); ?>" 
                alt="<?php echo esc_attr($gloss_title); ?>" 
                class="w-full h-full object-cover"
                loading="lazy"
                />
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
