<?php
$servername = "mysql1008.mochahost.com";
$username = "dawbdorg_1421954";
$password = "1421954";
$db = "dawbdorg_A01421954";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// obtener Estados
$sql = "call ObtenerEstados();";
$count = 0;
if ($result = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $arrEstados[$count][0] = $row['ID'];
        $arrEstados[$count][1] = $row['Nombre'];
        $count++;
    }
} else {
    echo "error";
}


// POSTS
if (isset($_POST['submit_name'])) {
    $conn = new mysqli($servername, $username, $password, $db);
    $addName = 'call AgregarZombie("' . $_POST['name_input'] . '", 1);';
    if (mysqli_query($conn, $addName)) {
        echo '<script>loadUsuarios();</script>';
    } else {
        echo '<script language="javascript">alert("Error agregando a ' . $_POST['name_input'] . '");</script>';
    }
}

?>

<!DOCTYPE html>
<html>
<html lang="es-mx">

<head>
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="ajax.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Examen de segundo parcial</title>
</head>
<style>
    .modal-content {
        height: 400px;
    }

    h4 {
        padding-bottom: 20px;
    }
</style>

<body>
    <header></header>

    <main>

        <div class="navbar-fixed">
            <nav>
                <div class="blue darken-1 nav-wrapper">
                    <a href="index.php" class="brand-logo"><acronym title="Desarrollo de aplicaciones web y Bases de datos">Segundo parcial: DAW-BD</acronym></a>
                    <ul id="nav-mobile" class="right">
                        <li><a href="#">Consultas</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container">

            <h3>Zombis</h3>

            <a class="right btn-large waves-effect waves-light red btn-floating btn modal-trigger" href="#modal2"><i class="material-icons">add</i></a>
            <!-- Modal Structure -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h4>Añadir Zombie</h4>
                    <form action="" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="nombre" id="first_name" type="text" class="validate" name="name_input">
                                <label for="first_name">Nombre del Zombie</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s3">
                                <button class="btn waves-effect waves-light" type="submit" name="submit_name">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <table class="highlight">
                <thead>
                    <tr>
                        <th>Zombie</th>
                        <th>Estados</th>
                    </tr>
                </thead>
                <tbody id="tabla_usuarios">

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Registrar Estado</h4>
                            <form action="" method="post">
                                <div class="input-field col s12">
                                    <select name="opcion_estado">
                                        <option value="" disabled selected>Escoja el estado</option>
                                        <?php
                                        for ($i = 0; $i < $count; $i++) {
                                            echo "<option value = '" . $arrEstados[$i][0] . "'> " . $arrEstados[$i][1] . "</option>";
                                        }
                                        ?>
                                    </select>

                                    <label>Estado del Zombie</label>
                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="submit_registro">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <script>
                        loadUsuarios();
                    </script>
                </tbody>
            </table>

        </div>
    </main>


    <footer class="blue darken-1 page-footer">
        <div class="container">
            <p class="grey-text text-lighten-4">Powered by <a href="http://materializecss.com/" target="_blank" class="white-text text-lighten-4">Materialize</a>.</p>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2019 Escuela de Ingeniería y Ciencias - Tecnológico de Monterrey en Querétaro.
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.modal').modal();
        });

        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>
</body>

</html>