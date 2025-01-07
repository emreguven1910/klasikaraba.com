<?php
session_start(); // Oturum başlat
session_unset(); // Oturumdaki tüm verileri temizle
session_destroy(); // Oturumu tamamen sonlandır

// Kullanıcıyı anasayfaya veya giriş sayfasına yönlendir
header("Location: index.html");
exit;
?>
