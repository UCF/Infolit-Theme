<?php
/**
 * @package WordPress
 * @subpackage infolit: research
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

 <title>Information Literacy</title>

<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>student-style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>/print.css" type="text/css" media="print" />
<script type="text/javascript" src="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>js/infolit.js"></script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!-- UCF and CDL web bars -->

<script type="text/javascript" src="https://universityheader.ucf.edu/bar/js/university-header.js"></script>

<!-- /web bars -->
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

?>

</head>
<body>

<div id="site">
<div id="content-head">
  <div id="logo">

        	<h1><a href="/"><span><?php bloginfo('name'); ?></span></a></h1>
            
     </div>
     <div id="research-menu"><span></span>
        </div>
	</div> 

<div id="main-content-wrapper">
        <div id="main-content">
