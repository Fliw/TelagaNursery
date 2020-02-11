<?php
include '../con.php';
$id=$_GET['id'];
$hapus = mysqli_query($con,"DELETE FROM lengkeng WHERE id = $id");
if($hapus){
    echo '<script>alert("Data Berhasil Di Hapus");
                setTimeout(function(){
                window.location.href="dasbor.php";
                },500);</script>';
}
else {
    
    echo '<script>alert("Data Gagal Di hapus");
    setTimeout(function(){
    window.location.href="index.php";
    },500);</script>';
}
?>