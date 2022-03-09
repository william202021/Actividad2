<?php

    // Nota: El c�digo HTML est� "incrustado" en el c�digo PHP

	// Cargar COMPOSER para ver la librer�a mongodb
	require 'vendor\autoload.php';
	
	// ------------ CONEXI�N -------------------------------------------------------------------
	// Sustituir por la cadena de conexi�n de local y de la nube, seg�n el caso
    // Datos de la cadena de conexi�n
    $maquina = "02masw-shard-00-00.sy2yr.mongodb.net:27017"; // cambiar por localhost si local o la m�quina que indica MongoDB Atlas si la nube
    $usuario = "wforero"; // cambiar por tu usuario
    $contrasenya = "S4n74f3c4mp30n"; // cambiar por tu contrase�a
	
	// Conexi�n sin bbdd
	$cadena_conexion = "mongodb+srv://".$usuario.":".$contrasenya."@".$maquina."/"."?retryWrites=true&w=majority";

    // Establecer la conexi�n a MongoDB
    $conexion = new MongoDB\Client($cadena_conexion); 

    // Estado de la conexi�n
    if(!$conexion) {
		// Usar utf8_encode para que se muestren bien los caracteres con acentos y e�es (codifica un string ISO-8859-1 a UTF-8)
        echo utf8_encode("Error: No se ha podido realizar la conexi�n.");
        exit;
    }

	// BBDD
	$db = $conexion->bbdd_prueba;
			
	// COLECCI�N
	$coleccion = $db->ejemplo_coleccion;

	// ------------ CONSULTAS -------------------------------------------------------------------
    //<<<a�adir consultaBASICA1>>>
    // Consulta BASICA 1
    function consulta_basica1($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros m�todos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta b�sica 1");
            exit;
        }

		//<<<a�adir mostrar consultaBASICA1>>>
	    echo "<p>===================<br/>";
        echo utf8_encode("CONSULTA B�SICA 1<br/>");
	    echo "===================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// A�adir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<a�adir mostrar consultaBASICA1>>>	
	}
    // Realizar consultaBASICA1
    consulta_basica1($coleccion);	
	//<<<a�adir consultaBASICA1>>>

    //<<<a�adir consultaBASICA2>>>
    // Consulta BASICA 2
    function consulta_basica2($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros m�todos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta b�sica 2");
            exit;
        }

		//<<<a�adir mostrar consultaBASICA2>>>
	    echo "<p>===================<br/>";
        echo utf8_encode("CONSULTA B�SICA 2<br/>");
	    echo "===================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// A�adir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<a�adir mostrar consultaBASICA2>>>	
	}
    // Realizar consultaBASICA2
    consulta_basica2($coleccion);	
	//<<<a�adir consultaBASICA2>>>
	
    //<<<a�adir consultaAVANZADA1>>>
    // Consulta AVANZADA 1
    function consulta_avanzada1($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros m�todos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta avanzada 1");
            exit;
        }

		//<<<a�adir mostrar consultaAVANZADA1>>>
	    echo "<p>=====================<br/>";
        echo utf8_encode("CONSULTA AVANZADA 1<br/>");
	    echo "=====================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// A�adir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<a�adir mostrar consultaAVANZADA1>>>	
	}
    // Realizar consultaAVANZADA1
    consulta_avanzada1($coleccion);	
	//<<<a�adir consultaAVANZADA1>>>

    //<<<a�adir consultaAVANZADA2>>>
    // Consulta AVANZADA 2
    function consulta_avanzada2($coleccion) {
        // Realizar una consulta SQL
        $resultado = $coleccion->find(); // Cambiar por vuestra SELECT dentro de find o con otros m�todos de consulta
		
		// Comprobar resultado de la consulta
        if (!$resultado) {
            echo utf8_encode("No se ha podido realizar la consulta avanzada 2");
            exit;
        }

		//<<<a�adir mostrar consultaAVANZADA2>>>
	    echo "<p>=====================<br/>";
        echo utf8_encode("CONSULTA AVANZADA 2<br/>");
	    echo "=====================<p/>";
	    echo "<p>";
		// Mostrar los datos de la consulta
		foreach ($resultado as $documento) {
			// A�adir todos los campos que se quieran mostrar. Ejemplo: $documento['_id'] para primer campo, $documento['nombre'] para segundo campo, $documento['apellidos'] para tercer campo, ...				
			echo $documento['_id'].': '.$documento['nombre'].': '.$documento['apellidos'];
			echo "<br />\n";
		}
	    echo "===================<p/>";
		//<<<a�adir mostrar consultaAVANZADA2>>>	
	}
    // Realizar consultaAVANZADA2
    consulta_avanzada2($coleccion);	
	//<<<a�adir consultaAVANZADA2>>>
	
	
    // Cerrar la conexi�n
    // El driver de MongoDB para PHP est� dise�ado para dejar las conexiones abiertas, y no hay ning�n m�todo para cerrarlas.

?>