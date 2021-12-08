<?php
 
require 'conexion_teatro.php';


if(isset($_GET['id'])){ /* Si no esta vacio el id (viene de la pagina anterior), lo guarda en la variable*/
    $id=$_GET['id'];  

    $query = "DELETE FROM papel WHERE papel.nombre_papel='$id' ";
    $result=mysqli_query($db,$query);

    if(isset ($result)){
        echo'<script type="text/javascript">
        alert("PAPEL ELIMINADO CORRECTAMENTE");
        window.location.href="tabla_eliminar_papel.php";
        </script>';
    }else if (!$result){
        die("FALLO EN CONSULTA");
    }
}

?>