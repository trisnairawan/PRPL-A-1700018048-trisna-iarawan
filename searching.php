<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kategori PC</title>
	
</head>

<body>

  <h1><centre>Kategori PC<centre></h1>
	<form class="form-inline md-form mr-auto mb-4" method="post" action="search.php">
  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cari">
  <button class="btn btn-success" type="submit">Search</button>
</form>
	<div class="table-responsive">
	<table border="1" >
		 <thead>
		<tr >
			<th >Nomor PC</th>
			<th >Kelengkapan PC</th>
			</tr>
	
		</thead>

	<?php
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT * FROM kategori_pc");
		while ($row = mysqli_fetch_array($query)) {
		?>
		 <tbody>
		<tr > 
			<td ><?php echo $row['nomor_pc'];?></td><!--namaatribut-->
			<td ><?php echo $row['kelengkapan_pc'];?></td>
			</td>
			</tr>
			 </tbody>
				
	<?php

	}
	?>
	</table>
	<br>  

</body>
</html>