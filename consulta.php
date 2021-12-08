<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'teatro';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM obra ORDER BY titulo_obra";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['id']))
{
	$q=$conexion->real_escape_string($_POST['id']);
	$query="SELECT * FROM obra WHERE 
		titulo_obra <> '$q' " ;
}
if(isset($_POST['nombre']))
{
	$q=$conexion->real_escape_string($_POST['nombre']);
	$query="SELECT * FROM obra WHERE 
		autor NOT LIKE '".$q."%' " ;
}

//Aqui se crea la tabla que se va a visualizar
$buscarJugadores=$conexion->query($query);
if ($buscarJugadores->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>Titulo Obra</td>
			<td>Autor</td>
			<td>Año representacion</td>
			<td>Num representaciones</td>
		</tr>';

	while($filaJugadores= $buscarJugadores->fetch_assoc())
	{
		$tabla.=//Aquí se llaman a los datos que contiene la tabla, con los nombres de los campos como estan en la base de datos
		'<tr>
			<td>'.$filaJugadores['titulo_obra'].'</td>
			<td>'.$filaJugadores['autor'].'</td>
			<td>'.$filaJugadores['anio_publicacion'].'</td>
			<td>'.$filaJugadores['representaciones'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
