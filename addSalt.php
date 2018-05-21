<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	header('Content-Type: application/json');
	if($_POST['text'] == "proclaim") {
		echo "{
				    \"response_type\": \"in_channel\",
				    \"text\": \"En slackbot selvfølgelig! Skriv /salt efterfulgt af Grünbergs salt og det ender direkte på https://GrunbergSalt.life!\"
				}";
	} else {
		echo "{
				    \"response_type\": \"in_channel\",
				    \"text\": \"Added \"" . $_POST['text'] . "\" to https://GrunbergSalt.life!\"
				}";

		$fileContent = $_POST['text'] . "\n" . file_get_contents('grunbergsalt.csv');
		file_put_contents('grunbergsalt.csv', $fileContent);
	}
}
?>