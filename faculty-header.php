<?php
/**
 * @package WordPress
 * @subpackage infolit: faculty
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

 <title>Information Literacy</title>

<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>faculty-style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>/print.css" type="text/css" media="print" />
<script type="text/javascript" src="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>js/infolit.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js'></script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if (is_page_template('faculty-default-html-page.php')): ?>
	
<script type="text/javascript" src="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>js/fancybox/jquery.fancybox-1.3.4.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />



<script type="text/javascript">
	$(document).ready(function() {

		$(".lightbox_link").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'onComplete'		: function(){
									$("#lightbox_content").find('video').get(0).play();
								}
		});
		
	});
</script>

<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		$(".lightbox_link").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
		});
		
	});
</script>
<![endif]-->

<?php endif; ?>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

wp_head();

?>


<!-- UCF and CDL web bars -->

<script type="text/javascript" src="http://universityheader.ucf.edu/bar/js/university-header.js"></script>

<!-- /web bars -->


</head>
<body>

<div id="site">
	<div id="content-head">
    	<div id="logo">

        	<h1><a href="/"><span><?php bloginfo('name'); ?></span></a></h1>
            
         </div>   
    
        <div id="menu">
            <ul id="nav">
            <li class="first"><a href="/faculty/">About</a></li>
			<?php 
			//Lists all pages in the navigation bar; excludes parent and student pages.
			wp_list_pages('sort_column=menu_order&title_li=&include=25,27,29,31,34,38,1446&depth=0'); 
			?> 
            </ul>
        </div>           
	</div> 

<div id="main-content-wrapper">
        <div id="main-content">
