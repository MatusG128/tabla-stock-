<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>CREPAS| La Tribu</h1>
	<h3>Vanya Anette Matus Gamboa 5to </h3>
	<table border="1">
		<tr>
			<td><strong>id_articulo</strong></td>
			<td><strong>id_provedor</strong></td>
			<td><strong>nombre_articulo</strong></td>
			<td><strong>descripcion</strong></td>
			<td><strong>unidad_medida</strong></td>
			<td><strong>cantidad</strong></td>
			<td><strong>minimo</strong></td>
			<td><strong>maximo</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["id_articulo"]; ?></td>
						<td><?php echo $pd[$i]["id_provedor"]; ?> </td>
						<td><?php echo $pd[$i]["nombre_articulo"]; ?> </td>
						<td><?php echo $pd[$i]["descripcion"]; ?> </td>
						<td><?php echo $pd[$i]["unidad_medida"]; ?> </td>
						<td><?php echo $pd[$i]["maximo"]; ?> </td>
						<td><?php echo $pd[$i]["minimo"]; ?> </td>
						<td><?php echo $pd[$i]["cantidad"]; ?> </td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>