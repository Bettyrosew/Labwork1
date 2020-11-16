<?php
//database connection
$con = mysqli_connect('localhost','root','','labwork');

//get the post records
$txtFoodtype = $_POST['txtFoodtype'];
$txtFoodquantity = $_POST['txtFoodquantity'];

//database insert SQL bind_textdomain_codeset
$sql = "INSERT INTO 'orders' ('orderID','Foodtype','Foodquantity') VALUES('0','$txtFoodtype', '$txtFoodquantity')";

//Insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
  echo "Under construction";
}
 ?>
