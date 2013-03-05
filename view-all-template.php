<?php
/*
Template Name: View All Getting Started
*/

function links_to_posts($category){
	$query_string = "category_name=".$category."&meta_key=order&orderby=meta_value&order=asc&posts_per_page=-1";
	query_posts($query_string);
		
	echo "<ol class='directory'>";
    if ( have_posts() ) : while ( have_posts() ) : the_post();
			echo "<li>";
				echo "<a href='#article";
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
	$query_string = "category_name=".$category."&meta_key=order&orderby=meta_value&order=asc&posts_per_page=-1";
	query_posts($query_string);
	
    if ( have_posts() ) : while ( have_posts() ) : the_post();
	
		// make the header id the post id
		echo "<h2 id='article";
		the_ID();
		echo"'>";
		the_title('');
		echo "</h2>";
		
		the_content('');
		echo"<p class='backtotop'><a href='#backtotop'>Back to Top</a></p>";
	endwhile; endif;
	
	wp_reset_query();

}
include('faculty-header.php');
echo '<a id="backtotop"></a>';
echo "<p class='center'><a href='/quickstart/'>Table of Contents</a></p>";
links_to_posts('quickstart');
print_posts('quickstart', 'a');

include('faculty-footer.php');
?>