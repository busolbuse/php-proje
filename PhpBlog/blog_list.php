<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Listesi</title>
</head>
<body>
    <h1>Blog Listesi</h1>

    <?php
    require_once 'blog_operations.php';

    $blogPosts = getBlogPosts();

    if (!empty($blogPosts)) {
        foreach ($blogPosts as $post) {
            echo "<h2>" . $post['title'] . "</h2>";
            echo "<p class='blog-content'>" . $post['content'] . "</p>";
            echo "<p class='date'>Oluşturulma Tarihi: " . $post['created_at'] . "</p>";
        }
    } else {
        echo "Henüz hiçbir blog yazısı eklenmemiş.";
    }
    ?>
</body>
</html>
