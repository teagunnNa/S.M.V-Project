<html>
	<head>
		<title>관리자페이지</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php
			$con = mysqli_connect("localhost","lee","1234","smr","3306");
			$result = mysqli_query($con,"select * from reservation");
			$number = 1;
		?>
	</head>
	<body>
		<h2>◆ 데이터 베이스 활용 php</h2>
		<table width = "60%" border= "1" cellpadding="24">
		<tr align="center">
			<td bgcolor="#cccccc">일련번호</td>
			<td bgcolor="#cccccc">신청자 ID</td>
			<td bgcolor="#cccccc">예약시간</td>
			<td bgcolor="#cccccc">사용목적</td>
			<td bgcolor="#cccccc">사용할시간</td>
			<td bgcolor="#cccccc">수락여부</td>
			<td bgcolor="#cccccc">거부</td>
		</tr>
		<?php
			while($row = mysqli_fetch_array($result))
			{
				if($row[Allowed]==0){
					echo ("
					<tr>
					<td> $number</td>
					<td> $row[ID]</td>
					<td> $row[DateTime]</td>
					<td> $row[Usage]</td>
					<td> $row[Room_ID]</td>
					<td><input type='submit' value='수락' onclick='location.href='managerAllowed.php''></td>
					<td><input type='button' value='거절' onclick='location.href='managerDelete.php''></td>
					</tr>
					");
				}
				else{
					echo("
					<tr>
					<td> $number</td>
					<td> $row[ID]</td>
					<td> $row[DateTime]</td>
					<td> $row[Usage]</td>
					<td> $row[Room_ID]</td>
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