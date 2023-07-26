<?php
// Veritabanına bağlanmak için değişkenleri belirleyin
$databaseFile = 'C:\sqlitedbs\blog.db'; // blog.db demediğim için SQLSTATE[HY000] [14] unable to open database file hatası aldım.
$dsn = 'sqlite:' . $databaseFile;

try {
    // Veritabanına bağlanın
    $connection = new PDO($dsn);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Veritabanına bağlantı başarılı!";
} catch (PDOException $e) {
    echo "Veritabanına bağlanırken hata oluştu: " . $e->getMessage();
}
?>
