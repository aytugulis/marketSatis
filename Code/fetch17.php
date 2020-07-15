<?php

//fetch.php

include('database_connection.php');

if(isset($_POST["sehir"]))
{
 $query1 = "
 SELECT veriler.tarih,sum(round(veriler.vergisizGelir)) as asd FROM veriler
 WHERE sehir = '".$_POST["sehir"]."' 
 GROUP BY veriler.tarih
 ORDER BY asd desc
 ";
 $statement1 = $connect1->prepare($query1);
 $statement1->execute();
 $result1 = $statement1->fetchAll();
 foreach($result1 as $row1)
 {
  $output1[] = array(
   'tarih'   => $row1["tarih"],
   'asd'  => floatval($row1["asd"])
  );
 }
 echo json_encode($output1);
}


?>
