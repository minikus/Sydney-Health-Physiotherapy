<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $hasFeatImage = $content->hasFeatImage(); ?>
<?php $sbg = empty($meta->pagebg->transparent) ? $meta->pagebg->color : 'transparent'; ?>

<section id="<?php $content->slug(); ?>" class="about" style="background-color:<?php echo $sbg; ?>">

	<div class="row">
		<div class="twelve columns title">
			<!--<h1><?php $content->title(); ?></h1>-->
				<h1>Holistic Approach</h1>
			<hr>
		</div>
	</div>

	<?php if ( $hasFeatImage ) : ?>

		<div style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>')" class="header bottom">
			<div class="header-center">
				<div class="centerdiv text-white">

					<?php if ( ! empty( $meta->author->featuredHeading ) ) echo '<h4 class="bigtext uppercase letterspace bold">' . $meta->author->featuredHeading . '</h4>'; ?>
					<?php if ( ! empty( $meta->author->featuredDescription ) ) echo '<h6 class="bigtext serif italic">' . $meta->author->featuredDescription . '</h6>'; ?>

				</div>
			</div>
		</div>

	<?php endif; ?>

	<?php if ( ! empty( $meta->author->avatar ) ) : ?>

		<img src="<?php echo $t->image->resizedImgUrl( $meta->author->avatar, 360, 360 ); ?>" alt="avatar" class="about-avatar">

	<?php endif; ?>

	<div class="row">
		<div class="ten columns center margin-bottom">

			<?php if ( ! empty( $meta->author->introTitle ) ) echo '<h2 class="text-color">' . $meta->author->introTitle . '</h2>'; ?>
			<?php if ( ! empty( $meta->author->intro ) ) echo '<p class="big thin">' . $meta->author->intro . '</p>'; ?>

		</div>
	</div>

	<div class="page-author-content">

		<?php $content->content(); ?>

	</div>
</section>