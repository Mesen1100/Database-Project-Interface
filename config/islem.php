<?php 
include "connectdb.php";

if (isset($_POST['customeredit'])) {
echo $_POST['customerID'];
$query = $db->prepare("UPDATE customer SET
       customerName = :customerName,
       customerLastName = :customerLastName,
       dateofBirth = :dateofBirth,
       customerCity = :customerCity,
       customerTelNo = :customerTelNo,
       customerEmail = :customerEmail,
       customerAddress = :customerAddress,
       customerIncome = :customerIncome
       WHERE customerID = :customerID");

$update = $query->execute(array(
    "customerName" => $_POST['customerName'],
    "customerLastName" => $_POST['customerLastName'],
    "dateofBirth" => $_POST['dateofBirth'],
    "customerCity" => $_POST['customerCity'],
    "customerTelNo" => $_POST['customerTelNo'],
    "customerEmail" => $_POST['customerEmail'],
    "customerAddress" => $_POST['customerAddress'],
    "customerIncome" => $_POST['customerIncome'],
    "customerID" => $_POST['customerID']
));
if($update){
    header('Location:../customer.php?islem=ok');
} else{
    header('Location:../customer.php?islem=no');
}
}
?>