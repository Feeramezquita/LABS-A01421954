<?php
require_once 'util.php';
function showQuery($result){
    if(mysqli_num_rows($result) > 0){
        echo '<table border="1"><tr>';
        echo '<td>'.'ID'.'</td>';
        echo '<td>'.'Nombre'.'</td>';
        echo '<td>'.'Unidades'.'</td>';
        echo '<td>'.'Cantidad'.'</td>';
        echo '<td>'.'Precio'.'</td>';
        echo '<td>'.'País'.'</td>';
        echo '</tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['units'].'</td>';
            echo '<td>'.$row['quantity'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td>'.$row['country'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lab 14</title>
</head>
<body>
<header>
    <h1>Lab 14</h1>
    <p>Queries con mysql y php</p>
</header>
<section>
    <aside>
        <h2>GetFruits</h2>
        <?php
        showQuery(getFruits());
        ?>
    </aside>
    <article>
        <h2>¿Qué es ODBC y para qué es útil?</h2>
        <p>Open Data Base Conectivity, permite acceder a cualquier dato desde cualquier aplicación, sin importar qué sistema de gestión de bases de datos (DBMS) almacene los datos.</p>
        <h2>¿Qué es SQL Injection?</h2>
        <p>Enviar instrucciones SQL de forma maliciosa y malintencionada dentro del código SQL programado para la manipulación de bases de datos</p>
        <h2>¿Qué técnicas puedes utilizar para evitar ataques de SQL Injection?</h2>
        <p>Escapar los caracteres especiales utilizados en las consultas SQL con \, verificar siempre los datos que introduce el usuario, RBAC</p>
    </article>
</section>
</body>
</html>
