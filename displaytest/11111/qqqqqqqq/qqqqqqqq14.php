<?php
session_start();
?>
<html>

	<head> 
		<meta charset="UTF-8">
		<script src="js/script.js"></script>
			<h1 align="center"> 예약 초안 </h1>
			
		<style> 
			select{
				width:150px;
				height:30px;
				align:center;
				
			
			}
		
		</style>
	</head>

<body>
	<form>
	<table width="300" height="200" align="center">
	<tr> <th width="100" > 장소</th> <th width="100"> </th></tr>
	<tr> <th width="100" > 예약 시간</th> <th width="100"> 14:00 ~ 15:00</th></tr>
	<tr> <th width="100" > 예약 목적</th> <th width="100"> <select name="purpose" align="center"> <option> 아무렇게긴글자 </option> <option> 옵션 </option> <option> 옵션 </option> <option> 옵션 </option> <option> 옵션 </option> <option> 옵션 </option> <option> 옵션 </option> <option> 옵션 </option> <option> 옵션 </option> <option> 옵션 </option>	</th> </tr>
	<tr> <td align="center" colspan=2 height="20"> <input type="button" value="제출하기">&nbsp&nbsp <input type="reset" value="지우기"> </tr>
	</table>
	<br>
	
	
	</form>
	</body>
	
</html>