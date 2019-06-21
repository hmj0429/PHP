<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>討論區</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="templated-privy/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="templated-privy/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="templated-privy/style.css" rel="stylesheet" type="text/css" media="all" />

<body>
<?php
session_start();
$_SESSION["dis"]++;
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
				<li><a href="repairresult.php" accesskey="2" title="">維修申請</a></li>
				<li><a href="borrowresult.php" accesskey="4" title="">借用申請</a></li>
				<li class="current_page_item"><a href="discussion.php" accesskey="3" title=""><font size="3pt" color="white">討論區</font></a></li>
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
				<h2><font color="#202020">~宿舍討論區~</font></h2>
				
		
		</div>
		</div>
		<div id="featured">
			<div class="marqee">
				<ul>
					<h1><font color="white">討論區</font></h1>
				</ul>
			</div>
			<br/>
			<h3><font color="black">按一下→<a href="dis.php">新增討論</a></h3>
			<br/>
      </div>


<?php
date_default_timezone_set('ETC/GMT-8');
$No=$_GET["No"];
$name=$_POST["name"];
$numb=$_POST["numb"];
$tit=$_POST["tit"];
$lm=$_POST["lm"];
$time=@date("Y/m/d  h:i:s",time());


$link=@mysqli_connect('localhost','hmjloner','im3201','住宿系統');
if($name!=null){
$SQLCreate="INSERT into activitylm(標題,姓名,學號,留言,time) VALUES ('$tit','$name','$numb','$lm','$time')";
$result=mysqli_query($link,$SQLCreate);
}

$SQL="SELECT * FROM activitylm";
echo "<table border=0 cellspacing=2 bgcolor=#202020 width=100% style=font-weight:bold; font-size: 13pt; font-color:black>";
echo "<tr style=line-height: 300%>"."<td width=6% align=center bgcolor=#FFF>編號</td>"."<td width=6% align=center bgcolor=#2980b9>姓名</td>"."<td width=36% align=center bgcolor=#FFF>標題</td>"."<td width=16% align=center bgcolor=#2980b9>時間</td>"."</tr>";
if($result=mysqli_query($link,$SQL)){
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr style=line-height: 300%>";
		echo "<td width=6% align=center bgcolor=#FFF>".$row["No"]."</td>"."<td width=6% align=center bgcolor=#2980b9>".$row["姓名"]."</td>"."<td width=36% align=center bgcolor=#FFF>"."<a href='discussiontt.php?No=".$row['No']."'>".$row["標題"]."</a>"."</td>"."<td width=16% align=center bgcolor=#2980b9>".$row['time'];
		echo "</tr>";
	}
}


echo "</table>";



mysqli_close($link);



/*
session_start();

$name=$_POST["name"];
$numb=$_POST["numb"];
$tit=$_POST["tit"];
$lm=$_POST["lm"];
$time=@date("Y/m/d ").@(date("g")+8).@date(":i");

$link=@mysqli_connect('localhost','hmjloner','im3201','住宿系統');


if($_POST["lm"]!=null){
	$SQLCreate="INSERT into activitylm(標題,學號,姓名,留言,time) VALUES ('$tit','$numb','$name','$lm','$time')";
	$result=mysqli_query($link,$SQLCreate);
}


$SQL="SELECT * FROM activitylm";
echo "<table border=0 cellspacing=2 bgcolor=#202020 width=100% style=font-weight:bold; font-size: 13pt; font-color:black>";
echo "<tr style=line-height: 300%>"."<td width=6% align=center bgcolor=#2980b9>編號</td>"."<td width=36% align=center bgcolor=#2980b9>標題</td>"."<td width=16% align=center bgcolor=#2980b9>時間</td>"."</tr>";
if($result=@mysqli_query($link,$SQL)){
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr style=line-height: 300%>";
		echo "<td width=16% align=center bgcolor=#2980b9>".$row["No"]."</td>"."<td width=16% align=center bgcolor=#2980b9>".$row["標題"]."</td>"."<td width=16% align=center bgcolor=#2980b9>".$row['time']."</td>";
		echo "</tr>";
	}
}
echo "</table>";
mysqli_close($link);
*/
?>




<div id="copyright">
			<span>© 2015 高雄大學 National University of Kaohsiung</span>
			<span>*學二辦公室上班時間:週一~週五 早上8點至晚上11點30分/週六~週日 下午2點30分至晚上11點30分*
			<span>81148 高雄市楠梓區高雄大學路700號<br/>
				700, Kaohsiung University Rd., Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br>
				諮詢電話:07-5919596</span>
		</div>
</div>
</body>
</html>