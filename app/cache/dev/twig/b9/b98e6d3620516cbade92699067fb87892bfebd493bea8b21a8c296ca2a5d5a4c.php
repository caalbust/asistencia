<?php

/* TodoBundle:Default:listAsistencia.html.twig */
class __TwigTemplate_58a4e1d8e68dbbf404e3dd64199bfd4baeefed623b56c7e20018679b6ff41fbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UtilBundle:Default:baseInicio.html.twig", "TodoBundle:Default:listAsistencia.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'extraStyle' => array($this, 'block_extraStyle'),
            'extraScripts' => array($this, 'block_extraScripts'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UtilBundle:Default:baseInicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    INICIO
";
    }

    // line 5
    public function block_extraStyle($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

<style>
 .grid-overview {
    background-color: #f8f8f8;
    border-top: 4px solid rgba(38,38,38,0.05);
    border-bottom: 1px solid #cdcdcd;
    display: flex;
    padding: .625rem 0 .9375rem 0;
    padding-right: 20%;
    margin-left: 0.125rem;
    width: calc(100% + 0.75rem);
}
.grid-overview__overview-data-section {
    display: flex;
    padding-left: 1.875rem;
    padding-right: 1.375rem;
}
.grid-overview .-class-average {
    display: flex;
    align-items: center;
    border-right: solid .0625rem #cdcdcd;
}
.grid-overview__overview-data-section {
    display: flex;
    padding-left: 1.875rem;
    padding-right: 1.375rem;
}
.attendance-grade-pill.-good {
    background-color: #39e379;
}
.attendance-grade-pill--class-average {
    min-width: 5.625rem;
    height: 2.25rem;
    font-weight: 600;
}
 .attendance-grade-pill {
    min-width: 9.375rem;
    max-width: 6.875rem;
    height: 2.875rem;
    border-radius: 1.875rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    padding: .625rem;
    color: #000;
}
.grid-overview__description {
    font-size: 1.05rem;
    margin-left: .625rem;
    line-height: 1.4;
}
#tabla_cursos_length{
\tdisplay: none;
}
.alert.alert-info {
    display: block;
    -webkit-animation: showTooltip .2s ease-out;
    animation: showTooltip .2s ease-out;
}
.alert.alert-warning {
    display: block;
    -webkit-animation: showTooltip .2s ease-out;
    animation: showTooltip .2s ease-out;
}
.modal-backdrop{
    z-index: -1;
}
.settings-panel__grade-values {
    margin-bottom: 1.625rem;
    align-items: center;
    position: relative;
}
.alert {
    display: none;
    width: 256px;
    /*height: auto;
    background-color: #3483fa;
    -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,.25), 0 -1px 0 0 rgba(0,0,0,.05);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.25), 0 -1px 0 0 rgba(0,0,0,.05);
    -webkit-border-radius: 2px;
    border-radius: 2px;*/
    position: absolute;
    left: 100%;
    top: 26%;
    z-index: 3;
    will-change: opacity;
}
.flecha {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-right: 8px solid #d9edf7;
    left: -8px;
    top: 17px;
}
.button.clear {
    background-color: transparent;
    color: #666;
        font-size: 1.875rem;
}
.button {
    display: inline-block;
    text-align: center;
    line-height: 1;
    cursor: pointer;
    -webkit-appearance: none;
    transition: background-color 0.25s ease-out, color 0.25s ease-out;
    vertical-align: middle;
    border: 1px solid transparent;
    border-radius: 2px;
    padding: 0.5em 1.125em;
    margin: 0 0 1rem 0;
    font-size: .875rem;
    background-color: #262626;
    color: #fff;
}
.flecha_warning {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-right: 8px solid #fcf8e3;
    left: -8px;
    top: 17px;
}
.panel-header-large__actions-wrapper {
    /*display: flex;*/
    margin-top: 1.875rem;
}
.button-group>li:first-child button {
    border-right: 0;
}
.button-group>li:last-child button {
    border-left: 0;
}
.button-group button.active-switch {
    color: #fff !important;
    background-color: #262626;
}
 .button-group button {
    min-width: 9.625rem;
    height: 3.375rem;
    padding: 0;
    font-size: 1.775rem;
    border: 1px solid #cdcdcd;
    background-color: #fff;
    color: #262626;
    line-height: 2.375rem;
    cursor: pointer;
    white-space: nowrap;
    margin: 0;
    position: relative;
}

element.style {
}

.ftue-callout.hidden {
    pointer-events: none;
}
.button-group {
    margin: 0;
    padding: 0;
    list-style: none;
    margin-right: 27px;
}
.button-group>li {
    display: inline-block;
    margin: 0;
}
.settings-button {
    margin: 0;
    margin-left: .9375rem;
    padding-right: 0;
    margin-top: -55px;
}
/* Style buttons */
.btnMarcar {

  border: none; /* Remove borders */
  color: white; /* White text */
  width: 100%;
    height: 67px;
    border: none;
    BORDER-RADIUS: 0PX;
    background-color:#e0e0e0;
  font-size:c 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btnMarcar:hover {
  background-color: RoyalBlue;
}
#tabla_reunion_length,#tabla_general_length,#tabla_reportes_length{
    display:none;
}
.dropbtn {
  background-color: #7fb8de;
  color: white;
  padding: 16px;
  font-size: 14px;
  border: none;
  cursor: pointer;
 border-radius: 4px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 206px;
  margin-left: 20px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 12px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
 .grid {
    border-right: solid 1px #cdcdcd;
    flex-grow: 1;
    position: relative;
   /* height: .0625rem;*/
    overflow: auto;
    margin-left: 1.125rem;
    margin-right: 1.125rem;
    background: linear-gradient(
45deg
, #f0f0f0 .0625rem, #fff 0, #fff calc(50% - .0625rem), #f0f0f0 0, #f0f0f0 calc(50% + .0625rem), #fff 0, #fff calc(100% - .0625rem), #f0f0f0 0);
    background-size: calc(2 * (.125rem + .4375rem) / 1.4142) calc(2 * (.125rem + .4375rem) / 1.4142);
}
#tabla_general{
    border: none;
    border-collapse: separate;
    border-radius: 2px;
    border-spacing: 0;
    margin-bottom: 1rem;
}

th.grid__cell.-header.-semi-bold ,td.grid__cell.-header.-semi-bold{
    position: sticky;
    position: -webkit-sticky;
    left: 0rem;
    z-index: 20;
    font-size:12px;
}
th.grid__cell , td.grid__cell{
       width: 0px;
    /* position: relative; */
    max-width: 9.375rem;
    min-width: 9.375rem;
    height: 5.125rem;
    padding: 0;
    text-align: center;
    border-bottom: 1px solid #cdcdcd;
    border-right: 1px solid #cdcdcd;
    background-color: #001c43;
    font-size: .75rem;
    font-weight: 400;
    color: white;
}
 .dropdown-wrapper__button:not(:disabled) {
    color: #1874a4;
    text-decoration: underline;
    font-weight: 600;
}
.dropdown-wrapper__button {
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent;
    padding: 0;
    border: 0;
    border-radius: 2px;
    line-height: 1;
}
</style>
";
    }

    // line 312
    public function block_extraScripts($context, array $blocks = array())
    {
        // line 313
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/todo/jsAsistencia.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js\" defer></script>

\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#tabla_reunion').DataTable({
\t\t\t\t\"language\": {
\t\t\t\t\t\"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
\t\t\t\t}
\t\t\t});
            \$('#tabla_general').DataTable({
                dom: 'Bftrip',
                buttons: ['excelHtml5'],
\t\t\t\t\"language\": {
\t\t\t\t\t\"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
\t\t\t\t}
\t\t\t});
            \$('#tabla_reportes').DataTable({
\t\t\t\t\"language\": {
\t\t\t\t\t\"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
\t\t\t\t}
\t\t\t});
            \$(\"#list_estudiantes\").select2();
\t\t} );
        function sendComentario(){
            var comentario = \$('#comentarioText').val();
            var tipo = \$('#tipo').val();
            var btnId = \$('#btnId').val();
            var action = \$('#actionComentario').val();
            console.log(comentario);
            if(action=='MARCARAsistenciaJUSTIFICADO'){
    \$.ajax({
                    url:'";
        // line 347
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        'action':action,
                        'tipo':tipo,
                        'id':btnId,
                        'comentario':comentario
                    },
                    async: true,
                    success: function (data)
                    {
                        console.log(data);
                    switch(tipo){
                        
                        case 'JUSTIFICADO':
                                \$(\"#\"+btnId).css(\"background-color\", \"#92E5DC\");
                                \$(\"#btnAtr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                                \$(\"#btnAus_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                                \$(\"#btnPr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                                \$(\"#btnNoCla_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                        break;
                       
                    }
                     \$(\"#modal-comentario\").modal(\"hide\");
                    }
                });
            }else if(action=='MARCARALLJUSTIFICADO'){
                 var fecha = \$('#fecha').val();
                 \$.ajax({
                    url:'";
        // line 377
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        'action':'MARCARALL',
                        'tipo':tipo,
                        'fecha':fecha,
                        'id_curso':btnId,
                        'comentario':comentario
                    },
                    async: true,
                    beforeSend: function()
                    {   
                        \$(\"#icon-action\").removeClass('fa-search').addClass('fa-circle-o-notch fa-spin');
                    },
                    success: function (data)
                    {
                        console.log(data);
                        
                    switch(tipo){
                       
                        case 'JUSTIFICADO':
                                for (i=0; i< data['asistenciaList'].length ;i++){
                                    \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#92E5DC\");
                                    \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                
                                }
                        break;
                       
                    }
                        \$(\"#icon-action\").removeClass('fa-circle-o-notch fa-spin').addClass('fa-search');
                    
                    }
                });
                 \$(\"#modal-comentario\").modal(\"hide\");
            }else{
                \$.ajax({
                url:'";
        // line 417
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    'action':'MARCARGENERALJUSTIFICADO',
                    'tipo':tipo,
                    'id':btnId,
                    'fecha':fecha,
                     'comentario':comentario
                },
                async: true,
                success: function (data)
                {
                    console.log(data);
                     switch(tipo){
                       case 'JUSTIFICADO':
                            \$(\"#btn_\"+btnId).css(\"background-color\", \"#92E5DC\");
                            \$(\"#btn_\"+btnId).css(\"width\", \"54px\");
                            \$(\"#btn_\"+btnId).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+btnId).html( '<i class=\"fa fa-ban\"></i>');
                       break;
                   }
                   \$(\"#modal-comentario\").modal(\"hide\");
                }
            });
            }
           
        }
    function actionDiv(action){
        console.log('his');
        if(action=='general'){
            \$(\"#contener_general\").css(\"display\", \"block\");
            \$(\"#contener_reunion\").css(\"display\", \"none\");
             \$(\"#contener_reportes\").css(\"display\", \"none\");
              \$(\"#titulo_asistencia\").css(\"display\", \"block\");
        }else if(action=='reunion'){
            \$(\"#contener_general\").css(\"display\", \"none\");
             \$(\"#contener_reportes\").css(\"display\", \"none\");
            \$(\"#contener_reunion\").css(\"display\", \"block\");
               \$(\"#titulo_asistencia\").css(\"display\", \"block\");
        }else{
            \$(\"#contener_general\").css(\"display\", \"none\");
            \$(\"#contener_reunion\").css(\"display\", \"none\");
             \$(\"#contener_reportes\").css(\"display\", \"block\");
             \$(\"#titulo_asistencia\").css(\"display\", \"none\");
        }
    }
    function marcarGeneral(tipo,fecha,id){
        console.log(tipo);
        console.log(fecha);
        console.log(id);
        if(tipo=='JUSTIFICADO'){
            \$(\"#tipo\").val(tipo);
            \$(\"#btnId\").val(id);
            \$(\"#fecha\").val(fecha);
            \$(\"#actionComentario\").val('MARCARGENERALJUSTIFICADO');
            \$(\"#comentarioText\").val('');
            \$(\"#modal-comentario\").modal(\"show\");
        }else{
            \$.ajax({
                url:'";
        // line 477
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    'action':'MARCARGENERAL',
                    'tipo':tipo,
                    'id':id,
                    'fecha':fecha
                },
                async: true,
                success: function (data)
                {
                    console.log(data);
                    var lengthClases = ";
        // line 490
        echo twig_escape_filter($this->env, ($context["sizeClases"] ?? null), "html", null, true);
        echo ";
                    console.log(lengthClases);
                        var cobertura= data['total']/lengthClases;
                        console.log(cobertura);
                        cobertura = cobertura.toFixed(2)
                         \$(\"#cobert_\"+data['estudiantexCurso']['listEstudiantesId']).html(cobertura);
                     switch(tipo){
                       case 'PRESENTE':
                            \$(\"#btn_\"+id).css(\"background-color\", \"#ABEB91\");
                            \$(\"#btn_\"+id).css(\"width\", \"54px\");
                            \$(\"#btn_\"+id).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+id).html( '<i class=\"fa fa-check\"></i>');
                            
                          
                           
                       break;
                       case 'AUSENTE':
                            \$(\"#btn_\"+id).css(\"background-color\", \"#EA7178\");
                            \$(\"#btn_\"+id).css(\"width\", \"54px\");
                            \$(\"#btn_\"+id).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+id).html( '<i class=\"fa fa-close\"></i>');
                       break;
                       case 'JUSTIFICADO':
                            \$(\"#btn_\"+id).css(\"background-color\", \"#92E5DC\");
                            \$(\"#btn_\"+id).css(\"width\", \"54px\");
                            \$(\"#btn_\"+id).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+id).html( '<i class=\"fa fa-ban\"></i>');
                       break;
                       case 'ATRASADO':
                            \$(\"#btn_\"+id).css(\"background-color\", \"#F9ED89\");
                            \$(\"#btn_\"+id).css(\"width\", \"54px\");
                            \$(\"#btn_\"+id).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+id).html( '<i class=\"fa fa-clock-o\"></i>');
                       break;
                       case 'NO HUBO CLASES':
                            \$(\"#btn_\"+id).css(\"background-color\", \"#000000\");
                            \$(\"#btn_\"+id).css(\"width\", \"54px\");
                            \$(\"#btn_\"+id).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+id).html( '<i class=\" fa fa-calendar-times-o\"></i>');
                       break;
                   }
                }
            });
        }
        

    }
    function configAction(){
         \$.ajax({
                url:'";
        // line 539
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    'action':'LOAD_EQUEMA',
                },
                async: true,
                success: function (data)
                {
                    console.log(data['all_Data'][0]['esquemaCalificacionValue']);
                    \$(\"#presente\").val(data['all_Data'][0]['esquemaCalificacionValue']);
                    \$(\"#ausente\").val(data['all_Data'][1]['esquemaCalificacionValue']);
                    \$(\"#atrasado\").val(data['all_Data'][3]['esquemaCalificacionValue']);
                    \$(\"#justificado\").val(data['all_Data'][2]['esquemaCalificacionValue']);
                    \$(\"#configModal\").modal(\"show\");
                   
                }
            });
       
    }
    function sendFormEsquema(formulario){
         var form_data = \$(formulario).serialize();
            console.log(form_data);
             \$.ajax({
                url:'";
        // line 563
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: form_data,
                async: true,
                success: function (data)
                {
                    console.log(data);
                    \$(\"#configModal\").modal(\"hide\");
                   
                }
            });
    }
    function marcarAsistencia(tipo, btnId){
        console.log(tipo);
        console.log(btnId);
        if(tipo == 'JUSTIFICADO'){
            \$(\"#tipo\").val(tipo);
            \$(\"#btnId\").val(btnId);
            \$(\"#actionComentario\").val('MARCARAsistenciaJUSTIFICADO');
             \$(\"#comentarioText\").val('');
            \$(\"#modal-comentario\").modal(\"show\");
           
        }else{
             \$.ajax({
                url:'";
        // line 588
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    'action':'MARCARAsistencia',
                    'tipo':tipo,
                    'id':btnId,
                },
                async: true,
                success: function (data)
                {
                    console.log(data);
                    var lengthClases = ";
        // line 600
        echo twig_escape_filter($this->env, ($context["sizeClases"] ?? null), "html", null, true);
        echo ";
                     console.log(lengthClases);
                        var cobertura= data['total']/lengthClases;
                        console.log(cobertura);
                        cobertura = cobertura.toFixed(2)
                         \$(\"#cobert_\"+data['estudiantexCurso']['listEstudiantesId']).html(cobertura);
                   switch(tipo){
                       case 'PRESENTE':
                            \$(\"#\"+btnId).css(\"background-color\", \"#ABEB91\");
                            \$(\"#btnAtr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnAus_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnJust_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnNoCla_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                       
                       //tabla general
                            \$(\"#btn_\"+data['id']).css(\"background-color\", \"#ABEB91\");
                            \$(\"#btn_\"+data['id']).css(\"width\", \"54px\");
                            \$(\"#btn_\"+data['id']).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+data['id']).html( '<i class=\"fa fa-check\"></i>');
                            
                           
                       break;
                       case 'AUSENTE':
                            \$(\"#\"+btnId).css(\"background-color\", \"#EA7178\");
                            \$(\"#btnAtr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnPr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnJust_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnNoCla_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                       //tabla general
                            \$(\"#btn_\"+data['id']).css(\"background-color\", \"#EA7178\");
                            \$(\"#btn_\"+data['id']).css(\"width\", \"54px\");
                            \$(\"#btn_\"+data['id']).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+data['id']).html( '<i class=\"fa fa-close\"></i>');
                       break;
                       case 'JUSTIFICADO':
                            \$(\"#\"+btnId).css(\"background-color\", \"#92E5DC\");
                            \$(\"#btnAtr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnAus_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnPr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnNoCla_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                      
                             //tabla general
                              \$(\"#btn_\"+data['id']).css(\"background-color\", \"#92E5DC\");
                            \$(\"#btn_\"+data['id']).css(\"width\", \"54px\");
                            \$(\"#btn_\"+data['id']).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+data['id']).html( '<i class=\"fa fa-ban\"></i>');
                       break;
                       case 'ATRASADO':
                            \$(\"#\"+btnId).css(\"background-color\", \"#F9ED89\");
                            \$(\"#btnPr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnAus_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnJust_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnNoCla_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                       
                            //tabla general

                             \$(\"#btn_\"+data['id']).css(\"background-color\", \"#F9ED89\");
                            \$(\"#btn_\"+data['id']).css(\"width\", \"54px\");
                            \$(\"#btn_\"+data['id']).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+data['id']).html( '<i class=\"fa fa-clock-o\"></i>');
                       break;
                        case 'NO HUBO CLASES':

                            //tabla general
                             \$(\"#btn_\"+data['id']).css(\"background-color\", \"#000000\");
                            \$(\"#btn_\"+data['id']).css(\"width\", \"54px\");
                            \$(\"#btn_\"+data['id']).attr(\"class\", \"btnMarcar dropdown-toggle\");
                            \$(\"#btn_\"+data['id']).html( '<i class=\" fa fa-calendar-times-o\"></i>');

                            \$(\"#\"+btnId).css(\"background-color\", \"#000000\");
                            \$(\"#btnPr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnAus_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                            \$(\"#btnJust_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                             \$(\"#btnAtr_\"+data['id']).css(\"background-color\", \"#e0e0e0\");
                       break;
                   }
                   
                }
            });
        }
        

    }
    function allMarcar() {
        document.getElementById(\"myDropdown\").classList.toggle(\"show\");
        console.log('all');
        }

    function nextCalendar(fecha){
        console.log(fecha);
         \$.ajax({
                url:'";
        // line 691
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    'action':'next',
                    'fecha':fecha,
                },
                async: true,
                success: function (data)
                {
                    console.log(data);
                }
         });
    }
    function backCalendar (fecha){
        console.log(fecha);
        \$.ajax({
                url:'";
        // line 708
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    'action':'back',
                    'fecha':fecha,
                },
                async: true,
                success: function (data)
                {
                    console.log(data);
                }
         });
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName(\"dropdown-content\");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
        function marcarAll(tipo, fecha, id_curso){
            console.log(tipo);
            console.log(fecha);
            console.log(id_curso);
            if(tipo=='JUSTIFICADO'){
                \$(\"#tipo\").val(tipo);
                \$(\"#btnId\").val(id_curso);
                \$(\"#actionComentario\").val('MARCARALLJUSTIFICADO');
                \$(\"#fecha\").val(fecha);
                 \$(\"#comentarioText\").val('');
                \$(\"#modal-comentario\").modal(\"show\");
          
            }else{
                \$.ajax({
                    url:'";
        // line 748
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        'action':'MARCARALL',
                        'tipo':tipo,
                        'fecha':fecha,
                        'id_curso':id_curso,
                    },
                    async: true,
                    beforeSend: function()
                    {   
                        \$(\"#icon-action\").removeClass('fa-search').addClass('fa-circle-o-notch fa-spin');
                    },
                    success: function (data)
                    {
                        console.log(data);
                        var lengthClases = ";
        // line 765
        echo twig_escape_filter($this->env, ($context["sizeClases"] ?? null), "html", null, true);
        echo ";
                        console.log(lengthClases);
                        var cobertura= data['total']/lengthClases;
                        console.log(cobertura);
                        cobertura = cobertura.toFixed(2)
                         \$(\"#cobert_\"+data['estudiantexCurso']['listEstudiantesId']).html(cobertura);
                    switch(tipo){
                        case 'PRESENTE':
                                for (i=0; i< data['asistenciaList'].length ;i++){
                                    \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#ABEB91\");
                                    \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                            
                                }
                        break;
                        case 'AUSENTE':
                                for (i=0; i< data['asistenciaList'].length ;i++){
                                    \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#EA7178\");
                                    \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                
                                }
                                
                        break;
                        case 'JUSTIFICADO':
                                for (i=0; i< data['asistenciaList'].length ;i++){
                                    \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#92E5DC\");
                                    \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                
                                }
                        break;
                        case 'ATRASADO':
                                for (i=0; i< data['asistenciaList'].length ;i++){
                                    \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#F9ED89\");
                                    \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                
                                }
                        break;
                        case 'NO HUBO CLASES':
                                for (i=0; i< data['asistenciaList'].length ;i++){
                                    \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#000000\");
                                    \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                }
                        break;
                    }
                        \$(\"#icon-action\").removeClass('fa-circle-o-notch fa-spin').addClass('fa-search');
                    
                    }
                });
            }
            
        }
        function imprimirReporte(){
            var idCurso = ";
        // line 831
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "getCursoId", array(), "method"), "html", null, true);
        echo ";
            var IdEstudiante= \$(\"#list_estudiantes\").val();
            console.log(IdEstudiante);
            var the_link = \"";
        // line 834
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_imprimir_estudiante", array("idCurso" => "ID", "idEstudiante" => "IDESTUDIANTE")), "html", null, true);
        echo "\";
            the_link = the_link.replace(\"ID\",idCurso);
            the_link = the_link.replace(\"IDESTUDIANTE\",IdEstudiante);
            console.log(the_link);
            window.open(the_link);
        }
\t</script>
";
    }

    // line 842
    public function block_contenido($context, array $blocks = array())
    {
        // line 843
        echo "\t\t<div class=\"oculto\">
            <div class=\"panel panel-default widget-box\">
                <div class=\"panel-body widget-content\">
                    <div class=\"row\" style=\"    margin: 10px;\">\t
                        <div class=\"col-sm-4\">
                            <span class=\"panel-header-large__sub-title\">";
        // line 848
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "getCursoMateria", array(), "method"), "getMateriasCodigo", array(), "method"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "getCursoMateria", array(), "method"), "getMateriasName", array(), "method"), "html", null, true);
        echo "</span>
                            <h3 id=\"titulo_asistencia\">ASISTENCIA </h3>
                             
                                                   
                        </div>
                        <div class=\"col-sm-4\" style=\"text-align: center;font-size: 24px;\">
                        </div>
                        <div class=\"col-sm-4\" style=\"text-align: right;\">
                                <div class=\"panel-header-large__actions-wrapper\" style=\"margin-left: -67px;\">
                                    <div class=\"grid-view-switcher\">
                                        <ul class=\"button-group\" style=\"width: 300px;\">
                                            <li>  <button class=\"js-switch-to-meeting-view small right-button button active-switch\" onclick=\"actionDiv('reunion')\" data-analytics-id=\"course.attendance.showMeetingView.button\" id=\"course_reunion\" aria-label=\"Reunión, seleccionada\">Asistencia</button>
                                             
                                                    </li>
                                            <li style=\"margin-right: 2px;\">
                                                <button class=\"js-switch-to-meeting-view small right-button button active-switch\" onclick=\"actionDiv('reportes')\" data-analytics-id=\"course.attendance.showMeetingView.button\" id=\"course_reunion\" aria-label=\"Reunión, seleccionada\">Reportes</button>
                                        
                                            </li>
                                            <li>
                                                <div>
                                                    <!--js-switch-to-overall-view small left-button button-->
                                                    <button class=\"js-switch-to-meeting-view small right-button button active-switch\" onclick=\"actionDiv('general')\" data-analytics-id=\"course.attendance.showOverallView.button\"  id=\"course_general\" aria-label=\"General\">Resumen</button>
                                                    <span class=\"ftue-callout hidden\"></span>
                                                </div>
                                                
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div>
                                        ";
        // line 878
        if ((($context["boolAnterior"] ?? null) == 0)) {
            // line 879
            echo "                                            <button class=\"button settings-button clear js-open-settings\" title=\"Ajustes\" onclick=\"configAction()\" data-analytics-id=\"course.attendance.settings.link\" aria-label=\"Ajustes\" href=\"#\">
                                                <span class=\"glyphicon glyphicon-cog\"></span>
                                            </button>
                                        ";
        }
        // line 882
        echo "    
                                    </div>
                                </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"contener_reunion\" >
                <div class=\"panel panel-default widget-box\">
                    <div class=\"panel-body widget-content\">
                        <div class=\"row\" style=\"    margin: 10px;\">\t
                            <div class=\"col-sm-4\">
                            ";
        // line 894
        if (($context["btnBackBlock"] ?? null)) {
            echo " 
                                <a type=\"button\" ";
            // line 895
            if (($context["btnBackBlock"] ?? null)) {
                echo " disable ";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => ($context["id_curso"] ?? null), "fecha" => twig_date_format_filter($this->env, ($context["fechaBack"] ?? null), "Y-m-d 00:00:00"), "boolAnterior" => ($context["boolAnterior"] ?? null))), "html", null, true);
            echo "\" class=\"btn btn-secondary\"><span class=\"glyphicon glyphicon-arrow-left\" style=\"margin-top: 3px;font-size: 46px;\"></span></a>
                            ";
        }
        // line 896
        echo "   
                            </div>
                            <div class=\"col-sm-4\" style=\"text-align: center;font-size: 24px;margin-top: 20px;\">
                                <div>";
        // line 899
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"col-sm-4\" style=\"text-align: right;\">
                                ";
        // line 902
        if (($context["btnNextBlock"] ?? null)) {
            echo "  
                                    <a type=\"button\"  href=\"";
            // line 903
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => ($context["id_curso"] ?? null), "fecha" => twig_date_format_filter($this->env, ($context["fechaNext"] ?? null), "Y-m-d 00:00:00"), "boolAnterior" => ($context["boolAnterior"] ?? null))), "html", null, true);
            echo "\" class=\"btn btn-secondary\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"margin-top: 3px;font-size: 46px;\"></span></a>
                                ";
        }
        // line 905
        echo "                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class=\"panel panel-default widget-box\">
                    <div class=\"panel-body widget-content\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\" style=\"margin-top: 36px;\">
                                <div class=\"dropdown\"  >
                                    <button onclick=\"allMarcar()\" ";
        // line 916
        if ((($context["boolAnterior"] ?? null) == 1)) {
            echo " disabled ";
        }
        echo "  style =\"margin-left:20px;\" class=\"dropbtn\"><i id=\"icon-action\" class=\"fa fa-users\"></i>Tomar a Todos la Asistencia</button>
                                    <div id=\"myDropdown\" class=\"dropdown-content\">
                                        <a  onclick=\"marcarAll('PRESENTE','";
        // line 918
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-check\"></i> PRESENTE</a>
                                        <a  onclick=\"marcarAll('ATRASADO','";
        // line 919
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-clock-o\"></i> ATRASADO</a>
                                        <a  onclick=\"marcarAll('AUSENTE','";
        // line 920
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a>
                                        <!--<a  onclick=\"marcarAll('JUSTIFICADO','";
        // line 921
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-ban\"></i> JUSTIFICADO</a>-->
                                         <a  onclick=\"marcarAll('NO HUBO CLASES','";
        // line 922
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                    </div>
                                    </div>
                                <table id=\"tabla_reunion\" class=\"table table-striped table-bordered\" style=\"    width: 96%;margin-left: 20px\">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ESTUDIANTE</th>
                                            <th>PRESENTE</th>
                                            <th>ATRASADO</th>
                                            <th>AUSENTE</th>
                                            <!--<th>JUSTIFICADO</th>-->
                                            <th>SIN ACTIVIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     ";
        // line 938
        $context["i"] = 1;
        // line 939
        echo "                                       ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asistenciaList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 940
            echo "                                            <tr>
                                                <td>";
            // line 941
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "</td>
                                                <td>";
            // line 942
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "getAsistenciaListEstudiante", array(), "method"), "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "getAsistenciaListEstudiante", array(), "method"), "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo " </td>
                                                ";
            // line 943
            if (($this->getAttribute($context["value"], "getAsistenciaValue", array(), "method") ==  -1)) {
                // line 944
                echo "                                                    <td><button id=\"btnPr_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\"><i class=\"fa fa-check\"></i></button></td>
                                                    <td><button id=\"btnAtr_";
                // line 945
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\"><i class=\"fa fa-clock-o\"></i></button></td>
                                                    <td><button id=\"btnAus_";
                // line 946
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" ><i class=\"fa fa-close\"></i></button></td>
                                                   <!-- <td><button id=\"btnJust_";
                // line 947
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar \" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>-->
                                                    <td><button id=\"btnNoCla_";
                // line 948
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar \" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                   
                                                ";
            } else {
                // line 951
                echo "                                                    ";
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "PRESENTE")) {
                    // line 952
                    echo "                                                        <td><button id=\"btnPr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  style=\"background-color:#ABEB91\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\" ><i class=\"fa fa-check\"></i></button></td>
                                                    ";
                } else {
                    // line 954
                    echo "                                                            <td><button id=\"btnPr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\" ><i class=\"fa fa-check\"></i></button></td>
                                                    ";
                }
                // line 956
                echo "
                                                    ";
                // line 957
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "ATRASADO")) {
                    // line 958
                    echo "                                                        <td><button id=\"btnAtr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#F9ED89\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\"><i class=\"fa fa-clock-o\"></i></button></td>
                                                     ";
                } else {
                    // line 960
                    echo "                                                         <td><button id=\"btnAtr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\" ><i class=\"fa fa-clock-o\"></i></button></td>
                                                   ";
                }
                // line 962
                echo "
                                                    ";
                // line 963
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "AUSENTE")) {
                    // line 964
                    echo "                                                        <td><button id=\"btnAus_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#EA7178\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" {><i class=\"fa fa-close\"></i></button></td>
                                                      ";
                } else {
                    // line 966
                    echo "                                                        <td><button id=\"btnAus_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" ><i class=\"fa fa-close\"></i></button></td>
                                                    ";
                }
                // line 968
                echo "<!--
                                                    ";
                // line 970
                echo "                                                    <!--    <td><button id=\"btnJust_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" style=\"background-color:#92E5DC\" class=\"btnMarcar\" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>
                                                   ";
                // line 972
                echo "                                                        <!--<td><button id=\"btnJust_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>
                                                    ";
                // line 973
                echo "-->

                                                    ";
                // line 975
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "NO HUBO CLASES")) {
                    // line 976
                    echo "                                                        <td><button id=\"btnNoCla_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#000000\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                   ";
                } else {
                    // line 978
                    echo "                                                        <td><button id=\"btnNoCla_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" class=\"btnMarcar\"";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                    ";
                }
                // line 980
                echo "
                                                    
                                                ";
            }
            // line 983
            echo "                                            </tr>
                                             ";
            // line 984
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 985
            echo "                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                                    </tbody>
                                </table>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"contener_general\" style=\"display:none\">
                <div class=\"panel panel-default widget-box\">
                    <div class=\"panel-body widget-content\">
                        <div class=\"row\" style=\"    margin: 10px;\">\t
                                                                    <div class=\"grid-overview\">
                                        <div class=\"grid-overview__overview-data-section -class-average\">
                                            <div class=\"attendance-grade-pill attendance-grade-pill--class-average -good\">";
        // line 1000
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "allPromedio", array()), 2, ".", ","), "html", null, true);
        echo " &nbsp;%</div>
                                            <div class=\"grid-overview__description\">
                                                <span class=\"-bold\">Promedio de asistencia</span>
                                            </div>
                                        </div>
                                        <div class=\"grid-overview__overview-data-section js-above-average-students\">
                                            <span class=\"grid-overview__students-affected\">";
        // line 1006
        echo twig_escape_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "countMedio", array()), "html", null, true);
        echo "</span>
                                            <div class=\"grid-overview__description\">
                                                <span>Estudiantes con asistencia promedio o superior al promedio</span>
                                                <span class=\"-bold js-percentage\">40&nbsp;% de la clase</span>
                                            </div>
                                        </div>
                                        <div class=\"grid-overview__overview-data-section js-below-average-students\">
                                            <span class=\"grid-overview__students-affected\">";
        // line 1013
        echo twig_escape_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "countBajo", array()), "html", null, true);
        echo "</span>
                                            <div class=\"grid-overview__description\">
                                                <span>Estudiantes con asistencia inferior al promedio</span>
                                                <span class=\"-bold js-percentage\"></span>
                                            </div>
                                        </div>
                                        </div>
                            
                        </div>
                    </div>
                </div>
                <div class=\"panel panel-default widget-box\">
                    <div class=\"panel-body widget-content\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\" style=\"margin-top: 36px;\">
                            <div class=\"grid overall-view-grid \">
                                <table id=\"tabla_general\" class=\"table table-striped table-bordered\" style=\"    width: 96%;margin-left: 20px\">
                                    <thead>
                                        <tr>
                                            <th class=\"grid__cell -header -semi-bold\" >ESTUDIANTE</th>
                                            ";
        // line 1033
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listadoPrevio"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 1034
            echo "                                                <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["valor"], "getAsistenciaFecha", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</th>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1036
        echo "                                        </tr>
                                    </thead>
                                    <tbody>
                                       ";
        // line 1039
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudiantes_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 1040
            echo "                                        <tr>
                                            <td class=\"grid__cell -header -semi-bold\">";
            // line 1041
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["valor"], "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["valor"], "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo "</br>
                                                ";
            // line 1042
            $context["cobertura"] = ($this->getAttribute($context["valor"], "getListEstudianteCobertura", array(), "method") / ($context["sizeClases"] ?? null));
            // line 1043
            echo "                                                <div id=\"cobert_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "getListEstudiantesId", array(), "method"), "html", null, true);
            echo "\" class=\"attendance-grade-pill attendance-grade-pill--class-average -good\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cobertura"] ?? null), 2, ".", ","), "html", null, true);
            echo "  &nbsp;%</div>
                                            </td>
                                            ";
            // line 1045
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["listadoGeneral"] ?? null), $this->getAttribute($context["valor"], "getListEstudiantesId", array(), "method"), array(), "array"), 0, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 1046
                echo "                                                 ";
                if (($this->getAttribute($context["value"], "getAsistenciaValue", array(), "method") ==  -1)) {
                    // line 1047
                    echo "                                                    <td>
                                                        <div class=\"dropdown\">
                                                            <button id=\"btn_";
                    // line 1049
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo " class=\"dropdown-wrapper__button js-trigger-dropdown dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                MARCAR 
                                                            </button>
                                                            <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                    // line 1053
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                    // line 1054
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                    // line 1055
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                    // line 1056
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                    // line 1057
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                             
                                                            </div>
                                                        </div>
                                                      
                                                    </td>
                                                ";
                } else {
                    // line 1064
                    echo "                                                    ";
                    if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "PRESENTE")) {
                        // line 1065
                        echo "                                                        <td>
                                                            <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1067
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\"  ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#ABEB91;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-check\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1069
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1070
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1071
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1072
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1073
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1078
$context["value"], "getAsistenciaTipo", array(), "method") == "ATRASADO")) {
                        // line 1079
                        echo "                                                        <td>
                                                            <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1081
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#F9ED89;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-clock-o\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1083
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1084
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1085
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1086
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1087
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1092
$context["value"], "getAsistenciaTipo", array(), "method") == "AUSENTE")) {
                        // line 1093
                        echo "                                                        <td>
                                                             <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1095
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#EA7178;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-close\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1097
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1098
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1099
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1100
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                   <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1101
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                     ";
                    } elseif (($this->getAttribute(                    // line 1106
$context["value"], "getAsistenciaTipo", array(), "method") == "NO HUBO CLASES")) {
                        // line 1107
                        echo "                                                        <td>
                                                             <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1109
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#000000;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\" fa fa-calendar-times-o\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1111
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1112
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1113
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                   <!-- <a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1114
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1115
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } else {
                        // line 1121
                        echo "                                                            <td>
                                                                <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1123
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#92E5DC;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-ban\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1125
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1126
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1127
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1128
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1129
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                            </td>
                                                    ";
                    }
                    // line 1134
                    echo "   
                                                ";
                }
                // line 1135
                echo "    
                                            
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1138
            echo "                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1140
        echo "                                    </tbody>
                                </table>
                               </div> 
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"contener_reportes\" style=\"display:none\" >
                <div class=\"panel panel-default widget-box\">
                    <div class=\"panel-body widget-content\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\" style=\"margin-top: 36px;\">
                             <div class=\"col-sm-12\" >
                                <label>Listado de Estudiantes del Curso </label>
                                <select id=\"list_estudiantes\" class=\"form-control\">
                                    <option value=\"-1\">TODOS</option>
                                    ";
        // line 1158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudiantes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 1159
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getListEstudiantesId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1161
        echo "                                </select>
                                <button style=\"margin-top: 20px;margin-bottom: 20px;\" type=\"button\" onclick=\"imprimirReporte();\" class=\"btn btn-success\"><i class=\"fa fa-print\"></i>Imprimir</button>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
\t\t</div>

<!--MODAL -->
<div class=\"modal fade\"  id=\"configModal\" tabindex=\"-2\" role=\"dialog\"  >
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div style=\"color: #fff;
\t\t\t\t\t\t\t\t\tbackground-color: #001c43;
\t\t\t\t\t\t\t\t\tborder-color: #ffeeba;\" class=\"modal-header\">
                            <button  style=\"color:white\" type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                            <span class=\"glyphicon glyphicon-cog\" style=\"font-size: 19px;\"></span>
                            <span class=\"peek-panel-header__sub-title\">Asistencia</span>
                            <h3 class=\"peek-panel-header__title\"style=\" margin: 0px;color: #eceff3;font-size: 27px;\" >Ajustes</h3>
                        </div>
                        <form id=\"formEsquema\" >
                        <div class=\"modal-body\">
                            <input type=\"hidden\" name=\"action\" value=\"ESQUEMA\" />
                            <div class=\"col-md-12\" >
                                <h4 class=\"settings-panel__section-title\">Esquema de calificación</h4>
                                <div class=\"settings-panel__grade-values\">
                                    <label class=\"settings-panel__label settings-panel__label--fake-input col-lg-2\" for=\"grade-value-presentWeight\">Presente</label>
                                    <input  class=\"settings-panel__input col-lg-9\" name=\"presente\" id=\"presente\" type=\"text\"  aria-describedby=\"grade-value-present-percent\" data-analytics-id=\"course.attendance.settings.gradeSchema.present.input.number\" >
                                    <span id=\"grade-value-present-percent\" class=\"settings-panel__input-percent\" aria-hidden=\"true\">%</span>
                                </div>
                                <div class=\"settings-panel__grade-values\">
                                    <label class=\"settings-panel__label settings-panel__label--fake-input col-lg-2\" for=\"grade-value-presentWeight\">Atrasado</label>
                                    <input  class=\"settings-panel__input col-lg-9\" name=\"atrasado\" id=\"atrasado\" type=\"text\"  aria-describedby=\"grade-value-present-percent\" data-analytics-id=\"course.attendance.settings.gradeSchema.present.input.number\" >
                                    <span id=\"grade-value-present-percent\" class=\"settings-panel__input-percent\" aria-hidden=\"true\">%</span>
                                </div>
                                <div class=\"settings-panel__grade-values\">
                                    <label class=\"settings-panel__label settings-panel__label--fake-input col-lg-2\" for=\"grade-value-presentWeight\">Ausente</label>
                                    <input  class=\"settings-panel__input col-lg-9\" name=\"ausente\" id=\"ausente\" type=\"text\" aria-describedby=\"grade-value-present-percent\" data-analytics-id=\"course.attendance.settings.gradeSchema.present.input.number\" >
                                    <span id=\"grade-value-present-percent\" class=\"settings-panel__input-percent\" aria-hidden=\"true\">%</span>
                                </div>
                                <!--<div class=\"settings-panel__grade-values\">
                                    <label class=\"settings-panel__label settings-panel__label--fake-input col-lg-2\" for=\"grade-value-presentWeight\">Justificado</label>
                                    <input class=\"settings-panel__input col-lg-9\" name=\"justificado\" id=\"justificado\" type=\"text\"  aria-describedby=\"grade-value-present-percent\" data-analytics-id=\"course.attendance.settings.gradeSchema.present.input.number\" >
                                    <span id=\"grade-value-present-percent\" class=\"settings-panel__input-percent\" aria-hidden=\"true\">%</span>
                                </div>-->
                            </div>
                            <div style=\"clear:both\"></div>
                        </div>
                        <div class=\"modal-footer text-center\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" id=\"botonCerrar\" style=\"display: block;float: right;\"><i class=\"fa fa-reply\"></i> Cancelar</button>
                            <button type=\"button\"  onclick = \"sendFormEsquema(this.form)\" class=\"btn btn-default\" style=\"color: #fff;background-color: #001c43;border-color: #ffeeba;\" ><i class=\"fa fa-save\"></i> Guardar</button>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"modal-comentario\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Justifique su Asistencia</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <!--Material textarea-->
        <div class=\"md-form\">
        <input type=\"hidden\" id=\"tipo\"/>
        <input type=\"hidden\" id=\"btnId\"/>
         <input type=\"hidden\" id=\"fecha\"/>
          <input type=\"hidden\" id=\"actionComentario\"/>
        <textarea id=\"comentarioText\" class=\"md-textarea form-control\" rows=\"3\"></textarea>
        <label for=\"form7\">Respuesta...</label>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"sendComentario();\">Guardar</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TodoBundle:Default:listAsistencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1764 => 1161,  1751 => 1159,  1747 => 1158,  1727 => 1140,  1720 => 1138,  1712 => 1135,  1708 => 1134,  1697 => 1129,  1691 => 1128,  1685 => 1127,  1679 => 1126,  1673 => 1125,  1664 => 1123,  1660 => 1121,  1649 => 1115,  1643 => 1114,  1637 => 1113,  1631 => 1112,  1625 => 1111,  1616 => 1109,  1612 => 1107,  1610 => 1106,  1600 => 1101,  1594 => 1100,  1588 => 1099,  1582 => 1098,  1576 => 1097,  1567 => 1095,  1563 => 1093,  1561 => 1092,  1551 => 1087,  1545 => 1086,  1539 => 1085,  1533 => 1084,  1527 => 1083,  1518 => 1081,  1514 => 1079,  1512 => 1078,  1502 => 1073,  1496 => 1072,  1490 => 1071,  1484 => 1070,  1478 => 1069,  1469 => 1067,  1465 => 1065,  1462 => 1064,  1450 => 1057,  1444 => 1056,  1438 => 1055,  1432 => 1054,  1426 => 1053,  1415 => 1049,  1411 => 1047,  1408 => 1046,  1404 => 1045,  1396 => 1043,  1394 => 1042,  1388 => 1041,  1385 => 1040,  1381 => 1039,  1376 => 1036,  1367 => 1034,  1363 => 1033,  1340 => 1013,  1330 => 1006,  1321 => 1000,  1299 => 985,  1297 => 984,  1294 => 983,  1289 => 980,  1279 => 978,  1269 => 976,  1267 => 975,  1263 => 973,  1254 => 972,  1245 => 970,  1242 => 968,  1232 => 966,  1222 => 964,  1220 => 963,  1217 => 962,  1207 => 960,  1197 => 958,  1195 => 957,  1192 => 956,  1182 => 954,  1172 => 952,  1169 => 951,  1159 => 948,  1151 => 947,  1143 => 946,  1135 => 945,  1126 => 944,  1124 => 943,  1118 => 942,  1114 => 941,  1111 => 940,  1106 => 939,  1104 => 938,  1083 => 922,  1077 => 921,  1071 => 920,  1065 => 919,  1059 => 918,  1052 => 916,  1039 => 905,  1034 => 903,  1030 => 902,  1024 => 899,  1019 => 896,  1010 => 895,  1006 => 894,  992 => 882,  986 => 879,  984 => 878,  949 => 848,  942 => 843,  939 => 842,  927 => 834,  921 => 831,  852 => 765,  832 => 748,  789 => 708,  769 => 691,  675 => 600,  660 => 588,  632 => 563,  605 => 539,  553 => 490,  537 => 477,  474 => 417,  431 => 377,  398 => 347,  363 => 315,  359 => 314,  354 => 313,  351 => 312,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TodoBundle:Default:listAsistencia.html.twig", "C:\\wamp64\\www\\asistencia\\src\\ControlacFIEC\\TodoBundle/Resources/views/Default/listAsistencia.html.twig");
    }
}
