<?php 
include 'include/baglan.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kitap Türü Ekle</title>
    <?php include 'include/css.php'; ?>
    <?php include 'include/script.php'; ?>
</head>
<body>
    <!-- menü -->
<?php include 'include/menu.php';?>

<!-- menü -->
 <div class="container mt-5">

<h1> Yeni Kitap Türü Ekle</h1><br>
 	<form action="islem.php" method="post">
    <input type="hidden" name="islem" value="tur_ekle">
 		<div class="input-group mb-3">
 			<div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">Başlık</span>
            </div>
            <input type="text" class="form-control mx-3" name="baslik" required>
        </div>


        <div class="input-group mb-3">
 			<div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Açıklama</span>
            </div>
          <textarea class="form-control mx-3" name="aciklama" required></textarea>
        </div>


         <div class="input-group mb-3">
 		<button class="btn btn-success">Yeni Kitap Türü Ekle</button>
        </div>
 	</form>
 </div>


</body>
</html>