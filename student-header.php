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

<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>student-style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>/print.css" type="text/css" media="print" />
<script type="text/javascript" src="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>js/infolit.js"></script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!-- UCF and CDL web bars -->

<script type="text/javascript" src="http://universityheader.ucf.edu/bar/js/university-header.js"></script>

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
    
        <div id="menu">
            <ul id="nav">
            <li class="first"><a href="/student/">Home</a></li>
			<?php 
                    //Lists all pages in the navigation bar
                    wp_list_pages('sort_column=menu_order&title_li=&exclude=4,25,27,29,31,34,38,54,60,85,202,230,218,342,431,458,489,494,603,612,617,620,622,624,626,628,630,632,635,641,645,651,653,656,658,660,663,665,667,786,790,794,797,800,806,809,820,823,826,829,832,835,844,847,856,856,859,861,863,865,867,869,886,889,891,893,895,897,899,901,911,914,916,918,920,922,924,938,941,943,945,947,949,951,953&depth=0'); 
             ?> 
            </ul>
        </div>           
	</div> 

<div id="main-content-wrapper">
        <div id="main-content">
