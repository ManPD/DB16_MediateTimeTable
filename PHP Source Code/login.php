<?php
	session_start();
	if($_SESSION['id']==null){
?>
	<html>
		<center><br><br><h1>로그인해주십시오.</h1><br>
		<form name="login_form" action="login_check.php" method="post">
			ID : <input type="text" name="id"><br>
			PW : <input type="password" name="pw"><br><br>
			<input type="submit" name="login" value="Login">
		</form>
		<h3>Made By. MV</h3>
		<h4>Database Project</h4>
		</center>
	</html>
<?php
}
?>
