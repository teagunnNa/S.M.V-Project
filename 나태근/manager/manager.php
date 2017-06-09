<?php 
	session_start();
?>
<html>
	<head>
		<title>관리자페이지</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<script>
		function btn_click(t,d){
			$_SESSION['time']=t;
			$_SESSION['date']=d;
			window.open('this.href');	
		}
		</script>
		<h2>◆ 예약현황</h2>
		<?php 
			$room_id = $POST['room_id'];
			$con = mysqli_connect("localhost","lee","1234","smr","3306");
			$result = mysqli_query($con,"select * from reservation");
		?>
		<table width = "1000" border= "1" cellpadding="20">
		<tr align="center">
			<td bgcolor="#cccccc">신청자 ID</td>
			<td bgcolor="#cccccc">사용시간</td>
			<td bgcolor="#cccccc">사용일자</td>
			<td bgcolor="#cccccc">사용목적</td>
			<td bgcolor="#cccccc">수락여부</td>
			<td bgcolor="#cccccc">거절</td>
		</tr>
		<?php 
			while($row = mysqli_fetch_array($result))
			{
				if($row[Allowed]==0){
					$_SESSION['id']=$row[ID];
					$ttime=$row[Time]+1;
					echo ("
					<tr>
					<td> $row[ID]</td>
					<td> $row[Time]:00 ~ $ttime:00</td>
					<td> $row[Date]</td>
					<td> $row[Usage]</td>
					<td><a href='managerAllowed.php' onclick='btn_click($row[Time],$row[Date]);'><input type='submit' name='승인' value='승인'></td>
					<td><a href='managerDelete.php' onclick='btn_click($row[Time],$row[Date]);'><input type='submit' name='거절' value='거절''></td>
					</tr>
					");
				}
				else{
					$_SESSION['id']=$row[ID];
					$_SESSION['time\$number']=$row[Time];
					$ttime=$row[Time]+1;
					echo("
					<tr>
					<td> $row[ID]</td>
					<td> $row[Time]:00 ~ $ttime:00</td>
					<td> $row[Date]</td>
					<td> $row[Usage]</td>
					<td> 수락됨 </td>
					<td><a href='managerDelete.php' onclick='btn_click($row[Time],$row[Date]);'><input type='submit' value='거절'></td>
					</tr>
					");
				}
			}
			?>
		</table>
	</body>
</html>