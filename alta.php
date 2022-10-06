<?php
   require 'libros.php'; //inserta la clase
   session_start();
   $libro = new libro($_POST['isbn'], $_POST['titulo'], $_POST['autor'],$_POST['fecha']);
   //crea el  nuevo libro, pasandole los valores del nuevolibro.php

   array_push($_SESSION['libros'],$libro); //meter un libro al array existente
   
   header("Location: http://localhost/app-php/biblioteca/libros.php"); //redirige
?>

