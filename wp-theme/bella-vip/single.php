<?php
/**
 * O template para exibir posts individuais (blog)
 *
 * @package Bella_VIP
 */

get_header();
?>

<main id="primary" class="site-main py-24 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content' ); ?>>
			
			<header class="entry-header mb-8 text-center">
				<?php the_title( '<h1 class="entry-title text-4xl md:text-5xl font-serif text-bella-text mb-4">', '</h1>' ); ?>
				
				<div class="entry-meta text-sm text-bella-subtext space-x-4">
					<span><?php echo get_the_date(); ?></span>
					<span>&bull;</span>
					<span><?php the_author(); ?></span>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail mb-12 rounded-2xl overflow-hidden shadow-md">
					<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto object-cover' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content text-lg text-bella-subtext leading-relaxed space-y-6">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links mt-8 pt-4 border-t border-bella-rose/20"><span class="font-medium mr-2">' . esc_html__( 'Páginas:', 'bella-vip' ) . '</span>',
						'after'  => '</div>',
					)
				);
				?>
			</div>

			<footer class="entry-footer mt-12 pt-6 border-t border-bella-rose/20 flex flex-wrap justify-between items-center gap-4">
				<?php if ( has_tag() ) : ?>
					<div class="post-tags text-sm text-bella-subtext">
						<span class="font-medium mr-1"><?php esc_html_e( 'Tags:', 'bella-vip' ); ?></span>
						<?php the_tags( '', ', ', '' ); ?>
					</div>
				<?php endif; ?>
			</footer>

		</article>

		<?php
		// Exibe navegação entre posts
		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle text-xs text-bella-subtext block">' . esc_html__( 'Anterior', 'bella-vip' ) . '</span> <span class="nav-title font-medium text-bella-text block">&larr; %title</span>',
				'next_text' => '<span class="nav-subtitle text-xs text-bella-subtext block">' . esc_html__( 'Próximo', 'bella-vip' ) . '</span> <span class="nav-title font-medium text-bella-text block">%title &rarr;</span>',
			)
		);

		// Se comentários estiverem abertos ou houver pelo menos um comentário, exiba o template de comentários.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #primary -->

<?php
get_footer();
