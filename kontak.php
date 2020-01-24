<?php
include "con.php";
if($_POST['kirim']){
 
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $subjek=$_POST['subjek'];
    $pesan=$_POST['pesan'];
    $kueri="INSERT INTO `kontak` (`id`, `Nama`, `Email`, `Subjek`, `Pesan`) VALUES (NULL, '$nama', '$email', '$subjek', '$pesan')";
    $kirim = mysqli_query($con,$kueri);
    if($kirim){
        echo '<script>alert("Terimakasih Sudah Menghubungi");
        setTimeout (function(){
            window.location.href = "index.php";
        },500);
        </script>';
        
    }
}
else {
    echo '<script>alert("Anda Belum Mengisi Formulir");
    setTimeout (function(){
    window.location.href = "index.php";
    },500);</script>';
}