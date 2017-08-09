<?php

    include("config.php");

    $room_id=$_GET["roomid"];
	$time=$_GET["time"];
	$date=$_GET["date"];
	
	$sql="update reservation SET Allowed='1' where Time = '$time' and Date = '$date' and Room_ID='$room_id'";

    $result=mysql_query($sql);
	
    if($result)
    {
        echo"승인되였습니다.";
    }

    else 
    {
        echo "승인에 실패하였습니다.";
    }

?>