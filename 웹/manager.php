<html>
	<head>
		<title>관리자페이지</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<h2>◆ 예약현황</h2>
		예약장소
			<select id='place' name='place'>
				<option value='1'>본관</option>
				<option value='2'>인문관</option>
				<option value='3'>자연관</option>
				<option value='4'>원화관</option>
				<option value='5'>도서관</option>
				<option value='6'>체육관</option>
				<option value='7'>선학음악당</option>
				<option value='8'>잔디구장</option>
				<option value='9'>공대운동장</option>
				<option value='10'>테니스장</option>
			</select>
		<td><input type='submit' value='조회'></td>
		<?php 
			$con = mysqli_connect("localhost","lee","1234","smr","3306");
			$result = mysqli_query($con,"select * from reservation");
			$number = 1;
		?>
		<table width = "1000" border= "1" cellpadding="20">
		<tr align="center">
			<td bgcolor="#cccccc">일련번호</td>
			<td bgcolor="#cccccc">신청자 ID</td>
			<td bgcolor="#cccccc">예약시간</td>
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
					<td> $row[Time]</td>
					<td> $row[Usage]</td>
					<td><input type='button' value='수락' onclick='window.open('managerAllowed.php','win','width=350,height=250)'></td>
					<td><input type='button' value='거절' onclick='location.href='managerDelete.php''></td>
					</from>
					</tr>
					");
				}
				else{
					echo("
					<tr>
					<td> $number</td>
					<td> $row[ID]</td>
					<td> $row[Time]</td>
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