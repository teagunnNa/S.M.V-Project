<?php

$connect = mysql_connect("localhost","root","apmsetup");
mysql_select_db("smr");

$rooms=array();
$pics=array();
$sum=0;

$sql="select RoomNum from room";
$ret=mysql_query($sql);
while($row=mysql_fetch_array($ret)){$rooms[]=$row[0];}
$rm_count=count($rooms);

$sql="select picture from room";
$ret=mysql_query($sql);
while($row=mysql_fetch_array($ret)){$pics[]=$row[0];}
$pc_count=count($pics);

echo "<table border='1'>";
for($i=0;$i<$rm_count/3;$i++){
	echo "<tr>";
	for($j=0;$j<$rm_count;$j++){
		echo "<td>$pics[$sum]<br>$rooms[$sum]</td>";
		$sum++;
	}
	echo "</tr>";
	}
echo"</table>";

mysql_close($connect);
?>
