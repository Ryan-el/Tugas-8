<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
 $id = $_POST['id'];
 $namapassien = $_POST['namapassien'];
 $namapoli = $_POST['namapoli'];
 $idpoli = $_POST['idpoli'];
 $namadokter = $_POST['namadokter'];
 $iddokter = $_POST['iddokter'];
 $model = new Model();
 $model->insert($id, $namapassien, $namapoli, $idpoli, $namadokter, $iddokter);
header ('location : indexx.php');
}
if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $namapassien = $_POST['namapassien'];
    $namapoli = $_POST['namapoli'];
    $idpoli = $_POST['idpoli'];
    $namadokter = $_POST['namadokter'];
    $iddokter = $_POST['iddokter'];
 $model = new Model();
 $model->update($id, $namapassien, $namapoli, $idpoli, $namadokter, $iddokter);
 header('location:indexx.php');
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $model = new Model();
 $model->delete($id);
 header('location:indexx.php');
}