<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy"); 
 $data1 = json_decode(file_get_contents("php://input"));  
 $ordernumber = mysqli_real_escape_string($connect, $data1->order_number);
 $output = '';  
 
 $query = "UPDATE regshoporder SET Verified = 1 WHERE OrderNumber='{$ordernumber}'" ; 

 $result = mysqli_query($connect, $query);  
 if ($result==true) {
 	echo json_encode("Oder Number =>'{$ordernumber}' is Verified......");
 }
 
 else{
 	echo json_encode("error......");
  }
 ?>  