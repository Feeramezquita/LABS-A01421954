<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Lab 9</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    </head>
    <body>
                <h1>LAB 9: JAVASCRIPT</h1>

				<?php
					require_once("functions.php");
					echo promedio(array(1,2,3));
					echo mediana(array(1,1,4,6,5));
					echo lista(array(1,7,8,6,5));
					echo tabla(8);
					echo fibonacci(12);
				?>
			</aside>
		  <article>
		  	<h2>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</h2>
		    
		    <p>
		    	Muestra información sobre la configuración de PHP<br>
		    	Muestra gran cantidad de información sobre el estado actual de PHP. Incluye información sobre las opciones de compilación y extensiones de PHP, versión de PHP, información del servidor y entorno (si se compiló como módulo), entorno PHP, versión del OS, rutas, valor de las opciones de configuración locales y generales, cabeceras HTTP y licencia de PHP.<br>
		    	Como cada sistema se instala diferente phpinfo() se usa comúnmente para revisar opciones de configuración y variables predefinidas disponibles en un sistema dado<br>
		    	phpinfo() también es una valiosa herramienta de depuración ya que contiene todos valores EGPCS (Environment, GET, POST, Cookie, Server).
		    </p>
		    <h2>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</h2>
		    
		    <p>
		    	Sin tener que instalar un servidor de Windows, que es bastante costoso, puede instalar una de las varias aplicaciones de terceros a las que podrá acceder el entorno de su servidor.
				Algunas de estas aplicaciones son XAMPP y WAMP. Y todas estas aplicaciones de terceros hacen lo mismo: instalar Apache, MySQL y PHP dentro del programa.<br>
				XAMPP es mi favorito personal, que puede descargar en www.apachefriends.org , ya que es multiplataforma. XAMPP significa multiplataforma, Apache, MariaDB, PHP, Perl . Al instalar XAMPP, es muy sencillo (y en caso de que necesite saberlo, puede instalar Laravel con XAMP ). Solo sigue golpeando al lado y acepta todo. Sin embargo, para el entorno de desarrollo, debe instalar las herramientas de desarrollo que solo cambian el php.iniarchivo para permitir que se muestren los mensajes de error. Si no se muestran los mensajes de error, vaya c:xampp/php/y abra el php.iniarchivo, y asegúrese de que todo lo que se encuentra bajo el manejo y registro de errores (línea 463) se haya encendido, luego reinicie su servidor Apache.<br>
				Una vez que XAMPP haya terminado de instalarse, abrirá un panel de control que puede utilizar para iniciar, detener y configurar los servicios.<br>
				Una vez que hayas instalado XAMPP y lo tengas en marcha, webroot se encuentra en c:xampp/htdocs/este lugar donde creas tu site/application. Para ver su trabajo, simplemente ingrese localhost en la barra de direcciones de su navegador e inmediatamente se iniciará el archivo de índice en htdocs.
		    </p>
		    <h2>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</h2>
		    
		    <p>
		    	Cuando nosotros pinchamos sobre un enlace hipertexto, en realidad lo que pasa es que establecemos una petición de un archivo HTML residente en el servidor (un ordenador que se encuentra continuamente conectado a la red) el cual es enviado e interpretado por nuestro navegador (el cliente). 
		    </p>
		  </article>
		</section>
	</body>
</html>
