<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if($_POST['text'] == "proclaim") {
		echo "En slackbot selvfølgelig! Skriv /salt efterfulgt af Grünbergs salt og det ender direkte på https://GrunbergSalt.life!";
	} else {
		echo "Added \"" . $_POST['text'] . "\" to https://GrunbergSalt.life!";
		$fileContent = $_POST['text'] . "\n" . file_get_contents('grunbergsalt.csv');
		file_put_contents('grunbergsalt.csv', $fileContent);
	}
}
?>