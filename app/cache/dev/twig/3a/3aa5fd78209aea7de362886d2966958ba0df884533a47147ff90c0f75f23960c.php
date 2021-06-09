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
        echo "      
\t\t\$(document).ready(function() {
            
         
            ";
        // line 394
        if ((($context["recuperar"] ?? null) == 1)) {
            // line 395
            echo "                \$(\"#modal-recuperar\").modal(\"show\");
            ";
        }
        // line 397
        echo "\t\t\t\$('#tabla_reunion').DataTable({
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
        // line 447
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
        // line 478
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
        // line 512
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
        // line 556
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
        // line 616
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
        // line 629
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
        // line 678
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
        // line 702
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
        // line 727
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
        // line 739
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
        // line 830
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
        // line 847
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
                  \$(\"#modal-recuperar\").modal(\"hide\");
                \$(\"#modal-recuperar_1\").modal(\"show\");
            }else if(tipo=='EXTRA'){
                 \$.ajax({
                    url:'";
        // line 894
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_ajax_asistencia");
        echo "',
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        'action':'EXTRA',
                        'tipo':tipo,
                        'fecha':fecha,
                        'id_curso':id_curso,
                    },
                    async: true,
                    success: function (data)
                    {
                        \$(\"#modal-recuperar\").modal(\"hide\");
                        

                    }});
            }else{
                \$.ajax({
                    url:'";
        // line 912
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
        // line 929
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
\t\t\t\t\t\t location.reload();
                        var table = \$(\"#tabla_reunion\").DataTable();
                        table.clear();
                        for (i=0; i< data['asistenciaList'].length ;i++){
                            var indice= i+1;
                            var btnPre='<button id=\"btnPr_'+data['asistenciaList'][i]['asistenciaId']+'\"  class=\"btnMarcar\"  onclick=\"marcarAsistencia(\"PRESENTE\", this.id)\" ><i class=\"fa fa-check\"></i></button>';
                            var btnAtr='<button id=\"btnAtr_'+data['asistenciaList'][i]['asistenciaId']+'\"  class=\"btnMarcar\"   onclick=\"marcarAsistencia(\"ATRASADO\", this.id)\" ><i class=\"fa fa-clock-o\"></i></button>';
                            var btnAus='<button id=\"btnAus_'+data['asistenciaList'][i]['asistenciaId']+'\" class=\"btnMarcar\"  onclick=\"marcarAsistencia(\"AUSENTE\", this.id)\" ><i class=\"fa fa-close\"></i></button>';
                            var btnJust='<button id=\"btnJust_'+data['asistenciaList'][i]['asistenciaId']+'\" class=\"btnMarcar\" onclick=\"marcarAsistencia(\"JUSTIFICADO\", this.id)\" ><i class=\"fa fa-ban\"></i></button>';
                            var btnNoCla='<button id=\"btnNoCla_'+data['asistenciaList'][i]['asistenciaId']+'\" class=\"btnMarcar\" onclick=\"marcarAsistencia(\"NO HUBO CLASES\", this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button>';
                            var function_temp='';
\t\t\t\t\t\t\tswitch(tipo){
                                case 'PRESENTE':
\t\t\t\t\t\t\t\t\tfunction_temp =\"onclick='marcarAsistencia('PRESENTE',this.id)';\";
                                    btnPre='<button id=\"btnPr_'+data['asistenciaList'][i]['asistenciaId']+'\"  style=\"background-color:#ABEB91\" class=\"btnMarcar\"  '+function_temp+' ><i class=\"fa fa-check\"></i></button>';
                                break;
                                case 'AUSENTE':
\t\t\t\t\t\t\t\t\tfunction_temp ='marcarAsistencia(\"AUSENTE\",this.id);';
                                   btnAus='<button id=\"btnAus_'+data['asistenciaList'][i]['asistenciaId']+'\" style=\"background-color:#EA7178\" class=\"btnMarcar\"  onclick=\"'+function_temp+'\" ><i class=\"fa fa-close\"></i></button>';
                                  
                                break;
                                case 'JUSTIFICADO':
\t\t\t\t\t\t\t\t\tfunction_temp ='marcarAsistencia(\"JUSTIFICADO\",this.id);';
                                    btnJust='<button id=\"btnJust_'+data['asistenciaList'][i]['asistenciaId']+'\" style=\"background-color:#92E5DC\" class=\"btnMarcar\"  onclick=\"'+function_temp+'\" ><i class=\"fa fa-ban\"></i></button>';
                                 
                                break;
                                case 'ATRASADO':
\t\t\t\t\t\t\t\t\tfunction_temp ='marcarAsistencia(\"ATRASADO\",this.id);';
                                     btnAtr='<button id=\"btnAtr_'+data['asistenciaList'][i]['asistenciaId']+'\" style=\"background-color:#F9ED89\" class=\"btnMarcar\"   onclick=\"'+function_temp+'\"><i class=\"fa fa-clock-o\"></i></button>';
                               
                                break;
                                case 'NO HUBO CLASES':
\t\t\t\t\t\t\t\t\tfunction_temp ='marcarAsistencia(\"NO HUBO CLASES\",this.id)';
                                    btnNoCla='<button id=\"btnNoCla_'+data['asistenciaList'][i]['asistenciaId']+'\" style=\"background-color:#000000\" class=\"btnMarcar\"  onclick=\"'+function_temp+'\" ><i class=\" fa fa-calendar-times-o\"></i></button>';
                               
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
        // line 1045
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curso"] ?? null), "getCursoId", array(), "method"), "html", null, true);
        echo ";
            var IdEstudiante= \$(\"#list_estudiantes\").val();
            console.log(IdEstudiante);
            var the_link = \"";
        // line 1048
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

    // line 1056
    public function block_contenido($context, array $blocks = array())
    {
        // line 1057
        echo "\t\t<div class=\"oculto\">
            <div class=\"panel panel-default widget-box\">
                <div class=\"panel-body widget-content\">
                    <div class=\"row\" style=\"    margin: 10px;\">\t
                        <div class=\"col-sm-4\">
                            <span class=\"panel-header-large__sub-title\">";
        // line 1062
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
        // line 1092
        if ((($context["boolAnterior"] ?? null) == 0)) {
            // line 1093
            echo "                                            <button class=\"button settings-button clear js-open-settings\" title=\"Ajustes\" onclick=\"configAction()\" data-analytics-id=\"course.attendance.settings.link\" aria-label=\"Ajustes\" href=\"#\">
                                                <span class=\"glyphicon glyphicon-cog\"></span>
                                            </button>
                                        ";
        }
        // line 1096
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
        // line 1108
        if (($context["btnBackBlock"] ?? null)) {
            echo " 
                                <a type=\"button\" ";
            // line 1109
            if (($context["btnBackBlock"] ?? null)) {
                echo " disable ";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => ($context["id_curso"] ?? null), "fecha" => twig_date_format_filter($this->env, ($context["fechaBack"] ?? null), "Y-m-d 00:00:00"), "boolAnterior" => ($context["boolAnterior"] ?? null))), "html", null, true);
            echo "\" class=\"btn btn-secondary\"><span class=\"glyphicon glyphicon-arrow-left\" style=\"margin-top: 3px;font-size: 46px;\"></span></a>
                            ";
        }
        // line 1110
        echo "   
                            </div>
                            <div class=\"col-sm-4\" style=\"text-align: center;font-size: 24px;margin-top: 20px;\">
                                <div>";
        // line 1113
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"col-sm-4\" style=\"text-align: right;\">
                            ";
        // line 1116
        $context["fechaNow"] = twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d");
        // line 1117
        echo "                            ";
        $context["fechaComp"] = twig_date_format_filter($this->env, "now", "Y-m-d");
        // line 1118
        echo "                            ";
        if ((($context["fecha"] ?? null) <= ($context["fechaComp"] ?? null))) {
            // line 1119
            echo "                                ";
            if (($context["btnNextBlock"] ?? null)) {
                echo "  
                                    <a type=\"button\"  href=\"";
                // line 1120
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => ($context["id_curso"] ?? null), "fecha" => twig_date_format_filter($this->env, ($context["fechaNext"] ?? null), "Y-m-d 00:00:00"), "boolAnterior" => ($context["boolAnterior"] ?? null))), "html", null, true);
                echo "\" class=\"btn btn-secondary\"><span class=\"glyphicon glyphicon-arrow-right\" style=\"margin-top: 3px;font-size: 46px;\"></span></a>
                                ";
            }
            // line 1122
            echo "                            ";
        }
        // line 1123
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
        // line 1134
        if ((($context["boolAnterior"] ?? null) == 1)) {
            echo " disabled ";
        }
        echo "  style =\"margin-left:20px;\" class=\"dropbtn\"><i id=\"icon-action\" class=\"fa fa-users\"></i>Tomar a Todos la Asistencia</button>
                                    <div id=\"myDropdown\" class=\"dropdown-content\">
                                        <a  onclick=\"marcarAll('PRESENTE','";
        // line 1136
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-check\"></i> PRESENTE</a>
                                        <a  onclick=\"marcarAll('ATRASADO','";
        // line 1137
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-clock-o\"></i> ATRASADO</a>
                                        <a  onclick=\"marcarAll('AUSENTE','";
        // line 1138
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a>
                                        <!--<a  onclick=\"marcarAll('JUSTIFICADO','";
        // line 1139
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" ><i class=\"fa fa-ban\"></i> JUSTIFICADO</a>-->
                                         <a  onclick=\"marcarAll('NO HUBO CLASES','";
        // line 1140
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
        // line 1159
        $context["i"] = 1;
        // line 1160
        echo "                                       ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asistenciaList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 1161
            echo "                                            <tr>
                                                <td>";
            // line 1162
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "</td>
                                                <td>";
            // line 1163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "getAsistenciaListEstudiante", array(), "method"), "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["value"], "getAsistenciaListEstudiante", array(), "method"), "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo " </td>
                                                ";
            // line 1164
            if (($this->getAttribute($context["value"], "getAsistenciaValue", array(), "method") ==  -1)) {
                // line 1165
                echo "                                                    <td><button id=\"btnPr_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\"><i class=\"fa fa-check\"></i></button></td>
                                                    <td><button id=\"btnAtr_";
                // line 1166
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\"><i class=\"fa fa-clock-o\"></i></button></td>
                                                    <td><button id=\"btnAus_";
                // line 1167
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"  ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" ><i class=\"fa fa-close\"></i></button></td>
                                                   <!-- <td><button id=\"btnJust_";
                // line 1168
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar \" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>-->
                                                    <td><button id=\"btnNoCla_";
                // line 1169
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar \" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                   
                                                ";
            } else {
                // line 1172
                echo "                                                    ";
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "PRESENTE")) {
                    // line 1173
                    echo "                                                        <td><button id=\"btnPr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  style=\"background-color:#ABEB91\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\" ><i class=\"fa fa-check\"></i></button></td>
                                                    ";
                } else {
                    // line 1175
                    echo "                                                            <td><button id=\"btnPr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('PRESENTE', this.id)\" ><i class=\"fa fa-check\"></i></button></td>
                                                    ";
                }
                // line 1177
                echo "
                                                    ";
                // line 1178
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "ATRASADO")) {
                    // line 1179
                    echo "                                                        <td><button id=\"btnAtr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#F9ED89\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\"><i class=\"fa fa-clock-o\"></i></button></td>
                                                     ";
                } else {
                    // line 1181
                    echo "                                                         <td><button id=\"btnAtr_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\"  class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('ATRASADO', this.id)\" ><i class=\"fa fa-clock-o\"></i></button></td>
                                                   ";
                }
                // line 1183
                echo "
                                                    ";
                // line 1184
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "AUSENTE")) {
                    // line 1185
                    echo "                                                        <td><button id=\"btnAus_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#EA7178\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" {><i class=\"fa fa-close\"></i></button></td>
                                                      ";
                } else {
                    // line 1187
                    echo "                                                        <td><button id=\"btnAus_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('AUSENTE', this.id)\" ><i class=\"fa fa-close\"></i></button></td>
                                                    ";
                }
                // line 1189
                echo "<!--
                                                    ";
                // line 1191
                echo "                                                    <!--    <td><button id=\"btnJust_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" style=\"background-color:#92E5DC\" class=\"btnMarcar\" ";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>
                                                   ";
                // line 1193
                echo "                                                        <!--<td><button id=\"btnJust_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                echo "\" class=\"btnMarcar\"";
                if ((($context["boolAnterior"] ?? null) == 1)) {
                    echo " disabled ";
                }
                echo "  onclick=\"marcarAsistencia('JUSTIFICADO', this.id)\" ><i class=\"fa fa-ban\"></i></button></td>
                                                    ";
                // line 1194
                echo "-->

                                                    ";
                // line 1196
                if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "NO HUBO CLASES")) {
                    // line 1197
                    echo "                                                        <td><button id=\"btnNoCla_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" style=\"background-color:#000000\" class=\"btnMarcar\" ";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                   ";
                } else {
                    // line 1199
                    echo "                                                        <td><button id=\"btnNoCla_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo "\" class=\"btnMarcar\"";
                    if ((($context["boolAnterior"] ?? null) == 1)) {
                        echo " disabled ";
                    }
                    echo "  onclick=\"marcarAsistencia('NO HUBO CLASES', this.id)\" ><i class=\" fa fa-calendar-times-o\"></i></button></td>
                                                    ";
                }
                // line 1201
                echo "
                                                    
                                                ";
            }
            // line 1204
            echo "                                            </tr>
                                             ";
            // line 1205
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 1206
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
        // line 1221
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "allPromedio", array()), 2, ".", ","), "html", null, true);
        echo " &nbsp;%</div>
                                            <div class=\"grid-overview__description\">
                                                <span class=\"-bold\">Promedio de asistencia</span>
                                            </div>
                                        </div>
                                        <div class=\"grid-overview__overview-data-section js-above-average-students\">
                                            <span class=\"grid-overview__students-affected\">";
        // line 1227
        echo twig_escape_filter($this->env, $this->getAttribute(($context["promedioGeneral"] ?? null), "countMedio", array()), "html", null, true);
        echo "</span>
                                            <div class=\"grid-overview__description\">
                                                <span>Estudiantes con asistencia promedio o superior al promedio</span>
                                                <span class=\"-bold js-percentage\">40&nbsp;% de la clase</span>
                                            </div>
                                        </div>
                                        <div class=\"grid-overview__overview-data-section js-below-average-students\">
                                            <span class=\"grid-overview__students-affected\">";
        // line 1234
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
        // line 1254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listadoPrevio"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 1255
            echo "                                                <th>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["valor"], "getAsistenciaFecha", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</th>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1257
        echo "                                        </tr>
                                    </thead>
                                    <tbody>
                                       ";
        // line 1260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudiantes_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["valor"]) {
            // line 1261
            echo "                                        <tr>
                                            <td class=\"grid__cell -header -semi-bold\">";
            // line 1262
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["valor"], "getListEstudiantesUsuario", array(), "method"), "getEstApellido", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["valor"], "getListEstudiantesUsuario", array(), "method"), "getEstName", array(), "method"), "html", null, true);
            echo "</br>
                                                ";
            // line 1263
            $context["cobertura"] = ($this->getAttribute($context["valor"], "getListEstudianteCobertura", array(), "method") / ($context["sizeClases"] ?? null));
            // line 1264
            echo "                                                <div id=\"cobert_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["valor"], "getListEstudiantesId", array(), "method"), "html", null, true);
            echo "\" class=\"attendance-grade-pill attendance-grade-pill--class-average -good\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cobertura"] ?? null), 2, ".", ","), "html", null, true);
            echo "  &nbsp;%</div>
                                            </td>
                                            ";
            // line 1266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["listadoGeneral"] ?? null), $this->getAttribute($context["valor"], "getListEstudiantesId", array(), "method"), array(), "array"), 0, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 1267
                echo "                                                 ";
                if (($this->getAttribute($context["value"], "getAsistenciaValue", array(), "method") ==  -1)) {
                    // line 1268
                    echo "                                                    <td>
                                                        <div class=\"dropdown\">
                                                            <button id=\"btn_";
                    // line 1270
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
                    // line 1274
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                    // line 1275
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                    // line 1276
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                    // line 1277
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                    // line 1278
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                    echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                             
                                                            </div>
                                                        </div>
                                                      
                                                    </td>
                                                ";
                } else {
                    // line 1285
                    echo "                                                    ";
                    if (($this->getAttribute($context["value"], "getAsistenciaTipo", array(), "method") == "PRESENTE")) {
                        // line 1286
                        echo "                                                        <td>
                                                           
                                                            <div class=\"dropdown\" title=\"";
                        // line 1288
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1289
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\"  ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#ABEB91;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-check\"></i></button>
                                                                
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1292
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1293
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1294
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1295
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1296
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1301
$context["value"], "getAsistenciaTipo", array(), "method") == "ATRASADO")) {
                        // line 1302
                        echo "                                                        <td>
                                                            <div class=\"dropdown\" title=\"";
                        // line 1303
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1304
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#F9ED89;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-clock-o\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1306
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1307
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1308
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1309
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1310
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1315
$context["value"], "getAsistenciaTipo", array(), "method") == "AUSENTE")) {
                        // line 1316
                        echo "                                                        <td>
                                                             <div class=\"dropdown\" title=\"";
                        // line 1317
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1318
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#EA7178;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-close\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1320
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1321
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1322
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1323
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                   <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1324
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                     ";
                    } elseif (($this->getAttribute(                    // line 1329
$context["value"], "getAsistenciaTipo", array(), "method") == "NO HUBO CLASES")) {
                        // line 1330
                        echo "                                                        <td>
                                                             <div class=\"dropdown\" title=\"";
                        // line 1331
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1332
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
                        // line 1334
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\">";
                        echo twig_escape_filter($this->env, ($context["fechaRecuperar"] ?? null), "html", null, true);
                        echo "</i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1335
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1336
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                   <!-- <a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1337
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1338
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 1343
$context["value"], "getAsistenciaTipo", array(), "method") == "RECUPERADA")) {
                        // line 1344
                        echo "                                                        <td>
                                                            <div class=\"dropdown\" title=\"";
                        // line 1345
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" disabled>
                                                                <button id=\"btn_";
                        // line 1346
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#ECD069;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-history\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1348
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1349
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1350
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <!--<a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1351
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>-->
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1352
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    ";
                    } else {
                        // line 1358
                        echo "                                                            <td>
                                                                <div class=\"dropdown\" title=\"";
                        // line 1359
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaComentario", array()), "html", null, true);
                        echo "\" >
                                                                <button id=\"btn_";
                        // line 1360
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo "\" ";
                        if ((($context["boolAnterior"] ?? null) == 1)) {
                            echo " disabled ";
                        }
                        echo "  style=\"background-color:#92E5DC;width: 54px;\" class=\"btnMarcar dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-ban\"></i></button>
                                                                <div style =\"padding-left: 17px;cursor:pointer\"  class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('PRESENTE','";
                        // line 1362
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-check\"></i> PRESENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('ATRASADO','";
                        // line 1363
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-clock-o\"></i> ATRASADO</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('AUSENTE','";
                        // line 1364
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-close\"></i> AUSENTE</a><br>
                                                                    <a class=\"dropdown-item\" onclick=\"marcarGeneral('JUSTIFICADO','";
                        // line 1365
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\"fa fa-ban\"></i> JUSTIFICADO</a><br>
                                                                       <a class=\"dropdown-item\" onclick=\"marcarGeneral('NO HUBO CLASES','";
                        // line 1366
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaFecha", array(), "method"), "Y-m-d 00:00:00 "), "html", null, true);
                        echo "', ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getAsistenciaId", array(), "method"), "html", null, true);
                        echo ")\"><i class=\" fa fa-calendar-times-o\"></i> SIN ACTIVIDAD</a>
                                
                                                                </div>
                                                            </div>
                                                            </td>
                                                    ";
                    }
                    // line 1371
                    echo "   
                                                ";
                }
                // line 1372
                echo "    
                                            
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1375
            echo "                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1377
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
        // line 1395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudiantes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 1396
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
        // line 1398
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


<div class=\"modal\" tabindex=\"-1\" id=\"modal-recuperar\" data-backdrop=\"static\" 
  data-keyboard=\"false\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-body\">
        <!--Material textarea-->
        <div class=\"md-form\" style=\"    height: 115px;\">
        <input type=\"hidden\" id=\"tipo_recuperar\"/>
        <input type=\"hidden\" id=\"btnId_recuperar\"/>
         <input type=\"hidden\" id=\"fecha_recuperar\"/>

         <div class=\"col-lg-12\" style=\"margin-top: 36px;\">
            <div class=\"col-lg-6\">
               <button type=\"button\" onclick=\"marcarAll('EXTRA','";
        // line 1503
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" class=\"btn btn-lg btn-info\">CLASE EXTRA</button>
            </div>
            <div class=\"col-lg-6\">
                <button type=\"button\" onclick=\"marcarAll('RECUPERAR','";
        // line 1506
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "Y-m-d 00:00:00 "), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, ($context["id_curso"] ?? null), "html", null, true);
        echo ")\" class=\"btn btn-lg btn-info\">CLASE RECUPERADA</button>
            </div>
         </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"modal-recuperar_1\">
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
        // line 1530
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
        return array (  2260 => 1530,  2231 => 1506,  2223 => 1503,  2116 => 1398,  2103 => 1396,  2099 => 1395,  2079 => 1377,  2072 => 1375,  2064 => 1372,  2060 => 1371,  2049 => 1366,  2043 => 1365,  2037 => 1364,  2031 => 1363,  2025 => 1362,  2016 => 1360,  2012 => 1359,  2009 => 1358,  1998 => 1352,  1992 => 1351,  1986 => 1350,  1980 => 1349,  1974 => 1348,  1965 => 1346,  1961 => 1345,  1958 => 1344,  1956 => 1343,  1946 => 1338,  1940 => 1337,  1934 => 1336,  1928 => 1335,  1920 => 1334,  1905 => 1332,  1901 => 1331,  1898 => 1330,  1896 => 1329,  1886 => 1324,  1880 => 1323,  1874 => 1322,  1868 => 1321,  1862 => 1320,  1853 => 1318,  1849 => 1317,  1846 => 1316,  1844 => 1315,  1834 => 1310,  1828 => 1309,  1822 => 1308,  1816 => 1307,  1810 => 1306,  1801 => 1304,  1797 => 1303,  1794 => 1302,  1792 => 1301,  1782 => 1296,  1776 => 1295,  1770 => 1294,  1764 => 1293,  1758 => 1292,  1748 => 1289,  1744 => 1288,  1740 => 1286,  1737 => 1285,  1725 => 1278,  1719 => 1277,  1713 => 1276,  1707 => 1275,  1701 => 1274,  1690 => 1270,  1686 => 1268,  1683 => 1267,  1679 => 1266,  1671 => 1264,  1669 => 1263,  1663 => 1262,  1660 => 1261,  1656 => 1260,  1651 => 1257,  1642 => 1255,  1638 => 1254,  1615 => 1234,  1605 => 1227,  1596 => 1221,  1574 => 1206,  1572 => 1205,  1569 => 1204,  1564 => 1201,  1554 => 1199,  1544 => 1197,  1542 => 1196,  1538 => 1194,  1529 => 1193,  1520 => 1191,  1517 => 1189,  1507 => 1187,  1497 => 1185,  1495 => 1184,  1492 => 1183,  1482 => 1181,  1472 => 1179,  1470 => 1178,  1467 => 1177,  1457 => 1175,  1447 => 1173,  1444 => 1172,  1434 => 1169,  1426 => 1168,  1418 => 1167,  1410 => 1166,  1401 => 1165,  1399 => 1164,  1393 => 1163,  1389 => 1162,  1386 => 1161,  1381 => 1160,  1379 => 1159,  1355 => 1140,  1349 => 1139,  1343 => 1138,  1337 => 1137,  1331 => 1136,  1324 => 1134,  1311 => 1123,  1308 => 1122,  1303 => 1120,  1298 => 1119,  1295 => 1118,  1292 => 1117,  1290 => 1116,  1284 => 1113,  1279 => 1110,  1270 => 1109,  1266 => 1108,  1252 => 1096,  1246 => 1093,  1244 => 1092,  1209 => 1062,  1202 => 1057,  1199 => 1056,  1187 => 1048,  1181 => 1045,  1062 => 929,  1042 => 912,  1021 => 894,  971 => 847,  951 => 830,  857 => 739,  842 => 727,  814 => 702,  787 => 678,  735 => 629,  719 => 616,  656 => 556,  609 => 512,  572 => 478,  538 => 447,  486 => 397,  482 => 395,  480 => 394,  474 => 390,  469 => 388,  464 => 387,  462 => 386,  459 => 385,  453 => 384,  447 => 382,  444 => 381,  440 => 380,  431 => 374,  427 => 373,  423 => 372,  419 => 371,  415 => 370,  410 => 369,  407 => 368,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
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
