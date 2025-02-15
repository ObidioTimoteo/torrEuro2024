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
        $var1 = $_POST["campeon"]; 
		$var2 = $_POST["2_clasificado"];
		$var3 = $_POST["semifinalista_1"];
		$var4 = $_POST["semifinalista_2"];
		$var5 = $_POST["max_goleador_equipo"];
		$var6 = $_POST["max_goleador_jugador"];
		$var7 = $_POST["mvp"];
		$var8 = $_POST["max_goleador_spain"];
		$var9 = $_POST["posicion_spain"];
		

        // Prepara la consulta de inserción
        $sql1 = "UPDATE apuestas_" . $usuario . " SET local ='$var1' WHERE id = 1";
		$sql2 = "UPDATE apuestas_" . $usuario . " SET local ='$var2' WHERE id = 2";
		$sql3 = "UPDATE apuestas_" . $usuario . " SET local ='$var3' WHERE id = 3";
		$sql4 = "UPDATE apuestas_" . $usuario . " SET local ='$var4' WHERE id = 4";
		$sql5 = "UPDATE apuestas_" . $usuario . " SET local ='$var5' WHERE id = 5";
		$sql6 = "UPDATE apuestas_" . $usuario . " SET local ='$var6' WHERE id = 6";
		$sql7 = "UPDATE apuestas_" . $usuario . " SET local ='$var7' WHERE id = 7";
		$sql8 = "UPDATE apuestas_" . $usuario . " SET local ='$var8' WHERE id = 8";
		$sql9 = "UPDATE apuestas_" . $usuario . " SET local ='$var9' WHERE id = 9";
		
		// Ejecuta la consulta de inserción
        if 	($conn->query($sql1) === TRUE &&
			$conn->query($sql2) === TRUE &&
			$conn->query($sql3) === TRUE &&
			$conn->query($sql4) === TRUE &&
			$conn->query($sql5) === TRUE &&
			$conn->query($sql6) === TRUE &&
			$conn->query($sql7) === TRUE &&
			$conn->query($sql8) === TRUE &&
			$conn->query($sql9) === TRUE) {
				echo "Datos insertados correctamente.";
			} else {
				echo "Error al insertar datos: " . $conn->error;
			}		

        // Cierra la conexión
        $conn->close();	
				
    } 
?>