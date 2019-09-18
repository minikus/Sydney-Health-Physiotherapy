<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $sbg = empty($meta->pagebg->transparent) ? $meta->pagebg->color : 'transparent'; ?>

<section id="<?php $content->slug(); ?>" class="call-to-action" style="background-color:<?php echo $sbg; ?>">
	<div class="header small">
		<div class="header-center">
			<div class="centerdiv">
				<h5 class="bigtext serif italic text-color"><?php $content->title(); ?></h5>
				<?php $content->content(); ?>
			</div>
		</div>
	</div>
</section>