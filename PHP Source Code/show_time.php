<?php
	session_start();
	include("config.php");

?>
<html>
	<head>
		<title>스케줄 열람</title>
		<script>
			function page_back(){
				history.go(-1)();
			}
		</script>
	</head>
	<body>
		<center>
			<br><br>
			<h2> 일 정 </h2>
			<h4>시 작  시  간 | 종  료  시  간 | 장  소 | 내  용 | 담당 연예인 | 담당 매니저</h4>
			
<?php
			$result = mysql_query("select * from Schedule_System");
			while($row = mysql_fetch_array($result)){
				print $row[0];
				print " | ";
				print $row[1];
				print " | ";
				print $row[2];
				print " | ";
				print $row[3];
				print " | ";
				print $row[4];
				print " | ";
				print $row[5];
				print "<br>";
			}
?>
			<br>
			<input type="button" name="goback" value="뒤로 가기" onclick="page_back();">
		</center>
	</body>
</html>