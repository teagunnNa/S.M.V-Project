<?php
	$connect = mysql_connect("localhost","root","apmsetup");
	mysql_select_db("smr");
	mysql_set_charset("utf8",$connect);
	$sql="select * from room";
	$ret=mysql_query($sql);
?>

<html>
<head>
</head>
<body>
	<script type="text/javascript">
	function room_id(roomid) {
		alert(roomid);
		$.ajax({
			url: "roomDisplay.php",
			type: "GET",
			data: {"roomid": roomid},
			success: function (result) {
				alert(result);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert("ERROR" + textStatus + " : " + errorThrown);
				self.close();
			}
		});
		location.reload();
	}
	</script>
	<table>
		<tr align="center" height="30px">
			<td bgcolor="#FF3636"><font color="white"><b>방이름</font></td>
		</tr>
	<?php 
	while($row=mysql_fetch_array($ret)){
		if($row[place_ID]==1){
			$a='인문관';
		}elseif($row[place_ID]==3){
			$a='자연관';
		}elseif($row[place_ID]==4){
			$a='원화관';
		}elseif($row[place_ID]==5){
			$a='도서관';
		}elseif($row[place_ID]==6){
			$a='체육시설/음악당';
		}elseif($row[place_ID]==8){
			$a='인문관';
		}
		echo("<tr><td><a href='roomDisplay.php?$row[Room_ID]'onclick='this.href'><input size=\"30%\" value='$a  $row[RoomNum]'></a></tr></td>");
	}
	?>
	</table>
</body>
</html>