<?php

include './koneksidb.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$nama = $pesan = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $pesan = test_input($_POST["pesan"]);
}

$sql = "INSERT INTO halaman_pesan(nama, pesan)
VALUES ('$nama', '$pesan')";

if (mysqli_query($conn, $sql)) {
  echo "Pesan terkirim!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>