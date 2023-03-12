<?php
session_start(); // Oturumu başlat

// Kullanıcı adı ve şifre değişkenleri
$username = "kullaniciadi";
$password = "sifre";

// Eğer form gönderildiyse
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Kullanıcı adı ve şifre doğruysa
  if ($_POST['username'] == $username && $_POST['password'] == $password) {
    // Oturum değişkenlerini ayarla
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    // Ana sayfaya yönlendir
    header("location: ana_sayfa.php");
    exit;
  } else {
    // Kullanıcı adı veya şifre yanlış ise hata mesajı göster
    $error = "Kullanıcı adı veya şifre yanlış.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Giriş Yap</title>
</head>
<body>
  <?php
  // Hata mesajı varsa göster
  if (isset($error)) {
    echo "<p>$error</p>";
  }
  ?>
  <form method="post" action="">
    <label>Kullanıcı adı:</label><br>
    <input type="text" name="username"><br>
    <label>Şifre:</label><br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Giriş">
  </form>
</body>
</html>
