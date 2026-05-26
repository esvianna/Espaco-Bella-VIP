<?php
/**
 * O template para exibir comentários
 *
 * @package Bella_VIP
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area mt-16 p-8 bg-bella-nude/20 rounded-2xl border border-bella-rose/20">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title text-2xl font-serif text-bella-text mb-8">
			<?php
			$comments_number = get_comments_number();
			if ( 1 === (int) $comments_number ) {
				printf(
					/* translators: %s: post title. */
					esc_html__( 'Um comentário em &ldquo;%s&rdquo;', 'bella-vip' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title. */
					esc_html( _nx( '%1$s comentário em &ldquo;%2$s&rdquo;', '%1$s comentários em &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'bella-vip' ) ),
					number_format_i18n( $comments_number ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<ol class="comment-list space-y-6">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size'=> 60,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

		// Se os comentários estão fechados mas existem comentários antigos, mostre uma nota.
		if ( ! comments_open() ) :
			?>
			<p class="no-comments mt-4 text-bella-subtext text-center"><?php esc_html_e( 'Os comentários estão fechados.', 'bella-vip' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form(
		array(
			'class_form'         => 'comment-form mt-8 space-y-4',
			'title_reply_class'  => 'title-reply text-xl font-serif text-bella-text mb-4 block',
			'submit_button'      => '<button name="%1$s" type="submit" id="%2$s" class="%3$s btn-primary">%4$s</button>',
			'submit_field'       => '<div class="form-submit pt-4">%1$s %2$s</div>',
		)
	);
	?>

</div><!-- #comments -->
