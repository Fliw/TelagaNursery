<?php
session_start();
include '../con.php';
if($_POST['submit']){
    $nama=mysqli_real_escape_string($con,$_POST['namas']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
    $masuk1=mysqli_query($con,"SELECT * FROM admin WHERE nama ='$nama' AND password ='$pass'");
    if($masuk1){
        $ada=mysqli_num_rows($masuk1);
        if($ada>0){
            $x=mysqli_fetch_assoc($masuk1);
            $_SESSION['login']=TRUE;
            $_SESSION['nama']=$x['nama'];
            $_SESSION['email']=$x['email'];
            header("location:dasbor.php");
        }
        else {
            echo '<script>alert("Password Tidak Ditemukan");
            setTimeout(function(){
                window.location.href="index.php";
            },500);</script>';    
        }
    }
    else {
        echo '<script>alert("password tidak ditemukan");
        setTimeout(function(){
            window.location.href="index.php";
        },500);</script>';
    }
}
else {
    echo '<script>alert("Anda Belum Login !");
    setTimeout(function(){
        window.location.href="index.php";
    },500);</script>';
}
?>