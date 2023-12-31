<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                        <a href="index.html">Tesla'nın Bloğu</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="indexhome.php" style="opacity: 100%;">Home</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="admin_paneli.html">Yönetim Paneli</a>
                            </li>
                            <li>
                                <a href="kullanici_sayfasi.html">Kullanıcı</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
                                require_once 'blog_operations.php';

                                $blogPosts = getBlogPosts();

                                if (!empty($blogPosts)) { 
                                    foreach ($blogPosts as $post) { ?>
    <div class="person-info-wrapper">
        <div class="container">
            <div class="person-info-container">
                <div class="row">
                    <div class="person-photo col-md-5">
                        <img src="assets/img/profile.jpg" alt="" srcset="">
                    </div>
                    <div class="person-info-text col-md-7">
                        <div class="person-job">
                            Web Developer
                        </div>
                        <div class="person-name">
                            <h1>Buse Berren ÜNAL</h1>
                        </div>
                        <div class="person-text">
                            2.sınıf Bilgisayar Mühendisliği öğrencisiyim.Şu anda HTML,CSS,JS,PHP üzerine çalışıyorum.
                        </div>
                        <div class="person-social-link">
                            <ul>
                                <li>
                                    <a href="#"><i class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-linkedin-1"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-github"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:#"><i class="flaticon-mail-1"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-post-wrapper">
        <div class="container">
            <div class="blog-post-container">
                <div class="blog-post-top-title">
                    Blog
                </div>
                <div class="blog-post-row">
                    <div class="row">
                        <div class="blog-post col-md-6">
                            <a href="blog-text.php">
                                <div class="blog-post-thumbnail">
                                    <img src="assets/img/blog.png" alt="" srcset="">
                                </div>
                                <div class="blog-post-text">
                                    <div class="blog-post-title">
                                        <?php echo "<h2>" . $post['title'] . "</h2>"; ?>
                                    </div>
                                    <div class="blog-post-description">
                                        <?php echo "<p class='blog-content'>" . $post['content'] . "</p>"; ?>
                                    </div>
                                    <div class="blog-post-meta-info">
                                        <ul>
                                            <li>
                                                <div class="blog-post-date">
                                                     <?php echo "<p class='date'>Oluşturulma Tarihi: " . $post['created_at'] . "</p>"; ?>
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-reading-time">
                                                    4 minute
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-author">
                                                    Buse Berren ÜNAL
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                

                            
                        </div>
                        <div class="blog-post col-md-6">
                            <a href="blog-text.html">
                                <div class="blog-post-thumbnail">
                                    <img src="assets/img/blog.png" alt="" srcset="">
                                </div>
                                <div class="blog-post-text">
                                    <div class="blog-post-title">
                                        <?php echo "<h2>" . $post['title'] . "</h2>"; ?>
                                    </div>
                                    <div class="blog-post-description">
                                        <?php echo "<p class='blog-content'>" . $post['content'] . "</p>"; ?>
                                    </div>
                                    <div class="blog-post-meta-info">
                                        <ul>
                                            <li>
                                                <div class="blog-post-date">
                                                     <?php echo "<p class='date'>Oluşturulma Tarihi: " . $post['created_at'] . "</p>"; ?>
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-reading-time">
                                                    4 minute
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-author">
                                                    Buse Berren ÜNAL
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                

                            
                        </div>
                        <div class="blog-post col-md-6">
                            <a href="blog-text.html">
                                <div class="blog-post-thumbnail">
                                    <img src="assets/img/blog.png" alt="" srcset="">
                                </div>
                                <div class="blog-post-text">
                                    <div class="blog-post-title">
                                        <?php echo "<h2>" . $post['title'] . "</h2>"; ?>
                                    </div>
                                    <div class="blog-post-description">
                                        <?php echo "<p class='blog-content'>" . $post['content'] . "</p>"; ?>
                                    </div>
                                    <div class="blog-post-meta-info">
                                        <ul>
                                            <li>
                                                <div class="blog-post-date">
                                                     <?php echo "<p class='date'>Oluşturulma Tarihi: " . $post['created_at'] . "</p>"; ?>
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-reading-time">
                                                    4 minute
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-author">
                                                    Name Surname
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                

                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }
                                } else {
                                    echo "Henüz hiçbir blog yazısı eklenmemiş.";
                                }
                                ?>      
    <footer>
        <div class="container-fluid mt-5"></div>
            <hr>
        </div>
        <div class="container text-center mt-5 mb-5" >
            <div class="copyright">
                © 2021 All rights reserved.
            </div>   
        </div>
        
    </footer>

</body>

</html>