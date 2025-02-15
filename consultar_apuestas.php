<?php
$servername = "DB5015920409.hosting-data.io";
$username = "dbu2836978";
$password = "ekFGYZ3PJi4YYG";
$dbname = "dbs12977086";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar arrays para almacenar los resultados
$local_user1 = $local_user2 = $local_user3 = $local_user4 = $local_user5 = array();
$visitante_user1 = $visitante_user2 = $visitante_user3 = $visitante_user4 = $visitante_user5 = array();

// Función para obtener datos
function get_data($conn, $table_name, &$local_array, &$visitante_array) {
    $sql = "SELECT id, local, visitante FROM $table_name WHERE id BETWEEN 46 AND 60";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $local_array[$row['id']] = $row['local'];
            $visitante_array[$row['id']] = $row['visitante'];
        }
    }
}

// Obtener datos de cada tabla
get_data($conn, 'apuestas_user1', $local_user1, $visitante_user1);
get_data($conn, 'apuestas_user2', $local_user2, $visitante_user2);
get_data($conn, 'apuestas_user3', $local_user3, $visitante_user3);
get_data($conn, 'apuestas_user4', $local_user4, $visitante_user4);
get_data($conn, 'apuestas_user5', $local_user5, $visitante_user5);

$conn->close();
?>

<!DOCTYPE html>
<html>

<!-- Cabecera del Documento -->
<head>
	<meta charset="utf-8">
	<title>TorrEUro2024</title>
  	<link rel="icon" href="imagenes/leon.png" type="image/png">
	<!-- CSS externo para añadir estilos -->
	<link rel="stylesheet" type="text/css" href="consultas.css">
</head>

<body>

	<header>	
		<!-- Si lo hicieramos con CSS en línea: <h1 style="text-align:center;">Hola que tal</h1> -->
		<table>
			<tr>			
				<th style="text-align:left; border-bottom: 2px solid black;"><p class="titulo">CONSULTAR APUESTAS</p></th>				
				<th style="text-align:right; padding-right: 30px; border-bottom: 2px solid black;"><img src="imagenes/logoEuro2024.png" alt="Logo Euro2024"></th>
			</tr>			
			<tr>
				<td>
					<nav>
						<ul style="margin-top: 30px;">
							<li><a href="index.html">INICIO</a></li>
							<li><a href="apuestas_generales.html">APUESTAS</a>
								<ul>
									<li><a>____________________</a></li>
                                  	<li><a style="color: darkgrey;">Apuestas Generales</a></li>
									<li><a style="color: darkred;" href="jornada1b.html">Jornada 1</a></li>
									<li><a style="color: darkred;" href="jornada2b.html">Jornada 2</a></li>
									<li><a style="color: darkred;" href="jornada3.html">Jornada 3</a></li>
									<li><a style="color: darkred;" href="octavos.html">Octavos</a></li>
									<li><a style="color: darkred;" href="cuartos.html">Cuartos</a></li>
									<li><a style="color: darkred;" href="semis.html">Semifinales</a></li>
									<li><a class="activo" href="final.html">Final</a></li>
								</ul>
							</li>
							<li><a style="background-color: darkblue; color:white;"
							href="consultar_apuestas.php">CONSULTAR</a></li>
							<li><a href="clasificacion.html">CLASIFICACIÓN</a></li>
						</ul>		
					</nav>
				</td>
			</tr>			
		</table>			
	</header>
	
	<div class="consulta">
		<table>
			<tr>
				<th></th><th colspan="2">APUESTA</th><th colspan="2">Marcelino</th><th colspan="2">Dani</th><th colspan="2">Pipo</th><th colspan="2">Carlos</th><th colspan="2">Adán</th>
			</tr>
			<tr><td>JORNADA 1</td><td>Alemania - Escocia</td> <td><span style="color: darkblue;">(5-1)</span></td><td> 3-0 </td><td> +5 </td><td> 3-1 </td><td> +5 </td><td> 2-1 </td><td> +5 </td><td> 2-0 </td><td> +5 </td><td> 3-0 </td><td> +5 </td></tr>
			<tr><td></td><td>Hungría - Suiza</td> <td><span style="color: darkblue;">(1-3)</span></td><td> 1-1 </td><td> 0 </td><td> 1-1 </td><td> 0 </td><td> 0-0 </td><td> 0 </td><td> 1-1 </td><td> 0 </td><td> 1-2 </td><td> +5 </td></tr>
			<tr><td></td><td>España - Croacia</td> <td><span style="color: darkblue;">(3-0)</span></td><td> 2-1 </td><td> +5 </td><td> 1-1 </td><td> 0 </td><td> 1-1 </td><td> 0 </td><td> 3-1 </td><td> +5 </td><td> 2-1 </td><td> +5 </td></tr>
			<tr><td></td><td>Italia - Albania</td> <td><span style="color: darkblue;">(2-1)</span></td><td> 4-0 </td><td> +5 </td><td> 1-0 </td><td> +5 </td><td> 3-0 </td><td> +5 </td><td> 1-0 </td><td> +5 </td><td> 3-0 </td><td> +5 </td></tr>
			<tr><td></td><td>Eslovenia - Dinamarca</td> <td><span style="color: darkblue;">(1-1)</span> </td><td> 0-1 </td><td> 0 </td><td> 0-2 </td><td> 0 </td><td> 1-2 </td><td> 0 </td><td> 0-1 </td><td> 0 </td><td> 0-1 </td><td> 0 </td></tr>
			<tr><td></td><td>Serbia - Inglaterra</td> <td><span style="color: darkblue;">(0-1)</span></td><td> 2-1 </td><td> 0 </td><td> 1-2 </td><td> +5 </td><td> 2-2 </td><td> 0 </td><td> 1-2 </td><td> +5 </td><td> 0-2 </td><td> +5 </td></tr>
			<tr><td></td><td>Polonia - Países Bajos</td> <td><span style="color: darkblue;">(1-2)</span></td><td> 1-1 </td><td> 0 </td><td> 1-3 </td><td> +5 </td><td> 1-3 </td><td> +5 </td><td> 1-1 </td><td> 0 </td><td> 0-2 </td><td> +5 </td></tr>
			<tr><td></td><td>Austria - Francia</td> <td><span style="color: darkblue;">(0-1)</span></td><td> 0-2 </td><td> +5 </td><td> 0-3 </td><td> +5 </td><td> 0-2 </td><td> +5 </td><td> 0-2 </td><td> +5 </td><td> 0-3 </td><td> +5 </td></tr>
			<tr><td></td><td>Rumanía - Ucrania</td> <td><span style="color: darkblue;">(3-0)</span></td><td> 1-2 </td><td> 0 </td><td> 0-1 </td><td> 0 </td><td> 1-1 </td><td> 0 </td><td> 0-2 </td><td> 0 </td><td> 0-0 </td><td> 0 </td></tr>
			<tr><td></td><td>Bélgica - Eslovaquia</td> <td><span style="color: darkblue;">(0-1)</span></td><td> 3-1 </td><td> 0 </td><td> 3-0 </td><td> 0 </td><td> 4-1 </td><td> 0 </td><td> 2-0 </td><td> 0 </td><td> 3-1 </td><td> 0 </td></tr>
			<tr><td></td><td>Turquía - Georgia</td> <td><span style="color: darkblue;">(3-1)</span></td><td> 3-1 </td><td> +10 </td><td> 2-1 </td><td> +5 </td><td> 3-0 </td><td> +5 </td><td> 3-0 </td><td> +5 </td><td> 3-0 </td><td> +5 </td></tr>
			<tr><td></td><td>Portugal - Chequia</td> <td><span style="color: darkblue;">(2-1)</span></td><td> 2-0 </td><td> +5 </td><td> 3-1 </td><td> +5 </td><td> 3-1 </td><td> +5 </td><td> 2-0 </td><td> +5 </td><td> 3-0 </td><td> +5 </td></tr>
			
			<tr><td>JORNADA 2</td><td>Alemania - Hungría</td> <td> <span style="color: darkblue;">(2-0)</span></td><td> 3-1 </td><td> +5 </td><td> 4-0 </td><td> +5 </td><td> 2-0 </td><td> +10 </td><td> 2-0 </td><td> +10 </td><td> 3-0 </td><td> +5 </td></tr>
			<tr><td></td><td>Escocia - Suiza</td> <td> <span style="color: darkblue;">(1-1)</span></td><td> 1-2 </td><td> 0 </td><td> 0-2 </td><td> 0 </td><td> 1-1 </td><td> +10 </td><td> 1-3 </td><td> 0 </td><td> 0-2 </td><td> 0 </td></tr>
			<tr><td></td><td>Croacia - Albania</td> <td> <span style="color: darkblue;">(2-2)</span></td><td> 3-0 </td><td> 0 </td><td> 3-0 </td><td> 0 </td><td> 3-0 </td><td> 0 </td><td> 1-2 </td><td> 0 </td><td> 2-0 </td><td> 0 </td></tr>
			<tr><td></td><td>España - Italia</td> <td> <span style="color: darkblue;">(1-0)</span></td><td> 2-1 </td><td> +5 </td><td> 3-1 </td><td> +5 </td><td> 1-1 </td><td> 0 </td><td> 1-1 </td><td> 0 </td><td> 2-1 </td><td> +5 </td></tr>
			<tr><td></td><td>Eslovenia - Serbia</td> <td> <span style="color: darkblue;">(1-1)</span></td><td> 1-1 </td><td> +10 </td><td> 1-3 </td><td> 0 </td><td> 0-1 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 1-1 </td><td> +10 </td></tr>
			<tr><td></td><td>Dinamarca - Inglaterra</td> <td> <span style="color: darkblue;">(1-1)</span></td><td> 1-3 </td><td> 0 </td><td> 1-2 </td><td> 0 </td><td> 1-3 </td><td> 0 </td><td> 0-3 </td><td> 0 </td><td> 0-2 </td><td> 0 </td></tr>
			<tr><td></td><td>Polonia - Austria</td> <td> <span style="color: darkblue;">(1-3)</span></td><td> 1-1 </td><td> 0 </td><td> 1-1 </td><td> 0 </td><td> 1-1 </td><td> 0 </td><td> 1-2 </td><td> +5 </td><td> 1-1 </td><td> 0 </td></tr>
			<tr><td></td><td>Países Bajos - Francia</td> <td> <span style="color: darkblue;">(0-0)</span></td><td> 1-3 </td><td> 0 </td><td> 1-3 </td><td> 0 </td><td> 2-2 </td><td> +5 </td><td> 2-2 </td><td> +5 </td><td> 1-2 </td><td> 0 </td></tr>
            <tr><td></td><td>Eslovaquia - Ucrania</td> <td> <span style="color: darkblue;">(1-2)</span></td><td> 1-1 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 0-1 </td><td> +5 </td><td> 2-1 </td><td> 0 </td><td> 0-0 </td><td> 0 </td></tr>
			<tr><td></td><td>Bélgica - Rumanía</td> <td> <span style="color: darkblue;">(2-0)</span></td><td> 2-1 </td><td> +5 </td><td> 2-1 </td><td> +5 </td><td> 3-0 </td><td> +5 </td><td> 2-1 </td><td> +5 </td><td> 3-0 </td><td> +5 </td></tr>
			<tr><td></td><td>Georgia - Chequia</td> <td> <span style="color: darkblue;">(1-1)</span></td><td> 0-1 </td><td> 0 </td><td> 1-1 </td><td> +10 </td><td> 1-1 </td><td> +10 </td><td> 0-2 </td><td> 0 </td><td> 1-1 </td><td> +10 </td></tr>
			<tr><td></td><td>Turquía - Portugal</td> <td> <span style="color: darkblue;">(0-3)</span></td><td> 1-2 </td><td> +5 </td><td> 1-3 </td><td> +5 </td><td> 1-3 </td><td> +5 </td><td> 1-3 </td><td> +5 </td><td> 1-2 </td><td> +5 </td></tr>
			
			<tr><td>JORNADA 3</td><td>Suiza - Alemania</td> <td> <span style="color: darkblue;">(1-1)</span></td><td> 1-2 </td><td> 0 </td><td> 1-1 </td><td> +10 </td><td> 1-1 </td><td> +10 </td><td> 2-2 </td><td> +5 </td><td> 0-2 </td><td> 0 </td></tr>
			<tr><td></td><td>Escocia - Hungría</td> <td> <span style="color: darkblue;">(0-1)</span></td><td> 1-2 </td><td> +5 </td><td> 2-1 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 1-2 </td><td> +5 </td><td> 1-1 </td><td> 0 </td></tr>
			<tr><td></td><td>Albania - España</td> <td> <span style="color: darkblue;">(0-1)</span></td><td> 0-2 </td><td> +5 </td><td> 0-2 </td><td> +5 </td><td> 1-1 </td><td> 0 </td><td> 0-2 </td><td> +5 </td><td> 0-2 </td><td> +5 </td></tr>
			<tr><td></td><td>Croacia - Italia</td> <td> <span style="color: darkblue;">(1-1)</span></td><td> 1-1 </td><td> +10 </td><td> 2-1 </td><td> 0 </td><td> 0-2 </td><td> 0 </td><td> 0-1 </td><td> 0 </td><td> 2-1 </td><td> 0 </td></tr>
			<tr><td></td><td>Dinamarca - Serbia</td> <td> <span style="color: darkblue;">(0-0)</span></td><td> 2-2 </td><td> +5 </td><td> 1-0 </td><td> 0 </td><td> 1-1 </td><td> +5 </td><td> 2-0 </td><td> 0 </td><td> 1-1 </td><td> +5 </td></tr>
			<tr><td></td><td>Inglaterra - Eslovenia</td> <td> <span style="color: darkblue;">(0-0)</span></td><td> 2-0 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 3-0 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 3-0 </td><td> 0 </td></tr>
			<tr><td></td><td>Francia - Polonia</td> <td> <span style="color: darkblue;">(1-1)</span></td><td> 2-1 </td><td> 0 </td><td> 1-0 </td><td> 0 </td><td> 4-1 </td><td> 0 </td><td> 2-0 </td><td> 0 </td><td> 3-0 </td><td> 0 </td></tr>
			<tr><td></td><td>Países Bajos - Austria</td> <td> <span style="color: darkblue;">(2-3)</span></td><td> 2-0 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 1-1 </td><td> 0 </td><td> 2-1 </td><td> 0 </td></tr>
			<tr><td></td><td>Eslovaquia - Rumanía</td> <td> <span style="color: darkblue;">(1-1)</span></td><td> 1-1 </td><td> +10 </td><td> 0-1 </td><td> 0 </td><td> 0-2 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 1-2 </td><td> 0 </td></tr>
			<tr><td></td><td>Ucrania - Bélgica</td> <td> <span style="color: darkblue;">(0-0)</span></td><td> 1-2 </td><td> 0 </td><td> 1-1 </td><td> +5 </td><td> 1-1 </td><td> +5 </td><td> 0-2 </td><td> 0 </td><td> 0-0 </td><td> +10 </td></tr>
			<tr><td></td><td>Georgia - Portugal</td> <td> <span style="color: darkblue;">(2-0)</span></td><td> 0-2 </td><td> 0 </td><td> 0-2 </td><td> 0 </td><td> 0-2 </td><td> 0 </td><td> 0-2 </td><td> 0 </td><td> 0-3 </td><td> 0 </td></tr>
			<tr><td></td><td>Chequia - Turquía</td> <td> <span style="color: darkblue;">(1-2)</span></td><td> 1-2 </td><td> +10 </td><td> 1-1 </td><td> 0 </td><td> 2-1 </td><td> 0 </td><td> 1-2 </td><td> +10 </td><td> 1-2 </td><td> +10 </td></tr>
			
			
          	<tr>
              <td>OCTAVOS</td><td>Suiza - Italia</td> <td><span style="color: darkblue;">(2-0)</span></td>
              <td> <?php echo isset($local_user1[46]) ? htmlspecialchars($local_user1[46]) : 'No disponible'; ?>-<?php echo isset($visitante_user1[46]) ? htmlspecialchars($visitante_user1[46]) : 'No disponible'; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user2[46]) ? htmlspecialchars($local_user2[46]) : 'No disponible'; ?>-<?php echo isset($visitante_user2[46]) ? htmlspecialchars($visitante_user2[46]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user3[46]) ? htmlspecialchars($local_user3[46]) : 'No disponible'; ?>-<?php echo isset($visitante_user3[46]) ? htmlspecialchars($visitante_user3[46]) : 'No disponible'; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user4[46]) ? htmlspecialchars($local_user4[46]) : 'No disponible'; ?>-<?php echo isset($visitante_user4[46]) ? htmlspecialchars($visitante_user4[46]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user5[46]) ? htmlspecialchars($local_user5[46]) : 'No disponible'; ?>-<?php echo isset($visitante_user5[46]) ? htmlspecialchars($visitante_user5[46]) : 'No disponible'; ?> </td><td> +12 </td>
          	</tr>
			<tr>
              <td></td><td>Alemania - Dinamarca</td> <td><span style="color: darkblue;">(2-0)</span></td>
              <td> <?php echo isset($local_user1[47]) ? htmlspecialchars($local_user1[47]) : 'No disponible'; ?>-<?php echo isset($visitante_user1[47]) ? htmlspecialchars($visitante_user1[47]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user2[47]) ? htmlspecialchars($local_user2[47]) : 'No disponible'; ?>-<?php echo isset($visitante_user2[47]) ? htmlspecialchars($visitante_user2[47]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user3[47]) ? htmlspecialchars($local_user3[47]) : 'No disponible'; ?>-<?php echo isset($visitante_user3[47]) ? htmlspecialchars($visitante_user3[47]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user4[47]) ? htmlspecialchars($local_user4[47]) : 'No disponible'; ?>-<?php echo isset($visitante_user4[47]) ? htmlspecialchars($visitante_user4[47]) : 'No disponible'; ?> </td><td> +12 </td>
              <td> <?php echo isset($local_user5[47]) ? htmlspecialchars($local_user5[47]) : 'No disponible'; ?>-<?php echo isset($visitante_user5[47]) ? htmlspecialchars($visitante_user5[47]) : 'No disponible'; ?> </td><td> +12 </td>
          	</tr>
          	<tr>
              <td></td><td>Inglaterra - Eslovaquia</td> <td><span style="color: darkblue;">(2-1)</span></td>
              <td> <?php echo isset($local_user1[48]) ? htmlspecialchars($local_user1[48]) : 'No disponible'; ?>-<?php echo isset($visitante_user1[48]) ? htmlspecialchars($visitante_user1[48]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user2[48]) ? htmlspecialchars($local_user2[48]) : 'No disponible'; ?>-<?php echo isset($visitante_user2[48]) ? htmlspecialchars($visitante_user2[48]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user3[48]) ? htmlspecialchars($local_user3[48]) : 'No disponible'; ?>-<?php echo isset($visitante_user3[48]) ? htmlspecialchars($visitante_user3[48]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user4[48]) ? htmlspecialchars($local_user4[48]) : 'No disponible'; ?>-<?php echo isset($visitante_user4[48]) ? htmlspecialchars($visitante_user4[48]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user5[48]) ? htmlspecialchars($local_user5[48]) : 'No disponible'; ?>-<?php echo isset($visitante_user5[48]) ? htmlspecialchars($visitante_user5[48]) : 'No disponible'; ?> </td><td> +6 </td>
          	</tr>
          	<tr>
              <td></td><td>España - Georgia</td> <td><span style="color: darkblue;">(4-1)</span></td>
              <td> <?php echo isset($local_user1[49]) ? htmlspecialchars($local_user1[49]) : 'No disponible'; ?>-<?php echo isset($visitante_user1[49]) ? htmlspecialchars($visitante_user1[49]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user2[49]) ? htmlspecialchars($local_user2[49]) : 'No disponible'; ?>-<?php echo isset($visitante_user2[49]) ? htmlspecialchars($visitante_user2[49]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user3[49]) ? htmlspecialchars($local_user3[49]) : 'No disponible'; ?>-<?php echo isset($visitante_user3[49]) ? htmlspecialchars($visitante_user3[49]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user4[49]) ? htmlspecialchars($local_user4[49]) : 'No disponible'; ?>-<?php echo isset($visitante_user4[49]) ? htmlspecialchars($visitante_user4[49]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user5[49]) ? htmlspecialchars($local_user5[49]) : 'No disponible'; ?>-<?php echo isset($visitante_user5[49]) ? htmlspecialchars($visitante_user5[49]) : 'No disponible'; ?> </td><td> +6 </td>
          	</tr>
          	<tr>
              <td></td><td>Francia - Bélgica</td> <td><span style="color: darkblue;">(1-0)</span></td>
              <td> <?php echo isset($local_user1[50]) ? htmlspecialchars($local_user1[50]) : 'No disponible'; ?>-<?php echo isset($visitante_user1[50]) ? htmlspecialchars($visitante_user1[50]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user2[50]) ? htmlspecialchars($local_user2[50]) : 'No disponible'; ?>-<?php echo isset($visitante_user2[50]) ? htmlspecialchars($visitante_user2[50]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user3[50]) ? htmlspecialchars($local_user3[50]) : 'No disponible'; ?>-<?php echo isset($visitante_user3[50]) ? htmlspecialchars($visitante_user3[50]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user4[50]) ? htmlspecialchars($local_user4[50]) : 'No disponible'; ?>-<?php echo isset($visitante_user4[50]) ? htmlspecialchars($visitante_user4[50]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user5[50]) ? htmlspecialchars($local_user5[50]) : 'No disponible'; ?>-<?php echo isset($visitante_user5[50]) ? htmlspecialchars($visitante_user5[50]) : 'No disponible'; ?> </td><td> +6 </td>
          	</tr>
          	<tr>
              <td></td><td>Portugal - Eslovenia</td> <td><span style="color: darkblue;">(0-0)</span></td>
              <td> <?php echo isset($local_user1[51]) ? htmlspecialchars($local_user1[51]) : 'No disponible'; ?>-<?php echo isset($visitante_user1[51]) ? htmlspecialchars($visitante_user1[51]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user2[51]) ? htmlspecialchars($local_user2[51]) : 'No disponible'; ?>-<?php echo isset($visitante_user2[51]) ? htmlspecialchars($visitante_user2[51]) : 'No disponible'; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user3[51]) ? htmlspecialchars($local_user3[51]) : 'No disponible'; ?>-<?php echo isset($visitante_user3[51]) ? htmlspecialchars($visitante_user3[51]) : 'No disponible'; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user4[51]) ? htmlspecialchars($local_user4[51]) : 'No disponible'; ?>-<?php echo isset($visitante_user4[51]) ? htmlspecialchars($visitante_user4[51]) : 'No disponible'; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user5[51]) ? htmlspecialchars($local_user5[51]) : 'No disponible'; ?>-<?php echo isset($visitante_user5[51]) ? htmlspecialchars($visitante_user5[51]) : 'No disponible'; ?> </td><td> 0 </td>
          	</tr>
          	<tr>
              <td></td><td>Rumanía - Países Bajos</td> <td><span style="color: darkblue;">(0-3)</span></td>
              <td> <?php echo isset($local_user1[52]) ? htmlspecialchars($local_user1[52]) : 'No disponible'; ?>-<?php echo isset($visitante_user1[52]) ? htmlspecialchars($visitante_user1[52]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user2[52]) ? htmlspecialchars($local_user2[52]) : 'No disponible'; ?>-<?php echo isset($visitante_user2[52]) ? htmlspecialchars($visitante_user2[52]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user3[52]) ? htmlspecialchars($local_user3[52]) : 'No disponible'; ?>-<?php echo isset($visitante_user3[52]) ? htmlspecialchars($visitante_user3[52]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user4[52]) ? htmlspecialchars($local_user4[52]) : 'No disponible'; ?>-<?php echo isset($visitante_user4[52]) ? htmlspecialchars($visitante_user4[52]) : 'No disponible'; ?> </td><td> +6 </td>
              <td> <?php echo isset($local_user5[52]) ? htmlspecialchars($local_user5[50]) : 'No disponible'; ?>-<?php echo isset($visitante_user5[52]) ? htmlspecialchars($visitante_user5[52]) : 'No disponible'; ?> </td><td> +6 </td>
          	</tr>
          	<tr>
              <td></td><td>Austria - Turquía</td> <td><span style="color: darkblue;">(1-2)</span></td>
              <td> <?php echo isset($local_user1[53]) ? htmlspecialchars($local_user1[53]) : 'No disponible'; ?>-<?php echo isset($visitante_user1[53]) ? htmlspecialchars($visitante_user1[53]) : 'No disponible'; ?> </td><td> +12 </td>
              <td> <?php echo isset($local_user2[53]) ? htmlspecialchars($local_user2[53]) : 'No disponible'; ?>-<?php echo isset($visitante_user2[53]) ? htmlspecialchars($visitante_user2[53]) : 'No disponible'; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user3[53]) ? htmlspecialchars($local_user3[53]) : 'No disponible'; ?>-<?php echo isset($visitante_user3[53]) ? htmlspecialchars($visitante_user3[53]) : 'No disponible'; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user4[53]) ? htmlspecialchars($local_user4[53]) : 'No disponible'; ?>-<?php echo isset($visitante_user4[53]) ? htmlspecialchars($visitante_user4[53]) : 'No disponible'; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user5[53]) ? htmlspecialchars($local_user5[53]) : 'No disponible'; ?>-<?php echo isset($visitante_user5[53]) ? htmlspecialchars($visitante_user5[53]) : 'No disponible'; ?> </td><td> 0 </td>
          	</tr>
          	
          	<tr>
              <td>CUARTOS</td><td>España - Alemania</td> <td><span style="color: darkblue;">(2-1)</span></td>
              <td> <?php echo isset($local_user1[54]) ? htmlspecialchars($local_user1[54]) : ''; ?>-<?php echo isset($visitante_user1[54]) ? htmlspecialchars($visitante_user1[54]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user2[54]) ? htmlspecialchars($local_user2[54]) : ''; ?>-<?php echo isset($visitante_user2[54]) ? htmlspecialchars($visitante_user2[54]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user3[54]) ? htmlspecialchars($local_user3[54]) : ''; ?>-<?php echo isset($visitante_user3[54]) ? htmlspecialchars($visitante_user3[54]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user4[54]) ? htmlspecialchars($local_user4[54]) : ''; ?>-<?php echo isset($visitante_user4[54]) ? htmlspecialchars($visitante_user4[54]) : ''; ?> </td><td> +8 </td>
              <td> <?php echo isset($local_user5[54]) ? htmlspecialchars($local_user5[54]) : ''; ?>-<?php echo isset($visitante_user5[54]) ? htmlspecialchars($visitante_user5[54]) : ''; ?> </td><td> +16 </td>
          	</tr>
          	<tr>
              <td></td><td>Portugal - Francia</td> <td><span style="color: darkblue;">(0-0)</span></td>
              <td> <?php echo isset($local_user1[55]) ? htmlspecialchars($local_user1[55]) : ''; ?>-<?php echo isset($visitante_user1[55]) ? htmlspecialchars($visitante_user1[55]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user2[55]) ? htmlspecialchars($local_user2[55]) : ''; ?>-<?php echo isset($visitante_user2[55]) ? htmlspecialchars($visitante_user2[55]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user3[55]) ? htmlspecialchars($local_user3[55]) : ''; ?>-<?php echo isset($visitante_user3[55]) ? htmlspecialchars($visitante_user3[55]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user4[55]) ? htmlspecialchars($local_user4[55]) : ''; ?>-<?php echo isset($visitante_user4[55]) ? htmlspecialchars($visitante_user4[55]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user5[55]) ? htmlspecialchars($local_user5[55]) : ''; ?>-<?php echo isset($visitante_user5[55]) ? htmlspecialchars($visitante_user5[55]) : ''; ?> </td><td> 0 </td>
          	</tr>
          	<tr>
              <td></td><td>Inglaterra - Suiza</td> <td><span style="color: darkblue;">(1-1)</span></td>
              <td> <?php echo isset($local_user1[56]) ? htmlspecialchars($local_user1[56]) : ''; ?>-<?php echo isset($visitante_user1[56]) ? htmlspecialchars($visitante_user1[56]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user2[56]) ? htmlspecialchars($local_user2[56]) : ''; ?>-<?php echo isset($visitante_user2[56]) ? htmlspecialchars($visitante_user2[56]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user3[56]) ? htmlspecialchars($local_user3[56]) : ''; ?>-<?php echo isset($visitante_user3[56]) ? htmlspecialchars($visitante_user3[56]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user4[56]) ? htmlspecialchars($local_user4[56]) : ''; ?>-<?php echo isset($visitante_user4[56]) ? htmlspecialchars($visitante_user4[56]) : ''; ?> </td><td> +16 </td>
              <td> <?php echo isset($local_user5[56]) ? htmlspecialchars($local_user5[56]) : ''; ?>-<?php echo isset($visitante_user5[56]) ? htmlspecialchars($visitante_user5[56]) : ''; ?> </td><td> 0 </td>
          	</tr>
          	<tr>
              <td></td><td>Países Bajos - Turquía</td> <td><span style="color: darkblue;">(2-1)</span></td>
              <td> <?php echo isset($local_user1[57]) ? htmlspecialchars($local_user1[57]) : ''; ?>-<?php echo isset($visitante_user1[57]) ? htmlspecialchars($visitante_user1[57]) : ''; ?> </td><td> +8 </td>
              <td> <?php echo isset($local_user2[57]) ? htmlspecialchars($local_user2[57]) : ''; ?>-<?php echo isset($visitante_user2[57]) ? htmlspecialchars($visitante_user2[57]) : ''; ?> </td><td> +8 </td>
              <td> <?php echo isset($local_user3[57]) ? htmlspecialchars($local_user3[57]) : ''; ?>-<?php echo isset($visitante_user3[57]) ? htmlspecialchars($visitante_user3[57]) : ''; ?> </td><td> +8 </td>
              <td> <?php echo isset($local_user4[57]) ? htmlspecialchars($local_user4[57]) : ''; ?>-<?php echo isset($visitante_user4[57]) ? htmlspecialchars($visitante_user4[57]) : ''; ?> </td><td> +8 </td>
              <td> <?php echo isset($local_user5[57]) ? htmlspecialchars($local_user5[57]) : ''; ?>-<?php echo isset($visitante_user5[57]) ? htmlspecialchars($visitante_user5[57]) : ''; ?> </td><td> +8 </td>
          	</tr>			
			
			<tr>
              <td>SEMIFINALES</td><td>España - Francia</td> <td><span style="color: darkblue;">(2-1)</span></td>
              <td> <?php echo isset($local_user1[58]) ? htmlspecialchars($local_user1[58]) : ''; ?>-<?php echo isset($visitante_user1[58]) ? htmlspecialchars($visitante_user1[58]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user2[58]) ? htmlspecialchars($local_user2[58]) : ''; ?>-<?php echo isset($visitante_user2[58]) ? htmlspecialchars($visitante_user2[58]) : ''; ?> </td><td> +10 </td>
              <td> <?php echo isset($local_user3[58]) ? htmlspecialchars($local_user3[58]) : ''; ?>-<?php echo isset($visitante_user3[58]) ? htmlspecialchars($visitante_user3[58]) : ''; ?> </td><td> +10 </td>
              <td> <?php echo isset($local_user4[58]) ? htmlspecialchars($local_user4[58]) : ''; ?>-<?php echo isset($visitante_user4[58]) ? htmlspecialchars($visitante_user4[58]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user5[58]) ? htmlspecialchars($local_user5[58]) : ''; ?>-<?php echo isset($visitante_user5[58]) ? htmlspecialchars($visitante_user5[58]) : ''; ?> </td><td> +10 </td>
          </tr>
			<tr>
              <td></td><td>Países Bajos - Inglaterra</td> <td><span style="color: darkblue;">(1-2)</span></td>
              <td> <?php echo isset($local_user1[59]) ? htmlspecialchars($local_user1[59]) : ''; ?>-<?php echo isset($visitante_user1[59]) ? htmlspecialchars($visitante_user1[59]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user2[59]) ? htmlspecialchars($local_user2[59]) : ''; ?>-<?php echo isset($visitante_user2[59]) ? htmlspecialchars($visitante_user2[59]) : ''; ?> </td><td> +10 </td>
              <td> <?php echo isset($local_user3[59]) ? htmlspecialchars($local_user3[59]) : ''; ?>-<?php echo isset($visitante_user3[59]) ? htmlspecialchars($visitante_user3[59]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user4[59]) ? htmlspecialchars($local_user4[59]) : ''; ?>-<?php echo isset($visitante_user4[59]) ? htmlspecialchars($visitante_user4[59]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user5[59]) ? htmlspecialchars($local_user5[59]) : ''; ?>-<?php echo isset($visitante_user5[59]) ? htmlspecialchars($visitante_user5[59]) : ''; ?> </td><td> 0 </td>
          </tr>
			
			<tr>
              <td>FINAL</td><td>España - Inglaterra</td> <td><span style="color: darkblue;">(2-1)</span></td>
              <td> <?php echo isset($local_user1[60]) ? htmlspecialchars($local_user1[60]) : ''; ?>-<?php echo isset($visitante_user1[60]) ? htmlspecialchars($visitante_user1[60]) : ''; ?> </td><td> +30 </td>
              <td> <?php echo isset($local_user2[60]) ? htmlspecialchars($local_user2[60]) : ''; ?>-<?php echo isset($visitante_user2[60]) ? htmlspecialchars($visitante_user2[60]) : ''; ?> </td><td> +15 </td>
              <td> <?php echo isset($local_user3[60]) ? htmlspecialchars($local_user3[60]) : ''; ?>-<?php echo isset($visitante_user3[60]) ? htmlspecialchars($visitante_user3[60]) : ''; ?> </td><td> 0 </td>
              <td> <?php echo isset($local_user4[60]) ? htmlspecialchars($local_user4[60]) : ''; ?>-<?php echo isset($visitante_user4[60]) ? htmlspecialchars($visitante_user4[60]) : ''; ?> </td><td> +15 </td>
              <td> <?php echo isset($local_user5[60]) ? htmlspecialchars($local_user5[60]) : ''; ?>-<?php echo isset($visitante_user5[60]) ? htmlspecialchars($visitante_user5[60]) : ''; ?> </td><td> +15 </td>
          </tr>
          
          <tr><td>EQUIPOS</td><td>Equipo Campeón</td> <td> <img src="imagenes/espanna.png" alt="españa bandera"> </td> <td> <img src="imagenes/francia.png" alt="francia bandera"></td><td> 0 </td><td> <img src="imagenes/francia.png" alt="francia bandera"> </td><td> 0 </td><td> <img src="imagenes/inglaterra.png" alt="inglaterra bandera"> </td><td> 0 </td><td> <img src="imagenes/francia.png" alt="francia bandera"> </td><td> 0 </td><td> <img src="imagenes/francia.png" alt="francia bandera"> </td><td> 0 </td></tr>
			<tr><td></td><td>Equipo 2º Clasificado</td> <td> <img src="imagenes/inglaterra.png" alt="inglaterra bandera"> </td> <td> <img src="imagenes/portugal.png" alt="portugal bandera"> </td><td> 0 </td><td> <img src="imagenes/alemania.png" alt="alemania bandera"> </td><td> 0 </td><td> <img src="imagenes/francia.png" alt="francia bandera"> </td><td> 0 </td><td> <img src="imagenes/portugal.png" alt="portugal bandera"> </td><td> 0 </td><td> <img src="imagenes/alemania.png" alt="alemania bandera"> </td><td> 0 </td></tr>
			<tr><td></td><td>Equipo Semifinalista 1</td> <td></td> <td> <img src="imagenes/alemania.png" alt="alemania bandera"> </td><td> </td><td> <img src="imagenes/inglaterra.png" alt="inglaterra bandera"> </td><td> </td><td> <img src="imagenes/paises bajos.png" alt="paises_bajos bandera"> </td><td> </td><td> <img src="imagenes/alemania.png" alt="alemania bandera"> </td><td> </td><td> <img src="imagenes/paises bajos.png" alt="paises_bajos bandera"> </td><td> </td></tr>
			<tr><td></td><td>Equipo Semifinalista 2</td> <td></td> <td> <img src="imagenes/belgica.png" alt="belgica bandera"> </td><td>  </td><td> <img src="imagenes/portugal.png" alt="portugal bandera"> </td><td>  </td><td> <img src="imagenes/portugal.png" alt="portugal bandera"> </td><td>  </td><td> <img src="imagenes/inglaterra.png" alt="inglaterra bandera"> </td><td>  </td><td> <img src="imagenes/inglaterra.png" alt="inglaterra bandera"> </td><td>  </td></tr>
          	<tr><td></td><td>Número de Semifinalistas acertados</td> <td></td> <td> 1 </td><td> +5 </td><td> 2 </td><td> +10 </td><td> 3 </td><td> +20 </td><td> 2 </td><td> +10 </td><td> 3 </td><td> +20 </td></tr>
          	<tr><td></td><td>Número de Finalistas acertados</td> <td></td> <td> 0 </td><td> 0 </td><td> 0 </td><td> 0 </td><td> 1 </td><td> +10 </td><td> 0 </td><td> 0 </td><td> 0 </td><td> 0 </td></tr>
			<tr><td></td><td>Equipo Máximo Goleador</td> <td> <img src="imagenes/espanna.png" alt="españa bandera"> </td> <td> <img src="imagenes/francia.png" alt="francia bandera"> </td><td> 0 </td><td> <img src="imagenes/inglaterra.png" alt="inglaterra bandera"> </td><td> 0 </td><td> <img src="imagenes/inglaterra.png" alt="inglaterra bandera"> </td><td> 0 </td><td> <img src="imagenes/inglaterra.png" alt="inglaterra bandera"> </td><td> 0 </td><td> <img src="imagenes/alemania.png" alt="alemania bandera"> </td><td> 0 </td></tr>
			<tr><td>JUGADORES</td><td>Jugador Máximo Goleador</td> <td> Kane </td> <td> Mbappé </td><td> 0 </td><td> Kane </td><td> +15 </td><td> Foden </td><td> 0 </td><td> Ronaldo </td><td> 0 </td><td> Mbappé </td><td> 0 </td></tr>
			<tr><td></td><td>Jugador MVP</td> <td> Rodri </td> <td> Rodri </td><td> +15 </td><td> Mbappé </td><td> 0 </td><td> Foden </td><td> 0 </td><td> Griezmann </td><td> 0 </td><td> Griezmann </td><td> 0 </td></tr>
			<tr><td>ESPAÑA</td><td>Máximo Goleador España</td> <td> Olmo </td> <td> Morata </td><td> 0 </td><td> Oyarzabal </td><td> 0 </td><td> Y. Lamal </td><td> 0 </td><td> Ferran Torres </td><td> 0 </td><td> Morata </td><td> 0 </td></tr>
			<tr><td></td><td>Posición España</td> <td></td> <td> Cae en cuartos </td><td> 0 </td><td> Cae en cuartos </td><td> 0 </td><td> Cae en cuartos </td><td> 0 </td><td> Cae en cuartos </td><td> 0 </td><td> Cae en cuartos </td><td> 0 </td></tr>

          
          	<!-- Version anterior:

			<tr><td>OCTAVOS</td><td>Oct11 - Oct12</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Oct21 - Oct22</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Oct31 - Oct32</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Oct41 - Oct42</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Oct51 - Oct52</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Oct61 - Oct62</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Oct71 - Oct72</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Oct81 - Oct82</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			

			<tr><td>CUARTOS</td><td>Cua11 - Cua12</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Cua21 - Cua22</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Cua31 - Cua32</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Cua41 - Cua42</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			
			<tr><td>SEMIFINALES</td><td>Sem11 - Sem12</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			<tr><td></td><td>Sem21 - Sem22</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			
			<tr><td>FINAL</td><td>Fin11 - Fin12</td> <td> <span style="color: darkblue;">(-)</span></td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td><td> - </td><td>  </td></tr>
			
          				
			-->

		</table>
	
	</div>      

</body>

</html>