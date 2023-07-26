<?php
// Veritabanı bağlantısı
$databaseFile = 'C:\sqlitedbs\blog.db'; // Veritabanı dosya yolunu doğru şekilde değiştirin
$dsn = 'sqlite:' . $databaseFile;

// Veritabanı tablosunu oluşturma
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

// Blog yazıları ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    try {
        $connection = new PDO($dsn);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Veriyi veritabanına ekleme
        $query = "INSERT INTO blog_posts (title, content) VALUES (:title, :content)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':content', $content);
        $statement->execute();

        // Başarılı bir şekilde kaydedildiğini kullanıcıya bildirin
        echo "Blog yazınız başarıyla kaydedildi!";
    } catch (PDOException $e) {
        echo "Veritabanına kaydedilirken hata oluştu: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Blog Yazıları</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="title">Başlık:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="content">İçerik:</label>
        <textarea id="content" name="content" required></textarea>
        
        <button type="submit">Gönder</button>
    </form>

   
</body>
</html>
