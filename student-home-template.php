<?php
/*
Template Name: Student Home Page
*/


include('student-header.php');


		
		

		
		

							//Displays Page Content 
							if (have_posts()) : while (have_posts()) : the_post(); 
                        		the_content('<p>Read the rest of this page &raquo;</p>');							
							endwhile; endif;
							
							$page_type_field= get_post_meta($post->ID, 'page_type', true); 
							
							
							//print random module
							
							$query_string = "category_name=Modules - Student&order=asc&posts_per_page=-1";
							$module = query_posts($query_string);
							$x = rand(0,count($module)-1);
							
							$id = $module[$x]->ID;
								echo "<h2 id='spotlight'><a class='padd' href='modules/'>Module Spotlight</a></h2>";
								echo '<p class="seeall"><a href="modules/">See All Modules</a></p>';
							
								$query_string = "p=$id";
								query_posts($query_string);
								echo "<span class='student_modules'>";
								if (have_posts()) : while (have_posts()) : the_post();
								the_content();
							echo "</span>";
							include("comments_function.php");
							
							endwhile; endif;
							
							
							//print most popular faq
							
							$get_posts = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE meta_key='popular'");
							
							$popular = $get_posts[0];
							
							foreach($get_posts as $post){
								if($popular->meta_value < $post->meta_value){
									$popular = $post;
								}
							}
							
							$id = $popular->post_id;
							
							$query_string = "p=$id";
							query_posts($query_string);
							
							if ( have_posts() ) : while ( have_posts() ) : the_post();
							
								echo "<h2 id='faq'><a class='padd' href='help/'>Most Popular FAQ</a></h2>";
								
								echo '<p class="seeall"><a href="help/">See All Help</a></p>';
								
								echo "<h3>";	
									the_title();
								echo "</h3>";
								
								
									the_content();
							
								include("comments_function.php");
								
							endwhile; endif;
							
	include('student-footer.php');
?>