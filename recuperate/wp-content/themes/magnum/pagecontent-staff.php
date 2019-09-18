<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $hasFeatImage = $content->hasFeatImage(); ?>

<section id="<?php $content->slug(); ?>" class="about-us" style="background-color:<?php echo $meta->pagebg->color; ?>">

	<div class="row">
		<div class="twelve columns title">
			<h1><?php $content->title(); ?></h1>
			<hr>
		</div>
	</div>

	<?php if ( $hasFeatImage ) : ?>

		<div style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>')" class="header bottom">
			<div class="header-center">
				<div class="centerdiv text-white">

					<?php if ( ! empty( $meta->staff->featuredHeading ) ) echo '<h4 class="bigtext uppercase letterspace bold">' . $meta->staff->featuredHeading . '</h4>'; ?>
					<?php if ( ! empty( $meta->staff->featuredDescription ) ) echo '<h6 class="bigtext serif italic">' . $meta->staff->featuredDescription . '</h6>'; ?>

				</div>
			</div>
		</div>

	<?php endif; ?>

	<div class="row">
		<div class="ten columns center margin-bottom">

			<?php if ( ! empty( $meta->staff->introTitle ) ) echo '<h2 class="text-color">' . $meta->staff->introTitle . '</h2>'; ?>
			<?php if ( ! empty( $meta->staff->intro ) ) echo '<p class="big thin">' . $meta->staff->intro . '</p>'; ?>

		</div>
	</div>

	<div class="row margins page-staff-content">

		<?php $content->content(); ?>

		<?php 

		if ( empty( $meta->staff->staff ) ) { 

			$staffs = get_posts( array( 'post_type' => 'staff', 'posts_per_page' => -1 ) );

			if ( is_array( $staffs ) ) {

				foreach( $staffs as $staff ) {

					$staffarray[] = $staff->ID;

				}

				$meta->staff->staff = $staffarray;

			}

		}

		?>

		<?php if ( ! empty( $meta->staff->staff ) ) : ?>

			<?php if ( $loop = $t->data->customLoop( (object) array( "post_type"=>"staff", "id" => $meta->staff->staff, "orderby" => "post__in", ) ) ) : ?>
				
				<?php while ( $content->looping() ) : ?><?php

						$meta =& $content->meta();
						$social = isset( $meta->info->social ) ? $meta->info->social : '';
						$position = isset( $meta->info->position ) ? $meta->info->position : '';

					?><div class="three tablet-six medium-six small-twelve columns employeeblock">
						<div class="hoverimg">

							<?php $content->img( 330, 330 ); ?>

							<?php if ( isset( $social ) && is_array( $social ) ): ?>

								<div class="mask">
									<span>

										<?php foreach ( $social as $icon ) : ?>

											<?php 

												$icon['icon'] = explode( '|', $icon['icon'] );
												$icon['icon'] = $icon['icon'][0];

											?>

											<a href="<?php echo $icon['url']; ?>" target="_blank">
												<i class="<?php echo $icon['icon']; ?>"></i>
											</a>

										<?php endforeach; ?>

									</span>
								</div>

							<?php endif; ?>

						</div>
						<h4 class="margin-top"><?php $content->title(); ?></h4>
						<h6 class="serif italic text-light"><?php echo $position; ?></h6>
						<?php $content->content(); ?>
					</div><?php endwhile; ?>

				<?php $content->resetLoop(); ?>

			<?php endif; ?>

		<?php endif; ?>

	</div>
</section>