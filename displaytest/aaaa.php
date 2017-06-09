<?php 
	$con = mysqli_connect("localhost","lee","1234","smr","3306");
	$result = mysqli_query($con,"create view v2 as select reservation.Time,reservation.Date,reservation.ID,reservation.Room_ID,reservation.Usage,member.name,member.phone,member.Type from reservation join member using(ID)");
?>