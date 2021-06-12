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
<title>Tambah Data Dokter</title>
</head>
<body>
<h1>Tambah</h1>
<a href="indexdok.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>ID Dokter</label><br>
<input type="text" name="iddokter"><br>
<label>Nama Dokter</label><br>
<input type="text" name="namadokter"><br>
<label>Nama Poli</label><br>
<input type="text" name="namapoli"><br>
<label>ID Poli</label><br>
<input type="text" name="idpoli"><br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
