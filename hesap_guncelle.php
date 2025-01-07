<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kullanici_adi = $_POST['kullanici_adi'];
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    // Şifre değişiklik kontrolü
    if (!empty($sifre)) {
        // Yeni şifreyi hashleyip kaydedin (örnek: password_hash kullanımı)
        $hashed_sifre = password_hash($sifre, PASSWORD_BCRYPT);
    }

    // Veritabanına bağlanıp bilgileri güncelleyin
    echo "Bilgiler başarıyla güncellendi!";
}
?>
