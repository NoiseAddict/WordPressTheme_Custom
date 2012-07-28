<?php
/*
Template Name: サイドバーなし1カラム（このテンプレート名は自由に変更してください）
	カスタムページテンプレートを自由に作れます。ファイル名は適当に変えてください。例えば固定ページをサイトのトップページにしたい場合、"toppage.php"とか作っておくと良い。
*/
?>
<?php get_header(); ?>

<div id="main" class="oneColumn">

<!--自分は、トップページは↓のページタイトル出力せずに、代わりにメインイメージを入れることが多いです。-->
<h1 class="pagetitle"><?php the_title(); ?></h1>

<p>例えばここに、トップページだけで表示させる画像とか、あいさつ文とか、バナーとか入れておくとそれっぽくなる！</p>

<!-- 投稿ここから -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>

</div><!-- /.type-page -->
<?php endwhile; endif; ?>
<!-- /投稿ここまで -->

</div><!-- /#main -->

<?php get_footer(); ?>
<!-- /pagetemplate.php -->