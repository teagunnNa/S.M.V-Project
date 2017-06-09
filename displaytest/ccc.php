<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
	</head>
	<body>
		<?php 
			$date = date("Ymd");
			$con = mysqli_connect("localhost","lee","1234","smr","3306");
			$result = mysqli_query($con,"select * from v1 where Date = '$date' and Room_ID = '1' order by Time");
			$number=1;
		?>
		<table width = "790" class="displaytable" cellpadding="20">
		<tr align="center"><td bgcolor="#1294AB"><font color="white" size="5px"><b>본관 Room 102A 금일 예약현황</font></td></tr>
		<table width = "790">
		<tr align="center" height="30px">
			<td bgcolor="#FF3636"><font color="white"><b>순번</font></td>
			<td bgcolor="#FF3636"><font color="white"><b>신청자 이름</font></td>
			<td bgcolor="#FF3636"><font color="white"><b>사용시간</font></td>
			<td bgcolor="#FF3636"><font color="white"><b>연락처</font></td>
			<td bgcolor="#FF3636"><font color="white"><b>단체명</font></td>
			<td bgcolor="#FF3636" width="220px"><font color="white"><b>사용목적</font></td>
		</tr>
		<?php 
			while($row = mysqli_fetch_array($result))
			{
				$p1 = floor($row[Phone]/100000000);
				$p2 = floor(($row[Phone]-($p1*100000000))/10000);
				if($p2<1000) $p2='0'.$p2;
				if($p2<100) $p2='0'.$p2;
				if($p2<10) $p2='0'.$p2;
				$p3 = $row[Phone]-($p1*100000000+$p2*10000);
				if($p3<1000) $p3='0'.$p3;
				if($p3<100) $p3='0'.$p3;
				if($p3<10) $p3='0'.$p3;
				$_SESSION['id']=$row[ID];
				$ttime=$row[Time]+1;
				echo ("
				<tr align=\"center\" height=\"60px\"> 
				<td bgcolor=\"#FFCBCB\"><b> $number</td>
				<td bgcolor=\"#FFCBCB\"><b> $row[name]</td>
				<td bgcolor=\"#FFCBCB\"><b> $row[Time]:00 ~ $ttime:00</td>
				<td bgcolor=\"#FFCBCB\"><b> 0$p1-$p2-$p3</td>
				<td bgcolor=\"#FFCBCB\"><b> $row[Type]</td>
				<td bgcolor=\"#FFCBCB\"><b> $row[Usage]</td>
				</tr>
				");
				$number++;
			}
			?>
		</table>
	</body>
</html>