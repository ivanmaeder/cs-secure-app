<?php

session_start();
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
exit();
*/
$user = "";

if (!isset($_SESSION["usuario_autorizado"])) { //es solo esto
    header("Location: http://localhost/");
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Página welcome.php</title>
  </head>
<body>
  <h1>¡Bienvenido!</h1>
  <p>Esta es una página con acceso restringido.</p>
  <ul>
    <li><a href="welcome.php">Welcome</a></li>
    <li><a href="config.php">Config</a></li>
    <li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Salir</a></li>
  </ul>
</body>
</html>
