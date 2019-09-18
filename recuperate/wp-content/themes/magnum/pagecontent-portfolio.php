<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $sbg = empty($meta->pagebg->transparent) ? $meta->pagebg->color : 'transparent'; ?>

<section class="more-work" id="<?php $content->slug(); ?>" style="background-color:<?php echo $sbg; ?>">

	<div class="row">
		<div class="ten columns center margin-bottom">

			<!-- The title -->
			<div class="title">
				<h1><?php $content->title(); ?></h1>
				<hr>
			</div>

		</div>
	</div>

	<div class="row margin equal">

		<?php if (!post_password_required()): ?>
		
			<?php $t->project->portfolio($content->meta()->portfolio,false) ?>

		<?php else: ?>

			<?php get_template_part("password"); ?>
		
		<?php endif; ?>

	</div>
	
</section>