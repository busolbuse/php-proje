<?php
require_once 'database.php';

// Blog yazıları ekleme işlemi
function addBlogPost($title, $content) {
    global $connection;

    try {
        $query = "INSERT INTO blog_posts (title, content) VALUES (:title, :content)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':content', $content);
        $statement->execute();
    } catch (PDOException $e) {
        echo "Veritabanına kaydedilirken hata oluştu: " . $e->getMessage();
    }
}

// Blog yazılarını çekme işlemi
function getBlogPosts() {
    global $connection;

    try {
        $query = "SELECT * FROM blog_posts ORDER BY created_at DESC";
        $statement = $connection->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Veritabanına erişilirken hata oluştu: " . $e->getMessage();
    }
}
?>
