<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Lokasi file PHPMailerAutoload.php (sesuaikan dengan lokasi instalasi)
require '../vendor/autoload.php';

// Buat instance PHPMailer
$mail = new PHPMailer(true);

try {
    // Konfigurasi SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';  // Ganti dengan alamat SMTP provider Anda
    $mail->SMTPAuth = true;
    $mail->Username = 'your_username';     // Ganti dengan username SMTP Anda
    $mail->Password = 'your_password';     // Ganti dengan password SMTP Anda
    $mail->SMTPSecure = 'tls';               // Pilihan: 'tls' atau 'ssl'
    $mail->Port = 587;                 // Ganti dengan port SMTP yang sesuai

    // Set pengirim dan penerima email
    $mail->setFrom('from@example.com', 'Your Name');
    $mail->addAddress('to@example.com', 'Recipient Name');

    // Set subjek dan isi pesan
    $mail->Subject = 'Test Email';
    $mail->Body = 'Ini adalah pesan uji coba';

    // Kirim email
    $mail->send();
    echo 'Email berhasil dikirim';
} catch (Exception $e) {
    echo 'Gagal mengirim email: ', $mail->ErrorInfo;
}
