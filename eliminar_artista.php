<?php
 
require 'conexion_teatro.php';


if(isset($_GET['nombre_artistico'])){ /* Si no esta vacio el id (viene de la pagina anterior), lo guarda en la variable*/
    $id=$_GET['nombre_artistico'];

    $query = "DELETE FROM artista WHERE nombre_artistico='$id'  ";
    $result=mysqli_query($db,$query);

    if(isset ($result)){
        echo'<script type="text/javascript">
        alert("ARTISTA ELIMINADO CORRECTAMENTE");
        window.location.href="tabla_eliminar_artista.php";
        </script>';
    }else if (!$result){
        die("FALLO EN CONSULTA");
    }
}
	
	
?>