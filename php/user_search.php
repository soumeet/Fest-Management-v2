<?php
	include("db_connection.php");
	if(isset($_GET['bt_usr_search'])){
		$id = $_GET['tb_uid'];
		 if($id==""){
		 	$sql = "SELECT * FROM db_users";
		 }else{
		 	$sql = "SELECT * FROM db_users WHERE id = '$id'";
		 }
		 $usr_result = mysqli_query($con, $sql);
	}
?>