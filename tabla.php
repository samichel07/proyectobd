<?php 
session_start();
$var1=$_POST['tabla1'];
$var2=$_POST['tabla2'];
require_once"modelo.php";
$modelo=new consultas();
$llaves=$modelo->llaves($var1);
$union=$modelo->union($llaves["Column_name"],$var1,$var2);
var_dump($union);
$res=$modelo->nombreTablas($var1);
$res2=$modelo->nombreTablas($var2);
?>;
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    

<body>
    <div class="row">
 <div class="col s10  offset-s1">
<?php
if ($union!=null) {

?>
    <h1>Tabla inner Join</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php
                for ($i=0; $i <count($res) ; $i++) { 
                ?>
                <th><?php echo $res[$i][0] ?></th>
            <?php } ?>

            <?php
                for ($i=0; $i <count($res2) ; $i++) { 
                ?>
                <th><?php echo $res[$i][0] ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                for ($i=0; $i <count($union) ; $i++) { 
                    for ($x=0; $x <count($res)+count($res2) ; $x++) {                      
                ?>
                      <td>
                        <?php echo $union[$i][$x] ?>
                    </td>
                <?php  
                    }
                    echo "</tr>";
                }?>
            
        </tbody>
    </table>
<br><br>
    <?php 
}else 
echo "<h1>No hay relación</h1>";;
    ?>

    <a href="index.php" class="btn">
        Regresar
    </a>

 </div> 

</div> 
 
</body>