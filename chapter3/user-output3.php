<?php require '../header.php'; ?>
<?php
if (isset($_REQUEST['user'])) {
	echo 'ようこそ、', htmlspecialchars($_REQUEST['user']), 'さん。';
}
?>
<?php require '../footer.php'; ?>

<!--
入力フォームにHTMLタグを入力すると出力結果に変化が。。
htmlspecialchars を入力するとHTMLの特別な動きを無効に、、安全性を高める
-->