<?php
session_start();
if (isset($_POST['uname'])) {
  $_SESSION['name']=$_POST['uname'];
  header("location: http://localhost/Lab%2012/Form/form.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 12 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="document.getElementById('id01').style.display='block'" style='width:auto;'>

<div id="id01" class="modal">
  <form class="modal-content animate" method="post">
    <div class="container">
      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Ingrese su usuario" name="uname" required>
      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingrese su contraseña" name="psw" required>
      <button type="submit">Login</button>
    </div>
  </form>
</div>

<script src=""></script>

</body>
</html>