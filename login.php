<?php
  // Cek apakah formulir login telah dikirim
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simpan data yang diterima dari formulir login ke variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan proses autentikasi dengan cara yang sesuai dengan kebutuhan Anda
    // Contoh: cek apakah username dan password yang dimasukkan oleh pengguna benar
    if ($username === 'admin' && $password === 'admin123') {
      // Jika autentikasi berhasil, arahkan pengguna ke halaman selanjutnya
      header('Location: dashboard.php');
      exit;
    } else {
      // Jika autentikasi gagal, tampilkan pesan kesalahan
      $error = 'Username atau password salah.';
    }
  }
?>
