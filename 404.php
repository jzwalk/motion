<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="main">
<div id="content">
<div class="post">
<div class="posttop">
<h2 class="posttitle"><a href="#"><?php _e('Oops! Page Not Found'); ?></a></h2>
</div><!-- /posttop -->
<div class="postcontent">
<p><?php _e('What you are looking for doesn\'t seem to exist. (Error 404)'); ?></p>
</div><!-- /postcontent -->
</div><!-- /post -->
</div><!-- end #content-->
<?php $this->need('sidebar.php'); ?>
</div><!-- ·main· -->
<?php $this->need('footer.php'); ?>