<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $replace = array("page_"=>"",".php"=>""); ?>
<?php $id = get_the_ID(); ?>

<?php if ($content->customLoop(
							   "page",-1,null,
							   array(
									 "post_type" => "page",
									 "post_parent" => apply_filters( 'pe_theme_home_get_page_parent', $id ),
									 "orderby" => "menu_order",
									 "order" => "ASC"
									 ),false)): 
?>
<?php while ($content->looping() ) : ?>
<?php $template = strtr($content->pageTemplate(),$replace); ?>
<?php if ($template === "home") continue; ?>
<?php get_template_part("pagecontent",$template); ?>
<?php endwhile; ?>
<?php $content->resetLoop(); ?>
<?php endif; ?>