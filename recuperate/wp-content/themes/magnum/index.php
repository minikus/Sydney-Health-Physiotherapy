<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php get_header(); ?>

<section class="section-blog section-single-post" id="<?php $content->slug(); ?>">

	<section id="top" class="blog-header">
		<div class="row">
			<div class="twelve columns">

				<div class="title">
					<!--<h1><?php _e("The Blog",'Pixelentity Theme/Plugin'); ?></h1>-->
					<h1>Holistic Approach</h1>
					<hr>
				</div>

			</div>
		</div>
	</section>

	<section class="blog">

		<div class="row">

			<div class="nine columns">

		 		<?php $t->content->loop(); ?>

		 	</div>
					

			<?php get_sidebar(); ?>

		</div>

	</div>

</section>

<?php get_footer(); ?>



