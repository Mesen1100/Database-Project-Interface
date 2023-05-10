<?php
try{
	$db=new PDO("mysql:host=localhost;dbname=bank_db","root","");
	//echo "Bağlantı Başarılı";
}
catch(Exception $e){
	echo "Bir hata oluştu: ".$e->getMessage();
}

?>