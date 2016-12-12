<?php
	session_start();
	include("config.php");

	//$start_time=date($_POST['start_time']);
	//$end_time=date($_POST['end_time']);
	$start_time=$_POST['start_time'];
	$end_time=$_POST['end_time'];
	$place=$_POST['place'];
	$content=$_POST['content'];
	$res_ent=$_POST['res_ent'];
	$res_mana=$_POST['res_mana'];

	$query = "insert into Schedule_System values ('$start_time','$end_time','$place','$content','$res_ent','$res_mana')";
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