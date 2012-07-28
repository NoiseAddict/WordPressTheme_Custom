<?php
/* loop.php *
	投稿のループ部分だけをまとめたファイル。
 */
?>
<!-- loop.php -->

<!-- 投稿ループここから -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="postdate">Posted on <?php the_time('Y年n月j日(D) H:i'); ?></p>

<?php the_post_thumbnail(); 
	//アイキャッチ画像の出力 ?>

<?php the_content();
	//投稿本文の出力（本文じゃなく抜粋がいい時はthe_excerptに変えればOK） ?>

<?php comments_template(); 
	//コメント欄の出力 ?>

<div class="postinfo">
カテゴリー: <?php the_category(', ') ?><?php the_tags('｜タグ: ', ', ', ''); ?><br />
<?php comments_popup_link('コメントorトラックバックはまだありません', '1 件のコメントorトラックバック', '% 件のコメントorトラックバック'); ?>
</div>

</div><!-- /.post -->

<?php endwhile; endif; ?>
<!-- /投稿ループここまで -->

<!-- ここからは、次のページ／前のページへのテキストリンクを出力するためのタグ -->
<p class="pagelink">
<span class="pageprev"><?php previous_posts_link('&laquo; 前のページ'); ?></span>
<span class="pagenext"><?php next_posts_link('次のページ &raquo;'); ?></span>
</p>
<!-- /ページ送りのリンクここまで -->
<!-- /loop.php -->