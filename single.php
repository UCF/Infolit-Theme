<?php
/**
 * @package WordPress
 * @subpackage Infolit
 */

?>

	

	<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <?php
		//list the categories a student post can beling to
		$student_cats = array("Module - Student", "Student");
		
		//get this posts category The category value will be in $cat[0]->name
		$cat = get_the_category($post->ID);
		
		//if the category is listed in $student_cats the post is student related; else post is faculty related
		if (in_array($cat[0]->name, $student_cats)) $parent = "student";
		
		else $parent = "faculty";
		
		//in clude appropriate header
		include($parent."-header.php");
	
	?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h3><?php the_title(); ?></h3>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
					<small>
						<!-- This entry was posted
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/wordpress/time-since/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
						and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site. -->

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site. -->

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed. -->

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed. -->

						<?php }  ?>

					</small>
				</p>
</div></div>
	<?php 

	include("comments_function.php");	
	
	?>
    




	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; 

include($parent."-footer.php");


?>

