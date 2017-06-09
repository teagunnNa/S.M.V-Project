<?php 
	session_start();
?>
<html>
	<head>
	</head>
	<body>
		<?php 
			$_SESSION['nnn']=5;
			header("Location: mAdd.php");
		?>
	</body>
</html>