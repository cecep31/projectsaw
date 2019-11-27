<?php
echo "
<br>
<h2 class='h3k'>kriteria</h2>";
echo "<table width='50%' border='1' cellspacing='2' cellpadding='5'>
  <tr>
	<th>no</th>
    <th>nama kriteria</th>
    <th>bobot</th>
	<th>jenis</th>
	<th>action</th>
	
 
  </tr>";

$sqlm = mysqli_query($kon, "select * from tbl_cadd");
$no = 1;
while($rm = mysqli_fetch_array($sqlm)){
  echo "<tr>
    <td>$no</td>
    <td>
	  category : <b>$rm[namac]</b>
	</td>
    <td>
	  bobot : <b>$rm[bobotc]</b>
	</td>
    <td>
	  benifit/cost : <b>$rm[jc]</b>
	</td>
    <td>
	  <a href='?p=cedit&idc=$rm[idc]'>Ubah</a> |
	  <a href='?p=cdel&idc=$rm[idc]'>Hapus</a>
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

while($rkl = mysqli_fetch_array($sql)){
	echo "<big>total: $rkl[Total]</big>
	<br> <h3>pastikan total hasilnya 1</h3>";
	
	
}	



?>