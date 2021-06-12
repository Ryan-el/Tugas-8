<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }

public function insert($iddokter, $namadokter, $namapoli, $idpoli)
{
 $sql = "INSERT INTO tbldokter (iddokter, namadokter, namapoli, idpoli ) VALUES
('$iddokter', '$namadokter', '$namapoli', '$idpoli')";
$this->conn->query($sql);
}


public function tampil_data()
{
 $sql = "SELECT * FROM tbldokter";
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
 $sql = "SELECT * FROM tbldoker WHERE id='$iddokter'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($iddokter, $namadokter, $namapoli, $idpoli)
{
 $sql = "UPDATE tblpassien SET iddokter='$iddokter', namadokter='$namadokter', namapoli='$namapoli', idpoli='$idpoli',
 WHERE id='$id'";
 $this->conn->query($sql);
}
public function delete($id)
{
 $sql = "DELETE FROM tbldokter WHERE id='$iddokter'";
 $this->conn->query($sql);
}
}
