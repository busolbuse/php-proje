<!-- blog_list.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Listesi</title>
</head>
<body>
    <h1>Blog Listesi</h1>

    <div class="row">
        <?php
        require_once 'blog_operations.php';

        $blogPosts = getBlogPosts();

        if (!empty($blogPosts)) {
            foreach ($blogPosts as $post) {
                echo '<div class="blog-post col-md-6">';
                echo '<a href="blog-text.html">';
                echo '<div class="blog-post-thumbnail">';
                echo '<img src="assets/img/thumbnail.png" alt="" srcset="">';
                echo '</div>';
                echo '<div class="blog-post-text">';
                echo '<div class="blog-post-title">' . $post['title'] . '</div>';
                echo '<div class="blog-post-description">' . $post['content'] . '</div>';
                echo '<div class="blog-post-meta-info">';
                echo '<ul>';
                echo '<li>';
                echo '<div class="blog-post-date">' . $post['created_at'] . '</div>';
                echo '<div class="blog-post-meta-dot">·</div>';
                echo '<div class="blog-post-reading-time">4 minute</div>';
                echo '<div class="blog-post-meta-dot">·</div>';
                echo '<div class="blog-post-author">Name Surname</div>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "Henüz hiçbir blog yazısı eklenmemiş.";
        }
        ?>
    </div>
</body>
</html>
