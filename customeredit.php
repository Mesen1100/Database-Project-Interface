<?php include "includes/navbar.php"; 
$id=$_GET['customerID'];
$customerprepare=$db->query("SELECT * FROM customer WHERE customerID=$id");
$customer=$customerprepare ->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Customer <?php echo $customer['customerName'] ?></title>
    <link rel="shortcut icon" href="assets/img/customer.png" type="image/x-icon">
    <script>
        
    </script>
</head>
<body>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Customer Information</h3>
                <p>Customer ID, Customer Credit Limit, Customer Number of Accounts and Branch ID can only be changed at the your branch.</p>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="config/islem.php" method="post" name="customeredit" id="customeredit">
                <div class="card-body">
                    <input type="hidden" name="customerID" value="<?php echo $customer['customerID'] ?>">
                  <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="customerName" value="<?php echo $customer['customerName']?>">
                  </div>
                  <div class="form-group">
                    <label>Customer Last Name</label>
                    <input type="text" class="form-control" name="customerLastName" value="<?php echo $customer['customerLastName']?>">
                  </div>
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="text" class="form-control" name="dateofBirth" value="<?php echo $customer['dateofBirth']?>">
                  </div>
                  <div class="form-group">
                    <label>Customer City</label>
                    <input type="text" class="form-control" name="customerCity" value="<?php echo $customer['customerCity']?>">
                  </div>
                  <div class="form-group">
                    <label>Customer Tel No</label>
                    <input type="text" class="form-control" name="customerTelNo" value="<?php echo $customer['customerTelNo']?>">
                  </div>
                  <div class="form-group">
                    <label>Customer Email</label>
                    <input type="text" class="form-control" name="customerEmail" value="<?php echo $customer['customerEmail']?>">
                  </div>
                  <div class="form-group">
                    <label>Customer Address</label>
                    <input type="text" class="form-control" name="customerAddress" value="<?php echo $customer['customerAddress']?>">
                  </div>
                  <div class="form-group">
                    <label>Customer Income</label>
                    <input type="number" class="form-control" name="customerIncome" value="<?php echo $customer['customerIncome']?>">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="customeredit" id="customeredit" >Submit</button>
                  <button type="reset" class="btn btn-danger"> Reset</button>
                </div>
              </form>
            </div>
</body>
</html>