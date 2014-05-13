<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="footer">
<div class="foot1">
<ul>
<li>
<h3><?php _e('Friends &amp; links'); ?></h3>
<ul>
<?php if ($this->options->linktext) {$this->options->linktext();} ?>
<!-- here for links plugin -->
</ul>
</li>
</ul>
</div><!-- /foot1 -->
<div class="foot2">
<ul>
<li>
<h3><?php _e('Pages'); ?></h3>
<ul>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
<li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
<?php endwhile; ?>
</ul>
</li>
</ul>
</div><!-- /foot2 -->
<div class="foot3">
<ul>
<li>
<h3><?php _e('Monthly archives'); ?></h3>
<ul>
<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y&limit=5')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
</ul>
</li>
</ul>
</div><!-- /foot3 -->
</div><!-- /footer -->
<div id="credits">
<div id="creditsleft">
<?php _e('Powered by %s. Theme: %s modified by %s.','<a href="http://www.typecho.org" rel="generator">Typecho)))</a>','<a href="http://www.webdesigncompany.net/motion/">Motion</a>','<a href="http://www.jzwalk.com" rel="designer">Jasper</a>'); ?>
</div><!-- /creditsleft -->
<div id="creditsright">
<a href="#top"><?php _e('&#91; Back to top &#93;'); ?></a>
</div><!-- /creditsright -->
</div><!-- /credits -->
<?php $this->footer(); ?>
</div><!-- ·wrapper· -->
<?php if ($this->options->footscript) {$this->options->footscript();} ?>
</body>
</html>