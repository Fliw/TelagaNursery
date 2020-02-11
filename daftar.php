<?php
include 'con.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $peserta = $_POST['Peserta'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $data = mysqli_query($con, "INSERT INTO `pelatihan` (`id`, `nama`, `alamat`, `peserta`, `email`, `nomor`) VALUES (NULL, '$nama', '$alamat', '$peserta', '$email', '$nomor')");
    if ($data) {
        echo '<script>alert("Terimakasih Sudah Mendaftar, Anda Akan Segera Dialihkan Ke Halaman Awal");
    setTimeout (function(){
        window.location.href = "index.php";
    },500);
    </script>';
        $KiriminKe = 'guudgayn@gmail.com';
        $NamaSiPengirim = 'Fliw';
        $emailpengirim = 'emailkalian@gmail.com';
        $PassSMTPnya = 'passwordgmailkalian';
        $mail = new PHPMailer;
        $mail->isSMTP(true);
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $emailpengirim;
        $mail->Password = $PassSMTPnya;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom($emailpengirim, $NamaSiPengirim);
        $mail->addReplyTo($emailpengirim, $NamaSiPengirim);
        $mail->addAddress($KiriminKe);
        $mail->Subject = 'Pesan Dari Telaga Nursery';
        $mail->isHTML(true);
        $mailContent = "Nama Instansi : $nama <br/> Alamat Instansi : $alamat <br>Jumlah Estimasi Peserta : $peserta <br>Email : $email <br/>Nomor : $nomor<br/>";
        $mail->Body = $mailContent;
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
        echo "Maaf, Gagal Mengisi Data !";
        echo mysqli_errno($con);
    }
} else {
    echo '<script>alert("Anda Belum Mengisi Formulir");
    setTimeout (function(){
        window.location.href = "index.php";
    },500);
    </script>';
}
