<?php
/**
 * Template part: Gallery Section
 *
 * @package Bella_VIP
 */

$gallery_title = get_field('gallery_title') ?: 'Resultados e momentos no Espaço Bella VIP';
$gallery_desc = get_field('gallery_description') ?: 'Um pouquinho do nosso dia a dia e dos resultados que entregamos com tanto amor.';
$gallery_images = get_field('gallery_images');

$fallback_images = array(
    'https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
    'https://images.unsplash.com/photo-1595476108010-b4d1f10d5e43?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
    'https://images.unsplash.com/photo-1600948836101-f9ffda59d250?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
    'https://images.unsplash.com/photo-1516975080661-46904d9c49d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
);
?>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
        <h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-4">
            <?php echo esc_html($gallery_title); ?>
        </h2>
        <div class="text-bella-subtext">
            <?php echo wp_kses_post($gallery_desc); ?>
        </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php 
            if( $gallery_images && is_array($gallery_images) ): 
                foreach( $gallery_images as $image ): 
                    // ACF Image field can return ID, Object(array) or URL(string). Let's handle both array and string safely.
                    $image_url = is_array($image) && isset($image['url']) ? $image['url'] : (is_string($image) ? $image : '');
                    
                    if($image_url):
            ?>
            <div class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <img src="<?php echo esc_url($image_url); ?>" alt="Galeria Bella VIP" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <?php 
                    endif;
                endforeach; 
            else : 
                foreach( $fallback_images as $image ): 
            ?>
            <div class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <img src="<?php echo esc_url($image); ?>" alt="Galeria Bella VIP" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" loading="lazy" />
            </div>
            <?php 
                endforeach; 
            endif; 
            ?>
        </div>
    </div>
</section>
