<?php 	
	session_start();
	$ID=$_SESSION['id'];
	$time=$_SESSION['time'];
	$room=$_SESSION['Room_ID'];
	$con = mysqli_connect("localhost","root","apmsetup","smr","3306");
	$que = "update reservation set Allowed='1' where ID = '$ID' and Time = '$time' and Room_id = '$room'";
	$result = mysqli_query($con, $que);
	
	mysqli_close($con);
	echo "수락 승인되었습니다.<br>";
	echo "<a href='manager.php'>돌아가기";
?>