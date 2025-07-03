<?php
// Konfigurasi koneksi
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'hotel_booking';

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
  die("<div class='alert alert-danger'>Koneksi gagal: " . $conn->connect_error . "</div>");
}

// Tangkap data
$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$date    = $_POST['date'] ?? '';
$time    = $_POST['time'] ?? '';
$people  = $_POST['people'] ?? '';
$message = $_POST['message'] ?? '';

// Validasi sederhana
if ($name && $email && $phone && $date && $time && $people) {

  $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, date, time, people, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssis", $name, $email, $phone, $date, $time, $people, $message);

  if ($stmt->execute()) {
    echo "<div class='alert alert-success'>Booking berhasil disimpan!</div>";
  } else {
    echo "<div class='alert alert-danger'>Gagal menyimpan booking: " . $stmt->error . "</div>";
  }

  $stmt->close();

} else {
  echo "<div class='alert alert-warning'>Semua field wajib diisi.</div>";
}

$conn->close();
?>
