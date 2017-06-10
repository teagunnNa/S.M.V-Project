<?php

    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

    $room_id=$_GET["roomid"];
	$time=$_GET["time"];
	$date=$_GET["date"];
	
	$sql="delete from reservation where Time = '$time' and Date = '$date' and Room_ID='$room_id'";

    $result=mysql_query($sql);
	
    if($result)
    {
        echo"거부하였습니다.";
    }

    else 
    {
        echo "거부에 실패하였습니다.";
    }

?>