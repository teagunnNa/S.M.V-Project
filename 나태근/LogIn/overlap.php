<?php

 

    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

    session_start();   //세션의 시작

 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

 

    $myusername=addslashes($_POST['username']); 

    $sql="SELECT id FROM member WHERE ID='$myusername'";

    $result=mysql_query($sql);

    $count=mysql_num_rows($result);

    if($count==1)  //count가 1이라는 것은 아이디가 일치하는 db가 하나 있음을 의미합니다. 

    {

        echo "이미 사용중인 아이디 입니다."

    }

    else 

    {

        echo "사용가능한 아이디 입니다."

    }

}

?>