<?php require '../header.php'; ?>
<?php
if (isset($_REQUEST['user'])) {
	echo 'ようこそ、', $_REQUEST['user'], 'さん。';
}
?>
<?php require '../footer.php'; ?>

<!--
現状、直接このページを開いた時にリクエストパラメーターが無い（user）のでエラーが出る
iseet = 変数が定義されているかを確認する
-->
