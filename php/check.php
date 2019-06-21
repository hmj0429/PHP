<?php

session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($id=="a1063339" && $pwd=="a1063324"){
	$_SESSION["login"]="admin";
	$date=strtotime("+7 days",time());
	setcookie("uID",$id,$date);
	header("Location: admin.php");
}elseif($id=="nukim" && $pwd=="nukim"){
	$_SESSION["login"]="manager";
	$date=strtotime("+7 days",time());
	setcookie("uID",$id,$date);
	header("Location: manager.php");
}else{
	$_SESSION["loginfail"]="fail";
	header("Location: failed.php");
}

?>