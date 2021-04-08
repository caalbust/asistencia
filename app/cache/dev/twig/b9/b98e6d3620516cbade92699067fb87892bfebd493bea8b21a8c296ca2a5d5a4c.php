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

    // line 311
    public function block_extraScripts($context, array $blocks = array())
    {
        // line 312
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 314
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
        // line 346
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
        // line 376
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
        // line 416
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
        }else if(action=='reunion'){
            \$(\"#contener_general\").css(\"display\", \"none\");
             \$(\"#contener_reportes\").css(\"display\", \"none\");
            \$(\"#contener_reunion\").css(\"display\", \"block\");
        }else{
            \$(\"#contener_general\").css(\"display\", \"none\");
            \$(\"#contener_reunion\").css(\"display\", \"none\");
             \$(\"#contener_reportes\").css(\"display\", \"block\");
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
        // line 473
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
        // line 486
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
        // line 535
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
        // line 559
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
        // line 584
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
        // line 596
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
        // line 687
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
        // line 704
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
        // line 744
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
        // line 761
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
        // line 825
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "getCursoId", array(), "method"), "html", null, true);
        echo ";
            var IdEstudiante= \$(\"#list_estudiantes\").val();
            console.log(IdEstudiante);
            var the_link = \"";
        // line 828
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

    // line 836
    public function block_contenido($context, array $blocks = array())
    {
        // line 837
        echo "\t\t<div class=\"oculto\">
            <div class=\"panel panel-default widget-box\">
                <div class=\"panel-body widget-content\">
                    <div class=\"row\" style=\"    margin: 10px;\">\t
                        <div class=\"col-sm-4\">
                            <span class=\"panel-header-large__sub-title\">";
        // line 842
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "getCursoMateria", array(), "method"), "getMateriasCodigo", array(), "method"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["curso"] ?? null), "getCursoMateria", array(), "method"), "getMateriasName", array(), "method"), "html", null, true);
        echo "</span>
                            <h3>ASISTENCIA </h3>
                             
                                                   
                        </div>
                        <div class=\"col-sm-4\" style=\"text-align: center;font-size: 24px;\">
                        </div>
                        <div class=\"col-sm-4\" style=\"text-align: right;\">
                                <div class=\"panel-header-large__actions-wrapper\" style=\"margin-left: -67px;\">
                                    <div class=\"grid-view-switcher\">
                                        <ul class=\"button-group\" style=\"width: 300px;\">
                                            <li>
                                                <button class=\"js-switch-to-meeting-view small right-button button active-switch\" onclick=\"actionDiv('reportes')\" data-analytics-id=\"course.attendance.showMeetingView.button\" id=\"course_reunion\" aria-label=\"Reunión, seleccionada\">Reportes</button>
                                            </li>
                                            <li style=\"margin-left: 2px;\">
                                                <div>
                                                    <button class=\"js-switch-to-overall-view small left-button button \" onclick=\"actionDiv('general')\" data-analytics-id=\"course.attendance.showOverallView.button\"  id=\"course_general\" aria-label=\"General\">General</button>
                                                    <span class=\"ftue-callout hidden\"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <button class=\"js-switch-to-meeting-view small right-button button active-switch\" onclick=\"actionDiv('reunion')\" data-analytics-id=\"course.attendance.showMeetingView.button\" id=\"course_reunion\" aria-label=\"Reunión, seleccionada\">Asistencia</button>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div>
                                        ";
        // line 869
        if ((($context["boolAnterior"] ?? null) == 0)) {
            // line 870
            echo "                                            <button class=\"button settings-button clear js-open-settings\" title=\"Ajustes\" onclick=\"configAction()\" data-analytics-id=\"course.attendance.settings.link\" aria-label=\"Ajustes\" href=\"#\">
                                                <span class=\"glyphicon glyphicon-cog\"></span>
                                            </button>
                                        ";
        }
        // line 873
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
        // line 885
        if (($context["btnBackBlock"] ?? null)) {
            echo " 
                                <a type=\"button\" ";
            // line 886
            if (($context["btnBackBlock"] ?? null)) {
                echo " disable ";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => ($context["id_curso"] ?? null), "fecha" => twig_date_format_filter($this->env, ($context["fechaBack"] ?? null), "Y-m-d 00:00:00"), "boolAnterior" => ($context["boolAnterior"] ?? null))), "html", null, true);
            echo "\" class=\"btn btn-secondary\"><span class=\"glyphicon glyphicon-arrow-left\" style=\"margin-top: 3px;font-size: 46px;\"></span></a>
                            ";
        }
        // line 887
        echo "   
                            </div>
                            <div class=\"col-sm-4\" style=\"text-align: center;font-size: 24px;margin-top: 20px;\">
                                <div>";
        // line 890
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"col-sm-4\" style=\"text-align: right;\">
                                ";
        // line 893
        if (($context["btnNextBlock"] ?? null)) {
            echo "  
                                    <a type=\"button\"  href=\"";
            // line 894
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => ($context["id_curso"] ?? null), "fecha" => twig_date_format_filter($this->env, ($context["fechaNext"] ?? null), "Y-m-d 00:00:00"), "boolAnterior" => ($context["boolAnterior"] ?? null))), "html", null, true);
            echo "\" class=\"btn btn-secondary\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"margin-top: 3px;font-size: 46px;\"></span></a>
                                ";
        }
        // line 896
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
        // line 907
        if ((($context["boolAnterior"] ?? null) == 1)) {
            echo " disabled ";
        }
        echo "  style =\"margin-left:20px;\" class=\"dropbtn\"><i id=\"icon-action\" class=\"fa fa-users\"></i>Tomar a Todos la Asistencia</button>
                                    <div id=\"myDropdown\" class=\"dropdown-content\">
                                        <a  onclick=\"marcarAll('PRESENTE','";
        // line 909
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-check\"></i> PRESENTE</a>
                                        <a  onclick=\"marcarAll('ATRASADO','";
        // line 910
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-clock-o\"></i> ATRASADO</a>
                                        <a  onclick=\"marcarAll('AUSENTE','";
        // line 911
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a>
                                        <!--<a  onclick=\"marcarAll('JUSTIFICADO','";
        // line 912
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-ban\"></i> JUSTIFICADO</a>-->
                                         <a  onclick=\"marcarAll('NO HUBO CLASES','";
        // line 913
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\" fa fa-calendar-times-o\"></i> NO HUBO CLASES</a>
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
                                            <th>NO HUBO CLASES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     ";
        // line 929
        $context["i"] = 1;
        // line 930
        echo "                                       ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asistenciaList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 931
            echo "                                            <tr>
                                                <td>";
            // line 932
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "</td>
                                                <td>";
            // line 933
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "getAsistenciaListEstudiante", array(), "method"), "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "getAsistenciaListEstudiante", array(), "method"), "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo " </td>
                                                ";
            // line 934
            if (($this->getAttribute($context["value"], "getAsistenciaValue", array(), "method") ==  -1)) {
                // line 935
                echo "                                                    <td><button id=\"btnPr_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\"><i class=\"fa fa-check\"></i></button></td>
                                                    <td><button id=\"btnAtr_";
                // line 936
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\"><i class=\"fa fa-clock-o\"></i></button></td>
                                                    <td><button id=\"btnAus_";
                // line 937
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" ><i class=\"fa fa-close\"></i></button></td>
                                                   <!-- <td><button id=\"btnJust_";
                // line 938
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar \" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>-->
                                                    <td><button id=\"btnNoCla_";
                // line 939
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar \" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                   
                                                ";
            } else {
                // line 942
                echo "                                                    ";
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "PRESENTE")) {
                    // line 943
                    echo "                                                        <td><button id=\"btnPr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  style=\"background-color:#ABEB91\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\" ><i class=\"fa fa-check\"></i></button></td>
                                                    ";
                } else {
                    // line 945
                    echo "                                                            <td><button id=\"btnPr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\" ><i class=\"fa fa-check\"></i></button></td>
                                                    ";
                }
                // line 947
                echo "
                                                    ";
                // line 948
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "ATRASADO")) {
                    // line 949
                    echo "                                                        <td><button id=\"btnAtr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#F9ED89\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\"><i class=\"fa fa-clock-o\"></i></button></td>
                                                     ";
                } else {
                    // line 951
                    echo "                                                         <td><button id=\"btnAtr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\" ><i class=\"fa fa-clock-o\"></i></button></td>
                                                   ";
                }
                // line 953
                echo "
                                                    ";
                // line 954
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "AUSENTE")) {
                    // line 955
                    echo "                                                        <td><button id=\"btnAus_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#EA7178\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" {><i class=\"fa fa-close\"></i></button></td>
                                                      ";
                } else {
                    // line 957
                    echo "                                                        <td><button id=\"btnAus_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" ><i class=\"fa fa-close\"></i></button></td>
                                                    ";
                }
                // line 959
                echo "<!--
                                                    ";
                // line 961
                echo "                                                    <!--    <td><button id=\"btnJust_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" style=\"background-color:#92E5DC\" class=\"btnMarcar\" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>
                                                   ";
                // line 963
                echo "                                                        <!--<td><button id=\"btnJust_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>
                                                    ";
                // line 964
                echo "-->

                                                    ";
                // line 966
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "NO HUBO CLASES")) {
                    // line 967
                    echo "                                                        <td><button id=\"btnNoCla_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#000000\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                   ";
                } else {
                    // line 969
                    echo "                                                        <td><button id=\"btnNoCla_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" class=\"btnMarcar\"";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                    ";
                }
                // line 971
                echo "
                                                    
                                                ";
            }
            // line 974
            echo "                                            </tr>
                                             ";
            // line 975
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 976
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
        // line 991
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "allPromedio", array()), 2, ".", ","), "html", null, true);
        echo " &nbsp;%</div>
                                            <div class=\"grid-overview__description\">
                                                <span class=\"-bold\">Promedio de asistencia</span>
                                            </div>
                                        </div>
                                        <div class=\"grid-overview__overview-data-section js-above-average-students\">
                                            <span class=\"grid-overview__students-affected\">";
        // line 997
        echo twig_escape_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "countMedio", array()), "html", null, true);
        echo "</span>
                                            <div class=\"grid-overview__description\">
                                                <span>Estudiantes con asistencia promedio o superior al promedio</span>
                                                <span class=\"-bold js-percentage\">40&nbsp;% de la clase</span>
                                            </div>
                                        </div>
                                        <div class=\"grid-overview__overview-data-section js-below-average-students\">
                                            <span class=\"grid-overview__students-affected\">";
        // line 1004
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
        // line 1024
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listadoPrevio"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 1025
            echo "                                                <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["valor"], "getAsistenciaFecha", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</th>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1027
        echo "                                        </tr>
                                    </thead>
                                    <tbody>
                                       ";
        // line 1030
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudiantes_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 1031
            echo "                                        <tr>
                                            <td class=\"grid__cell -header -semi-bold\">";
            // line 1032
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["valor"], "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["valor"], "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo "
                                                ";
            // line 1033
            $context["cobertura"] = ($this->getAttribute($context["valor"], "getListEstudianteCobertura", array(), "method") / ($context["sizeClases"] ?? null));
            // line 1034
            echo "                                                <div id=\"cobert_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "getListEstudiantesId", array(), "method"), "html", null, true);
            echo "\" class=\"attendance-grade-pill attendance-grade-pill--class-average -good\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cobertura"] ?? null), 2, ".", ","), "html", null, true);
            echo "  &nbsp;%</div>
                                            </td>
                                            ";
            // line 1036
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["listadoGeneral"] ?? null), $this->getAttribute($context["valor"], "getListEstudiantesId", array(), "method"), array(), "array"), 0, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 1037
                echo "                                                 ";
                if (($this->getAttribute($context["value"], "getAsistenciaValue", array(), "method") ==  -1)) {
                    // line 1038
                    echo "                                                    <td>
                                                        <div class=\"dropdown\">
                                                            <button id=\"btn_";
                    // line 1040
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
                    // line 1044
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                    // line 1045
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                    // line 1046
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                    // line 1047
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                    // line 1048
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\" fa fa-calendar-times-o\"></i> NO HUBO CLASES</a>
                             
                                                            </div>
                                                        </div>
                                                      
                                                    </td>
                                                ";
                } else {
                    // line 1055
                    echo "                                                    ";
                    if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "PRESENTE")) {
                        // line 1056
                        echo "                                                        <td>
                                                            <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1058
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\"  ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#ABEB91;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-check\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1060
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1061
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1062
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1063
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1064
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> NO HUBO CLASES</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1069
$context["value"], "getAsistenciaTipo", array(), "method") == "ATRASADO")) {
                        // line 1070
                        echo "                                                        <td>
                                                            <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1072
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#F9ED89;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-clock-o\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1074
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1075
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1076
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1077
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1078
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> NO HUBO CLASES</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1083
$context["value"], "getAsistenciaTipo", array(), "method") == "AUSENTE")) {
                        // line 1084
                        echo "                                                        <td>
                                                             <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1086
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#EA7178;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-close\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1088
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1089
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1090
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1091
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                   <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1092
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> NO HUBO CLASES</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                     ";
                    } elseif (($this->getAttribute(                    // line 1097
$context["value"], "getAsistenciaTipo", array(), "method") == "NO HUBO CLASES")) {
                        // line 1098
                        echo "                                                        <td>
                                                             <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1100
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#000000;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\" fa fa-calendar-times-o\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1102
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1103
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1104
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                   <!-- <a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1105
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1106
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> NO HUBO CLASES</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } else {
                        // line 1112
                        echo "                                                            <td>
                                                                <div class=\"dropdown\">
                                                                <button id=\"btn_";
                        // line 1114
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#92E5DC;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-ban\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1116
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1117
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1118
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1119
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1120
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> NO HUBO CLASES</a>
                                
                                                                </div>
                                                            </div>
                                                            </td>
                                                    ";
                    }
                    // line 1125
                    echo "   
                                                ";
                }
                // line 1126
                echo "    
                                            
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1129
            echo "                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1131
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
                                   <!-- <option value=\"-1\">TODOS</option>-->
                                    ";
        // line 1149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudiantes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 1150
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
        // line 1152
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
        return array (  1755 => 1152,  1742 => 1150,  1738 => 1149,  1718 => 1131,  1711 => 1129,  1703 => 1126,  1699 => 1125,  1688 => 1120,  1682 => 1119,  1676 => 1118,  1670 => 1117,  1664 => 1116,  1655 => 1114,  1651 => 1112,  1640 => 1106,  1634 => 1105,  1628 => 1104,  1622 => 1103,  1616 => 1102,  1607 => 1100,  1603 => 1098,  1601 => 1097,  1591 => 1092,  1585 => 1091,  1579 => 1090,  1573 => 1089,  1567 => 1088,  1558 => 1086,  1554 => 1084,  1552 => 1083,  1542 => 1078,  1536 => 1077,  1530 => 1076,  1524 => 1075,  1518 => 1074,  1509 => 1072,  1505 => 1070,  1503 => 1069,  1493 => 1064,  1487 => 1063,  1481 => 1062,  1475 => 1061,  1469 => 1060,  1460 => 1058,  1456 => 1056,  1453 => 1055,  1441 => 1048,  1435 => 1047,  1429 => 1046,  1423 => 1045,  1417 => 1044,  1406 => 1040,  1402 => 1038,  1399 => 1037,  1395 => 1036,  1387 => 1034,  1385 => 1033,  1379 => 1032,  1376 => 1031,  1372 => 1030,  1367 => 1027,  1358 => 1025,  1354 => 1024,  1331 => 1004,  1321 => 997,  1312 => 991,  1290 => 976,  1288 => 975,  1285 => 974,  1280 => 971,  1270 => 969,  1260 => 967,  1258 => 966,  1254 => 964,  1245 => 963,  1236 => 961,  1233 => 959,  1223 => 957,  1213 => 955,  1211 => 954,  1208 => 953,  1198 => 951,  1188 => 949,  1186 => 948,  1183 => 947,  1173 => 945,  1163 => 943,  1160 => 942,  1150 => 939,  1142 => 938,  1134 => 937,  1126 => 936,  1117 => 935,  1115 => 934,  1109 => 933,  1105 => 932,  1102 => 931,  1097 => 930,  1095 => 929,  1074 => 913,  1068 => 912,  1062 => 911,  1056 => 910,  1050 => 909,  1043 => 907,  1030 => 896,  1025 => 894,  1021 => 893,  1015 => 890,  1010 => 887,  1001 => 886,  997 => 885,  983 => 873,  977 => 870,  975 => 869,  943 => 842,  936 => 837,  933 => 836,  921 => 828,  915 => 825,  848 => 761,  828 => 744,  785 => 704,  765 => 687,  671 => 596,  656 => 584,  628 => 559,  601 => 535,  549 => 486,  533 => 473,  473 => 416,  430 => 376,  397 => 346,  362 => 314,  358 => 313,  353 => 312,  350 => 311,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
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
