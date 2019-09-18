<?php
/*
Template Name: Quotes
*/
?>
<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php get_header(); ?>
<?php while ($content->looping() ) : ?>
<?php get_template_part("pagecontent","quotes"); ?>
<?php endwhile; ?>
<?php get_footer(); ?>