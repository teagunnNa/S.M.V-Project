<?php

 

    include("config.php");  //DB������ ���� config.php�� �ε��մϴ�.

    session_start();   //������ ����

 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

 

    $myusername=addslashes($_POST['username']); 

    $sql="SELECT id FROM member WHERE ID='$myusername'";

    $result=mysql_query($sql);

    $count=mysql_num_rows($result);

    if($count==1)  //count�� 1�̶�� ���� ���̵� ��ġ�ϴ� db�� �ϳ� ������ �ǹ��մϴ�. 

    {

        echo "�̹� ������� ���̵� �Դϴ�."

    }

    else 

    {

        echo "��밡���� ���̵� �Դϴ�."

    }

}

?>