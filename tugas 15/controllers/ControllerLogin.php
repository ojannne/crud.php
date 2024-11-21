<?php 
include "../models/koneksi_login.php";

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username'
    AND password='$password'
    ";

    $result = $db->query($sql);

    if($result->num_rows > 0) {
        header('Location:http://localhost/Latihan.php/crud%20latihan/barang.php');
    }else {
        header('Location:http://localhost/Latihan.php/crud%20latihan/header_login_eror.php');
    }
}
?>