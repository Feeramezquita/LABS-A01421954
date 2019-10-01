<?php

function conectDb() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbname";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $con;
}

function closeDb($mysql) {
     mysqli_close($mysql);
}

function getFruits() {
    $conn = conectDb();
    $sql = "SELECT name, units quantity, price, country FROM Fruit";
    $result = mysqli_query($conn, $sql);
    closeDb($conn);

    return $result;
}

function getFruitsByName($fruit_name){
    $conn = conectDb();
    $sql = "SELECT id, name, units, quantity, price, country FROM Fruit WHERE name LIKE '%".$fruit_name."%'";
    $result = mysqli_query($conn, $sql);
    $closeDb($conn);

    return $result;
}
function getCheapestFruits($cheap_price){
    $conn = conectDb();
    $sql = "SELECT id, name, units, quantity, price, country FROM Fruit WHERE price <= '".$cheap_price."'";
    $result = mysqli_query($conn, $sql);
    $closeDb($conn);

    return $result;
}

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





