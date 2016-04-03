<?php
include("db_connection.php");
if(isset($_POST['bt_clnt_login'])){      
      $uid = $_POST['tb_username'];
      $pswd = $_POST['tb_password'];
      //echo "<br>".$uid." ".$pswd;
      $sql1 = "SELECT username FROM db_client";
      $result1 = mysqli_query($con, $sql1);
      while ($row1 = mysqli_fetch_array($result1)){
        $tmp_id = $row1['username'];
        //echo "<br>".$tmp_id."&".$uid;
        if($tmp_id==$uid){
          $sql2 = "SELECT password FROM db_client WHERE username = '$tmp_id'";
          $result2 = mysqli_query($con, $sql2);
          while ($row2 = mysqli_fetch_array($result2)){
            $tmp_pswd = $row2['password'];
            //echo "<br>".$tmp_pswd."&".$pswd;
            if($tmp_pswd==$pswd){
                header("Location: ../client.html");
                //echo 1;
                exit;
            }else{
              //$sts = -2;
                header("Location: ../login.html#client_login");
                header("<script>alert('Wrong Password')</script>");
            }   
          }
        }else{
            //$sts = -1;
            header("Location: ../login.html#client_login");
            header("<script>alert('Wrong Username')</script>");
        }
      }
    //echo $sts;
    exit;
}
?>
