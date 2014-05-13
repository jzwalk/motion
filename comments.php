<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) {
$commentClass = '';
if ($comments->authorId) {
if ($comments->authorId == $comments->ownerId) {
$commentClass .= ' admin';
}
} ?>
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
if ($comments->levels > 0) {
echo ' comment-child';
$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;?>">
<div id="<?php $comments->theId(); ?>" class="comment-wrap">
<?php $comments->gravatar(50, 'mm'); ?>
<div class="commentbody">
<div class="author">
<?php $comments->author(); ?>
</div>
<?php if ('waiting' == $comments->status): ?>
<em><?php _e('(Your comment is awaiting moderation...)'); ?></em>
<?php endif; ?>
<div class="commentmetadata"> 
<a href="<?php $comments->permalink() ?>"><?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?></a>
</div>
<?php $comments->content(); ?>
</div><!-- /commentbody -->
<div class="reply"><?php $comments->reply(_t('Reply')); ?></div>
</div><!-- /comment -->
<?php if ($comments->children): ?>
<div class="children">
<?php $comments->threadedComments($options); ?>
</div>
<?php endif; ?>
</li>
<?php } ?>
<?php $this->comments()->to($comments); ?>
<?php if($this->allow('comment')):?>
<h3><?php $this->commentsNum(_t('No Comments filed.'), _t('One Comment:'), _t('%d Comments:')); ?></h3>
<?php if ($comments->have()): ?>
<?php $comments->listComments(array('before'=>'<ul class="commentlist">','after'=>'</ul>',)); ?>
<?php if ($this->options->commentsPageBreak): ?>
<div id="navigation">
<?php $comments->pageNav(); ?><li></li>
</div><!-- /navigation -->
<?php endif; ?>
<?php endif; ?>
<div id="<?php $this->respondId(); ?>" class="respond">
<h3><?php _e('Leave a Comment:'); ?></h3>
<div id="cancel-comment-reply">
<small><?php $comments->cancelReply('(... Or click here to cancel reply.)'); ?></small>
</div>
<form method="post" id="commentform" action="<?php $this->commentUrl() ?>">
<?php if($this->user->hasLogin()): ?>
<p class="logged-in-as"><?php _e('Logged in as'); ?> <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Log out"><?php _e('Logout &raquo;'); ?></a></p>
<?php else: ?>
<p>
<label for="author"><?php _e('Name'); ?> <span class="required"><?php _e('(required)'); ?></span></label>
<input type="text" name="author" id="author" size="22" tabindex="1" value="<?php $this->remember('author'); ?>" class="text" />
</p>
<p>
<label for="mail"><?php _e('Email'); ?> <?php if ($this->options->commentsRequireMail): ?><span class="required"><?php _e('(required)'); ?></span><?php else: ?><?php _e('(optional)'); ?><?php endif; ?></label>
<input type="text" name="mail" id="mail" size="22" tabindex="2" value="<?php $this->remember('mail'); ?>" class="text" />
</p>
<p>
<label for="url"><?php _e('Website'); ?> <?php if ($this->options->commentsRequireURL): ?><span class="required"><?php _e('(required)'); ?></span><?php else: ?><?php _e('(optional)'); ?><?php endif; ?></label>
<input type="text" name="url" id="url" size="22" tabindex="3" value="<?php $this->remember('url'); ?>" class="text" />
</p>
<?php endif; ?>
<p><textarea name="text" id="comment" cols="100%" rows="10" tabindex="4" class="textarea" ><?php $this->remember('text'); ?></textarea></p>
<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment'); ?>" class="submitbutton" /></p>
</form>
</div><!-- ·respond· -->
<?php else: ?>
<p class="nocomments"><?php _e('Comments are closed.'); ?></p>
<?php endif; ?>