<?php
/* footer.php *
　すべてのページにおいて共通で読み込むフッターテンプレート。
 */
?>
<!-- footer.php -->
<p class="pagetop"><a href="#wrapper">▲Pagetop</a></p>

<div id="footer">

<div class="footerWidget">
<?php
	//フッターウィジェット（左）
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) :
?>
<!--　フッターウィジェット（左）が使われていない時に表示する内容　-->   
	<div class="widget"> 
    <h3 class="side-title">カテゴリー</h3>
    <ul>
    <?php wp_list_categories('title_li='); ?>
    </ul>
    </div>
<!--　ここまで　-->    
<?php endif; ?>
</div>

<div class="footerWidget">
<?php
	//フッターウィジェット（中）
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : 
?>
<!--　フッターウィジェット（中）が使われていない時に表示する内容　-->
    <p>フッターウィジェット（中）</p> 
<!--　ここまで　-->
<?php endif; ?>
</div>

<div class="footerWidget">
<?php
	//フッターウィジェット（右）
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : 
?>
<!--　フッターウィジェット（右）が使われていない時に表示する内容　-->
    <p>フッターウィジェット（右）</p> 
<!--　ここまで　-->

<?php endif; ?>
</div>

<p class="copyright">Copyright(c)<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>. All rights reserved.</p>
<p class="credit">Powered by <a href="http://ja.wordpress.org/">WordPress</a> / <a href="http://mypacecreator.net/theme/category/mypace-custom/">mypace custom theme</a></p>
</div><!-- /#footer -->

</div><!-- /#wrapper-->
<?php wp_footer(); ?>
</body>
</html>