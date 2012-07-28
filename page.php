<?php
/* page.php *
	固定ページの出力用テンプレート。サイドバー無しの1カラム。
	WordPressを普通のサイトとして使う場合に相当お世話になるテンプレート。
 */
?>
<?php get_header(); ?>

<div id="main">

<h1 class="pagetitle"><?php the_title(); ?></h1>

<!-- 投稿ここから -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>

</div><!-- /.type-page -->
<?php //ページ分割<!--nextpage-->を使った場合に、ページャーを出力
	wp_link_pages('before=<ul class="pager"><li>ページ</li>&after=</ul>&next_or_number=number&pagelink=<li>%</li>'); ?>
	
<?php endwhile; endif; ?>
<!-- /投稿ここまで -->

</div><!-- /#main -->

<?php get_sidebar() ;?>
<?php get_footer(); ?>
<!-- /page.php -->
