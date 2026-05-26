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
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            
            // Verifica se a página está vazia (sem blocos criados pelo usuário)
            if ( empty( get_the_content() ) ) {
                // Renderiza todos os Block Patterns em ordem como fallback (Graceful Degradation)
                echo do_blocks( '<!-- wp:pattern {"slug":"bellavip/hero"} -->' );
                echo do_blocks( '<!-- wp:pattern {"slug":"bellavip/services"} -->' );
                echo do_blocks( '<!-- wp:pattern {"slug":"bellavip/gloss-express"} -->' );
                echo do_blocks( '<!-- wp:pattern {"slug":"bellavip/about"} -->' );
                echo do_blocks( '<!-- wp:pattern {"slug":"bellavip/gallery"} -->' );
                echo do_blocks( '<!-- wp:pattern {"slug":"bellavip/testimonials"} -->' );
                echo do_blocks( '<!-- wp:pattern {"slug":"bellavip/location"} -->' );
                
                // Mensagem amigável para o administrador
                if ( current_user_can( 'edit_posts' ) ) {
                    echo '<div class="max-w-7xl mx-auto px-4 py-8 text-center"><p class="p-4 bg-yellow-50 text-yellow-800 rounded-md border border-yellow-200">' . esc_html__( 'Sua página inicial está vazia. Edite esta página usando o editor de blocos para adicionar conteúdo e remover este aviso.', 'bellavip' ) . '</p></div>';
                }
            } else {
                the_content();
            }
        }
    }
    ?>

</main><!-- #main -->

<?php
get_footer();
