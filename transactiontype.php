<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Transaction Type</title>
    <link rel="shortcut icon" href="assets/img/transactionstype.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>
</head>

<body>
<?php include "includes/navbar.php";?>
    <div class="text-center">
        <h1>TRANSACTIONS TYPE</h1>
    </div>
    <?php
    $transactiontypesor = $db->prepare("select * from transactiontype");
    $transactiontypesor->execute();
    $transactiontypegetir = $transactiontypesor->fetchAll(PDO::FETCH_ASSOC); ?>

    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Transaction Type ID</th>
                    <th>Transaction Type</th>
                    
                </tr>
            </thead>
            <?php foreach ($transactiontypegetir as $row) {

            ?>
                <tr>
                    <td><?php echo $row['transactionTypeID']; ?></td>
                    <td><?php echo $row['transactionType']; ?></td>
                    
                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>