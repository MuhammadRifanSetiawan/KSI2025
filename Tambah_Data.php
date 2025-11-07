<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO pengguna (nama, email) VALUES ('$nama', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
