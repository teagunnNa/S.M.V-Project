<html>
	<head>
		<meta charset="utf-8">
		<title>Time Table</title>
		<link href="css/style.css" rel="stylesheet">
		</style>
	 </head>


	<body align="center">
	<br>
	 <h1 align="center">Time Table</h1>
	<table align="center">
		<?php
				for($i=10; $i<21; $i++)
				{
					$j=$i+1;
					
					echo ("
					<tr><td><a href=\"qqqqqqqq$i.php\">
					$i:00 ~ $j:00</td></tr>
					</a>
					");
				}
		?>
	</table>
	</body>


</html>