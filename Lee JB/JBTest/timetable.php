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
		echo "<script>
			function button3_click(i) {
			temp=location.href.split(\"?\") ;
			name=\"reservation.php?\";
			location.href=name+temp[1]+\":\"+i;
			}
		</script>
		";
				for($i=10; $i<21; $i++)
				{
					$j=$i+1;
					
					echo ("
					<tr><td><a href=\"#\" onclick=\"button3_click($i)\">
					$i:00 ~ $j:00</td></tr>
					
					</a>
					");
				}
		?>
	</table>
	</body>


</html>