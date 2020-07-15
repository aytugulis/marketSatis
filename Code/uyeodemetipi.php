<?php  

//index.php

include("database_connection.php");

$query1 = "SELECT odemeTipi FROM veriler GROUP BY odemeTipi DESC";

$statement1 = $connect1->prepare($query1);

$statement1->execute();

$result1 = $statement1->fetchAll();

?>  



<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reklam Verimliliği</title>
    <link rel="stylesheet" href="style.css">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback();

function load_monthwise_data(odemeTipi, title)
{
    var temp_title = title + ' '+odemeTipi+'';
    $.ajax({
        url:"fetch7.php",
        method:"POST",
        data:{odemeTipi:odemeTipi},
        dataType:"JSON",
        success:function(data)
        {
            drawMonthwiseChart(data, temp_title);
        }
    });
}


function drawMonthwiseChart(chart_data, chart_main_title)
{
    var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'musteriTipi');
    data.addColumn('number', 'asd');
    $.each(jsonData, function(i, jsonData){
        var musteriTipi = jsonData.musteriTipi;
        var asd = parseFloat($.trim(jsonData.asd));
        data.addRows([[musteriTipi, asd]]);
    });
    var options = {
        title:chart_main_title,
        hAxis: {
            title: "musteriTipi"
        },
        vAxis: {
            title: 'asd'
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart_area'));
    chart.draw(data, options);	
}

</script>

<script>
    
$(document).ready(function(){

    $('#odemeTipi').change(function(){
        var odemeTipi = $(this).val();
        if(odemeTipi != '')
        {
            load_monthwise_data(odemeTipi, '');
        }
    });

});

</script>

	
	
	
	
	
	
	
	
	
<style>

.anadiv {
  height: 450px;
  padding: 25px;
  z-index:2;
}

.div1 {

z-index:2;
  float: left;
}

.div2 {
 margin: auto
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
Üye Oranı</div>

     
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
 <p>Ödeme Tipine Göre Üye Oranları</p>
 <section class="anadiv">
<div class="div2">
<select name="odemeTipi" class="form-control" id="odemeTipi" style="

height: 40px;
background-color: #4682B4;
color: white;
font-size: 20px;
font-family:arial;
 font-weight:bold; 
border: 2px solid #eeeeee;
padding: 3px;">
                                <option value="">Ödeme Tipi Seç</option>
                            <?php
                            foreach($result1 as $row1)
                            {
                                echo '<option value="'.$row1["odemeTipi"].'">'.$row1["odemeTipi"].'</option>';
                            }
                            ?>
                            </select> 
                    <div class="div2" id="chart_area" style="width: 840px; height: 500px;"></div>

</div>

 </section>

	
<script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>

  </body>
</html>
