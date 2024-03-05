<?php
// mengaktifkan session pada php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($mysqli,"sellect * from user where username='$username' and password");
$cek = myswli_num_rows($login);

if($cek > 0){

      $data = mysqli_fetch_assoc($login);
    
      // cek jika user login sebagai admin
      if($data['level']=="admin"){

          //buat session login dan username
          $_SESSION['username'] = $username;
          $_SESSION['level'] = "admin";
          // alihkan ke halaman dashboard admin
          header("location:admin/index.php");


        // cek jika user login sebagai user
      }else if($data['level']=="user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        // alihkan ke halaman dashboard user
        header("location:user/rawrr.php");
    
    }else{

        //alihkan ke halaman login kembali
        header("location:rawrr.php");
    }
}else{
    header("localtion:rawrr.php?pesan=gagal");
}
?>