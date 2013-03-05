<?php
/*
Template Name: Paging
*/

include('faculty-header.php');

	$order = $_GET['order'];
	
	// Query Wordpress Database for the row where the meta-data 'order' = $order
	$get_id = $wpdb->get_row("SELECT * FROM $wpdb->postmeta WHERE meta_value=$order&&meta_key='order'");
	$id=$get_id->post_id;
	
	//Return number of rows with metadata 'order'
	$get_num = count($wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE meta_key='order'"));

	$query_string = "category_name=Quickstart&p=".$id;
	query_posts($query_string);
	
		$custom_id = get_post_custom_values('order');
		echo "<h2>Information Literacy Quick Start Guide</h2>";
		
		
		// if first post
		if ( have_posts() ) : while ( have_posts() ) : the_post();
            echo "<ul id='mod-guide-nav'>";
			
				if($order>1){
					$prev = $custom_id[0]-1;
                	echo "<li id='prev'><a href='../order?order=".$prev."'>Prev</a></li>";
				}
				
				else{
					echo "<li id='prev'>&nbsp;</a></li>";
				}
			
            		echo "<li><a href='/quickstart/'>Table of Contents</li>";
				
				// If Last Post
				if($order < $get_num){
					$next = $custom_id[0]+1;
                	echo "<li id='next'><a href='../order?order=".$next."'>Next</a></li>";
				}
				
				else{
					echo "<li id='next'></a></li>";
				}
            echo "</ul>";
            
         	echo"<h3 class='clear'>";
			the_title();
			echo"</h3>";
			
			the_content();
			
			echo "<p class='center'><a href='/faculty/quickstart/view-all/'>View All</a></p>";
			endwhile; endif;
include('faculty-footer.php');

?>