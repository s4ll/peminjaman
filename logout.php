<?php
session_start(); // Memulai sesi

// Menghapus semua data sesi
session_unset();

// Menghancurkan sesi
session_destroy();

// Mengalihkan pengguna kembali ke halaman login
header("Location: index.php");
exit();
?>