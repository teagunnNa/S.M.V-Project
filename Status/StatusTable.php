<?php 

	$room = $_SERVER['QUERY_STRING'];
	$con = mysqli_connect("localhost","lee","1234","smr","3306");
	mysqli_set_charset($con,"utf8");
	$result = mysqli_query($con,"select * from v1 where Room_ID = '$room' order by Date");
	$re2 = mysqli_query($con,"select * from room where Room_ID='$room'");
	$row2 = mysqli_fetch_array($re2);
	$re3 = mysqli_query($con,"select * from place where place_ID='$row2[place_ID]'");
	$row3 = mysqli_fetch_array($re3);
	$number=1;
	
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
								<li><a href="#bon" id="bon-link" class="skel-layers-ignoreHref"><span class="icon fa-clock-o"><?php echo $row3[Building]." ".$row2[RoomNum]." ";  ?></span></a></li>
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
						<div class="container" width = "100%">

							<header>
								<h2><?php echo "$Building[0] 예약 현황 확인"?></h2>
							</header>
							<table width = "100%" class="displaytable" cellpadding="20">
								<tr align="center"><td ><font color="white" size="5em"><b> <?php echo $row3[Building]." ".$row2[RoomNum]." ";  ?>	예약현황</font></td></tr>
								<table width = "100%">
								<div>
								<tr align="center">
									<td ><font size="3%"><b>순번</font></td>
									<td ><font size="3%"><b>신청자 이름</font></td>
									<td ><font size="3%"><b>사용날짜</font></td>
									<td ><font size="3%"><b>사용시간</font></td>
									<td ><font size="3%"><b>연락처</font></td>
									<td ><font size="3%"><b>사용목적</font></td>
								</tr>
								<?php 
									while($row = mysqli_fetch_array($result))
									{
										$p1 = floor($row[phone]/100000000);
										$p2 = floor(($row[phone]-($p1*100000000))/10000);
										if($p2<1000) $p2='0'.$p2;
										if($p2<100) $p2='0'.$p2;
										if($p2<10) $p2='0'.$p2;
										$p3 = $row[phone]-($p1*100000000+$p2*10000);
										if($p3<1000) $p3='0'.$p3;
										if($p3<100) $p3='0'.$p3;
										if($p3<10) $p3='0'.$p3;
										$_SESSION['id']=$row[ID];
										$ttime=$row[Time]+1;
										
										$d1 = floor($row[Date]/10000);
										$d2 = floor(($row[Date]-$d1*10000)/100);
										$d3 = $row[Date]-$d1*10000-$d2*100;
										$d4 = $d1."년 ".$d2."월 ".$d3."일";
										echo ("
										<tr align=\"center\" height=\"60px\"> 
										<td ><font size=\"3%\"><b> $number</td>
										<td ><font size=\"3%\"><b> $row[name]</td>
										<td ><font size=\"3%\"><b> $d4</td>
										<td ><font size=\"3%\"><b> $row[Time]:00 ~ $ttime:00</td>
										<td ><font size=\"3%\"><b> 0$p1-$p2-$p3</td>
										<td ><font size=\"3%\"><b> $row[Usage]</td>
										</tr>
										");
										$number++;
									}
									?>
								</table>
							</table>
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