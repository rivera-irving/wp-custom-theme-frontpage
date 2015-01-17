<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-28450058-2', 'auto');
ga('require', 'displayfeatures');
 ga('send', 'pageview');
</script>


<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!-- fonts css links start here -->
<link href="<?php echo get_template_directory_uri(); ?>/fonts/Lora-Bold/lora-bold.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/fonts/Lora-Italic/lora-italic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/fonts/Lora-Regular/lora-regular.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/fonts/OpenSans-Semibold/opensans-semibold.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/fonts/OpenSans-Bold/opensans-bold.css" rel="stylesheet" type="text/css" />
<!-- fonts css links closed here -->

<?php wp_head(); ?>

<!-- scroll script start here -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ddscrollspy.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/calculation.js" type="text/javascript"></script>
<script>

jQuery(function($){ // on document load
	$('#horizontalmenu').ddscrollSpy({ // initialize first demo
		scrolltopoffset: -50
	})

	$('#verticalspymenu').ddscrollSpy({ // initialize 2nd demo
		spytarget: document.getElementById('contentcontainer'),
		scrollduration: 2000 // <-- no comma after last option!
	})
})

function dynamicadditem(){ // function that dynamically adds a new menu item to first demo, spying on #para6
	$('#verticalspymenu').append('<li><a href="#para5">Paragraph 5</a></li>')
	$('#verticalspymenu').trigger('updatespy')
}

</script>

<!-- scroll script closed here -->
</head>
<body>
	<div id="container">
	<?php if(is_front_page()) { ?>
<!-- header start here -->	
		<div class="header">
			<div class="wrapper">
				<ul id="horizontalmenu" class="underlinemenu"> 
					<li><a href="#section1" class="active">HOME</a></li>                                                                                                      
					<li><a href="#section2">FUNDAMENTALS</a></li>
					<li><a href="#section3">PSYCHOLOGY</a></li>
					<li><a href="#section4">SYSTEMS</a></li>
					<li><a href="#section5">OPTIONS</a></li>
					<li><a href="#section6">SECURE ORDER FORM</a></li>
				</ul>
			</div>
		</div>
<!-- header closed here -->	

<?php } else { ?>
<div class="header">
			<div class="wrapper">
				<a href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt=""></a>
			</div>
		</div>
<?php } ?>