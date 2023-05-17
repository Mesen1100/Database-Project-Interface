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
        // setTimeout(() => {
        //  document.location.reload();
        //}, 5000);

        function toggleForm() {
            var formContainer = document.getElementById('formContainer');
            formContainer.classList.toggle('hidden');
        }
    </script>
</head>

<body>
    <?php include "includes/navbar.php"; ?>
    <?php include "config/alert.php";?>
    <div class="text-center">
        <h1>TRANSACTIONS</h1>
    </div>
    <?php
    date_default_timezone_set('Europe/Istanbul');
    $transactionssor = $db->prepare("select * from transactions");
    $transactionssor->execute();
    $transactionsgetir = $transactionssor->fetchAll(PDO::FETCH_ASSOC);

    $accountsor = $db->prepare("select * from account");
    $accountsor->execute();
    $accountgetir = $accountsor->fetchAll(PDO::FETCH_ASSOC);

    $transactiontypesor = $db->prepare("select * from transactiontype");
    $transactiontypesor->execute();
    $transactiontypegetir = $transactiontypesor->fetchAll(PDO::FETCH_ASSOC);

    ?>

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
                    <th>Description Value</th>
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
                    <td><?php echo $row['descriptionValue']; ?></td>
                    <td><?php echo $row['transactionState']; ?></td>


                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="container d-flex align-items-center justify-content-center">
        <button onclick="toggleForm()"><img src="assets/img/add96.png" alt="Add New Transaction" width="50px">ADD NEW TRANSACTION</button>
    </div>
    <div id="formContainer" class="hidden">
        <form name="addtransaction" action="config/islem.php" method="post" id="addtransaction">
            <input type="hidden" name="dateOfCreate" value="<?php $currentTime = date("d-m-Y H:i:s");
                                                            echo $currentTime; ?>">
            <input type="hidden" name="dateOfDone" value="<?php $currentDateTime = date("Y-m-d H:i:s");
                                                            $futureDateTime = strtotime($currentDateTime) + (10 * 60);
                                                            $futureDateTimeText = date("d-m-Y H:i:s", $futureDateTime);
                                                            echo $futureDateTimeText; ?>">
            <input type="hidden" name="transactionState" value="Complete">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">ADD TRANSACTION</h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-2">
                            <label for="">Sender Account Number
                                <div class="form-group">
                                    <select class="form-control select2" style="width: 100%;" name="senderAccountNumber" required>
                                        <?php foreach ($accountgetir as $options) { ?>
                                            <option value="<?php echo $options['accountNumber'] ?>"><?php echo $options['accountNumber'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </label>
                        </div>
                        <div class="col-2">
                            <label for="">Receive Account Number
                                <div class="form-group">
                                    <select class="form-control select2" style="width: 100%;" name="receiveAccountNumber" required>
                                        <?php foreach ($accountgetir as $options) { ?>
                                            <option value="<?php echo $options['accountNumber'] ?>"><?php echo $options['accountNumber'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </label>
                        </div>
                        <div class="col-2">
                            <label for="">Amount
                                <input type="number" class="form-control" min="1" name="amount" required>
                            </label>
                        </div>
                        <div class="col-2">
                            <label for="">Transaction Type
                                <div class="form-group">
                                    <select class="form-control select2" style="width: 100%;" name="transactionTypeID" required>
                                        <?php foreach ($transactiontypegetir as $options) { ?>
                                            <option value="<?php echo $options['transactionTypeID'] ?>"><?php echo $options['transactionType'] ?></option>
                                        <?php } ?>
                                    </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="">Description Value
                                <input type="text" class="form-control" name="descriptionValue" required>
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <label for="">‏‏‏‏‏‏‏‏
                            <div class="form-group">
                                <button type="submit" style="width: 100px; height: 40px;" class="bg-primary" name="addtransaction">
                                    <h5>SEND</h5>
                                </button>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>