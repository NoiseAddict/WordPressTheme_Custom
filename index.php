<?php
/*index.php*
	各条件にあてはまるテンプレートが無かった時に、最後に適用されるデフォルトテンプレート。
	このファイルはなるべくいじらないで残しておくと、カスタマイズに失敗した時の復旧が楽。
 */
?>
<?php get_header(); ?>

<div id="main">

<!-- ページタイトル（条件により表示方法切替） -->
<?php if(is_category()): ?>
<h1 class="pagetitle">『<?php single_cat_title(); ?>』カテゴリーの投稿一覧</h1>
<?php elseif(is_tag()): ?>
<h1 class="pagetitle">『<?php single_cat_title(); ?>』タグの付いた投稿</h1>
<?php elseif(is_month()): ?>
<h1 class="pagetitle"><?php echo get_query_var('year');?>年<?php echo get_query_var('monthnum');?>月の投稿一覧</h1>
<?php /* この書き方は、パーマリンクをデフォルト以外にしている場合のみ有効です。デフォルトのままだと、「0年0月」になります。デフォルトパーマリンクの時は、 
<?php $thisyear = substr($m, 0, 4);
$thismonth = substr($m, 4, 2);
echo $thisyear . '年'. $thismonth . '月'; ?>
というコードに差し替えてください。
*/ ?>
<?php elseif(is_author()): ?>
<h1 class="pagetitle">投稿者のアーカイブ</h1>
<?php elseif(is_search()): ?>
<h1 class="pagetitle">『 <?php the_search_query(); ?> 』を含む投稿</h1>
<?php endif; ?>
<!--　ページタイトルここまで -->

<?php //　loop.phpを呼び出す
	get_template_part( 'loop' ); ?>

</div><!-- /#main -->

<?php get_sidebar();?>

<?php get_footer(); ?>
<!-- /index.php -->