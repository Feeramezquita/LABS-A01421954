<?php
    
    $nameErr = $emailErr = $genderErr = $edadErr = "";
    $name = $email = $gender = $edad = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
      if (empty($_POST["name"])) {
        $nameErr = "Se requiere nombre completo";
      } else {
        $name = test_input($_POST["name"]);
        // revisar que sean letras y espacios solamente
        if (!preg_match("/^[A-Z ]*$/",$name)) {
          $nameErr = "Sólo se permiten letras mayúsculas y espacios"; $name="";
        }
        // se permiten máximo 30 carácteres
        if (strlen($name) > 30) {
          $nameErr = "El nombre introducido excede los 30 caracteres permitidos"; $name="";
        }
      }
      
      if (empty($_POST["email"])) {
        $emailErr = "Se requiere un correo eléctronico";
      } else {
        $email = test_input($_POST["email"]);
        // validar el formato del correo
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "El formato del correo electrónico no es válido"; $email="";
        }
      }
        
      if (empty($_POST["edad"])) {
        $edadErr = "Porfavor ingrese su edad";
      } else {
        $edad = test_input($_POST["edad"]);
      }
    
      if (empty($_POST["gender"])) {
        $genderErr = "Se requiere seleccionar un género"; 
      } else {
        $gender = test_input($_POST["gender"]); 
      }
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    function info($numc, $email, $gender, $name) {
        echo "<table border='1'>
        <tr><td>Num Control: </td><td>".$numc."</td>
        <tr><td>Nombre : </td><td>".$name."</td>
        <tr><td>Correo : </td><td>".$email."</td>
        <tr><td>Género : </td><td>".$gender."</td>
        </tr><table>";
    }
?>