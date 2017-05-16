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

<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> <!--utf-8설정-->

<title>SingUp Page</title>

</head>

 

<br>

<br>

<CENTER>회원가입</b></div>

<form action="" method="post">

<label>아  이  디 :</label><input type="text" name="id" class="box"/><br>

<label>패 스 워 드 :</label><input type="password" name="password" class="box" /><br>

<label>이      름 :</label><input type="text" name="name" class="box"/><br>

<label>학      번 :</label><input type="text" name="stdID" class="box" /><br>

<label>전 화 번 호 :</label><input type="text" name="phone" class="box" /><br>

<label>선      택 :</label><input type="text" name="type" class="box" /><br>

<label>학      과 :</label><input type="text" name="deptID" class="box" /><br>

<center><input type="submit" value="회원가입"/><br/>

</form>

</body>

 

</html>