<?php

	include("config.php");
	
	$temp = $_SERVER['QUERY_STRING'];
	$data = split(":",$temp);
	$daroomid = split("#",$data[0]);
	$dadate = split("#",$data[4]);
	
?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Time Table</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<script src="js/script.js"></script>
		<script>
			function button3_click(i) {
				
				temp=location.href.split("?");
				data=temp[1].split(":");
				
				roomid = data[0].split("#");
				
				go_ajax(i,roomid[0]);
				
			}
			
			function go_ajax(time, roomid){
				$.ajax({
					url: "./TimeTest.php",
					type: "GET",
					data: {"time": time, "roomid": roomid},
					success: function (result) {
						if(result==1){
							alert("이미 예약된 현황이 있습니다.");
						}else{
							temp=location.href.split("?");
							name="reservation.php?";
							location.href=name+temp[1]+":"+time;
						}
					},
					error: function (jqXHR, textStatus, errorThrown) {
						alert("ERROR" + textStatus + " : " + errorThrown);
						self.close();
					}
				});
			}
		</script>
		<style>
		a {color: #000; text-decoration: none;}
		</style>
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
								<li><a href="#" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-table">TimeTable</span></a></li>
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

							<header >
								<h2 align="center" style="color:white">Time Table</font></h2>
							</header>

							<body align="center">
								<table align="center">
									<?php
										
										$result=mysql_query("SELECT Time FROM reservation WHERE Room_ID = $daroomid[0] and Date=$dadate[0]");
										
										if($result){
										while($row=mysql_fetch_array($result)){
											$datime[]=$row[Time];
										}
										}
										
										$count = count($datime);
										
										for($i=10; $i<21; $i++){
											$j=$i+1;
											$sw=0;
											
											for($k=0;$k<$count;$k++){
												if($i==$datime[$k]) $sw=1;
											}
											
											if($sw==0){												
												echo ("
													<tr><td><a href=\"#\" onclick=\"button3_click($i)\">$i:00 ~ $j:00</td></tr></a>
													");
												}
											}
									?>
								</table>
													
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
