<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // Redireccionar a la página de inicio de sesión después de cerrar sesión
?>