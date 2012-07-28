<?php
/* sidebar.php *
	右側のサブカラム部分。複数ウィジェットに対応。
 */
?>
<!-- sidebar.php start -->
<div id="side">

<?php
	//サイドバー1
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) :
?>
<!--　サイドバー1が使われていない時に表示する内容　-->
<div class="widget">
    <h3>カレンダー</h3>
    <?php get_calendar(); ?>
</div> 
    
<div class="widget">
    <h3>カテゴリー</h3>
    <ul>
    <?php wp_list_categories('title_li='); ?>
    </ul>
</div>

<div class="widget">
    <h3>最近の投稿</h3>
    <ul>
    <?php wp_get_archives('type=postbypost&limit=5'); ?>
    </ul>
</div>

<div class="widget">
    <h3>月別の投稿一覧</h3>
    <ul>
    <?php wp_get_archives(); ?>
    </ul>
</div>
<!--　ここまで　-->
<?php endif; ?>


</div><!-- /#side -->
<!-- /sidebar.php -->