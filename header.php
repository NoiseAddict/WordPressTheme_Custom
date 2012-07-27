<?php
/* header.php *
　すべてのページにおいて共通で読み込むヘッダーテンプレート。
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<!--<meta name="description" content="サイトの説明とか" />
<meta name="keywords" content=",,,,,," />-->
<?php if ( is_front_page()): ?>
<!-- トップページでのタイトルタグ表記 -->
<title><?php bloginfo('name'); ?>｜<?php bloginfo('description'); ?></title>
<?php else: ?>
<!-- それ以外のページでのタイトルタグ表記 -->
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo '｜'; } ?><?php bloginfo('name'); ?></title>
<?php endif; ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

<div id="header">
	<div id="title"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></div>
	<p><?php bloginfo('description'); ?></p>
</div><!-- /#header -->

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div id="global">
<?php wp_nav_menu( //カスタムメニュー未使用時は　<div class="menu"><ul><li>...</li></ul></div>　と出力される
	array( //カスタムメニュー使用時は　<ul id="menu-***" class="menu"><li>...</li></ul>（***は作成したメニュー名）となる
        'container' => '',//カスタムメニュー使用時に、ulを囲む要素を指定（指定できるのはdivかnav。空白の場合は囲まない）
        'theme_location' => 'global' //カスタムメニューの識別スラッグ（functions.phpに記載したもの）
 ) ); ?>
</div><!-- /#global -->
<!-- /header.php -->