<?php
    //memasukan file config
    include("config.php");
 
    //ambil parameter ID dar URL
    $id=$_GET['id'];
 
    //url untuk hapus data
    $url="http://localhost/restapi/hapus_data.php?id=".$id;
 
    //menyimpan hasil dalam variabel
    $data=http_request_get($url);
 
    //konversi data json ke array
    $hasil=json_decode($data,true);
 
    //script langsung pindah ke laman tampil data
    header('location: tampil_data.php');
 
?>