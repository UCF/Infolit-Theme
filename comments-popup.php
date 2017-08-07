<?php
/**
 * @package WordPress
 * @subpackage Infolit
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

 <title>Information Literacy</title>

<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>faculty_style.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!-- UCF and CDL web bars -->
<script type="text/javascript" src="http://universityheader.ucf.edu/bar/js/university-header.js"></script>

<!-- /web bars -->


</head>
<body>

<div id="site">
	<div id="content-head">
    	<div id="logo">

        	<h1><a href="/"><span><?php bloginfo('name'); ?></span></a></h1>
            
         </div>   
    
        <div id="menu">
            <ul id="nav">
            <li class="first"><a href="/faculty/">About</a></li>
			<?php 
			//Lists all pages in the navigation bar; excludes parent and student pages.
			wp_list_pages('sort_column=menu_order&title_li=&include=25,27,29,31,34,38&depth=0'); 
			?> 
            </ul>
        </div>           
	</div> 

<div id="main-content-wrapper">
        <div id="main-content">
<?php
/* Don't remove these lines. */
add_filter('comment_text', 'popuplinks');
if ( have_posts() ) :
while ( have_posts() ) : the_post();
?>
<h2 id="comments">Comments</h2>

<p><a href="<?php echo get_post_comments_feed_link($post->ID); ?>"><abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.</a></p>

<?php if ( pings_open() ) { ?>
<p>The <abbr title="Universal Resource Locator">URL</abbr> to TrackBack this entry is: <em><?php trackback_url() ?></em></p>
<?php } ?>

<?php
// this line is WordPress' motor, do not delete it.
$commenter = wp_get_current_commenter();
extract($commenter);
$comments = get_approved_comments($id);
$post = get_post($id);
if ( post_password_required($post) ) {  // and it doesn't match the cookie
	echo(get_the_password_form());
} else { ?>

<?php if ($comments) { ?>
<ol id="commentlist">
<?php foreach ($comments as $comment) { ?>
	<li id="comment-<?php comment_ID() ?>">
	<?php comment_text() ?>
	<p><cite><?php comment_type('Comment', 'Trackback', 'Pingback'); ?> by <?php comment_author_link() ?> &#8212; <?php comment_date() ?> @ <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a></cite></p>
	</li>

<?php } // end for each comment ?>
</ol>
<?php } else { // this is displayed if there are no comments so far ?>
	<p>No comments yet.</p>
<?php } ?>

<?php if ( comments_open() ) { ?>
<h2>Leave a comment</h2>
<p>Line and paragraph breaks automatic, e-mail address never displayed, <acronym title="Hypertext Markup Language">HTML</acronym> allowed: <code><?php echo allowed_tags(); ?></code></p>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
	<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url('page.php'); ?>" title="Log out of this account">Log out &raquo;</a></p>
<?php else : ?>
	<p>
	  <input type="text" name="author" id="author" class="textarea" value="<?php echo esc_attr($comment_author); ?>" size="28" tabindex="1" />
	   <label for="author">Name</label>
	</p>

	<p>
	  <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="28" tabindex="2" />
	   <label for="email">E-mail</label>
	</p>

	<p>
	  <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="28" tabindex="3" />
	   <label for="url"><abbr title="Universal Resource Locator">URL</abbr></label>
	</p>
<?php endif; ?>

	<p>
	  <label for="comment">Your Comment</label>
	<br />
	  <textarea name="comment" id="comment" cols="70" rows="4" tabindex="4"></textarea>
	</p>

	<p>
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	  <input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER["REQUEST_URI"]); ?>" />
	  <input name="submit" type="submit" tabindex="5" value="Say It!" />
	</p>
	<?php do_action('comment_form', $post->ID); ?>
</form>
<?php } else { // comments are closed ?>
<p>Sorry, the comment form is closed at this time.</p>
<?php }
} // end password check
?>

<div><strong><a href="javascript:window.close()">Close this window.</a></strong></div>

<?php // if you delete this the sky will fall on your head
endwhile; //endwhile have_posts()
else: //have_posts()
?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<!-- // this is just the end of the motor - don't touch that line either :) -->
<?php //} ?>
<p class="credit"><?php timer_stop(1); ?> <cite>Powered by <a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform"><strong>WordPress</strong></a></cite></p>
<?php // Seen at http://www.mijnkopthee.nl/log2/archive/2003/05/28/esc(18) ?>
<script type="text/javascript">
<!--
document.onkeypress = function esc(e) {
	if(typeof(e) == "undefined") { e=event; }
	if (e.keyCode == 27) { self.close(); }
}
// -->
</script>
        </div>
    </div>
    
    <div id="content-foot">
            <div id="footer">
            	<p>&copy; <?php echo date("Y"); ?> University of Central Florida</p>
            </div>
	</div>
</div>

</body>
</html>
