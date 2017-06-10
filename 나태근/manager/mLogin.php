<?php

 

    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

    session_start();   //세션의 시작

 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

 

		$myusername=addslashes($_POST['username']); 

		$mypassword=addslashes($_POST['password']); 

	 

		$sql="SELECT id FROM manager WHERE ID='$myusername' and PW='$mypassword'";

		$result=mysql_query($sql);

		//$row=mysql_fetch_array($result);

		//$active=$row['active'];

	 

		$count=mysql_num_rows($result);

	 

		// If result matched $myusername and $mypassword, table row must be 1 row

		if($count==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다. 

		{

			session_register("myusername");

			$_SESSION['login_user']=$myusername;

			header("location: mIndex.php");  // welcome.php 페이지로 넘깁니다.

		}

		else 

		{

			echo "<script>alert(\"관리자 로그인에 실패하였습니다.\");

					history.back(1);

					</script>";

		}

	}

?>

<html>
	<head>
		<title>S.M.R</title>
		<meta charset="enc-kr" />
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
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">관리자 로그인</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="../Main1.php" class="icon fa-home"><span class="label">UserMain</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">로그인</h2>
								아이디와 패스워드를 입력해주세요</b></div>

								<form action="" method="post">
								<table>
								<tr>
								<th>아 이 디 </th>
								<th><input type="text" name="username" class="box"/><br></th>
								</tr>
								<tr>
								<th>패스워드 </th>
								<td><input type="password" name="password" class="box" /></td>
								</tr>
								<tr><td>&nbsp&nbsp </td><td></td></tr>
								<tr><th colspan="2"><input type="submit" value="로그인"/></a></th><th></th></tr>
								</table>
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
