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
        $A111 = $_POST["A111"]; 
		$A112 = $_POST["A112"];
		$A121 = $_POST["A121"];
		$A122 = $_POST["A122"];
		$B111 = $_POST["B111"]; 
		$B112 = $_POST["B112"];
		$B121 = $_POST["B121"];
		$B122 = $_POST["B122"];
		$C111 = $_POST["C111"]; 
		$C112 = $_POST["C112"];
		$C121 = $_POST["C121"];
		$C122 = $_POST["C122"];
		$D111 = $_POST["D111"]; 
		$D112 = $_POST["D112"];
		$D121 = $_POST["D121"];
		$D122 = $_POST["D122"];
		$E111 = $_POST["E111"]; 
		$E112 = $_POST["E112"];
		$E121 = $_POST["E121"];
		$E122 = $_POST["E122"];
		$F111 = $_POST["F111"]; 
		$F112 = $_POST["F112"];
		$F121 = $_POST["F121"];
		$F122 = $_POST["F122"];
		

        // Prepara la consulta de inserción
        $sql0 = "UPDATE apuestas_" . $usuario . " SET local ='$A111', visitante ='$A112' WHERE id = 10";
		$sql1 = "UPDATE apuestas_" . $usuario . " SET local ='$A121', visitante ='$A122' WHERE id = 11";
		$sql2 = "UPDATE apuestas_" . $usuario . " SET local ='$B111', visitante ='$B112' WHERE id = 12";
		$sql3 = "UPDATE apuestas_" . $usuario . " SET local ='$B121', visitante ='$B122' WHERE id = 13";
		$sql4 = "UPDATE apuestas_" . $usuario . " SET local ='$C111', visitante ='$C112' WHERE id = 14";
		$sql5 = "UPDATE apuestas_" . $usuario . " SET local ='$C121', visitante ='$C122' WHERE id = 15";
		$sql6 = "UPDATE apuestas_" . $usuario . " SET local ='$D111', visitante ='$D112' WHERE id = 16";
		$sql7 = "UPDATE apuestas_" . $usuario . " SET local ='$D121', visitante ='$D122' WHERE id = 17";
	    $sql8 = "UPDATE apuestas_" . $usuario . " SET local ='$E111', visitante ='$E112' WHERE id = 18";
		$sql9 = "UPDATE apuestas_" . $usuario . " SET local ='$E121', visitante ='$E122' WHERE id = 19";
		$sq20 = "UPDATE apuestas_" . $usuario . " SET local ='$F111', visitante ='$F112' WHERE id = 20";
		$sq21 = "UPDATE apuestas_" . $usuario . " SET local ='$F121', visitante ='$F122' WHERE id = 21";
		
			
		// Ejecuta la consulta de inserción
        if 	($conn->query($sql0) === TRUE &&
			$conn->query($sql1) === TRUE &&
			$conn->query($sql2) === TRUE &&
			$conn->query($sql3) === TRUE &&
			$conn->query($sql4) === TRUE &&
			$conn->query($sql5) === TRUE &&
			$conn->query($sql6) === TRUE &&
			$conn->query($sql7) === TRUE &&
			$conn->query($sql8) === TRUE &&
			$conn->query($sql9) === TRUE &&
			$conn->query($sq20) === TRUE &&
			$conn->query($sq21) === TRUE)
			{
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
		
    } 
?>
