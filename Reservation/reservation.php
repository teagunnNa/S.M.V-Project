<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>예약 페이지</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link href="css/style.css" rel="stylesheet">
		<script src="js/script.js"></script>

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
							<p><script>
							tmp=location.href.split("?");
							data=tmp[1].split(":");
							daname=data[1].split("#");
							document.write(daname[0]);
							</script>님 환영합니다.</p>
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
								<li><a href="#" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-hourglass-start">예약</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="../Main2.php" class="icon fa-home"><span class="label">Main</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 align="center">예약 페이지</h2>
								<style> 
									select{
										width:45%;
										height:30px;
										align:center;
									}
								</style>
								<script>
									function button3_click(usage,time,date,roomid,userid){
										$.ajax({
											url: "./submit.php",
											type: "GET",
											data: {"usage": usage, "time": time, "date": date, "roomid": roomid, "userid": userid},
											success: function (result) {
												alert(result);
											},
											error: function (jqXHR, textStatus, errorThrown) {
												alert("ERROR" + textStatus + " : " + errorThrown);
												self.close();
											}
										});
										location.href="../Main2.php";
									}
								</script>
							</header>

							<body>
								<form>
								<table width="300" height="200" align="center">
								<tr> <th width="100" > 장소</th><th width="100">
								<script type="text/javascript">
									temp=location.href.split("?") ;
									data=temp[1].split(":");
									daplace=data[2].split("#");
									daroom=data[3].split("#");
									if(daplace[0]==1) document.write("본관 ");
									if(daplace[0]==8) document.write("인문관 ");
									if(daplace[0]==3) document.write("자연관 ");
									if(daplace[0]==4) document.write("원화관 ");
									if(daplace[0]==6) document.write("체육시설/ 선학음악당 ");
									if(daplace[0]!=6) document.write(daroom[0]);
								</script></th></tr>
								<tr> <th width="100" > 예약 날짜</th> <th width="100">
								<script type="text/javascript">
									temp=location.href.split("?") ;
									data=temp[1].split(":");
									dadate=data[4].split("#");
									dayear=Math.floor(dadate[0]/10000);
									damonth=Math.floor((dadate[0]-dayear*10000)/100);
									daday=dadate[0]-dayear*10000-damonth*100;
									document.write(dayear+"년 "+damonth+"월 "+daday+"일");
								</script>
								</th></tr>
								<tr> <th width="100" > 예약 시간</th> <th width="100">
								<script type="text/javascript">
									temp=location.href.split("?") ;
									data=temp[1].split(":");
									datime=data[5].split("#");
									document.write(datime[0]+ ":00 ~ " + (1 + datime[0]*1) + ":00" );
								</script>
								</th></tr>
								<tr> <th width=\"100\" > 예약 목적</th> <th width=\"60\">
								<select id="purpose" onchange="Setpurpose();">
								<option>사용목적 선택</option>
								<option value="친목도모">친목도모</option>
								<option value="스터디/소회의">스터디/소회의</option>
								<option value="동아리모임">동아리모임</option>
								<option value="대회의">대회의</option>
								<option value="사업/취업 설명회">사업/취업 설명회</option>
								<option value="기타">기타</option>
								</select> 
								</th> 
								</tr> 
								<script type="text/javascript" language="javascript">
								temp=location.href.split("?") ;
									data=temp[1].split(":");
									daroomid=data[0].split("#");
									dauserid=data[1].split("#");
									daplace=data[2].split("#");
									daroom=data[3].split("#");
									dadate=data[4].split("#");
									datime=data[5].split("#");
								function Setpurpose() {
									$purpose = $("#purpose option:selected").val();
								}
								function retimeset(daroomid, dauserid, daplace, daroom, dadate) {
									location.href="./timetable.php?" + daroomid + ":" + dauserid + ":"  + daplace + ":" + daroom + ":" + dadate;
								}
								document.write("<tr> <td align=\"center\" colspan=2 height=\"20\"> <input type=\"button\" onclick=\"button3_click($purpose,datime[0],dadate[0],daroomid[0],dauserid[0])\" value=\"제출하기\">&nbsp&nbsp <input type=\"button\" onclick=\"retimeset(daroomid[0],dauserid[0],daplace[0],daroom[0],dadate[0]);\" value=\"시간변경\"> </tr>");
								</script>
								</table>
								<br>
								
								
								</form>
							</body>
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
  			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  			<script src="su/jquery.rwdImageMaps.min.js"></script>
  			<script>
    			$(document).ready(function(e){
      				$('img[usemap]').rwdImageMaps();
   				});
  			</script>
	</body>
</html>
