<?php
/* home.php *
　ブログ投稿のトップページ用。index.phpと似ているが、より適用の優先順位が高い。
　投稿一覧ページのカスタマイズを行う時はhome.phpを書き換え、index.phpはなるべく残しておくのが懸命。
　ただし、固定ページをトップページにするときはこのファイルは使わない。
 */
?>
<?php get_header(); ?>

<div id="main">

<?php //　loop.phpを呼び出す
	get_template_part( 'loop' ); ?>

</div><!-- /#main -->

<?php get_sidebar();?>

<?php get_footer(); ?>
<!-- /home.php -->