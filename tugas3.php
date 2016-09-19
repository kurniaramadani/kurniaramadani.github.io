<?php
 $FileKu = "coba.txt";
     $FileHandle = fopen($FileKu, 'r');
     $Data = fread($FileHandle, filesize($FileKu));
         fclose($FileHandle);
      	echo "DATA TEXT YANG AKAN DI OLAH";
      	echo "<br />";
      	echo "------------------------------------------------";
      	echo "<br />";
		echo $Data;
     	echo "<br />";
     		echo "<br />";
     		echo "Menampilkan perkata perbaris";
     		echo "<br />";
      		echo "-------------------------------------";
      		echo "<br />";
    		 	$arr_Data = explode (" ",$Data,30);
				for ($i=0; $i <29; $i++)
				{
     				echo $arr_Data [$i];
     				echo "<br />";
     	   		}
      echo "<br />";
      echo "menghitung banyak nya kata dalam data";
      echo "<br />";
      echo "------------------------------------------------";
      echo "<br />";
      echo "jumlah kata nya sebanyak : ";
      $jumlah = str_word_count($Data);
      echo $jumlah;
?>