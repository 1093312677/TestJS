<?php
$arr = array(
     'name' => '陈毅鑫',
     'nick' => '深空',
     'contact' => array(
         'email' => 'shenkong at qq dot com',
         'website' => 'http://www.chenyixin.com',
     )
);
$json_string = json_encode($arr);
$obj = json_decode($json_string);
print_r($obj);
?>

<script type="text/javascript">
var str = '{"name":"\u9648\u6bc5\u946b","nick":"\u6df1\u7a7a","contact":{"email":"shenkong at qq dot com","website":"http:\/\/www.chenyixin.com"}}';
var arr = eval('(' + str + ')');
alert(arr.name)
</script>