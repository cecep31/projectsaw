<?php
echo "
<br>
<h3>tambah alternatif</h3>
<form action='' method=post'>";
echo "<table>
  <tr>
	<td><b>nama alternatif :<b></td>
    <td width='146'><input type='text' name='namaa' id='namaa'></td>
  </tr>";

$sqlm = mysqli_query($kon, "select * from tbl_cadd");
$na = 1;
while($rm = mysqli_fetch_row($sqlm)){
  echo "<tr>
    <td>
	   <b>$rm[1] :</b>
	</td>
    <td>
	<input type='text' name='isi$na' id='isi$na'>
	</td>
   
    
  </tr>";
  $na++;
  
}  
$arrnya = [$na];
echo "$arrnya";
echo "</table>
</form>
";

echo "<br>";
$sql=mysqli_query($kon, "SELECT SUM(bobotc) AS Total FROM tbl_cadd");
// if($sql){
//     echo "Terkoneksi dengan MySQL Server <br>";
//     echo "Database $db bisa diakses";
//   }else{
//     echo "Koneksi Gagal Bro..";
//   }

//Looping Untuk menampilkan data (namabarang,jumlah,harga)



?>