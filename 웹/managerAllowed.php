<?php 
	$ID = $_POST['ID'];
	$Allowed = 1;
	
	$con = mysqli_connect("localhost","root","apmsetup","smr","3306");
	$que = "update reservation set Allowed = '1' where ID = $ID";
	$result = mysqli_query($con, $que);
	$result = mysqli_query($con, "select * from reservation");
	$row = mysqli_fetch_array($result);
	echo $row[$Allowed];
	mysqli_close($con);
	echo "수락 승인되었습니다.<br>";
?>