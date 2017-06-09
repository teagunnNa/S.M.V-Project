<?php

$connect = mysql_connect("localhost","root","apmsetup");
mysql_select_db("smr");

$rooms=array();
$rooms2=array();
$rooms3=array();
$rooms4=array();
$rooms6=array();
$bd=array();
$sum=0;
$sum2=0;
$sum3=0;
$sum4=0;
$sum6=0;

$sql="select RoomNum from room where place_ID=1";
$ret=mysql_query($sql);
while($row=mysql_fetch_array($ret)){$rooms[]=$row[0];}
$rm_count=count($rooms);

$sql2="select RoomNum from room where place_ID=8";
$ret2=mysql_query($sql2);
while($row2=mysql_fetch_array($ret2)){$rooms2[]=$row2[0];}
$rm2_count=count($rooms2);

$sql3="select RoomNum from room where place_ID=3";
$ret3=mysql_query($sql3);
while($row3=mysql_fetch_array($ret3)){$rooms3[]=$row3[0];}
$rm3_count=count($rooms3);

$sql4="select RoomNum from room where place_ID=4";
$ret4=mysql_query($sql4);
while($row4=mysql_fetch_array($ret4)){$rooms4[]=$row4[0];}
$rm4_count=count($rooms4);

$sql6="select RoomNum from room where place_ID=6 or place_ID=7";
$ret6=mysql_query($sql6);
while($row6=mysql_fetch_array($ret6)){$rooms6[]=$row6[0];}
$rm6_count=count($rooms6);

$sql7="select place_ID from room where place_ID=6 or place_ID=7";
$ret7=mysql_query($sql7);
while($row7=mysql_fetch_array($ret7)){$bd[]=$row7[0];}

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
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Map</span></a></li>
								<li><a href="#bon" id="bon-link" class="skel-layers-ignoreHref"><span class="icon fa-group">본관</span></a></li>
								<li><a href="#in" id="in-link" class="skel-layers-ignoreHref"><span class="icon fa-support">인문관</span></a></li>
								<li><a href="#ja" id="ja-link" class="skel-layers-ignoreHref"><span class="icon fa-book">자연관</span></a></li>
								<li><a href="#won" id="won-link" class="skel-layers-ignoreHref"><span class="icon fa-book">원화관</span></a></li>
								<li><a href="#gym" id="gym-link" class="skel-layers-ignoreHref"><span class="icon fa-book">체육시설</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="login/login.php" class="icon fa-user"><span class="label">login</span></a></li>
							<li><a href="login/signup.php" class="icon fa-user-plus"><span class="label">signin</span></a></li>
							<li><a href="manager/mlogin.php" class="icon fa-wrench"><span class="label">manager</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">S.M.R</h2>
								<p font size="2em">예약 하고자 하는 곳을 클릭하시면 됩니다</p>
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

								<img src="img/cpmap.jpg" width="986" height="820" usemap="#Map" alt="" />
                                <map name="Map" id="Map">
  								<area shape="rect" coords="444,54,548,138" href="#bon" /> <!--본관-->
  								<area shape="rect" coords="588,62,654,106" href="#bon" /> <!--원화관-->
  								<area shape="rect" coords="668,70,708,116" href="#Health" /> <!--테니스장-->
  								<area shape="rect" coords="652,146,716,210" href="#Health" /> <!--풋살장-->
  								<area shape="rect" coords="712,218,772,270" onclick="alert ('no')" /> <!--학생회관-->
  								<area shape="rect" coords="638,242,692,302" href="#bon" /> <!--도서관-->
  								<area shape="rect" coords="584,154,636,220" href="#bon" /> <!--인문관-->
  								<area shape="rect" coords="460,190,500,258" href="#bon" /> <!--자연관-->
  								<area shape="rect" coords="496,290,540,324" href="#Health" /> <!--농구장-->
  								<area shape="rect" coords="432,310,468,338" href="#bon" /> <!--선학음악당-->
  								<area shape="rect" coords="346,214,426,252" href="#Health" /> <!--공대앞운동장-->
  								<area shape="rect" coords="54,114,134,182" href="#Health" /> <!--체육관-->	
								</map>
							</footer>
						</div>
					</section>

				<!-- bon -->
					<section id="bon" class="two">
						<div class="container">

							<header>
								<h2>본관</h2>
							</header>
							<div class="row">
							<?php
									for($i=0;$i<$rm_count/2;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										for($j=0;$j<2;$j++)
										{
											if($sum==$rm_count)break;
											echo"<article class=\"item\">
													<a href=\"#\" class=\"image fit\"><img src=\"image/1-$rooms[$sum].jpg\" alt=\"\" /></a>
													<header>
													<h3>$rooms[$sum]</h3>
													</header>
												 </article>";
											$sum++;

										}
										echo"</div>";
									}
								?>
							</div>	
						</div>
					</section>

				<!-- in -->
					<section id="in" class="three">
						<div class="container">

							<header>
								<h2>인문관</h2>
							</header>
							<div class="row">
								<?php
									for($i=0;$i<$rm2_count/2;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										for($j=0;$j<2;$j++)
										{
											if($sum2==$rm2_count)break;
											echo"<article class=\"item\">
													<a href=\"#\" class=\"image fit\"><img src=\"image/8-$rooms2[$sum2].jpg\" alt=\"\" /></a>
													<header>
													<h3>$rooms2[$sum2]</h3>
													</header>
												 </article>";
											$sum2++;

										}
										echo"</div>";
									}
								?>
							</div>
						</div>
					</section>

				<!-- ja -->
					<section id="ja" class="four">
						<div class="container">

							<header>
								<h2>자연관</h2>
							</header>
							<div class="row">
								<?php
									for($i=0;$i<$rm3_count/2;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										for($j=0;$j<2;$j++)
										{
											if($sum3==$rm3_count)break;
											echo"<article class=\"item\">
													<a href=\"#\" class=\"image fit\"><img src=\"image/3-$rooms3[$sum3].jpg\" alt=\"\" /></a>
													<header>
													<h3>$rooms3[$sum3]</h3>
													</header>
												 </article>";
											$sum3++;
										}
										echo"</div>";
									}
								?>
							</div>

						</div>
					</section>
                
				<!-- won  -->
					<section id="won" class="five">
						<div class="container">

							<header>
								<h2>원화관</h2>
							</header>

							<p>본관1층의 원하는 호실을 선택하시면 예약페이지로 이동합니다.</p>
							<div class="row">
								<?php
									for($i=0;$i<$rm4_count;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										echo"<article class=\"item\">
											<a href=\"#\" class=\"image fit\"><img src=\"image/4-$rooms4[$sum4].jpg\" alt=\"\" /></a>
											<header>
											<h3>$rooms4[$sum4]</h3>
											</header>
											</article>";
										echo"</div>";
										$sum4++;
									}
								?>
							</div>
						</div>
					</section>
				
				<!-- won  -->
					<section id="gym" class="six">
						<div class="container">

							<header>
								<h2>체육시설</h2>
							</header>

							<p>본관1층의 원하는 호실을 선택하시면 예약페이지로 이동합니다.</p>
							<div class="row">
								<?php
									for($i=0;$i<$rm6_count/2;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										for($j=0;$j<2;$j++)
										{
											if($sum6==$rm6_count)break;
											echo"<article class=\"item\">
													<a href=\"#\" class=\"image fit\"><img src=\"image/$bd[$sum6]-$rooms6[$sum6].jpg\" alt=\"\" /></a>
													<header>
													<h3>$rooms6[$sum6]</h3>
													</header>
												 </article>";
											$sum6++;
										}
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
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  			<script src="su/jquery.rwdImageMaps.min.js"></script>
  			<script>
    			$(document).ready(function(e){
      				$('img[usemap]').rwdImageMaps();
   				});
  			</script>
	<?php
		mysql_close($connect);
	?>
	</body>
</html>