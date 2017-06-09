<?php

include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

session_start();   //세션의 시작

if($_SERVER["REQUEST_METHOD"] == "POST"){

 

    $id=addslashes($_POST['id']); 

    $pw=addslashes($_POST['password']); 
	
	$name = addslashes($_POST['name']);
	
	$stdID = addslashes($_POST['stdID']);
	
	$phone = addslashes($_POST['phone']);
	
	$type = addslashes($_POST['type']);
	
	$deptID = addslashes($_POST['deptID']);
	
	$sql = "SELECT ID FROM member WHERE ID='$id'";
	
    $result=mysql_query($sql);

    $count=mysql_num_rows($result);

	if($count==1){
	
		echo "<script>alert(\"중복된 ID입니다.\");

				history.back(1);

				</script>";
	
	}else{
		
		$insert = mysql_query("INSERT INTO member(ID, PW, name, Std_ID, Phone, Type, Dept_ID) values('$id', '$pw', '$name', '$stdID', '$phone', '$type', '$deptID')");
	
		echo "<script>alert(\"회원가입되었습니다.\");

				history.back(1);

				</script>";
				
		
		header("location: login.php");
	
	}

}

?>


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
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">회원가입</span></a></li>
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
								<h2 class="alt">회원가입</h2>
								<CENTER>아이디와 패스워드를 입력해주세요</b></div>

								<form action="" method="post">

								<label>아  이  디 :</label><input type="text" name="id" class="box"/><br>

								<label>패 스 워 드 :</label><input type="password" name="password" class="box" /><br>

								<label>이      름 :</label><input type="text" name="name" class="box"/><br>

								<label>학      번 :</label><input type="text" name="stdID" class="box" /><br>

								<label>전 화 번 호 :</label><input type="text" name="phone" class="box" /><br>

								<label>선      택 :</label><input type="text" name="type" class="box" /><br>

								<label>학      과 :</label><input type="text" name="deptID" class="box" /><br>

								<center><input type="submit" value="회원가입"/><br/>
								
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
