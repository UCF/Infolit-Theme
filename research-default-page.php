<?php
/*
Template Name: Research Default Page
*/

include('research-header.php');

	
		
		// Determines which image should be displayed based on the title of the current page.
		$current_page_title = wp_title('', false);
		$current_page_title = trim($current_page_title,  "\t\n ");
		
		if(!($current_page_title == 'Feedback' || $current_page_title == 'Help'))
		{
		echo '<img src="/wp-content/themes/infolit/images/student/rotate.php" id="main" />';
		}
		

		

							//Displays Page Content 
							if (have_posts()) : while (have_posts()) : the_post(); 
                        		the_content('<p>Read the rest of this page &raquo;</p>');							
							endwhile; endif;
							
							$page_type_field= get_post_meta($post->ID, 'page_type', true); 
							

	include('student-footer.php');
?>