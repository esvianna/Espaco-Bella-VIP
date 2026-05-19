<?php
/**
 * Template part: Services Section
 *
 * @package Bella_VIP
 */

$services_title = get_field('services_title') ?: 'Nossos Serviços';
$services_desc = get_field('services_description') ?: 'Soluções completas de beleza e bem-estar, com atendimento exclusivo e foco em resultados reais.';

// Global WhatsApp
$front_page_id = get_option( 'page_on_front' );
$whatsapp_number = get_field( 'global_whatsapp_number', $front_page_id ) ?: '5541999999999';
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );

// Fallback Services
$fallback_services = array(
    array(
        'title' => 'Gloss Express',
        'description' => 'Ideal para suavizar e disfarçar fios brancos, dar brilho intenso e renovar o visual sem aspecto de coloração pesada.',
        'image' => 'https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>'
    ),
    array(
        'title' => 'Cabelo',
        'description' => 'Corte, escova, progressiva, tratamentos de hidratação profunda e finalização perfeita para o seu dia a dia.',
        'image' => 'https://images.unsplash.com/photo-1562322140-8baeececf3df?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scissors"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" x2="8.12" y1="4" y2="15.88"/><line x1="14.47" x2="20" y1="14.48" y2="20"/><line x1="8.12" x2="12" y1="8.12" y2="12"/></svg>'
    ),
    array(
        'title' => 'Massagens',
        'description' => 'Técnicas de relaxamento, bem-estar e alívio de tensões para você se desconectar e recarregar as energias.',
        'image' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flower-2"><path d="M12 5a3 3 0 1 1 3 3m-3-3a3 3 0 1 0-3 3m3-3v1M9 8a3 3 0 1 0 3 3M9 8h1m5-1a3 3 0 1 1-3 3m3-3h-1m-5 5a3 3 0 1 0 3 3m-3-3v-1m5 1a3 3 0 1 1-3 3m3-3v-1m-3 3v-1"/></svg>'
    )
);
?>

<section id="servicos" class="py-24 bg-bella-nude/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-4">
            <?php echo esc_html($services_title); ?>
        </h2>
        <div class="text-lg text-bella-subtext">
            <?php echo wp_kses_post($services_desc); ?>
        </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php 
            if( have_rows('services_list') ): 
                while( have_rows('services_list') ) : the_row();
                    $title = get_sub_field('title');
                    $desc = get_sub_field('description');
                    $image = get_sub_field('image');
                    // Generic icon if added dynamically
                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>';
            ?>
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-transparent hover:border-bella-rose/30">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
                    <img 
                    src="<?php echo esc_url($image); ?>" 
                    alt="<?php echo esc_attr($title); ?>" 
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                    loading="lazy"
                    />
                    <div class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-sm p-2 rounded-full text-bella-terracotta shadow-sm">
                        <?php echo $icon; ?>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-serif text-bella-text mb-3"><?php echo esc_html($title); ?></h3>
                    <div class="text-bella-subtext mb-6 line-clamp-3"><?php echo wp_kses_post($desc); ?></div>
                    <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="text-bella-terracotta font-medium flex items-center hover:text-[#c27a5d] transition-colors">
                    Agendar horário <span class="ml-2">→</span>
                    </a>
                </div>
            </div>
            <?php 
                endwhile;
            else :
                // Render fallback
                foreach($fallback_services as $service) :
            ?>
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-transparent hover:border-bella-rose/30">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
                    <img 
                    src="<?php echo esc_url($service['image']); ?>" 
                    alt="<?php echo esc_attr($service['title']); ?>" 
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                    loading="lazy"
                    />
                    <div class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-sm p-2 rounded-full text-bella-terracotta shadow-sm">
                        <?php echo $service['icon']; ?>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-serif text-bella-text mb-3"><?php echo esc_html($service['title']); ?></h3>
                    <p class="text-bella-subtext mb-6 line-clamp-3"><?php echo esc_html($service['description']); ?></p>
                    <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="text-bella-terracotta font-medium flex items-center hover:text-[#c27a5d] transition-colors">
                    Agendar horário <span class="ml-2">→</span>
                    </a>
                </div>
            </div>
            <?php 
                endforeach;
            endif; 
            ?>

        </div>
    </div>
</section>
