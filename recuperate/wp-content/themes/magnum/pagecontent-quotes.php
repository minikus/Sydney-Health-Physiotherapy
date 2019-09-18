<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $hasFeatImage = $content->hasFeatImage(); ?>
<?php $sbgi = wp_get_attachment_url( get_post_thumbnail_id() );  ?>
<?php $sbgi = empty($sbgi) || !empty($meta->pagebg->transparent) ? "none" : sprintf("url('%s')",$sbgi); ?>
<?php $sbg = empty($meta->pagebg->transparent) ? ($meta->pagebg->color) : 'transparent'; ?>

<section id="<?php $content->slug(); ?>" class="quote">
	<div class="header medium" style="background-color: <?php echo $sbg; ?>; background-image: <?php echo $sbgi; ?>">
		<div class="header-center">
			<div class="centerdiv text-white">
				<ul class="quote-slider bxslider">

					<?php $quotes = ( ! empty( $meta->quotes->quotes ) && is_array( $meta->quotes->quotes ) ) ? $meta->quotes->quotes : array(); ?>

					<?php foreach ( $quotes as $quote ) : ?>

						<li>
							<?php if ( ! empty( $quote['title'] ) ) echo '<h4 class="bigtext"><q>' . $quote['title'] . '</q></h4>'; ?>
							<?php if ( ! empty( $quote['description'] ) ) echo '<h6 class="bigtext serif italic">' . $quote['description'] . '</h6>'; ?>
						</li>			

					<?php endforeach; ?>

				</ul>
			</div>
		</div>
	</div>
	<a href="javascript:void(0)" class="quote-prev bx-outer-prev"></a>
	<a href="javascript:void(0)" class="quote-next bx-outer-next"></a>
</section>