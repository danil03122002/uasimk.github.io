<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_komen = $_POST['nama_komen'];
    $email_komen = $_POST['email_komen'];
    $phone_komen = $_POST['phone_komen'];
    $janji_temu = $_POST['janji_temu'];
    $dapartemen= $_POST['dapartemen'];
    $dokter = $_POST['dokter'];
    $komen = $_POST['komen'];

    $sql = "INSERT INTO komensih (nama_komen, email_komen, phone_komen, janji_temu, dapartemen, dokter, komen) VALUES ('$nama_komen', '$email_komen', '$phone_komen', '$janji_temu', '$dapartemen', '$dokter', '$komen')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
        echo "Terima kasih atas komentar anda:)";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>