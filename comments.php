<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Cartan
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title gamma">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'cartan' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'cartan' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'cartan' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'cartan' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'cartan' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'cartan' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'cartan' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'cartan' ); ?></p>
	<?php endif; ?>

	<?php $commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' ); ?>
	<?php $comments_args = array(
	        // change the title of send button 
	        // change the title of the reply section
	        'title_reply'=>'Write a Reply or Comment',
	        // adds custom button default button dispaly:none and remove "Text or HTML to be displayed after the set of comment fields and"
	        'comment_notes_after' => '<button type="submit" id="submit-new" class="button button-submit"><span>'.__('Post Comment').'</span></button>',

					'fields' => apply_filters( 'comment_form_default_fields', array(
						//opens .row
  				  'author' =>
  				    '<div class="row"> <div class="large-6 medium-6 columns"> <p class="comment-form-author">' .
  				    '<label for="author" class="micro">' . __( 'Name', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
  				    
  				    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
  				    '" size="30"' . $aria_req . ' /></p> </div>',
				
  				  'email' =>
  				    '<div class="large-6 medium-6 columns"> <p class="comment-form-email"><label for="email" class="micro">' . __( 'Email', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
  				    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
  				    '" size="30"' . $aria_req . ' /></p> </div>',
				
  				  'url' =>
  				    '<div class="columns"> <p class="comment-form-url"><label for="url" class="micro">' .
  				    __( 'Website', 'domainreference' ) . '</label>' .
  				    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
  				    '" size="30" /></p> </div>'
  				  )
  				),

					// closes .row redefine your own textarea (the comment body)
	        'comment_field' => '<div class="columns"> <p class="comment-form-comment"><label for="comment" class="micro">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></p> </div> </div>',

	);
	
	comment_form( $comments_args ); ?>

</div><!-- #comments -->
