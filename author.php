<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="main">
<div id="content">
<h2 id="contentdesc"><?php _e('Entries by'); ?> <span><?php $this->author(); ?></span> <?php _e('&raquo;'); ?></h2>
<?php while($this->next()): ?>
<div class="post">
<div class="posttop">
<h2 class="posttitle"><a href="<?php $this->permalink() ?>" rel="bookmark" title="Permanent Link to <?php $this->title() ?>"><?php $this->title() ?></a></h2>
<div class="postmetatop">
<div class="categs"><?php _e('Filed Under:'); ?> <?php $this->category(','); ?></div>
<div class="date"><span><?php $this->date('M.d, Y'); ?></span></div>
</div><!-- /postmetatop -->
</div><!-- /posttop -->
</div><!-- /post -->
<?php endwhile; ?>
<div id="navigation">
<?php $this->pageNav(); ?>
</div><!-- /navigation -->
</div><!-- /content -->
<?php $this->need('sidebar.php'); ?>
</div><!-- ·main· -->
<?php $this->need('footer.php'); ?>