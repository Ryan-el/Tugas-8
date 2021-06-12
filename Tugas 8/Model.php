<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }

public function insert($id, $namapassien, $namapoli, $idpoli, $namadokter, $iddokter)
{
 $sql = "INSERT INTO tblpassien (id, namapassien, namapoli, idpoli, namadokter, iddokter ) VALUES
('$id', '$namapassien', '$namapoli', '$idpoli', '$namadokter', '$iddokter')";
$this->conn->query($sql);
}


public function tampil_data()
{
 $sql = "SELECT * FROM tblpassien";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($id)
{
 $sql = "SELECT * FROM tblpassien WHERE id='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($id, $namapassien, $namapoli, $idpoli, $namadokter, $iddokter)
{
 $sql = "UPDATE tblpassien SET id='$id', namapassien='$namapassien', namapoli='$namapoli', idpoli='$idpoli', namadokter='$namadokter', iddokter='$iddokter'
 WHERE id='$id'";
 $this->conn->query($sql);
}
public function delete($id)
{
 $sql = "DELETE FROM tblpassien WHERE id='$id'";
 $this->conn->query($sql);
}
}
