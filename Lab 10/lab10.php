<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 10</title>
</head>
<body>
    <?php require_once("validation.php")?> 
    <header>
        <h1>Lab 10</h1>
        <P>Formas usando PHP</P>    
    </header>
    <section>
        <aside>
            <h2>Registar alumno</h2>
                <p><span class="error">* Rellenar los siguientes campos *</span></p>
            <!--Para prevenir XSS-->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            Nombre completo: 
            <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>

            Correo electrónico: 
            <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            
            Edad: 
            <input type="number" name="edad" min="1" max="100" value="<?php echo $edad;?>">
            <span class="error">* <?php echo $edadErr;?></span>
            <br><br>

            Genéro: 
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Femenino") echo "checked";?> value="Femenino">Femenino
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Masculino") echo "checked";?> value="Masculino">Masculino
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>

            <input type="submit" name="submit" value="Enviar">  
            </form><br>
        </aside>
        <article>
            <?php echo info($edad, $email, $gender, $name,);?>
                <h2>¿Por qué es una buena práctica separar el controlador de la vista?</h2>
                <p>Es diferente validar a nivel interfaz que a nivel script</p>
                <h2>Aparte de los arreglos $_POST y $_GET, ¿qué otros arreglos están predefinidos en php y cuál es su función?</h2>
                <p>Usa GET para extraer información solamente
                <br>Usa POST para crear nuevos recursos y para mandar informacón al servidor
                <br>Usa PUT para actualizar un recurso existente
                <br>DELETE elimina recursos
                <br>HEAD para extraer información pero de manera parcial (encabezados y líneas de estado)
                <br>PATCH permite hacer una modificación parcial al recurso</p>
                <h2>Explora las funciones de php, y describe 2 que no hayas visto en otro lenguaje y que llamen tu atención.</h2>
                <p>var_dump — Muestra información sobre una variable
                <br>pack — Empaqueta información a una cadena binaria</p>
                <h2>¿Qué es XSS y cómo se puede prevenir?</h2>
                <p>Es una vulnerabilidad donde se inyectan secuencias de comandos del lado del cliente 
                en las páginas web que ven otros usuarios. Al usar echo htmlspecialchars($_SERVER["PHP_SELF"]);
                se eliminan caracteres especiales como < o > por lo que no se pueden ejecutar scripts.
      </article>
    </section>
</body>
</html>