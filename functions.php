<?php
/**
 * @package WordPress
 * @subpackage infolit
 */

$content_width = 450;

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

// Get custom field value.
function get_custom_field_value($szKey, $bPrint = false) {
	global $post;
	$szValue = get_post_meta($post->ID, $szKey, true);
	if ( $bPrint == false ) return $szValue; else echo $szValue;
}




function infolit_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comments_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
        

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_a_comments_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_a_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_a_comments_date(),  get_a_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <?php comment_text() ?>

      <div class="reply">
         <?php comments_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
        }
		
		
add_filter('send_password_change_email', '__return_false');


//Register all Wordpress menus
//============================
function register_my_menus() {
  register_nav_menus(
    array(
      'student-menu' => __( 'Student Menu' ),
      'faculty-menu' => __( 'Faculty Menu'),
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
