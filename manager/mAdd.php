<?php

include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

session_start();   //세션의 시작

$bil = $_SESSION['nnn'];

$sql="select Building from place where place_ID='$bil'";
$ret=mysql_query($sql);
for($i=0;$row=mysql_fetch_array($ret);$i++){$Building[]=$row[$i];}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$roomNum=addslashes($_POST['roomNum']);
	
	$testResult = mysql_query("SELECT * FROM room WHERE RoomNum='$roomNum' and place_ID='$bil'");
	$count=mysql_num_rows($testResult);
	
	if($count<1){
	
		$result = mysql_query("SELECT MAX(Room_ID) FROM room");
		$idx = mysql_fetch_array($result);
		$Room_ID = $idx[0]+1;
		
		$insert = mysql_query("INSERT INTO room(Room_ID, Place_ID, roomNum) values('$Room_ID', '$bil', '$roomNum')");
		
		$uploaddir = '\\\\211.183.34.26/htdocs/image/';  //파일이 저장될 실제 폴더 

		$uploadfile = $uploaddir . basename($_FILES['userfile']['name']); //파일의 이름정의 
		
		$fn=$bil."-".$roomNum.".jpg";
		
		$fn = iconv("UTF-8","cp949//IGNORE", $fn); 
		
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$fn)) { 
			
			
			
		} else { 

			echo "<script> alert(\"해당 파일이 없습니다.\") </script>";

		}
		
		echo "<script> alert(\"시설이 추가되었습니다.\") </script>";
	
	}else{
		
		echo "<script> alert(\"이미 추가되있는 시설입니다.\") </script>";
		
	}
	
}

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
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]--><meta http-equiv="Content-Type" content="text/html" charset="utf-8">
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
								<?php
									echo("
										<li><a href=\"#top\" id=\"top-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-plus-square-o\">$Building[0] 호실 추가</span></a></li>
									")
								?>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="mIndex.php" class="icon fa-home"><span class="label">ManagerMain</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">시설추가</h2>
								<form enctype="multipart/form-data" action="" method="post">
									<?php
									echo("
										$Building[0] 시설을 추가합니다.<br><br>
									")
									?>
									<table><tr>
									<th>호실</th>
									<th><input  type="text" name="roomNum" size="1%" class="box"/></th>
									</tr></table>
									<input name="userfile" type="file" /> 
									<input type="submit" value="시설 추가"/><br/>
								
								</form>
							</header>


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

	</body>
</html>