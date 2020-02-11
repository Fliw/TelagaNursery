<?
include "../con.php";
if($_POST['submit']){
    $id = $_POST['id'];
    $namak = $_POST['nama'];
    $harga = $_POST['harga'];
    $promo = $_POST['promo'];
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
	$nama = $_FILES['foto']['name'];
	$x = explode('.', $nama);
	$ukuran	= $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];
            move_uploaded_file($file_tmp, '../images/lengkeng/'.$nama);
            $query = mysqli_query($con,"UPDATE `lengkeng` SET `Nama` = '$namak', `foto` = '$nama', `harga` = '$harga', `promo` = '$promo' WHERE `id` = $id");
            if($query){
                echo '<script>alert("Data Berhasil Di input");
                setTimeout(function(){
                window.location.href="index.php";
                },500);</script>';
            }
            else {
                echo "gagal update !";
                echo mysqli_error($con);
            }
}
else {
    echo '<script>alert("Anda Belum Mengisi Formulir");
    setTimeout(function(){
        window.location.href="index.php";
    },500);</script>';
}