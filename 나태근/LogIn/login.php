<?php

 

    include("config.php");  //DB������ ���� config.php�� �ε��մϴ�.

    session_start();   //������ ����

 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $myusername=addslashes($_POST['username']); 

    $mypassword=addslashes($_POST['password']); 

	echo "<script>alert(\"$myusername $mypassword\");</script>";
 

    $sql="SELECT id FROM member WHERE ID='$myusername' and PW='$mypassword'";

    $result=mysql_query($sql);

    //$row=mysql_fetch_array($result);

    //$active=$row['active'];

 

    $count=mysql_num_rows($result);

 

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count==1)  //count�� 1�̶�� ���� ���̵�� �н����尡 ��ġ�ϴ� db�� �ϳ� ������ �ǹ��մϴ�. 

    {

        session_register("myusername");

        $_SESSION['login_user']=$myusername;

        header("location: welcome.php");  // welcome.php �������� �ѱ�ϴ�.

    }

    else 

    {

        echo "<script>alert(\"�α��ο� �����Ͽ����ϴ�.\");

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
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">�α���</span></a></li>
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
								<h2 class="alt">�α���</h2>
								<CENTER>���̵�� �н����带 �Է����ּ���</b></div>

								<form action="" method="post">

								<label>�� �� ��   :</label><input type="text" name="username" class="box"/><br>

								<label>�н����� :</label><input type="password" name="password" class="box" />

								<center><input type="submit" value="�α���"/><br/>
								<a href="signup.php"> <input type="button" value="ȸ������"></a>
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
