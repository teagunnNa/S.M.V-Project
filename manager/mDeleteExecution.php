<?php


include("config.php");

$room_id = $_GET['roomid'];

$ret = mysql_query("select place_ID from room where Room_ID='$room_id'");
for($i=0;$row=mysql_fetch_array($ret);$i++){$place_id=$row[$i];}

$ret = mysql_query("select RoomNum from room where Room_ID='$room_id'");
for($i=0;$row=mysql_fetch_array($ret);$i++){$roomNum=$row[$i];}

$sql="Delete from room where Room_ID='$room_id'";
$ret=mysql_query($sql);

if($ret){
	$path = "../image/";
	$name=$place_id."-".$roomNum.".jpg";
	
	$name = iconv("UTF-8","cp949//IGNORE", $name); 
	
	$pathName=$path.$name;
	
	if(is_file($pathName)){
		unlink($pathName);
		echo"성공";
	}else echo "해당 파일이 존재하지 않습니다.";

	echo "시설 삭제에 성공하였습니다.";
}else{
	echo "시설 삭제에 실패하였습니다.";
}

?>