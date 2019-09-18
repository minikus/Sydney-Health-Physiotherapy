<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $image =& $t->image; ?>
<?php $meta =& $content->meta(); ?>
<?php $sbg = empty($meta->pagebg->transparent) ? $meta->pagebg->color : 'transparent'; ?>

<section id="<?php $content->slug(); ?>" class="services" style="background-color:<?php echo $sbg; ?>">
	<div class="row">
		<div class="twelve columns">

			<!-- The title -->
			<div class="title">
				<h1><?php $content->title(); ?></h1>
				<hr>
			</div>

		<?php if ( ! empty( $meta->services->display ) && '1' === $meta->services->display ) : ?>

			<!-- Slider controls -->
			<?php if ( ! empty( $meta->services->subtitle ) ) echo '<h2 class="text-color">' . $meta->services->subtitle . '</h2>'; ?>
			<p>
				<a class="services-prev" href="javascript:void(0)"><i class="fa fa-chevron-left icon arrow-next outline color attached"></i></a>
				<a class="services-next" href="javascript:void(0)"><i class="fa fa-chevron-right icon arrow-prev outline color attached"></i></a>
			</p>

		<?php else : ?>

			<?php if ( ! empty( $meta->services->subtitle ) ) echo '<p class="big thin">' . $meta->services->subtitle . '</p>'; ?>

		<?php endif; ?>


		</div>
	</div>

	<?php if ( empty( $meta->services->members ) ) : ?>

		<?php

		$services = get_posts( array( 'post_type' => 'service', 'posts_per_page' => -1 ) );

		if ( is_array( $services ) ) {

			foreach( $services as $service ) {

				$servicesarray[] = $service->ID;

			}

			$meta->services->members = $servicesarray;

		}

		?>

	<?php endif; ?>

	<?php if ( ! empty( $meta->services->members ) ) : ?>

		<?php if ( ! empty( $meta->services->display ) && '1' == $meta->services->display ) : ?>

			<!-- Services slider -->
			<div class="row">
				<div class="list_carousel">
					<ul class="services-slider">

						<?php if ( $loop = $t->data->customLoop( (object) array( "post_type" => "service", "id" => $meta->services->members, "orderby" => "post__in", ) ) ) : ?>

							<?php while ( $content->looping() ) : ?>

								<?php

									$meta =& $content->meta();
									$features = isset( $meta->info->features ) ? $meta->info->features : '';

								?>

								<!-- Service 1 -->
								<li class="service-item">
									<?php $content->img( 720, 462 ); ?>
									<i class="<?php echo $meta->info->icon; ?>"></i>
									<h4><?php $content->title(); ?></h4>
									<div class="service-carousel-content"><?php $content->content(); ?></div>
									<?php if ( ! empty( $meta->info->subtitle ) ) echo '<h5 class="serif italic">' . $meta->info->subtitle . '</h5>'; ?>
									
									<?php if ( is_array( $features ) ) : ?>

										<ul>
											<?php foreach ( $features as $feature ) : ?>

												<li><?php echo $feature; ?></li>

											<?php endforeach; ?>
										</ul>

									<?php endif; ?>

									<?php if ( ! empty( $meta->info->link ) && ! empty( $meta->info->link_text ) ) echo '<p><a href="' . $meta->info->link . '" class="button outline smoothscroll">' . $meta->info->link_text . '</a></p>'; ?>
								</li>

							<?php endwhile; ?>

							<?php $content->resetLoop(); ?>

						<?php endif; ?>

					</ul>
					<div class="clearfix"></div>
				</div>
			</div>

		<?php else : ?>

			<div class="row margin">

				<?php if ( $loop = $t->data->customLoop( (object) array( "post_type" => "service", "id" => $meta->services->members, "orderby" => "post__in", ) ) ) : ?>

					<?php while ( $content->looping() ) : ?>

						<?php
						
							$meta =& $content->meta();
							$features = isset( $meta->info->features ) ? $meta->info->features : '';

						?>

						<div class="four columns serviceblock">
							<p><i class="<?php echo $meta->info->icon; ?> huge-service-icon"></i></p>
							<h4><?php $content->title(); ?></h4>
							<div class="service-simple-content"><?php $content->content(); ?></div>
							<?php if ( ! empty( $meta->info->link ) && ! empty( $meta->info->link_text ) ) echo '<p><a href="' . $meta->info->link . '" class="smoothscroll button color">' . $meta->info->link_text . '</a></p>'; ?>
						</div>

					<?php endwhile; ?>

					<?php $content->resetLoop(); ?>

				<?php endif; ?>

			</div>

		<?php endif; ?>

	<?php endif; ?>

</section>