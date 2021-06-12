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
<title>Cetak Data Dokter</title>
<style>
h1 {
text-align: center;
}
table,
td,
th {
border: 1px solid #ddd;
text-align: left;
}
table {
border-collapse: collapse;
width: 100%;
}
th,
td {
padding: 15px;
}
</style>
</head>
<body>
<h1>Laporan Data Dokter </h1>
<table>
<thead>
<tr>
<th>No.</th>
<th>ID Dokter</th>
<th>Nama Dokter</th>
<th>Nama Poli</th>
<th>ID Poli</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->iddokter ?></td>
<td><?=$data->namadokter ?></td>
<td><?=$data->namapoli ?></td>
<td><?=$data->idpoli ?></td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel dokter.</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>