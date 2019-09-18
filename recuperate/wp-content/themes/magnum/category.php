<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php get_header(); ?>

<section class="section-blog section-author">

	<section id="top" class="blog-header">
		<div class="row">
			<div class="twelve columns">

				<div class="title">
					<h1><?php printf(__("Category: %s",'Pixelentity Theme/Plugin'),single_cat_title("",false)); ?></h1>
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