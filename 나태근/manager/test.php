<?php

$mysql_hostname = "localhost";

$mysql_user = "lee";

$mysql_password = "1234";

$mysql_database = "smr";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");

mysql_select_db($mysql_database, $bd) or die("db connect error");

$room_id=$_GET["roomid"];
$time=$_GET["time"];
$date=$_GET["date"];

$data=array();

$ok=mysql_query("update reservation set Allowed='1' where Time = '$time' and Date = '$date' and Room_ID='$room_ID'");

while($row=mysql_fetch_array($ok)){$data[]=$row[0];}
$count=count($data);

echo $room_id." ".$time." ".$date;

if($data[Room_ID]=$room_id) echo "성공";
else echo "실패";


?>