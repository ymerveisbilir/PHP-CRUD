<?php
include 'include/baglan.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
include 'baglan.php';
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sorgu=$db->prepare("DELETE FROM kitaplar WHERE id=?");
	$sorgu->execute(array($id));
}
header("Refresh:1,url=Anasayfa.php");

?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

Swal.fire({
  icon: 'success',
  title: 'İşlem Tamamlandı.',
  showConfirmButton: false,
  timer: 900
}) 
</script>


</body>
</html>

