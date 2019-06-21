<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>借用申請</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="templated-privy/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="templated-privy/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="templated-privy/style.css" rel="stylesheet" type="text/css" media="all" />

<body>

<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="templated-privy/images/pic02.jpg" alt="" />
			<h1><font size="14pt" color="white">宿舍網站</font></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="manager.php" accesskey="1" title="">首頁</a></li>
				<li class="current_page_item"><a href="manarepair.php" accesskey="2" title=""><font size="3pt" color="white">維修申請名單</font></a></li>
				<li><a href="manaborrow.php" accesskey="3" title="">借用申請名單</a></li>
				<li><a href="manadiscussion.php" accesskey="4" title="">討論區</a></li>
				<li><a href="mana.php" accesskey="5" title="">功能使用狀況</a></li>
				<li><a href="goodresult.php" accesskey="6" title="">網頁評價</a></li>
				<li><a href="logout.php" accesskey="7" title="">登出</a></li>
			</ul>
		</div>
	</div>
	<div id="main">
		<div id="banner">
			<img src="templated-privy/images/pic01.png" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2><font color="#202020">~宿舍維修狀況選擇~</font></h2>
			</div>
		</div>

		<form action="#" method="post">
		<select name="status" size="1" style="font-size: '18pt'">
		<option value="not">未處理</option>
		<option value="ing">處理中</option>
		<option value="fin">已處理</option>
		</select>
		<input type="submit">
		</form>
	
		<?php
			$No=$_GET["No"];
				if($_POST["status"]=="not"){
				$x="未處理";
				}elseif($_POST["status"]=="ing"){
					$x="處理中";
				}elseif($_POST["status"]=="fin"){
					$x="已處理";
				}

if($_POST["status"]){
$link=@mysqli_connect('localhost','hmjloner','im3201','住宿系統');


$SQLCreate="UPDATE activityrp SET 維修狀況='$x' WHERE $No=No";

$result=mysqli_query($link,$SQLCreate);

mysqli_close($link);
}
if($result)
	header("Location:manarepair.php");

?>
	
	<div id="copyright">
			<span>© 2015 高雄大學 National University of Kaohsiung</span>
			<span>*學二辦公室上班時間:週一~週五 早上8點至晚上11點30分/週六~週日 下午2點30分至晚上11點30分*
			<span>81148 高雄市楠梓區高雄大學路700號<br/>
				700, Kaohsiung University Rd., Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br>
				諮詢電話:07-5919596</span>
		</div>
	</div>
</div>
</body>
</html>