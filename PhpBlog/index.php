<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        button {
            padding: 10px 15px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        p.success {
            color: green;
            font-weight: bold;
        }

        p.error {
            color: red;
            font-weight: bold;
        }

        /* Blog yazıları için stil örneği */
        h2 {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }

        p.blog-content {
            line-height: 1.8;
        }

        p.date {
            font-size: 14px;
            color: #888;
        }

        /* Responsive düzenleme */
        @media screen and (max-width: 600px) {
            form {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <h1>Blog Yazıları</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="title">Başlık:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="content">İçerik:</label>
        <textarea id="content" name="content" rows="6" required></textarea>
        
        <button type="submit">Gönder</button>
    </form>

</body>
</html>

    </style>
</head>
<body>
    <h1>Blog Yazıları</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="title">Başlık:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="content">İçerik:</label>
        <textarea id="content" name="content" rows="6" required></textarea>
        
        <button type="submit">Gönder</button>
    </form>

    <?php
    require_once 'blog_operations.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $content = $_POST["content"];

        addBlogPost($title, $content);
    }

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
