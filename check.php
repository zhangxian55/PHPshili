<?php
	//连接数据库
	$conn = mysql_connect("localhost","root","anqing725");
	//选择数据
	mysql_select_db("biaodan");
	//设置中文
	mysql_query("SET NAMES UTF8");
	//得到GET请求的姓名参数
	$xingming = $_GET["xingming"];
	//准备一条SQL语句
	$sql = "SELECT * FROM xuesheng WHERE xingming = '{$xingming}'";
	//执行查询
	$result = mysql_query($sql);
	//查询的结果数量
	$num = mysql_num_rows($result);
	//根据结果数量，显示文字提示
	if($num == 0){
		echo "KEYISHIYONG";
	}else{
		echo "BUNENGSHIYONG";
	}
?>