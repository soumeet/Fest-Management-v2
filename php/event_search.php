<?php

    header("Content-type: application/json");
    include("db_connection.php");
	if(isset($_POST['cb_event'])){
		$event = $_POST['cb_event'];
        $data=array('res' => '0');
        //echo "<br>EVENT: ".$event."<br>";
        if($event==""){
			$sql = "SELECT * FROM db_groups";
		}else{
			$sql = "SELECT * FROM db_groups WHERE event = '$event'";
		}
		$result = mysqli_query($con, $sql);
        $row = mysqli_fetch_all($result);
        /*while ($row = mysqli_fetch_array($result)){
            if($row['group_id'] < 100)
               $id='SNKLP00'.$row['group_id'];
            else if($row['group_id'] < 1000)
               $id='SNKLP0'.$row['group_id'];
            $name=$row['name'];
            $mem1=$row['member1'];
            $mem2=$row['member2'];
            $mem3=$row['member3'];
            $mem4=$row['member4'];
            $mem5=$row['member5'];
            
            //echo  $id." ".$name." ".$mem1." ".$mem2." ".$mem3." ".$mem4." ".$mem5."\r\n";
            
            $data=array('res' => '1',
                           'id' => $id,
                           'name' => $name,
                           'mem1' => $mem1,
                           'mem2' => $mem2,
                           'mem3' => $mem3,
                           'mem4' => $mem4,
                           'mem5' => $mem5);
            
        }
        $js_str = json_encode($data);*/
        echo json_encode($row);
        exit;
    }   
?>
