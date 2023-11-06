<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Platillos disponibles</h1>
	<table border="1">
		<tr>
			<td><strong>ID</strong></td>
			<td><strong>Nombre Juego</strong></td>
			<td><strong>Descripcion Juego</strong></td>
			<td><strong>Genero Juego</strong></td>
			<td><strong>Fecha Juego</strong></td>
			<td><strong>Precio Juego</strong></td>
			<td><strong>Clasificacion Juego</strong></td>
			<td><strong>Desarrollador Juego</strong></td>			
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["id"]; ?></td>
						<td><?php echo $pd[$i]["nombre"]; ?></td>
						<td><?php echo $pd[$i]["descripcion"]; ?></td>
						<td><?php echo $pd[$i]["genero"]; ?></td>
						<td><?php echo $pd[$i]["fecha"]; ?></td>
						<td><?php echo $pd[$i]["precio"]; ?></td>
						<td><?php echo $pd[$i]["clasificacion"]; ?></td>
						<td><?php echo $pd[$i]["desarrolladores"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>