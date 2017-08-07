<?php
	/*
	Template Name: Student Modules Template
	*/
	//include the header to the parent page
	$parent = get_the_title($post->post_parent);
	$include_str = strtolower($parent)."-header.php";
	include($include_str);
	
	echo '<img src="/wp-content/themes/infolit/images/student/rotate.php" id="main" />';
	
global $withcomments;
$withcomments=1;

function links_to_posts($category){
	$query_string = "category_name=".$category."&orderby=meta_value_num&meta_key=list_order&order=asc&posts_per_page=-1";
	query_posts($query_string);
		
	echo "<ol class='directory'>";
    if ( have_posts() ) {
		while ( have_posts() ) {
			
			the_post();
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
		}
	}
		
	wp_reset_query();
	echo"</ol>";
}

function print_posts($category, $parent){
	$query_string = "category_name=".$category."&orderby=meta_value_num&meta_key=list_order&order=asc&posts_per_page=-1";
	query_posts($query_string);
	
    if ( have_posts() ) { 
		while ( have_posts() ) {
		
		//Increment to the next post
		the_post();
	
		// make the header id the post id
		echo "<span class='student_modules'>";
			echo "<p id='article";
			the_ID();
			echo"'>";
			echo "</p>";
			the_content('');
		echo "</span>";
		
		//enable comments
		include("comments_function.php");
		
		echo"<p class='backtotop'><a href='#top'>Back to Top</a></p>";
				
		}
	}
	
	wp_reset_query();

}


echo "<h2 id='top'>".ucfirst($post->post_name)."</h2>";

links_to_posts('Modules - Student');

print_posts('Modules - Student', 'student');

	//invlude the footer to the parent page
	$include_str = strtolower($parent)."-footer.php";
	include($include_str);

?>