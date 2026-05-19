<?php
/**
 * Template part: Testimonials Section
 *
 * @package Bella_VIP
 */

$testi_title = get_field('testimonials_title') ?: 'Clientes que já viveram essa experiência';

$fallback_testimonials = array(
    array(
        'text' => '"O Gloss Express salvou meu cabelo! Escondeu meus brancos sem precisar de tinta pesada. O ambiente é maravilhoso, super relaxante."',
        'author' => 'Ana C.',
        'role' => 'Cliente desde 2023',
        'avatar' => 'https://ui-avatars.com/api/?name=Ana+C&background=f4e9e5&color=d18c72'
    ),
    array(
        'text' => '"Sempre faço meu corte e hidratação aqui. As meninas são super atenciosas e o resultado é sempre impecável. Recomendo muito!"',
        'author' => 'Juliana T.',
        'role' => 'Cliente',
        'avatar' => 'https://ui-avatars.com/api/?name=Juliana+T&background=f4e9e5&color=d18c72'
    ),
    array(
        'text' => '"A massagem relaxante é o meu momento favorito do mês. É um espaço realmente acolhedor, você se sente em casa."',
        'author' => 'Mariana S.',
        'role' => 'Cliente desde 2024',
        'avatar' => 'https://ui-avatars.com/api/?name=Mariana+S&background=f4e9e5&color=d18c72'
    )
);
?>

<section class="py-24 bg-bella-nude/30 border-y border-bella-nude relative overflow-hidden">
    <!-- Decorative background element -->
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-bella-rose opacity-20 rounded-full blur-3xl mix-blend-multiply"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-4xl md:text-5xl font-serif text-bella-text mb-4">
            <?php echo esc_html($testi_title); ?>
        </h2>
        <div class="w-24 h-1 bg-bella-terracotta mx-auto mt-6 rounded-full opacity-50"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php 
            if( have_rows('testimonials_list') ): 
                while( have_rows('testimonials_list') ) : the_row();
                    $text = get_sub_field('text');
                    $author = get_sub_field('author');
                    $role = get_sub_field('role');
                    // Dynamic avatar based on initials if real image is not provided
                    $initials_name = urlencode($author);
                    $avatar = "https://ui-avatars.com/api/?name={$initials_name}&background=f4e9e5&color=d18c72";
            ?>
            <div class="bg-white/80 backdrop-blur-sm p-10 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 relative flex flex-col h-full border border-white group hover:-translate-y-2">
                <!-- Giant Quote Icon Background -->
                <div class="absolute top-6 right-8 text-bella-terracotta opacity-[0.03] group-hover:opacity-[0.06] transition-opacity duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                
                <div class="flex text-bella-terracotta mb-6 relative z-10">
                    <!-- 5 Stars -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                
                <div class="text-bella-text/80 text-lg italic mb-10 flex-grow relative z-10 leading-relaxed font-light">
                    <?php echo wp_kses_post($text); ?>
                </div>
                
                <div class="flex items-center mt-auto border-t border-bella-nude pt-6 relative z-10">
                    <img src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($author); ?>" class="w-12 h-12 rounded-full mr-4 border-2 border-white shadow-sm">
                    <div>
                        <p class="font-serif text-bella-text text-xl"><?php echo esc_html($author); ?></p>
                        <p class="text-sm font-medium text-bella-terracotta tracking-wide uppercase mt-0.5"><?php echo esc_html($role); ?></p>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
            else :
                foreach($fallback_testimonials as $testi):
            ?>
            <div class="bg-white/80 backdrop-blur-sm p-10 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 relative flex flex-col h-full border border-white group hover:-translate-y-2">
                <!-- Giant Quote Icon Background -->
                <div class="absolute top-6 right-8 text-bella-terracotta opacity-[0.03] group-hover:opacity-[0.06] transition-opacity duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                
                <div class="flex text-bella-terracotta mb-6 relative z-10">
                    <!-- 5 Stars -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star drop-shadow-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                
                <div class="text-bella-text/80 text-lg italic mb-10 flex-grow relative z-10 leading-relaxed font-light">
                    <?php echo wp_kses_post($testi['text']); ?>
                </div>
                
                <div class="flex items-center mt-auto border-t border-bella-nude pt-6 relative z-10">
                    <img src="<?php echo esc_url($testi['avatar']); ?>" alt="<?php echo esc_attr($testi['author']); ?>" class="w-12 h-12 rounded-full mr-4 border-2 border-white shadow-sm">
                    <div>
                        <p class="font-serif text-bella-text text-xl"><?php echo esc_html($testi['author']); ?></p>
                        <p class="text-sm font-medium text-bella-terracotta tracking-wide uppercase mt-0.5"><?php echo esc_html($testi['role']); ?></p>
                    </div>
                </div>
            </div>
            <?php 
                endforeach;
            endif; 
            ?>

        </div>
    </div>
</section>
