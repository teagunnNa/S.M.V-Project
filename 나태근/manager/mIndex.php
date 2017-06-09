<?php

include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

session_start();   //세션의 시작

?>

<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>S.M.R</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![eandif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.js"></script>
		<script>
			function showValues(roomid,time,date) {
				alert("어멋");
				$.ajax({
					url: "./managerAllowed.php",
					type: "GET",
					data: {"roomid": roomid, "time": time, "date": date},
					success: function (result) {
						alert(result);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						alert("ERROR" + textStatus + " : " + errorThrown);
						self.close();
					}
				});
			}
		</script>
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Sunmoon university</h1>
							<p>Reservation of Facilities</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">예약 승인</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-group">시설 추가</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-support">시설 삭제</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="http://211.183.34.26/index.html" class="icon fa-user"><span class="label">UserMain</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">예약 승인</h2>
								
								<table width = "1000" border= "1" cellpadding="20">
								<tr align="center">
									<td bgcolor="#cccccc">신청자 ID</td>
									<td bgcolor="#cccccc">사용 시설</td>
									<td bgcolor="#cccccc">사용시간</td>
									<td bgcolor="#cccccc">사용일자</td>
									<td bgcolor="#cccccc">사용목적</td>
									<td bgcolor="#cccccc">수락 /</td>
									<td bgcolor="#cccccc">거절</td>
								</tr>
								<?php 
								
									$result = mysql_query("select * from reservation");
									
									while($row = mysql_fetch_array($result))
									{
										if($row[Allowed]==0){
											$ttime=$row[Time]+1;
											
											$placeRe=mysql_query("select place_ID from room where Room_ID='$row[Room_ID]'");
											for($j=0;$placeRow = mysql_fetch_array($placeRe);$j++){$place_ID = $placeRow[$j]; }
											
											$roomRe=mysql_query("select RoomNum from room where Room_ID='$row[Room_ID]'");
											for($j=0;$plRow = mysql_fetch_array($roomRe);$j++){$RoomNum = $plRow[$j]; }
											
											$bilRe=mysql_query("select Building from place where place_ID='$place_ID[0]'");
											for($j=0;$bilRow = mysql_fetch_array($bilRe);$j++){$bil=$bilRow[$j];}
											
											$mYear = floor($row[Date]/10000);
											$mMonth = floor(($row[Date] - $mYear*10000)/100);
											$mDay = floor($row[Date] - $mYear*10000 - $mMonth*100);
											$managerDay = $mYear . "년 " . $mMonth . "월 " . $mDay . "일";
											
											echo ("
											<tr> 
											<td> $row[ID]</td>
											<td> $bil $RoomNum</td>
											<td> $row[Time]:00 ~ $ttime:00</td>
											<td> $managerDay</td>
											<td> $row[Usage]</td>
											<td><button onclick=\"showValues($row[Room_ID], $row[Time], $row[Date])\" >수락</button></td>
											<td><button onclick=\"showValues($row[Room_ID], $row[Time], $row[Date])\" >거절</button></td>
											</tr>
											");

										}
									}
									?>
								</table>
							</header>


						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>시설 추가</h2>
							</header>
							
							<footer>
								<img src="mCpmap.gif" usemap="#Map" border="1" target="_blank" />
                                                                <map name="Map" id="Map">
  								<area shape="rect" coords="444,54,548,138" href="mInsert1.php" />
  								<area shape="rect" coords="588,62,654,106" href="mInsert4.php" />
  								<area shape="rect" coords="638,242,692,302" href="mInsert5.php" />
  								<area shape="rect" coords="584,154,636,220" href="mInsert2.php" />
  								<area shape="rect" coords="460,190,500,258" href="mInsert3.php" />
  								<area shape="rect" coords="432,310,468,338" href="mInsert7.php" />
  								<area shape="rect" coords="54,114,134,182" href="mInsert6.php" />

								</map>
							</footer>

						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>시설 삭제</h2>
							</header>
						
						</div>
					</section>
                
		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>