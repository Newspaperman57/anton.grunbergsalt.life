<?php 
	function getRandomGifURL() {
		$gifSearchContent = file_get_contents("http://api.giphy.com/v1/gifs/search?api_key=HIwHCwVBiZXYBFLu56t4IuhYa8rnbHfK&q=fuck-you&limit=1&offset=". rand(1, 100));
		$gifContentJSON = json_decode($gifSearchContent, true);
		return 'http://i.' . substr($gifContentJSON['data'][0]['images']['fixed_height']['url'], 15);
	}
	echo "<img src='" . getRandomGifURL() . "'>";
?>

