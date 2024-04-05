<?php
// Memeriksa apakah email dan password diset sebelum menyimpannya ke dalam cookie
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
    // Ambil email dan password dari session
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    // Set cookie untuk email dan password dengan masa berlaku 24 jam
    setcookie('remembered_email', $email, time() + 86400, '/');
    setcookie('remembered_password', $password, time() + 86400, '/');
}

// Hancurkan sesi
session_unset();
session_destroy();

// Redirect ke halaman login setelah logout berhasil
header("Location: InputData.php");
exit();
?>
