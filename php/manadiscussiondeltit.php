<?php

$No=$_GET["No"];

$link=@mysqli_connect('localhost','hmjloner','im3201','住宿系統');

$SQLDelete="DELETE FROM activitylm WHERE No=$No";
$result=mysqli_query($link,$SQLDelete);

mysqli_close($link);

if($result)
	header("Location:manadiscussion.php");


?>