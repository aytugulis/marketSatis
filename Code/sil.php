<?php
 
$silinecekID= $_GET['id'];
 
$baglan=mysqli_connect("localhost","root","","bitirme");
mysqli_set_charset($baglan, "utf8");
 
$sonuc=mysqli_query($baglan,"DELETE from veriler 
where faturaID=".$silinecekID);
 
if($sonuc>0){
echo "Başarıyla silindi,2 sn. sonra yönlendirileceksiniz.";
header( "refresh:2;url=verisilme.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
 
?>
