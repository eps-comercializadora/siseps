$(document).ready(function(){


$.get(base_url+'regis_emp/traer_parroquia',{
	
			id: $('#municipio').val()
			

			}, function(data) {
		


				console.log(data[0].parroquia);


			var html=""

			html+="<option value=''>-seleccione-</option>"

			for (var i = 0; i < data.length; i++) {
				
				console.log($('#parroquia_2').val()+"--"+data[i].id_parroquia);

				if($('#parroquia_2').val()==data[i].id_parroquia)
				{
					html+="<option selected value="+data[i].id_parroquia+">"+data[i].parroquia+"</option>"
				}else
				{

					html+="<option value="+data[i].id_parroquia+">"+data[i].parroquia+"</option>"
				}

			}

			$('#parroquia').html(html);

			},"json");


});


