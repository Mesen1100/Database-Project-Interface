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
    <?php include "includes/navbar.php"; ?>
    <?php include "config/alert.php";?>
    <div class="text-center">
        <h1>CUSTOMER</h1>
    </div>
    <?php
    $customersor = $db->prepare("SELECT c.*, COUNT(a.customerID) AS numberofAccounts FROM customer c LEFT JOIN accountofcustomers a ON c.customerID = a.customerID GROUP BY c.customerID;");
    $customersor->execute();
    $customergetir = $customersor->fetchAll(PDO::FETCH_ASSOC);

    ?>

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
                    <th>Customer Income</th>
                    <th>Customer Credit Limit</th>
                    <th>Customer Number of Accounts</th>
                    <th>Branch ID</th>
                    <th>Edit Customer</th>
                    <th>Delete Customer</th>

                </tr>
            </thead>
            <?php foreach ($customergetir as $row) {
            ?>
                <tr>
                    <td>
                        <form action="customerinfo.php" method="get" target="_blank">
                            <input type="hidden" name="customerID" value="<?php echo $row['customerID'] ?>">
                            <button type="submit"><?php echo $row['customerID']; ?></button>
                        </form>
                    </td>
                    <td><?php echo $row['customerName']; ?></td>
                    <td><?php echo $row['customerLastName']; ?></td>
                    <td><?php echo $row['dateofBirth']; ?></td>
                    <td><?php echo $row['customerCity']; ?></td>
                    <td><?php echo $row['customerTelNo']; ?></td>
                    <td><?php echo $row['customerEmail']; ?></td>
                    <td><?php echo $row['customerAddress']; ?></td>
                    <td><?php echo $row['customerIncome']; ?></td>
                    <td><?php echo $row['customerCreditLimit']; ?></td>
                    <td><?php echo $row['numberofAccounts']; ?></td>
                    <td><?php echo $row['branchID']; ?></td>
                    <td><form action="customeredit.php" method="get" target="_blank">
                        <input type="hidden" name="customerID" value="<?php echo $row['customerID'] ?>">
                        <button type="submit">    
                    <img src="assets/img/edit32.png" alt="Edit Profile"></button></form></td>
                    <td><button><img src="assets/img/delete32.png" alt="Delete Profile"></button></td>
                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>