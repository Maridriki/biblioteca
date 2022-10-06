<?php
    require 'Libro.php';
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1>
<form action='nuevolibro.php' method='post'>
        <input type='submit'>
    </form>
        <thead>
            <th>ISBN</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Fecha Publicacion</th>
            <th>Controles</th>
        <thead>
        <tbody>
            <?php 
                $libros = $_SESSION['libros']; //crea el array local igual al array sesion
                foreach ($libros as $i => $libro) {
                    echo "<tr>";
                    echo "<td>" . $libro->getISBN() . "</td>";
                    echo "<td>" . $libro->getTitulo() . "</td>";
                    echo "<td>" . $libro->getAutor() . "</td>";
                    echo "<td>" . $libro->getFecha() . "</td>";

                    
                    echo
                    "<td>
                        <form action='modificacion.php' method='post'>
                            <input type='submit' value='Modificar'></button>
                            <input type='hidden' name='posicionLibro' value=".$i.">
                        </form>
                    </td>";
                    echo
                    "<td>
                        <form action='borrado.php' method='post'>
                            <input type='submit' value='Borrar'></button>
                            <input type='hidden' name='posicionLibro' value=".$i.">
                        </form>
                    </td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>