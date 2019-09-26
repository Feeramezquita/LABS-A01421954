<?php
    
    $nameErr = $emailErr = $genderErr = $numcErr = "";
    $name = $email = $gender = $numc = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
      if (empty($_POST["name"])) {
        $nameErr = "Se requiere nombre completo";
      } else {
        $name = test_input($_POST["name"]);
        // revisar que sean letras y espacios solamente
        if (!preg_match('/^[A-Z ]{1,50}$/',$name)) {
          $nameErr = "Sólo se permiten letras mayúsculas, espacios y 50 caracteres máximo"; $name="";
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
        
      if (empty($_POST["numc"])) {
        $numcErr = "Se requiere un número de control";
      } else {
        $numc = test_input($_POST["numc"]);
        // revisar que sean números
        if (!preg_match('/^[0-9]{10}$/', $numc) > 0) {  
          $numcErr = "El número de control debe ser un número positivo entero de 10 dígitos"; $numc="";
        }
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