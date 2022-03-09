<?php

	// SE UTILIZA LA LIBRER�A DE MONGODB PARA PHP
	// PARA ELLO SE UTILIZA COMPOSER (https://getcomposer.org/) PARA SU INSTALACI�N
	// COMPOSER ES UN GESTOR DE LIBRER�AS PARA PHP
	// UNA VEZ INSTALADO COMPOSER, RECORDAR QUE LA LIBRER�A DE MONGODB SE DEBE INSTALAR EN LA CARPETA RA�Z DE TU PROYECTO
	// En mi caso para Windows en consola me sit�o en esa carpeta: cd C:\Apache24\htdocs
	// Y para instalar librer�a, ejecuto: composer require mongodb/mongodb

	// MANUALES DE LA LIBRER�A DE MONGODB PARA PHP
	// https://www.php.net/manual/en/mongodb.tutorial.library.php
	// https://docs.mongodb.com/php-library/current/tutorial/install-php-library/


	// Cargar COMPOSER para ver la librer�a mongodb
	require 'vendor\autoload.php';

	// << a�adir conexi�n local >>
    // Datos de la cadena de conexi�n
    $maquina = "localhost";
    $puerto = "27017";
	// Si se tiene usuario y contrase�a se a�aden
	// << a�adir conexi�n local >>
	
	// Conexi�n sin bbdd
	$cadena_conexion = "mongodb://".$maquina.":".$puerto;
	// Si se tiene usuario y contrase�a se a�aden
	
	
	// Establecer la conexi�n a MongoDB 	
	$conexion = new MongoDB\Client($cadena_conexion);
    
    // Estado de la conexi�n
    if($conexion) {
        echo utf8_encode("Conexi�n realizada con �xito ");
		echo "<br />\n";
		
		// Si la bbdd no existe se crea
		$bbdd = $conexion->prueba;
		
		// Si la colecci�n no existe se crea
		$coleccion = $bbdd->ejemplo_coleccion;
		
		$resultado = $coleccion->insertOne([
						"nombre" => "probando", 
						"apellidos" => "probando1 probando2"
					]);
		
		echo "Insertado documento con id '{$resultado->getInsertedId()}'";
		
    } else {
        echo utf8_encode("Error: No se ha podido realizar la conexi�n.");
    }

    // Cerrar la conexi�n
    // El driver de MongoDB para PHP est� dise�ado para dejar las conexiones abiertas, y no hay ning�n m�todo para cerrarlas.
	
?>