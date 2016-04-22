<?php
require_once('./conn.php');
$day= date('Y-m-d');
$date=explode("-", $day);
if ($_POST['user_account']!="") {
	$sql="select last_sign from user where user_account='$_POST[user_account]'";
	$query = mysqli_query($connect, $sql);
	$last_sign = mysqli_fetch_array($query);
	 $last_date=explode("-", $last_sign["last_sign"]);
	 if ( $last_sign["last_sign"]!=$day) {
	 		if ($date[0]==$last_date[0]&&$date[1]==$last_date[1]&&$date[2]-$last_date[2]==1) {
	 		$sql1="update user set last_sign='$day',continuous_sign=continuous_sign+1,all_sign=all_sign+1 where user_account='$_POST[user_account]'";
	 		$connect->query($sql1);
	 		if ($connect->affected_rows>0) {
	 			$result = array("status"=>"success");
		        echo json_encode($result);
	 		}else{
	 			$result = array("status"=>"fails");
		        echo json_encode($result);
	 		}
	 }else{
	 	$sql1="update user set last_sign='$day',continuous_sign=0,all_sign=all_sign+1 where user_account='$_POST[user_account]'";
	 		$connect->query($sql1);
	 		if ($connect->affected_rows>0) {
	 			$result = array("status"=>"success");
		        echo json_encode($result);
	 		}else{
	 			$result = array("status"=>"fails");
		        echo json_encode($result);
	 		}
	 }
	}else{
		$result = array("status"=>"had_sign");
		        echo json_encode($result);
	}

}else{
		$result = array("status"=>"no account");
		echo json_encode($result);
}

?>