<?php
$databaseHost= "localhost";
$databaseName= "showroom motor";
$databaseUsername= "root";
$databasePasword= "";

$mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePasword,$databaseName);

if($mysqli){
    echo "koneksi dp berhasil.<br/>";   
}else{
    echo "koneksi gagal.<br/>";
}
   ?> 