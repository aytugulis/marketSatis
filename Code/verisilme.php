<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reklam Verimliliği</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="verisilme.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  
  </head>
<body>
<nav>
     <div class="logo">
Veritabanı</div>

     
      <ul>
<li><a href="index.php">Anasayfa</a></li>
<li>
          
          <a href="#">Veritabanı</a>
          
          <ul>
<li><a href="verisilme.php">Veri Silme</a></li>
<li><a href="veriekleme.php">Veri Ekleme</a></li>
</ul>
</li>
<li>       
          <a href="cinsiyettoplam">Cinsiyet Oranı</a>
         
          <ul>
<li><a href="cinsiyetmusteritipi">Müşteri Tipi</a></li>
<li><a href="cinsiyeturuntipi">Ürün Tipi</a></li>
<li><a href="cinsiyetodemetipi">Ödeme Tipi</a></li>
<li><a href="cinsiyetsehir">Şehirler</a></li>
</ul>
</li>

<li>       
          <a href="uyetoplam">Üye Oranı</a>
         
          <ul>
<li><a href="uyecinsiyet">Cinsiyet</a></li>
<li><a href="uyeuruntipi">Ürün Tipi</a></li>
<li><a href="uyeodemetipi">Ödeme Tipi</a></li>
<li><a href="uyesehir">Şehirler</a></li>
</ul>
</li>

<li>       
          <a href="degerlendirmetoplam">Değerlendirme</a>
         
          <ul>
<li><a href="degerlendirmecinsiyet">Cinsiyet</a></li>
<li><a href="degerlendirmemusteritipi">Müşteri Tipi</a></li>
<li><a href="degerlendirmeuruntipi">Ürün Tipi</a></li>
<li><a href="degerlendirmeodemetipi">Ödeme Tipi</a></li>
</ul>
</li>

<li>       
          <a href="gelirtoplam">Aylık Ortalama Gelir</a>
         
          <ul>
<li><a href="gelircinsiyet">Cinsiyet</a></li>
<li><a href="gelirmusteritipi">Müşteri Tipi</a></li>
<li><a href="geliruruntipi">Ürün Tipi</a></li>
<li><a href="gelirodemetipi">Ödeme Tipi</a></li>
<li><a href="gelirsehir">Şehirler</a></li>
</ul>
</li>


</ul>
</nav>
<script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>
	

<div class=content12>
<table border="1" align="center" width="500">
<tr>
  <th>Fatura ID</th> 
  <th>Şehir</th> 
  <th>Müşteri Tipi</th> 
  <th>Cinsiyet</th>
  <th>Ürün Çeşidi</th>
  <th>Ürün Fiyatı</th>
  <th>Ürün Miktarı</th>
  <th>Toplam Gelir</th>
  <th>Tarih</th>
  <th>Ödeme Tipi</th>
  <th>Değerlendirme</th>
  
  <th>Silme</th>
 </tr>
<?php
$baglan=mysqli_connect("localhost","root","","bitirme");
mysqli_set_charset($baglan, "utf8");
$sonuc=mysqli_query($baglan,"select * from veriler order by faturaID desc"); 
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['faturaID'].'</td>';
echo '<td>'.$satir['sehir'].'</td>';
echo '<td>'.$satir['musteriTipi'].'</td>';
echo '<td>'.$satir['cinsiyet'].'</td>';
echo '<td>'.$satir['urunCesidi'].'</td>';
echo '<td>'.$satir['urunFiyati'].'</td>';
echo '<td>'.$satir['urunMiktar'].'</td>';
echo '<td>'.$satir['vergisizGelir'].'</td>';
echo '<td>'.$satir['tarih'].'</td>';
echo '<td>'.$satir['odemeTipi'].'</td>';
echo '<td>'.$satir['degerlendirme'].'</td>';
echo '<td> <a href="sil.php?id='.$satir['faturaID'].'" onclick="return uyari();"><input align="center" class="kutu2" type="submit" value="Sil"></a> </td>';
echo '</tr>';
}
?>
</table>
</div>
	

  </body>
</html>

<script language="JavaScript">
function uyari() {
 
if (confirm("Bu kaydı silmek istediğinize emin misiniz?"))
   return true;
else 
   return false;
}
</script>

