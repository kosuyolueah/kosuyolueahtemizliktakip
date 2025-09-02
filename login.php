<?php
// Basit kullanıcı adı ve şifre kontrolü (gerçek uygulamada veritabanı kullan)

// Sabit kullanıcı ve şifre (şifre hashlenebilir)
$valid_username = 'admin';
$valid_password = '123456'; // Gerçek uygulamada hash'li olmalı!

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        // Giriş başarılı, yönlendirme
        header("Location: birimler.html");
        exit;
    } else {
        // Hatalı giriş, hata mesajı ile login sayfasına dön
        $error = "Kullanıcı adı veya şifre hatalı.";
        header("Location: index.html?error=" . urlencode($error));
        exit;
    }
} else {
    // POST değilse index sayfasına yönlendir
    header("Location: index.html");
    exit;
}
?>
