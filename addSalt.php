<?php 
require 'getRandomGif.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	header('Content-Type: application/json');
	$data['response_type'] = "in_channel";
	$todaysSalt = date('Y/m/d') . '.csv';
	if($_POST['text'] == "proclaim" || empty($_POST['text']) || $_POST['text'] == '--help') {
		$data['text'] = "Salter Anton? Skriv /antonsalt efterfulgt af Antons salt og det ender direkte på https://Anton.GrunbergSalt.life!";
	} else {
		if($_POST['user_id'] == "U929E05D3" || $_POST['text'] == "ban") {
			$data['text'] = getRandomGifURL();
		} else {
			$data['text'] = "\"" . $_POST['text'] . "\" er tilføjet til https://Anton.GrunbergSalt.life!";
			$fileContent = $_POST['text'] . "\n";
			if(!file_exists($todaysSalt)) {
				mkdir(dirname($todaysSalt), 0777, TRUE);
				touch($todaysSalt);
			}
			$fileContent .= file_get_contents($todaysSalt);
			file_put_contents($todaysSalt, $fileContent);
		}
	}
	echo json_encode($data);
}
?>