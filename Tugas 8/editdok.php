<?php
$id = $_GET['iddokter'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<style>

body{
  background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190222/ourmid/pngtree-hospital-theme-illustration-background-stylebackgroundblue-image_63751.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
}

</style>
<title>Edit Data Passien</title>
</head>
<body>
<h1>Edit Data</h1>
<a href="indexx.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>ID Dokter</label><br>
<input type="text" name="id" value="<?php echo $data->iddokter ?>"><br>
<label>Nama Dokter</label><br>
<input type="text" name="namapassien" value="<?php echo $data->namadokter ?>"><br>
<label>Nama Poli</label><br>
<input type="text" name="namapoli" value="<?php echo $data->namapoli ?>"><br>
<label>ID Poli</label><br>
<input type="text" name="idpoli" value="<?php echo $data->idpoli ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
