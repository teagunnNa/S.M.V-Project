<?php
	include("config.php");
	session_start();
	$ID=$_SESSION['id'];
	$Room_ID=$_SESSION['room_id'];
	$time=$_SESSION['time'];
	$date=$_SESSION['date'];
	
	$que = "delete from reservation where ID = '$ID' and Time = '$time' and Date = '$date' and Room_ID='$Room_ID'";
	$result = mysqli_query($que);
	
	echo "<script>;

		history.back(1);

		</script>";
?>