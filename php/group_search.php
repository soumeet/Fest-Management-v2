<?php
	include("db_connection.php");
	if(isset($_POST['tb_gtype'])){
		$type = $_POST['tb_gtype'];
        $by = $_POST['cb_gby'];
        //echo "by: ".$by." query: ".$type."\r\n";
        if($by=="ID"){
           if($type==""){
               $sql = "SELECT * FROM db_groups";
           }else{
               $sql = "SELECT * FROM db_groups WHERE group_id = '$type'";
           }    
        }else if($by=="NAME"){
           if($type==""){
               $sql = "SELECT * FROM db_groups";
           }else{
               $sql = "SELECT * FROM db_groups WHERE name = '$type'";
           }    
        }else if($by=="EVENT"){
           if($type==""){
               $sql = "SELECT * FROM db_groups";
           }else{
               $sql = "SELECT * FROM db_groups WHERE event = '$type'";
           }    
        }
        //echo "".$sql."\r\n";
        $grp_result = mysqli_query($con, $sql);
        $row = mysqli_fetch_all($grp_result);
        echo json_encode($row);
        exit;
	}
?>