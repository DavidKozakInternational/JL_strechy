<?php
$host = 'localhost';
$db   = 'jlstrechy';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    $stmt = $pdo->prepare("INSERT INTO formular (jmeno, email, zprava) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['message']
    ]);

    echo "Děkujeme za zprávu!";
} catch (PDOException $e) {
    echo "Chyba databáze: " . $e->getMessage();
}
?>