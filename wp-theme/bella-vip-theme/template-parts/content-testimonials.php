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
        'role' => 'Cliente desde 2023'
    ),
    array(
        'text' => '"Sempre faço meu corte e hidratação aqui. As meninas são super atenciosas e o resultado é sempre impecável. Recomendo muito!"',
        'author' => 'Juliana T.',
        'role' => 'Cliente'
    ),
    array(
        'text' => '"A massagem relaxante é o meu momento favorito do mês. É um espaço realmente acolhedor, você se sente em casa."',
        'author' => 'Mariana S.',
        'role' => 'Cliente desde 2024'
    )
);
?>

<section class="py-24 bg-bella-nude/30 border-y border-bella-nude">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-4">
            <?php echo esc_html($testi_title); ?>
        </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php 
            if( have_rows('testimonials_list') ): 
                while( have_rows('testimonials_list') ) : the_row();
                    $text = get_sub_field('text');
                    $author = get_sub_field('author');
                    $role = get_sub_field('role');
            ?>
            <div class="bg-white p-8 rounded-2xl shadow-sm relative flex flex-col h-full">
                <div class="flex text-bella-terracotta mb-4">
                    <!-- 5 Stars -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div class="text-bella-subtext italic mb-6 flex-grow"><?php echo wp_kses_post($text); ?></div>
                <div>
                    <p class="font-serif text-bella-text text-lg"><?php echo esc_html($author); ?></p>
                    <p class="text-sm text-bella-subtext"><?php echo esc_html($role); ?></p>
                </div>
            </div>
            <?php 
                endwhile;
            else :
                foreach($fallback_testimonials as $testi):
            ?>
            <div class="bg-white p-8 rounded-2xl shadow-sm relative flex flex-col h-full">
                <div class="flex text-bella-terracotta mb-4">
                    <!-- 5 Stars -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div class="text-bella-subtext italic mb-6 flex-grow"><?php echo wp_kses_post($testi['text']); ?></div>
                <div>
                    <p class="font-serif text-bella-text text-lg"><?php echo esc_html($testi['author']); ?></p>
                    <p class="text-sm text-bella-subtext"><?php echo esc_html($testi['role']); ?></p>
                </div>
            </div>
            <?php 
                endforeach;
            endif; 
            ?>

        </div>
    </div>
</section>
