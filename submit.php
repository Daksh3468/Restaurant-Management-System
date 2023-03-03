<?php

include('dbcon.php');

$item1 = $_POST['1item'] * 110;
$item2 = $_POST['2item'] * 250;
$item3 = $_POST['3item'] * 300;

$total_price = $item1 + $item2 + $item3;
echo '\n';
echo $total_price;

$soup_1 = $_POST['1item'];
$soup_2 = $_POST['2item'];
$soup_3 = $_POST['3item'];

    $insert_query = "INSERT INTO `soup`.`temp_s` (`s1`, `s2`,`s3`) VALUES ('$soup_1','$soup_2','$soup_3')";

    $iquery = mysqli_query($con,$insert_query);

		if($con){

			echo "inserted is successfull";
		
		}
		else{
			echo "connection failed";
		}

?>