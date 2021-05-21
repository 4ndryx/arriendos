(function ($) {
 "use strict";
 
	$("#adressProperty").select2({
		tags: true,
		allowClear: true,
		placeholder: "Seleccionar",
		language: {
			noResults: function(){
				return "No hay resultados"
			},
			searching: function(){
				return "Buscando"
			}
		},
		width: 'resolve'
	});
	$("#idLessee").select2({
		tags: true,
		allowClear: true,
		placeholder: "Seleccionar",
		language: {
			noResults: function(){
				return "No hay resultados"
			},
			searching: function(){
				return "Buscando"
			}
		},
		width: 'resolve'
	});
	$("#idLessor").select2({
		tags: true,
		allowClear: true,
		placeholder: "Seleccionar",
		language: {
			noResults: function(){
				return "No hay resultados"
			},
			searching: function(){
				return "Buscando"
			}
		}
	});

	$("#ppt2Lr").select2({
		tags: true,
		allowClear: true,
		placeholder: "     Seleccionar     ",
		language: {
			noResults: function(){
				return "No hay resultados"
			},
			searching: function(){
				return "Buscando"
			}
		}
	});

	
 






 /*$.post('../controllers/add_contract.php', {lessorId:lessorId}, function(response){
			response = JSON.parse(response);
			$('#select3').html('');
			var o = '<select name = "adress_property" id = "adressProprty" class="chosen-select" tabindex="-1"><option value="">Seleccionar</option>';

			for (var i = 0; i < response.length; i++) {
				var option;
				option += '<option value="/'+response[i][0]+'">'+response[i][0]+'</option>';
				
			}
			o += option;
			o += '</select>';

			$('#select3').append(o);
			console.log(response);
		})*/
})(jQuery); 