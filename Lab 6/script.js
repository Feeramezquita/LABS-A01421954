function allowDrop(ev) {
    ev.preventDefault();
  }

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }

  setTimeout(function(){ alert("Bienvenido a mi Repo"); }, 1000);

function validar(){
	var pass = document.getElementById("pass").value;
	var ver_pass = document.getElementById("ver_pass").value;
		if(pass === "" || ver_pass === "")
			document.getElementById("pass_retro").innerHTML = "Por favor llene ambos campos";
		else if(pass === ver_pass)
			document.getElementById("pass_retro").innerHTML = "Las contraseñas son iguales";
		else
			document.getElementById("pass_retro").innerHTML = "Las contraseñas no coinciden";
}

function instrucciones(){
	document.getElementById("pass_retro").innerHTML = "Ambas contraseñas deben ser iguales, tenga cuidado al escribirlas";
	document.getElementById("pass_retro").style.color = "purple";
}
