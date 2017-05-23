<html>
	<head>
		<title>관리자페이지</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<h2>◆ 예약현황</h2>
		<?php 
			$room_id = $POST['room_id'];
			$con = mysqli_connect("localhost","lee","1234","smr","3306");
			$result = mysqli_query($con,"select * from reservation where room_id is $room_id");
			$number = 1;
		?>
		<table width = "1000" border= "1" cellpadding="20">
		<tr align="center">
			<td bgcolor="#cccccc">일련번호</td>
			<td bgcolor="#cccccc">신청자 ID</td>
			<td bgcolor="#cccccc">사용일자</td>
			<td bgcolor="#cccccc">사용시간</td>
			<td bgcolor="#cccccc">사용목적</td>
			<td bgcolor="#cccccc">수락여부</td>
			<td bgcolor="#cccccc">거부</td>
		</tr>
		<?php 
			while($row = mysqli_fetch_array($result))
			{
				if($row[Allowed]==0){
					echo ("
					<tr>
					<from action='managerAllowed.php' method='POST'>
					<td> $number</td>
					<td> $row[ID]</td>
					<td> $row[Time]:00~($row[Time]+1):00</td>
					<td> $row[Date]</td>
					<td> $row[Usage]</td>
					<td><input type='submit' value='수락' href='managerAllowed.php=$row[ID]'></td>
					<td><input type='button' value='거절' href='managerDelete.php=$row[ID]'></td>
					</from>
					</tr>
					");
				}
				else{
					echo("
					<tr>
					<td> $number</td>
					<td> $row[ID]</td>
					<td> $row[Time]:00~($row[Time]+1):00</td>
					<td> $row[Date]</td>
					<td> $row[Usage]</td>
					<td> 수락됨 </td>
					<td><input type='button' value='거절' onclick='location.href='managerDelete.php''></td>
					</tr>
					");
				}
				$number++;
			}
			?>
		</table>
	</body>
</html>