<?php $t =& peTheme(); ?>
<?php $layout =& $t->layout; ?>

<?php $footer_type = $t->options->get("footer_type"); ?>

<?php if ( 'normal' === $footer_type ) : ?>

	<!-- The footer -->
	<section class="footer-two">
		<div class="row">
			<div class="twelve columns">


				<!-- Back to top button -->
				<p><a href="#" class="back-to-top smoothscroll"><i class="fa fa-chevron-up icon arrow-top"></i></a></p>


				<!-- Social icons -->
				<p>
					<?php $t->content->socialLinks($t->options->get("footerSocialLinks"),"footer"); ?>
				</p>


				<!-- Credits -->
				<p class="text-light"><?php echo $t->options->get("footerCopyright"); ?></p>

			</div>
		</div>
	</section>

<?php else : ?>

	<!-- Social footer -->
	<section class="social-footer transparent">
		<div class="row">
			<div class="twelve columns">
				<h3 class="text-white margin-bottom"><?php echo $t->options->get("footerTitle"); ?></h3>
				<p class="no-margin">
					<?php $t->content->socialLinks($t->options->get("footerSocialLinks"),"footer"); ?>
				</p>
			</div>
		</div>
	</section>

	<section class="credits transparent">
		<div class="row">
			<div class="twelve columns">
				<?php echo $t->options->get("footerCopyright"); ?>
			</div>
		</div>
	</section>

<?php endif; ?>
							
<?php $t->footer->wp_footer(); ?>

</body>
</html>
