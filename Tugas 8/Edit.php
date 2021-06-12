<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<style>

body{
  background-image: url("https://img.freepik.com/free-vector/set-doctor-patient-cartoon-characters_36082-522.jpg?size=626&ext=jpg");
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
<label>ID Passien</label><br>
<input type="text" name="id" value="<?php echo $data->id ?>"><br>
<label>Nama Passien</label><br>
<input type="text" name="namapassien" value="<?php echo $data->namapassien ?>"><br>
<label>Nama Poli</label><br>
<input type="text" name="namapoli" value="<?php echo $data->namapoli ?>"><br>
<label>ID Poli</label><br>
<input type="text" name="idpoli" value="<?php echo $data->idpoli ?>"><br>
<label>Nama Dokter</label><br>
<input type="text" name="namadokter" value="<?php echo $data->namadokter ?>"><br>
<label>ID Dokter</label><br>
<input type="text" name="iddokter" value="<?php echo $data->iddokter ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
