/**
 * Created by Admdev on 08/09/2017.
 */
/* INICIO.HTML.TWIG */

jQuery(document).ready(function(){

    if(getCookie('modal') == "" || getCookie('modal')=="no"){
      //  jQuery("#mostrarmodal").modal("show");
        setCookie('modal','yes')
    }

    var error = jQuery("div#alt-recu").attr("data-error");
    //manejo de errores que redireccionan a Index
    if(error == "CursoSinCodigo"){
        jQuery("#mensajeHorario").find("#alt-elm").remove();
        jQuery("#mensajeHorario").append('<div class="alert alert-warning alert-dismissable fade in" id="alt-elm">'
            +'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
            +' <span class="glyphicon glyphicon-info-sign"></span>  <strong>El curso seleccionado no tiene codigo de materia</strong>'
            +'</div>');
    }
    else if(error == "contenidoNull"){
        jQuery("#mensajeHorario").find("#alt-elm").remove();
        jQuery("#mensajeHorario").append('<div class="alert alert-warning alert-dismissable fade in" id="alt-elm">'
            +'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
            +' <span class="glyphicon glyphicon-info-sign"></span>  <strong>El curso no posee contenido aun</strong>'
            +'</div>');
    }
    else{}
	/*$.datepicker.regional['es'] = {
                   closeText: 'Cerrar',
                   prevText: '<Ant',
                   nextText: 'Sig>',
                   currentText: 'Hoy',
                   monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                   monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
                   dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                   dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
                   dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                   weekHeader: 'Sm',
                   dateFormat: 'dd/mm/yy',
                   firstDay: 1,
                   isRTL: false,
                   showMonthAfterYear: false,
                   yearSuffix: ''
               };
    $.datepicker.setDefaults($.datepicker.regional['es']);*/
});

function setCookie(cname, cvalue) {
    document.cookie = cname + "=" + cvalue + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1);
        if (c.indexOf(name) == 0)
            return c.substring(name.length, c.length);
    }
    return "";
}


/* CURSO.HTML.TWIG */

/*==================================
 * funcion
 * Boton Nuevo
 ================================== */
function add(button, resultado, urlCrearColumna, urlCrearNoSyllabus, urlEliminar) {

    /*TABLA TABLEKIT*/
    var tabla = document.getElementById("TK_clases").childNodes[3];
    /*TABLA JEDITABLE*/
    var row = tabla.insertRow(-1);
    var i = 0;
    for (i; i < 7; i++) {
        row.insertCell(-1);
    }
    var fecha = new Date();
    dia=fecha.getDate();
    mes=fecha.getMonth()+1;
    anio=fecha.getFullYear();
    if(dia<10) dia="0"+dia;
    if(mes<10) mes="0"+mes;
    var fechaActual =  anio+"-"+mes+"-"+dia;
   //  //console.log(fechaActual);

    row.childNodes[3].setAttribute("class", "competencia");
    row.childNodes[3].setAttribute("data-tipo", "celda");

    var divD = document.createElement("div");
    var ulD = document.createElement("ul");
    divD.setAttribute("class", "lista_desc");
    divD.setAttribute("placeholder", "Clic para Editar...");
    ulD.setAttribute("class", "desc");
    ulD.setAttribute("id", "descripcion");
    divD.appendChild(ulD);
    row.childNodes[0].appendChild(divD);

    var divD = document.createElement("div");
    divD.setAttribute("class", "fecha");
    var newContent = document.createTextNode(fechaActual);
    divD.appendChild(newContent);
    row.childNodes[1].appendChild(divD);

    var divD = document.createElement("div");
    divD.setAttribute("class", "comentario");
    divD.setAttribute("style","max-height: 150px;overflow-y: scroll");
    divD.setAttribute("placeholder", "Clic para Editar...");
    row.childNodes[2].appendChild(divD);

    var div = document.createElement("div");
    var ul = document.createElement("ul");
    div.setAttribute("class", "lista_objetivos");
    divD.setAttribute("placeholder", "Clic para Editar...");
    ul.setAttribute("class", "obj");
    ul.setAttribute("id", "-1");
    div.appendChild(ul);
    row.childNodes[3].appendChild(div);

    var inputQty = document.createElement('input');
    inputQty.type = 'checkbox';
    inputQty.style = 'width: 30px; height: 30px;';
    inputQty.required = 'true';
    inputQty.className = 'form-control';
    inputQty.checked = true;
    inputQty.name = "dictada";
    inputQty.setAttribute("id","dictada");
    var cell4 = row.childNodes[4];
    cell4.setAttribute("style","text-align: center; padding-top: 5px; padding-left:14px");
    cell4.appendChild(inputQty);

    /*RECUPERADA*/
    row.childNodes[5].setAttribute("style", "background-color: #fffb99; color: #f0ad30");
    var span = document.createElement('span');
    span.className = 'glyphicon glyphicon-minus estadoClase';
    span.setAttribute("data-content", "TIEMPO");
    var cell5 = row.childNodes[5];
    cell5.appendChild(span);


    /*BOTON ELIMINAR*/
    var btnRemove = document.createElement('button');
    btnRemove.type = "button";
    btnRemove.className = 'btn btn-danger btn-sm';
    btnRemove.setAttribute("onclick", "eliminarClase(this,'"+urlEliminar+"')");
    var trash = document.createElement('SPAN');
    trash.className = 'glyphicon glyphicon-trash';
    btnRemove.appendChild(trash);
    var cell7 = row.childNodes[6];
    cell7.appendChild(btnRemove);

    //CREA UNA NUEVA CLASE EN LA BD
    jQuery.ajax({
        method: "GET",
        url: urlCrearColumna,
        dataType: 'json',
        success: function (data) {
            if (data) {
                idClase = data["idClase"];
                //OBTIENE EL ID Y LO AGREGA AL ID DEL NUEVO TR
                row.setAttribute("id", idClase);
                row.children[0].setAttribute("onclick", "mostrarModalForm(" + idClase + ")");
                row.children[3].setAttribute("onclick", "mostrarModalObjForm(" + idClase + ")");
                row.children[0].setAttribute("style", "cursor: pointer");
                row.children[1].setAttribute("style", "cursor: pointer");
                row.children[2].setAttribute("style", "cursor: pointer");
                row.children[3].setAttribute("style", "cursor: pointer");
                document.getElementById("descripcion").setAttribute('id', 'descripcion' + idClase);
            }
        }
    });
}


/*==================================
 * funcion
 * Muestre el despliegue del horario
 ================================== */
jQuery(document).ready(function () {
    jQuery('.horarios')
        .on('shown.bs.collapse', function () {
            jQuery(this)
                .parent()
                .find(".glyphicon-chevron-down")
                .removeClass("glyphicon-chevron-down")
                .addClass("glyphicon-chevron-right");
        })
        .on('hidden.bs.collapse', function () {
            jQuery(this)
                .parent()
                .find(".glyphicon-chevron-right")
                .removeClass("glyphicon-chevron-right")
                .addClass("glyphicon-chevron-down");
        });

    /*Valida el ingreso de nuevo horario*/
    var mostrar = jQuery("#horarios").attr("mostrar");
    jQuery("#crearhorario").modal(mostrar);
	
	


});


/* MISCLASES.HTML.TWIG */

/*==================================
 * funcion
 * Muestre el modal descripción
 ================================== */
function mostrarModalForm(id_areaTx) {
    jQuery("#myModalDesc").modal("show");
    limpiarDbx();
    id_Txt = id_areaTx;

    if(id_Txt == 'registroDesc'){
        var areaDesc =jQuery("#registroDesc");
        var chbs = jQuery("#myModalDesc").find("input");
        if(areaDesc.attr("desc") != null){
           var subt = areaDesc.attr("desc").split(',');
            for(var i=0; i < chbs.length; i++){
                //COMENTADO 25_09_2017 9:56
                for(var j=0; j < subt.length; j++){
                    if(chbs[i].getAttribute("value") == subt[j] ){
                        chbs[i].checked = true;
                    }
                }
            }
        }
}
    resaltarModalDescripcion(3,id_Txt); //3-> Profesor
}

function limpiarDbx(){
    var chBs = jQuery(".cb-opciones");
    for(var i=0; i< chBs.length; i++){
        chBs[i].checked = false;
    }
}
/*==================================
 * funcion
 * Muestre el modal objetivos
 ================================== */
function mostrarModalObjForm(id_areaTx) {
    jQuery("#objetivosModal").modal("show");
    limpiarCbx();
    var textarea = jQuery("#"+id_areaTx);
    if(textarea.attr("objetivos") != null){
        var objs = textarea.attr("objetivos").split(',');
       //  //console.log(objs);
        var ch = jQuery("#objetivosModal").find("input");
        for(var i=0; i < ch.length; i++){
            for(var j=0; j < objs.length; j++){
                if(ch[i].getAttribute("id") == objs[j] ){
                    ch[i].checked = true;

                }
            }
        }
    }
    var id_Txt = id_areaTx;
    jQuery("#"+id_Txt).attr("data-act","1");
}

/*==================================
 * funcion
 * Muestre en el modal descripcion el resaltado y contabilizar las veces que se ha ingresado
 ================================== */


function resaltarModalDescripcion(rol,idFila){
    // obtenemos todos los subtemas del modal
    // //console.log('resaltado');
    temas = jQuery('.opciones').find("p");
    subtemas = [];
    temas.each(function (index) {
        subtemas.push(this.getAttribute("subid"));
        //se borra la cantidad de veces que ha sido marcada previamente abierto el modal
        this.setAttribute("cantMarcas","0");
        var namepadre=this.getAttribute("padre");
        var query = "div[name = "+namepadre+"]"
        try {
            document.getElementById('span'+index).remove();
            jQuery(query).css('font-size', '1.2em');
            jQuery(query).css('font-weight', 'bold');
            jQuery(query).css('border-left-color','#A4A4A4');
        } catch (e) {
        }

    });

    // obtenemos todos los subtemas seleccionados, ademas los propios tambien se guardan en una variable diferente
    todosSubtemasMarcados = jQuery(".desc"); // obtiene todos los ul
    SubtemasMarcados =[];
    SubtemasMarcadosPropios = [];
    activos = [];

    // obtenemos todos los subtemas seleccionados, ademas los propios tambien se guardan en una variable diferente
    todosSubtemasMarcados.each(function() { //por cada ul
        li = this.getElementsByTagName("li");
        //por cada li en ul
        for (var i = 0; i < li.length; i++) {
            if (this.id == "descripcion" + idFila) { // si este ul es el que se selecciono se guarda el valor en propio y en marcados
                SubtemasMarcadosPropios = SubtemasMarcadosPropios.concat(li[i].id)
                SubtemasMarcados = SubtemasMarcados.concat(li[i].id)
            } else SubtemasMarcados = SubtemasMarcados.concat(li[i].id);
            activos.push(li[i].getAttribute("activo"));
        }
    });

    //iteramos realizando las debidas comparaciones
    SubtemasMarcados.forEach(function (texto,indiceTextos) {
        subtemas.forEach(function (valor,indice) {
            checkbox = document.getElementById("cb-opciones" + indice);
            if (rol == 4) jQuery(checkbox).attr("disabled", "disabled");
            var tema = jQuery(temas[indice]);
            var idSpan = "span" + indice;
            var namePadre = tema.attr('padre');
            titulos = jQuery("div[id='sub-t2']");
            //Elimina los span previos que se hayan desmarcado
            if (subtemas[indice] == texto) {
                //si la cantidad de marcas es 0  se crea un div amarillo con un +1 y se cambia a cantidad 1
                if (tema.attr("cantMarcas") == '0') {
                    if (checkbox.checked) checkbox.checked = false;
                    var span = document.createElement('SPAN');
                    span.setAttribute("id", idSpan);
                    span.innerHTML = "+1 vez";
                    span.setAttribute("style", "margin-right: 7px; float: right; background-color: rgb(250, 185, 0);");
                    tema.before(span);
                    tema.attr("cantMarcas", "1");
                }
                //si la cantidad de marcas es 1  se crea un div rojo con un +2 y se cambia a cantidad 2
                else if (tema.attr("cantMarcas") == '1') {
                    if (checkbox.checked) checkbox.checked = false;
                    span = document.getElementById(idSpan);
                    span.innerHTML = "+2 veces";
                    span.setAttribute("style", "margin-right: 7px; float: right; background-color: #d9534f; color: white;");
                    tema.attr("cantMarcas", "2");
                }else {
                    if (checkbox.checked) checkbox.checked = false;
                    marcas = parseInt(tema.attr("cantMarcas"))+1;
                    document.getElementById(idSpan).innerHTML = "+" + marcas + " veces";
                    tema.attr("cantMarcas", marcas);
                }

                // se revisa si debe estar activo o no, en caso de no estarlo, se ejecuta el evento click en el slider
                //if (activos[indiceTextos] == 0 ) document.getElementById("slider" + indice).click();

                // se resalta el tema principal
                titulos.each(function (index, element) {
                    if (jQuery(element).attr('name') == namePadre) {
                        jQuery(element).css('font-style', 'italic');
                        jQuery(element).css('font-weight', '100');
                        jQuery(element).css('border-left-color', 'rgb(250, 185, 0) !important');
                    }
                });

                //si es rol especial sienpre los checkbox estan desactivados
                if (rol == 4) jQuery(checkbox).attr("disabled", true);

            }

            //if(jQuery(checkbox).attr("cargado") == 'si' && !checkbox.disabled) document.getElementById("slider" + indice).click();

            if (SubtemasMarcadosPropios.indexOf(subtemas[indice]) != -1) {
                //checkbox.removeAttribute("cargado");
                checkbox.setAttribute("propio","si");
                if(!checkbox.checked ){
                    checkbox.checked = true;
                }

                //document.getElementById("enabler" + indice).click();
            }else checkbox.setAttribute("propio","no");
        });

    });

}

/*==================================
 * funcion
 * Muestre en el modal descripcion habilitar o no
 ================================== */
function habilitarcb(id){
    check = jQuery("#"+id);
    if(check.attr("disabled")){
        check.removeAttr("disabled");
    } else {
        check.attr("disabled", "disabled");
    }
}
/*==================================
 * funcion
 * Crea las celdas para el ingreso del horario
 ================================== */
function myFunction(x) {
    x.style.display = "inline";
}

function crearCelda() {
    var dias = parseInt(document.getElementById("dias").value);
    var diasInput = document.getElementById("dias");
    if(dias > 0 && dias < 7){
        if(jQuery("#advertenciaHorario")){
            jQuery("#advertenciaHorario").remove();
        }
        document.getElementById("dias").disabled = true;
        document.getElementById("OkBtnHorario").disabled = false;
        document.getElementById("button_dias").disabled = true;
        for (i=0; i<dias; i++){
            jQuery('#horario_dias').append('<p>' +
                '<b>DIA </b>' +
                '<select id="dia[]" name="dia[]" required="required" class="selectDia">' +
                '<option value="LUNES">LUNES</option>' +
                '<option value="MARTES">MARTES</option>' +
                '<option value="MIERCOLES">MIERCOLES</option>' +
                '<option value="JUEVES">JUEVES</option>' +
                '<option value="VIERNES">VIERNES</option>' +
                '<option value="SABADO">SABADO</option>' +
                '</select>' +
                '<b style="margin-left: 20px">HORA INICIO </b>'+
                '<input type="time" id="hora_inicio[]" name="hora_inicio[]" required="required">'+
                '<b>HORA FIN </b>'+
                '<input type="time" id="hora_fin[]" name="hora_fin[]" required="required">'+
                '</p>');
        }
    }else{
        if(jQuery("#advertenciaHorario")){
            jQuery("#advertenciaHorario").remove();
            jQuery("#modal-body-horario").append('<div class="alert alert-warning alert-dismissable fade in" id="advertenciaHorario">'+
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                '<strong>Error!</strong> Ingrese una cantidad válida [0 - 6]'+
                '</div>');
        }


    }
}

function validarHorario(){

    if(event.preventDefault){
        event.preventDefault();
    }else{
        event.returnValue = false;
    }
    var valoresDias = [];
    var form = document.forms["setHorario"];
    var dias = document.forms["setHorario"]["dias"].value;
    var selectDias = document.getElementsByClassName("selectDia");
    for(var i=0; i<selectDias.length; i++){
        valoresDias.push(selectDias[i].value);
    }

    if (dias == "") {
        if(jQuery("#advertenciaHorario")){
            jQuery("#advertenciaHorario").remove();
            jQuery("#modal-body-horario").append('<div class="alert alert-warning alert-dismissable fade in" id="advertenciaHorario">'+
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                '<strong>Error!</strong> Ingrese una cantidad válida [0 - 6]'+
                '</div>');
        }
    }
    if(hasDuplicates(valoresDias)){
        if(jQuery("#advertenciaHorario")){
            jQuery("#advertenciaHorario").remove();
            jQuery("#modal-body-horario").append('<div class="alert alert-warning alert-dismissable fade in" id="advertenciaHorario">'+
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                '<strong>Error!</strong> Existen dias duplicados'+
                '</div>');
        }
    }
    else{
        if(jQuery("#advertenciaHorario")){
            jQuery("#advertenciaHorario").remove();
        }
        form.submit();
    }
}

function hasDuplicates(array) {
    return (new Set(array)).size !== array.length;
}


/* TABLACLASES.HTML.TWIG */

/*==================================
 * funcion
 * Se realiza el limpiado del modal
 ================================== */
function limpiarCbx(){
    var chBs = jQuery(".objetivosM");
    for(var i=0; i< chBs.length; i++){
        chBs[i].checked = false;
    }
}

/*==================================
 * funcion
 * Se utiliza en el ready de Tk_clases
 ================================== */
function revisarCbEnModal(lista){
    var i, j;
    var chBs = jQuery(".objetivosM");
    for(i =0; i< chBs.length; i++){
        for(j =0; j< lista.length; j++){
            var claseId = lista[j].getAttribute("data-claseId");
            if(claseId == null){
                var tr = lista[i].parentElement;
                claseId = tr.getAttribute("id");
            }
            chBs[i].setAttribute("data-claseId",claseId);
            if(chBs[i].id == lista[j].getAttribute("data-objId")){
                chBs[i].checked = true;
                var oc_Id = lista[j].getAttribute("data-ocId");
                chBs[i].setAttribute("data-ocId",oc_Id);
            }
        }
    }
}

/*==================================
 * funcion
 * Se encarga de guardar en las clases y recuperar descripcion
 ================================== */
function guardarDescripcion(ajaxUrl){
    var descs= [];
        var activo = [];
        var ids = [];
         // //console.log(id_Txt);
        var checkboxs = jQuery(".cb-opciones");
        for(var i=0; i < checkboxs.length; i++ ){
            if(checkboxs[i].checked){
                descs.push(checkboxs[i].getAttribute("value"));
                if(checkboxs[i].disabled == true){
                    activo.push(0);
                }else{
                    activo.push(1);
                }
                ids.push(checkboxs[i].getAttribute("id"));
            }
        }

        if(!(descs.length === 0)){
            document.getElementById(id_Txt).cells[4].children[0].checked = true;
        } else{
            document.getElementById(id_Txt).cells[4].children[0].checked = false;
        }

        jQuery.ajax({
            method: "post",
            url: ajaxUrl,
            dataType: 'json',
            data: {
                'descripciones': descs,
                'activo': activo,
                'id_clase': id_Txt,
            },
            success: function (data) {
                var descripciones = data["descripciones"];
                var fila = jQuery("tr#" + id_Txt);
                var ul = fila.find("ul#descripcion" + id_Txt);
                ul.find("li").each(function(){
                    this.remove()
                });

                for (var key in descripciones){
                    if(descripciones[key][0] != null){
                        var li = document.createElement("li");
                        li.innerHTML = descripciones[key][0];
                        li.setAttribute("activo",descripciones[key][1]);
                        li.setAttribute("id",descripciones[key][2]);
                        ul.append(li);
                    }
                }
            },
            error: function(data){ alert("Error en solicitud"); },
        });
        
    /*
    var descs= [];
    var activo = [];
    var ids = [];
    var id_clase = id_Txt;
    var checkboxs = jQuery(".cb-opciones");
    for(var i=0; i < checkboxs.length; i++ ){
        if(checkboxs[i].checked){
            descs.push(checkboxs[i].getAttribute("value"));
            if(checkboxs[i].disabled == true){
                activo.push(0);
            }else{
                activo.push(1);
            }
            ids.push(checkboxs[i].getAttribute("id"));
        }
    }
    if(id_Txt == 'registroDesc'){
         //console.log(descs);
        var desc_activas = [];
        var desc_activas_1 = [];
        jQuery("#registroDesc").text("");
        for(var i=0; i<activo.length; i++){
            if(activo[i] == '1'){
                if(i==activo.length-1){
                    desc_activas.push(descs[i]);
                    desc_activas_1.push(descs[i]+',');
                }
                else{
                    desc_activas.push(descs[i]);
                    desc_activas_1.push(descs[i]);
                }
            }
        }
        // // //console.log(desc_activas);
        jQuery.ajax({
            method: "post",
            url: ajaxUrl,
            dataType: 'json',
            data: {
                'descripciones': desc_activas,
                'activo': activo,
                'id_clase': id_clase,
            },
            success: function (data) {
               // // //console.log(data);
                var descripciones = data["descripciones"];
                var list;
                //agrega y recarga los li dentro de ul
                for (i=0; i<descripciones.length; i++){
                    list=descripciones[i]+',\n'+list;
                   //  // //console.log(descripciones[i]);
                }
                jQuery("#registroDesc").text(list);
                //jQuery("#registroDesc").text(descripciones);
                //jQuery("#registroDesc").attr("value",desc_activas);
            },
            error: function(data){alert("Error en solicitud");},
        });
        //jQuery("#registroDesc").text(desc_activas);
        jQuery("#listregistro").attr("value",desc_activas_1);
        jQuery("#registroDesc").attr("desc",desc_activas_1);

    }else{
		if(!(descs.length === 0)){
				// //console.log(document.getElementById(idClase).cells[4].childNodes[1]);
			document.getElementById(id_clase).cells[4].children[0].checked = true;
		}else{
			document.getElementById(id_clase).cells[4].children[0].checked = false;
		}
        jQuery.ajax({
        method: "post",
        url: ajaxUrl,
        dataType: 'json',
        data: {
            'descripciones': descs,
            'activo': activo,
            'id_clase': id_clase,
        },
        success: function (data) {
            var descripciones = data["descripciones"];
            var fila = jQuery("tr#"+id_Txt);
            var ul = fila.find("ul#descripcion"+id_Txt);
			// //console.log(ul);
            //Borra el contenido de ul
            ul.find("li").each(function(){
                this.remove()
            });
            //agrega y recarga los li dentro de ul
            for (var key in descripciones){
                if(descripciones[key][0] != null){
                    var li = document.createElement("li");
                    li.innerHTML = descripciones[key][0];
                    li.setAttribute("activo",descripciones[key][1]);
                    li.setAttribute("id",descripciones[key][2]);
                    ul.append(li);
                }
            }
			 location.reload();
        },
        error: function(data){alert("Error en solicitud");},
    });
    }
    */
}

/*==================================
 * funcion
 * Se guardar los objetivos en la clase y clase de recuperación
 ================================== */
function guardarObjetivos(ajaxUrl){
    var obj_id = [];
    var obj_clase_id = [];
    var obj_checked = [];
    var checkbox = jQuery(".objetivosM");
    for(var i=0; i < checkbox.length; i++ ){
        obj_id.push(checkbox[i].getAttribute("id"));
        obj_clase_id.push(checkbox[i].getAttribute("data-claseid"));
        obj_checked.push(checkbox[i].checked);
    }
    var act = jQuery("#registroObj").attr("data-act");
    if(act == "0"){
        jQuery.ajax({
            method: "post",
            url: ajaxUrl,
            dataType: 'json',
            data: {
                'obj_id': obj_id,
                'obj_clase_id': obj_clase_id,
                'obj_checked': obj_checked,
            },
            success: function (data) {
                var oc_ids = data["oc_ids"];
                var obj_listos = data["obj_listos"];
                var obj_eliminados = data["obj_eliminados"];
                var id = data["clases_id"][0];
                var id_obj = data["ocbj_ids"];
                var ul_list = document.getElementsByTagName("ul");
                var i = 0, j=0;
                for(i = 0; i < ul_list.length; i++ ){
                    if(ul_list[i].getAttribute("id") == id){
                        var ul = ul_list[i];
                        for(j = 0; j < oc_ids.length; j++ ){
                            var li = document.createElement("li");
                            li.setAttribute("class","competencia");
                            li.setAttribute("data-claseid",id);
                            li.setAttribute("data-ocid",oc_ids[j]);
                            li.setAttribute("data-objid",id_obj[j]);
                            var des = document.createTextNode(obj_listos[j]);
                            li.appendChild(des);
                            ul.appendChild(li);

                        }
                    }
                }
                for(i = 0; i < obj_eliminados.length; i++ ){
                    jQuery("li[data-ocid="+ obj_eliminados[i] + "]").remove();
                }
            },
            error: function(){
                alert("error");
            }
        });
    }
    else{
        /*Para la parte de recuperar Objetivos*/
        var objs = [];
        var objetivosDesc=[];
        var objs_selec = [];
        for(var i=0; i < obj_checked.length; i++ ){
            if(obj_checked[i]){
                var desc = jQuery("label[for='"+obj_id[i]+"']").text();
                objs.push(obj_id[i]+ "§");
                objetivosDesc.push("*"+desc+"\n");
                 //console.log(desc);
                objs_selec.push(obj_id[i]);
            }
        }
         //console.log(objetivosDesc);
        objs[objs.length-1]=objs[objs.length-1]+",";
        var act = jQuery("#registroObj").attr("data-act","0");
        var act = jQuery("#registroObj").attr("objetivos",objs_selec);
        var act = jQuery("#listregistroObj").attr("value",objs);
        jQuery("#registroObj").val(objetivosDesc);
    }
}

/*==================================
 * funcion
 * Muestra el modal a eliminar
 ================================== */
function eliminarClase(boton, ajaxUrl){
    var modalPregunta =  jQuery("#seguro-elim");
    modalPregunta.attr("data-urlAjax",ajaxUrl);
    modalPregunta.modal("show");
    var desc = modalPregunta.find("#desc-elim");
    var tr = boton.parentElement.parentElement;
    var tds = tr.children;
    var claseId = boton.parentElement.parentElement.getAttribute("id");
    modalPregunta.find("#desc-elim").text(tds[0].getAttribute("descripcion"));
    modalPregunta.find("#fecha-elim").text(tds[1].textContent);
    modalPregunta.find("#coment-elim").text(tds[2].textContent);
    var check = tds[4].children[0].checked;
    if(check){
        modalPregunta.find("#dict-elim").addClass("glyphicon glyphicon-ok");
    }else{
        modalPregunta.find("#dict-elim").addClass("glyphicon glyphicon-remove");
    }
    modalPregunta.find("#recup-elim").text(tds[5].children[0].getAttribute("data-content"));
    modalPregunta.find("#btnEliminar").attr("data-claseId",claseId);
}

/*==================================
 * funcion
 * Va eliminar la clase de la BD
 ================================== */
function eliminar(boton){
    var ajaxUrl = jQuery("#seguro-elim").attr("data-urlAjax");
    var claseId = boton.getAttribute("data-claseId");
    jQuery.ajax({
        method: "post",
        url: ajaxUrl,
        dataType: 'json',
        data: {
            'claseId': claseId,
        },
        success: function (data) {
            if (data) {
                var id = data["claseId"];
                jQuery("#TK_clases").find("tr#"+id).remove();
                jQuery("#alerta-eliminado").append('<div class="alert alert-info alert-dismissable fade in" id="alt-elm">'
                    +'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                    +'<strong>La clase se elimino con éxito</strong>'
                    +'</div>');
            }
        },
        error: function () {alert('algo salio mal') }
    });
}

function showModalDate() {
    jQuery("#alertaFecha").modal("show");
}


// JAVASCRIPT REPORTES.HTML.TWIG
/*==================================
 * funcion
 * inicia los select
 ================================== */
jQuery(document).ready(function() {
    /*JAVASCRIPT reporte.html.twig case(Clases Aprobadas)*/
    jQuery('.myRadio').click(function() {
        var seleccionado=jQuery(this).val();
        if(seleccionado=='materia'){
            document.getElementById("materiaDiv").style.display="block";
            document.getElementById("textoDiv").style.display="none";
            document.getElementById("profesorDiv").style.display="none";
            document.getElementById("fechaDiv").style.display="none";
        }else if(seleccionado=='profesor'){
            document.getElementById("materiaDiv").style.display="none";
            document.getElementById("textoDiv").style.display="none";
            document.getElementById("profesorDiv").style.display="block";
            document.getElementById("fechaDiv").style.display="none";
        }else if(seleccionado=='fecha'){
            document.getElementById("materiaDiv").style.display="none";
            document.getElementById("textoDiv").style.display="none";
            document.getElementById("profesorDiv").style.display="none";
            document.getElementById("fechaDiv").style.display="block";
        }else{
            document.getElementById("materiaDiv").style.display="none";
            document.getElementById("textoDiv").style.display="block";
            document.getElementById("profesorDiv").style.display="none";
            document.getElementById("fechaDiv").style.display="none";
        }
    });
    /*JAVASCRIPT reporte.html.twig case(Clases dictadas)*/
    jQuery('.myRadioDictadas').click(function() {
        var seleccionado=jQuery(this).val();
        if(seleccionado=='semestre'){
            document.getElementById("matDiv").style.display="none";
            document.getElementById("semestreDiv").style.display="block";
        }else{
            document.getElementById("matDiv").style.display="block";
            document.getElementById("semestreDiv").style.display="none";
        }
    });

    $(function () {
        /*$.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
        $("#fecha_fin").datepicker({
            dateFormat: 'yy-mm-dd'
        });

        $("#fecha_inicio").datepicker({
            dateFormat: 'yy-mm-dd',
        });*/
    });
});




// RECUPERAR APROBAR.HTML.TWIG
/*==================================
 * funcion
 * Se inicia las tablas para la vista Aprobar
 ================================== */
jQuery(document).ready(function(){
    jQuery("#tablaParalelosTeoricosConSyllabus").DataTable({
        "bJQueryUI":true,
        "bSort":true,
        "bPaginate":true,
        "sPaginationType":"simple",
        "iDisplayLength": 5,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "info": false
    });

    jQuery("#tablaParalelosTeoricosAprobadosConSyllabus").DataTable({
        "bJQueryUI":true,
        "bSort":true,
        "bPaginate":true,
        "sPaginationType":"simple",
        "iDisplayLength": 5,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "info": false
    });

    jQuery("#tablaParalelosTeoricosSinSyllabus").DataTable({
        "bJQueryUI":true,
        "bSort":true,
        "bPaginate":true,
        "sPaginationType":"simple",
        "iDisplayLength": 5,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "info": false
    });

    jQuery("#tablaParalelosTeoricosAprobadosSinSyllabus").DataTable({
        "bJQueryUI":true,
        "bSort":true,
        "bPaginate":true,
        "sPaginationType":"simple",
        "iDisplayLength": 5,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "info": false
    });
	jQuery("#tablaReportes").DataTable({
        "bJQueryUI":true,
        "bSort":true,
        "bPaginate":true,
        "sPaginationType":"simple",
        "iDisplayLength": 5,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "info": false
    });
	jQuery("#tablaDictadas").DataTable({
        "bJQueryUI":true,
        "bSort":true,
        "bPaginate":true,
        "sPaginationType":"simple",
        "iDisplayLength": 5,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "info": false
    });
});


/*==================================
 * funcion
 * Se encarga buscar en las tablas de clases de aprobar
 ================================== */
function myFunction(id) {
    // Declare variables
    var input, filter, table, tr, td, i;

    if( id == 'myInputAprobados'){
        input = document.getElementById("myInputAprobados");
        table = document.getElementById("tablaParalelosTeoricosAprobados");
    } else {
        input = document.getElementById("myInput");
        table = document.getElementById("tablaParalelosTeoricos");
    }
    filter = input.value.toUpperCase();
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        codigo = tr[i].getElementsByTagName("td")[0];
        fecha = tr[i].getElementsByTagName("td")[1];
        justificacion = tr[i].getElementsByTagName("td")[2];
        profesor = tr[i].getElementsByTagName("td")[3];

        if ( codigo || fecha || justificacion || profesor ) {
            if (codigo.innerHTML.toUpperCase().indexOf(filter) > -1 ||
                fecha.innerHTML.toUpperCase().indexOf(filter) > -1 ||
                justificacion.innerHTML.toUpperCase().indexOf(filter) > -1 ||
                profesor.innerHTML.toUpperCase().indexOf(filter) > -1
            ) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}


//COORDINADOR.HTML.TWIG
jQuery(document).ready(function(){
    jQuery("#tablaMateria").DataTable({
        "bJQueryUI":true,
        "bSort":true,
        "bPaginate":true,
        "sPaginationType":"full_numbers",
        "iDisplayLength": 10,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "info": false
    });
});


//AsignarCoordinador.HTML.TWIG

jQuery(document).ready(function() {
    jQuery('#select_areas').change(function () {
        jQuery.ajax({
                method: "post",
                url: "cargarMateriasAjax",
                data: {areaId: jQuery(this).val()},
                success: function(data){
                    var obj = jQuery.parseJSON(data);
                    jQuery('#select_materias').find('option').remove().end();
                    jQuery("#select_materias").prop('disabled', false);
                    jQuery('#select_profesores').find('option').remove().end();
                    jQuery("#select_profesores").prop('disabled', true);
                    jQuery('#btnAsignar').prop('disabled', true);
                    for (i = 0; i < obj.length; i++) {
                        jQuery("#select_materias").
                        append('<option value=' + obj[i]["idMateria"] + '>' + obj[i]["mNombre"] + '</option>');
                    }
                },
                error: function () {alert("Algo salio mal");}
            }
        );
    });

    jQuery('#select_materias').change(function () {
        jQuery.ajax({
                method: "post",
                url: "cargarProfesoresAjax",
                data: {materiaId: jQuery(this).val()},
                success: function(data){
                    var obj = jQuery.parseJSON(data);
                    jQuery('#select_profesores').find('option').remove().end();
                    jQuery("#select_profesores").prop('disabled', false);
                    jQuery("#btnAsignar").prop('disabled', false);
                    for (i = 0; i < obj.length; i++) {
                        jQuery("#select_profesores").
                        append('<option value=' + obj[i]["pfId"] + '>' + obj[i]["pfNombre"] + " "+ obj[i]["pfApellido"] + '</option>');
                    }
                },
                error: function () {alert("Algo salio mal");}
            }
        );
    });

});


//ASIGNARCOORDINADOR.HTML.TWIG

jQuery(document).ready(function() {
    jQuery('#select_areas').change(function () {
        jQuery.ajax({
                method: "post",
                url: "cargarMateriasAjax",
                data: {areaId: jQuery(this).val()},
                success: function(data){
                    var obj = jQuery.parseJSON(data);
                    jQuery('#select_materias').find('option').remove().end();
                    jQuery("#select_materias").prop('disabled', false);
                    jQuery('#select_profesores').find('option').remove().end();
                    jQuery("#select_profesores").prop('disabled', true);
                    jQuery('#btnAsignar').prop('disabled', true);
                    for (i = 0; i < obj.length; i++) {
                        jQuery("#select_materias").
                        append('<option value=' + obj[i]["idMateria"] + '>' + obj[i]["mNombre"] + '</option>');
                    }
                },
                error: function () {alert("Algo salio mal");}
            }
        );
    });

    jQuery('#select_materias').change(function () {
        jQuery.ajax({
                method: "post",
                url: "cargarProfesoresAjax",
                data: {materiaId: jQuery(this).val()},
                success: function(data){
                    var obj = jQuery.parseJSON(data);
                    jQuery('#select_profesores').find('option').remove().end();
                    jQuery("#select_profesores").prop('disabled', false);
                    jQuery("#btnAsignar").prop('disabled', false);
                    for (i = 0; i < obj.length; i++) {
                        jQuery("#select_profesores").
                        append('<option value=' + obj[i]["pfId"] + '>' + obj[i]["pfNombre"] + " "+ obj[i]["pfApellido"] + '</option>');
                    }
                },
                error: function () {alert("Algo salio mal");}
            }
        );
    });

});
/*==================================
 * funcion
 * Se encarga de crear las columnas de la tabla no syllabus
 ================================== */
/*function add_noSyllb(button, resultado, urlCrearColumna,  urlCrearNoSyllabus, urlEliminar) {
    var tabla = document.getElementById("TK_clases").childNodes[3];
    var row = tabla.insertRow(-1);
    var i = 0;
    for (i; i < 7; i++) {
        row.insertCell(-1);
    }
    var fecha = new Date();
    dia=fecha.getDate();
    mes=fecha.getMonth()+1;
    anio=fecha.getFullYear();
    if(dia<10) dia="0"+dia;
    if(mes<10) mes="0"+mes;
    var fechaActual =  anio+"-"+mes+"-"+dia;
     //console.log(fechaActual);

    var divD = document.createElement("div");
    divD.setAttribute("class", "descripcion");
    divD.setAttribute("style","max-height: 200px;overflow-y: scroll");
    divD.setAttribute("placeholder", "Clic para Editar...");
    row.childNodes[0].appendChild(divD);

    var divD = document.createElement("div");
    divD.setAttribute("class", "fecha");
    var newContent = document.createTextNode(fechaActual);
    divD.appendChild(newContent);
    row.childNodes[1].appendChild(divD);

    var divD = document.createElement("div");
    divD.setAttribute("class", "comentario");
    divD.setAttribute("style","max-height: 200px;overflow-y: scroll");
    divD.setAttribute("placeholder", "Clic para Editar...");
    row.childNodes[2].appendChild(divD);

    var divD = document.createElement("div");
    divD.setAttribute("class", "objetivos");
    divD.setAttribute("style","max-height: 200px;overflow-y: scroll");
    divD.setAttribute("placeholder", "Clic para Editar...");
    row.childNodes[3].appendChild(divD);

    var inputQty = document.createElement('input');
    inputQty.type = 'checkbox';
    inputQty.style = 'width: 30px; height: 30px;';
    inputQty.required = 'true';
    inputQty.className = 'form-control';
    inputQty.checked = true;
    inputQty.name = "dictada";
    inputQty.setAttribute("id","dictada");
    var cell4 = row.childNodes[4];
    cell4.setAttribute("style","text-align: center; padding-top: 5px; padding-left:14px");
    cell4.appendChild(inputQty);

    /*RECUPERADA*/
/*    row.childNodes[5].setAttribute("style", "background-color: #fffb99; color: #f0ad30");
    var span = document.createElement('span');
    span.className = 'glyphicon glyphicon-minus estadoClase';
    span.setAttribute("data-content", "TIEMPO");
    var cell5 = row.childNodes[5];
    cell5.appendChild(span);


    /*BOTON ELIMINAR*/
 /*   var btnRemove = document.createElement('button');
    btnRemove.type = "button";
    btnRemove.className = 'btn btn-danger btn-sm';
    btnRemove.setAttribute("onclick", "eliminarClase(this,'"+urlEliminar+"')");
    var trash = document.createElement('SPAN');
    trash.className = 'glyphicon glyphicon-trash';
    btnRemove.appendChild(trash);
    var cell7 = row.childNodes[6];
    cell7.appendChild(btnRemove);

    //CREA UNA NUEVA CLASE EN LA BD

    jQuery.ajax({
        method: "GET",
        url: urlCrearNoSyllabus,
        dataType: 'json',
        success: function (data) {
            if (data) {
                idClase = data["idClase"];
                //OBTIENE EL ID Y LO AGREGA AL ID DEL NUEVO TR
                row.setAttribute("id", idClase);
                row.children[0].setAttribute("style", "cursor: pointer;width: 70px;");
                row.children[1].setAttribute("style", "cursor: pointer;width: 70px;");
                row.children[2].setAttribute("style", "cursor: pointer;width: 70px;");
                row.children[3].setAttribute("style", "cursor: pointer;width: 70px;");
            }
        },
        error: function () {
            alert('algo salio mal');
        }
    });

}*/

 /*==================================
 * funcion
 * Muestra el modal a eliminar Asignación
 ================================== */
function eliminarAsignacion(boton){
    var modalPregunta =  jQuery("#asignacion-elim");  
    modalPregunta.modal("show");
    var cursoId = boton.getAttribute("curso-id");
    modalPregunta.find("#btnEliminar").attr("data-cursoid",cursoId);
}
/*==================================
* funcion
* Va eliminar la asignación de la BD
================================== */
function elAsignacion(boton){
	var cursoId = boton.getAttribute("data-cursoid");
	var urlAsignar = boton.getAttribute("data-url");
	
	jQuery.ajax({
		method: 'post',
		url: urlAsignar,
		dataType: 'json',
		data: {
			'cursoId': cursoId
		},
		success: function (data) {
			if (data) {
				location.reload();	
			}
			 //console.log(data);
		},
		error: function () {alert('algo salio mal') }
	});
}