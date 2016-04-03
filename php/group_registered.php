<?php
header("Content-type: application/json");
include("db_connection.php");
if(isset($_POST['tb_grp_name'])) {
    $name = $_POST['tb_grp_name'];
	$event = $_POST['cb_event'];
	$mem1 = $_POST['tb_mem1'];
	$mem2 = $_POST['tb_mem2'];
	$mem3 = $_POST['tb_mem3'];
	$mem4 = $_POST['tb_mem4'];
    $mem5 = $_POST['tb_mem5'];
/*
	echo "Registration Details";
	echo "<br>GROUP NAME: ".$name;
	echo "<br>EVENT: ".$event;
	echo "<br>MEMBER 1: ".$mem1;
	echo "<br>MEMBER 2: ".$mem2;
	echo "<br>MEMBER 3: ".$mem3;
	echo "<br>MEMBER 4: ".$mem4;
	echo "<br>MEMBER 5: ".$mem5;
*/
    $sql = "insert into db_groups (
            name,
            event,
            member1,
            member2,
            member3,
            member4,
            member5
            ) values(
            '$name',
            '$event',
            '$mem1',
            '$mem2',
            '$mem3',
            '$mem4',
            '$mem5')";
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
    }else{
        $data=array('res'=>'0', 'id'=>'SNKLP0x00');
        $js_str = json_encode($data);
        echo $js_str;
        exit;
    }
}
?>
