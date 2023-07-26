<?php
$databaseFile = 'C:\sqlitedbs\blog.db'; 
$dsn = 'sqlite:' . $databaseFile;

try {
    $connection = new PDO($dsn);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "CREATE TABLE IF NOT EXISTS blog_posts (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                title TEXT NOT NULL,
                content TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
    $connection->exec($query);
} catch (PDOException $e) {
    echo "Veritabanı hatası: " . $e->getMessage();
}
?>
