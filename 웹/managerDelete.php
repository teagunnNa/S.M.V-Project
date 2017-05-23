<?php
	$ID = $_POST['ID'];
	
	$con = mysqli_connect("localhost","root","apmsetup","smr","3306");
	$que = "dalete from reservation where ID=$ID";
	$result = mysqli_query($con, $que);
	mysqli_close($con);
	echo "거절하였습니다."; 
?>