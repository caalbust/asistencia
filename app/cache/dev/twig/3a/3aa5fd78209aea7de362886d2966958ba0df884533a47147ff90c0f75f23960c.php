<?php

/* TodoBundle:Default:listAsistencia.html.twig */
class __TwigTemplate_4e041214ee0de7b06f2be21003625e4124ed6875f29e267c7a3f44cbc9561977 extends Twig_Template
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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" />
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
.ui-datepicker{width:17em;padding:.2em .2em 0;background:#fff url(/images/jqueryui/datepicker.gif?1316124395) left top repeat-x;-moz-box-shadow:0 5px 10px rgba(0,0,0,0.8);-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.8);box-shadow:0 5px 10px rgba(0,0,0,0.8);line-height:1em}
.ui-datepicker .ui-datepicker-header{position:relative;padding:2px 0 6px 0;background:transparent;-moz-border-radius:0;-webkit-border-radius:0;border-radius:0;border:0 none}
.ui-datepicker .ui-datepicker-prev,.ui-datepicker .ui-datepicker-next{position:absolute;top:6px;height:16px;border:0 none;cursor:pointer}
.ui-datepicker .ui-datepicker-prev{left:2px}
.ui-datepicker .ui-datepicker-next{right:2px}
.ui-datepicker .ui-datepicker-header .ui-state-hover{background:transparent;border:0 none}
/*.ui-datepicker .ui-datepicker-prev span{background-position:0 -32px!important}
.ui-datepicker .ui-datepicker-next span{background-position:-16px -32px!important}
.ui-datepicker .ui-datepicker-prev-hover span{background-position:0 -48px!important}
.ui-datepicker .ui-datepicker-next-hover span{background-position:-16px -48px!important}*/
.ui-datepicker .ui-datepicker-prev span,.ui-datepicker .ui-datepicker-next span{display:block;}
.ui-datepicker .ui-datepicker-title{margin:0 2.3em;line-height:1.8em;text-align:center;font-size:12px;color:#000;text-shadow:0 1px 0 rgba(255,255,255,0.8)}
.ui-datepicker .ui-datepicker-title select{font-size:1em;margin:1px 0}
.ui-datepicker select.ui-datepicker-month-year{width:100%}
.ui-datepicker select.ui-datepicker-month,.ui-datepicker select.ui-datepicker-year{width:49%}
.ui-datepicker table{width:100%;font-size:10px;border-collapse:collapse;margin:0 0 .4em}
.ui-datepicker th{padding:.7em .3em;text-align:center;font-weight:bold;border:0}
.ui-datepicker td{border:0;padding:1px}
.ui-datepicker td span,.ui-datepicker td a{display:block;padding:3px 3px 3px;text-align:right;text-decoration:none}
.ui-datepicker .ui-datepicker-buttonpane{background-image:none;margin:.7em 0 0 0;padding:0 .2em;border-left:0;border-right:0;border-bottom:0}
.ui-datepicker .ui-datepicker-buttonpane button{float:right;margin:.5em .2em .4em;cursor:pointer;padding:.2em .6em .3em .6em;width:auto;overflow:visible}
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current{float:left}
.ui-datepicker .ui-datepicker-calendar a{background:transparent;border:0 none;text-align:center}
.ui-datepicker .ui-datepicker-calendar .ui-state-active{border:1px solid;padding:3px 2px 1px}
.ui-datepicker .ui-datepicker-calendar a.ui-state-hover{color:#1c4257}
.ui-datepicker .ui-datepicker-current-day .ui-state-default{background:url(/images/jqueryui/button_bg.png?1316124395) 0 -33px repeat-x;color:#1c4257;text-shadow:0 1px 0 rgba(255,255,255,0.8);font-weight:bold;border:1px solid #7399ae}
.ui-datepicker.ui-datepicker-multi{width:auto}
.ui-datepicker-multi .ui-datepicker-group{float:left}
.ui-datepicker-multi .ui-datepicker-group table{width:95%;margin:0 auto .4em}
.ui-datepicker-multi-2 .ui-datepicker-group{width:50%}
.ui-datepicker-multi-3 .ui-datepicker-group{width:33.3%}
.ui-datepicker-multi-4 .ui-datepicker-group{width:25%}
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header{border-left-width:0}
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header{border-left-width:0}
.ui-datepicker-multi .ui-datepicker-buttonpane{clear:left}
.ui-datepicker-row-break{clear:both;width:100%}
.ui-datepicker-rtl{direction:rtl}
.ui-datepicker-rtl .ui-datepicker-prev{right:2px;left:auto}
.ui-datepicker-rtl .ui-datepicker-next{left:2px;right:auto}
.ui-datepicker-rtl .ui-datepicker-prev:hover{right:1px;left:auto}
.ui-datepicker-rtl .ui-datepicker-next:hover{left:1px;right:auto}
.ui-datepicker-rtl .ui-datepicker-buttonpane{clear:right}
.ui-datepicker-rtl .ui-datepicker-buttonpane button{float:left}
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current{float:right}
.ui-datepicker-rtl .ui-datepicker-group{float:right}
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header{border-right-width:0;border-left-width:1px}
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header{border-right-width:0;border-left-width:1px}
.ui-datepicker-cover{display:none;display:block;position:absolute;z-index:-1;filter:mask();top:-4px;left:-4px;width:200px;height:200px}
.datepicker-time{padding:0 0 4px;text-align:center}
.datepicker-time input{border:1px solid #aaa;padding:1px 2px}
.datepicker-time select{border:1px solid #aaa}
.datepicker-time button.button{font-weight:normal}
#ui-datepicker-div{z-index:9999}

.ui-icon,.ui-icon{margin:-1px 8px 0 0!important}

</style>
";
    }

    // line 368
    public function block_extraScripts($context, array $blocks = array())
    {
        // line 369
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/todo/js/jquery-ui-1.9.2.custom.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/js/jquery.jeditable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/js/jquery.jeditable.datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/todo/jsAsistencia.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js\" defer></script>

\t<script>
    \tvar diasLibres = [];
       
        ";
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listadoPrevio"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clase"]) {
            // line 381
            echo "            ";
            if (($this->getAttribute($context["clase"], "getAsistenciaValue", array()) == "-1")) {
                // line 382
                echo "                diasLibres.push('";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["clase"], "getAsistenciaFecha", array()), "Y-m-d"), "html", null, true);
                echo "')
\t\t\t";
            }
            // line 384
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        echo "
\t\t";
        // line 386
        if ((isset($context["semestre"]) || array_key_exists("semestre", $context))) {
            // line 387
            echo "\t\t\tvar inicioSemestre = new Date(\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["semestre"] ?? null), "getSemestreFechaInicio", array(), "method"), "Y-m-d"), "html", null, true);
            echo "\");
\t\t\tvar finSemestre = new Date(\"";
            // line 388
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["semestre"] ?? null), "getSemestreFechaFin", array(), "method"), "Y-m-d"), "html", null, true);
            echo "\");
\t\t";
        }
        // line 390
        echo "\t\t\$(document).ready(function() {
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
            \$(\"#fecha_recuperar_before\").datepicker({
                dateFormat: 'yy-mm-dd',
                beforeShowDay: habilitarDiasDisponibles,
                maxDate: finSemestre,
                minDate: inicioSemestre

                //beforeShowDay: habilitarDias
            });
\t\t\t
\t\t} );

        function habilitarDiasDisponibles(date){
            var sdate = \$.datepicker.formatDate( 'yy-mm-dd', date)
            if(\$.inArray(sdate, diasLibres) != -1) {
\t\t\t\t//console.log(sdate);
                return [true];
            }
            if(date.getDay() == 0){
                return [false];
            }
            return [false];            
        }

         function sendComentarioRECUPERAR(){
            var comentario = \$('#comentarioText_recuperar').val();
            var tipo = \$('#tipo_recuperar').val();
            var btnId = \$('#btnId_recuperar').val();
            var fechaNow = \$('#fecha_recuperar').val();
            var fechaBefore = \$('#fecha_recuperar_before').val()+' 00:00:00';
            console.log(fechaNow);
            console.log(fechaBefore);
              \$.ajax({
                    url:'";
        // line 441
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        'action':'RECUPERAR_CLASE',
                        'tipo':tipo,
                        'id':btnId,
                        'fechaNow':fechaNow,
                        'fechaBefore':fechaBefore,
                        'comentario':comentario
                    },
                    async: true,
                    success: function (data)
                    {
                        console.log(data);
                       location.reload();
                    }
              });

            
         }
         
        function sendComentario(){
            var action = \$('#actionComentario').val();
            console.log(comentario);
            if(action=='MARCARAsistenciaJUSTIFICADO'){
                 var comentario = \$('#comentarioText').val();
            var tipo = \$('#tipo').val();
            var btnId = \$('#btnId').val();
            var action = \$('#actionComentario').val();
    \$.ajax({
                    url:'";
        // line 472
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
                 var comentario = \$('#comentarioText').val();
            var tipo = \$('#tipo').val();
            var btnId = \$('#btnId').val();
            var action = \$('#actionComentario').val();
                 var fecha = \$('#fecha').val();
                 \$.ajax({
                    url:'";
        // line 506
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
                 var comentario = \$('#comentarioText').val();
            var tipo = \$('#tipo').val();
            var btnId = \$('#btnId').val();
           
                \$.ajax({
                url:'";
        // line 550
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
        // line 610
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
        // line 623
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
        // line 672
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
        // line 696
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
        // line 721
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
        // line 733
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
        // line 824
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
        // line 841
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
          
            }else if(tipo=='RECUPERAR'){
                \$(\"#tipo_recuperar\").val(tipo);
                \$(\"#btnId_recuperar\").val(id_curso);
                \$(\"#comentarioText_recuperar\").val('');
                \$(\"#fecha_recuperar\").val(fecha);
                \$(\"#modal-recuperar\").modal(\"show\");
            }else{
                \$.ajax({
                    url:'";
        // line 887
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
        // line 904
        echo twig_escape_filter($this->env, ($context["sizeClases"] ?? null), "html", null, true);
        echo ";
                        console.log(lengthClases);
                        var cobertura= data['total']/lengthClases;
                        console.log(cobertura);
                        cobertura = cobertura.toFixed(2)
                        \$(\"#cobert_\"+data['estudiantexCurso']['listEstudiantesId']).html(cobertura);
                       /*
                        switch(tipo){
                            case 'PRESENTE':
                                    for (i=0; i< data['asistenciaList'].length ;i++){
                                        console.log(data['asistenciaList'][i]['asistenciaId']);
                                        \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#ABEB91\");
                                        \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                
                                    }
                            break;
                            case 'AUSENTE':
                                    for (i=0; i< data['asistenciaList'].length ;i++){
                                        console.log(data['asistenciaList'][i]['asistenciaId']);
                                        \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#EA7178\");
                                        \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    
                                    }
                                    
                            break;
                            case 'JUSTIFICADO':
                                    for (i=0; i< data['asistenciaList'].length ;i++){
                                        console.log(data['asistenciaList'][i]['asistenciaId']);
                                        \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#92E5DC\");
                                        \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    
                                    }
                            break;
                            case 'ATRASADO':
                                    for (i=0; i< data['asistenciaList'].length ;i++){
                                        console.log(data['asistenciaList'][i]['asistenciaId']);
                                        \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#F9ED89\");
                                        \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    
                                    }
                            break;
                            case 'NO HUBO CLASES':
                                    for (i=0; i< data['asistenciaList'].length ;i++){
                                        console.log(data['asistenciaList'][i]['asistenciaId']);
                                        \$(\"#btnNoCla_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#000000\");
                                        \$(\"#btnAtr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnJust_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnAus_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                        \$(\"#btnPr_\"+data['asistenciaList'][i]['asistenciaId']).css(\"background-color\", \"#e0e0e0\");
                                    }
                            break;
                        }*/
                        var table = \$(\"#tabla_reunion\").DataTable();
                        table.clear();
                        for (i=0; i< data['asistenciaList'].length ;i++){
                            var indice= i+1;
                            var btnPre='<button id=\"btnPr_'+data['asistenciaList'][i]['asistenciaId']+'\"  class=\"btnMarcar\"  onclick=\"marcarAsistencia(\"PRESENTE\", this.id)\" ><i class=\"fa fa-check\"></i></button>';
                            var btnAtr='<button id=\"btnAtr_'+data['asistenciaList'][i]['asistenciaId']+'\"  class=\"btnMarcar\"   onclick=\"marcarAsistencia(\"ATRASADO\", this.id)\" ><i class=\"fa fa-clock-o\"></i></button>';
                            var btnAus='<button id=\"btnAus_'+data['asistenciaList'][i]['asistenciaId']+'\" class=\"btnMarcar\"  onclick=\"marcarAsistencia(\"AUSENTE\", this.id)\" ><i class=\"fa fa-close\"></i></button>';
                            var btnJust='<button id=\"btnJust_'+data['asistenciaList'][i]['asistenciaId']+'\" class=\"btnMarcar\" onclick=\"marcarAsistencia(\"JUSTIFICADO\", this.id)\" ><i class=\"fa fa-ban\"></i></button>';
                            var btnNoCla='<button id=\"btnNoCla_'+data['asistenciaList'][i]['asistenciaId']+'\" class=\"btnMarcar\" onclick=\"marcarAsistencia(\"NO HUBO CLASES\", this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button>';
                            switch(tipo){
                                case 'PRESENTE':
                                    btnPre='<button id=\"btnPr_'+data['asistenciaList'][i]['asistenciaId']+'\"  style=\"background-color:#ABEB91\" class=\"btnMarcar\"  onclick=\"marcarAsistencia(\"PRESENTE\", this.id)\" ><i class=\"fa fa-check\"></i></button>';
                                break;
                                case 'AUSENTE':
                                   btnAus='<button id=\"btnAus_'+data['asistenciaList'][i]['asistenciaId']+'\" style=\"background-color:#EA7178\" class=\"btnMarcar\"  onclick=\"marcarAsistencia(\"AUSENTE\", this.id)\" ><i class=\"fa fa-close\"></i></button>';
                                  
                                break;
                                case 'JUSTIFICADO':
                                    btnJust='<button id=\"btnJust_'+data['asistenciaList'][i]['asistenciaId']+'\" style=\"background-color:#92E5DC\" class=\"btnMarcar\"  onclick=\"marcarAsistencia(\"JUSTIFICADO\", this.id)\" ><i class=\"fa fa-ban\"></i></button>';
                                 
                                break;
                                case 'ATRASADO':
                                     btnAtr='<button id=\"btnAtr_'+data['asistenciaList'][i]['asistenciaId']+'\" style=\"background-color:#F9ED89\" class=\"btnMarcar\"   onclick=\"marcarAsistencia(\"ATRASADO\", this.id)\"><i class=\"fa fa-clock-o\"></i></button>';
                               
                                break;
                                case 'NO HUBO CLASES':
                                     btnNoCla='<button id=\"btnNoCla_'+data['asistenciaList'][i]['asistenciaId']+'\" style=\"background-color:#000000\" class=\"btnMarcar\"  onclick=\"marcarAsistencia(\"NO HUBO CLASES\", this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button>';
                               
                                break;
                            }
                            var estudiante = data['asistenciaList'][i]['asistenciaListEstudiante']['listEstudiantesUsuario']['estApellido']+' '+data['asistenciaList'][i]['asistenciaListEstudiante']['listEstudiantesUsuario']['estName'];
                        table.row.add([indice,estudiante,btnPre,btnAtr,btnAus,btnNoCla]).node().id='asist_'+i;
                        
                        
                      }
                      table.draw();
                        \$(\"#icon-action\").removeClass('fa-circle-o-notch fa-spin').addClass('fa-search');
                        
                        
                    }
                });
            }
            
        }
        function imprimirReporte(){
            var idCurso = ";
        // line 1013
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "getCursoId", array(), "method"), "html", null, true);
        echo ";
            var IdEstudiante= \$(\"#list_estudiantes\").val();
            console.log(IdEstudiante);
            var the_link = \"";
        // line 1016
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

    // line 1024
    public function block_contenido($context, array $blocks = array())
    {
        // line 1025
        echo "\t\t<div class=\"oculto\">
            <div class=\"panel panel-default widget-box\">
                <div class=\"panel-body widget-content\">
                    <div class=\"row\" style=\"    margin: 10px;\">\t
                        <div class=\"col-sm-4\">
                            <span class=\"panel-header-large__sub-title\">";
        // line 1030
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
        // line 1060
        if ((($context["boolAnterior"] ?? null) == 0)) {
            // line 1061
            echo "                                            <button class=\"button settings-button clear js-open-settings\" title=\"Ajustes\" onclick=\"configAction()\" data-analytics-id=\"course.attendance.settings.link\" aria-label=\"Ajustes\" href=\"#\">
                                                <span class=\"glyphicon glyphicon-cog\"></span>
                                            </button>
                                        ";
        }
        // line 1064
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
        // line 1076
        if (($context["btnBackBlock"] ?? null)) {
            echo " 
                                <a type=\"button\" ";
            // line 1077
            if (($context["btnBackBlock"] ?? null)) {
                echo " disable ";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => ($context["id_curso"] ?? null), "fecha" => twig_date_format_filter($this->env, ($context["fechaBack"] ?? null), "Y-m-d 00:00:00"), "boolAnterior" => ($context["boolAnterior"] ?? null))), "html", null, true);
            echo "\" class=\"btn btn-secondary\"><span class=\"glyphicon glyphicon-arrow-left\" style=\"margin-top: 3px;font-size: 46px;\"></span></a>
                            ";
        }
        // line 1078
        echo "   
                            </div>
                            <div class=\"col-sm-4\" style=\"text-align: center;font-size: 24px;margin-top: 20px;\">
                                <div>";
        // line 1081
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d"), "html", null, true);
        echo "</div>
                            </div>
                            <!--div class=\"col-sm-4\" style=\"text-align: right;\">
                                ";
        // line 1084
        if (($context["btnNextBlock"] ?? null)) {
            echo "  
                                    <a type=\"button\"  href=\"";
            // line 1085
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => ($context["id_curso"] ?? null), "fecha" => twig_date_format_filter($this->env, ($context["fechaNext"] ?? null), "Y-m-d 00:00:00"), "boolAnterior" => ($context["boolAnterior"] ?? null))), "html", null, true);
            echo "\" class=\"btn btn-secondary\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"margin-top: 3px;font-size: 46px;\"></span></a>
                                ";
        }
        // line 1087
        echo "                            </div-->
                               ";
        // line 1088
        if ((($context["recuperar"] ?? null) == 1)) {
            // line 1089
            echo "                               <input type=\"hidden\" id=\"fechaBeforeClass\" />
                                        <button  style=\"margin: 20px;\" class=\"btn-success\" onclick=\"marcarAll('RECUPERAR','";
            // line 1090
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
            echo ")\" ><i class=\"fa fa-history\"></i> RECUPERACIÓN DE CLASES</button>
                                    ";
        }
        // line 1091
        echo "    
                        </div>
                    </div>
                </div>
                <div class=\"panel panel-default widget-box\">
                    <div class=\"panel-body widget-content\">
                        <div class=\"row\">
                        
                            <div class=\"col-sm-12\" style=\"margin-top: 36px;\">
                                <div class=\"dropdown\"  >
                                    <button onclick=\"allMarcar()\" ";
        // line 1101
        if ((($context["boolAnterior"] ?? null) == 1)) {
            echo " disabled ";
        }
        echo "  style =\"margin-left:20px;\" class=\"dropbtn\"><i id=\"icon-action\" class=\"fa fa-users\"></i>Tomar a Todos la Asistencia</button>
                                    <div id=\"myDropdown\" class=\"dropdown-content\">
                                        <a  onclick=\"marcarAll('PRESENTE','";
        // line 1103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-check\"></i> PRESENTE</a>
                                        <a  onclick=\"marcarAll('ATRASADO','";
        // line 1104
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-clock-o\"></i> ATRASADO</a>
                                        <a  onclick=\"marcarAll('AUSENTE','";
        // line 1105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a>
                                        <!--<a  onclick=\"marcarAll('JUSTIFICADO','";
        // line 1106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-ban\"></i> JUSTIFICADO</a>-->
                                         <a  onclick=\"marcarAll('NO HUBO CLASES','";
        // line 1107
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
        // line 1126
        $context["i"] = 1;
        // line 1127
        echo "                                       ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asistenciaList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 1128
            echo "                                            <tr>
                                                <td>";
            // line 1129
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "</td>
                                                <td>";
            // line 1130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "getAsistenciaListEstudiante", array(), "method"), "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "getAsistenciaListEstudiante", array(), "method"), "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo " </td>
                                                ";
            // line 1131
            if (($this->getAttribute($context["value"], "getAsistenciaValue", array(), "method") ==  -1)) {
                // line 1132
                echo "                                                    <td><button id=\"btnPr_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\"><i class=\"fa fa-check\"></i></button></td>
                                                    <td><button id=\"btnAtr_";
                // line 1133
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\"><i class=\"fa fa-clock-o\"></i></button></td>
                                                    <td><button id=\"btnAus_";
                // line 1134
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" ><i class=\"fa fa-close\"></i></button></td>
                                                   <!-- <td><button id=\"btnJust_";
                // line 1135
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar \" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>-->
                                                    <td><button id=\"btnNoCla_";
                // line 1136
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar \" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                   
                                                ";
            } else {
                // line 1139
                echo "                                                    ";
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "PRESENTE")) {
                    // line 1140
                    echo "                                                        <td><button id=\"btnPr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  style=\"background-color:#ABEB91\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\" ><i class=\"fa fa-check\"></i></button></td>
                                                    ";
                } else {
                    // line 1142
                    echo "                                                            <td><button id=\"btnPr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\" ><i class=\"fa fa-check\"></i></button></td>
                                                    ";
                }
                // line 1144
                echo "
                                                    ";
                // line 1145
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "ATRASADO")) {
                    // line 1146
                    echo "                                                        <td><button id=\"btnAtr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#F9ED89\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\"><i class=\"fa fa-clock-o\"></i></button></td>
                                                     ";
                } else {
                    // line 1148
                    echo "                                                         <td><button id=\"btnAtr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\" ><i class=\"fa fa-clock-o\"></i></button></td>
                                                   ";
                }
                // line 1150
                echo "
                                                    ";
                // line 1151
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "AUSENTE")) {
                    // line 1152
                    echo "                                                        <td><button id=\"btnAus_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#EA7178\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" {><i class=\"fa fa-close\"></i></button></td>
                                                      ";
                } else {
                    // line 1154
                    echo "                                                        <td><button id=\"btnAus_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" ><i class=\"fa fa-close\"></i></button></td>
                                                    ";
                }
                // line 1156
                echo "<!--
                                                    ";
                // line 1158
                echo "                                                    <!--    <td><button id=\"btnJust_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" style=\"background-color:#92E5DC\" class=\"btnMarcar\" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>
                                                   ";
                // line 1160
                echo "                                                        <!--<td><button id=\"btnJust_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>
                                                    ";
                // line 1161
                echo "-->

                                                    ";
                // line 1163
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "NO HUBO CLASES")) {
                    // line 1164
                    echo "                                                        <td><button id=\"btnNoCla_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#000000\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                   ";
                } else {
                    // line 1166
                    echo "                                                        <td><button id=\"btnNoCla_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" class=\"btnMarcar\"";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                    ";
                }
                // line 1168
                echo "
                                                    
                                                ";
            }
            // line 1171
            echo "                                            </tr>
                                             ";
            // line 1172
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 1173
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
        // line 1188
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "allPromedio", array()), 2, ".", ","), "html", null, true);
        echo " &nbsp;%</div>
                                            <div class=\"grid-overview__description\">
                                                <span class=\"-bold\">Promedio de asistencia</span>
                                            </div>
                                        </div>
                                        <div class=\"grid-overview__overview-data-section js-above-average-students\">
                                            <span class=\"grid-overview__students-affected\">";
        // line 1194
        echo twig_escape_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "countMedio", array()), "html", null, true);
        echo "</span>
                                            <div class=\"grid-overview__description\">
                                                <span>Estudiantes con asistencia promedio o superior al promedio</span>
                                                <span class=\"-bold js-percentage\">40&nbsp;% de la clase</span>
                                            </div>
                                        </div>
                                        <div class=\"grid-overview__overview-data-section js-below-average-students\">
                                            <span class=\"grid-overview__students-affected\">";
        // line 1201
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
        // line 1221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listadoPrevio"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 1222
            echo "                                                <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["valor"], "getAsistenciaFecha", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</th>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1224
        echo "                                        </tr>
                                    </thead>
                                    <tbody>
                                       ";
        // line 1227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudiantes_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 1228
            echo "                                        <tr>
                                            <td class=\"grid__cell -header -semi-bold\">";
            // line 1229
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["valor"], "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["valor"], "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo "</br>
                                                ";
            // line 1230
            $context["cobertura"] = ($this->getAttribute($context["valor"], "getListEstudianteCobertura", array(), "method") / ($context["sizeClases"] ?? null));
            // line 1231
            echo "                                                <div id=\"cobert_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "getListEstudiantesId", array(), "method"), "html", null, true);
            echo "\" class=\"attendance-grade-pill attendance-grade-pill--class-average -good\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cobertura"] ?? null), 2, ".", ","), "html", null, true);
            echo "  &nbsp;%</div>
                                            </td>
                                            ";
            // line 1233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["listadoGeneral"] ?? null), $this->getAttribute($context["valor"], "getListEstudiantesId", array(), "method"), array(), "array"), 0, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 1234
                echo "                                                 ";
                if (($this->getAttribute($context["value"], "getAsistenciaValue", array(), "method") ==  -1)) {
                    // line 1235
                    echo "                                                    <td>
                                                        <div class=\"dropdown\">
                                                            <button id=\"btn_";
                    // line 1237
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
                    // line 1241
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                    // line 1242
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                    // line 1243
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                    // line 1244
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                    // line 1245
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                             
                                                            </div>
                                                        </div>
                                                      
                                                    </td>
                                                ";
                } else {
                    // line 1252
                    echo "                                                    ";
                    if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "PRESENTE")) {
                        // line 1253
                        echo "                                                        <td>
                                                           
                                                            <div class=\"dropdown\" title=\"";
                        // line 1255
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1256
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\"  ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#ABEB91;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-check\"></i></button>
                                                                
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1259
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1260
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1261
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1262
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1263
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1268
$context["value"], "getAsistenciaTipo", array(), "method") == "ATRASADO")) {
                        // line 1269
                        echo "                                                        <td>
                                                            <div class=\"dropdown\" title=\"";
                        // line 1270
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1271
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#F9ED89;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-clock-o\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1273
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1274
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1275
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1276
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1277
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1282
$context["value"], "getAsistenciaTipo", array(), "method") == "AUSENTE")) {
                        // line 1283
                        echo "                                                        <td>
                                                             <div class=\"dropdown\" title=\"";
                        // line 1284
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1285
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#EA7178;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-close\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1287
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1288
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1289
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1290
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                   <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1291
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                     ";
                    } elseif (($this->getAttribute(                    // line 1296
$context["value"], "getAsistenciaTipo", array(), "method") == "NO HUBO CLASES")) {
                        // line 1297
                        echo "                                                        <td>
                                                             <div class=\"dropdown\" title=\"";
                        // line 1298
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1299
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  ";
                        if ((twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00") == ($context["fechaRecuperar"] ?? null))) {
                            echo " style=\"background-color: #e5bc92 \" ";
                        } else {
                            echo "  style=\"background-color:#000000 \" ";
                        }
                        echo " style=\"width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\" fa fa-calendar-times-o\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1301
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\">";
                        echo twig_escape_filter($this->env, ($context["fechaRecuperar"] ?? null), "html", null, true);
                        echo "</i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1302
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1303
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                   <!-- <a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1304
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1305
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } else {
                        // line 1311
                        echo "                                                            <td>
                                                                <div class=\"dropdown\" title=\"";
                        // line 1312
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1313
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#92E5DC;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-ban\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1315
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1316
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1317
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1318
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1319
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                            </td>
                                                    ";
                    }
                    // line 1324
                    echo "   
                                                ";
                }
                // line 1325
                echo "    
                                            
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1328
            echo "                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1330
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
        // line 1348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudiantes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 1349
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
        // line 1351
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

<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"modal-recuperar\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Indique la fecha en la que debió dictar su clase?</h5>
        
      </div>
      <div class=\"modal-body\">
        <!--Material textarea-->
        <div class=\"md-form\">
        <input type=\"hidden\" id=\"tipo_recuperar\"/>
        <input type=\"hidden\" id=\"btnId_recuperar\"/>
         <input type=\"hidden\" id=\"fecha_recuperar\"/>
        <label>Fecha:</label> 
       <input style=\" cursor:pointer; height:45px\" type=\"text\" id=\"fecha_recuperar_before\" name=\"fecha_recuperar_before\" value=\"";
        // line 1456
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-rec-ext\" required />
\t\t\t\t\t\t\t\t
          <input type=\"hidden\" id=\"actionComentario\" value=\"RECUPERAR_CLASES\"/><br>
          <label>Comentario: </label>
        <textarea id=\"comentarioText_recuperar\" name=\"comentarioText_recuperar\" class=\"md-textarea form-control\" rows=\"3\"></textarea>
       
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"sendComentarioRECUPERAR();\">Guardar</button>
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
        return array (  2133 => 1456,  2026 => 1351,  2013 => 1349,  2009 => 1348,  1989 => 1330,  1982 => 1328,  1974 => 1325,  1970 => 1324,  1959 => 1319,  1953 => 1318,  1947 => 1317,  1941 => 1316,  1935 => 1315,  1926 => 1313,  1922 => 1312,  1919 => 1311,  1908 => 1305,  1902 => 1304,  1896 => 1303,  1890 => 1302,  1882 => 1301,  1867 => 1299,  1863 => 1298,  1860 => 1297,  1858 => 1296,  1848 => 1291,  1842 => 1290,  1836 => 1289,  1830 => 1288,  1824 => 1287,  1815 => 1285,  1811 => 1284,  1808 => 1283,  1806 => 1282,  1796 => 1277,  1790 => 1276,  1784 => 1275,  1778 => 1274,  1772 => 1273,  1763 => 1271,  1759 => 1270,  1756 => 1269,  1754 => 1268,  1744 => 1263,  1738 => 1262,  1732 => 1261,  1726 => 1260,  1720 => 1259,  1710 => 1256,  1706 => 1255,  1702 => 1253,  1699 => 1252,  1687 => 1245,  1681 => 1244,  1675 => 1243,  1669 => 1242,  1663 => 1241,  1652 => 1237,  1648 => 1235,  1645 => 1234,  1641 => 1233,  1633 => 1231,  1631 => 1230,  1625 => 1229,  1622 => 1228,  1618 => 1227,  1613 => 1224,  1604 => 1222,  1600 => 1221,  1577 => 1201,  1567 => 1194,  1558 => 1188,  1536 => 1173,  1534 => 1172,  1531 => 1171,  1526 => 1168,  1516 => 1166,  1506 => 1164,  1504 => 1163,  1500 => 1161,  1491 => 1160,  1482 => 1158,  1479 => 1156,  1469 => 1154,  1459 => 1152,  1457 => 1151,  1454 => 1150,  1444 => 1148,  1434 => 1146,  1432 => 1145,  1429 => 1144,  1419 => 1142,  1409 => 1140,  1406 => 1139,  1396 => 1136,  1388 => 1135,  1380 => 1134,  1372 => 1133,  1363 => 1132,  1361 => 1131,  1355 => 1130,  1351 => 1129,  1348 => 1128,  1343 => 1127,  1341 => 1126,  1317 => 1107,  1311 => 1106,  1305 => 1105,  1299 => 1104,  1293 => 1103,  1286 => 1101,  1274 => 1091,  1267 => 1090,  1264 => 1089,  1262 => 1088,  1259 => 1087,  1254 => 1085,  1250 => 1084,  1244 => 1081,  1239 => 1078,  1230 => 1077,  1226 => 1076,  1212 => 1064,  1206 => 1061,  1204 => 1060,  1169 => 1030,  1162 => 1025,  1159 => 1024,  1147 => 1016,  1141 => 1013,  1029 => 904,  1009 => 887,  960 => 841,  940 => 824,  846 => 733,  831 => 721,  803 => 696,  776 => 672,  724 => 623,  708 => 610,  645 => 550,  598 => 506,  561 => 472,  527 => 441,  474 => 390,  469 => 388,  464 => 387,  462 => 386,  459 => 385,  453 => 384,  447 => 382,  444 => 381,  440 => 380,  431 => 374,  427 => 373,  423 => 372,  419 => 371,  415 => 370,  410 => 369,  407 => 368,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TodoBundle:Default:listAsistencia.html.twig", "C:\\wamp64\\www\\asistenciaFIECCAS\\src\\ControlacFIEC\\TodoBundle/Resources/views/Default/listAsistencia.html.twig");
    }
}
