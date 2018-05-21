<?php 
$_POST['text'] .= "\n" . file_get_contents('grunbergSalt.csv');
file_put_contents('grunbergSalt.csv', $_POST['text']);
echo "Added \"" . $_POST['text'] . "\" to grunbergsalt.life!";
?>