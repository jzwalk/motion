<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
* Page without sidebar
*
* @package custom
*/
?>
<?php $this->need('header.php'); ?>
<div id="main">
<div id="content" class="full">
<div class="post">
<div class="posttop">
<h2 class="posttitle"><?php $this->title() ?></h2>
</div><!-- /posttop -->
<div class="postcontent">
<?php $this->content('Read more &raquo;'); ?>
</div><!-- /postcontent -->
<?php if($this->user->hasLogin()): ?>
<small><a href="<?php $this->options->adminUrl('write-page.php?cid=' . $this->cid); ?>"><?php _e('Edit Page'); ?></a> | </small>
<?php endif; ?>
<small class="permalink"><a href="<?php $this->permalink() ?>" rel="bookmark" title="Permanent Link to <?php $this->title() ?>"><?php _e('Permanent Link'); ?></a></small>
</div><!-- /post -->
<div id="comments">
<?php $this->need('comments.php'); ?>
</div> <!-- Closes Comment -->
</div><!-- /content -->
<div class="cleared"></div>
</div><!-- ·main· --> 
<?php $this->need('footer.php'); ?>