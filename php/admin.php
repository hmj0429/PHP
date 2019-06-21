<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>宿舍網站首頁</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="templated-privy\default.css" rel="stylesheet" type="text/css" media="all" />
<link href="templated-privy\fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="templated-privy\style.css" rel="stylesheet" type="text/css" media="all" />

<body>
<?php
session_start();
$_SESSION["adm"]++;
?>
<div id="page" class="container">
<div id="header">
<div id="logo">
<img src="templated-privy/images/pic02.jpg" alt="" />
<h1><font size="14pt" color="white">宿舍網站</font></h1>
</div>
<div id="menu">
<ul>
<li class="current_page_item"><a href="admin.php" accesskey="1" title=""><font size="3pt" color="white">首頁</font></a></li>
<li><a href="repairresult.php" accesskey="2" title="">維修申請</a></li>
<li><a href="borrowresult.php" accesskey="3" title="">借用申請</a></li>
<li><a href="discussion.php" accesskey="4" title="">討論區</a></li>
<li><a href="logout.php" accesskey="5" title="">登出</a></li>
</ul>
</div>
</div>
<div id="main">
<div id="banner">
<img src="templated-privy/images/pic01.png" alt="" class="image-full" />
</div>
<div id="welcome">
<div class="title">
<h2><font size="5pt" color="#202020">~歡迎來到宿舍網頁~</font></h2>
</div>
<br/>
<font color="#202020" font size="5em"><strong>~請勾選網頁滿意度~</strong></font>
<br/>
<form action="good.php" method="post">
		<font size="3pt" color="black">很好<input type="radio" name="good" value="veryg">
		<font size="3pt" color="black">不好<input type="radio" name="good" value="notg">
		<input type="submit">
</div>
<div id="featured">
<div class="marqee">
<ul>
<h1><font color="white">宿舍資訊公佈欄</font></h1>
</ul>
</div>
<br/>
<br/>
<ul class="style1">
<li class="first">
<p class="date"><font color="black">MAY<b>15</b></font></a></p>
<h2><a href="https://www.nuk.edu.tw/files/14-1000-22348,r112-1.php?Lang=zh-tw"><font color="black">徵108學年度新生進住工讀生</font></a></h2>
<p><font color="black">一、工作時間：108年8月31日(六)8-18時。<br/>
二、需求人數：20名。<br/>
...</font></p>
</li>
</ul>
<ul class="style1">
<li class="first">
<p class="date"><font color="black">APR<b>20</b></font></a></p>
<h2><a href="https://www.nuk.edu.tw/files/14-1000-21885,r112-1.php?Lang=zh-tw"><font color="black">107學年第2學期學生宿舍清宿通知</font></a></h2>
<p><font color="black">一、 退宿時間：6月22日(六) 上午9時至6月24日(一)中午12時止。<br/>
二、暑住住宿說明：申請暑假住宿者，統一分配學一宿舍住宿。<br/>
...</font></p>
</li>
</ul>
<ul class="style1">
<li class="first">
<p class="date"><font color="black">MAR<b>19</b></font></a></p>
<h2><a href="https://www.nuk.edu.tw/files/14-1000-21294,r112-1.php?Lang=zh-tw"><font color="black">108學年舊生宿舍抽籤結果公告</font></a></h2>
<p><font color="black">一、本次抽籤已於3月18日晚上7時在學二宿舍閱覽室辦理完畢。<br/>
二、抽籤結果詳如附件，一般生依抽中棟別安排，保障住宿依登記第一志<br/>
...</font></p>
</li>
</ul>
<ul class="style1">
<li class="first">
<p class="date"><font color="black">FEB<b>20</b></font></a></p>
<h2><a href="https://www.nuk.edu.tw/files/14-1000-20777,r112-1.php?Lang=zh-tw"><font color="black">107學年第1學期期末宿舍清宿扣款</font></a></h2>
<p><font color="black">107學年第1學期期末清宿扣款清冊詳如附件<br/>
有任何問題請於108年3月1日(星期五)前至學二辦公室(07-5919596、5919597)反應，逾時恕不受理。<br/>
...</font></p>
</li>
</ul>
</div>
<div id="copyright">
<span>© 2015 高雄大學 National University of Kaohsiung</a></span>
<span>81148 高雄市楠梓區高雄大學路700號<br/>
700, Kaohsiung University Rd., Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br>
諮詢電話:07-5919596、5919597、5919061</a></span>
</div>
</div>
</div>
</body>
</html>