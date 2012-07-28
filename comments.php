<?php
/* comment.php *
　投稿されたコメント・トラックバックの表示および、コメント入力フォームを出力するテンプレートです。
 */
?>
<!-- comment.php -->

<!-- ここからコメントの表示設定 -->
<?php //投稿がパスワード制限つきだった場合や、エラーの場合に表示させるもの（いじらないこと）
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		exit('このページにはアクセスできません。');
	if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
		<p>この投稿はパスワードで保護されています。コメントを閲覧するにはパスワードを入力してください。</p>

<?php else : ?>
<?php //コメントの数によって表示内容をコントロール
	if ($comments) : ?>
<h3 id="comments"><?php comments_number('コメント / トラックバックはありません', 'コメント / トラックバック 1 件', 'コメント / トラックバック % 件' );?></h3>

<!-- ここから個別のコメントのループ　-->
<?php foreach ($comments as $comment) : ?>
    <div id="comment-<?php comment_ID() ?>" <?php comment_class(); ?>>
    <span class="commentmeta"><?php echo get_avatar($comment, 32); ?>：<?php comment_author_link() ?>｜<?php if ($comment->comment_approved == '0') : ?>コメントは管理者の承認待ちです。<?php endif; ?>
    <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('Y/m/d H:i') ?> </a> <?php edit_comment_link('編集','&nbsp;&nbsp;',''); ?></span>
    <?php comment_text() ?>
    </div>
<?php endforeach; ?>
<!-- /個別のコメントのループ　-->

<?php else : ?>
<?php //コメント不許可の場合
	if ('open' != $post->comment_status) : ?>
            <p>コメントは受け付けていません。</p>
        <?php endif; ?>
<?php endif; ?>
<!-- /コメントの表示設定 -->
    
<!-- ここからコメント入力フォーム -->     
<?php if ('open' == $post->comment_status) : ?>
<h3>コメントをどうぞ</h3>
    
    <?php //コメントをログインユーザーのみ許可している場合
		if ( get_option('comment_registration') && !$user_ID ) : ?>
    <p>コメントを投稿するには<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">ログイン</a>してください。</p>
    
    <?php else : ?>
     <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
     
        <!-- ログインしている場合のみ表示させる内容 -->
    	<?php if ( $user_ID ) : ?>
			<p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> としてログインしています。 <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">ログアウトはこちら &raquo;</a></p>
        <!-- ログインしている場合のみ表示させる内容　ここまで -->    
        
    	<?php else : ?>
        <!-- ログインしていない場合のみ表示させる内容 -->
        <dl class="commentform">
            <dt><label for="author">お名前 （必須）</label></dt>
                <dd><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" /></dd>
            <dt>メールアドレス （必須・公開されません）</dt>
                <dd><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" /></dd>
            <dt><label for="url">あなたのWebサイトやブログ等</label></dt>
                <dd><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /></dd>
        </dl>
        <!-- ログインしていない場合のみ表示させる内容　ここまで -->
		<?php endif; ?>
        
        <dl class="commentform">
            <dt>コメント本文</dt>
                <dd><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></dd>
        </dl>
    <input name="submit" type="submit" id="submit" tabindex="5" value="コメントを送信" class="submitbtn" />
    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
    <?php do_action('comment_form', $post->ID); ?> 
    <ul>
      <li>スパム・迷惑コメント投稿防止のため、メールアドレスの入力が必須ですが、公開はされません。何卒ご協力のほどお願いいたします。</li>
      <li>投稿いただいたコメントは管理者のチェック後掲載しておりますので、即時には反映されません。</li>
    </ul>
    </form>
	<?php endif; ?>
    
<?php endif; ?>

<?php endif; ?>
<!-- /comment.php -->