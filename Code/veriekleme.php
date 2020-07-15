<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reklam Verimliliği</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="veriekleme.css">
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
<form method="POST" action="ekle.php" oninput="(yy.value)=parseFloat(x.value)*parseInt(y.value)">
<table border="1" align="center">
<tr>
<h1 colspan="2" align="center"> Kayıt Ekleme</h1>
 
</tr>

<tr>
<th>Şehir</th>
<td>
<input checked="checked" type="radio" id="Yangon" name="1" value="Yangon">
<label for="Yangon">Yangon</label><br>
<input type="radio" id="Mandalay" name="1" value="Mandalay">
<label for="Mandalay">Mandalay</label><br>
<input type="radio" id="Naypyitaw" name="1" value="Naypyitaw">
<label for="Naypyitaw">Naypyitaw</label>
</td>
</tr>

<tr>
<th>Müşteri Tipi</th>
<td>
<input checked="checked" type="radio" id="Uye" name="2" value="Uye">
<label for="Uye">Uye</label><br>
<input type="radio" id="Uye degil" name="2" value="Uye degil">
<label for="Uye degil">Uye degil</label><br>
</td>
</tr>

<tr>
<th>Cinsiyet</th>
<td>
<input checked="checked" type="radio" id="Erkek" name="3" value="Erkek">
<label for="Erkek">Erkek</label><br>
<input type="radio" id="Kadin" name="3" value="Kadin">
<label for="Kadin">Kadin</label><br>
</td>
</tr>

<tr>
<th>Ürün Çeşidi</th>
<td>
<input checked="checked" type="radio" id="Elektronik" name="4" value="Elektronik">
<label for="Elektronik">Elektronik</label><br>
<input type="radio" id="Ev esyasi" name="4" value="Ev esyasi">
<label for="Ev esyasi">Ev esyasi</label><br>
<input type="radio" id="Saglik ve bakim" name="4" value="Saglik ve bakim">
<label for="Saglik ve bakim">Saglik ve bakim</label><br>
<input type="radio" id="Yiyecek ve icecek" name="4" value="Yiyecek ve icecek">
<label for="Yiyecek ve icecek">Yiyecek ve icecek</label><br>
<input type="radio" id="Moda" name="4" value="Moda">
<label for="Moda">Moda</label><br>
<input type="radio" id="Spor ve seyehat" name="4" value="Spor ve seyehat">
<label for="Spor ve seyehat">Spor ve seyehat</label><br>
</td>
</tr>


<tr>
<th>Fiyat</th>
<td>
<input min="0.1" class="kutu" type="number" step="0.1" id="x" name="x">
</td>
</tr>
<tr>
<th>Miktar</th>
<td><input min="1" class="kutu" type="number" id="y" name="y"></td>
</tr>
<tr>
<th>Toplam Gelir</th>
<td><input class="kutu" type="text" name="yy" for="x y"></td>
</tr>
									
<tr>
<th>Ay</th>
<td>
<input checked="checked" type="radio" id="Ocak" name="7" value="Ocak">
<label for="Ocak">Ocak</label><br>
<input type="radio" id="Subat" name="7" value="Subat">
<label for="Subat">Subat</label><br>
<input type="radio" id="Mart" name="7" value="Mart">
<label for="Mart">Mart</label><br>
<input type="radio" id="Nisan" name="7" value="Nisan">
<label for="Nisan">Nisan</label><br>
<input type="radio" id="Mayis" name="7" value="Mayis">
<label for="Mayis">Mayis</label><br>
<input type="radio" id="Haziran" name="7" value="Haziran">
<label for="Haziran">Haziran</label><br>
<input type="radio" id="Temmuz" name="7" value="Temmuz">
<label for="Temmuz">Temmuz</label><br>
<input type="radio" id="Agustos" name="7" value="Agustos">
<label for="Agustos">Agustos</label><br>
<input type="radio" id="Eylul" name="7" value="Eylul">
<label for="Eylul">Eylul</label><br>
<input type="radio" id="Ekim" name="7" value="Ekim">
<label for="Ekim">Ekim</label><br>
<input type="radio" id="Kasim" name="7" value="Kasim">
<label for="Kasim">Kasim</label><br>
<input type="radio" id="Aralik" name="7" value="Aralik">
<label for="Aralik">Aralik</label><br>

</td>
</tr>

<tr>
<th>Ödeme Tipi</th>
<td>
<input checked="checked" type="radio" id="Nakit" name="9" value="Nakit">
<label for="Nakit">Nakit</label><br>
<input type="radio" id="Kredi karti" name="9" value="Kredi karti">
<label for="Kredi karti">Kredi karti</label><br>
<input type="radio" id="Dijital cuzdan" name="9" value="Dijital cuzdan">
<label for="Dijital cuzdan">Dijital cuzdan</label>
</td>
</tr>


<tr>
<th>Değerlendirme</th>
<td>
<input step="0.1" min="0.0" max="10.0" class="slider" id="myRange" type="range" name="11">
</td>
</tr>


<tr>
<th></th>
<td>Değer = <span id="demo"></span></td>
</tr>







<tr>
<td></td>
<td><input align="center" class="kutu2" type="submit" value="Kaydet"></td>
</tr>
</table>
</form>

<script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
</script>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>




  </body>
</html>

