<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Branch</title>
    <link rel="shortcut icon" href="assets/img/branch.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>
</head>

<body>
<?php include "includes/navbar.php";?>
    <div class="text-center">
        <h1>BRANCH</h1>
    </div>
    <?php
    $branchsor = $db->prepare("select * from branch");
    $branchsor->execute();
    $branchgetir = $branchsor->fetchAll(PDO::FETCH_ASSOC); ?>

    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Branch ID</th>
                    <th>Branch Name</th>
                    <th>Branch Address</th>
                    <th>Branch Schedule</th>
                    <th>Branch Tel Number</th>
                    <th>Branch Number of Employees</th>
                    <th>Branch Number of ATMs</th>
                    <th>Branch Manager ID</th>
                    
                </tr>
            </thead>
            <?php foreach ($branchgetir as $row) {

            ?>
                <tr>
                    <td><?php echo $row['branchID']; ?></td>
                    <td><?php echo $row['branchName']; ?></td>
                    <td><?php echo $row['branchAddress']; ?></td>
                    <td><?php echo $row['branchSchedule']; ?></td>
                    <td><?php echo $row['branchTelNumber']; ?></td>
                    <td><?php echo $row['branchNumberofEmployees']; ?></td>
                    <td><?php echo $row['branchNumberofATMs']; ?></td>
                    <td><?php echo $row['branchManagerID']; ?></td>

                    
                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>