<?php
/*
Template Name: Blank Template
Description: This template has no included elements and is meant to be used for pages that will be inserted by iframe into other pages/websites.
*/
?>

<?php  get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(__('(more...)')); ?>
<?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
<?php  get_footer(); ?>
