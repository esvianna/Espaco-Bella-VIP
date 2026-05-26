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

<div class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-12">
    <main id="primary" class="site-main lg:w-2/3">

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
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail mb-4 rounded-xl overflow-hidden max-w-lg">
                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                                <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-auto object-cover' ) ); ?>
                            </a>
                        </div>
                    <?php endif; ?>

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
                        <?php
                        the_excerpt();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links mt-4"><span class="font-medium mr-1">' . esc_html__( 'Páginas:', 'bella-vip' ) . '</span>',
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>

                    <?php if ( has_tag() ) : ?>
                        <footer class="entry-footer mt-4 text-sm text-bella-subtext">
                            <span class="font-medium mr-1"><?php esc_html_e( 'Tags:', 'bella-vip' ); ?></span>
                            <?php the_tags( '', ', ', '' ); ?>
                        </footer>
                    <?php endif; ?>
                </article>
                <?php

            endwhile;

            the_posts_navigation();

        else :

            ?>
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title text-3xl font-serif text-bella-text"><?php esc_html_e( 'Nenhum conteúdo encontrado.', 'bella-vip' ); ?></h1>
                </header>
            </section>
            <?php

        endif;
        ?>

    </main><!-- #main -->
    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
