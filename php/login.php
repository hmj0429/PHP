<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>宿舍網站登入</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="templated-radius/assets/css/main.css" />
	</head>
	<body>
		<header id="header">
			<div class="inner">
				<div class="content">
                    <h1>登入</h1>
                    <h2>
					<form action="check.php" method="POST">
					<?php
					session_start();
					if(isset($_COOKIE["uID"])){
						$uID=$_COOKIE["uID"];
						echo "帳號  : <input type='text' style='height:40px;width:100px' name='id' value=$uID><br/>";
					}else
						echo "帳號  : <input type='text' style='height:40px;width:100px' name='id'><br/>";
					?>
					&nbsp;密碼 : <input type="password" style='height:40px;width:100px' name="pwd">
					<br/>
					</h2>
					<input type="submit" value="確認" style="<a href='#' class='button big alt'></a>">
				</div>
			</div>
		</header>
		<div id="main">
				<div class="inner">
					<div class="columns">
							<div class="image fit">
								<a href="#"><img src="templated-radius/images/pic04.jpg" height="690" width="1000"alt="" /></a>
							</div>
					</div>
				</div>
		</div>
	</body>
</html>