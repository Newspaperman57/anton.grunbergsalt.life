<?php 
echo "Added \"" . $_POST['text'] . "\" to grunbergsalt.life!";
$_POST['text'] .= "\n" . file_get_contents('grunbergsalt.csv');
file_put_contents('grunbergsalt.csv', $_POST['text']);
?>