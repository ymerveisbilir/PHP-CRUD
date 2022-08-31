<?php 
include 'include/baglan.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Kitap Güncelle</title>
    <?php include 'include/css.php'; ?>
    <?php include 'include/script.php'; ?>
</head>
<body>
 <!-- menü -->
<?php include 'include/menu.php';?>

<!-- menü -->
  <?php 
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $kitap= $db->query("SELECT * FROM kitaplar WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
  }
  ?>
 <div class="container mt-5">
  <h4>Kitap Güncelle</h4><br>
 <!--<?php print_r($kitap); ?>-->
  <form action="islem.php" method="post">
  <input type="hidden" name="islem" value="kitap_guncelle">
  <input type="hidden" name="id" value="<?=$kitap['id'];?>">

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Kitap Id</span>
          </div>
        <input type="text" class="form-control mx-4" name="id" value="<?=$kitap['id'];?>"disabled>
        </div>


        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Kitap Adı</span>
          </div>
            <input type="text" class="form-control mx-4" name="kitap_ad"  value="<?=$kitap['kitap_ad'];?>">

        </div>


        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Yazar Adı</span>
          </div>
            <input type="text" class="form-control mx-4" name="kitap_yazar" value="<?=$kitap['kitap_yazar'];?>">
        </div>
       

        <div class="input-group mb-3">
          <?php $kitap_turleri = $db->query("SELECT * FROM kitapturleri")->fetchAll(PDO::FETCH_ASSOC); ?>

            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Kitap Türü</span>
            </div>


            <div class="col-9 ">
            <select class="form-control mx-3" name="tur_id">
               <?php 
               foreach ($kitap_turleri as $kitap_turu) { ?>
                  <option value="<?=$kitap_turu['id'];?>" <?php echo($kitap['tur_id']==$kitap_turu['id']) ? 'selected' : '';?>>

                    <?=$kitap_turu['baslik'];?>


                 </option>
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
            <input type="checkbox" class="form-check-input p-2 mx-3 mt-1"  name="kitap_durum"  <?php echo($kitap['kitap_durum'] == 1) ? 'checked' : ''; ?> >
            <label class="form-check-label " for="check1">Stokta Var Mı?</label>
        </div>
           </div>


         <div class="input-group mb-3">
        <button class="btn btn-success">Güncelle</button>
        </div>
  </form>
 </div>
</body>
</html>