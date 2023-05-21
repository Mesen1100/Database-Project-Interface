<?php if (@$_GET['islem'] == 'ok') {
?>
    <div class="bg-success text-center text-white ">
        <h5></i>CONGRATULATIONS!</h5>
        Process completes succesfully.
    </div>
<?php } else if (@$_GET['islem'] == 'no') {

?>
    <div class="bg-danger text-center text-white">
        <h5>ATTENTION!</h5>
        Error Occured!
    </div>
<?php } ?>