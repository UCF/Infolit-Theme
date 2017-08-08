<?php
/*
Template Name: News Template
*/

include('faculty-header.php');



// Image Rotator
$directory = get_template_directory_uri().'/images/faculty/';
?>




<img src="<?php echo($directory); ?>rotate.php" alt="Infolit" id="main" />

<h2 id="top">News</h2>

<?php

		$query_string = "category_name=News&order=desc&posts_per_page=-1";
	query_posts($query_string);
	
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		echo "<h3 id='article";
		echo the_title();
		echo "'>";
		echo the_title();
		echo "</h3>";
		
		the_content();
		
		//enable comments
		include("comments_function.php");
		
	endwhile; endif;

include("faculty-footer.php");

?>