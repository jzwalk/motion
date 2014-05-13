<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="main">
<div id="content">
<?php if ($this->have()): ?>
<?php /* If this is a category archive */ if ($this->is('category')) { ?>
<h2 id="contentdesc"><?php _e('Category:'); ?> <span><?php $this->archiveTitle('','',''); ?></span></h2>
<?php /* If this is a tag archive */ } elseif($this->is('tag')) { ?>
<h2 id="contentdesc"><?php _e('Tag Archive:'); ?> <span><?php $this->archiveTitle('','',''); ?></span></h2>
<?php /* If this is a daily archive */ } elseif ($this->is('date','day')) { ?>
<h2 id="contentdesc"><?php _e('Archive for'); ?> <span><?php $this->date('F jS, Y'); ?></span></h2>
<?php /* If this is a monthly archive */ } elseif ($this->is('date','month')) { ?>
<h2 id="contentdesc"><?php _e('Archive for'); ?> <span><?php $this->date('F, Y'); ?></span></h2>
<?php /* If this is a yearly archive */ } elseif ($this->is('date','year')) { ?>
<h2 id="contentdesc"><?php _e('Archive for'); ?> <span><?php $this->date('Y'); ?></span></h2>
<?php /* If this is an author archive */ } elseif ($this->is('author')) { ?>
<h2 id="contentdesc"><?php _e('Author:'); ?> <span><?php $this->archiveTitle('','',''); ?></span></h2>
<?php } ?>
<?php while($this->next()): ?>
<div class="post">
<div class="posttop">
<h2 class="posttitle"><a href="<?php $this->permalink() ?>" rel="bookmark" title="Permanent Link to <?php $this->title() ?>"><?php $this->title() ?></a></h2>
<div class="postmetatop">
<div class="categs"><?php _e('Filed Under:'); ?> <?php $this->category(','); ?> <?php _e('by'); ?> <a href="<?php $this->author->permalink(); ?>" title="<?php $this->author(); ?>"><?php $this->author(); ?></a></div>
<div class="date"><span><?php $this->date('M.d, Y'); ?></span></div>
</div><!-- /postmetatop -->
</div><!-- /posttop -->
<div class="postcontent">
<?php $this->excerpt(250, ' [...]'); ?>
</div><!-- /postcontent -->
<div class="postmetabottom">
<div class="tags"><?php _e('Tags'); ?>: <?php $this->tags(', ', true, _t('none')); ?></div>
<div class="readmore"><span><a href="<?php $this->permalink() ?>"><?php _e('Read more'); ?></a></span></div>
</div><!-- /postmetabottom -->
</div><!-- /post -->
<?php endwhile; ?>
<?php else: ?>
<div class="post">
<div class="posttop">
<h2 class="posttitle"><a href="#"><?php _e('Oops!'); ?></a></h2>
</div><!-- /posttop -->
<div class="postcontent">
<p><?php _e('What you are looking for doesn\'t seem to be on this page...'); ?></p>
</div><!-- /postcontent -->
</div><!-- /post -->
<?php endif; ?>
<div id="navigation">
<?php $this->pageNav(); ?>
</div><!-- /navigation -->
</div><!-- /content -->
<?php $this->need('sidebar.php'); ?>
</div><!-- ·main· -->
<?php $this->need('footer.php'); ?>