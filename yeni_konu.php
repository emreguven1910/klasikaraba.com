<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $konu_baslik = $_POST['konu_baslik'];
    $konu_icerik = $_POST['konu_icerik'];

    // Veritabanına bağlantı kodu
    // Burada veritabanına kaydetmek için PDO veya MySQLi kullanabilirsiniz.
    echo "Konu başarıyla oluşturuldu: $konu_baslik";
}
?>
