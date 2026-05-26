<?php
/**
 * Seção Galeria (Página Inicial)
 *
 * @package Bella_VIP
 */

$title    = get_theme_mod( 'bellavip_gallery_title', 'Resultados e momentos no Espaço Bella VIP' );
$subtitle = get_theme_mod( 'bellavip_gallery_subtitle', 'Um pouquinho do nosso dia a dia e dos resultados que entregamos com tanto amor.' );

$images = array(
	get_theme_mod( 'bellavip_gallery_img1', get_template_directory_uri() . '/assets/images/placeholder.svg' ),
	get_theme_mod( 'bellavip_gallery_img2', get_template_directory_uri() . '/assets/images/placeholder.svg' ),
	get_theme_mod( 'bellavip_gallery_img3', get_template_directory_uri() . '/assets/images/placeholder.svg' ),
	get_theme_mod( 'bellavip_gallery_img4', get_template_directory_uri() . '/assets/images/placeholder.svg' ),
);
?>

<div class="py-20 bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<div class="text-center max-w-2xl mx-auto mb-12">
			<?php if ( ! empty( $title ) ) : ?>
				<h2 class="text-3xl md:text-4xl font-serif text-bella-text mb-4"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>

			<?php if ( ! empty( $subtitle ) ) : ?>
				<p class="text-bella-subtext"><?php echo esc_html( $subtitle ); ?></p>
			<?php endif; ?>
		</div>

		<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
			<?php foreach ( $images as $image ) : ?>
				<?php if ( ! empty( $image ) ) : ?>
					<div class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
						<img src="<?php echo esc_url( $image ); ?>" alt="<?php esc_attr_e( 'Galeria de fotos do Espaço Bella VIP', 'bella-vip' ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>

	</div>
</div>
