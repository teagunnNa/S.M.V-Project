
<html>

	<head> 
		<meta charset="UTF-8">
		<script src="js/script.js"></script>
		<br><br>
			<h1 align="center">   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp예약 페이지&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   </h1>
			<br><br>
			
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
	<tr> <th width="100" > 예약 날짜</th> <th width="100">
	<script type="text/javascript">
		temp=location.href.split("?") ;
		data=temp[1].split(":");
		data=data[0].split("#");
		document.write(data[0]);
	</script>
	</th></tr>
	<tr> <th width="100" > 예약 시간</th> <th width="100">
	<script type="text/javascript">
		temp=location.href.split("?") ;
		data=temp[1].split(":");
		document.write(data[1]+ ":00 ~ " + (1 + data[1]*1) + ":00" );
	</script>
	</th></tr>
	<tr> <th width="100" > 예약 목적</th> <th width="60"> <select name="purpose" align="center"> <option>사용목적 선택</option> <option value="친목도모">친목도모</option> <option value="스터디/소회의">스터디/소회의</option> <option value="동아리모임">동아리모임</option> <option value="대회의">대회의</option> <option value="사업/취업 설명회">사업/취업 설명회</option></select> </th> </tr>
	<tr> <td align="center" colspan=2 height="20"> <input type="button" value="제출하기">&nbsp&nbsp <input type="reset" value="지우기"> </tr>
	</table>
	<br>
	
	
	</form>
	</body>
	
</html>