<?php
header("Content-type: application/json");
include("db_connection.php");
if(isset($_POST['tb_name'])) {
    $name = $_POST['tb_name'];
	$mobile = $_POST['tb_mobile'];
	$email = $_POST['tb_email'];
	$college = $_POST['tb_college'];
/*
	echo "Registration Details";
	echo "<br>NAME: ".$name;
	echo "<br>MOBILE: ".$mobile;
	echo "<br>EMAIL ID: ".$email;
	echo "<br>COLLEGE: ".$college;
*/
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $data=array('res'=>'5', 'id'=>'SNKLP0x00');
        $js_str = json_encode($data);
        echo $js_str;
        exit;
    }
    else{
        $sql = "insert into db_users (
		name,
		mobile,
		email,
		college
		)values(
		'$name',
		'$mobile',
		'$email',
		'$college')";
	   $result = mysqli_query($con, $sql);
	   if ($result) {
	   //echo "<b>"."<i>"."<br>Data Insertion Succession"."</i>"."</b>";
	   	$id=mysqli_insert_id($con);
           if($id < 100)
               $data=array('res' => '1', 'id' => 'SNKLP00'.$id);
           else if($id < 1000)
               $data=array('res' => '1', 'id' => 'SNKLP0'.$id);
           $js_str = json_encode($data);
           echo $js_str;
           exit;
        }
    }

}
?>
