<?php
/*
 * System name : TransmitMail
 * Description : 設定ファイル
 * Author : TAGAWA Takao (dounokouno@gmail.com)
 * License : MIT License
 * Since : 2010-11-19
 * Modified : 2011-10-16
*/

// ----------------------------------------------------------------
// 設定
// ----------------------------------------------------------------

// 送信先メールアドレス（カンマ区切りで複数の宛先を設定可能）
// ※複数の宛先を指定する場合は必ず「自動返信メールの送信元メールアドレス」を指定してください
// ※空の場合、自動返信メールの宛先にメールが送信されます
define('TO_EMAIL', 'dounokouno@gmail.com');

// 送信メール件名
define('TO_SUBJECT', '［株式会社テスト］お問い合わせ');

// 自動返信（true=>yes, false=>no）
define('AUTO_REPLY', true);

// 自動返信メールの宛先（入力画面のname値）
define('AUTO_REPLY_EMAIL', 'メールアドレス');

// 自動返信メールの件名（空の場合は送信メール件名が設定されます）
define('AUTO_REPLY_SUBJECT', '［株式会社テスト］お問い合わせありがとうございます');

// 自動返信メールの送信元メールアドレス（空の場合は送信先メールアドレスが設定されます）
define('AUTO_REPLY_FROM_EMAIL', '');

// 自動返信メールの送信元メールアドレスの名前（空でも可）
define('AUTO_REPLY_NAME', '株式会社テスト');

// 拒否ホスト名またはIPアドレスを正規表現で記述（複数あれば「|」（パイプ）で区切る）
//  例1）前方一致は先頭に ^ をつける → ^192.168.1.*
//  例2）後方一致は末尾に $ をつける → *.example.jp$
//  例3）上記両方を設定する場合 → ^192.168.1.*|*.example.jp$
define('DENY_HOST', '');


// ----------------------------------------------------------------
// ※以下は必要な場合のみ編集してください
// ----------------------------------------------------------------

// エラー表示（On=>表示, Off=>非表示）
ini_set('display_errors', 'Off');

// ログファイル出力ディレクトリ
define('DIR_LOGS', './logs');

// 文字コード
define('CHARASET', 'UTF-8');
define('REG_OPTION', 'u');

// メールフォームプログラムファイル
define('MAILFORM_PROGRAM', 'index.php');

// メールフォームプログラム設置ディレクトリ
define('DIR_MAILFORM', str_replace(MAILFORM_PROGRAM, '', $_SERVER['PHP_SELF']));

// テンプレートファイル
define('TMPL_INPUT', 'input.html');		// 入力画面
define('TMPL_CONFIRM', 'confirm.html');	// 確認画面
define('TMPL_FINISH', 'finish.html');		// 完了画面
define('TMPL_ERROR', 'error.html');		// エラー画面

// 送信メール文章テンプレート
define('MAIL_BODY', './conf/mail_body.txt');							// 送信メール
define('MAIL_AUTO_REPLY_BODY', './conf/mail_autoreply_body.txt');	// 自動返信メール

// エラーメッセージ
define('ERROR_REQUIRED', 'は入力必須です');
define('ERROR_HANKAKU', 'は半角文字で入力してください');
define('ERROR_HANKAKU_EISU', 'は半角英数字で入力してください');
define('ERROR_HANKAKU_EIJI', 'は半角英字で入力してください');
define('ERROR_NUM', 'は数字で入力してください');
define('ERROR_NUM_HYPHEN', 'は数字とハイフンで入力してください');
define('ERROR_HIRAGANA', 'はひらがなで入力してください');
define('ERROR_ZENKAKU_KATAKANA', 'は全角カタカナで入力してください');
define('ERROR_HANKAKU_KATAKANA', 'は半角カタカナで入力してください');
define('ERROR_ZENKAKU', 'は全角文字を含めて入力してください');
define('ERROR_ZENKAKU_ALL', 'は全て全角文字で入力してください');
define('ERROR_EMAIL', 'はメールアドレスの書式で入力してください');
define('ERROR_MATCH', 'が一致しません');
define('ERROR_LEN', 'は{文字数}で入力してください');
define('ERROR_DENY', 'お使いのホストからのアクセスは管理者によって拒否されています');
define('ERROR_FAILURE_SEND_MAIL', 'メールの送信に失敗しました');
define('ERROR_FAILURE_SEND_AUTO_REPLY', '自動返信メールの送信に失敗しました');

// 入力フォームパーツの属性
define('ATTR_CHECKED', 'checked="checked"');
define('ATTR_SELECTED', 'selected="selected"');

// セッション設定
define('DIR_TEMP', './temp');
session_name('TRANSMITMAILSESSID');
session_save_path(DIR_TEMP);
session_set_cookie_params(0, DIR_MAILFORM, $_SERVER['HTTP_HOST']);

?>
