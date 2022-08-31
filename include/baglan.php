<?php

 try{
 	$db = new PDO("mysql:host =localhost; dbname=kütüphane;",'root','');
 	//echo"baglanti basarılı<br>";  //bağlandığımızı görebilmek için yazdım.
 }
 catch (Exception $error)
 {
 	echo "HATA";
 	echo $error -> getMessage();
 }

?>