<?php 
include 'include/baglan.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kitap Ekle</title>
    <?php include 'include/css.php'; ?>
    <?php include 'include/script.php'; ?>
	
</head>
<body>
    <!-- menü -->
<?php include 'include/menu.php';?>

<!-- menü -->
 <div class="container mt-5">

 	<form action="islem.php" method="post">
        <input type="hidden" name="islem" value="kitap_ekle">
            <h1>Yeni Kitap Ekle</h1><br>
 		    <div class="input-group mb-3">
 			<div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Kitap Adı</span>
            </div>
            <input type="text" class="form-control mx-4" name="kitap_ad" required>
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">Yazar Adı</span>
            </div>
            <input type="text" class="form-control mx-4" name="kitap_yazar" required>
        </div>
       

        <?php $kitapTurleri = $db->query("SELECT * FROM kitapturleri")->fetchAll(PDO::FETCH_ASSOC); ?>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">Kitap Türü</span>
            </div>


            <div class="col-9 ">
            <select class="form-control mx-3" name="tur">
                <option value="0" >Kitap Türü Seçiniz</option> 
               <?php 

               foreach ($kitapTurleri as $turler) { ?>

                  <option value="<?=$turler['id']; ?>"><?=$turler['baslik']; ?></option>
               <?php }
                ?>
            </select>
            </div>
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">Durum</span>
            </div>
            <div class="form-check">
            <input type="checkbox" class="form-check-input p-2 mx-3"  name="kitap_durum">
            <label class="form-check-label " for="check1">Stokta Var Mı?</label>
        </div>
           </div>


        <div class="input-group mb-3">
 		<button class="btn btn-success">Yeni Kitap Ekle</button>
        </div>
 	    </form>
        </div>


</body>
</html>