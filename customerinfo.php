<!DOCTYPE html>
<html lang="en">
<?php include "includes/navbar.php"; 
$id=$_GET['customerID'];
$customerprepare=$db->query("SELECT * FROM customer WHERE customerID=$id");
$customer=$customerprepare ->fetch(PDO::FETCH_ASSOC);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Customer <?php echo $customer['customerName'] ?></title>
    <link rel="shortcut icon" href="assets/img/customer.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>

</head>

<body>
    <?php
    $value = $_GET['customerID'];
    $sqlaccountids = "SELECT * FROM accountofcustomers WHERE customerID = $value";
    $accountids = $db->query($sqlaccountids);
    $accountnumbers = $accountids->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <h2>ACCOUNT</h2>
            <thead>
                <tr>
                    <th>Account Number</th>
                    <th>Account Balance</th>
                    <th>Account Opening Date</th>
                    <th>Account Closing Date</th>
                    <th>Account Type ID</th>
                </tr>
            </thead>
            <?php 

                foreach ($accountnumbers as $accountnumbers) {
                    $accountnumber = $accountnumbers['accountNumber'];
                    $sqlgetaccount="SELECT * FROM account WHERE accountnumber=$accountnumber";
                    $getaccount=$db -> query($sqlgetaccount);
                    $account= $getaccount->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($account as $account) {
                        
                    
                    ?>
                <tr>
                    <td><?php echo $account['accountNumber']; ?></td>
                    <td><?php echo $account['accountBalance']; ?></td>
                    <td><?php echo $account['accountOpeningDate']; ?></td>
                    <td><?php if ($account['accountClosingDate'] === 'null') {
                            echo "-";
                        } else {
                            echo $account['accountClosingDate'];
                        } ?></td>
                    <td><?php echo $account['accountTypeID']; ?></td>
                </tr>
                
                
            <?php }} ?>
        </table>
            <div class="card-body text-center">
                        <table id="example2" class="table table-bordered table-hover">
                            <h2>TRANSACTIONS</h2>
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Sender Account Number</th>
                                    <th>Receive Account Number</th>
                                    <th>Amount</th>
                                    <th>Date of Create</th>
                                    <th>Date of Done</th>
                                    <th>Transaction Type ID</th>
                                    <th>Description Value</th>
                                    <th>Transaction State</th>

                                </tr>
                            </thead>
                            <?php 
                            $value = $_GET['customerID'];
                            $sqlaccountids1 = "SELECT DISTINCT * FROM accountofcustomers WHERE customerID = $value";
                            $accountids1 = $db->query($sqlaccountids1);
                            $accountnumbers1 = $accountids1->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($accountnumbers1 as $accountnumbers1 ) { 
                                $accountnumber1 = $accountnumbers1['accountNumber'];
                                $sqlgetaccount1="SELECT * FROM transactions WHERE senderAccountNumber=$accountnumber1 or receiveAccountNumber=$accountnumber1";
                                $gettransactions=$db -> query($sqlgetaccount1);
                                $row1= $gettransactions->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($row1 as $row1) {

                            ?>
                                <tr>
                                    <td><?php echo $row1['transactionID']; ?></td>
                                    <td><?php echo $row1['senderAccountNumber']; ?></td>
                                    <td><?php echo $row1['receiveAccountNumber']; ?></td>
                                    <td><?php echo $row1['amount']; ?></td>
                                    <td><?php echo $row1['dateOfCreate']; ?></td>
                                    <td><?php echo $row1['dateOfDone']; ?></td>
                                    <td><?php echo $row1['transactionTypeID']; ?></td>
                                    <td><?php echo $row1['descriptionValue']; ?></td>
                                    <td><?php echo $row1['transactionState']; ?></td>


                                </tr>
                            <?php } }?>
                        </table>
                    </div>
        
    </div>



</body>

</html>