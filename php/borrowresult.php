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
				<li><a href="admin.php" accesskey="1" title="">首頁</a></li>
				<li><a href="repairresult.php" accesskey="2" title="">維修申請</font></a></li>
				<li class="current_page_item"><a href="borrowresult.php" accesskey="3" title=""><font size="3pt" color="white">借用申請</a></li>
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
				<h2><font color="#202020">~宿舍借用申請~</font></h2>
			</div>
		</div>
		<h3><font color="black">按一下→<a href="borrow.php">新增借用</a></h3>
		<br/>

<?php
$link=@mysqli_connect('localhost','hmjloner','im3201','住宿系統');


if($_POST["name"]!=null){
$name=$_POST["name"];
$numb=$_POST["numb"];
$tel=$_POST["tel"];
$borgood=$_POST["borgood"];
$bortime=$_POST["bortime"];
$peo=$_POST["peo"];
$seas=$_POST["seas"];

$SQLCreate="INSERT into activitybor(姓名,學號,聯絡電話,借用地點,借用時間,大約人數,借用原因) VALUES ('$name','$numb','$tel','$borgood','$bortime','$peo','$seas')";

$result=mysqli_query($link,$SQLCreate);
}

$SQL="SELECT * FROM activitybor";
echo "<table border='3px' cellspacing='0' bgcolor='#2980b9' width='100%' style='font-weight:bold; font-size: 16pt'>";
echo "<tr><td  bgcolor=#FFF>編號</td><td>姓名</td><td bgcolor=#FFF>學號</td><td>聯絡電話</td><td bgcolor=#FFF>借用地點</td><td>借用時間</td><td bgcolor=#FFF>大約人數</td><td>借用原因</td><td bgcolor=#FFF>借用狀況</td></tr>";
if($result=mysqli_query($link,$SQL)){
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td bgcolor=#FFF>".$row["No"]."</td>"."<td>".$row["姓名"]."</td>"."<td bgcolor=#FFF>".$row["學號"]."</td>"."<td>".$row["聯絡電話"]."</td>"."<td bgcolor=#FFF>".$row["借用地點"]."</td>"."<td>".$row["借用時間"]."</td>"."<td bgcolor=#FFF>".$row["大約人數"]."</td>"."<td>".$row["借用原因"]."</td>"."<td bgcolor=#FFF>".$row["借用狀況"]."</td>";
		echo "</tr>";
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