<?php
/**
 * O template da página principal (Landing Page)
 *
 * @package Bella_VIP
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    // Carrega cada seção da Landing Page modularizada via template-parts
    
    get_template_part( 'template-parts/content', 'hero' );
    
    get_template_part( 'template-parts/content', 'about' );
    
    get_template_part( 'template-parts/content', 'services' );
    
    get_template_part( 'template-parts/content', 'gloss-express' );
    
    get_template_part( 'template-parts/content', 'gallery' );
    
    get_template_part( 'template-parts/content', 'testimonials' );
    
    get_template_part( 'template-parts/content', 'location' );
    ?>

</main><!-- #main -->

<?php
get_footer();
