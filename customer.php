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
        /* setTimeout(() => {
            document.location.reload();
        }, 5000);
*/
        var number = 0;

        function showDeleteConfirmation(customerID) {
            var messageElement = document.getElementById('message');
            messageElement.textContent = "Customer ID: " + customerID + " deletion cannot be undone, are you sure?";
            var link = document.getElementById("deletebutton");
            link.href = "config/islem.php?customerDelete=1&customerID=" + customerID;
        }
    </script>
</head>

<body>
    <?php include "includes/navbar.php"; ?>
    <?php include "config/alert.php"; ?>
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
                    <td>
                        <form action="customeredit.php" method="get" target="_blank">
                            <input type="hidden" name="customerID" value="<?php echo $row['customerID'] ?>">
                            <button type="submit">
                                <img src="assets/img/edit32.png" alt="Edit Profile"></button>
                        </form>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" id="delete" onclick="showDeleteConfirmation('<?php echo $row['customerID']; ?>')">
                            <img src="assets/img/delete32.png" alt="Delete Profile">
                        </button>

                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-warning">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="position: relative; top: -15px;">
                    <p id="message">Customer deletion cannot be undone, are you sure?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Dismiss</button>
                    <a href="#" id="deletebutton">
                        <button type="button" class="btn btn-danger">Delete Customer</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>