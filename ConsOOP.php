<?php
class Pegawai { 
 
 public $nama = ""
,
 $jenis_kelamin = 
 $jabatan = 
 $status = 
""
 $gaji = ""
;
public function
__construct($nama, $jenis_kelamin, $jabatan, $status, 
$gaji) { 
 $this->
nama = $nama;
 $this-
>jenis_kelamin = $jenis_kelamin;
 $this->jabatan = $jabatan;
 $this->status = $status;
 $this-
>gaji = $gaji;
} 
 
public function
label() {
return "$this->nama, $this
$this->gaji"; 
} 
} 
 $pegawai1 = new Pegawai(
menikah","10000000"); 
 echo 
"Pegawai 1 : $pegawai1
$pegawai1->
jabatan, $pegawai1
 echo "<br>"; 
Nama : RIVALDO S
,
$jenis_kelamin = "", 
$jabatan = "", 
""
, 
;
__construct($nama, $jenis_kelamin, $jabatan, $status, 
nama = $nama;
>jenis_kelamin = $jenis_kelamin;
>jabatan = $jabatan;
>status = $status;
>gaji = $gaji;
label() {
nama, $this->jenis_kelamin, $this->
jabatan, $this
Pegawai("RIVALDO","Laki-laki","HRD",
"belum 
"Pegawai 1 : $pegawai1
->nama, $pegawai1->
jenis_kelamin, 
jabatan, $pegawai1
->status, $pegawai1->gaji";
__construct($nama, $jenis_kelamin, $jabatan, $status, 
jabatan, $this
->status, 
