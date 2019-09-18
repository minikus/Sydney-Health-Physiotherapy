<?php $t =& peTheme();?>
<?php $content =& $t->content; ?>
<?php $meta = $t->content->meta(); ?>

<?php $template = is_page() ? $t->content->pageTemplate() : false; ?>

<!-- Menu -->
<div class="main-menu <?php echo ( ( is_front_page() && is_page() ) || $template === "page_home.php" ) ? 'fixedmenu' : 'alreadyfixed'; ?>">
	
	<div class="menu-wrap">

		<?php $logo = $t->options->get("logo"); ?>

		<?php if ( ! empty( $logo ) ) : ?>

<!-- 			<a href="<?php echo home_url(); ?>" class="smoothscroll"><?php $t->image->retina($logo); ?></a> -->
				<a href="http://www.sydneyhealthphysio.com.au/" class="smoothscroll"><?php $t->image->retina($logo); ?></a>


		<?php else : ?>

<!-- 			<h1><a href="<?php echo home_url(); ?>" class="smoothscroll"><?php echo $t->options->get("siteTitle"); ?></a></h1> -->
				<h1><a href="http://www.sydneyhealthphysio.com.au/" class="smoothscroll"><?php echo $t->options->get("siteTitle"); ?></a></h1>


		<?php endif; ?>

		<input type="checkbox" id="toggle" />
		<label for="toggle" class="toggle"></label>

<!-- 		<?php $t->menu->show("main"); ?> -->
		<ul id="navigation" class="pe-menu menu">
			<li class="page_item page-item-4"><a href="http://www.sydneyhealthphysio.com.au/">Home</a></li>
			<li class="page_item page-item-2"><a href="http://www.sydneyhealthphysio.com.au/#section-about">Physiotherapy</a></li>
			<li class="page_item page-item-2"><a href="https://docbook.com.au/doctor/myhealth-sydney-cbd" target="_blank">Book</a></li>
			<li class="page_item page-item-4"><a style="color: #A3C624 !important;" href="http://www.sydneyhealthphysio.com.au/recuperate">Blog</a></li>
			<li class="page_item page-item-2"><a href="http://www.sydneyhealthphysio.com.au/#section-contact">Location</a></li>
		</ul>
		
<!--
		
								<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>Physiotherapy</div></a></li>
							<li><a href="#" data-href="#section-book"><div>Book</div></a></li>
							<li><a href="#" data-href="#section-blog"><div>Blog</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Location</div></a></li>
						</ul>
-->

<!-- 						<div id="side-panel-trigger"><a href="#"><i class="icon-location"></i></a></div> -->



	</div>
	
</div>


<!--
<div class="menu-wrap">

		
		
			<a href="http://www.sydneyhealthphysio.com.au/recuperate" class="smoothscroll"><img src="http://www.sydneyhealthphysio.com.au/recuperate/wp-content/uploads/2017/06/logo@2x.png" width="692" height="160" alt="" class="menu-logo"></a>

		
		<input type="checkbox" id="toggle">
		<label for="toggle" class="toggle"></label>

		<ul id="navigation" class="pe-menu menu"><li class="page_item page-item-4"><a href="http://www.sydneyhealthphysio.com.au/recuperate/contact-us/">Contact Us</a></li><li class="page_item page-item-2"><a href="http://www.sydneyhealthphysio.com.au/recuperate/sample-page/">Sample Page</a></li></ul>
	</div>
-->