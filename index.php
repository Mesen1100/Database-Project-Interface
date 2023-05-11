
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bank Database Interface</title>
    <link rel="shortcut icon" href="assets/img/database.png" type="image/x-icon">
    <script>
        setTimeout(() => {
            document.location.reload();
        }, 5000);
    </script>
</head>

<body>
    <?php include "includes/navbar.php";?>
    <div class="row text-center">
        <div class="col-md-4">
            <a href="account.php" target="_blank">
                <img src="assets/img/account.png" alt="Account">
                <h1>ACCOUNT</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="accounttype.php" target="_blank">
                <img src="assets/img/accounttype.png" alt="Account Type">
                <h1>ACCOUNT TYPE</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="branch.php" target="_blank">
                <img src="assets/img/branch.png" alt="Branch">
                <h1>BRANCH</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="customer.php" target="_blank">
                <img src="assets/img/customer.png" alt="Customer">
                <h1>CUSTOMER</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="loan.php" target="_blank">
                <img src="assets/img/loan.png" alt="Loan">
                <h1>LOAN</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="loantype.php" target="_blank">
                <img src="assets/img/loantype.png" alt="Loan Type">
                <h1>LOANTYPE</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="staff.php" target="_blank">
                <img src="assets/img/staff.png" alt="Staff">
                <h1>STAFF</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="transaction.php" target="_blank">
                <img src="assets/img/transactions.png" alt="Transaction Type">
                <h1>TRANSACTIONS</h1>
            </a>
        </div>
        <div class="col-md-4">
            <a href="transactiontype.php" target="_blank">
                <img src="assets/img/transactionstype.png" alt="Transaction Type">
                <h1>TRANSACTION TYPE</h1>
            </a>
        </div>



    </div>

</body>

</html>