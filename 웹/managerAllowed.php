<?php 
	$ID = $_POST['ID'];
	
	$con = mysqli_connect("localhost","root","apmsetup","smr","3306");
	$que = "update reservation set Allowed='1' where ID is '$ID'";
	$result = mysqli_query($con, $que);
	
	echo $ID;
	mysqli_close($con);
	echo "수락 승인되었습니다.<br>";
?>