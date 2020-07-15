<?php
 $d1 = $_POST['1'];
 $d2 = $_POST['2'];
 $d3 = $_POST['3'];
 $d4 = $_POST['4'];
 $d5 = $_POST['x'];
 $d6= $_POST['y'];
 $d7 = $_POST['7'];
 $d9 = $_POST['9'];
 $d10 = $_POST['yy'];
 $d11 = $_POST['11'];
 
$baglan=mysqli_connect("localhost","root","","bitirme"); 
mysqli_set_charset($baglan, "utf8");
 
$sql="select faturaID from veriler WHERE faturaID='asd'";
 
$sonuc1= mysqli_query($baglan,$sql);
$satirsay=mysqli_num_rows($sonuc1);
 
if ($satirsay>0)
{
echo "Fatura id daha önce kaydedilmiş";
 
} else{
$sqlekle="INSERT INTO veriler( sehir, musteriTipi, cinsiyet, urunCesidi, urunFiyati, urunMiktar, tarih, odemeTipi, vergisizGelir, degerlendirme) 
VALUES ('$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d9','$d10','$d11')";
 
$sonuc=mysqli_query($baglan,$sqlekle);
 
if ($sonuc==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "Başarıyla eklendi,2 saniye sonra yönlendirileceksiniz.";
header( "refresh:2;url=veriekleme.php" ); 
};
 
?>
