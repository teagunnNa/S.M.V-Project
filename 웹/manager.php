<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?php
	$con = mysqli_connect("localhost","lee","1234","smr","3306");
	$result = mysqli_query($con,"select * from reservation");
	$number = 1;
?>
<h2>�� ������ ���̽� Ȱ�� php</h2>
<table width = "60%" border= "1" cellpadding="24">
<tr align="center">
	<td bgcolor="#cccccc">�Ϸù�ȣ</td>
	<td bgcolor="#cccccc">��û�� ID</td>
	<td bgcolor="#cccccc">����ð�</td>
	<td bgcolor="#cccccc">������</td>
	<td bgcolor="#cccccc">����ҽð�</td>
	<td bgcolor="#cccccc">���ο���</td>
</tr>
<?php 
	while($row = mysqli_fetch_array($result))
	{
		echo ("
		<tr>
		<td> $number</td>
		<td> $row[ID]</td>
		<td> $row[DateTime]</td>
		<td> $row[Usage]</td>
		<td> $row[Room_ID]</td>
		<td> $row[Allowed]</td>
		</tr>
		");
		$number++;
	}
?>
</table>