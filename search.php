
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kategori PC</title>
	
</head>

<body>
<div class="container">

  <h1><center>Kategori PC</h1>
</form>         
    <div class="table-responsive">
    	<center>
	<table border="1" " >
		 <thead>
		<tr >
			<th >nomor_pc</th>
			<th >kelengkapan_pc</th>
			</tr>
	
		</thead>
	<?php 
include "koneksi.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$query = mysqli_query($koneksi,"SELECT kategori_pc.nomor_pc as nomor_pc, kategori_pc.kelengkapan_pc as kelengkapan_pc FROM kategori_pc WHERE kategori_pc.nomor_pc LIKE '%$key%'");
while ($row = mysqli_fetch_array($query)) {
		?>
	<tr > 
			<td ><?php echo $row['nomor_pc'];?></td><!--namaatribut-->
			<td ><?php echo $row['kelengkapan_pc'];?></td>
			</tr>
			 </tbody>
				<?php

	}
	?>
	</table>
	<a href="searching.php"><button class="btn btn-success">Kembali</button></a>
	</div>
</center>
</h1>
</body>
</html>