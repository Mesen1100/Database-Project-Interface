<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Customer</title>
    <link rel="shortcut icon" href="assets/img/customer.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>
</head>

<body>
<?php include "includes/navbar.php";?>
    <div class="text-center">
        <h1>CUSTOMER</h1>
    </div>
    <?php
    $customersor = $db->prepare("select * from customer");
    $customersor->execute();
    $customergetir = $customersor->fetchAll(PDO::FETCH_ASSOC); ?>

    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Customer Last Name</th>
                    <th>Date of Birth</th>
                    <th>Customer City</th>
                    <th>Customer Tel No</th>
                    <th>Customer Email</th>
                    <th>Customer Address</th>
                    <th>Branch ID</th>
                    
                </tr>
            </thead>
            <?php foreach ($customergetir as $row) {

            ?>
                <tr>
                    <td><?php echo $row['customerID']; ?></td>
                    <td><?php echo $row['customerName']; ?></td>
                    <td><?php echo $row['customerLastName']; ?></td>
                    <td><?php echo $row['dateofBirth']; ?></td>
                    <td><?php echo $row['customerCity']; ?></td>
                    <td><?php echo $row['customerTelNo']; ?></td>
                    <td><?php echo $row['customerEmail']; ?></td>
                    <td><?php echo $row['customerAddress']; ?></td>
                    <td><?php echo $row['branchID']; ?></td>

                    
                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>