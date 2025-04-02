<?php
session_start(); // Memulai sesi

// Menghapus semua data sesi
session_unset();

// Mengakhiri sesi
session_destroy();
header("Location: index.php"); // Arahkan ke halaman login
exit;
?>
