<!DOCTYPE HTML>
<html>
<head>
<title>Alloy Jacket Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["name"];
$cardno=$_GET["mail"];
$sno=$_GET["phone"];
mysql_connect("localhost","root","");
mysql_select_db("vehicle");
mysql_query("insert into order1 values('$nm','$cardno','$sno')");

?>
</body>
</html>
