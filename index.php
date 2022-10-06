<?php
    session_start();
    if (!isset($_SESSION['libros'])){ //comprueba si existe en la sesion
        $_SESSION['libros'] = []; //crea el array en la sesion
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca</title>
    </head>
    <body>
        <h2>Biblioteca</h2>
        <br>
        <form action="libros.php" method="post">
            <input type="submit" name="Entrar" id="Entrar" value="Entrar">
        </form>
    </body>
</html>
