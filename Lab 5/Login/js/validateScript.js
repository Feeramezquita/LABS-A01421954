function validar() {
    var pass = document.getElementById("pass").value;
    var val_pass = document.getElementById("val_pass").value;
    
    if(pass == val_pass) {
        alert(`Bienvenido`);
    } else {
        alert(`Las contraseñás no coinciden`);
    }
    
}
