<?php 
require 'getRandomGif.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	header('Content-Type: application/json');
	$data['response_type'] = "in_channel";
	$todaysSalt = date('Y/m/d') . '.csv';
	if($_POST['text'] == "proclaim" || empty($_POST['text']) || $_POST['text'] == '--help') {
		$data['text'] = "Salter Grünberg? Skriv /salt efterfulgt af Grünbergs salt og det ender direkte på https://GrunbergSalt.life!";
	} else {
		if($_POST['user_name'] == "Mathias Pihl") {
			$data['text'] = getRandomGifURL();
		} else {
			$data['text'] = $_POST['user_name'] . "Har tilføjet \"" . $_POST['text'] . "\" til https://GrunbergSalt.life!";
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