<?php   
require "conexion_teatro.php";

$tabla="";
$query="SELECT * FROM obra";

/*Entra a esta condicion cuando ingresamos el caracter en el input */

if(isset($_POST['anio_publicacion'])) /*comprueba si la variable nombre esta definida */
{
	//$res=$conexion->real_escape_string($_POST['anio_publicacion']);
    $query= "SELECT * FROM obra WHERE anio_publicacion LIKE '".$_POST['anio_publicacion'] ."%' ";  
}

//Aqui se crea la tabla que se va a visualizar
$buscarObra=$db->query($query);
if ($buscarObra->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="tabla-tr">
			<td>TITULO</td>
			<td>OBRA</td>
			<td>AÑO PUBLICACIÓN</td>
			<td>REPRESENTACIONES</td>
		</tr>';

	while($filaObra= $buscarObra->fetch_assoc())
	{
		$tabla.=
		//Cambiar estos atributos por los nombres de los campos como estan en su base de datos
		'<tr>
			<td>'.$filaObra['titulo_obra'].'</td>
			<td>'.$filaObra['autor'].'</td>
			<td>'.$filaObra['anio_publicacion'].'</td>
			<td>'.$filaObra['representaciones'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla='<h3>No se encontraron coincidencias en la búsqueda.<h3>';
	}


echo $tabla;
?>