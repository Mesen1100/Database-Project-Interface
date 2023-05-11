<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Staff</title>
    <link rel="shortcut icon" href="assets/img/staff.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>
</head>

<body>
<?php include "includes/navbar.php";?>
    <div class="text-center">
        <h1>STAFF</h1>
    </div>
    <?php
    $staffsor = $db->prepare("select * from staff");
    $staffsor->execute();
    $staffgetir = $staffsor->fetchAll(PDO::FETCH_ASSOC); ?>

    <div class="card-body text-center">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Staff ID</th>
                    <th>Staff Name</th>
                    <th>Staff Last Name</th>
                    <th>Staff Salary</th>
                    <th>Staff Tel No</th>
                    <th>Staff Email</th>
                    <th>Staff Date of Birth</th>
                    <th>Staff Schdule</th>
                    <th>Staff Start of Work Date</th>
                    <th>Staff Job Title</th>
                    <th>Branch ID</th>
                </tr>
            </thead>
            <?php foreach ($staffgetir as $row) {

            ?>
                <tr>
                    <td><?php echo $row['staffID']; ?></td>
                    <td><?php echo $row['staffName']; ?></td>
                    <td><?php echo $row['staffLastName']; ?></td>
                    <td><?php echo $row['staffSalary']; ?></td>
                    <td><?php echo $row['staffTelNo']; ?></td>
                    <td><?php echo $row['staffEmail']; ?></td>
                    <td><?php echo $row['staffDob']; ?></td>
                    <td><?php echo $row['staffSchdule']; ?></td>
                    <td><?php echo $row['staffStartofWorkDate']; ?></td>
                    <td><?php echo $row['staffJobTitle']; ?></td>
                    <td><?php echo $row['branchID']; ?></td>

                    
                </tr>
            <?php } ?>
        </table>
    </div>


    </div>
</body>

</html>