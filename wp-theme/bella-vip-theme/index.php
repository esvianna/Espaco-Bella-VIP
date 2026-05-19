<?php
/**
 * O arquivo principal (fallback) do tema.
 *
 * @package Bella_VIP
 */

get_header();

// Como o design é focado numa Landing Page (front-page.php), 
// o index servirá apenas como um fallback básico para as listagens de posts, se houver no futuro.
?>

<main id="primary" class="site-main py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <?php
    if ( have_posts() ) :

        if ( is_home() && ! is_front_page() ) :
            ?>
            <header>
                <h1 class="page-title text-4xl font-serif text-bella-text mb-8"><?php single_post_title(); ?></h1>
            </header>
            <?php
        endif;

        /* Start the Loop */
        while ( have_posts() ) :
            the_post();

            // Fallback genérico para a lista
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12 border-b border-bella-nude pb-8' ); ?>>
                <header class="entry-header mb-4">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title text-3xl font-serif text-bella-text">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title text-2xl font-serif text-bella-text"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;
                    ?>
                </header>

                <div class="entry-content text-bella-subtext">
                    <?php the_excerpt(); ?>
                </div>
            </article>
            <?php

        endwhile;

        the_posts_navigation();

    else :

        ?>
        <section class="no-results not-found">
            <header class="page-header">
                <h1 class="page-title text-3xl font-serif text-bella-text"><?php esc_html_e( 'Nenhum conteúdo encontrado.', 'bellavip' ); ?></h1>
            </header>
        </section>
        <?php

    endif;
    ?>

</main><!-- #main -->

<?php
get_footer();
