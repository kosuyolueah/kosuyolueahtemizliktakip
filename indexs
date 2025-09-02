<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="stylesheet" href="indexxs.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <br><img src="W-Resimler/Koşuyolu_Yüksek_İhtisas_EAH.-removebg-preview (2)2.png" alt="Logo" width="100" height="100"></br>
        </div>
        
        <br><h1>TEMİZLİK KONTROL FORMU</h1>
        <h1>Personel Kullanıcı Girişi</h1>
        <form name="contact-form" id="contact-form" method="POST" action="login.php">
            <input type="text" id="username" name="username" placeholder="Kullanıcı ID Giriniz" required>
            <br>
            <input type="password" id="password" name="password" placeholder="Şifre Giriniz" required>
            <br>
            <button type="submit" id="submit">Giriş</button>
            <div id="errorMessage" style="color:red;">
                <?php if (isset($_GET['error'])) { echo htmlspecialchars($_GET['error']); } ?>
            </div>
        </form>
        
    </div>
</body>
</html>
