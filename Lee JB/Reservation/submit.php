<?php

    include("config.php");

	$usage=$_GET["usage"];
	$time=$_GET["time"];
	$date=$_GET["date"];
	$room_id=$_GET["roomid"];
	$user_id=$_GET["userid"];
	$_SESSION['userid']=$user_id;
	
	$result=mysql_query("INSERT INTO reservation values('$user_id', '$usage', $room_id, 0, $time, $date)");
	
	echo "예약신청되었습니다.";

?>