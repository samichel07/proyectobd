<?php
 
require 'conexion_teatro.php';


if(isset($_GET['nombre_teatro'])){ /* Si no esta vacio el id (viene de la pagina anterior), lo guarda en la variable*/
    $id=$_GET['nombre_teatro'];

    $query = "DELETE FROM teatro WHERE nombre_teatro='$id'  ";
    $result=mysqli_query($db,$query);

    if(isset ($result)){
        echo'<script type="text/javascript">
        alert("TEATRO ELIMINADO CORRECTAMENTE");
        window.location.href="tabla_eliminar_teatro.php";
        </script>';
    }else if (!$result){
        die("FALLO EN CONSULTA");
    }
}
	
	
?>