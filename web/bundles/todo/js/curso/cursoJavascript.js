/*============= Script para views/Default/curso.html.twig =============*/ 
/*

$( document ).ready(function() {
    

    $("#fechaRecuperar").datepicker({
        dateFormat: 'yy-mm-dd',
        beforeShowDay: bloquearDias,
        maxDate: finSemestre,
        minDate: inicioSemestre });
    

    $("#fechaRecuperarNoSyll").datepicker({
        dateFormat: 'yy-mm-dd',
        beforeShowDay: bloquearDias,
        maxDate: finSemestre,
        minDate: inicioSemestre });


    $("#fechaDictarNoSyll").datepicker({
         dateFormat: 'yy-mm-dd',
        beforeShowDay: bloquearDias,
        maxDate: finSemestre,
        minDate: inicioSemestre });


    $('#fechaRecuperarNoSyll, #fechaRecuperar').popover({
        trigger: 'hover',
        placement: 'top' });


    $('#fechaDictarNoSyll').popover({
        trigger: 'hover',
        placement: 'top',
        content: "Seleccione el día en el que desea recuperar la clase" });


    $('.glyphicon-calendar').click(function() {
        $("#fechaRecuperarNoSyll").focus(); });


    $('.glyphicon-calendar').click(function() {
        $("#fechaDictarNoSyll").focus(); });


    $('#tablaTecnicos').dataTable({
        "bPaginate":true,
        "sPaginationType":"simple",
        "iDisplayLength": 3,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "info": false
    });


    $( '.checkNoSyllabus' ).on( 'click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {

            $(".form-rec-ext").each(function(index, element){
                $(element).removeAttr("disabled");
            });

            var group = "input:checkbox[class='" + $box.attr("class") + "']";
            $(group).prop("checked", false);
               $box.prop("checked", true);
               if($box.attr("id") == 'recuperacion'){
                    $('#fechaRecuperarNoSyll, #fechaRecuperar').datepicker("option", "beforeShowDay", habilitarDiasDisponibles);
                    $('#fechaRecuperarNoSyll, #fechaRecuperar').attr("data-content", "Seleccione la fecha que desea recuperar");
                   document.getElementById("fechaDictar").style.display = "block";
               }else{

                  $('#fechaRecuperarNoSyll, #fechaRecuperar').attr("data-content", "Seleccione una fecha libre para recuperar su clase");
                  $('#fechaRecuperarNoSyll, #fechaRecuperar').datepicker("option", "beforeShowDay", bloquearDias);
                  document.getElementById("fechaDictar").style.display = "none";
              }
              document.getElementById("tipoClase").value = $box.val();                    
        } else {
              $box.prop("checked", false);
              document.getElementById("fechaDictar").style.display = "none";

              $(".form-rec-ext").each(function(index, element){
                  $(element).attr("disabled", true);
              });
        }
    });


});


function notificaciones(value, url_si, url_no) {
    var mostrar = jQuery("#horarios").attr("mostrar");
    var prueba = jQuery("#horarios").attr("notificaciones");
    if(value=='Si'){
        if(mostrar=='show'){
            document.getElementById('horario-noti').style.display='block';
            document.getElementById('button-noti').style.display='none';
        }else {
            jQuery.ajax({
                method: "post",
                url: url_si,
                dataType: 'json',
                data: {
                    'value': 11,
                },
                success: function (data) {
                    location.reload();
                },
                error: function () {
                    alert('algo salio mal')
                }
            });
        }
    }
    else {
        jQuery.ajax({
            method: "post",
            url: url_no,
            dataType: 'json',
            data: {
                'value': 10,
            },
            success: function (data) {},
            error: function () {
                alert('algo salio mal')
            }
        });
    }
}


function mostrarNotificaciones() {
    jQuery("#new-horario").modal('show');
}


function habilitarDias(date) {
    var sdate = $.datepicker.formatDate( 'yy-mm-dd', date)
    if($.inArray(sdate, diasHabiles) != -1) { return [true];}
    if(date.getDay() == 0){ return [false];}
   return [false];
}


function bloquearDias(date){
    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
    if(date.getDay() == 0){return [false];}
    return [ diasHabiles.indexOf(string) == -1 ]
}


function habilitarDiasDisponibles(date){
    var sdate = $.datepicker.formatDate( 'yy-mm-dd', date)
    if($.inArray(sdate, diasLibres) != -1) { return [true]; }
    if(date.getDay() == 0){ return [false]; }
       return [false];            
}


/**********************************************************
* FUNCIONES PARA VALIDAR LA ASIGNACIÓN DE PROFESOR A UN CURSO
***********************************************************/
/*
function mostrarDocentes() {
    var modalPregunta =  jQuery("#docentesList");
    $('#desc-docente').text(" ");
    document.getElementById("btnAsignar").disabled = true;
    modalPregunta.modal('show');
}


function elegirDocentes(boton) {
    var docenteId = boton.getAttribute("data-id-docente");
    var docenteNombre= boton.getAttribute("data-docente");
    $('#desc-docente').text(docenteNombre);
    $('#btnAsignar').attr("data-id-docente",docenteId);
    if(docenteId!= null){
        document.getElementById("btnAsignar").disabled = false;
    }
}


function asignar(boton, asignar_curso) {
    var cursoId = boton.getAttribute("data-id-curso");
    var docenteId = boton.getAttribute("data-id-docente");
    if(docenteId!= null){
        jQuery.ajax({
            method: "post",
            url: asignar_curso,
            dataType: 'json',
            data: {
                'cursoId': cursoId,
                'docenteId':docenteId,
            },
            success: function (data) {
                location.reload();
                document.getElementById("docenteAsignar").style = "display:none";
                document.getElementById("docenteName").style = "display:block";
            },
            error: function () {alert('algo salio mal') }
        });
    }
}
/*FIN ---- FUNCIONES PARA VALIDAR LA ASIGNACIÓN DE PROFESOR A UN CURSO*/





//Anteriores
/*
        function notificaciones(value) {
            var mostrar = jQuery("#horarios").attr("mostrar");
            var prueba = jQuery("#horarios").attr("notificaciones");
            //NOTIFICACIONES 10==FALSE
            //NOTIFICACIONES 11==TRUE
            if(value=='Si'){
                if(mostrar=='show'){
                    document.getElementById('horario-noti').style.display='block';
                    document.getElementById('button-noti').style.display='none';
                }else {
                    jQuery.ajax({
                        method: "post",
                        url: '{{ path('Validar_horario',{'idCurso': curso.getCId(),'accion':'si_horario'}) }}',
                        dataType: 'json',
                        data: {
                            'value': 11,
                        },

                        success: function (data) {
                            location.reload();
                        },
                        error: function () {
                            alert('algo salio mal')
                        }
                    });
                }
            }
            else {
                jQuery.ajax({
                    method: "post",
                    url: '{{ path('Validar_horario',{'idCurso': curso.getCId(),'accion':'no_horario'}) }}',
                    dataType: 'json',
                    data: {
                        'value': 10,
                    },

                    success: function (data) {

                    },
                    error: function () {
                        alert('algo salio mal')
                    }
                });
            }
        }

        function mostrarNotificaciones() {
            jQuery("#new-horario").modal('show');
        }

        $(function () {
            
           $("#fechaRecuperar").datepicker({
                dateFormat: 'yy-mm-dd',
                //beforeShowDay: habilitarDias
            });
            $("#fechaRecuperarNoSyll").datepicker({
                dateFormat: 'yy-mm-dd',
                //beforeShowDay: habilitarDias
            });
        });

        function habilitarDias(date) {
            var sdate = $.datepicker.formatDate( 'yy-mm-dd', date)
            if($.inArray(sdate, diasHabiles) != -1) {
                return [true];
            }
            return [false];
        }

		/**********************************************************
        * FUNCIONES PARA VALIDAR LA ASIGNACIÓN DE PROFESOR A UN CURSO
        ***********************************************************/
        /*
        function mostrarDocentes() {
            var modalPregunta =  jQuery("#docentesList");
            $('#desc-docente').text(" ");
			document.getElementById("btnAsignar").disabled = true;
            modalPregunta.modal('show');
        }

        $(document).ready(function () {
            $('#tablaTecnicos').dataTable({
                "bPaginate":true,
                "sPaginationType":"simple",
                "iDisplayLength": 3,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                "info": false
            });

        });

        function elegirDocentes(boton) {
            var docenteId = boton.getAttribute("data-id-docente");
            var docenteNombre= boton.getAttribute("data-docente");
            $('#desc-docente').text(docenteNombre);
            $('#btnAsignar').attr("data-id-docente",docenteId);
            //console.log(docenteNombre);
            if(docenteId!= null){
                document.getElementById("btnAsignar").disabled = false;
            }
        }

        function asignar(boton) {
            var cursoId = boton.getAttribute("data-id-curso");
            var docenteId = boton.getAttribute("data-id-docente");
            //console.log(docenteId);
            if(docenteId!= null){
                jQuery.ajax({
                    method: "post",
                    url: '{{ path('asignar_curso') }}',
                    dataType: 'json',
                    data: {
                        'cursoId': cursoId,
                        'docenteId':docenteId,
                    },
                    success: function (data) {
                        location.reload();
                        document.getElementById("docenteAsignar").style = "display:none";
                        document.getElementById("docenteName").style = "display:block";
                      //  console.log(data);
                    },
                    error: function () {alert('algo salio mal') }
                });
            }
        }
        /*FIN ---- FUNCIONES PARA VALIDAR LA ASIGNACIÓN DE PROFESOR A UN CURSO*/