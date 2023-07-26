<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>
<?php
    // Veritabanı bağlantısı ve veri ekleme işlemleri
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $subject = $_POST["subject"];
        
        $databaseFile = 'C:\sqlitedbs\blog.db'; 
        $dsn = 'sqlite:' . $databaseFile;

        try {
            $connection = new PDO($dsn);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query = "CREATE TABLE IF NOT EXISTS contacts (
                        id INTEGER PRIMARY KEY AUTOINCREMENT,
                        name TEXT NOT NULL,
                        email TEXT NOT NULL,
                        message TEXT NOT NULL,
                        subject TEXT NOT NULL
                    )";
            $connection->exec($query);

            $query = "INSERT INTO contacts (name, email, message, subject) VALUES (:name, :email, :message, :subject)";
            $statement = $connection->prepare($query);
            $statement->bindParam(':name', $name);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':message', $message);
            $statement->bindParam(':subject', $subject);
            $statement->execute();

            echo "Mesajınız başarıyla gönderildi!";
        } catch (PDOException $e) {
            echo "Veritabanına kaydedilirken hata oluştu: " . $e->getMessage();
        }
    }
    ?>
    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                        <a href="index.html">Blog Title</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="indexhome.php">Home</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="contact.html" style="opacity: 100%;">Contact</a>
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

    <div class="contact-wrapper">
        <div class="container mt-4">
            <div class="contact-container">
                <div class="contact-top-title">
                    Contact Form
                </div>
                <div class="contact-form">
                    <form action="#" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="fullname-input">
                                    <input type="text" name="name" id="" placeholder="Full Name" >
                                </div>
                                <div class="email-input">
                                    <input type="email" name="email" id="" placeholder="Email Address">
                                </div>
                                <div class="subject-input">
                                    <input type="text" name="subject" id="" placeholder="Subject">
                                </div> 
                                <div class="message-input">
                                    <textarea name="message" id="" cols="60" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="button-input">
                                    <button type="submit">Send Message</button>
                                </div>           
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
        <hr>
        </div>
        <div class="container text-center mt-5 mb-5">
            <div class="copyright">
                © 2021 All rights reserved.
            </div>
        </div>

    </footer>

</body>

</html>