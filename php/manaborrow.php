<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>借用申請名單</title>
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
				<li><a href="manarepair.php" accesskey="2" title="">維修申請名單</font></a></li>
				<li class="current_page_item"><a href="manaborrow.php" accesskey="3" title=""><font size="3pt" color="white">借用申請名單</a></li>
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
				<h2><font color="#202020">~宿舍借用申請~</font></h2>
			</div>
		</div>

<?php
$No=$_GET["No"];

$link=@mysqli_connect('localhost','hmjloner','im3201','住宿系統');

$SQLDelete="DELETE FROM activitybor WHERE No=$No";
$result=mysqli_query($link,$SQLDelete);

$SQL="SELECT * FROM activitybor";
echo "<font color='black'>";
echo "<table border='3px' cellspacing='0' bgcolor='#2980b9' width='100%' style='font-weight:bold; font-size: 16pt'>";
echo "<tr><td bgcolor=#FFF>編號</td><td>姓名</td><td bgcolor=#FFF>學號</td><td>聯絡電話</td><td bgcolor=#FFF>借用地點</td><td>借用時間</td><td bgcolor=#FFF>大約人數</td><td>借用原因</td><td bgcolor=#FFF>借用狀況</td><td bgcolor=#FFF>修改</td><td bgcolor=#FFF>刪除</td></tr>";
if($result=mysqli_query($link,$SQL)){
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td bgcolor=#FFF>".$row["No"]."</td>"."<td>".$row["姓名"]."</td>"."<td bgcolor=#FFF>".$row["學號"]."</td>"."<td>".$row["聯絡電話"]."</td>"."<td bgcolor=#FFF>".$row["借用地點"]."</td>"."<td>".$row["借用時間"]."</td>"."<td bgcolor=#FFF>".$row["大約人數"]."</td>"."<td>".$row["借用原因"]."</td>"."<td bgcolor=#FFF>".$row["借用狀況"]."</td>"."<td bgcolor=#FFF>"."<a href='manaborrowupdate.php?No=".$row['No']."'>修改</a>"."</td>"."<td bgcolor=#FFF>"."<a href='manaborrow.php?No=".$row['No']."'>刪除</a>"."</td>";
		echo "</tr>";
echo "</font>";
	}
}


echo "</table>";
mysqli_close($link);

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