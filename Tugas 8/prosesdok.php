<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
 $iddokter = $_POST['iddokter'];
 $namadokter = $_POST['namadokter'];
 $namapoli = $_POST['namapoli'];
 $idpoli = $_POST['idpoli'];
 $model = new Model();
 $model->insert($iddokter, $namadokter, $namapoli, $idpoli);
header ('location : indexdok.php');
}
if (isset($_POST['submit_edit'])) {
    $iddokter = $_POST['iddokter'];
    $namadokter = $_POST['namadokter'];
    $namapoli = $_POST['namapoli'];
    $idpoli = $_POST['idpoli'];
    $namadokter = $_POST['namadokter'];
 $model = new Model();
 $model->update($iddokter, $namadokter, $namapoli, $idpoli);
 header('location:indexdok.php');
}
if (isset($_GET['iddokter'])) {
 $id = $_GET['iddokter'];
 $model = new Model();
 $model->delete($iddokter);
 header('location:indexdok.php');
}