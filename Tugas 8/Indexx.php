<?php
include 'model.php';
$model = new Model();
$index = 1;
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
<title>Data Passien</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>Rumah Sakit</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="indexx.php">Passien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexdok.php">Dokter</a>
      </li>
    </ul>
    </form>
  </div>
</nav>
<h1>Data Passien</h1>
<a href="create.php">Tambah Data</a>
<br>
<a href="print.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
<thead>
<tr>
<th>No.</th>
<th>ID Passien</th>
<th>Nama Passien</th>
<th>Nama Poli</th>
<th>ID Poli</th>
<th>Nama Dokter</th>
<th>ID Dokter</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->id ?></td>
<td><?=$data->namapassien ?></td>
<td><?=$data->namapoli ?></td>
<td><?=$data->idpoli ?></td>
<td><?=$data->namadokter ?></td>
<td><?=$data->iddokter ?></td>
<td>
<a name="edit" id="edit"
href="edit.php?id=<?=$data->id ?>">Edit</a>
<a name="hapus" id="hapus"
href="proses.php?id=<?=$data->id ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel passien.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>