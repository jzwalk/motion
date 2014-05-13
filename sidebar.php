<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="sidebar">
<ul>
<?php if (!empty($this->options->sidebarbox) && in_array('ShowRecentPosts', $this->options->sidebarbox)): ?>
<li class="boxed" id="postbox">
<h3><?php _e('Recent entries'); ?></h3>
<ul>
<?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
</li>
<?php endif; ?>
<?php if (!empty($this->options->sidebarbox) && in_array('ShowRecentComments', $this->options->sidebarbox)): ?>
<li class="boxed" id="commentbox">
<h3><?php _e('Recent comments'); ?></h3>
<ul>
<?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
<?php while($comments->next()): ?>
<li><?php $comments->gravatar(34, 'mm'); ?><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a><p><?php $comments->excerpt(35, '...'); ?></p></li>
<?php endwhile; ?>
</ul>
</li>
<?php endif; ?>
<?php if (!empty($this->options->sidebarbox) && in_array('ShowTagCloud', $this->options->sidebarbox)): ?>
<li class="boxed" id="tagbox">
<h3><?php _e('Browse popular tags'); ?></h3>
<ul>
<li>
<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=80')->to($tags); ?>
<?php while($tags->next()): ?>
<a rel="tag" href="<?php $tags->permalink(); ?>" class="size-<?php $tags->split(5, 10, 20, 30); ?>"><?php $tags->name(); ?></a>
<?php endwhile; ?>
</li>
</ul>
</li>
<?php endif; ?>
<?php if (!empty($this->options->sidebarbox) && in_array('ShowCategory', $this->options->sidebarbox)): ?>
<li class="boxed" id="categorybox">
<h3><?php _e('Categories'); ?></h3>
<ul>
<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a rel="category tag" href="{permalink}" title="{description}">{name}</a> ({count})</li>'); ?>
</ul>
</li>
<?php endif; ?>
<?php if (!empty($this->options->sidebarbox) && in_array('ShowMeta', $this->options->sidebarbox)): ?>
<li class="boxed" id="metabox">
<h3><?php _e('Meta'); ?></h3>
<ul>
<?php if($this->user->hasLogin()): ?>
<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('Site Admin'); ?> (<?php $this->user->screenName(); ?>)</a></li>
<li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('Log out'); ?></a></li>
<?php else: ?>
<li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('Log in'); ?></a></li>
<?php endif; ?>
<li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('Entries RSS'); ?></a></li>
<li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('Comments RSS'); ?></a></li>
</ul>
</li>
<?php endif; ?>
</ul>
</div><!-- ·sidebar· -->