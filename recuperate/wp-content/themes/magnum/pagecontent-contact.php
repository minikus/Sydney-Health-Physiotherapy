<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $contact =& $meta->contact; ?>
<?php $hasFeatImage = $content->hasFeatImage(); ?>
<?php $sbg = empty($meta->pagebg->transparent) ? $meta->pagebg->color : 'transparent'; ?>

<!-- Contact -->
<section id="<?php $content->slug(); ?>" class="contact" style="background-color:<?php echo $sbg; ?>">
	<div class="row">
		<div class="ten columns center">

			<div class="title">
				<h1><?php $content->title(); ?></h1>
				<hr>
			</div>

			<?php if ( ! empty( $contact->info ) ) : ?>

				<?php echo $contact->info; ?>

			<?php endif; ?> 
			
		</div>
	</div>

	<div class="row">

		<div class="twelve columns">
			<div id="message">

				<div id="contactFormSent" class="formSent hide">
					<?php echo $contact->msgOK; ?>
				</div><br>

				<!--alert error-->
				<div id="contactFormError" class="formError error_message hide">
					<?php echo $contact->msgKO; ?>
				</div><br>
			</div>
		</div>

	</div>

	<div class="row">

		<form method="post" name="contactform" class="peThemeContactForm" id="contactform">
			<fieldset>
				<div class="six columns">

					<label for="name" accesskey="U"><i class="fa fa-user"></i></label>
					<input name="author" type="text" id="name" size="30" value="" />

					<label for="email" accesskey="E"><i class="fa fa-envelope-o"></i></label>
					<input name="email" type="text" id="email" size="30" value="" />

					<label for="phone" accesskey="P"><i class="fa fa-phone"></i></label>
					<input name="phone" type="text" id="phone" size="30" value="" />

				</div>
				<div class="six columns">

					<label for="comments" accesskey="C"><i class="fa fa-comment"></i></label>
					<textarea name="comments" id="comments"></textarea>

				</div>
				<div class="twelve columns">

					<input type="submit" class="submit" id="submit" value="<?php _e("Send message",'Pixelentity Theme/Plugin'); ?>" />

				</div>
			</fieldset>
		</form>
	</div>
</section>