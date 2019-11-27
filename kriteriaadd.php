<h3>tambah kriteria baru</h3><br>
	<form action="" method="post">		
		<table>
			<tr>
				<td width="120">Nama kriteria</td>
				<td width="146"><input type="text" name="namac" id="namac"></td>					
			</tr>	
			<tr>
				<td>bobot</td>
				<td><input type="text" name="bobotc" id="bobotc"></td>					
            </tr>
            <tr>
				<td>jenis kategori</td>
				<td><input type="text" name="jc" id="jc" placeholder="benefit/cost"></td>					
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
   