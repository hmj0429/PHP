<?php
$result=mysqli_query($link,$SQL);
while$DATA=mysqli_fetch_assoc($result);

echo "<a href='im.php?id=".$DATA["id"]."'>".$DATA["title"]$DATA["name"]$DATA["date"]."</a>";

------------------------------------------
session_start();
$_SESSION["id"]=$_GET["id"];

SQL=    WHERE id=$_SESSION["id"]


print內容


<form action="2.php">
留言+送出

</form>



---------------------------------------
session_start();
$id=$_SESSION["id"];

text id

INSERT (id,text),($id,$留言)

$href="/php?id=".$id;
header(Location="$href")