var printCent = 1;
function CalendarInit() {

    "use strict";

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    var hdr = {};

    if ($(window).width() <= 767) {
        hdr = { left: 'title', center: '', right: 'prev,today,month,agendaWeek,agendaDay,next' };
    } else {
        hdr = { left: '', center: 'title', right: 'prev,today,month,agendaWeek,agendaDay,next' };
    }

    if(localStorage.getItem('vista')==1){
        $("#todasReuniones span").text('Mostrar MIS reuniones');
    }else{
        $("#todasReuniones span").text('Mostrar todas las reuniones');
    }

    if(sessionStorage.getItem('vista')==null){
        sessionStorage.setItem('vista','agendaWeek');
        sessionStorage.setItem('intervalo',moment());
    }

    $('#scheduler_here').fullCalendar({
        header: hdr,
        aspectRatio: 2,
		defaultView: sessionStorage.getItem('vista'),
        defaultDate: sessionStorage.getItem('intervalo'),
        buttonText: {
			today: 'Hoy',
			month: 'Mes',
			week: 'Semana',
			day: 'Dia'
        },
		firstDay: 1,
        axisFormat: 'HH:mm',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
		dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
        editable: false,
        windowResize: function (event, ui) {
            $('#scheduler_here').fullCalendar('render');
        },
		minTime: "07:00:00",
		maxTime: "21:00:00",
		selectable: true,
		select: function(start, end, allDay) {
            $('#horaIni').timepicker('setTime', new Date(moment(start).format('MMMM DD, YYYY HH:mm:ss')));
            $('#horaFin').timepicker('setTime', new Date(moment(end).format('MMMM DD, YYYY HH:mm:ss')));
            $('#formModal1 #dp3').data({date:new Date(moment(start).format('MMMM DD, YYYY HH:mm:ss'))});
			$('#formModal1 #dp3').datepicker('update');
			$('#formModal1 #dp3').datepicker().children('input').val(moment(start).format('YYYY-MM-DD'));
            $('#formModal1').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#formModal1').modal('show');
		},
        viewRender: function(view,element){
            sessionStorage.setItem('vista',view.name);
            sessionStorage.setItem('intervalo',view.intervalStart);
        },
		eventRender: function(event, element){
			
		},
		eventClick: function(calEvent, jsEvent, view) {
			// change the border color just for fun
            $.ajax({
                url: '../info/reunion/reunionInfo/'+calEvent.identReunion,
                type: 'post',
                success: function(request,settings)
                {
                    var meses = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                    var obj = $.parseJSON(request);
                    //var fecha = timeConverter(1,obj.agenda[0].agReunion.reFecha.timestamp);
                    var fecha = new Date(obj.reunion.reFecha.timestamp*1000);
                    $("#idReunion").val(obj.reunion.reId);
                    $("#temaE").val(obj.reunion.reTema);
                    $("#lugarE").val(obj.reunion.reLugar);
                    $('#horaIniE').timepicker({
                        'timeFormat': 'H:i',
                        'minTime': '7:00',
                        'maxTime': '21:00',
                        'step':15,
                        'showDuration': false
                    })
                    $("#horaIniE").timepicker('setTime', obj.reunion.reHoraInicio);
                    $('#horaIniE').on('changeTime', function() {
                        $('#horaFinE').timepicker('option','minTime',$('#horaIniE').val());
                    });
                    var horaFinTemp = obj.reunion.reHoraInicio;
                    var horaFinTemp2 = horaFinTemp.split(":");
                    if(horaFinTemp2[0] > 12)
                        horaFinTemp = (horaFinTemp2[0]-12) + ":30" + "pm";
                    else
                        horaFinTemp += "am";
                    $('#horaFinE').timepicker({
                        'timeFormat': 'H:i',
                        'minTime': horaFinTemp,
                        'maxTime': '21:00',
                        'step':15,
                        'showDuration': false
                    });
                    $("#confAsistencia").addClass("collapse");
                    $('#horaFinE').timepicker('setTime', new Date(meses[fecha.getMonth()]+' '+fecha.getDate()+', '+fecha.getFullYear()+' '+obj.reunion.reHoraFin));
                    fecha = timeConverter(1,obj.reunion.reFecha.timestamp);
                    $("#organizador").prop('disabled',true);
					/*Hasta antes del else es para hacer editable el formulario para Secretaria o el organizador de la reunión*/
                    if((obj.isOrganizador || obj.isSecretaria) && obj.reunionEstado){
                        $("#asistencia").removeClass("collapse");
                        $("#printOpt").addClass('collapse');
                        $("#idReunion").removeAttr('readonly');
                        $("#temaE").removeAttr('readonly');
                        $("#lugarE").removeAttr('readonly');
                        $('#crearTopicoE').removeClass('collapse');
                        $('#participantesM_chosen').removeClass('collapse');
                        $('#fechaE').removeAttr('readonly');
                        $('#participantesML').addClass('collapse');
                        $('#editOpt').removeClass('collapse');
                        $('#fechaNE').addClass('collapse');
                        $('#fechaE').removeClass('collapse');
                        //$('#participantesM').prop('selectedIndex',0);
                        $("#parti_asist").empty();
                        if(obj.isSecretaria){
                            $("#organizador").removeAttr('disabled');
                        }
                        $.each(obj.participantes, function(i, item){
                            var s1 = "";
                            var s = "";
                            $("#us_"+item.ptUsuario.usId).attr('selected','selected');
                            if(item.ptIsorganizador==1 || item.ptIsorganizador==2){
                                //$("#us_"+item.ptUsuario.usId).attr('disabled','disabled');
                                $("#us_"+item.ptUsuario.usId).remove();
                                if(item.ptIsorganizador==1){
                                    $("#uso_"+item.ptUsuario.usId).attr('selected','selected');
                                    $("#organizador").trigger("chosen:updated");
                                }
                            }else{
                                if(item.ptAsist==1){
                                    s1 ='checked="checked"';
                                }
                                s += '<div class="checkbox row">'+
                                '<label class="col-lg-7 col-lg-offset-1">'+
                                '<input class="uniform" name="asistencia[]" type="checkbox" '+s1+' value="'+item.ptUsuario.usId+'" />'+
                                item.ptUsuario.usNombre+' '+item.ptUsuario.usApellido+
                                '</label>';
                                if(item.ptAsist==-1){
                                    s+= '<i class="icon-warning-sign col-lg-1"></i>';
                                    s+= '<button type="button" class="btn btn-default btn-xs" data-container="body" data-toggle="popover" data-placement="top" data-content="'+item.ptMotivo+'">'+
                                    'Motivo'+
                                    '</button>';
                                }else if(item.ptAsist==2){
                                    s+= '<i class=" icon-ok col-lg-1"></i><span>Asistirá</span>';
                                }
                                s+='</div>';
                                $("#parti_asist").append(s);
                            }
                        });
                        $("#participantesM").trigger("chosen:updated");
                        $("#agendaE").empty();
                        $.each(obj.agenda, function(i, item){
                            $("#agendaE").append('<li><input class="col-lg-10" name="topicos[]" value="'+item.agNombre+'"/>'+
                            '<button class="desplegarAcuerdo btn btn-success btn-circle btn-xs" type="button" alt="Desplegar Acuerdo"><i class="icon-circle-arrow-down"></i></button>'+
                            '<button class="col-lg-offset-1 borrarTopico btn btn-danger btn-circle btn-xs" type="button" alt="Crear Orden del D&iacute;a"><i class="icon-eraser"></i></button>'+
                            '<blockquote class="collapse col-lg-offset-1">'+
                            '<h6>Acuerdo:</h6>'+
                            '<textarea class="col-lg-10" rows="3" name="acuerdo[]">'+item.agAcuerdo+'</textarea>'+
                            '<p style="clear:both;"></p>'+
                            '</blockquote></li>');
                        });
                        $('#fechaEWid').datepicker().val(fecha);
                        $('#fechaEWid').datepicker('update');
                    }
                    else{
                        if(obj.reunionEstado && obj.isParticipante){
                            $("#confAsistencia").removeClass("collapse");
							$("#asistenciaCon").bootstrapSwitch('state',obj.asistira);
							if(!obj.asistira){
								$("#motivo").removeClass("collapse");
								$("#motivo textarea").val(obj.motivo);
								$("#assist").val(obj.asistira);
							}
                        }
                        $("#asistencia").addClass("collapse");
                        $("#idReunion").prop('readonly', true);
                        $("#temaE").prop('readonly', true);
                        $("#lugarE").prop('readonly', true);
                        $('#horaIniE').timepicker('remove');
                        $('#horaFinE').timepicker('remove');
                        $('#horaIniE').prop('readonly', true);
                        $('#horaFinE').prop('readonly', true);
                        $('#fechaE').addClass('collapse');
                        $('#fechaNE').removeClass('collapse');
                        $('#crearTopicoE').addClass('collapse');
                        $('#participantesM_chosen').addClass('collapse');
                        $('#editOpt').addClass('collapse');
                        $("#printOpt").removeClass('collapse');
                        $('#participantesML').removeClass('collapse');
                        $('#fechaNE input').val(fecha);
                        $('#participantesML').empty();
                        $("#parti_asist").empty();
                        $.each(obj.participantes, function(i, item){
                            if(item.ptIsorganizador==1){
                                $('#participantesML').append('<li>'+item.ptUsuario.usNombre+' '+item.ptUsuario.usApellido+'<strong>(Organizador)</strong></li>');
                                $("#uso_"+item.ptUsuario.usId).attr('selected','selected');
                                $("#organizador").trigger("chosen:updated");
                            }else if(item.ptIsorganizador!=2){
                                $('#participantesML').append('<li>'+item.ptUsuario.usNombre+' '+item.ptUsuario.usApellido+'</li>');
                            }
                        });
                        $("#agendaE").empty();
                        $.each(obj.agenda, function(i, item){
                            $("#agendaE").append('<li>'+item.agNombre+'</li>');
                        });

                    }
                    $('#formModal2').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#formModal2').modal('show');
                    $('[data-toggle=popover]').popover();
                },
                error: function(request,settings)
                {
                    alert(request.errorContext);
                }
            });
			$(this).css('border-color', 'red');
        },
        events: '../info/reunion/reunionesInfo/'+localStorage.getItem('vista')
    });
}
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    //document.getElementById('hora').innerHTML = h+":"+m+":"+s;
    $("#hora").text(h+":"+m+":"+s);
    var t = setTimeout(function(){startTime()},500);
}
function checkTime(i) {
	if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
	return i;
}
$(document).ready(function() {

  $('#submitButton').on('click', function(e){
    // We don't want this to act as a link so cancel the link action
    e.preventDefault();
	temp = $("#formReunion1").validationEngine('validate');
	if(temp)
		doSubmit(1);
  });
  $('#GuardarButton').on('click', function(e){
    // We don't want this to act as a link so cancel the link action
    e.preventDefault();
    temp = $("#formReunion2").validationEngine('validate');
    if(temp)
        doSubmit(2);
  });
  $('#ConfirmarButton').on('click', function(e){
	// We don't want this to act as a link so cancel the link action
	e.preventDefault();
	temp = $("#formReunion2").validationEngine('validate');
	if(temp)
		doSubmit(2);
  });
  $('#endReunion').on('click', function(e){
    // We don't want this to act as a link so cancel the link action
    e.preventDefault();
    $("#finalizarReu").val("finalizada");
    temp = $("#formReunion2").validationEngine('validate');
    if(temp)
        doSubmit(2);
  });
    $('#cancelarReunion').on('click', function(e){
        // We don't want this to act as a link so cancel the link action
        e.preventDefault();
        $("#finalizarReu").val("cancelada");
        temp = $("#formReunion2").validationEngine('validate');
        if(temp)
            doSubmit(2);
    });
  $("#todasReuniones").on('click',function(e){
      var temp = localStorage.getItem('vista');
      if(temp==1){
          localStorage.setItem('vista',0);
      }else{
          localStorage.setItem('vista',1);
      }
      window.location.href=window.location.href;
  });
  $("#crearTopico").on("click",function(){
    $("#agenda").append('<li><input class="col-lg-10" name="topicos[]"/>'+
    '<button class="col-lg-offset-1 borrarTopico btn btn-danger btn-circle btn-xs" type="button" alt="Crear t&oacute;pico"><i class=" icon-eraser"></i></button><p></p></li>');
  });

  $("#crearTopicoE").on("click",function(){
    $("#agendaE").append('<li><input class="col-lg-10" name="topicos[]"/>'+
    '<button class="desplegarAcuerdo btn btn-success btn-circle btn-xs" type="button" alt="Desplegar Acuerdo"><i class="icon-circle-arrow-down"></i></button>'+
    '<button class="col-lg-offset-1 borrarTopico btn btn-danger btn-circle btn-xs" type="button" alt="Crear t&oacute;pico"><i class=" icon-eraser"></i></button>'+
    '<blockquote class="collapse col-lg-offset-1">'+
    '<h6>Acuerdo:</h6>'+
    '<textarea class="col-lg-10" rows="3" name="acuerdo[]"></textarea>'+
    '<p style="clear:both;"></p>'+
    '</blockquote></li>');
  });

  $("#agenda").on("click","button.borrarTopico",function(){
	$(this).closest('li').remove();
  });

  $("#agendaE").on("click","button.borrarTopico",function(){
    $(this).closest('li').remove();
  });

  $("#agendaE").on("click","button.desplegarAcuerdo",function(){
      if($(this).closest('li').find('blockquote').hasClass('collapse')){
          $(this).closest('li').find('blockquote').removeClass('collapse');
      }else{
          $(this).closest('li').find('blockquote').addClass('collapse');
      }
  });

  $(".printButton").on("click",function(){
      var win = window.open("../info/reunion/reunionPDF/"+$("#idReunion").val(), '_blank');
      win.focus();
  });

  $(".printButton2").on("click",function(){
    if($("#rangoFecha").val()=="0Z0"){
        alert("Por favor ingrese filtros de busqueda antes de imprimir.");
    }else{
        var win = window.open("../info/reunion/reportePDF/"+$("#rangoFecha").val()+'Z'+$("#usuarioConsultar").val()+'Z'+printCent, '_blank');
        win.focus();
    }
  });
  
  $(".closeModal").on("click",function(){
      if(!$("#confAsistencia").hasClass("collapse")){
		  var motivo = $('textarea[name="motivo"]').val();
		  if(motivo.length === 0 && !$("#asistenciaCon").bootstrapSwitch('state')){
			alert('No ingresó un motivo, no se guardará su asistencia a la reunión');
			return;
		  }else{
			$("#formReunion2").submit(function(event){
                $.ajax({
					url: '../reunion/confirmar',
					data: $("#formReunion2").serialize(),
					type: 'post'
				}).done(function() {
					console.log("Motivo Guardado Correctamente");
				}).fail(function() {
					console.log("Error al guardar el motivo");
				});
				event.preventDefault(); // Prevent the form from submitting via the browser.
			});
            $("#formReunion2").submit();
		  }
	  }
	  window.location.href=window.location.href;
  });
  
    $('#horaIni').timepicker({
        'timeFormat': 'H:i',
        'minTime': '7:00',
        'maxTime': '21:00',
        'step':15,
        'showDuration': false
    });

    $('#horaIni').on('changeTime', function() {
        $('#horaFin').timepicker('option','minTime',$('#horaIni').val());
    });

    $('#horaFin').timepicker({
        'timeFormat': 'H:i',
        'minTime': '7:00',
        'maxTime': '21:00',
        'step':15,
        'showDuration': false
    });

    $('#fechaEWid').datepicker();
    $('#dp3').datepicker();

    $(".chzn-select").chosen({ width: '95%' });

    $("#asistenciaCon").bootstrapSwitch({
        onText:'SI',
        offText:'NO',
        indeterminate:true
    }).on('switchChange.bootstrapSwitch', function(event, state) {
        if(!state){
            $("#motivo").removeClass("collapse");
        }else{
            $("#motivo").addClass("collapse");
        }
		$("#assist").val(state);
    });

    $('[data-toggle=popover]').popover();

    $('#reservation').daterangepicker({
        locale: {
            applyLabel: 'Aceptar',
            cancelLabel: 'Limpiar',
            fromLabel: 'Desde',
            toLabel: 'Hasta',
            customRangeLabel: 'Personalizado',
            daysOfWeek: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi','Sa'],
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            firstDay: 1
        }
    }, function(start, end, label) {
        var inicio = start.toISOString().split('T');
        var fin = end.toISOString().split('T');
        llenarTablaReporte(inicio,fin);
    });

    $('#consultarU').chosen().change(function(event){
        $('#usuarioConsultar').val($('#consultarU').chosen().val());
    });

    /*$('#dataTablesReunion').dataTable();
    $('#dataTablesAsistencia').dataTable();*/

});
function doSubmit(n){
    $("#formModal"+n).modal('hide');
    $("#formReunion"+n).submit();
	$("#finalizarReu").val('');
}
function timeConverter(num,UNIX_timestamp){
    var time = 0;
    var a;
    switch(num){
        case 1:
            a = new Date(UNIX_timestamp*1000);
            break;
        case 2:
            a = UNIX_timestamp;
            break;
        default:
            break;
    }
    var year = a.getFullYear();
    var mes,dia;
    if((a.getMonth()+1)<10){
        mes = '0'+ (a.getMonth()+1);
    }else{
        mes = a.getMonth()+1;
    }
    if((a.getDate())<10){
        dia = '0'+(a.getDate());
    }else{
        dia = a.getDate();
    }
    time = year + '-' + mes + '-' + dia;
    return time;
}
function llenarTablaReporte(inicio,fin){
    $("#rangoFecha").val(inicio[0]+"Z"+fin[0]);
    $.ajax({
        url: '../info/reunion/reunionReporte/' + inicio[0]+"Z"+fin[0] +"Z"+$('#usuarioConsultar').val(),
        type: 'post',
        success: function (request, settings) {
            var obj = $.parseJSON(request);
            $("#dataTablesReunion tbody").empty();
            if(obj.size!=0){
                $.each(obj, function(i, item){
                    if(i!="asistidas" && i!="size"){
                        var mainS="";
                        var fecha = new Date(item.reunion.reFecha.timestamp*1000);
                        var fechaS = fecha.toISOString().split("T");
                        mainS+='<tr>'+
                        '<td>'+item.reunion.reTema+'</td>'+
                        '<td>'+item.reunion.reLugar+'</td>'+
                        '<td>'+fechaS[0]+"  "+item.reunion.reHoraInicio+" - "+item.reunion.reHoraFin+'</td>'+
                        '<td class="center"><ul>';
                        $.each(item.agenda,function(i,agnd){
                            mainS+='<li>'+agnd.agNombre+'</li>';
                        });
                        mainS+='</ul></td>'+
                        '<td class="center"><ul>';
                        $.each(item.participantes,function(i,parti){
                            if(parti.ptIsorganizador!=2)
                                mainS+='<li>'+parti.ptUsuario.usNombre+' '+parti.ptUsuario.usApellido+'</li>';
                        });
                        mainS+='</ul></td>'+
                        '</tr>';
                        $("#dataTablesReunion tbody").append(mainS);
                    }
                });
                $("#dataTablesAsistencia tbody").empty();
                $.each(obj.asistidas, function(j, item){
                    var temp1 = "";
                    temp1 += '<tr>'+
                    '<td>'+item.nombre+'</td>'+
                    '<td>'+item.apellido+'</td>'+
                    '<td>'+item.asist+'</td>'+
                    '<td>'+item.noasist+'</td>'+
                    '<td>'+item.totales+'</td>'+
                    '</tr>';
                    $("#dataTablesAsistencia tbody").append(temp1);
                });
            }
            else{
                alert("NO HAY RESULTADOS PARA MOSTRAR");
            }
        },
        error: function (request, settings) {
            alert(request.errorContext);
        }
    });
}

function cambiarPrintCent(n){
    printCent = n;
}