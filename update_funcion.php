<?php
require 'conexion_teatro.php';
$id=$_POST['id'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];

$sql="UPDATE funcion SET  id_funcion='$id',fecha='$fecha',hora='$hora' WHERE id_funcion='$id'";
$query=mysqli_query($db,$sql);

    if($query){
        echo'<script type="text/javascript">
        alert("Se actualizo correctamente");
        window.location.href="agregar_funciones.php";
        </script>';
        exit;
    }else{
        echo'<script type="text/javascript">
        alert("No se pudo Actualizar");
        window.history.go(-1);
        </script>';
        exit;
    }
    
?>