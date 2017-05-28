<?php
	session_start();
	$ID=$_SESSION['id'];
	$time=$_SESSION['time'];
	$room=$_SESSION['Room_ID'];
	$con = mysqli_connect("localhost","root","apmsetup","smr","3306");
	$que = "delete from reservation where ID = '$ID' and Time = '$time' and Room_id = '$room'";
	$result = mysqli_query($con, $que);
	
	mysqli_close($con);
	echo "거절하였습니다.<br>"; 	
	echo "<a href='manager.php'>돌아가기";
?>