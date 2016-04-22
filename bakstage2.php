<?php 
	$callback=$_REQUEST['callback'];
	echo $callback.'('.json_encode(array('id'=>1)).')';
?>  
