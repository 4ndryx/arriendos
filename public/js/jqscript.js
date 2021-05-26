$(function(){
	'use strict'

	var l = 'https://andryxarriendos.herokuapp.com/';


	$('#loader-wrapper').fadeOut();
	function verifyDatas(){
		var user = $('#userData').serialize();

		$.post(l + '/controllers/login.php', user, function(response){
			response = JSON.parse(response);
			console.log(response);
			if (response.result){

				window.location.href = l+'/controllers/dashboard.php';

			}else {
				$('#userData').append($('<p id = "error"></p>'));
				$('#error').text('');
				$('#error').text('Dato(s) errado(s)');
			}

		});

	}

function validateEmpty(){
	$('input').attr('style','border: 1px solid #ced4da;');
	for(var i=0; i<($('input').length-3);i++){
	    if($($('input')[i]).val() == ''){
	        $($('input')[i]).attr('style','border-color: red');
	    }
	}
	for(var i=0; i<($('input').length-3);i++){
	    if($($('input')[i]).val() == ''){
	    return true;
	    }
	}
}


//login
	function sendEmail(){
	var email = $('#fgt_pass_form').serialize();

		$.post(l + '/controllers/login.php', email, function(response){
			console.log(response);
			response = JSON.parse(response);
			if (response.result){

				$('.registrar').text(response.msg);
			}else {
				$('#fgt_pass_form').append($('<p id = "error"></p>'));
				$('#error').text('');
				$('#error').text(response.msg);
			}

		});

	}

	$('#SignIn').click(function(e){
		e.preventDefault();
		if($('form').attr('id') == 'userData'){
			verifyDatas();
		}else {
			sendEmail();
		}
	});




//agregar usuarios
function addUser(){

var user = $('#addUserForm').serialize();
		$.post(l + '/controllers/add_user.php', user, function(response){
			response = JSON.parse(response);
			if (response.result) { 
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha guardado exitosamente!'
				})
			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha guardado!'
			      })}

		});
	}


	$('#addUserBtn').click(function(e){
		e.preventDefault();
		if(validateEmpty()){
			$('.error-message').text('Por favor llenar todos los campos obligatorios');
		}else {
			$('.error-message').text('');
			addUser();
		}
	})





	//agregar propriedades
function addProperty(that){

	var property = new FormData(that);

	for (var value of property.entries()){
	console.log(value[0]+' '+value[1]);}

	$.ajax({
		url: l + '/controllers/add_property.php',
		data: property,
		type: 'POST',
		dataType:'json',
		processData: false,
		cache: false,
		async: true,
		contentType:false,
		success: function(response){

		if (response.result) { 
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha guardado exitosamente!'
				})
				setTimeout(window.location.href = l+'/controllers/show_property_profile.php?id=' + response.t[1][0], 4000 );

			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha guardado!'
			      })}}


		})
	}

$('#addPropertyForm').submit(function(e){
		e.preventDefault();
		if(validateEmpty()){
			$('.error-message').text('Por favor llenar todos los campos obligatorios');
		}else {
			$('.error-message').text('');
			addProperty(this);
		}
	})





//add lessee
function addLessee(that){
	var lessee = new FormData(that);
	$.ajax({
		url:l + '/controllers/add_lessee.php',
		data: lessee,
		type:'POST',
		dataType:'json',
		contentType:false,
		cache: false,
		processData:false,
		async:true,
		success: function(response){

				console.log(response);
if (response.result) { 

				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha guardado exitosamente!'
				});
				setTimeout(window.location.href = l+'/controllers/show_lessee_profile.php?id=' + response.t, 4000 );

			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha guardado!'
			      })}		
			}
	})

}

$('#addLesseeForm').submit(function(e){
		e.preventDefault();
		if(validateEmpty()){
			$('.error-message').text('Por favor llenar todos los campos obligatorios');
		}else {
			$('.error-message').text('');
			addLessee(this);
		}
	})






//add Lessor
function addLessor(that){
	var lessor = new FormData(that);

	$.ajax({
		url:l + '/controllers/add_lessor.php',
		data:lessor,
		type:'POST',
		dataType:'json',
		contentType:false,
		processData:false,
		cache:false,
		async:true,
		success: function(response){
		if (response.result) { 
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha guardado exitosamente!'
				});
				setTimeout(window.location.href = l+'/controllers/show_lessor_profile.php?id=' + response.t, 4000 );
			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha guardado!'
			      })}		}
	})
}

$('#addLessorForm').submit(function(e){
	e.preventDefault();
	if(validateEmpty()){
		$('.error-message').text('Por favor llenar todos los campos obligatorios');
	}else{
		$('.error-message').text('');
		addLessor(this);
	}
})



function cleanLessorProperty(){

		$('#adressProperty').children().remove();
		for (var i = 0; i < 10; i++) {
			$($('.ppt')[i]).val('');
		}
}




function loadLessee(that){
	var lesseeId = $(that).val();

	$.post(l + '/controllers/add_contract.php',{lesseeId:lesseeId},function(response){
		response = JSON.parse(response);
		for (var i = 0; i < 9; i++) {
			$($('.ls')[i]).val(response[i]);
		}
		if (response[9]){
			$('#leProfilePic').attr('src', l + '/public/img/lessee_img/' + response[9]);
		}
	})
}

$('#idLessee').change(function(e){
	loadLessee(this);
})



function loadLessor(that){
	var lessorId = $(that).val();

	$.post(l + '/controllers/add_contract.php',{lessorId:lessorId},function(response){

		response = JSON.parse(response);
		for (var i = 0; i < 10; i++) {
			$($('.lr')[i]).val(response[0][i]);
		}
		if (response[0][9]){
		console.log(response);
			$('#lrProfilePic').attr('src', l + '/public/img/lessor_img/' + response[0][9]);
		}

		if (response[1].length>0){
			$('#adressProperty').append(new Option('Seleccionar',''))
			for (var i = 0; i < (response[1].length); i++) {
				$('#adressProperty').append(new Option(response[1][i][0],response[1][i][0]));
			}
		}
	})
}

$('#idLessor').change(function(e){
	cleanLessorProperty();
	loadLessor(this);
})



function loadProperty(that){
	var propertyAdress = $(that).val();

	$.post(l + '/controllers/add_contract.php',{propertyAdress:propertyAdress},function(response){
		// console.log(response);
		response = JSON.parse(response);
		for (var i = 0; i < 10; i++) {
			$($('.ppt')[i]).val(response[i]);
		}
	})
}

$('#adressProperty').change(function(e){
	loadProperty(this);
})




function deleteLessee(id){

	$.get(l + '/controllers/show_lessee.php?action=delete&id=' + id, function(response){
			response = JSON.parse(response);
			if (response.result) { 
				$('#' + id).remove();
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha borrado exitosamente!'
				})
			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha borrado!'
			      })}
	});
}

$('.deleteLesseeBtn').click(function(e){
	e.preventDefault();
	var parent = $($(this).parent().parent().parent());
	var id = parent.attr('id');
	deleteLessee(id);
})

function deleteLessor(id){

	$.get(l + '/controllers/show_lessor.php?action=delete&id=' + id, function(response){
			response = JSON.parse(response);
			if (response.result) { 
				$('#' + id).remove();
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha borrado exitosamente!'
				});

			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha borrado!'
			      })}
	});
}

$('.deleteLessorBtn').click(function(e){
	e.preventDefault();
	var parent = $($(this).parent().parent().parent());
	var id = parent.attr('id');
	deleteLessor(id);
})


function deleteLeProfile(id){

	$.get(l + '/controllers/show_lessee.php?action=delete&id=' + id, function(response){
			response = JSON.parse(response);
		    if (response.result) { 
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha borrado exitosamente!'
				});
				setTimeout(window.location.href = l+'/controllers/show_lessee.php', 4000 );
			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha borrado!'
			      })}
	});
}

$('.deleteLeProfileBtn').click(function(e){
	e.preventDefault();
	var id = $('#id').text();
	deleteLeProfile(id);
});


function deleteLrProfile(id){

	$.get(l + '/controllers/show_lessor.php?action=delete&id=' + id, function(response){
			response = JSON.parse(response);
		    if (response.result) { 
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha borrado exitosamente!'
				});
				setTimeout(window.location.href = l+'/controllers/show_lessor.php', 4000 );
			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha borrado!'
			      })}
	});
}

$('.deleteLrProfileBtn').click(function(e){
	e.preventDefault();
	var id = $('#id').text();
	deleteLrProfile(id);
});


function savePpt2Lr(val){
	var lrId = $('#lrId').val();
			console.log(val, lrId);

	$.post(l + '/controllers/show_lessor_profile.php',{pptId:val, lrId:lrId},function(response){
		console.log(tr);
		response = JSON.parse(response);
		var ppt = response.response[1];
		var val = ppt['id'];

		var tr = $('<tr><td>' + ppt['adress'] +'</td><td>'+ppt['type'] + '</td><td>' + ppt['area'] + '</td><td><a class="btn btn-primary btn-sm col-lg-12 mx-auto" href="show_property_profile.php?id=' + ppt['id'] +'" title="Ver"><i class="fa fa-folder"></i></a></td></tr>')
		
		if (response.response[0]) {
			$('#no_ppt').remove();
			for (var i = 0; i < $('#ppt2Lr').children().length; i++) {
				if ($($('#ppt2Lr').children()[i]).val() == val) {
					console.log('borrado');
					$('#ppt2Lr').children()[i].remove();
				}
			}
			$('#tppt').prepend(tr);

				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Propriedad asignada correctamente!'
				})
		}
	})
}

$('#addppt2lrBtn').click(function(e){
	e.preventDefault();
	var val = $('#ppt2Lr').val();
	savePpt2Lr(val);
})

function addContract(that){

var contract = $(that).serialize();
		$.post(l + '/controllers/add_contract.php', contract, function(response){
			response = JSON.parse(response);
			if (response.result) { 
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha guardado exitosamente!'
				});
				setTimeout(window.location.href = l+'/controllers/show_contract_format.php?id=' + response.t[1][0], 4000 );
			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha guardado!'
			      })}

		});
	}


$('#createContractForm').submit(function(e){
	e.preventDefault();
	if(validateEmpty()){
		$('.error-message').text('Por favor llenar todos los campos obligatorios');
	}else{
		$('.error-message').text('');
		addContract(this);
	}
})



function deleteContract(id){

	$.get(l + '/controllers/show_contract.php?action=delete&id=' + id, function(response){
			response = JSON.parse(response);
			$('#' + id).remove();
		    if (response.result) { 
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha borrado exitosamente!'
				})
			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha borrado!'
			      })}
	});
}

$('.deleteContractBtn').click(function(e){
	e.preventDefault();
	var parent = $($(this).parent().parent().parent());
	var id = parent.attr('id');
	deleteContract(id);
})
function deleteCttProfile(id){

	$.get(l + '/controllers/show_contract.php?action=delete&id=' + id, function(response){
			response = JSON.parse(response);
		    if (response.result) { 
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'success',
			        title: 'Se ha borrado exitosamente!'
				});
				setTimeout(window.location.href = l+'/controllers/show_contract.php', 4000 );
			}else{
				Swal.fire({
		    		toast: true,
		    		position: 'top-end',
		    		showConfirmButton: false,
		    		timer: 3000,			        
		    		icon: 'error',
			        title: 'Hubo un error, no se ha borrado!'
			      })}
	});
}

$('.deleteCttProfileBtn').click(function(e){
	e.preventDefault();
	var id = $(this).attr('id');
	deleteCttProfile(id);
});

$('.fgt_pass').click(function(e){e.preventDefault; 
	$('.dato2').remove(); 
	$('#userName').attr({'id' : 'fgt_email', 'name' : 'fgt_email'}); 
	$('.fgt_pass').remove(); 
	$('#error').remove(); 
	$('.registrar').text('Ingresar el correo electronico asociado a la cuenta');
	$('.inputext').text('Correo electronico');
	$('.inputext').attr('for', 'fgt_email');
	$('#userData').attr({'id' : 'fgt_pass_form'});
	$('#SignIn').text('Siguiente ');
	$('#SignIn').append($('<i class="mdi mdi-send"></i>'));
	$('#fgt_pass_form').append($('<button type = "button" class="startSessbtn" ><i class="mdi mdi-user"></i> <a class="startSess" href="'+ l+ '/controllers/login.php">Iniciar Session</a></button>'));
});

	function sendNewPass(that){
	var data = $(that).serialize();

		$.post(l + '/controllers/reset.php', data, function(response){
			console.log(response);
			response = JSON.parse(response);

			if (response.result){
			response = JSON.parse(response);

				$('.registrar').text(response.msg);
			}else {
				$('#passReset').append($('<p id = "error"></p>'));
				$('#error').text('');
				$('#error').text(response.msg);
			}

		});

	}

	$('#passReset').submit(function(e){
		e.preventDefault();
			sendNewPass(this);

	});


function disableBtn(){
	$('.btn-primary').attr('disabled', 'disabled');
}
disableBtn();


function validateBlurEmpty(that){
	$(that).attr('style','border: 1px solid #ced4da;');

	if($(that).val() == ''){
	    $(that).attr('style','border-color: red');
	    return true;
	}

}
function validateNameL(that){
	$(that).attr('style','border: 1px solid #ced4da;');

	if($.trim($(that).val()).length <= 2){
	    $(that).attr('style','border-color: red');
		$($($(that).next()[0]).children()[1]).text('El campo debe tener mas de 2 letras. ');
	    return true;
	}

}

for(var i=0; i<$('input').length-3;i++){
    $($('input')[i]).blur(function(e){
		$($($(this).next()[0]).children()[1]).text('');
		if (validateBlurEmpty(this)){
			$($($(this).next()[0]).children()[1]).text('Este campo no peude quedarse vacio. ');
		}
		validateOthers()
	})
}

function validateNameChars(that){
	$(that).attr('style','border: 1px solid #ced4da;');

	var regex = /^[a-zA-Z]+$/;

	if(regex.test($(that).val())){
	    return true;
	}else{
	    $(that).attr('style','border-color: red');
		$($($(that).next()[0]).children()[1]).text('El campo no debe llevar caracteres especiales. ');
	}
}

var charValidate = $('#Ocupation, #nationality, #CivilState, #pType , #pState , #pDescription');
for (var i = 0; i < charValidate.length; i++) {
	$(charValidate[i]).on('input', function(e){
		$($($(this).next()[0]).children()[1]).text('');
		validateNameChars(this);
	})
}

var names = $('#FName, #LName');
for (var i = 0; i < names.length; i++) {
	$(names[i]).on('input', function(e){
		$($($(this).next()[0]).children()[1]).text('');
		if (validateNameChars(this)){
				validateNameL(this);
		}
	})
}

function validatePhone(that){
	$(that).attr('style','border: 1px solid #ced4da;');
	var regex = /^[(+58||0)]\d{10}$/;

	if(!regex.test($(that).val())){
	    $(that).attr('style','border-color: red');
		$($($(this).next()[0]).children()[1]).text('Numero de telefono invalido. ');
	    return true;
	}
	
}

var phones = $('#CellPhone, #HomePhone');
for (var i = 0; i < phones.length; i++) {
	$(phones[i]).blur(function(e){
		validatePhone(this);
	})
}

function validateEmail(that){
	$(that).attr('style','border: 1px solid #ced4da;');
	var regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+[^<>()\.,;:\s@\"]{2,})$/;

	if(!regex.test($(that).val())){
	    $(that).attr('style','border-color: red');
		$($($(this).next()[0]).children()[1]).text('Correo invalido. ');
	    return true;
	}
}
	

$('#Email').blur(function(e){
	validateEmail(this);
	})

function validateOthers(){
			$('.btn-primary').removeAttr('disabled');
	for(var i=0; i<$('input').length-3;i++){
		if ($.trim($($('input')[i]).val()) == '' && $($($(this).next()[0]).children()[1]).text() !== '' ){
		disableBtn();
					return true;
				}
	}
}









});



