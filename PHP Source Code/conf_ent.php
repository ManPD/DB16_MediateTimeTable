<?php
	session_start();
	include("config.php");

	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$tel=$_POST['tel'];
	$com_num=$_POST['com_num'];

	$query = "insert into Entertainer values ('$name','$sex','$age','$tel','$com_num')";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);

	if($result){
		echo "<script>window.alert('정상 등록 되었습니다 :)')</script>";
		echo "<script>document.location.href='./welcome.php'</script>";
	}
	else{
		echo "<script>window.alert('등록되지 않았습니다 :(')</script>";
		echo "<script>history.go(-1);</script>";
	}
?>