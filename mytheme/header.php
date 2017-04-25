<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	    
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="google-site-verification" content="XtrdROqhbzPz0vkEpOs4jvYIBB9RMhoIlH0d6V-Jhbc" />
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<nav class="navbar navbar-default" role="navigation">

	  <div class="container-fluid" id="headerContainer">

	    <div class="navbar-header">

	    <p class="navbar-brand header">

	      	Alan Kerbel

	    </p>

	    </div>
	    
	    <div class="navbarp">
		<p class="navbar-text navbar-right header"><a href="#contact" class="navbar-link header">CONTACT</a></p>
		</div>

	  </div>

	</nav>