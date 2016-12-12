<html>
	<head>
		<title>신규 연예인 추가</title>
		<script>
			function page_back(){
				history.go(-1)();
			}
		</script>
	</head>
	<body>
		<center>
			<br><br>
			<h1>신규 연예인 추가</h1>
			<form name="add_ent" action="conf_ent.php" method="post">
				<table>
					<tr>
						<td>연예인 이름 : </td><td><input type="text" name="name" required></td>
					</tr>
					<tr>
						<td>성별 : </td><td><INPUT TYPE="radio" NAME="sex" VALUE="남자" CHECKED>남자&nbsp
											<INPUT TYPE="radio" NAME="sex" VALUE="여자">여자</td>
					</tr>
					<tr>
						<td>나이 : </td><td><input type="number" name="age" required min="15" max="60"></td>
					</tr>
					<tr>
						<td>연락처 : </td><td><input type="tel" name="tel" required pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" title="####-####-####"></td>
					</tr>
					<tr>
						<td>회사번호 : </td><td><input type="number" name="com_num" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="add_ent" value="등록 완료"></td>
						<td><input type="button" name="goback" value="뒤로 가기" onclick="page_back();"></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>