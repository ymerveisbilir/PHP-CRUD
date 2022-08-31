<?php
include 'include/baglan.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kitaplar</title>
    <?php include 'include/css.php'; ?>
    <?php include 'include/script.php'; ?>
</head>
<body>
    <!-- menü -->
<?php include 'include/menu.php';?>

<!-- menü -->
	<div class="container mt-5" >
		<h1>Kitaplar</h1><br>
   <?php 
   //query içinde kitaptürleri ve kitaplar tablomuzu birleştirdim.
   $kitaplar = $db->query(
     ' SELECT  kitaplar.id , kitaplar.kitap_ad , kitaplar.kitap_yazar , kitaplar.tur_id , kitapturleri.baslik , kitaplar.kitap_durum FROM kitaplar
      INNER JOIN kitapturleri 
      ON kitaplar.tur_id = kitapturleri.id')->fetchAll(PDO :: FETCH_ASSOC);
   //print_r($kitaplar); 
  ?>

   <table class="table table bordered  table-hover">
   	 <tr>
        <th>Kitap Id</th>	 	
        <th>Kitap Adı</th>
        <th>Yazar Adı</th>
        <th>Tür ID</th>
        <th>Kitap Türü</th>
        <th>Durum</th>
        <th>Sil</th>
        <th>Güncelle</th>
   	 </tr>
   	 <?php
   	 foreach ($kitaplar as $key => $kitap) { ?>
     <tr>
        <td><?=$kitap['id']; ?></td>
        <td><?=$kitap['kitap_ad']; ?></td>
        <td><?=$kitap['kitap_yazar']; ?></td>
        <td><?=$kitap['tur_id']; ?></td>
        <td><?=$kitap['baslik']; ?></td>
        <td><?=$kitap['kitap_durum']; ?></td>
        <td><a onClick="sil(<?=$kitap['id'];?>)" class="btn btn-danger">Sil</a></td>   <!-- "sil.php?id=<?=$kitap['id'];?>" -->
        <td><a href="güncelle.php?id=<?=$kitap['id']; ?>" class="btn btn-primary">Güncelle</a></td>
    
     </tr>

     <?php }
   ?>
   </table>


	</div>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
  

  function sil (id)	{
  //alert(id);  //id doğru alabiliyor muyum? Kontrol ettim.
  Swal.fire({
  title: 'Kaydı Silmek İstediğinize Emin Misiniz?',
  text: "Bu işlem geri alınamaz !",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eminim',
  cancelButtonColor: 'Emin Değilim',
  }).then((result) => {

  if (result.isConfirmed) {
  window.location.href='islem.php?islem=kitap_sil&id='+id;
  }
  })
  } 

</script>
</body>
</html>


























