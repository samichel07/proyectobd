<?php
function Conectar (){
$conexion = null;
$HOST ='localhost';
$USER ='root';
$PW ='';
$BD ='teatro';
try{
    $conexion = new PDO('mysql:host='.$HOST.';dbname='.$BD,$USER,$PW);
}
catch(PDOException $e){
    echo '<p>No se puede conectar a la case de datos</p>';
    exit;
}
return $conexion;
}
?>