<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package VW Fitness
 */

?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="<?php echo esc_url(__('http://gmpg.org/xfn/11', 'vw-fitness'));?>">

<?php wp_head();?>
</head>

<body <?php body_class();?>>
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu', 'vw-fitness');?></a></div>

  <div id="header">
    <div class="container">
      <div class="row">
        <div class="logo col-md-3">
<?php if (has_custom_logo()) {vw_fitness_the_custom_logo();
} else {?>
		          <h1><a href="<?php echo esc_url(home_url('/'));?>" rel="home"><?php bloginfo('name');
	?></a></h1>
	<?php $description = get_bloginfo('description', 'display');
	if ($description || is_customize_preview()):?>
		            <p class="site-description"><?php echo esc_html($description);?></p>
	<?php endif;}?>
</div>
        <div class="nav col-md-9">
<?php wp_nav_menu(array('theme_location' => 'primary'));?>
</div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

<?php if (is_singular() && has_post_thumbnail()):?>
    <?php
$thumb      = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'vw-fitness-post-image-cover');
$post_image = $thumb['0'];
?>
    <div class="header-image bg-image" style="background-image: url(<?php echo esc_url($post_image);?>)">

<?php the_post_thumbnail('vw-fitness-post-image');?>
</div>

<?php  elseif (get_header_image()):?>
  <div class="header-image bg-image" style="background-image: url(<?php header_image();?>)">
    <a href="<?php echo esc_url(home_url('/'));?>" rel="home">
      <img src="<?php header_image();?>" width="<?php echo esc_attr(get_custom_header()->width);?>" height="<?php echo esc_attr(get_custom_header()->height);?>" alt="">
    </a>
  </div>
<?php endif;// End header image check. ?>