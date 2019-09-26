<?php
session_start();
if(!$_SESSION['name']) logout();
if(isset($_POST['logout'])) logout();
function logout(){
  session_unset();
  session_destroy();
  header("http://localhost/Lab%2012/Login/login.php");
}
?>
<!DOCTYPE HTML>  
<html>
  <head>
    <meta charset = "UTF-8">
    <title>Lab 12</title>
  </head>
  <body>  
    <?php require_once("formValidation.php");?>
    <header>
      <h1>Lab 12</h1>
      <p>Manejo de sesiones</p>
      <form method="post"> 
        <input type="submit" name="logout" value="Cerrar sesión">
      </form>
    </header>
    <section>
      <aside>
        <h2>Registrar Cliente</h2>
        <p>
          <span class="error">* Campos Obligatorios</span>
        </p>
        <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!--Para prevenir XSS-->
          Número de control: 
          <input type="text" name="numc" value="<?php echo $numc;?>">
          <span class="error">*<br><?php echo $numcErr;?></span>
          <br>
          Nombre completo: 
          <input type="text" name="name" value="<?php echo $name;?>">
          <span class="error">*<br><?php echo $nameErr;?></span>
          <br>
          Correo electrónico: 
          <input type="text" name="email" value="<?php echo $email;?>">
          <span class="error">*<br><?php echo $emailErr;?></span>
          <br>
          Genéro:
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Femenino") echo "checked";?> value="Femenino">Femenino
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Masculino") echo "checked";?> value="Masculino">Masculino
          <span class="error">*<br><?php echo $genderErr;?></span>
          <br>
          <input type="submit" name="submit" value="Registrar">  
        </form>
        <h2>Cargar imagenes en php</h2>
        <form action="loadimage.php" enctype="multipart/form-data" method="post">
          <input type="file" name="file"><br/>
          <input type="submit" name="Submit1" value="Subir"> <br/>
        </form>
      </aside>
      <article>
      <br>
        <?php echo info($numc, $email, $gender, $name); ?>

		    <h2>¿Por qué es importante hacer un session_unset() y luego un session_destroy()?</h2>
		    <p>uno destruye la sesion y el otro elimina las variables</p>
		    <h2>¿Cuál es la diferencia entre una variable de sesión y una cookie?</h2>
		    <p>Las cookies se guardan localmente y las sesiones en el servidor</p>
            <h2>¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?</h2>
		    <p>Al subir su foto la funcion revisa que no se sobrescriba el nombre</p>
            <h2>¿Qué es CSRF y cómo puede prevenirse?</h2>
		    <p>Es usar ingenieria social para hacer que un suario autenticado en una app web haga cosas que tu quieres, como que te de su contraseña o haga una transferencia</p>
      </article>
    </section>
  </body>
</html>