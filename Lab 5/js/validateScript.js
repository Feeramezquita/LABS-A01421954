function validar() {
    var user = document.getElementById("usuario").value;
    var pass = document.getElementById("password").value;
    
    if(user == "fer" && pass == "12345") {
        alert(`Usuario y contraseña validos`);
        return true;
    } else {
        alert(`Verifique sus datos`);
        return false;
    }
    
}