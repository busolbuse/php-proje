<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon/flaticon.css">
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
                                <a href="about.html" style="opacity: 100%;">About</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="admin_paneli.html">Yönetim Paneli</a>
                            </li>

                        </ul>
                    </div>
                    <div class="about-text-title">
                        Contact Kısmından Gönderilenler!
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
// Veritabanı bağlantısı
$databaseFile = 'C:\sqlitedbs\blog.db';
$dsn = 'sqlite:' . $databaseFile;

try {
    $connection = new PDO($dsn);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Verileri çekme işlemi
    //burada veri tabanından verileri çekmeye çalışıyorum.
    $query = "SELECT * FROM contacts";
    $statement = $connection->query($query);
    $contacts = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Veritabanına erişilirken hata oluştu: " . $e->getMessage();
}

//verileri yazacağım tabloyu belirlemeye çalışıyorum.

if (!empty($contacts)) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Subject</th></tr>";
    foreach ($contacts as $contact) {
        echo "<tr>";
        echo "<td>" . $contact['id'] . "</td>";
        echo "<td>" . $contact['name'] . "</td>";
        echo "<td>" . $contact['email'] . "</td>";
        echo "<td>" . $contact['message'] . "</td>";
        echo "<td>" . $contact['subject'] . "</td>";
        echo "</tr>";
        
    }
    echo "</table>";
} else {
    echo "Henüz hiçbir iletişim bilgisi gönderilmemiş.";
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

