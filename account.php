<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Account</title>
    <link rel="shortcut icon" href="assets/img/account.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>

</head>

<body>
    <?php include "includes/navbar.php"; ?>
    <?php
    $accountsor = $db->prepare("select * from account");
    $accountsor->execute();
    $accountgetir = $accountsor->fetchAll(PDO::FETCH_ASSOC); ?>
    <div class="text-center">
        <h1>ACCOUNT</h1>
    </div>

    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Account Number</th>
                    <th>Account Balance</th>
                    <th>Account Opening Date</th>
                    <th>Account Closing Date</th>
                    <th>Account Type ID</th>
                    <th>Customer ID</th>
                </tr>
            </thead>
            <?php foreach ($accountgetir as $row) {

            ?>
                <tr>
                    <td><?php echo $row['accountNumber']; ?></td>
                    <td><?php echo $row['accountBalance']; ?></td>
                    <td><?php echo $row['accountOpeningDate']; ?></td>
                    <td><?php if ($row['accountClosingDate'] === 'null') {
                            echo "-";
                        } else {
                            echo $row['accountClosingDate'];
                        } ?></td>
                    <td><?php echo $row['accountTypeID']; ?></td>
                    <td><?php echo $row['customerID']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>