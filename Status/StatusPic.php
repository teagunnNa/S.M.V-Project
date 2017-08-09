<?php

include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

session_start();   //세션의 시작

$bil = $_SERVER['QUERY_STRING'];

$sql="select Building from place where place_ID='$bil'";
$bilret=mysql_query($sql);
for($i=0;$row=mysql_fetch_array($bilret);$i++){$Building[]=$row[$i];}

$rooms=array();
$sum=0;

$sql="select RoomNum from room where place_ID=".$bil;
$ret=mysql_query($sql);
while($row=mysql_fetch_array($ret)){$rooms[]=$row[0];}
$rm_count=count($rooms);

$sql11="select Room_ID from room where place_ID=".$bil;
$ret11=mysql_query($sql11);
while($row11=mysql_fetch_array($ret11)){$rooms11[]=$row11[0];}

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
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
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
								<li><a href="#bon" id="bon-link" class="skel-layers-ignoreHref"><span class="icon fa-clock-o"><?php echo "$Building[0]"?></span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="../Main2.php" class="icon fa-home"><span class="label">main</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- bon -->
					<section id="bon" class="two">
						<div class="container">

							<header>
								<h2><?php echo "$Building[0] 예약 현황 확인"?></h2>
							</header>
							<div class="row">
								<?php
									for($i=0;$i<$rm_count;$i++)
									{
											echo"<div class=\"4u 12u$(mobile)\">";
											echo"<article class=\"item\">
												<a href=\"#\" class=\"image fit\" onclick=\"room_id($rooms11[$i])\"><img src=\"../image/$bil-$rooms[$i].jpg\" alt=\"\" /></a>
												<header>
												<h3>$rooms[$i]</h3>
												</header>
												</article>";
											echo"</div>";
									}
								?>
							</div>	
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
			<script>
				function room_id(a) {
					location.href="StatusTable.php?"+a;
				}
			</script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  			<script src="su/jquery.rwdImageMaps.min.js"></script>
  			<script>
    			$(document).ready(function(e){
      				$('img[usemap]').rwdImageMaps();
   				});
  			</script>

	</body>
</html>