<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
* WordPress.com透明主题完美移植，支持多项自定义设置。
*
* @package Motion
* @author 羽中
* @version 1.1.0
* @link http://www.jzwalk.com/archives/net/typecho-theme-motion
*/
$this->need('header.php');
?>
<div id="main">
<div id="content">
<h2 id="contentdesc"><?php _e('Latest %sEntries%s &raquo;','<span>','</span>'); ?></h2>
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
<?php if ($this->options->homelist=='cont'): $this->content(_t('View full article &raquo;')); else: $this->excerpt(250,' [...]'); endif; ?>
</div><!-- /postcontent -->
<div class="postmetabottom">
<div class="tags"><?php _e('Tags'); ?>: <?php $this->tags(', ', true, _t('none')); ?></div>
<div class="readmore"><span><a href="<?php $this->permalink() ?>"><?php _e('Read more'); ?></a></span></div>
</div><!-- /postmetabottom -->
</div><!-- /post -->
<?php endwhile; ?>
<div id="navigation">
<?php $this->pageNav(); ?>
</div><!-- /navigation -->
</div><!-- /content -->
<?php $this->need('sidebar.php'); ?>
</div><!-- ·main· --> 
<?php $this->need('footer.php'); ?>