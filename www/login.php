<?php
require 'db.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$_POST['username']]);
    $user = $stmt->fetch();
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Neplatné přihlašovací údaje.";
    }
}
?>
<form method="POST">
  <input name="username" placeholder="Uživatelské jméno" required><br>
  <input type="password" name="password" placeholder="Heslo" required><br>
  <button type="submit">Přihlásit se</button>
</form>