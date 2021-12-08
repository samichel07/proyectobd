<?php

include 'conexion_teatro.php'; 
$id=$_POST["id"];
$obra = implode((isset($_POST['obra']) ? $_POST['obra']: null));
$papel = implode((isset($_POST['papel']) ? $_POST['papel']: null));
$artista = implode((isset($_POST['artista']) ? $_POST['artista']: null));
$interpretaciones=$_POST["interpretaciones"];
$sql = $db->query("INSERT into afinidad (id_afinidad,obra,papel,artista,interpretaciones)
 values ('$id','$obra ','$papel','$artista','$interpretaciones')");

if($sql){
    echo'<script type="text/javascript">
    alert("Se registro con exito");
    window.location.href="tabla_afinidad.php";
    </script>';
}else {
    echo'<script type="text/javascript">
    alert("ERROR :(");
    window.location.href="agregar_afinidad_form.php";
    </script>';
}
?>