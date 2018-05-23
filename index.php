<?php
	$todaysSalt = date('Y/m/d') . '.csv';
	if(isset($_GET['year']) && isset($_GET['month']) && isset($_GET['day']) && is_numeric($_GET['year']) && is_numeric($_GET['month']) && is_numeric($_GET['day'])) {
		$archiveMode = TRUE;
		$todaysSalt = $_GET['year'] . '/' . $_GET['month'] . '/' . $_GET['day'] . '.csv';
		// echo "Archive mode";
	} else {
	}
?>
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
		<h1>Dagens Salt<?php if($archiveMode) echo ' - ' . $_GET['year'] . '-' . $_GET['month'] . '-' . $_GET['day']; ?></h1>
		<?php 
			if(file_exists($todaysSalt)) {
				$csvFile = file($todaysSalt);
			    foreach ($csvFile as $line) {
			        echo "<p>\"" . str_getcsv($line)[0] . "\"</p>";
			    }
			} elseif($archiveMode) {
				echo '<p>No salts on this date! Maybe it\'s in the future?</p>';
			} else {
				echo '<p>No salts yet! Try poking him with a stick</p>';
			}
		?>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('body').toggleClass('active');
		});
	</script>
</body>
</html>
