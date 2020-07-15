<?php

//fetch.php

include('database_connection.php');

if(isset($_POST["odemeTipi"]))
{
 $query1 = "
 SELECT veriler.cinsiyet,COUNT(veriler.cinsiyet) as asd FROM veriler 
 WHERE odemeTipi = '".$_POST["odemeTipi"]."' 
 GROUP BY veriler.cinsiyet
 ";
 $statement1 = $connect1->prepare($query1);
 $statement1->execute();
 $result1 = $statement1->fetchAll();
 foreach($result1 as $row1)
 {
  $output1[] = array(
   'cinsiyet'   => $row1["cinsiyet"],
   'asd'  => floatval($row1["asd"])
  );
 }
 echo json_encode($output1);
}


?>
