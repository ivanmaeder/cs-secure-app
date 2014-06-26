<?php

session_start();

unset($_SESSION["usuario_autorizado"]); //quitamos acceso

header("Location: http://localhost/");

?>
