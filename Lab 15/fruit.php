<?php

require_once "util.php";

if(isset($_POST['insert_fruit'])){
    if(isset($_POST['id']) && isset($_POST['id']) != "" &&
    isset($_POST['name']) && isset($_POST['name']) != "" &&
    isset($_POST['units']) && isset($_POST['units']) != "" &&
    isset($_POST['quantity']) && isset($_POST['quantity']) != "" &&
    isset($_POST['units']) && isset($_POST['price']) != "" &&
    isset($_POST['country']) && isset($_POST['country']) != ""){
        $id = htmlspecialchars($_POST['id']);
        $name = htmlspecialchars($_POST['name']);
        $units = htmlspecialchars($_POST['units']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $units = htmlspecialchars($_POST['units']);
        $country = htmlspecialchars($_POST['country']);
    }
    insert_fruit();
} 

function insert_fruit(){
    
    if (strlen($id) > 0 && strlen($name) > 0 && strlen($units) > 0 && strlen($quantity) > 0 && strlen($price) > 0 && strlen($country) > 0){
        if(is_numeric($id) && is_numeric($quantity) && is_numeric($price)){
            if(insertFruit($id, $name, $units, $quantity, $price, $country)) echo "Registro exitoso";
            else echo "Error: insertFruit";
        }
        else echo "Error: variable no numérica";
    }
    else echo "Error: llena todos los campos";
}

function delete_by_name(){
    
    if(deleteByName($name))
        echo "Fruta eliminada";
    else echo "Error al eliminar fruta";
}

function update_by_name(){
    
   if (strlen($id) > 0 && strlen($name) > 0 && strlen($units) > 0 && strlen($quantity) > 0 && strlen($price) > 0 && strlen($country) > 0){
        if(is_numeric($id) && is_numeric($quantity) && is_numeric($price)){
            if(updateByName($id, $name, $units, $quantity, $price, $country)) echo "Registro exitoso";
            else echo "Error: updateByName";
        }
        else echo "Error: variable no numérica";
    }
    else echo "Error: llena todos los campos";
}


?>