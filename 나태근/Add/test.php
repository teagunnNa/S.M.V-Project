<?php

    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

    session_start();   //세션의 시작

	$building=addslashes($_POST['building']); 

	echo "<script>alert(\"로그인에 실패하였습니다.\");

		history.back(1);

		</script>";

	
?>

<html>
<body>

<img src="cpmap.gif" usemap="#Map" border="1" target="_blank" />
<map name="Map" id="Map">
	<area shape="rect" coords="444,54,548,138" name="building" value="main" type="submin"/>
	<area shape="rect" coords="588,62,654,106" href="picture_bd.html" />
	<area shape="rect" coords="668,70,708,116" href="tennis_ct.html" />
	<area shape="rect" coords="652,146,716,210" href="lawn.html" />
	<area shape="rect" coords="712,218,772,270" href="students_hl.html" />
	<area shape="rect" coords="638,242,692,302" href="library.html" />
	<area shape="rect" coords="584,154,636,220" href="humanities_bd.html" />
	<area shape="rect" coords="460,190,500,258" href="natural_bd.html" />
	<area shape="rect" coords="496,290,540,324" href="basketball_ct.html" />
	<area shape="rect" coords="432,310,468,338" href="concert_hl.html" />
	<area shape="rect" coords="346,214,426,252" href="ground.html" />
	<area shape="rect" coords="54,114,134,182" href="gym.html" />

</map>

</body>
</html>