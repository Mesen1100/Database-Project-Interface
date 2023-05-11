<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Loan</title>
    <link rel="shortcut icon" href="assets/img/loan.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>
</head>

<body>
    <?php include "includes/navbar.php"; ?>
    <div class="text-center">
        <h1>LOAN</h1>
    </div>
    <?php
    $loansor = $db->prepare("select * from loan");
    $loansor->execute();
    $loangetir = $loansor->fetchAll(PDO::FETCH_ASSOC); ?>

    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Loan ID</th>
                    <th>Loan Type ID</th>
                    <th>Loan Interest</th>
                    <th>Loan Amount</th>
                    <th>Date of Create</th>
                    <th>Date of Delete</th>
                    <th>Date of Issued</th>
                    <th>Collateral</th>
                    <th>Dept Income Ratio</th>
                    <th>Loan Term</th>
                    <th>Account Number</th>
                </tr>
            </thead>
            <?php foreach ($loangetir as $row) {

            ?>
                <tr>
                    <td><?php echo $row['loanID']; ?></td>
                    <td><?php echo $row['loanTypeID']; ?></td>
                    <td><?php echo $row['loanInterest']; ?></td>
                    <td><?php echo $row['loanAmount']; ?></td>
                    <td><?php echo $row['dateofCreate']; ?></td>
                    <td><?php echo $row['dateOfDelete']; ?></td>
                    <td><?php echo $row['dateOfIssued']; ?></td>
                    <td><?php echo $row['collateral']; ?></td>
                    <td><?php echo $row['deptIncomeRatio']; ?></td>
                    <td><?php echo $row['loanTerm']; ?></td>
                    <td><?php echo $row['accountNumber']; ?></td>


                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>