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
        $A311 = $_POST["A311"]; 
		$A312 = $_POST["A312"];
		$A321 = $_POST["A321"];
		$A322 = $_POST["A322"];
		$B311 = $_POST["B311"]; 
		$B312 = $_POST["B312"];
		$B321 = $_POST["B321"];
		$B322 = $_POST["B322"];
		$C311 = $_POST["C311"]; 
		$C312 = $_POST["C312"];
		$C321 = $_POST["C321"];
		$C322 = $_POST["C322"];
		$D311 = $_POST["D311"]; 
		$D312 = $_POST["D312"];
		$D321 = $_POST["D321"];
		$D322 = $_POST["D322"];
		$E311 = $_POST["E311"]; 
		$E312 = $_POST["E312"];
		$E321 = $_POST["E321"];
		$E322 = $_POST["E322"];
		$F311 = $_POST["F311"]; 
		$F312 = $_POST["F312"];
		$F321 = $_POST["F321"];
		$F322 = $_POST["F322"];
		

        // Prepara la consulta de inserción
        $sq34 = "UPDATE apuestas_" . $usuario . " SET local ='$A311', visitante ='$A312' WHERE id = 34";
		$sq35 = "UPDATE apuestas_" . $usuario . " SET local ='$A321', visitante ='$A322' WHERE id = 35";
		$sq36 = "UPDATE apuestas_" . $usuario . " SET local ='$B311', visitante ='$B312' WHERE id = 36";
		$sq37 = "UPDATE apuestas_" . $usuario . " SET local ='$B321', visitante ='$B322' WHERE id = 37";
		$sq38 = "UPDATE apuestas_" . $usuario . " SET local ='$C311', visitante ='$C312' WHERE id = 38";
		$sq39 = "UPDATE apuestas_" . $usuario . " SET local ='$C321', visitante ='$C322' WHERE id = 39";
		$sq40 = "UPDATE apuestas_" . $usuario . " SET local ='$D311', visitante ='$D312' WHERE id = 40";
		$sq41 = "UPDATE apuestas_" . $usuario . " SET local ='$D321', visitante ='$D322' WHERE id = 41";
	    $sq42 = "UPDATE apuestas_" . $usuario . " SET local ='$E311', visitante ='$E312' WHERE id = 42";
		$sq43 = "UPDATE apuestas_" . $usuario . " SET local ='$E321', visitante ='$E322' WHERE id = 43";
		$sq44 = "UPDATE apuestas_" . $usuario . " SET local ='$F311', visitante ='$F312' WHERE id = 44";
		$sq45 = "UPDATE apuestas_" . $usuario . " SET local ='$F321', visitante ='$F322' WHERE id = 45";
		
			
		// Ejecuta la consulta de inserción
        if 	($conn->query($sq34) === TRUE &&
			$conn->query($sq35) === TRUE &&
			$conn->query($sq36) === TRUE &&
			$conn->query($sq37) === TRUE &&
			$conn->query($sq38) === TRUE &&
			$conn->query($sq39) === TRUE &&
			$conn->query($sq40) === TRUE &&
			$conn->query($sq41) === TRUE &&
			$conn->query($sq42) === TRUE &&
			$conn->query($sq43) === TRUE &&
			$conn->query($sq44) === TRUE &&
			$conn->query($sq45) === TRUE)
			{
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
		
    } 
?>
