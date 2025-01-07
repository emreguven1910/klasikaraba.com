<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Örnek kontrol (gerçek bir veritabanı ile doğrulama burada yapılır)
    if ($email == "admin@arabalar.com" && $password == "12345") {
        echo "Başarıyla giriş yaptınız!";
    } else {
        echo "E-posta veya şifre hatalı!";
    }
}
?>
