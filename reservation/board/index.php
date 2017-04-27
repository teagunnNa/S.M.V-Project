<?php
	require_once("../dbconfig.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>선문대학교 | 시설 예약 페이지</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3>선문대학교 시설예약 시스템</h3>
		<table>
			<caption class="readHide">시설 예약</caption>
			<thead>
				<tr>
					<th scope="col" class="date">작성일</th>
					<th scope="col" class="title">제목</th>
					<th scope="col" class="author">작성자</th>
					<th scope="col" class="allow">수락여부</th>
				</tr>
			</thead>
			<tbody>
					<?php
						$sql = 'select * from reservation order by DateTime desc';/*테이블 이름,올림차순 키설정*/
						$result = $db->query($sql);
						while($row = $result->fetch_assoc())
						{
							$datetime = explode(' ', $row['DateTime']);/*db 키수정*/
							$date = $datetime[0];
							$time = $datetime[1];
							if($date == Date('Y-m-d'))
								$row['DateTime'] = $time;/*db 키수정*/
							else
								$row['DateTime'] = $date;/*db 키수정*/
					?>
				<tr>
					<td class="date"><?php echo $row['DateTime']?></td>
					<td class="title"><?php echo $row['Usage']?></td>
					<td class="author"><?php echo $row['ID']?></td>
					<td class="allow"><?php echo $row['Allowed']?></td>
				</tr>
					<?php
						}
					?>
			</tbody>
		</table>
	</article>
</body>
</html>