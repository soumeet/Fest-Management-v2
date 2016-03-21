<?php
	include("db_connection.php");
	if(isset($_GET['bt_grp_search'])){
		$id = $_GET['tb_gid'];
		if($id==""){
			$sql = "SELECT * FROM db_groups";
		}else{
			$sql = "SELECT * FROM db_groups WHERE group_id = '$id'";
		}
		$grp_result = mysqli_query($con, $sql);
	}
?>