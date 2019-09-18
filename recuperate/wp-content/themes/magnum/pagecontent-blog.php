<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<section class="section-blog" id="<?php $content->slug(); ?>" style="background-color:<?php echo $meta->pagebg->color; ?>">

	<section id="top" class="blog-header">
		<div class="row">
			<div class="twelve columns">

				<div class="title">
<!-- 					<h1><?php $content->title(); ?></h1> -->
						<h1>Holistic Approach</h1>
					<hr>
				</div>

			</div>
		</div>
	</section>

	<section class="blog">

		<div class="row">

			<div class="nine columns">

		 		<?php $content->blog( $meta->blog, false ); ?>

		 	</div>
					

			<?php get_sidebar(); ?>

		</div>

	</div>

</section>