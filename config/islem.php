<?php
include "connectdb.php";
if ($_GET['customerDelete'] == 1) {
    $sql="DELETE FROM customer WHERE customerID =:customerID";
    $query=$db->prepare($sql);
    $delete=$query->execute(array("customerID"=>$_GET['customerID']));
    if(!$delete){
        header("Location:../customer.php?islem=ok");
    }
    else{
        header("Location:../customer.php?islem=no");
    }
}
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
    if ($update) {
        header('Location:../customer.php?islem=ok');
    } else {
        header('Location:../customer.php?islem=no');
    }
}


if (isset($_POST['addtransaction'])) {
    if ($_POST['senderAccountNumber'] != $_POST['receiveAccountNumber']) {
        $sql = "SELECT MAX(transactionID) as max_id FROM transactions";
        $result = $db->prepare($sql);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        print_r($row);
        $last_id = $row['max_id'];
        $last_id++;
        echo $last_id;

        $query = $db->prepare("INSERT INTO transactions SET
        transactionID=:transactionID,
        senderAccountNumber = :senderAccountNumber,
        receiveAccountNumber = :receiveAccountNumber,
        amount = :amount,
        dateOfCreate=:dateOfCreate,
        dateOfDone=:dateOfDone,
        transactionTypeID=:transactionTypeID,
        descriptionValue=:descriptionValue,
        transactionState=:transactionState");

        $insert = $query->execute(array(
            "transactionID" => $last_id,
            "senderAccountNumber" => $_POST['senderAccountNumber'],
            "receiveAccountNumber" => $_POST['receiveAccountNumber'],
            "amount" => $_POST['amount'],
            "dateOfCreate" => $_POST['dateOfCreate'],
            "dateOfDone" => $_POST['dateOfDone'],
            "transactionTypeID" => $_POST['transactionTypeID'],
            "descriptionValue" => $_POST['descriptionValue'],
            "transactionState" => $_POST['transactionState'],
        ));

        header('Location:../transaction.php?islem=ok');
    } else {
        header('Location:../transaction.php?islem=no');
    }
}
