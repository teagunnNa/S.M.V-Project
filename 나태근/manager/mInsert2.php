<?php 
	session_start();
?>
<html>
	<head>
	</head>
	<body>
		<?php 
			$_SESSION['nnn']=2;
			header("Location: mAdd.php");
		?>
	</body>
</html>