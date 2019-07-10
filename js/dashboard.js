//Toasts
function toastSuccess(mensaje){
	VanillaToasts.create({
		title:'Exito',
		text: mensaje,
		type: 'success',
		icon: '../assets/img/success.png',
		timeout: 3000
	});
}

function toastWarning(mensaje){
	VanillaToasts.create({
		title:'Alerta',
		text: mensaje,
		type: 'warning',
		icon: '../assets/img/warning.png',
		timeout: 3000
	});
}

function toastInfo(mensaje){
	VanillaToasts.create({
		title:'Informacion',
		text: mensaje,
		type: 'info',
		icon: '../assets/img/info.png',
		timeout: 3000
	});
}

function toastError(mensaje){
	VanillaToasts.create({
		title:'Error',
		text: mensaje,
		type: 'error',
		icon: '../assets/img/error.png',
		timeout: 3000
	});
}


//Funciones para cargar vistas
function userInsert(){
	$.ajax({
		url:'http://localhost/miangel/sistema/usuario/viewInsert',
		success:function(result){
			$("#dashboard").html(result);
		}
	});
}

$("#item1").click(function(){
	userInsert();
});

$("#item2").click(function() {
	toastWarning('Usuario agregado correctamente');

});

$("#btn").click(function(){
	$.ajax({
		url:'http://localhost/miangel/sistema/usuario/texto',
		success:function(r){
			$("#dashboard").html(r);
		}
	});
	return false;
});