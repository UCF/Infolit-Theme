<?php
/**
 * @package WordPress
 * @subpackage Infolit
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

 <title>Information Literacy</title>

<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>style.css" type="text/css" media="screen" />


<div id="error" >	
	<h1>Information Literacy</h1>

<div id="error_content">


           <h2 class="error-h2">Error: Page Not Found!</h2>
           <p class="error-p">We're sorry, but it appears as though the page you are looking for cannot be reached.  </p>
           <ul>
                  <li>Please check for any possible spelling errors</li>
                  <li>It is possible that the page you wanted either no longer exists or may have been moved or re-named
                  <ul>

                       <li>If this is the case then try searching to references to the link on a different page.</li>
                  </ul>
                  </li>
                  <li>As always, if you have any questions regarding the site, you can get in contact with us at <a href="mailto:infolit@mail.ucf.edu">infolit@mail.ucf.edu</a>
                  </li>
<p>Please choose one of the following options:</p>
           </ul>

<ul id="option_list">
   <li><a href="http://infolit.ucf.edu/students">Student Infolit</a></li>
   <li><a href="http://infolit.ucf.edu/faculty">Faculty Infolit</a></li>
</ul>

</div>




<?php

	//include footer for proper page
	$include_footer = strtolower($parent)."-footer.php";
	include('faculty-footer.php');
	
?>