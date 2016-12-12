<?php
	session_start();
	include("config.php");
?>
<html>
	<head>
		<title>일정 추가</title>
		<script>
			function page_back(){
				history.go(-1)();
			}
		</script>
	</head>
	<body>
		<center>
			<br><br>
			<h1>일정 추가</h1>
			<form name="add_time" action="conf_time.php" method="post">
				<table>
					<tr>
						<td>시작 시간 : </td><td><input type="datetime-local" name="start_time" required></td>
					</tr>
					<tr>
						<td>종료 시간 : </td><td><input type="datetime-local" name="end_time" required></td>
					</tr>
					<tr>
						<td>장소 : </td><td><input type="text" name="place"></td>
					</tr>
					<tr>
						<td>내용 : </td><td><input type="text" name="content"></td>
					</tr>
					<tr>
						<td>담당 연예인 : </td><td><input type="text" name="res_ent"></td>
					</tr>
					<tr>
						<td>담당 매니저 : </td><td><input type="text" name="res_mana"></td>
					</tr>
					<tr>
						<td><input type="submit" name="add_time" value="등록 완료"></td>
						<td><input type="button" name="goback" value="뒤로 가기" onclick="page_back();"></td>
					</tr>
				</table>
			</form>
		</center>
<!--		<table>
			<tr>
				<td>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td>
					<?php
						$query = "select * from Manager";
						$result = mysql_query($query);
						
						while($row = mysql_fetch_array($result)){
							echo "매니저 : $row[name]";
				?></td>
				<td><?php
							echo "회사번호 : $row[Company_num]";
						}
					?>
				</td>
			</tr>
-->		
	</body>
</html>