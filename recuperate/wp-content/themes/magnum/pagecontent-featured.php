<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $topOnly = ! empty( $meta->featured->topOnly ) && $meta->featured->topOnly === 'yes'; ?>
<?php $sbg = empty($meta->pagebg->transparent) ? $meta->pagebg->color : 'transparent'; ?>

<section class="project-page-intro featured-work" id="<?php $content->slug(); ?>" style="background-color:<?php echo $sbg; ?>">

	<div class="row">
		<div class="twelve columns title">
			<h1><?php $content->title(); ?></h1>
			<hr>
		</div>
	</div>

<?php if ( ! empty ( $meta->featured->project ) && $loop = $t->data->customLoop( (object) array( "post_type"=>"project","id" => array( $meta->featured->project ), ) ) ) : ?>

	<?php while ($content->looping()) { ?>

		<?php $meta =& $content->meta(); ?>

		<?php if ( ! post_password_required( $post->ID ) ) : ?>

			<?php 

			$intro_gallery = $meta->config->introGallery;

			if ( '00' == $intro_gallery ) $intro_gallery = $t->options->get("projectsGallery");

			$loop = $t->gallery->getSliderLoop( $intro_gallery );

			if ( $loop ): ?>

				<div class="project-media project-page-slider">
					<ul class="bxslider fw-slider">

						<?php while ($item =& $loop->next()): ?>

							<li>
								<div class="header" style="background-image: url( '<?php echo $t->image->resizedImgUrl( $item->img, 9999, 9999); ?>' );">

									<div class="header-center">
										<div class="centerdiv text-white">

											<?php if ( ! empty( $item->ititle ) ) echo '<h4 class="bigtext uppercase letterspace bold">' . $item->ititle . '</h4>'; ?>
											<?php if ( ! empty( $item->caption ) ) echo '<h6 class="bigtext serif italic">' . $item->caption . '</h6>'; ?>

										</div>
									</div>

								</div>

							</li>				

						<?php endwhile; ?>

					</ul>
				</div>

			<?php else : ?>

				<br><br><br>

			<?php endif; ?>

			<div class="row">
				<div class="ten columns center">
					<h2 class="text-color"><?php $content->title(); ?></h2>
					<?php if ( ! empty( $meta->config->intro ) ) echo '<p class="big thin">' . $meta->config->intro . '</p>'; ?>
				</div>
			</div>

			<div class="project-content"><?php $content->content(); ?></div>

		</section>

		<?php if ( ! $topOnly ) : ?>

			<?php $format = get_post_format(); ?>

			<?php switch( $format ) :

				case( false ) : ?>

					<section class="project-page-images">
						<div class="row margin">

							<?php $content->img( 1200,0 ); ?>

						</div>
					</section>

				<?php break; ?>

				<?php case( 'gallery' ) : ?>

					<?php $loop = $t->gallery->getSliderLoop($meta->gallery->id); ?>

					<?php if ( $loop ): ?>

						<section class="project-page-images">
							<div class="row margin popup-gallery">

								<?php while ($item =& $loop->next()): ?>

									<?php $title = empty( $item->ititle ) ? '' : $item->ititle; ?>
									<?php $title .= empty( $item->caption ) ? '' : '<small>' . $item->caption . '</small>'; ?>

									<?php $caption = empty( $title ) ? '' : 'title="' . esc_attr( $title ) . '"'; ?>

									<div class="three columns medium-six columns small-twelve columns image-thumb">
										<a href="<?php echo $t->image->resizedImgUrl( $item->img, 9999, 9999); ?>" <?php echo $caption; ?> data-gallery="<?php $content->slug(); ?>" title="">
											<?php echo $t->image->resizedImg( $item->img, 720, 720 ); ?>
										</a>
									</div>

								<?php endwhile; ?>

							</div>
						</section>

					<?php endif; ?>

				<?php break; ?>

				<?php case( 'video' ) : ?>

					<section class="project-page-images">
						<div class="row margin">

							<?php $videoID = $meta->video->id; ?>
							<?php if ($video = $t->video->getInfo($videoID)): ?>

							<div class="vendor">

								<?php switch($video->type): case "youtube": ?>

									<iframe width="1200" height="675" src="http://www.youtube.com/embed/<?php echo $video->id; ?>?autohide=1&modestbranding=1&showinfo=0" class="fullwidth-video" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								
								<?php break; case "vimeo": ?>

									<iframe src="http://player.vimeo.com/video/<?php echo $video->id; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" class="fullwidth-video" width="1200" height="675" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								
								<?php endswitch; ?>

							</div>

							<?php endif; ?>

						</div>
					</section>

				<?php break; ?>

			<?php endswitch; ?>

			<?php if ( ! empty( $meta->config->callToAction ) ) : ?>

				<section class="call-to-action">
					<div class="header small">
						<div class="header-center bigtext">
							<?php echo $meta->config->callToAction; ?>
						</div>
					</div>
				</section>

			<?php endif; ?>

		<?php endif; ?>

	<?php else : ?>

		<?php echo get_the_password_form(); ?>

		</section>

	<?php endif; ?>

	<?php } ?>

	<?php $content->resetLoop(); ?>

<?php else : ?>

	</section>

<?php endif; ?>