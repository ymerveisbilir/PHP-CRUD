<?php
include 'include/baglan.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title></title>
</head>
<body>
	<?php
     
     if (isset($_POST['islem']))
     {
     	switch ($_POST['islem']) {
     		//Kitap Türü Ekleme
     		case 'tur_ekle':
     			        $baslik  =$_POST['baslik'];
                            $aciklama=$_POST['aciklama'];
                            $sorgu = $db->prepare("INSERT INTO kitapturleri (baslik,aciklama) VALUES (?,?)");
        

                            try 
                            {
                             $sorgu->execute(array($baslik,$aciklama));
                            ?>

                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script type="text/javascript">

                            Swal.fire({
                            icon: 'success',
                            title: 'Kitap Türü Eklendi',
                            showConfirmButton: false,
                            timer: 900
                            }); 
                            </script>

                            <?php } 
                           catch (Exception $error) 
                           {  ?>
        	               <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        	               <script type="text/javascript">

                           Swal.fire({
                           icon: 'error',
                           title: 'Kitap Türü Eklenemedi',
                           showConfirmButton: false,
                           timer: 900
                           }); 
                           </script>
                         <?php 
                     }
                     header("Refresh:1, url=kitapturleri.php");
                     break;
                     

            //Yeni Kitap Kaydı Ekleme
            case 'kitap_ekle':
                          $kitap_ad=$_POST['kitap_ad'];
                          $kitap_yazar=$_POST['kitap_yazar'];
                          $tur=$_POST['tur'];
                          $kitap_durum=(isset(($_POST['kitap_durum'])))? 1 : 0 ;  //ternary if checkbox'ın ile içi dolu ise 1 boşsa sıfır gelmesini sağladım.
     

            $sorgu = $db->prepare("INSERT INTO kitaplar (kitap_ad,kitap_yazar,tur_id,kitap_durum) VALUES (?,?,?,?)");
            $ekle=$sorgu->execute(array($kitap_ad,$kitap_yazar,$tur,$kitap_durum));

          
            if($ekle){ ?>
          
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/javascript">

            Swal.fire({
            icon: 'success',
            title: 'Kitap Eklendi',
            showConfirmButton: false,
            timer: 900
            }); 
            </script>

       
            <?php }

            else {?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/javascript">

            Swal.fire({
            icon: 'error',
            title: 'Kitap Eklenemedi',
            showConfirmButton: false,
            timer: 900
            }); 
            </script>
           <?php 
           }
            header("Refresh:1,url=Kitaplar.php");
           
     		break;


            //Kitap Güncelleme
     		case 'kitap_guncelle':
     		$id=$_POST['id'];
               $kitap_ad=$_POST['kitap_ad'];
               $kitap_yazar=$_POST['kitap_yazar'];
               $tur_id=$_POST['tur_id'];
               $kitap_durum=(isset($_POST['kitap_durum'])) ? 1 : 0;
  

               $sorgu=$db->prepare("UPDATE kitaplar SET kitap_ad= ? , kitap_yazar=? ,tur_id=?, kitap_durum=?  WHERE id=$id");
               $sorgu->execute(array($kitap_ad,$kitap_yazar,$tur_id,$kitap_durum));

          
          ?>
           <script type="text/javascript">
           	<?php if($sorgu) { ?>
             
               Swal.fire({
               icon: 'success',
               title: 'Güncelleme Başarılı',
               showConfirmButton: false,
               timer: 900
                }); 
           <?php } 

           else { ?> 
              <script type="text/javascript">
               Swal.fire({
               icon: 'error',
               title: 'Güncelleme Başarısız',
               showConfirmButton: false,
               timer: 900
                }); 
             </script>
             </script>

             <?php } 
             header("Refresh:1,url=Kitaplar.php");
     		 break;


     		case 'kitap_sil':


     		break;
     		
     		        default:
     			// code...
     			 break;
     	}
     }

     if(isset($_GET['islem']) && isset($_GET['id']))
     {
     	$id=$_GET['id'];
     	switch ($_GET['islem']) {
     		//Kitap Silme 
     		case 'kitap_sil':
     			          $sorgu=$db->prepare("DELETE FROM kitaplar WHERE id=?");
	                         $sil = $sorgu->execute(array($id));
	                         if($sil) { ?>
                             <script type="text/javascript">
                             Swal.fire({
                             icon: 'success',
                             title: 'Kitap Silindi',
                             showConfirmButton: false,
                             timer: 900
                             }); 
                            <?php } 

                             else { ?> 
                             <script type="text/javascript">
                             Swal.fire({
                             icon: 'error',
                             title: 'Kitap Silinemedi',
                             showConfirmButton: false,
                             timer: 900
                             }); 
                             </script>
                             </script>

             <?php } 
             header("Refresh:1,url=Kitaplar.php");
     			break;
     		
     		default:
     			// code...
     			break;


              
     	}
     }


	?> 

</body>
</html>