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
								<li><a href="#" id="sta-link" class="skel-layers-ignoreHref"><span class="icon fa-clock-o">예약 현황 확인</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="../Main2.php" class="icon fa-home"><span class="label">login</span></a></li>
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

								<img src="cpmap.jpg" width="986" height="820" usemap="#Map" alt="" />
                                <map name="Map" id="Map">
  								<area shape="polygon" coords="510,61,474,69,481,76,477,108,469,108,461,98,441,102,441,133,450,144,467,138,467,134,487,130,497,141,521,134,521,126,537,122,542,124,553,120,557,100,561,97,549,84,533,88,534,96,522,97,525,82,531,80,515,64" onclick="btn_Status(1)" /> <!--본관-->
  								<area shape="polygon" coords="646,62,617,70,617,74,605,76,603,74,591,78,590,98,602,113,613,110,613,106,618,105,625,112,645,108,646,98,647,98,650,101,657,100,665,80,661,72" onclick="btn_Status(4)" /> <!--원화관-->
  								<area shape="polygon" coords="680,66,663,70,667,78,665,88,689,116,723,108" onclick="btn_Status(6)" /> <!--테니스장-->
  								<area shape="polygon" coords="678,141,638,148,631,156,669,206,682,210,719,201,725,194,726,186,709,164,686,145" onclick="btn_Status(6)" /> <!--풋살장-->
  								<area shape="polygon" coords="760,210,739,218,738,222,725,229,722,225,701,232,697,256,723,290,745,274,745,268,753,266,759,270,777,260,778,252,773,244,781,234,769,220" onclick="alert ('no')" /> <!--학생회관-->
  								<area shape="polygon" coords="679,242,637,258,637,286,639,296,645,300,646,306,657,316,698,304,702,280,701,276,701,266,690,250" onclick="btn_Status(5)" /> <!--도서관-->
  								<area shape="polygon" coords="635,175,630,162,618,156,612,158,607,150,592,153,588,173,598,186,596,190,610,212,614,208,626,228,643,224,646,205,634,189,636,177" onclick="btn_Status(8)" /> <!--인문관-->
  								<area shape="polygon" coords="479,178,456,184,456,206,462,218,454,224,470,253,482,250,491,268,510,262,514,240,500,217,506,214,487,190" onclick="btn_Status(3)" /> <!--자연관-->
  								<area shape="polygon" coords="531,283,482,300,498,330,549,312,542,300" onclick="btn_Status(6)" /> <!--농구장-->
  								<area shape="polygon" coords="460,303,411,320,431,338,455,342,477,336,471,318" onclick="btn_Status(6)" /> <!--선학음악당-->
  								<area shape="polygon" coords="415,203,334,226,359,277,440,249,440,249,427,224" onclick="btn_Status(6)" /> <!--공대앞운동장-->
  								<area shape="polygon" coords="114,139,131,130,125,126,125,118,93,97,81,104,49,118,51,137,105,196,141,182,143,166,129,152" onclick="btn_Status(6)" /> <!--체육관-->	
								</map>
							</footer>
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
				function btn_Status(a) {
					location.href="StatusPic.php?"+a;
				}
			</script>
  			<script src="su/jquery.rwdImageMaps.min.js"></script>
  			<script>
    			$(document).ready(function(e){
      				$('img[usemap]').rwdImageMaps();
   				});
  			</script>

	</body>
</html>