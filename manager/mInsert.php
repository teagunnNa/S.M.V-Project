<?php 
	session_start();
?>
<html>
	<head>
	</head>
	<body>
		<?php 
			$_SESSION['nnn']=$_SERVER['QUERY_STRING'];
			header("Location: mAdd.php");
		?>
	</body>
</html>