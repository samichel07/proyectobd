//completar segun el numero de funciones creadas
$(obtener_id());
$(obtener_nombre());

//Se creará una funcion por campo
function obtener_id(id)//el nombre de la variable que se manda
{
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { id: id },//Tiene que ser el ultimo 
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

function obtener_nombre(nombre)//el nombre de la variable que se manda
{
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { nombre: nombre },//Tiene que ser el ultimo 
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}


$(document).on('keyup', '#id', function()//#id es el nombre con el que se identifica al input
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_id(valorBusqueda);//Aquí se llama a la función que se declaro arriba
	}
	else
		{
			obtener_id();
		}
});
$(document).on('keyup', '#nombre', function()//#id es el nombre con el que se identifica al input
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_nombre(valorBusqueda);//Aquí se llama a la función que se declaro arriba
	}
	else
		{
			obtener_nombre();
		}
});


