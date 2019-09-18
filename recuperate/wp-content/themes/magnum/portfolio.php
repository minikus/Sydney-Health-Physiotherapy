<?php $t =& peTheme(); ?>
<?php $project =& $t->project; ?>
<?php list($portfolio) = $t->template->data(); ?>


<?php $content =& $t->content; ?>

<?php while ($content->looping()): ?>

	<?php $meta =& $content->meta(); ?>
	<?php $class = isset( $meta->config->lightbox ) && $meta->config->lightbox === 'yes' ? 'dolightbox' : ''; ?>
	<?php $format = get_post_format(); ?>
	<?php $formatClass = $format ? 'single-' . $format : 'single-image' ; ?>

	<div class="four columns medium-six columns small-twelve columns fade-it portfolio-thumb <?php echo $class; ?> <?php echo $formatClass; ?>">

			<?php switch( $format ) :

				case( false ) : ?>

					<?php $href = $class ? $t->image->resizedImgUrl( wp_get_attachment_url( get_post_thumbnail_id() ), 9999, 9999) : get_permalink() ; ?>

					<a href="<?php echo $href; ?>" <?php echo $class ? 'class="popup"' : ''; ?>>
						<?php $content->img( 720, 720 ); ?>
						<i class="fa fa-camera-retro"></i>
						<b><?php $content->title(); ?></b>
						<em><?php 

							$terms = get_the_terms( get_the_id(), 'prj-category' );
							$output = '';

							if ( $terms && ! is_wp_error( $terms ) ) :

								foreach ( $terms as $term ) {
									$output .= $term->name . ' / ';
								}

								$output = substr( $output, 0, -3 );

								echo $output;

							endif;

							?></em>
					</a>

				<?php break; ?>

				<?php case( 'gallery' ) : ?>

					<?php $loop = $t->gallery->getSliderLoop($meta->gallery->id); ?>

					<?php $first = true; ?>

					<?php if ( $loop ): ?>

						<?php while ($item =& $loop->next()): ?>

							<?php $title = empty( $item->ititle ) ? '' : $item->ititle; ?>
							<?php $title .= empty( $item->caption ) ? '' : '<small>' . $item->caption . '</small>'; ?>

							<?php $caption = empty( $title ) ? '' : 'title="' . esc_attr( $title ) . '"'; ?>

							<?php if ( $first ) : ?>

								<?php $first = false; ?>

								<?php $href = $class ? $t->image->resizedImgUrl( $item->img, 9999, 9999) : get_permalink() ; ?>

								<a href="<?php echo $href; ?>" <?php echo $caption; ?>>
									<?php echo $content->resizedImg( 720, 720, $item->img ); ?>
									<i class="fa fa-picture-o"></i>
									<b><?php $content->title(); ?></b>
									<em><?php 

										$terms = get_the_terms( get_the_id(), 'prj-category' );
										$output = '';

										if ( $terms && ! is_wp_error( $terms ) ) :

											foreach ( $terms as $term ) {
												$output .= $term->name . ' / ';
											}

											$output = substr( $output, 0, -3 );

											echo $output;

										endif;

										?></em>
								</a>

							<?php else : ?>

								<?php $href = $class ? $t->image->resizedImgUrl( $item->img, 9999, 9999) : get_permalink() ; ?>

								<a href="<?php echo $href; ?>" class="hide" <?php echo $caption; ?>>
									<i class="fa fa-picture-o"></i>
									<b><?php $content->title(); ?></b>
									<em><?php 

										$terms = get_the_terms( get_the_id(), 'prj-category' );
										$output = '';

										if ( $terms && ! is_wp_error( $terms ) ) :

											foreach ( $terms as $term ) {
												$output .= $term->name . ' / ';
											}

											$output = substr( $output, 0, -3 );

											echo $output;

										endif;

										?></em>
								</a>

							<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>

				<?php break; ?>

				<?php case( 'video' ) : ?>

					<?php $videoID = $meta->video->id; ?>
					<?php if ($video = $t->video->getInfo($videoID)): ?>

						<?php $href = $class ? $video->url : get_permalink() ; ?>

						<?php switch($video->type): case "youtube": ?>

							<a <?php echo $class ? 'class="popup-youtube"' : ''; ?> href="<?php echo $href; ?>">
								<?php $content->img( 720, 720 ); ?>
								<i class="fa fa-film"></i>
								<b><?php $content->title(); ?></b>
								<em><?php 

									$terms = get_the_terms( get_the_id(), 'prj-category' );
									$output = '';

									if ( $terms && ! is_wp_error( $terms ) ) :

										foreach ( $terms as $term ) {
											$output .= $term->name . ' / ';
										}

										$output = substr( $output, 0, -3 );

										echo $output;

									endif;

									?></em>
							</a>

						<?php break; case "vimeo": ?>

							<a <?php echo $class ? 'class="popup-vimeo"' : ''; ?> href="<?php echo $href; ?>">
								<?php $content->img( 720, 720 ); ?>
								<i class="fa fa-film"></i>
								<b><?php $content->title(); ?></b>
								<em><?php 

									$terms = get_the_terms( get_the_id(), 'prj-category' );
									$output = '';

									if ( $terms && ! is_wp_error( $terms ) ) :

										foreach ( $terms as $term ) {
											$output .= $term->name . ' / ';
										}

										$output = substr( $output, 0, -3 );

										echo $output;

									endif;

									?></em>
							</a>

						<?php endswitch; ?>

					<?php endif; ?>

				<?php break; ?>

			<?php endswitch; ?>

	</div>

<?php endwhile; ?>