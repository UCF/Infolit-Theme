<?php
/*
Template Name: Getting Started Template
*/

include('faculty-header.php');
	echo "<h2>Information Literacy Quick Start Guide</h2>";
	$category = get_the_title($post);
	
	$get_posts = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE meta_key='order'");
	
	echo "<ul class='directory nobullet'>";

    for ($x=1; $x <= count($get_posts); $x++){
		
			$id = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE meta_value=$x&&meta_key='order'");
			
			$this_id = $id[0]->post_id;
			
			$post = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE ID=$this_id");
			
			echo "<li>";
				echo "<a href='../order?order=".$x."'>";
				echo $post[0]->post_title;
				echo"</a>";
			echo "</li>";
			
			
	}
	
	wp_reset_query();
	echo"</ul>";
	
	echo "<p><a href='view-all/'>View All</a></p>";

include('faculty-footer.php');



?>