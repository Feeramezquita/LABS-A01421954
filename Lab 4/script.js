function script1() {
    var numero = prompt("Introduce un numero: "); 

    document.write("Sin potencia: ");
    for (i = 1; i<=numero; i++){
        document.write(i + " ");
    }
    
    document.write(`<br></br>`);

    document.write("Elevado al cuadrado: ");
    for (i = 1; i<=numero; i++){
        document.write(Math.pow(i, 2) + " ");
    }
    
    document.write(`<br></br>`);

    document.write("Elevado al cubo: ");
    for (i = 1; i<=numero; i++){
        document.write(Math.pow(i, 3) + " ");
    }
    
    document.write(`<br></br>`);
}

function script2() {
    
    // Genera numero random del 0 al 10 
    var a = Math.floor(Math.random() * 10); 
    var b = Math.floor(Math.random() * 10);
    
    var resultado = prompt(`Introduce la suma de: ${a} + ${b}`); 
    
    var res = a + b;

    if (res == resultado){
        document.write(`la suma esta correcta`);
    } else {
        document.write(`la suma esta incorrecta`);
    }

    var myVar = setInterval(myTimer, 1000);
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}

function script3() {
    var numero = prompt(`Tamaño del arreglo: `);
        var array = [];
        
        var x = 0, y = 0, z = 0;

        for(let i = 0; i<numero; i++){
        array.push(prompt(`Enter a number: `));
        console.log(array[i]);  //imprimir en consola
        } 

        for(let i=0; i<numero; i++){
            if(array[i] < 0){
                x++;
            } else if(array[i] > 0){ 
                y++;
            } else if(array[i] == 0){
                z++;
            } 
        }

        document.write(`El numero de elementos positivos son: ${y} <br>`);
        document.write(`El numero de elementos negativos son: ${x} <br>`);
        document.write(`El numero de elementos igual a cero son: ${x}`);

}

function script4() {
    var columna = prompt(`Ingresa el numero de columnas: `);
        var filas = prompt(`Ingresa el numero de filas: `);
        var myArray = [[], []];
        
        creandoArray();
        promedio();

        
        function creandoArray() { 
 
            // expandir todas las columnas y filas 
            for(let i = 0; i < filas; i++) {
                for(let j =  myArray[i].length; j < columna; j++){
                    // Agregando Valores desde prompt al arreglo
                    myArray[i].push(prompt(`Enter a number: `)); 
                }
            }
        }


        function promedio(){
            for(let i = 0; i < filas; i++){
                var suma = 0;
                for(let j = 0; j < columna; j++) {
                    var aux = parseInt(myArray[i][j], 10); // Convierte String en Integers
                    suma = suma + aux; 
                }
                document.write(`La fila numero: ${i} tiene un promedio de ${suma/columna} <br>`); 
            }
        }
}

function script5() {
    var str = prompt(`Introduce un numero o palabra: `);
    reverseString();

    function reverseString() {
        // Step 1. Use the split() method to return a new array
        var splitString = str.split("");
        // Step 2. Use the reverse() method to reverse the new created array
        var reverseArray = splitString.reverse();
        // Step 3. Use the join() method to join all elements of the array into a string
        var joinArray = reverseArray.join("");
        //Step 4. Print with an alert the reversed string
        alert(joinArray);
    }
}

function script6() {
    var cancion = prompt(`Ingresa el nombre de la cancion que desea reproducir: `);
        const musica = {
            reproducir: function(cancion) {
              console.log(`Canción cargada utilice los botones para reproducir `);  
            },
        }

        musica.reproducir(cancion);

        document.getElementById("myButton").onclick = function () {
            console.log(`Playing: ${cancion}`);
        };

        document.getElementById("myButton2").onclick = function () {
            console.log(`Pausa...`);
        };
}

