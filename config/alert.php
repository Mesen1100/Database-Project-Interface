<?php if (@$_GET['islem'] == 'ok') {
?>
    <div class="bg-success text-center text-white ">
        <h5></i>TEBRİKLER!</h5>
        İşlem Başarı ile Gerçekleşirildi.
    </div>
<?php } else if (@$_GET['islem'] == 'no') {

?>
    <div class="bg-danger text-center text-white">
        <h5>Dikkat!</h5>
        İşlem Gerçekleştirilirken Hata Oluştu!
    </div>
<?php } ?>