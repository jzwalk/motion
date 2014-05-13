<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="main">
<div id="content">
<div class="post">
<div class="posttop">
<h2 class="posttitle"><?php $this->title() ?></h2>
<div class="postmetatop">
<div class="categs"><?php _e('Filed Under:'); ?> <?php $this->category(','); ?> <?php _e('by'); ?> <a href="<?php $this->author->permalink(); ?>" title="<?php $this->author(); ?>"><?php $this->author(); ?></a></div>
<div class="date"><span><?php $this->date('M.d, Y'); ?></span></div>
</div><!-- /postmetatop -->
</div><!-- /posttop -->
<div class="postcontent">
<?php $this->content('Read more &raquo;'); ?>
<p>
<span class="alignleft"><?php $this->thePrev($format = '&laquo; %s'); ?></span>
<span class="alignright"><?php $this->theNext($format = '%s &raquo;'); ?></span>
</p>
<div class="clear"></div>
</div><!-- /postcontent -->
<?php if($this->user->hasLogin()): ?>
<small><a href="<?php $this->options->adminUrl('write-post.php?cid=' . $this->cid); ?>"><?php _e('Edit Post'); ?></a> | </small>
<?php endif; ?>
<small class="permalink"><a href="<?php $this->permalink() ?>" rel="bookmark" title="Permanent Link to <?php $this->title() ?>"><?php _e('Permanent Link'); ?></a></small>
<div class="postmetabottom">
<div class="tags"><?php _e('Tags'); ?>: <?php $this->tags(', ', true, _t('none')); ?></div>
<div class="readmore"><a href="<?php $this->feedUrl(); ?>"><?php _e('<abbr title="%s">RSS</abbr> feed','Really Simple Syndication'); ?></a></div>
</div><!-- /postmetabottom -->
</div><!-- /post -->
<div id="comments">
<?php $this->need('comments.php'); ?>
</div> <!-- Closes Comment -->
</div><!-- /content -->
<?php $this->need('sidebar.php'); ?>
</div><!-- ·main· --> 
<?php $this->need('footer.php'); ?>