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
                <input name="idmhs" type="hidden" id="idmhs" value="<?php echo "$rm[idc]"; ?>" />
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
				<td align="center"><input type="submit" name="simpan" id="simpan" value="tambah" /></td>					
			</tr>				
		</table>
    </form>
<?php
    if( isset($_POST["simpan"])){
  $sqladd = mysqli_query($kon, "insert into tbl_cadd (namac, bobotc, jc) values ('$_POST[namac]', '$_POST[bobotc]', '$_POST[jc]')"); 
  if($sqladd){
    echo "Data Berhasil Disimpan";
  }else{
    echo "";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=mhs'>";
}

?>  
   