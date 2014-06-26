<?php

function isUserValid($u, $p) {
    $valid = false;

    if ($u == "ivan" && $p == "1234" || $u == "alex" && $p = "ASDF") {
        $valid = true;
    }

    return $valid;
}

session_start();

$user    = "";
$message = "";

if (isset($_POST["user"], $_POST["pass"])) { //if form enviado
    $user = $_POST["user"];
    $pass = $_POST["pass"];

//  if ($user == "ivan" && $pass == "1234") {
    if (isUserValid($user, $pass)) {
        $_SESSION["usuario_autorizado"] = $user; //damos acceso

        header("Location: http://localhost/secure/welcome.php");
    }
    else {
        $message = "Usuario/contraseña no coinciden";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Aplicación segura</title>
  </head>
<body>
  <?= $message ?><br>
  <form action="" method="post">
    <input type="text" name="user" value="<?= $user ?>" placeholder="Usuario"><br>
    <input type="password" name="pass" placeholder="Contraseña"><br>
    <input type="submit" value="Entrar">
  </form>
</body>
</html>
