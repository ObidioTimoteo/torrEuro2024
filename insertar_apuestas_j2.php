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
        $A211 = $_POST["A211"]; 
		$A212 = $_POST["A212"];
		$A221 = $_POST["A221"];
		$A222 = $_POST["A222"];
		$B211 = $_POST["B211"]; 
		$B212 = $_POST["B212"];
		$B221 = $_POST["B221"];
		$B222 = $_POST["B222"];
		$C211 = $_POST["C211"]; 
		$C212 = $_POST["C212"];
		$C221 = $_POST["C221"];
		$C222 = $_POST["C222"];
		$D211 = $_POST["D211"]; 
		$D212 = $_POST["D212"];
		$D221 = $_POST["D221"];
		$D222 = $_POST["D222"];
		$E211 = $_POST["E211"]; 
		$E212 = $_POST["E212"];
		$E221 = $_POST["E221"];
		$E222 = $_POST["E222"];
		$F211 = $_POST["F211"]; 
		$F212 = $_POST["F212"];
		$F221 = $_POST["F221"];
		$F222 = $_POST["F222"];
		

        // Prepara la consulta de inserción
        $sq22 = "UPDATE apuestas_" . $usuario . " SET local ='$A211', visitante ='$A212' WHERE id = 22";
		$sq23 = "UPDATE apuestas_" . $usuario . " SET local ='$A221', visitante ='$A222' WHERE id = 23";
		$sq24 = "UPDATE apuestas_" . $usuario . " SET local ='$B211', visitante ='$B212' WHERE id = 24";
		$sq25 = "UPDATE apuestas_" . $usuario . " SET local ='$B221', visitante ='$B222' WHERE id = 25";
		$sq26 = "UPDATE apuestas_" . $usuario . " SET local ='$C211', visitante ='$C212' WHERE id = 26";
		$sq27 = "UPDATE apuestas_" . $usuario . " SET local ='$C221', visitante ='$C222' WHERE id = 27";
		$sq28 = "UPDATE apuestas_" . $usuario . " SET local ='$D211', visitante ='$D212' WHERE id = 28";
		$sq29 = "UPDATE apuestas_" . $usuario . " SET local ='$D221', visitante ='$D222' WHERE id = 29";
	    $sq30 = "UPDATE apuestas_" . $usuario . " SET local ='$E211', visitante ='$E212' WHERE id = 30";
		$sq31 = "UPDATE apuestas_" . $usuario . " SET local ='$E221', visitante ='$E222' WHERE id = 31";
		$sq32 = "UPDATE apuestas_" . $usuario . " SET local ='$F211', visitante ='$F212' WHERE id = 32";
		$sq33 = "UPDATE apuestas_" . $usuario . " SET local ='$F221', visitante ='$F222' WHERE id = 33";
		
			
		// Ejecuta la consulta de inserción
        if 	($conn->query($sq22) === TRUE &&
			$conn->query($sq23) === TRUE &&
			$conn->query($sq24) === TRUE &&
			$conn->query($sq25) === TRUE &&
			$conn->query($sq26) === TRUE &&
			$conn->query($sq27) === TRUE &&
			$conn->query($sq28) === TRUE &&
			$conn->query($sq29) === TRUE &&
			$conn->query($sq30) === TRUE &&
			$conn->query($sq31) === TRUE &&
			$conn->query($sq32) === TRUE &&
			$conn->query($sq33) === TRUE)
			{
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
		
    } 
?>
