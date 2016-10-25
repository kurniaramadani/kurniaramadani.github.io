<?php
   $data = $_GET['angka'];
   $arr_data = explode (",",$data);
  	$count = count($arr_data);
  	echo "Data Inputan <br><br>";
  	   for ($i= 0; $i < $count; $i++)
		{
		 echo ("Data array indek ke ".$i." : ");
		 echo ($arr_data[$i]);
  		 echo "<br />";
		}
   echo ("<br>Banyaknya data dalam array: ".$count."<br>");
   echo ("Hasil penjumlahan dari data yang di inputkan adalah : ".array_sum($arr_data));
?>