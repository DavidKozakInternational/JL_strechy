<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $password]);
    echo "Registrace úspěšná. <a href='login.php'>Přihlásit se</a>";
}
?>
<form method="POST">
  <input name="username" placeholder="Uživatelské jméno" required><br>
  <input type="email" name="email" placeholder="E-mail" required><br>
  <input type="password" name="password" placeholder="Heslo" required><br>
  <button type="submit">Registrovat</button>
</form>