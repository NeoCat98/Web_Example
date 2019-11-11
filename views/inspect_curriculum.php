<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>

<body>
	<a href="views/principal_view.php">INICIO</a>
	<table>
		<thead>
			<tr>
				<th scope="col">DUI</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">Genero</th>
				<th scope="col">Numero</th>
				<th scope="col">Fecha de Nacimiento</th>
				<th scope="col">Estado Civil</th>
				<th scope="col">Experiencia laboral</th>
				<th scope="col">Formacion Academica</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($statment as $row){
			?>
			<tr>
				<td><?php echo $row['curriculums_DUI']; ?></td>
				<td><?php echo $row['curriculums_nombre']; ?></td>
				<td><?php echo $row['curriculums_apellido']; ?></td>
				<td><?php echo $row['curriculums_genero']; ?></td>
				<td><?php echo $row['curriculums_numero']; ?></td>
				<td><?php echo $row['curriculums_birthdate']; ?></td>
				<td><?php echo $row['curriculums_estado']; ?></td>
				<td><?php echo $row['curriculums_experiencia']; ?></td>
				<td><?php echo $row['curriculums_formacion']; ?></td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</body>

</html>