function objetoAjax() {
	var xmlhttp = false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function mostrarConsulta(datos) {
	divResultado = document.getElementById('resultadoSearch');
	ajax = objetoAjax();
	ajax.open("GET", datos);

	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4 && ajax.status === 200) {
			divResultado.innerHTML = ajax.responseText;
		};
	}
	ajax.send(null);
}

function dataBusqueda(str) {
	var xmlhttp;
	if (str.length === 0) {
		document.getElementById('dataSearch').innerHTML = "";
		return;
	}
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else { 
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
			document.getElementById("dataSearch").innerHTML = xmlhttp.responseText;
			//document.querySelector("table.info").innerHTML = xmlhttp.responseText;
		}
	};

	xmlhttp.open("GET","app/profiles/transactions/searchData.php?key=" + str, true);
	xmlhttp.send();
}

function validarUsername(str) {
	var xmlhttp;
	var username = document.getElementById('usernamekey').value;
	if (str.length === 0) {
		document.getElementById('txtHint').innerHTML = "";
		return;
	}
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else { 
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
			document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
			//document.querySelector("table.info").innerHTML = xmlhttp.responseText;
		}
	};

	xmlhttp.open("GET","includes/confirmUser.php?key="+str+"&name="+username, true);
	xmlhttp.send();
}

function addcontrolnum(id) {
	$('#thisStNum').attr('value', ''+id);
}

function UpdateDatasDB() {
	$.ajax({
		url: 'app/profiles/direccion/updateDatas.php',
		type: 'UPDATE',
		dataType: 'html',
	})
	.done(function() {
	});
	
}






function showAgreementList() {
	$.ajax({
		url: 'app/profiles/transactions/showAgreementList.php',
		type: 'GET'
	})
	.done(function(data) {
		$('#conveniosfaltantes').html(data);
	})
}
function updateAgreement(id) {
	var datas ="idSt="+id; 
	$.ajax({
		url: 'app/profiles/transactions/updateAgreement.php',
		type: 'POST',
		data: datas
	});
}

function showFacturationList() {
	$.ajax({
		url: 'app/profiles/transactions/showFacturationList.php',
		type: 'GET'
	})
	.done(function(data) {
		$('#facturacion').html(data);
	})
}
function updateFacturation(id,val) {
	var datas = "idSt="+id+"value="+val;
	$.ajax({
		url: 'app/profiles/transactions/updateFacturation.php',
		type: 'POST',
		data: datas
	});
}

function updateActaNac(id) {
	var datas = "idSt="+id;
	$.ajax({
		url: 'app/profiles/transactions/updateActaNacimiento.php',
		type: 'POST',
		data: datas
	});
}

function showProfile() {
	$.ajax({
		url: 'app/views/EditProfile.php',
		type: 'GET'
	})
	.done(function(data) {
		$('#userProfile').html(data);
	});
}

//==================================================================================
//== Funciones para la visializacion, creacion y eliminacion de recordatorios de
//== la pestaña principal.
function viewTask() {
	$.ajax({
		url: 'app/php/tasks.php',
		type: 'GET'
	})
	.done(function( data ) {
		$('#viewTask').html(data);
	})
}
function saveTask() {

	var tarea = $('#tarea').val();
	var todate = $('#tododate').val();
	var priority = $('.priority').val();

	if (tarea != '' && priority != '' && todate != '') {
		var datos = "tarea="+tarea+"&parafecha="+todate+"&p="+priority;

		$.ajax({
			url: 'app/php/addTask.php',
			type: 'POST',
			data: datos,
			dataType: 'html'
		})
		.done(function() {
			viewTask();
			$('#tarea').val('');
			$('#tododate').val('');
			$('.priority').val('');
			$('#guardartarea').click();
			console.log("Nueva tarea agregada con exito");
		})
	} else {
		$('#msgTaskFail').html("<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Uppss!!</strong>Creo que dejo algun campo vacio {:)</div>");
	}
}
function deleteTask (idTask) {
	var idtarea = "id="+idTask;

	$.ajax({
		url: 'app/php/deleteTask.php',
		type: 'POST',
		data: idtarea,
		dataType: 'html'
	})
	.done(function() {
		viewTask();
		console.log("Tarea eliminada con exito");
	})
}

//================================================================================
//== Funcion para mostrar la tabla de horarios de la vista curso pestaña horarios
//================================================================================

function viewSchedule() {
	$.ajax({
		url: 'app/profiles/transactions/showSchedule.php',
		type: 'GET'
	})
	.done(function( data ) {
		$('.schedulecourse').html(data);
	})
}

//===================================================================================
//== Bloque de funciones para mostrar a los alumnos becados y solicitantes mediante
//== AJAX.
//===================================================================================
function showScholars() {
	var dataYes = $('#becadoSi').val();
	var dataNot = $('#becadoNo').val();

	$.ajax({
		url: 'app/profiles/transactions/showScholar.php?becario='+dataYes,
		type: 'GET',
		dataType: 'html'
	})
	.done(function(data) {
		$('#scholarYes').html(data)
	})
	.fail(function() {
		console.log("error");
	});

	$.ajax({
		url: 'app/profiles/transactions/showScholar.php?becario='+dataNot,
		type: 'GET',
		dataType: 'html'
	})
	.done(function(data) {
		$('#scholarNot').html(data)
	})
	.fail(function() {
		console.log("error");
	});
}

function changeThisScholar() {
	$.ajax({
		url: $('form#changeScholar').attr('action'),
		type: 'POST',
		dataType: 'html',
		data: $('form#changeScholar').serialize(),
	})
	.done(function() {
		showScholars();
		$('#closethis').click();
	})
	.fail(function() {
		console.log("error al tratar de conectar con la BD");
	})	
}

//===================================================================================
//== Bloque de Funciones mostrar, ejecutar altas, bajas y edicio de datos de alumnos
//== con o candidatos al registro ante la SEP.
//===================================================================================
function showSepTeacher() {
	$.ajax({
		url: 'app/profiles/maestro/actions/showMySepSts.php',
		type: 'GET'
	})
	.done(function( data ) {
		$('#mySepSts').html(data);
	})
}
function showSepYes() {
	$.ajax({
		url: 'app/profiles/transactions/showStudentSep.php?'+'issep=si',
		type: 'GET',
		dataType: 'html'
	})
	.done(function(data) {
		$('#showResultadoSepSi').html(data)
	})
	.fail(function() {
		console.log("error");
	});
}
function showSepNot() {
	$.ajax({
		url: 'app/profiles/transactions/showStudentSep.php?'+'issep=no',
		type: 'GET',
		dataType: 'html'
	})
	.done(function(data) {
		$('#showResultadoSepNo').html(data);
	})
	.fail(function() {
		console.log("error");
	});
}

function setID (str) {
	var id = str;
	$('#saveSEP').attr('onclick', 'addStudentSep('+str+');');
}

$(function(){
    $(document).on('click','#closeme', function() {
        $('#saveSEP').removeAttr('onclick');
        $('#saveEditSEP').removeAttr('onclick');
    });
});

function addStudentSep(idSt) {
	var stCode = idSt;
	var numReg = $('#num_registro').val();
	var becaSep = $('#becaSep').val();
	var dateReg = $('#fechaRegistro').val();

	if (stCode != '' && numReg!='' && dateReg!='') {
		var datas = "idStudent="+stCode+"&nReg="+numReg+"&beca="+becaSep+"&dReg="+dateReg;
		$.ajax({
			url: 'app/profiles/transactions/addStudentSep.php',
			type: 'POST',
			dataType: 'html',
			data: datas
		})
		.done(function() {			
			$('#closeme').click();
			showSepNot();
			showSepYes();
			$('#num_registro').val('');
			$('#fechaRegistro').val('');
		})
	} else {
		$('#msgRegFail').html("<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Uppss!!</strong>Creo que dejo algun campo vacio {:)</div>");
	}
}

function showDataSep(idSt){
	var ID = idSt;
	var datas = "id="+ID;

	$('#saveEditSEP').attr('onclick', 'editStudentSep('+idSt+');');
	$('#quitSep').attr('onclick', 'removeFromSep('+idSt+');');
	$.ajax({
		url: 'app/views/viewEditDataSep.php?'+datas,
		type: 'GET',
		dataType: 'html',
	})
	.done(function(data) {
		$('#thisDataSep').html(data);
	})
	.fail(function() {
		console.log("error");
	})
}

function editStudentSep(idSt){
	var ID = idSt;
	var registro = $('#numRegis').val();
	var fecha = $('#fechRegis').val();
	var calificacion = $('#calSep').val();
	var beca = $('#infoBeca').val();
	var datas = "id="+ID+"&registro="+registro+"&fechaR="+fecha+"&calific="+calificacion+"&beca="+beca;

	$.ajax({
		url: 'app/profiles/transactions/updateSepData.php',
		type: 'POST',
		dataType: 'html',
		data: datas
	})
	.done(function() {
		$('#cerrar').click();
		showSepYes();
	})
	.fail(function() {
		console.log("error al tratar de actualizar");
	})
}

function removeFromSep(idst) {
	var ID = "idSt="+idst;
	$.ajax({
		url: 'app/profiles/transactions/removeFromSep.php',
		type: 'POST',
		data: ID,
		dataType: 'html'
	})
	.done(function() {
		showSepYes();
		showSepNot();
		$('#cerrar').click();
		console.log("Alumno removido con exito");
	})
}

function getSepList() {
	var clase = $('#gruposep').val();
	var datas = "clase="+clase;
	//alert('id de clase: '+clase);
	$.ajax({
		url: 'app/profiles/transactions/getDataSep.php?'+datas,
		type: 'GET',
		dataType: 'html',
	})
	.done(function(data) {
		$('#listaAlumnosSep').html(data);
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	});
	
}

//==================================================================================
//== Funcion AJAX para cargar la informacion de los alumnos dados de baja.
//==================================================================================
function studentsStandBy() {
	$.ajax({
		url: 'app/profiles/transactions/studentsStandBy.php',
		type: 'GET',
	})
	.done(function(data) {
		$('#listaAlumnosBaja').html(data);
	})
	.fail(function() {
		console.log("error al cargar informacion de alumnos dados de baja");
	});
}

function exStudents() {
	$.ajax({
		url: 'app/profiles/transactions/showExStudents.php',
		type: 'GET',
	})
	.done(function(data) {
		$('#listaExAlumnos').html(data);
	})
	.fail(function() {
		console.log("error al cargar informacion de los ex alumnos");
	});
}


//====================================================================================
//== Bloque de Funciones para obtener los puntos de evaluacion de alumnos. y Mostrar las
//== hojas de resultados.
//====================================================================================
function setReadingAchiev(str){
	$('#reading').attr('value', str);
}
function setWritingAchiev(str){
	$('#writing').attr('value', str);
}
function setSpeakingAchiev(str){
	$('#speaking').attr('value', str);
}
function setListeningAchiev(str){
	$('#listening').attr('value', str);
}
function setReadingEff(str){
	$('#read').attr('value', str);
}
function setWritingEff(str){
	$('#write').attr('value', str);
}
function setSpeakingEff(str){
	$('#speak').attr('value', str);
}
function setListeningEff(str){
	$('#listen').attr('value', str);
}
function setAttitudeEff(str){
	$('#attitude').attr('value', str);
}
function setTeamworkEff(str){
	$('#team').attr('value', str);
}
function setTimingEff(str){
	$('#time').attr('value', str);
}

function saveEvalPAA() {
        var id = $('#keyStudent').val();
        var readingAch = $('#reading').val();
        var writingAch = $('#writing').val();
        var speakinAch = $('#speaking').val();
        var listeningAch = $('#listening').val();
        var readEff = $('#read').val();
        var writeEff = $('#write').val();
        var speakEff = $('#speak').val();
        var listenEff = $('#listen').val();
        var attitEff = $('#attitude').val();
        var teamEff = $('#team').val();
        var timeEff = $('#time').val();
        var periodFrom = $('#pFrom').val();
        var periodTo = $('#pTo').val();
        var ciclo = $('#period').val();
        var subject = $('#tema').val();
        var commit = $('#comentario').val();
        var name = $('#nombreX').val();
        var dateEval = $('#fechaEval').val();


        var datas = "ID="+id+"&readingA="+readingAch+"&writingA="+writingAch+"&speakingA="+speakinAch+"&listeningA="+listeningAch+
        					"&readE="+readEff+"&writeE="+writeEff+"&speakE="+speakEff+"&listenE="+listenEff+"&attE="+attitEff+"&teamE="+teamEff+
        					"&timeE="+timeEff+"&peDe="+periodFrom+"&peA="+periodTo+"&ciclo="+ciclo+"&tema="+subject+"&coment="+commit+"&nombre="+name+"&fEval="+dateEval;
        // alert('El id Corresponde a: '+id+" Datos: "+datas);
        $.ajax({
        	url: 'app/profiles/maestro/actions/saveEval.php',
        	type: 'POST',
        	dataType: 'html',
        	data: datas,
        })
        .done(function(data) {
        	$('#confirmation').html("<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>:)</strong>Datos Guardados con exito</div>");
        })
        .fail(function() {
        	console.log("error");
        });
}

function saveEvalEC() {
	var id = $('#studentID').val();
	var speakinAch = $('#speaking').val();
	var listeningAch = $('#listening').val();
	var speakEff = $('#speak').val();
	var listenEff = $('#listen').val();
	var attitEff = $('#attitude').val();
	var teamEff = $('#team').val();
	var periodFrom = $('#pFrom').val();
	var periodTo = $('#pTo').val();
	var ciclo = $('#periodo').val();
	var subject = $('#tema').val();
	var commit = $('#comentario').val();
	var name = $('#nombreX').val();
	var dateEval = $('#fechaEval').val();
	var datas = "ID="+id+"&speakingA="+speakinAch+"&listeningA="+listeningAch+"&speakE="+speakEff+
	  				"&listenE="+listenEff+"&attE="+attitEff+"&teamE="+teamEff+"&peDe="+periodFrom+
	  				"&peA="+periodTo+"&ciclo="+ciclo+"&tema="+subject+"&coment="+commit+"&nombre="+name+"&fEval="+dateEval;
   // alert('El id Corresponde a: '+id+" Datos: "+datas);
   $.ajax({
        	url: 'app/profiles/maestro/actions/saveEvalEC.php',
        	type: 'POST',
        	dataType: 'html',
        	data: datas,
        })
        .done(function(data) {
        	$('#confirmationCE').html("<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>:)</strong>Datos Guardados con exito</div>");
        })
        .fail(function() {
        	console.log("error");
        });
}

function showEvalSt() {
	var idSt = $('#thisAlumno').val();
	var course = $('#thisCurso').val();
	var ID = "idst="+idSt+"&curso="+course;
	$.ajax({
		url: 'app/views/EvalsPAA.php?'+ID,
		type: 'GET',
		dataType: 'html',
	})
	.done(function(data) {
		$('#dataEval').html(data);
	})
	.fail(function() {
		console.log("error al tratar de mostrar evaluaciones");
	});	
}
function showEvalStTeacher() {
	var idSt = $('#thisStudent').val();
	var course = $('#thisCourse').val();
	var ID = "idst="+idSt+"&curso="+course;
	$.ajax({
		url: 'app/profiles/maestro/actions/thisEvals.php?'+ID,
		type: 'GET',
		dataType: 'html',
	})
	.done(function(data) {
		$('#showEval').html(data);
	})
	.fail(function() {
		console.log("error al tratar de mostrar evaluaciones");
	});	
}


function changeGroupSts(students) {
	var datos = "alumnos="+students;
	$.ajax({
		url: 'app/php/changeGroupSts.php',
		type: 'POST',
		dataType: 'html',
		data: datos
	})
	.done(function() {
		$('#messageSuccess').html("<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Congrats!!</strong>El cambio se hizo muy bien "+datos+"</div>");
		console.log("cambio de grupo de multiples alumnos existoso");
	})	
}

function pruebas(argument) {
	$('#messageSuccess').html("<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Congrats!!</strong>El cambio se hizo muy bien "+argument+"</div>");
}

