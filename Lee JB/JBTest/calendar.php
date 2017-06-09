<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>자바스크립트 달력</title>
		<link href="css/style.css" rel="stylesheet">
		<script src="js/script.js"></script>
		<?php
			$con = mysqli_connect("localhost","lee","1234","smr","3306");
			$result = mysqli_query($con,"select * from reservation");
			$number = 1;
		?>
	</head>
	</style>
	<body align="center">
		<div id="kCalendar">
		
		<SCRIPT language="JavaScript">
			window.onload = function () {
				kCalendar('kCalendar');
			};
		</script>
		</div>
		
	</body>
</html>