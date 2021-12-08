<?php
 
require 'conexion_teatro.php';


if(isset($_GET['nombre_artistico'])){ /* Si no esta vacio el id (viene de la pagina anterior), lo guarda en la variable*/
    $id=$_GET['nombre_artistico'];

    $query = "DELETE FROM autor WHERE nombre_artistico='$id'  ";
    $result=mysqli_query($db,$query);

    if(isset ($result)){
        echo'<script type="text/javascript">
        alert("AUTOR ELIMINADO CORRECTAMENTE");
        window.location.href="tabla_eliminar_autor.php";
        </script>';
    }else if (!$result){
        die("FALLO EN CONSULTA");
    }
}
	
	
?>