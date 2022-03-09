<?php

	// SE UTILIZA LA LIBRERÍA DE MONGODB PARA PHP
	// PARA ELLO SE UTILIZA COMPOSER (https://getcomposer.org/) PARA SU INSTALACIÓN
	// COMPOSER ES UN GESTOR DE LIBRERÍAS PARA PHP
	// UNA VEZ INSTALADO COMPOSER, RECORDAR QUE LA LIBRERÍA DE MONGODB SE DEBE INSTALAR EN LA CARPETA RAÍZ DE TU PROYECTO
	// En mi caso para Windows en consola me sitúo en esa carpeta: cd C:\Apache24\htdocs
	// Y para instalar librería, ejecuto: composer require mongodb/mongodb

	// MANUALES DE LA LIBRERÍA DE MONGODB PARA PHP
	// https://www.php.net/manual/en/mongodb.tutorial.library.php
	// https://docs.mongodb.com/php-library/current/tutorial/install-php-library/


	// Cargar COMPOSER para ver la librería mongodb
	require 'vendor\autoload.php';

	// << añadir conexión local >>
    // Datos de la cadena de conexión
    $maquina = "localhost";
    $puerto = "27017";
	// Si se tiene usuario y contraseña se añaden
	// << añadir conexión local >>
	
	// Conexión sin bbdd
	$cadena_conexion = "mongodb://".$maquina.":".$puerto;
	// Si se tiene usuario y contraseña se añaden
	
	
	// Establecer la conexión a MongoDB 	
	$conexion = new MongoDB\Client($cadena_conexion);
    
    // Estado de la conexión
    if($conexion) {
        echo utf8_encode("Conexión realizada con éxito ");
		echo "<br />\n";
		
		// Si la bbdd no existe se crea
		$bbdd = $conexion->prueba;
		
		// Si la colección no existe se crea
		$coleccion = $bbdd->ejemplo_coleccion;
		
		$resultado = $coleccion->insertOne([
						"nombre" => "probando", 
						"apellidos" => "probando1 probando2"
					]);
		
		echo "Insertado documento con id '{$resultado->getInsertedId()}'";
		
    } else {
        echo utf8_encode("Error: No se ha podido realizar la conexión.");
    }

    // Cerrar la conexión
    // El driver de MongoDB para PHP está diseñado para dejar las conexiones abiertas, y no hay ningún método para cerrarlas.
	
?>