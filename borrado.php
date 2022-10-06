<?php
   require 'libros.php'; //inserta la clase
   session_start();

   $pos = $_POST['posicionLibro'];

   $libros = $_SESSION['libros'];

   unset($libros[$pos]);
   $_SESSION['libros'] = $libros;

   header("Location: http://localhost/app-php/biblioteca/libros.php"); //redirige
?>

