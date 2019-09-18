<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $sbg = empty($meta->pagebg->transparent) ? $meta->pagebg->color : 'transparent'; ?>

<section id="<?php $content->slug(); ?>" class="introduction" style="background-color:<?php echo $sbg; ?>">
	<div class="row">
		<div class="ten columns center">


			<!-- The title -->
			<div class="title">
				<h1><?php $content->title(); ?></h1>
				<hr>
			</div>

			<?php if ( ! empty( $meta->intro->intro ) ) : ?>

				<p class="big thin"><?php echo $meta->intro->intro; ?></p>

			<?php endif; ?>
			
			<div class="page-body pe-wp-default">
				<?php $content->content(); ?>
			</div>

		</div>
	</div>
</section>