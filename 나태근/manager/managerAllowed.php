<?php

    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

    $room_id=$_GET["roomid"];
	$time=$_GET["time"];
	$date=$_GET["date"];

	echo $room_id." ".$time." ".$date." ";
	
	$sql="update reservation SET Allowed='1' where Time = '$time' and Date = '$date' and Room_ID='$room_id'";

    $result=mysql_query($sql);
	
	echo $result;
	
    if($result)
    {
        echo"성공";
    }

    else 
    {
        echo "실패";
    }

?>