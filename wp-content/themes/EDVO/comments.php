<?php if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die(); ?>

<?php if (post_password_required()) : ?>
	<p class="post-password"><?php _e('Cette article est protégé par un mot de passe. Entrer le mot de passe pour voir les commentaires', 'h5'); ?></p>
<?php return; endif; ?>

<div id="comments">

	<div class="comments">
	
		<?php if (have_comments()) : ?>

			<h3><?php comments_number('Pas de Réponses', 'Une Reponse', '% Reponses'); ?> <?php _e('à', 'h5'); ?> &ldquo;<?php the_title(); ?>&rdquo;</h3>
			
			<ol class="comments-list">
				<?php wp_list_comments(array('type' => 'comment', 'avatar_size' => 50)); ?>
			</ol>
	
			<?php if ((int) get_option('page_comments') === 1) : // display only when paged comments are enabled ?>
			
			<div class="nav nav-comments">
				<div class="prev"><?php previous_comments_link(); ?></div>
				<div class="next"><?php next_comments_link(); ?></div>
			</div>
			
			<?php endif; ?>
		
		<?php else : // no comments yet.. ?>
	
			<?php if (comments_open()) : // no comments, but comments open ?>
			<!--p>Be the first to respond..</p-->
			
			<?php else : // no comments, and comments closed ?>
			<!--p>Comments are closed.</p-->
		
			<?php endif; ?>
	
		<?php endif; ?>

	</div>

	<?php if (comments_open()) : ?>
	 
	<?php	$fields =  array(

  		'author' =>
    		'<p class="comment-form-author">'.
    		'<input id="author" name="author" type="text" placeholder="YOUR NAME" value="' . esc_attr( $commenter['comment_author'] ) .
    		'" size="30"' . $aria_req . ' /></p>',

  		'email' =>
    		'<p class="comment-form-email">'.
    		'<input id="email" name="email" type="text" placeholder="YOUR EMAIL" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    		'" size="30"' . $aria_req . ' /></p>',
		);
		
		comment_form(array(
		'fields' => $fields
		)); ?>
		   
	<?php else : ?>

		<div id="respond" class="comments-respond">
			<p><?php _e('Comments are closed.', 'h5'); ?></p>
		</div>

	<?php endif; ?>

</div>