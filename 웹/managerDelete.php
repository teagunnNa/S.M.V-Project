<?php
	session_start();
	$ID=$_SESSION['id'];
	$time=$_SESSION['time'];
	$con = mysqli_connect("localhost","root","apmsetup","smr","3306");
	$que = "delete from reservation where ID = '$ID' and Time = '$time'";
	$result = mysqli_query($con, $que);
	
	mysqli_close($con);
	echo "�����Ͽ����ϴ�.<br>"; 	
	echo "<a href='manager.php'>���ư���";
?>