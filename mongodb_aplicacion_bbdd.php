<?php

    // Nota: El código HTML está "incrustado" en el código PHP

	// Cargar COMPOSER para ver la librería mongodb
	require 'vendor\autoload.php';
	
	// ------------ CONEXIÓN -------------------------------------------------------------------
	// Sustituir por la cadena de conexión de local y de la nube, según el caso
    // Datos de la cadena de conexión
    $maquina = "02masw-shard-00-00.sy2yr.mongodb.net:27017"; // cambiar por localhost si local o la máquina que indica MongoDB Atlas si la nube
    $usuario = "wforero"; // cambiar por tu usuario
    $contrasenya = "S4n74f3c4mp30n"; // cambiar por tu contraseña
	
	// Conexión sin bbdd
	$cadena_conexion = "mongodb+srv://".$usuario.":".$contrasenya."@".$maquina."/"."?retryWrites=true&w=majority";

    // Establecer la conexión a MongoDB
    $conexion = new MongoDB\Client($cadena_conexion); 

    // Estado de la conexión
    if(!$conexion) {
		// Usar utf8_encode para que se muestren bien los caracteres con acentos y eñes (codifica un string ISO-8859-1 a UTF-8)
        echo utf8_encode("Error: No se ha podido realizar la conexión.");
        exit;
    }

	// BBDD
	$db = $conexion->bbdd_prueba;
			
	// COLECCIÓN
	$coleccion = $db->ejemplo_coleccion;

	// ------------ CONSULTAS -------------------------------------------------------------------
    //<<<añadir consultaBASICA1>>>
    // Consulta BASICA 1
    function consulta_basica1($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros métodos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta básica 1");
            exit;
        }

		//<<<añadir mostrar consultaBASICA1>>>
	    echo "<p>===================<br/>";
        echo utf8_encode("CONSULTA BÁSICA 1<br/>");
	    echo "===================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// Añadir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<añadir mostrar consultaBASICA1>>>	
	}
    // Realizar consultaBASICA1
    consulta_basica1($coleccion);	
	//<<<añadir consultaBASICA1>>>

    //<<<añadir consultaBASICA2>>>
    // Consulta BASICA 2
    function consulta_basica2($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros métodos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta básica 2");
            exit;
        }

		//<<<añadir mostrar consultaBASICA2>>>
	    echo "<p>===================<br/>";
        echo utf8_encode("CONSULTA BÁSICA 2<br/>");
	    echo "===================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// Añadir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<añadir mostrar consultaBASICA2>>>	
	}
    // Realizar consultaBASICA2
    consulta_basica2($coleccion);	
	//<<<añadir consultaBASICA2>>>
	
    //<<<añadir consultaAVANZADA1>>>
    // Consulta AVANZADA 1
    function consulta_avanzada1($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros métodos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta avanzada 1");
            exit;
        }

		//<<<añadir mostrar consultaAVANZADA1>>>
	    echo "<p>=====================<br/>";
        echo utf8_encode("CONSULTA AVANZADA 1<br/>");
	    echo "=====================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// Añadir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<añadir mostrar consultaAVANZADA1>>>	
	}
    // Realizar consultaAVANZADA1
    consulta_avanzada1($coleccion);	
	//<<<añadir consultaAVANZADA1>>>

    //<<<añadir consultaAVANZADA2>>>
    // Consulta AVANZADA 2
    function consulta_avanzada2($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros métodos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta avanzada 2");
            exit;
        }

		//<<<añadir mostrar consultaAVANZADA2>>>
	    echo "<p>=====================<br/>";
        echo utf8_encode("CONSULTA AVANZADA 2<br/>");
	    echo "=====================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// Añadir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<añadir mostrar consultaAVANZADA2>>>	
	}
    // Realizar consultaAVANZADA2
    consulta_avanzada2($coleccion);	
	//<<<añadir consultaAVANZADA2>>>
	
	
    // Cerrar la conexión
    // El driver de MongoDB para PHP está diseñado para dejar las conexiones abiertas, y no hay ningún método para cerrarlas.

?>