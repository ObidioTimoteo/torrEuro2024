<?php
    // Verifica que botón de envío se ha pulsado
    if (isset($_POST["enviar_user1"])) {
		procesarApuestas('user1');
	} elseif (isset($_POST["enviar_user2"])) {
		procesarApuestas('user2');
	} elseif (isset($_POST["enviar_user3"])) {
		procesarApuestas('user3');
	} elseif (isset($_POST["enviar_user4"])) {
		procesarApuestas('user4');
	} elseif (isset($_POST["enviar_user5"])) {
		procesarApuestas('user5');
    }
	
	function procesarApuestas($usuario){
		// Verificar la contraseña ingresada
		$contrasena = false;
		switch ($usuario) {
			case 'user1':
				$contrasena = ($_POST['password'] == '1948');
				break;
			case 'user2':
				$contrasena = ($_POST['password'] == '2288');
				break;
			case 'user3':
				$contrasena = ($_POST['password'] == '0805');
				break;
			case 'user4':
				$contrasena = ($_POST['password'] == '6376');
				break;
			case 'user5':
				$contrasena = ($_POST['password'] == '1616');
				break;
		}
		
		// Si la contraseña no es correcta, muestra un mensaje de error y detiene la ejecución
			if(!$contrasena) {
				die("Contraseña incorrecta para el $usuario.");
			}
		
		// Establece la conexión con la base de datos
        $servername = "DB5015920409.hosting-data.io";
        $username = "dbu2836978"; // Cambia esto si tienes un usuario diferente
        $password = "ekFGYZ3PJi4YYG"; // Deja esto en blanco si no has configurado una contraseña
        $dbname = "dbs12977086";
		
		// Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);
	
		// Verifica la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
	
		// Obtiene los datos enviados desde el formulario
        $CUA11 = $_POST["CUA11"]; 
		$CUA12 = $_POST["CUA12"];
		$CUA21 = $_POST["CUA21"];
		$CUA22 = $_POST["CUA22"];
		$CUA31 = $_POST["CUA31"]; 
		$CUA32 = $_POST["CUA32"];
		$CUA41 = $_POST["CUA41"];
		$CUA42 = $_POST["CUA42"];			
		

        // Prepara la consulta de inserción
        $sq54 = "UPDATE apuestas_" . $usuario . " SET local ='$CUA11', visitante ='$CUA12' WHERE id = 54";
		$sq55 = "UPDATE apuestas_" . $usuario . " SET local ='$CUA21', visitante ='$CUA22' WHERE id = 55";
		$sq56 = "UPDATE apuestas_" . $usuario . " SET local ='$CUA31', visitante ='$CUA32' WHERE id = 56";
		$sq57 = "UPDATE apuestas_" . $usuario . " SET local ='$CUA41', visitante ='$CUA42' WHERE id = 57";		
	    		
			
		// Ejecuta la consulta de inserción
        if 	($conn->query($sq54) === TRUE &&
			$conn->query($sq55) === TRUE &&
			$conn->query($sq56) === TRUE &&
			$conn->query($sq57) === TRUE)
			{
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
		
    } 
?>
