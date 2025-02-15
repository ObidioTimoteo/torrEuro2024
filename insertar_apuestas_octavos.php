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
        $OCT11 = $_POST["OCT11"]; 
		$OCT12 = $_POST["OCT12"];
		$OCT21 = $_POST["OCT21"];
		$OCT22 = $_POST["OCT22"];
		$OCT31 = $_POST["OCT31"]; 
		$OCT32 = $_POST["OCT32"];
		$OCT41 = $_POST["OCT41"];
		$OCT42 = $_POST["OCT42"];
		$OCT51 = $_POST["OCT51"]; 
		$OCT52 = $_POST["OCT52"];
		$OCT61 = $_POST["OCT61"];
		$OCT62 = $_POST["OCT62"];
		$OCT71 = $_POST["OCT71"]; 
		$OCT72 = $_POST["OCT72"];
		$OCT81 = $_POST["OCT81"];
		$OCT82 = $_POST["OCT82"];		
		

        // Prepara la consulta de inserción
        $sq46 = "UPDATE apuestas_" . $usuario . " SET local ='$OCT11', visitante ='$OCT12' WHERE id = 46";
		$sq47 = "UPDATE apuestas_" . $usuario . " SET local ='$OCT21', visitante ='$OCT22' WHERE id = 47";
		$sq48 = "UPDATE apuestas_" . $usuario . " SET local ='$OCT31', visitante ='$OCT32' WHERE id = 48";
		$sq49 = "UPDATE apuestas_" . $usuario . " SET local ='$OCT41', visitante ='$OCT42' WHERE id = 49";
		$sq50 = "UPDATE apuestas_" . $usuario . " SET local ='$OCT51', visitante ='$OCT52' WHERE id = 50";
		$sq51 = "UPDATE apuestas_" . $usuario . " SET local ='$OCT61', visitante ='$OCT62' WHERE id = 51";
		$sq52 = "UPDATE apuestas_" . $usuario . " SET local ='$OCT71', visitante ='$OCT72' WHERE id = 52";
		$sq53 = "UPDATE apuestas_" . $usuario . " SET local ='$OCT81', visitante ='$OCT82' WHERE id = 53";
	    		
			
		// Ejecuta la consulta de inserción
        if 	($conn->query($sq46) === TRUE &&
			$conn->query($sq47) === TRUE &&
			$conn->query($sq48) === TRUE &&
			$conn->query($sq49) === TRUE &&
			$conn->query($sq50) === TRUE &&
			$conn->query($sq51) === TRUE &&
			$conn->query($sq52) === TRUE &&
			$conn->query($sq53) === TRUE)
			{
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
		
    } 
?>
