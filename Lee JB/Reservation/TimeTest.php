<?php

    include("config.php");

	$time=$_GET["time"];
	$room_id=$_GET["roomid"];
	
	$result=mysql_query("SELECT * FROM reservation WHERE Time='$time' and Room_ID='$room_id'");
	$count=mysql_num_rows($result);
	
	if($count>0){
		echo "1";
	}else{
		echo "2";
	}
	
?>