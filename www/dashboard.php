<?php
require 'auth.php';
?>
<h1>Vítejte v administraci</h1>
<p>Jste přihlášeni jako: <?php echo $_SESSION['role']; ?></p>
<a href="logout.php">Odhlásit se</a>