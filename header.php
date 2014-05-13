<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(array('category'=>_t('Category: %s'),'search'=>_t('Search Result: %s'),'tag'=>_t('Tag Archive: %s'),'author'=>_t('Author Archive: %s')),'',' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<?php if ($this->options->sitefav): ?>
<link rel="shortcut icon" href="<?php $this->options->sitefav() ?>" />
<?php endif; ?>
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/sfhover.js"></script>
<!--[if lt IE 7]>
<link href="<?php $this->options->themeUrl('ie6.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">
var clear="<?php $this->options->themeUrl('/images/clear.gif'); ?>"</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/unitpngfix.js'); ?>"></script>
<![endif]-->
<!--[if IE 7]>
<link href="<?php $this->options->themeUrl('ie7.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<?php $this->header(); ?>
</head>
<body>
<div id="wrapper">
<div id="top">
<div id="topmenu">
<ul>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
<li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
<?php endwhile; ?>
<li><a class="rss" href="<?php $this->options->feedUrl(); ?>">rss</a></li>
</ul>
</div><!-- /topmenu -->
<div id="search">
<form method="post" id="searchform" action="">
<p>
<input type="text" value="Search this site" onfocus="if (this.value == 'Search this site') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search this site...';}" name="s" id="searchbox" />
<input type="submit" class="submitbutton" value="GO" />
</p>
</form>
</div><!-- /search -->
</div><!-- /top -->
<div id="header">
<div id="logo">
<?php if ($this->options->sitelogo): ?>
<a href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->sitelogo() ?>" alt="<?php $this->options->title() ?>" /></a>
<?php endif; ?>
<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
<div id="desc"><?php $this->options->description() ?></div>
</div><!-- /logo -->
<div id="headerbanner">
<?php if ($this->options->headtext): $this->options->headtext(); ?>
<?php else: ?>
<p><?php _e('Hey there! Thanks for dropping by'); ?> <?php $this->options->title() ?><?php _e('! Take a look around and grab the'); ?> <a href="<?php $this->options->feedUrl() ?>"><?php _e('RSS feed'); ?></a> <?php _e('to stay updated. See you around!'); ?></p>
<?php endif; ?>
</div><!-- /headerbanner -->
</div><!-- /header -->
<?php $this->widget('Widget_Metas_Category_List')->to($categoryList); ?>
<div class="navmenu">
<ul id="nav">
<li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>" title="<?php _e('Home'); ?>"><?php _e('Home'); ?></a></li>
<?php while($categoryList->next()): ?>
<li<?php if($this->is('category', $categoryList->slug)): ?> class="current"<?php endif; ?>>
<a href="<?php $categoryList->permalink(); ?>" title="<?php $categoryList->name(); ?>"><?php $categoryList->name(); ?></a>
</li>
<?php endwhile; ?>
</ul><!-- ·nav· -->
</div>