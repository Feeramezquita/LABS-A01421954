function store(){ // operaciones iva
	var p1 = document.getElementById("prod1").value;
	var p2 = document.getElementById("prod2").value;
	var p3 = document.getElementById("prod3").value;
	var iva = document.getElementById("iva").value;
	p1 *= 10;
	p2 *= 20;
	p3 *= 13.5;
	var sub = p1 + p2 + p3;
	iva /= 100;
	iva += 1;
	var total = sub * iva;
	var pago = "Soda: $" + p1 + "<br>" +
			   "Sandwich: $" + p2 + "<br>" +
			   "Papas: $" + p3 + "<br>" +
			   "Subtotal: $" + sub + "<br>" +
			   "Total: $" + total.toFixed(2);
	document.getElementById("recibo").innerHTML = pago;
}

function crypt(){   // encriptar texto
	var txt = document.getElementById("txt").value;
	var crypt = "";
	for (var i = 0; i < txt.length; i++) {
		var char = txt.charCodeAt(i) + 13;
		char = "" + String.fromCharCode(char);
		crypt += char;
	}
	document.getElementById("coded_txt").innerHTML = crypt;
}

function decrypt(){ // desincriptar texto
	var txt = document.getElementById("txt").value;
	var crypt = "";
	var i = 0;
	for (var i = 0; i < txt.length; i++) {
		var char = txt.charCodeAt(i) - 13;
		char = "" + String.fromCharCode(char);
		crypt += char;
	}
	document.getElementById("coded_txt").innerHTML = crypt;
}