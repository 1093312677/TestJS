<?php
	header('content-type:text/html;charset=utf-8');
	// 获取时间和用户名
	$timeYear = $_REQUEST["timeYear"];
	$timeMonth = $_GET["timeMonth"];
	

	echo $timeYear;

	class ConnectMysql
	{
		var $sever_name="localhost";
		var $mysql_username = "root";
		var $mysql_password = "root";
		var $mysql_database = "person";

		// var $sever_name="118.193.195.16";
		// var $mysql_username = "a0826194802";
		// var $mysql_password = "wn15181647378";
		// var $mysql_database = "a0826194802";
		function Connect($sql)
		{
			$mysqli = new mysqli($this->sever_name,$this->mysql_username,$this->mysql_password,$this->mysql_database);
			if($mysqli->connect_error)
			{
				die("connect error:".$mysqli->connect_error);
			}
			$mysqli->set_charset='utf8';
			$result = $mysqli->query($sql);
			return $result;
		}
	}

	$sql = "select*from user"; //where password = ".$timeYear." and telephone= ".$timeMonth;
	$conn = new ConnectMysql();
	$result = $conn->Connect($sql);//执行语句
	echo '<table border=1px>';
	while($row = $result->fetch_array())
	{
		echo '<tr>';
		echo '<td>';
			echo $row['username'];
		echo '</td>';
		echo '<td>';
			echo $row['password'];
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
		


?>