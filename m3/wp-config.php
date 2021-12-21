<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'user021_cms' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'user021' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'zaet4ohShaeT' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '07mL,<$tFA%}<LXor6Bpz5xIv:hU2FY;IQ$[1c0D8st1JL*6U7$0h$ye-70jh<S/' );
define( 'SECURE_AUTH_KEY',  '|W8~!@xO?W3%#@6&)O%9uJv]se/Z<SY=oqy:_EAKJ;|_U2P+$j;_2@@I$ FH>;eQ' );
define( 'LOGGED_IN_KEY',    '.MG>g2Ba5Nep@?}6~[LMkps7[LaL}Dw;p^Ffl_[G2PNfJyKP84+3PDxkRQ2Y)r&R' );
define( 'NONCE_KEY',        '6k6t=.h|R?]PB$@wGvF2Or!s>q6aBK{NB[-y#a601&]&qEcP#j_uz3UfVo|tL@A9' );
define( 'AUTH_SALT',        '_1EL$j$=H/Q8.g@}Ou<`&qbLgfY(g[y;~T0%rR(b!Z ^Tf~bA-*](^(bwX-O n#9' );
define( 'SECURE_AUTH_SALT', 'nz%I=IbF> _HX:K~ L^+]KAD[_EDEbU?oc/^#3!7JXp=LHHI7;S 0yHO]AI%lPv@' );
define( 'LOGGED_IN_SALT',   't=0N&s_df6;;!!%#>M,|$Y!<Zw{,&d6Q`4!KZSWy=ZfMHh;*/K(o&Ygl?h!ME[:O' );
define( 'NONCE_SALT',       'A.jx]V]e~|*4a_7^!zUcsb9-;.>gI-&V{^XO?sF[ !~YXq]5%0LLj~b:UbKfVI7q' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
