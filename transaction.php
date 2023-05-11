<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Transaction</title>
    <link rel="shortcut icon" href="assets/img/transactions.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>
</head>

<body>
<?php include "includes/navbar.php";?>
    <div class="text-center">
        <h1>TRANSACTIONS</h1>
    </div>
    <?php
    $transactionssor = $db->prepare("select * from transactions");
    $transactionssor->execute();
    $transactionsgetir = $transactionssor->fetchAll(PDO::FETCH_ASSOC); ?>

    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Sender Account Number</th>
                    <th>Receive Account Number</th>
                    <th>Amount</th>
                    <th>Date of Create</th>
                    <th>Date of Done</th>
                    <th>Transaction Type ID</th>
                    <th>Description</th>
                    <th>Transaction State</th>
                    
                </tr>
            </thead>
            <?php foreach ($transactionsgetir as $row) {

            ?>
                <tr>
                    <td><?php echo $row['transactionID']; ?></td>
                    <td><?php echo $row['senderAccountNumber']; ?></td>
                    <td><?php echo $row['receiveAccountNumber']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['dateOfCreate']; ?></td>
                    <td><?php echo $row['dateOfDone']; ?></td>
                    <td><?php echo $row['transactionTypeID']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['transactionState']; ?></td>

                    
                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>