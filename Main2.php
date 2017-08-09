<?php

session_start();

$userid=$_SESSION['userid'];

$connect = mysql_connect("localhost","root","apmsetup");
mysql_select_db("smr");

mysql_set_charset("utf8",$connect);
$rooms=array();
$rooms2=array();
$rooms3=array();
$rooms4=array();
$rooms5=array();
$rooms6=array();
$bd=array();

$sql="select RoomNum from room where place_ID=1";
$ret=mysql_query($sql);
while($row=mysql_fetch_array($ret)){$rooms[]=$row[0];}
$rm_count=count($rooms);

$sql11="select Room_ID from room where place_ID=1";
$ret11=mysql_query($sql11);
while($row11=mysql_fetch_array($ret11)){$rooms11[]=$row11[0];}

$sql2="select RoomNum from room where place_ID=8";
$ret2=mysql_query($sql2);
while($row2=mysql_fetch_array($ret2)){$rooms2[]=$row2[0];}
$rm2_count=count($rooms2);

$sql12="select Room_ID from room where place_ID=8";
$ret12=mysql_query($sql12);
while($row12=mysql_fetch_array($ret12)){$rooms12[]=$row12[0];}


$sql3="select RoomNum from room where place_ID=3";
$ret3=mysql_query($sql3);
while($row3=mysql_fetch_array($ret3)){$rooms3[]=$row3[0];}
$rm3_count=count($rooms3);

$sql13="select Room_ID from room where place_ID=3";
$ret13=mysql_query($sql13);
while($row13=mysql_fetch_array($ret13)){$rooms13[]=$row13[0];}

$sql4="select RoomNum from room where place_ID=4";
$ret4=mysql_query($sql4);
while($row4=mysql_fetch_array($ret4)){$rooms4[]=$row4[0];}
$rm4_count=count($rooms4);

$sql14="select Room_ID from room where place_ID=4";
$ret14=mysql_query($sql14);
while($row14=mysql_fetch_array($ret14)){$rooms14[]=$row14[0];}

$sql5="select RoomNum from room where place_ID=5";
$ret5=mysql_query($sql5);
while($row5=mysql_fetch_array($ret5)){$rooms5[]=$row5[0];}
$rm5_count=count($rooms5);

$sql15="select Room_ID from room where place_ID=5";
$ret15=mysql_query($sql15);
while($row15=mysql_fetch_array($ret15)){$rooms15[]=$row15[0];}

$sql6="select RoomNum from room where place_ID=6";
$ret6=mysql_query($sql6);
while($row6=mysql_fetch_array($ret6)){$rooms6[]=$row6[0];}
$rm6_count=count($rooms6);

$sql16="select Room_ID from room where place_ID=6";
$ret16=mysql_query($sql16);
while($row16=mysql_fetch_array($ret16)){$rooms16[]=$row16[0];}

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
							<p><?php echo "$userid" ?>님 환영합니다.</p>
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
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-check-square">Map</span></a></li>
								<li><a href="#bon" id="bon-link" class="skel-layers-ignoreHref"><span class="icon fa-university">본관</span></a></li>
								<li><a href="#in" id="in-link" class="skel-layers-ignoreHref"><span class="icon fa-group">인문관</span></a></li>
								<li><a href="#ja" id="ja-link" class="skel-layers-ignoreHref"><span class="icon fa-tree">자연관</span></a></li>
								<li><a href="#won" id="won-link" class="skel-layers-ignoreHref"><span class="icon fa-book">원화관</span></a></li>
								<li><a href="#gym" id="gym-link" class="skel-layers-ignoreHref"><span class="icon fa-soccer-ball-o">체육시설</span></a></li>
								<li><a href="#lib" id="lib-link" class="skel-layers-ignoreHref"><span class="icon fa-book">도서관</span></a></li>
								<li><a href="/Status/StatusMap.php" id="sta-link" class="skel-layers-ignoreHref"><span class="icon fa-clock-o">예약 현황 확인</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="Main1.php" class="icon fa-sign-out" onclick="logout()"><span class="label">logout</span></a></li>
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
  								<area shape="polygon" coords="510,61,474,69,481,76,477,108,469,108,461,98,441,102,441,133,450,144,467,138,467,134,487,130,497,141,521,134,521,126,537,122,542,124,553,120,557,100,561,97,549,84,533,88,534,96,522,97,525,82,531,80,515,64" href="#bon" /> <!--본관-->
  								<area shape="polygon" coords="646,62,617,70,617,74,605,76,603,74,591,78,590,98,602,113,613,110,613,106,618,105,625,112,645,108,646,98,647,98,650,101,657,100,665,80,661,72" href="#won" /> <!--원화관-->
  								<area shape="polygon" coords="680,66,663,70,667,78,665,88,689,116,723,108" href="#gym" /> <!--테니스장-->
  								<area shape="polygon" coords="678,141,638,148,631,156,669,206,682,210,719,201,725,194,726,186,709,164,686,145" href="#gym" /> <!--풋살장-->
  								<area shape="polygon" coords="760,210,739,218,738,222,725,229,722,225,701,232,697,256,723,290,745,274,745,268,753,266,759,270,777,260,778,252,773,244,781,234,769,220" onclick="alert ('no')" /> <!--학생회관-->
  								<area shape="polygon" coords="679,242,637,258,637,286,639,296,645,300,646,306,657,316,698,304,702,280,701,276,701,266,690,250" href="#lib" /> <!--도서관-->
  								<area shape="polygon" coords="635,175,630,162,618,156,612,158,607,150,592,153,588,173,598,186,596,190,610,212,614,208,626,228,643,224,646,205,634,189,636,177" href="#in" /> <!--인문관-->
  								<area shape="polygon" coords="479,178,456,184,456,206,462,218,454,224,470,253,482,250,491,268,510,262,514,240,500,217,506,214,487,190" href="#ja" /> <!--자연관-->
  								<area shape="polygon" coords="531,283,482,300,498,330,549,312,542,300" href="#gym" /> <!--농구장-->
  								<area shape="polygon" coords="460,303,411,320,431,338,455,342,477,336,471,318" href="#gym" /> <!--선학음악당-->
  								<area shape="polygon" coords="415,203,334,226,359,277,440,249,440,249,427,224" href="#gym" /> <!--공대앞운동장-->
  								<area shape="polygon" coords="114,139,131,130,125,126,125,118,93,97,81,104,49,118,51,137,105,196,141,182,143,166,129,152" href="#gym" /> <!--체육관-->	
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
								for($i=0;$i<$rm_count;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										echo"<article class=\"item\">
											<a href=\"#\" class=\"image fit\" onclick=\"room_id($rooms11[$i], '$userid', '$rooms[$i]', 1)\"><img src=\"image/1-$rooms[$i].jpg\" alt=\"\" /></a>
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

				<!-- in -->
					<section id="in" class="three">
						<div class="container">

							<header>
								<h2>인문관</h2>
							</header>
							<div class="row">
								<?php
									for($i=0;$i<$rm2_count;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										echo"<article class=\"item\">
											<a href=\"#\" class=\"image fit\" onclick=\"room_id($rooms12[$i], '$userid', '$rooms2[$i]', 8)\"><img src=\"image/8-$rooms2[$i].jpg\" alt=\"\" /></a>
											<header>
											<h3>$rooms2[$i]</h3>
											</header>
											</article>";
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
									for($i=0;$i<$rm3_count;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										echo"<article class=\"item\">
											<a href=\"#\" class=\"image fit\" onclick=\"room_id($rooms13[$i], '$userid', '$rooms3[$i]', 3)\"><img src=\"image/3-$rooms3[$i].jpg\" alt=\"\" /></a>
											<header>
											<h3>$rooms3[$i]</h3>
											</header>
											</article>";
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
							<div class="row">
								<?php
									for($i=0;$i<$rm4_count;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										echo"<article class=\"item\">
											<a href=\"#\" class=\"image fit\" onclick=\"room_id($rooms14[$i], '$userid', '$rooms4[$i]', 4)\"><img src=\"image/4-$rooms4[$i].jpg\" alt=\"\" /></a>
											<header>
											<h3>$rooms4[$i]</h3>
											</header>
											</article>";
										echo"</div>";
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
							<div class="row">
								<?php
									for($i=0;$i<$rm6_count;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										echo"<article class=\"item\">
											<a href=\"#\" class=\"image fit\" onclick=\"room_id($rooms16[$i], '$userid', '$rooms6[$i]', 6)\"><img src=\"image/6-$rooms6[$i].jpg\" alt=\"\" /></a>
											<header>
											<h3>$rooms6[$i]</h3>
											</header>
											</article>";
										echo"</div>";
									}
								?>
							</div>

						</div>
					</section>
				<!-- lib  -->
					<section id="lib" class="seven">
						<div class="container">

							<header>
								<h2>도서관</h2>
							</header>
							<div class="row">
								<?php
									for($i=0;$i<$rm5_count;$i++)
									{
										echo"<div class=\"4u 12u$(mobile)\">";
										echo"<article class=\"item\">
											<a href=\"#\" class=\"image fit\" onclick=\"room_id($rooms15[$i], '$userid', '$rooms5[$i]', 5)\"><img src=\"image/5-$rooms5[$i].jpg\" alt=\"\" /></a>
											<header>
											<h3>$rooms5[$i]</h3>
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
			<script>
				function room_id(roomid,a,roomnum,bil) {
					location.href="/Reservation/calendar.php?"+roomid+":"+a+":"+bil+":"+roomnum;
				}
				function logout() {
					alert ("로그아웃 되었습니다.");
				}
			</script>
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