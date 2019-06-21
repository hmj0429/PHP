<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>功能使用率狀況</title>
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
				<li><a href="manarepair.php" accesskey="2" title="">維修申請名單</a></li>
				<li><a href="manaborrow.php" accesskey="3" title="">借用申請名單</a></li>
				<li><a href="manadiscussion.php" accesskey="4" title="">討論區</a></li>
				<li><a href="mana.php" accesskey="5" title="">功能使用狀況</a></li>
				<li class="current_page_item"><a href="good.php" accesskey="6" title=""><font color="white">網頁評價</font></a></li>
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
				<h2><font size="15pt" color="#202020">~歡迎來到宿舍網頁~</font></h2>
			</div>
		</div>
		<div id="featured">
			<div class="marqee">
				<ul>
					<h1><font color="white" font size="6em">網頁滿意度</font></h1>
				</ul>
			</div>
		</div>

			<?php
			session_start();
			if($_POST["good"]=="veryg"){
				$_SESSION["veryg"]++;
			}
			if($_POST["good"]=="notg"){
				$_SESSION["notg"]++;				
			}
		    echo "<font color='black';font size='7em'>很好次數:".$_SESSION["veryg"]."次"."<br/>";
		    echo "<font color='black';font size='7em'>不好次數:".$_SESSION["notg"]."次"."<br/>";
		    header("Location:admin.php");
		    ?>

		<div id="copyright">
			<font size="3em">
			<span>© 2015 高雄大學 National University of Kaohsiung</span>
			<span>*學二辦公室
		上班時間:週一~週五 早上8點至晚上11點30分/週六~週日 下午2點30分至晚上11點30分*
			<span>81148 高雄市楠梓區高雄大學路700號<br/>
				700, Kaohsiung University Rd., Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br>
				諮詢電話:07-5919596</span>
			</font>
		</div>
	</div>
</div>
</body>
</html>