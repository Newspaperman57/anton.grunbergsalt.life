<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	echo "Added \"" . $_POST['text'] . "\" to GrunbergSalt.life!";
	$_POST['text'] .= "\n" . file_get_contents('grunbergsalt.csv');
	file_put_contents('grunbergsalt.csv', $_POST['text']);
}
?>