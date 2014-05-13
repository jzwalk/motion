<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
$lang = new Typecho_Widget_Helper_Form_Element_Radio('lang',
array('eng'=>_t('英文'),'chs'=>_t('中文')),'eng',_t('主题语言'), _t('中文后台报错问题不影响前台效果，可参考<a href="http://www.jzwalk.com/archives/net/typecho-theme-motion" target="_blank">解决办法&raquo;</a>。'));
$form->addInput($lang);

$homelist = new Typecho_Widget_Helper_Form_Element_Radio('homelist',
array('cont'=>_t('全文式'),'expt'=>_t('摘要式')),'cont',_t('首页列表'),_t('全文式下可用&lt;!--more--&gt;标签节选内容'));
$form->addInput($homelist);

$sitefav = new Typecho_Widget_Helper_Form_Element_Text('sitefav',
NULL, Helper::options()->siteUrl.'usr/themes/motion/images/favicon.ico', _t('主题favicon'), _t('尺寸=16x16  格式=ico'));
$sitefav->input->setAttribute('style', 'width:450px');
$form->addInput($sitefav->addRule('url', '请填写图片url地址'));

$sitelogo = new Typecho_Widget_Helper_Form_Element_Text('sitelogo',
NULL,Helper::options()->siteUrl.'usr/themes/motion/images/genericlogo.png', _t('主题logo'), _t('尺寸≈50x50  格式任意 支持透明'));
$sitelogo->input->setAttribute('style', 'width:450px');
$form->addInput($sitelogo->addRule('url', '请填写图片url地址'));

$headtext = new Typecho_Widget_Helper_Form_Element_Textarea('headtext',
NULL, '', _t('顶部公告'), _t('输入替换默认内容 支持html'));
$headtext->input->setAttribute('style', 'width:450px;height:80px;');
$form->addInput($headtext);

$sidebarbox = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarbox', 
array('ShowRecentPosts' => _t('最新文章'),
'ShowRecentComments' => _t('最近回复'),
'ShowCategory' => _t('分类列表'),
'ShowTagCloud' => _t('标签云集'),
'ShowMeta' => _t('登录订阅')),
array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowTagCloud', 'ShowMeta'), _t('侧边模块'));
$form->addInput($sidebarbox);

$linktext = new Typecho_Widget_Helper_Form_Element_Textarea('linktext',
NULL, '<li><a href="http://validator.w3.org">Valid XHTML</a></li>
<li><a href="http://www.typecho.org">Typecho</a></li>', _t('友情链接'), _t('用于底部模块显示'));
$linktext->input->setAttribute('style', 'width:450px;height:100px;');
$form->addInput($linktext);

$footscript = new Typecho_Widget_Helper_Form_Element_Textarea('footscript',
NULL, '<script type="text/javascript"></script>', _t('统计代码'), _t('用于底部最后载入'));
$footscript->input->setAttribute('style', 'width:450px;height:50px;');
$form->addInput($footscript);

}

if (Helper::options()->lang=="chs") {
Typecho_I18n::setLang(str_replace('\\','/',dirname(__FILE__)).'/lang/zh_Hans.mo');}