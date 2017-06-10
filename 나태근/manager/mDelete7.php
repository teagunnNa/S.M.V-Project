<?php 
	session_start();
?>
<html>
	<head>
	</head>
	<body>
		<?php 
			$_SESSION['nnn']=7;
			header("Location: mDelete.php");
		?>
	</body>
</html>