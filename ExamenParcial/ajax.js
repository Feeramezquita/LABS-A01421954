function loadUsuarios() {
    // AJAX request
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tabla_usuarios").innerHTML = this.responseText;
        } else {
            document.getElementById("tabla_usuarios").innerHTML = "error";
        }
    };

    xhttp.open("POST", "getZombies.php", true);
    xhttp.send();
}
