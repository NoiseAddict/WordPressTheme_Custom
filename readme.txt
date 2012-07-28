/*------------------------------------------------------------------------------
	PHPの分からない初心者向けフリーWordPressテーマ『mypace custom』
	by Kei Nomura(@mypadecreator) / ozone notes
	http://mypacecreator.net/theme/
-------------------------------------------------------------------------------*/

/*  お約束事
-------------------------------------------------------------*/

★ライセンスは、WorePress本体と同じGPLライセンスを適用します。その範囲内で商用・非商用にかかわらず無償で自由に改変・複製してご利用いただけます。
（WordPressのテーマライセンスについては、作者ブログ『自作WordPressテーマのライセンスについて調べてみた | マイペースクリエイターの覚え書き』をご一読ください。）
★著作権表記はstyle.cssとfooter.phpに記載してあります。どちらも残していただければ幸いですが、上記のルールをしっかり理解したうえで、ちゃんと自分で手を加えたものに対して私の名前をそっと消していただく分には、構わないかと思います。最悪style.cssの表記くらい残してもらえればOKです。
★うまくカスタマイズできた成功例や、逆にここつまづいたけどこうやったら出来た、等の情報はできるだけブログやソーシャルメディア等にUPしてみんなで共有しましょう。
★質問があれば受けたいと思いますが、仕事の合間に有志で行っていますので、出来る範囲での対応となります。
★でも、ぐーぐるさんや書籍などを駆使してなるべく自分で調べてください。自分で苦労しながら調べることが上達への近道です。
★一刻も早い回答や手厚いサポートをお求めの方は、有償サポート（ozone notes http://www.ozonenotes.jp/ )までご連絡ください。


/*  ファイル構成（XHTML版：mypace custom 1.6）
-------------------------------------------------------------*/
*印はこのテーマでの必要最低限のファイル 無印はなくても一応動くファイル
style.css*
default.css* （私がいつも使っているリセットCSSとよく使うクラスなどをまとめてある）
archieve.php 
header.php* （DTDはxhtml1.0 transitionalです）
index.php*
home.php
loop.php*
footer.php*
sidebar.php*
page.php
pagetemplate.php
comments.php
single.php
404.php
functions.php
screenshot.png
img/blog_top.jpg


/*  当バージョンでの変更箇所（XHTML版：mypace custom 1.6）
-------------------------------------------------------------*/
・bloginfo('url')タグ　→　echo home_url()に差し替え
・bloginfo('template_url')タグ　→　echo get_template_directory_uri()に差し替え
・head要素のlang指定を<?php language_attributes(); ?>タグに差し替え
・投稿表示部分に<?php the_ID(); ?><?php post_class(); ?>を追加
・ウィジェット数を4つに変更、各ウィジェットに名前を設定
・functions.phpに$content_width（コンテンツ幅）定義を追加
・functions.phpにadd_editor_style('editor-style.css');を追加
・functions.phpにadd_theme_support('custom-header');を追加
・functions.phpにadd_theme_support('automatic-feed-links');を追加
・functions.phpのadd_custom_background();をadd_theme_support( 'custom-background' );に変更
・以下のファイルの<?php get_header(); ?>上のコメント（<!-- *****.php start -->）を削除（IEの後方互換問題解消のため）［index.php/archive.php/header.php/home.php/page.php/pagetemplate.php/single.php/404.php］
・ページタイトルの出力コードをloop.php内→index.php/archive.php内へ移動
・single.php内　次のページ／前のページへのテキストリンクを、投稿の下部のみに変更
・comments.php内　コメント表示部分に<?php comment_class(); ?>を追加



/*  過去の変更履歴（XHTML版：mypace custom 1.6）
-------------------------------------------------------------*/
・2010.10.15　勢いだけで自作テーマ公開
・2010.10.16　ライセンスに関する記述を修正
・2010.10.17　comment.phpが別のテーマのものだったという致命的なミスのため、データ差し替え。その他CSSを調整し直してVer 1.01にマイナーアップ。
・2010.11.08　Ver1.1に差し替え。footer.phpのCopyright部分の修正と、loop.php/sidebar.phpに補足コメント追加、license.txt追加。
・2010.11.11　Ver1.1のsidebar.phpにコーディングミスがあり、修正しました。実質はVer1.101な感じですが、そのままVer1.1に上書きしちゃいました。
・2010.11.18　Ver1.2に差し替え。style.css内、.pagelink {overflow: hidden;→overflow: auto;に変更（ページ下部のテキストリンクが見えなくなっちゃうから）の他、何ヶ所か修正。他PHPファイルも数ヶ所にコメント追加。
・2010.12.12　Ver1.3に差し替え。<!--paged-->を使ったページ分割使用時に、ページ送り用のリンクを表示させるタグ’wp_link_pages’を追記
・2010.12.13　縦リンクVerの’mypace custom vertical　1.0′配布開始
・2010.12.14　「archive.phpがあった方がいい」という貴重なご意見をいただき、Ver1.4と縦リンク版Ver1.1の配布開始。同時に、不要ソースの削除やコメントの一部修正等。
・2011.04.30　当テーマをHTML5でマークアップし直した”mypace custom V”をリリースしました。
・2011.07.25　Ver1.5配布開始。functions.phpに、「続きを読む」クリック後のURLから#more-$id を削除する記述を追加。コンテンツ幅を800px→960pxに変更。ほか、マークアップやCSS装飾の調整。
・2012.06.15　Ver1.6配布開始。WordPress3.4の関数推奨状況を踏まえ、記述をいくつか変更。エディタ用CSS、カスタムヘッダー機能を今さら追加。など。


では！良いWordPressライフを★