
<!-- saved from url=(0026)https://grunbergsalt.life/ -->
<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="text-wrapper">
		<h1>Dagens Salt</h1>
		<?php 
			$csvFile = file('grunbergsalt.csv');
		    foreach ($csvFile as $line) {
		        echo "<p>" . str_getcsv($line)[0] . "</p>";
		    }
		?>
	</div>
	<!-- <svg viewBox="0 0 370 251.719"><path class="shape-letter-o isolation" stroke-width="0" d="M337.249 125.844c0-51.423-41.675-93.093-93.098-93.093-51.441 0-93.09 41.68-93.09 93.13 0 51.424 41.675 93.087 93.09 93.087h.015" style="transform-origin: 244px 126px 0px; stroke-dasharray: 438.81px; stroke-width: 65.502px; stroke-dashoffset: 877.62px; transform: translate(0px, 0px) rotate(0deg) skew(0deg, 0deg) scale(1, 1);"></path></svg> -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('body').toggleClass('active');
		});
	</script>
</body>
</html>
