<div class="comment-form">
	<?php $fields = array(
		'author' => '<p><label for="author">' . __( 'Dein Name <em>(erforderlich)</em>' ) . '</label><br /><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
		'email' => '<p><label for="email">' . __( 'Deine E-Mail-Adresse <em>(erforderlich, wird aber nicht veröffentlicht)</em>' ) . '</label><br /><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
		'url' => '<p><label for="url">' . __( 'Deine Website' ) . '</label><br /><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
	);
	
	comment_form( array (
		'fields' => apply_filters( 'comment_form_default_fields', $fields ), 
		'comment_notes_before' => '<p>Bitte verfasse einen Kommentar.</p>', 
		'comment_notes_after' => '<p>Dein Kommentar wird vor der Freischaltung von einem Admin moderiert. </p>', 
		'title_reply' => __( '<h3>Beitrag kommentieren</h3>' )
	));
	?>
</div>


<div class="comment-list">
	<?php if ( have_comments() ) : ?>
	
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<div class="navigation">
	<div class="nav-previous"> <?php previous_comments_link( 'Ä̈ltere Kommentare' ); ?> </div>
	<div class="nav-next"> <?php next_comments_link( 'Neuere Kommentare' ); ?> </div>
	</div>
	<?php endif; ?>
	
	<ul>
	<?php wp_list_comments('type=all&callback=blacktheme_comments'); ?>
	</ul>
	
	<?php if ( ! comments_open() ) : ?>
	<p>Die Kommentare für diesen Beitrag sind geschlossen.</p>
	<?php endif; ?>
	
	<?php endif; ?>
</div>