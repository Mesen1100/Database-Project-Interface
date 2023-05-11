<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Loan Type</title>
    <link rel="shortcut icon" href="assets/img/loantype.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>
</head>

<body>
<?php include "includes/navbar.php";?>
    <div class="text-center">
        <h1>LOAN TYPE</h1>
    </div>
    <?php
    $loantypesor = $db->prepare("select * from loantype");
    $loantypesor->execute();
    $loantypegetir = $loantypesor->fetchAll(PDO::FETCH_ASSOC); ?>

    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Loan Type ID</th>
                    <th>Loan Type</th>
                    
                </tr>
            </thead>
            <?php foreach ($loantypegetir as $row) {

            ?>
                <tr>
                    <td><?php echo $row['loanTypeID']; ?></td>
                    <td><?php echo $row['loanType']; ?></td>
                    
                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>