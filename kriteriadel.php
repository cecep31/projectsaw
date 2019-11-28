<?php
$sqlm = mysqli_query($kon, "delete from tbl_cadd where idc='$_GET[idc]'");
if($sqlm){
  echo "Data Berhasil Dihapus";
}else{
  echo "Gagal Menghapus";
}
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/projectsaw'>";
?>