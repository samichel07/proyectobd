<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            
</head>
<body>

<nav>
    <div class="nav-wrapper gray">
      <a  class="brand-logo center"></a>
    </div>
</nav>

<?php 
require_once"modelo.php";
$modelo=new consultas();
$res=$modelo->nombreColumnas();
 ?>

<div class="container">

	<div class="row">
		
		<div class="col s12" style="margin-top: 20%;">
			<form action="tabla.php" method="post">
			<h6>Seleccione la primer tabla: </h6>
			    <select  name="tabla1">
                  <option value="" disabled selected>selecciona una tabla</option>
                  <?php 
                  for ($i=0; $i < count($res) ; $i++) {
                   ?>
                  <option value="<?php echo ($res[$i][0]);?>"><?php echo ($res[$i][0]);?></option>
                  <?php } ?>
          </select>
          <br>
          <br>
      <h6>Seleccione la segunda tabla: </h6>
			    <select  name="tabla2">
                  <option value="" disabled selected >selecciona una tabla</option>
                  <?php 
                  for ($i=0; $i < count($res) ; $i++) {
                   ?>
                  <option value="<?php echo ($res[$i][0]);?>"><?php echo ($res[$i][0]);?></option>
                  <?php } ?>
          </select> 

          <button class="btn waves-effect waves-light" type="submit" name="" onclick="enviar()">Enviar</button>   
      </form>
     <a onclick="cargar()">
      <br>
      <br>
		</div>

		 <div id="tabla">
      	
      </div>
	
	</div>
	

</div>
	
</body>
<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
</script>

<script>
function enviar() {
var numvalores = tabla1.length;
for (i=0;i<numvalores;i++){
tabla1[i].selected = true;
tabla2[i].selected = true;
}
document.fmodificacion.submit();
}
</script>

</html>
