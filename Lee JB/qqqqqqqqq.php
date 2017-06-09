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
	<body>
		<table id="maintable">
		<tr id="maintr">
		<td class="maintd">
		<div id="kCalendar">
		
		<SCRIPT language="JavaScript">
			window.onload = function () {
				kCalendar('kCalendar');
			};
		</script>
		</div>
		</td>
		<td class="maintd">
		
		<?php
			for($i=10; $i<21; $i++)
			{
				$j=$i+1;
				echo ("
				<a href=\"javascript:PopWin1('qqqqqqqq.html','600','400','no');\">
				&nbsp&nbsp&nbsp$i:00 ~ $j:00&nbsp&nbsp&nbsp<br>
				</a>
				");
			}
		?>
		
		</td>
		</tr>
		
	</body>
</html>