<?php
header("Content-type:application/json");
$data['id'] = 1;
$dat['name'] = "mary";
$da['red']= array_merge($data,$dat);
$data1['id'] = 2;
$dat1['name'] = "燕子";
$da['blue']= array_merge($data1,$dat1);
// print_r($da);///打印出来是一个二维数组（如下）

/*
Array
(
    [red] => Array
        (
            [id] => 1
            [name] => mary
        )
    [blue] => Array
        (
            [id] => 2
            [name] => 燕子
        )
)
*/
 $arr[0]=$_GET['name'];
 $arr[1]=$_GET['age'];

echo json_encode($da);//输出的是一个转化成json格式的字符串，可以直接在js中用（如下）
// echo $na;
/*
{"red":{"id":1,"name":"mary"},"blue":{"id":2,"name":"u71d5u5b50"}}
*/
?>
