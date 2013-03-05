<?php
/*
Template Name: Faculty Default Page, With HTML Fancybox
*/

include('faculty-header.php');
?>




        
        <?php 
		
		
		// Determines which image should be displayed based on the title of the current page.
		$current_page_title = wp_title('', false);
		$current_page_title = trim($current_page_title,  "\t\n ");
		
		if(!($current_page_title == 'Feedback' || $current_page_title == 'FAQ' || $current_page_title == 'What Is Information Fluency?'))
		{
			echo '<a href="#lightbox_content" id="main" class="infolit_captivate lightbox_link">Information Literacy Module Demo</a>';
		}
		
		?>
                        <?php 
							//Displays Page Content 
							if (have_posts()) : while (have_posts()) : the_post(); 
                        		the_content('<p>Read the rest of this page &raquo;</p>');							
							endwhile; endif;
							
							$page_type_field= get_post_meta($post->ID, 'page_type', true); 
						?>

		<div style="display:none;">	
			<div id="lightbox_content">
			<?php $key="lightbox_content"; echo get_post_meta($post->ID, $key, true); ?>
			</div>
		</div>
						
    
<?php  

include("faculty-footer.php");

?>

 