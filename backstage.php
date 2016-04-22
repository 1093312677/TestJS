<?php
$name = "helo22222";
$arr=array(
	'firstname'=>$name,
	'lastname'=>iconv("gb2312", "utf-8","hell22")
);

// $json_string = json_encode(array('firstname'=>1));
 $json_string = json_encode($arr);
echo "get1($json_string)";
?>