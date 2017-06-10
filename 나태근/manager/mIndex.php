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
			function btn_ok(roomid,time,date) {
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
				location.reload();
			}
			
			function btn_no(a,b,c) {
				$.ajax({
					url: "./managerDelete.php",
					type: "GET",
					data: {"roomid": a, "time": b, "date": c},
					success: function (result) {
						alert(result);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						alert("ERROR" + textStatus + " : " + errorThrown);
						self.close();
					}
				});
				location.reload();
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
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-check-square-o">예약 승인</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-plus-square-o">시설 추가</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-minus-square-o">시설 삭제</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="../Main1.php" class="icon fa-sign-out"><span class="label">UserMain</span></a></li>
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
											
											if($place_ID[0]!=6){
												echo ("
												<tr> 
												<td> $row[ID]</td>
												<td> $bil $RoomNum</td>
												<td> $row[Time]:00 ~ $ttime:00</td>
												<td> $managerDay</td>
												<td> $row[Usage]</td>
												<td><button onclick=\"btn_ok($row[Room_ID], $row[Time], $row[Date])\" >수락</button></td>
												<td><button onclick=\"btn_no($row[Room_ID], $row[Time], $row[Date])\" >거절</button></td>
												</tr>
												");
											}else{
												echo ("
												<tr> 
												<td> $row[ID]</td>
												<td> $RoomNum</td>
												<td> $row[Time]:00 ~ $ttime:00</td>
												<td> $managerDay</td>
												<td> $row[Usage]</td>
												<td><button onclick=\"btn_ok($row[Room_ID], $row[Time], $row[Date])\" >수락</button></td>
												<td><button onclick=\"btn_no($row[Room_ID], $row[Time], $row[Date])\" >거절</button></td>
												</tr>
												");
											}

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
								<style type="text/css">
    							img[usemap] {
      								border: none;
      								height: auto;
      								max-width: 100%;
      								width: auto;
    								}
  								</style>

								<img src="cpmap.jpg" width="986" height="820" usemap="#AddMap" alt="" />
                                <map name="AddMap" id="AddMap">
  								<area shape="polygon" coords="510,61,474,69,481,76,477,108,469,108,461,98,441,102,441,133,450,144,467,138,467,134,487,130,497,141,521,134,521,126,537,122,542,124,553,120,557,100,561,97,549,84,533,88,534,96,522,97,525,82,531,80,515,64"  href="mInsert1.php" /> <!--본관-->
  								<area shape="polygon" coords="646,62,617,70,617,74,605,76,603,74,591,78,590,98,602,113,613,110,613,106,618,105,625,112,645,108,646,98,647,98,650,101,657,100,665,80,661,72" href="mInsert4.php" /> <!--원화관-->
  								<area shape="polygon" coords="680,66,663,70,667,78,665,88,689,116,723,108" href="mInsert6.php" /> <!--테니스장-->
  								<area shape="polygon" coords="678,141,638,148,631,156,669,206,682,210,719,201,725,194,726,186,709,164,686,145" href="mInsert6.php" /> <!--풋살장-->
  								<area shape="polygon" coords="679,242,637,258,637,286,639,296,645,300,646,306,657,316,698,304,702,280,701,276,701,266,690,250" href="mInsert5.php" /> <!--도서관-->
  								<area shape="polygon" coords="635,175,630,162,618,156,612,158,607,150,592,153,588,173,598,186,596,190,610,212,614,208,626,228,643,224,646,205,634,189,636,177" href="mInsert2.php" /> <!--인문관-->
  								<area shape="polygon" coords="479,178,456,184,456,206,462,218,454,224,470,253,482,250,491,268,510,262,514,240,500,217,506,214,487,190" href="mInsert3.php" /> <!--자연관-->
  								<area shape="polygon" coords="531,283,482,300,498,330,549,312,542,300" href="mInsert6.php" /> <!--농구장-->
  								<area shape="polygon" coords="460,303,411,320,431,338,455,342,477,336,471,318" href="mInsert6.php" /> <!--선학음악당-->
  								<area shape="polygon" coords="415,203,334,226,359,277,440,249,440,249,427,224" href="mInsert6.php" /> <!--공대앞운동장-->
  								<area shape="polygon" coords="114,139,131,130,125,126,125,118,93,97,81,104,49,118,51,137,105,196,141,182,143,166,129,152" href="mInsert6.php" /> <!--체육관-->	
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
						
							<footer>
								<img src="cpmap.jpg" width="986" height="820" usemap="#DeleteMap" alt="" />
                                <map name="DeleteMap" id="DeleteMap">
  								<area shape="polygon" coords="510,61,474,69,481,76,477,108,469,108,461,98,441,102,441,133,450,144,467,138,467,134,487,130,497,141,521,134,521,126,537,122,542,124,553,120,557,100,561,97,549,84,533,88,534,96,522,97,525,82,531,80,515,64"  href="mDelete1.php" /> <!--본관-->
  								<area shape="polygon" coords="646,62,617,70,617,74,605,76,603,74,591,78,590,98,602,113,613,110,613,106,618,105,625,112,645,108,646,98,647,98,650,101,657,100,665,80,661,72" href="mDelete4.php" /> <!--원화관-->
  								<area shape="polygon" coords="680,66,663,70,667,78,665,88,689,116,723,108" href="mDelete6.php" /> <!--테니스장-->
  								<area shape="polygon" coords="678,141,638,148,631,156,669,206,682,210,719,201,725,194,726,186,709,164,686,145" href="mDelete6.php" /> <!--풋살장-->
  								<area shape="polygon" coords="679,242,637,258,637,286,639,296,645,300,646,306,657,316,698,304,702,280,701,276,701,266,690,250" href="mDelete5.php" /> <!--도서관-->
  								<area shape="polygon" coords="635,175,630,162,618,156,612,158,607,150,592,153,588,173,598,186,596,190,610,212,614,208,626,228,643,224,646,205,634,189,636,177" href="mDelete2.php" /> <!--인문관-->
  								<area shape="polygon" coords="479,178,456,184,456,206,462,218,454,224,470,253,482,250,491,268,510,262,514,240,500,217,506,214,487,190" href="mDelete3.php" /> <!--자연관-->
  								<area shape="polygon" coords="531,283,482,300,498,330,549,312,542,300" href="mDelete6.php" /> <!--농구장-->
  								<area shape="polygon" coords="460,303,411,320,431,338,455,342,477,336,471,318" href="mDelete6.php" /> <!--선학음악당-->
  								<area shape="polygon" coords="415,203,334,226,359,277,440,249,440,249,427,224" href="mDelete6.php" /> <!--공대앞운동장-->
  								<area shape="polygon" coords="114,139,131,130,125,126,125,118,93,97,81,104,49,118,51,137,105,196,141,182,143,166,129,152" href="mDelete6.php" /> <!--체육관-->	
								</map>
							</footer>
							
						</div>
					</section>
                </div>
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
			<script src="su/jquery.rwdImageMaps.min.js"></script>
			<script>
    			$(document).ready(function(e){
      				$('img[usemap]').rwdImageMaps();
   				});
  			</script>
	</body>
</html>