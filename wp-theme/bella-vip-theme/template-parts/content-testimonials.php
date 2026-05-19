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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-4">
            <?php echo esc_html($testi_title); ?>
        </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php 
            $testimonials = [];
            for($i = 1; $i <= 3; $i++) {
                $t = get_field('testimonial_'.$i.'_text');
                $a = get_field('testimonial_'.$i.'_author');
                $r = get_field('testimonial_'.$i.'_role');
                if($t || $a) {
                    $initials = urlencode($a ?: $fallback_testimonials[$i-1]['author']);
                    $testimonials[] = [
                        'text' => $t ?: $fallback_testimonials[$i-1]['text'],
                        'author' => $a ?: $fallback_testimonials[$i-1]['author'],
                        'role' => $r ?: $fallback_testimonials[$i-1]['role'],
                        'avatar' => "https://ui-avatars.com/api/?name={$initials}&background=f4e9e5&color=d18c72"
                    ];
                }
            }

            if(empty($testimonials)) {
                $testimonials = $fallback_testimonials;
            }

            foreach($testimonials as $testi) :
            ?>
            <div class="bg-white p-8 rounded-2xl shadow-sm relative flex flex-col h-full hover:shadow-md transition-shadow">
                
                <div class="flex text-bella-terracotta mb-4">
                    <!-- 5 Stars smaller -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                
                <div class="text-bella-subtext italic mb-6 flex-grow leading-relaxed">
                    <?php echo wp_kses_post($testi['text']); ?>
                </div>
                
                <div class="flex items-center mt-auto border-t border-bella-nude pt-4">
                    <img src="<?php echo esc_url($testi['avatar']); ?>" alt="<?php echo esc_attr($testi['author']); ?>" class="w-10 h-10 rounded-full mr-3 border border-bella-rose">
                    <div>
                        <p class="font-serif text-bella-text text-lg leading-tight"><?php echo esc_html($testi['author']); ?></p>
                        <p class="text-xs text-bella-subtext mt-0.5"><?php echo esc_html($testi['role']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
