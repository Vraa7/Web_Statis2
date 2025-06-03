<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = $conn->real_escape_string(strip_tags($_POST["nama"]));
    $pesan = $conn->real_escape_string(strip_tags($_POST["pesan"]));

    $sql = "INSERT INTO pesan (nama, isi) VALUES ('$nama', '$pesan')";
    $conn->query($sql);

    header("Location: index.php");
    exit;
}
?>
