<?php

include("config.php");

$sql2="select RoomNum from room where place_ID=2";
$ret2=mysql_query($sql2);
while($row2=mysql_fetch_array($ret2)){$room2[]=$row2[0];}
$rm2_count=count($rooms2);

echo "<script>alert(\"$rm2_count\");
			history.back(1);
			</script>";

?>