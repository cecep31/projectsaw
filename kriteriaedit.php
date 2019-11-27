<?php
    $sqlm = mysqli_query($kon, "select * from tbl_cadd where idc='$_GET[idc]'");
    $rm = mysqli_fetch_array($sqlm);
?>
<br>
<h2>tambah kriteria baru</h2><br>
	<form action="" method="post">		
		<table>
			<tr>
                <td width="120">Nama kriteria</td>
                <input name="idc" type="hidden" id="idc" value="<?php echo "$rm[idc]"; ?>" >
				<td width="146"><input type="text" name="namac" id="namac" value="<?php echo "$rm[namac]"; ?>"></td>					
			</tr>	
			<tr>
				<td>bobot</td>
				<td><input type="text" name="bobotc" id="bobotc" value="<?php echo "$rm[bobotc]"; ?>"></td>					
            </tr>
            <tr>
				<td>jenis kategori</td>
				<td><input type="text" name="jc" id="jc" placeholder="benefit/cost" value="<?php echo "$rm[jc]"; ?>"></td>					
            </tr>
            	
			<tr>
				<td></td>
				<td align="center"><input type="submit" name="edit" id="edit" value="ubah" /></td>					
			</tr>				
		</table>
    </form>
<?php
    if( isset($_POST["edit"])){
  $sqledit = mysqli_query($kon, "update tbl_cadd set namac='$_POST[namac]', bobotc='$_POST[bobotc]', jc='$_POST[jc]' where idc='$_POST[idc]'"); 
  if($sqledit){
    echo "Data Berhasil Disimpan";
  }else{
    echo "gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/projectsaw'>";
}

?>  
   