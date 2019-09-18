<?php
/*
Template Name: Call to Action
*/
?>
<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php get_header(); ?>
<?php while ($content->looping() ) : ?>
<?php get_template_part("pagecontent","calltoaction"); ?>
<?php endwhile; ?>
<?php get_footer(); ?>