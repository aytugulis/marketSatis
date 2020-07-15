<?php   
$db = new PDO("mysql:host=localhost;dbname=bitirme;charset=utf8","root","");
$query = $db->query("SELECT veriler.musteriTipi,COUNT(veriler.musteriTipi) as asd from veriler GROUP BY veriler.musteriTipi");
?>





<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reklam Verimliliği</title>
    <link rel="stylesheet" href="style.css">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query as $row) {
            
                echo "['".$row["musteriTipi"]."',".$row["asd"]."],";
            
            }
            
            
            ?>
            
            
        ]);

        // Set chart options
        var options = {title:'Üye Oranı',
                       width:640,
                       height:400,
					   
					   };
					   

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
		
      }
    </script>
 
 
<style>

.anadiv {
  height: 450px;
  padding: 25px;
  z-index:2;
  background-color: #ffffff;
}

.div1 {

z-index:2;
 margin-left: 25%;
}

.div2 {
  margin-left: 52%;
  z-index:2;
}





p {
padding-top: 12px;
padding-bottom: 12px;
text-align: center;
background-color: #4682B4;
color: white;
font-size: 18px;
border: 1px solid #ddd;
padding: 5px;
}


</style>


  </head>
  <body>
<nav>
     <div class="logo">
Anasayfa</div>

     
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
 <p>Mandalay Şehri Cinsiyet Oranları</p>
 <section class="anadiv">
<div class="div1">
 <div id="chart_div" style="width: 100px; height: 35px;"></div> 
</div>


 </section>

	
<script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>

  </body>
</html>
