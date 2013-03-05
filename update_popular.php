<?php
/*
Template Name: update popularity Page
*/
	//require wordpress header. This enables use of the $wpdb object
	require('../../../wp-blog-header.php');
	
		
	$id = $_GET['id'];
	
	$popular = $wpdb->get_results("SELECT meta_value FROM $wpdb->postmeta WHERE post_id = $id && meta_key='popular'");
	
	echo $popular[0]->meta_value;
	$value = $popular[0]->meta_value;
	
	$value++;

	$wpdb->query("UPDATE $wpdb->postmeta SET meta_value = $value WHERE post_id = $id");
?>