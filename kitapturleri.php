<?php
include 'include/baglan.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kitap Türleri</title>
	 <?php include 'include/css.php'; ?>
    <?php include 'include/script.php'; ?>
</head>
<body>
   <!-- menü -->
<?php include 'include/menu.php';?>

<!-- menü -->
	<div class="container mt-5" >
		<h1>Kitap Türleri</h1><br>
   <?php 

   $kitap_turleri = $db->query(' SELECT * FROM kitapturleri')->fetchAll(PDO :: FETCH_ASSOC);

   ?>

   <table class="table table bordered  table-hover">
   	 <tr>
        <th>ID</th>
        <th>Başlık</th>
        <th>Açılama</th>
        <th>Durum</th>
    
   	 </tr>
   	 <?php
   	 foreach ($kitap_turleri as $kitap_turu) { ?>
     <tr>
        <td><?=$kitap_turu['id']; ?></td>
        <td><?=$kitap_turu['baslik']; ?></td>
         <td><?=$kitap_turu['aciklama']; ?></td>
        <td><?=$kitap_turu['durum']; ?></td>
        
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
  window.location.href='sil.php?id='+id;
  }
  })
  } 
</script>
</body>
</html>