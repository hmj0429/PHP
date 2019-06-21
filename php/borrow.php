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
<?php
session_start();
		$_SESSION["b"]++;
?>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="templated-privy/images/pic02.jpg" alt="" />
			<h1><font size="14pt" color="white">宿舍網站</font></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="admin.php" accesskey="1" title="">首頁</a></li>
				<li><a href="repair.php" accesskey="2" title="">維修申請</a></li>
				<li class="current_page_item"><a href="borrow.php" accesskey="3" title=""><font size="3pt" color="white">借用申請</font></a></li>
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
				<h2><font color="#202020">~宿舍場地借用申請~</font></h2>
			</div>
		</div>
		<div id="featured">
			<div class="marqee">
				<ul>
					<h1><font color="white">申請借用表</font></h1>
				</ul>
			</div>
			<br/>
			<h3><font color="black">*請完整填寫申請單*</h3>
			<br/>
			</div>
			<form action="borrowresult.php" method="post">
			<table border="0" cellspacing="2" bgcolor="#202020" width="100%" style="font-weight:bold; font-size: 13pt">
			<tbody><tr bgcolor="" style="line-height: 300%">
			<td width="16%" align="center" bgcolor="#2980b9">學號</td>
			<td bgcolor="#2980b9" width="35%">&nbsp;
			<input type="text" name="numb" size="15" value="" maxlength="8" style="font-size:18px"></td>
			<td width="16%" align="center" bgcolor="#2980b9">姓名</td>
			<td bgcolor="#2980b9" width="35%">&nbsp;
			<input type="text" name="name" size="14" value="" maxlength="10" style="font-size:18px"></td>
			</tr>
			<tr bgcolor="" style="line-height: 300%">
			<td width="16%" align="center" bgcolor="#2980b9">借用地點</td>
			<td bgcolor="#2980b9" width="35%">&nbsp;
			<input type="text" name="borgood" size="15" value="" maxlength="11" style="font-size:18px">
			<td width="16%" align="center" bgcolor="#2980b9">聯絡電話</td>
			<td bgcolor="#2980b9" width="35%">&nbsp;
			<input type="text" name="tel" size="14" value="" maxlength="11" style="font-size:18px"></td>
			</tr>
			<tr bgcolor="" style="line-height: 300%">
			<td width="16%" align="center" bgcolor="#2980b9">借用時間</td>
			<td bgcolor="#2980b9" width="35%">&nbsp;
			<input type="text" name="bortime" size="15" value="" maxlength="11" style="font-size:18px">
			<td width="15%" align="center" bgcolor="#2980b9">大約人數</td>
			<td bgcolor="#2980b9" width="35%">&nbsp;
			<input type="text" name="peo" size="14" value="" maxlength="11" style="font-size:18px"></td>
			</tr>
			<tr bgcolor="" style="line-height: 300%">
			<td width="16%" align="center" bgcolor="#2980b9">借用原因</td>
			<td bgcolor="#2980b9" width="35%" colspan="3">&nbsp;
			<input type="text" size="60" name="seas" value="" maxlength="60" style="font-size:18px"></td>
			</tr>
			<tr bgcolor="" style="line-height: 200%">
			<td width="16%" align="center" bgcolor="#2980b9">注意事項</td>
			<td bgcolor="#2980b9" width="35%" colspan="3">
			1.請盡量填寫詳細資料及聯絡方式、時間，以便聯絡。<br/>
			2.可借用時間基本為早上10點至晚上10點。<br/>
			3.使用時，以不會大擾到其他住宿生為最大目的。<br/>
			4.聯絡方式請填寫個人聯絡方式，以便有突發狀況發生時能夠馬上通知。
			</td>
			</tr>
			</tbody></table><br>
			
			<input type="submit" value="確定送出" style="font-size:18px;<a href='borrowresult.php'></a>">
			</form>
			<br/>
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