<?php

 

    include("config.php");  //DB������ ���� config.php�� �ε��մϴ�.

    session_start();   //������ ����

 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

 

    $myusername=addslashes($_POST['username']); 

    $mypassword=addslashes($_POST['password']); 

 

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

<meta http-equiv="Content-Type" content="text/html" charset="enc-kr"> <!--utf-8����-->

<title>Login Page</title>

</head>

 

<br>

<br>

<CENTER>���̵�� �н����带 �Է����ּ���</b></div>

<form action="" method="post">

<label>�� �� ��   :</label><input type="text" name="username" class="box"/><br>

<label>�н����� :</label><input type="password" name="password" class="box" />

<center><input type="submit" value="�α���"/><br/>
<a href="signup.php"> <input type="button" value="ȸ������"></a>

</form>

</body>

 

</html>