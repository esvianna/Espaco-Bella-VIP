<?php
/**
 * Template part: Hero Section
 *
 * @package Bella_VIP
 */

$hero_tag = get_field('hero_tag') ?: 'Campo Comprido, Curitiba';
$hero_title = get_field('hero_title') ?: 'Cabelo, beleza e <br /><span class="text-bella-terracotta italic">bem-estar</span>';
$hero_desc = get_field('hero_description') ?: 'Atendimento feminino e personalizado para quem deseja cuidar dos cabelos, relaxar e realçar a autoestima em um ambiente acolhedor.';
$hero_image = get_field('hero_image') ?: 'https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80';

// Global WhatsApp
$front_page_id = get_option( 'page_on_front' );
$whatsapp_number = get_field( 'global_whatsapp_number', $front_page_id ) ?: '5541999999999';
$whatsapp_url = 'https://wa.me/' . esc_attr( preg_replace( '/[^0-9]/', '', $whatsapp_number ) );
?>

<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background with delicate gradient/pattern -->
    <div class="absolute inset-0 bg-bella-nude opacity-40 z-0"></div>
    <div class="absolute right-0 top-0 w-1/2 h-full bg-bella-rose opacity-10 rounded-l-full blur-3xl transform translate-x-1/3 -translate-y-1/4"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
        
        <!-- Text Content with Entrance Animations -->
        <div class="max-w-2xl">
            <span class="animate-fade-in-up inline-block py-1.5 px-4 rounded-full bg-white text-bella-terracotta text-xs tracking-wider uppercase font-bold mb-6 shadow-sm border border-bella-rose/30">
            <?php echo esc_html($hero_tag); ?>
            </span>
            
            <h1 class="animate-fade-in-up delay-100 text-4xl md:text-5xl lg:text-6xl font-serif text-bella-text leading-tight mb-6">
            <?php echo wp_kses_post($hero_title); ?>
            </h1>
            
            <p class="animate-fade-in-up delay-200 text-lg md:text-xl text-bella-subtext mb-10 leading-relaxed max-w-lg font-light">
            <?php echo wp_kses_post($hero_desc); ?>
            </p>
            
            <div class="animate-fade-in-up delay-300 flex flex-col sm:flex-row gap-5">
            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary py-3 px-8 group shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle mr-2 h-5 w-5 group-hover:scale-110 transition-transform"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
                Agendar pelo WhatsApp
            </a>
            <a href="#servicos" class="btn-secondary py-3 px-8 hover:-translate-y-1 hover:bg-white transition-all duration-300">
                Conhecer serviços
            </a>
            </div>
        </div>

        <!-- Image with Entrance Animation -->
        <div class="relative mt-12 lg:mt-0 animate-fade-in-up delay-200">
            <div class="absolute inset-0 bg-bella-terracotta rounded-t-full rounded-b-3xl transform rotate-3 scale-105 opacity-10 z-0"></div>
            <div class="relative rounded-t-full rounded-b-3xl overflow-hidden shadow-2xl z-10 border-8 border-white transition-transform duration-700 hover:scale-[1.02]">
            <img 
                src="<?php echo esc_url($hero_image); ?>" 
                alt="<?php esc_attr_e( 'Ambiente Espaço Bella VIP', 'bellavip' ); ?>" 
                class="w-full h-auto object-cover aspect-[4/5]"
                loading="eager"
            />
            </div>
            
            <!-- Decorative element Premium -->
            <div class="absolute -bottom-6 -left-6 bg-white/90 backdrop-blur-md p-5 rounded-2xl shadow-xl z-20 flex items-center gap-4 border border-bella-nude">
            <div class="flex -space-x-3">
                <img class="inline-block h-10 w-10 rounded-full ring-4 ring-white object-cover" src="https://i.pravatar.cc/100?img=47" alt="Cliente"/>
                <img class="inline-block h-10 w-10 rounded-full ring-4 ring-white object-cover" src="https://i.pravatar.cc/100?img=44" alt="Cliente"/>
                <img class="inline-block h-10 w-10 rounded-full ring-4 ring-white object-cover" src="https://i.pravatar.cc/100?img=32" alt="Cliente"/>
            </div>
            <p class="text-sm font-medium text-bella-text leading-tight"><span class="text-bella-terracotta font-black text-lg block">+500</span> mulheres<br/>atendidas</p>
            </div>
        </div>
        
        </div>
    </div>
</section>
