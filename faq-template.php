<?php
/*
Template Name: FAQ Template
*/

global $withcomments;
$withcomments=1;

function links_to_posts($category){
	$query_string = "category_name=".$category."&order=asc&posts_per_page=-1";
	query_posts($query_string);
		
	echo "<ol class='directory'>";
    if ( have_posts() ) : while ( have_posts() ) : the_post();
			echo "<li>";
			
				if ($category == 'student'){
					$half = trailingslashit( get_bloginfo('template_url') );
					echo "<a onclick=\"popular(";
						echo "'".$half."update_popular.php?id=";
						the_id();
						echo "'";
					echo ")\" href='#article";
				}
				
				else{
					echo "<a href='#article";
				}
					the_ID();
				echo "'>";
				the_title('');
				echo"</a>";
			echo "</li>";	
	endwhile; endif;
	
	wp_reset_query();
	echo"</ol>";
}

function print_posts($category, $parent){
	$query_string = "category_name=".$category."&order=asc&posts_per_page=-1";
	query_posts($query_string);
	
    if ( have_posts() ) : while ( have_posts() ) : the_post();
	
		// make the header id the post id
		echo "<h4 id='article";
		the_ID();
		echo"'>";
		the_title('');
		echo "</h4>";
		
		the_content('');

		//enable comments
		include("comments_function.php");
		
		echo"<p class='backtotop'><a href='#".$parent."-faq'>Back To Top</a></p>";
		
	endwhile; endif;
	
	wp_reset_query();

}

/////////PRINT PAGE////////////////////////////////////////////////////
$parent = get_the_title($post->post_parent);

	//include propper header for either student or faculty page
	$include_header = strtolower($parent)."-header.php";
	include($include_header);
	
	echo "<div id='test'></div>";
	
	// If the h2 is 'Faq', change to uppercase ('FAQ'), otherwise, leave as is.
	$h2 = ucfirst($post->post_name);
	if($h2 == 'Faq')
	{
		echo "<h2>".strtoupper($h2)."</h2>";
	}
	else
	{
		echo "<h2>".ucfirst($h2)."</h2>";
	}

	echo "<h3 id='general-faq'>General FAQ</h3>";

	//PRINT LINKS TO POSTS
	links_to_posts('general');
	
	if($parent == 'Faculty'){
		echo "<h3 id='faculty-faq'>Faculty FAQ</h3>";
		links_to_posts('faculty');
	}

	echo "<h3 id='student-faq'>Student FAQ </h3>";
	links_to_posts('student');
	
	//PRINT POSTS WITH ANSWERS 
	echo "<h3>General FAQ Answers</h3>";
	print_posts('general', 'general');

	if($parent == 'Faculty'){
		echo "<h3>Faculty FAQ Answers</h3>";
		print_posts('faculty', 'faculty');
	}

	echo "<h3>Student FAQ Answers</h3>";
	print_posts('student', 'student');

	//include footer for proper page
	$include_footer = strtolower($parent)."-footer.php";
	include($include_footer);
?>

