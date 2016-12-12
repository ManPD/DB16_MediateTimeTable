<?php
	session_start();
	include("config.php");

	$id=$_POST['id'];
	$pw=$_POST['pw'];

	$query = "select * from user where id ='$id' and pw ='$pw'";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);
	if($row==1){
		echo($row['id']);
		$_SESSION['id']=$row['id'];

		echo "<script>document.location.href='./welcome.php'</script>";
	}
	else{
		echo "<script>window.alert('ID나 PW가 잘못되었습니다 :(')</script>";
		echo "<script>location.href='./login.php';</script>";
	}
?>

