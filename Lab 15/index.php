<?php

require_once "util.php";

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
   
    <title>Lab 15</title>
  </head>
  <body>  
    <header>
      <h1>Lab 16</h1>
      <p>Modificando tablas y SQL injection</p>
    </header>
    <section>
      <aside>
        <?php require_once("fruit.php");?>
        <h2>Agregar fruta</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
          Id <input type="text" name="id"><br>
          Name <input type="text" name="name"><br>
          Units <input type="text" name="units"><br>
          Quantity <input type="text" name="quantity"><br>
          Price <input type="text" name="price"><br>
          Country <input type="text" name="country"><br>
          <input type="submit" name="insert_fruit">
        </form><br>
        
        <h2>Frutas en inventario</h2>
        <?php
        showQuery(getFruits());
        ?>
        
      </aside>
      <article>
	    <h2>¿Por qué es una buena práctica separar el modelo del controlador?</h2>
	    <p>Es como el modelo vista-controlador de FIS, el controloador es la interaccion interfaz-modelo, modelo es la relacion controlador-entidad(tablas)</p>
	    <h2>¿Qué es SQL injection y cómo se puede prevenir?</h2>
	    <p>Es ejecutar instrucciones SQL desde el input  se pueden eliminar tablas, sacar contraseñas, entre otros. Se puede escapar caracteres o mejor aun ejecutar instrucciones preparadas</p>
      </article>
    </section>
  </body>
</html>