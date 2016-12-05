<?php
	$xingming = $_POST["xingming"];
	$nianling = $_POST["nianling"];
	$xingbie = $_POST["xingbie"];

	$conn = mysql_connect("localhost","root","anqing725");
	mysql_select_db("biaodan");
	mysql_query("SET NAMES UTF8");


	$sql = "INSERT INTO xueshengbiao (xingming,nianling,xingbie) VALUES ('{$xingming}',{$nianling},'{$xingbie}')";
	
	$result = mysql_query($sql);

	//这个echo就是前端xhr.responseText
	echo 1;
?>