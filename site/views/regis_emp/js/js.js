$(document).ready(function(){

//carga de select dinamico
$(document).on('change', '#municipio', function() {
	

		$.get(base_url+'regis_emp/traer_parroquia',{
	
			id: $('#municipio').val()
			

			}, function(data) {
		


				console.log(data[0].parroquia);


			var html=""

			html+="<option>-selecione-</option>"

			for (var i = 0; i < data.length; i++) {
				
				html+="<option value="+data[i].id_parroquia+">"+data[i].parroquia+"</option>"

			}

			$('#parroquia').html(html);

			},"json");







});

$(document).on('click', '#guardar', function() {
	


		$.get(base_url+'regis_emp/guardar_emp',{

			rif:$("#rif").val(),
			razon_social:$("#razon_social").val(),
			nro_registro:$("#nro_de_registro").val(),
			municipio:$("#municipio").val(),
			parroquia:$("#parroquia").val(),
			direccion:$("#direccion").val(),
			poseep:$("#poseep").val(),
			poseec:$("#poseec").val()

		},function() {
		
		});



});

});