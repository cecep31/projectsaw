<?php
include "koneksi.php";
echo "
<br>
<h2 class='h3k'>KRITERIA</h2>";
echo "<table>
  <tr>
	<td>nama alternatif</td>
    <td width='146'><input type='text' name='namac' id='namac'></td>
  </tr>";

$sqlm = mysqli_query($kon, "select * from tbl_cadd");
$no = 1;
while($rm = mysqli_fetch_row($sqlm)){
  echo "<tr>
    <td>
	  category : <b>$rm[1]</b>
	</td>
    <td>
          
	</td>
   
    
  </tr>";
  $no++;
}  
echo "</table>";
echo "<br>";
$sql=mysqli_query($kon, "SELECT SUM(bobotc) AS Total FROM tbl_cadd");
// if($sql){
//     echo "Terkoneksi dengan MySQL Server <br>";
//     echo "Database $db bisa diakses";
//   }else{
//     echo "Koneksi Gagal Bro..";
//   }

//Looping Untuk menampilkan data (namabarang,jumlah,harga)

echo "<div class='total'>";
while($rkl = mysqli_fetch_array($sql)){
	echo "<big>total: $rkl[Total]</big>
	<br> <h3>pastikan total hasilnya 1</h3>";
	
	
}	
echo "</div>";


?>