<?php
	include("db_connection.php");
	if(isset($_POST['tb_type'])){
		$type = $_POST['tb_type'];
        $by = $_POST['cb_by'];
        //echo "by: ".$by." query: ".$type."\r\n";
        if($by=="ID"){
           if($type==""){
               $sql = "SELECT * FROM db_users";
           }else{
               $sql = "SELECT * FROM db_users WHERE id = '$type'";
           }    
        }else if($by=="NAME"){
           if($type==""){
               $sql = "SELECT * FROM db_users";
           }else{
               $sql = "SELECT * FROM db_users WHERE name = '$type'";
           }    
        }else if($by=="MOBILE"){
           if($type==""){
               $sql = "SELECT * FROM db_users";
           }else{
               $sql = "SELECT * FROM db_users WHERE mobile = '$type'";
           }    
        }else if($by=="EMAIL"){
           if($type==""){
               $sql = "SELECT * FROM db_users";
           }else{
               $sql = "SELECT * FROM db_users WHERE email = '$type'";
           }    
        }
        //echo "".$sql."\r\n";
        $usr_result = mysqli_query($con, $sql);
        $row = mysqli_fetch_all($usr_result);
        echo json_encode($row);
        exit;
	}
?>