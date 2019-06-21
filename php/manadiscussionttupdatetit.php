<?php

$No=$_POST["No"];
$name=$_POST["name"];
$tit=$_POST["tit"];
$lm=$_POST["lm"];

$link=@mysqli_connect('localhost','hmjloner','im3201','住宿系統');

$SQLUpdate="UPDATE activitylm SET 標題='$tit',姓名='$name',留言='$lm' WHERE No=$No";

$result=mysqli_query($link,$SQLUpdate);

mysqli_close($link);

if($result){
	header ("Location:manadiscussiontt.php");
}

?>