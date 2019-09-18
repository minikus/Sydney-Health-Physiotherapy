<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php get_header(); ?>

<section class="section-blog section-single-video" id="<?php $content->slug(); ?>">

	<section id="top" class="blog-header">
		<div class="row">
			<div class="twelve columns">

				<div class="title">
					<h1><?php $content->title(); ?></h1>
					<hr>
				</div>

			</div>
		</div>
	</section>

	<section class="blog">

		<div class="row">

			<div class="nine columns">

				<?php if ( ! post_password_required( $post->ID ) ) : ?>

					<div class="post-media clearfix">
						<?php $t->video->output(get_the_id()); ?>
					</div>

				<?php else : ?>

					<?php echo get_the_password_form(); ?>

				<?php endif; ?>

		 	</div>
					

			<?php get_sidebar(); ?>

		</div>

	</div>

</section>

<?php get_footer(); ?>