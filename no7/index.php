 <!DOCTYPE html>
<?php 
	include "koneksi.php";
  
?>
<html lang="en">
  <head>
    <title>Jawaban No.7 </title>
 
    <!--Load CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <style type="text/css">
        body {
            padding-top:60px;
            padding-bottom: 40px;
        }
    </style> 
    
</head>

  <body>
  
 <?php
 
$pesan = "";
//proses tambah data
	if(isset($_POST['btn_tambah'])){
		//memasukkan setiap data ke dalam variabel
		$categories = $_POST['categories'];
		
		//validasi
		$sql_cek = "SELECT * FROM categories 
		WHERE name='$categories'";
		$qry_cek = mysqli_query($con,$sql_cek);
		$hitung_baris = mysqli_num_rows($qry_cek);
		//username harus uniq
		if($hitung_baris >= 1){
			$pesan = "<div class='error'>Category Sudah Ada</div>";
		}else{
			//proses simpan
			$sql_simpan = "INSERT INTO categories 
			(name)
			VALUES ('$categories')";
			$qry_simpan = mysqli_query($con,$sql_simpan);
			
			//pengecekan apakah simpan berhasil atau tidak
			if($qry_simpan){
				$pesan = "<div class='berhasil'>Selamat, Data Berhasil diinput</div>";
			}else{
				$pesan = "<div class='error'>Maaf, Data gagal diinput</div>";
			}
		}
	}
	
	
?>

<style>
select{
	width:100%;
}
input[type="submit"]{
	padding:7px;
	width:100%;
	margin-top:10px;
	background-color:#2980b9;
	color:#fff;
	font-weight:bold;
}
input[type="submit"]:hover{
	background-color:#2980a0;
}
.error{
	background-color:pink;
	padding:10px;
	width:300px;
	margin:0 auto;
	text-align:center;
	border:1px red solid;
	color: red;
	font-weigth:bold;
}

.berhasil{
	background-color:#b5f7ad;
	padding:10px;
	width:300px;
	margin:0 auto;
	text-align:center;
	border:1px #345b2f solid;
	color: #274223;
	font-weigth:bold;
}
.grid{
	border-collapse:collapse;
}
.grid th{
	background-color:#2a5784;
	color:white;
}
.grid tr:nth-child(odd){
	background-color:#ccc;
}
</style>

    <table class="grid" border="1" align="center" width="100%" 
cellpadding="5">
	<tr>
		<th>ID</th>
		<th>CATEGORI</th>
		<th>PRODUCTS</th>
		
		
	</tr>
	<?php
	$sql_ambil = "SELECT (categories.id_cat) AS id,(categories.name) AS category_name, group_concat(products.name separator ', ') AS products FROM categories,products WHERE categories.id_cat = products.id_cat GROUP BY products.id_cat;";
	$qry_ambil = mysqli_query($con, $sql_ambil);
	
	while($kolom=mysqli_fetch_array($qry_ambil)){
	?>
	<tr>
		
		<td><?=$kolom['id']?></td>
		<td><?=$kolom['category_name']?></td>
		<td><?=$kolom['products']?></td>
		
	</tr>
	<?php
	}
	?>
</table>
      
      <center><h2>Form Tambah Kategori</h2></center>

<?=$pesan?>
<table align="center">
	
	
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="categories" required></td>
	</tr>
	
	<tr>
		<td colspan="3"><input type="submit" name="btn_tambah" value="Tambah Data"></td>
	</tr>
	
	</form>
		
</table>
</table>
      

    </div> <!-- /container -->

    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>

  </body>
</html>
