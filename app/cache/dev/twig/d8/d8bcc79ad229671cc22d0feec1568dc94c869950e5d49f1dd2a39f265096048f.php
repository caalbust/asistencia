<?php

/* TodoBundle:Default:inicio.html.twig */
class __TwigTemplate_e79c727ef0eac332d36a6000bc36b165d5cfa393f7f2c321d2fd8377fde58962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UtilBundle:Default:baseInicio.html.twig", "TodoBundle:Default:inicio.html.twig", 1);
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
        echo "<style>
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

</style>
";
    }

    // line 62
    public function block_extraScripts($context, array $blocks = array())
    {
        // line 63
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/todo/jsAsistencia.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#tabla_cursos').DataTable({
\t\t\t\t\"language\": {
\t\t\t\t\t\"url\": \"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json\"
\t\t\t\t}
\t\t\t});
\t\t} );
\t</script>
";
    }

    // line 76
    public function block_contenido($context, array $blocks = array())
    {
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["validaOk"] ?? null));
        echo "
\t<div id=\"tabla_resultados\">
\t\t<div class=\"oculto\" id=\"sec_tablas\">\t
\t\t\t<div class=\"panel panel-default widget-box\">
\t\t\t\t\t<div class=\"panel-body widget-content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"margin-top: 36px;\">
\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["validaOk"] ?? null));
        echo "
\t\t\t\t\t\t\t\t<table id=\"tabla_cursos\" class=\"table table-striped table-bordered\" style=\"    width: 96%;
    margin-left: 20px\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>PAR</th>
\t\t\t\t\t\t\t\t\t\t\t<th>CÓDIGO</th>
\t\t\t\t\t\t\t\t\t\t\t<th>MATERIA</th>
\t\t\t\t\t\t\t\t\t\t\t<th width=\"287px\">REVISAR PARA TOMA DE ASISTENCIA</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getCursoParalelo", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "getCursoMateria", array(), "method"), "getMateriasCodigo", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "getCursoMateria", array(), "method"), "getMateriasName", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 104
            if (($this->getAttribute($this->getAttribute(($context["validaOk"] ?? null), $this->getAttribute($context["value"], "getCursoCodigo", array(), "method"), array(), "array"), 0, array(), "array") == 0)) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" width: 312px; font-size: 9px;color: #8a6d3b;background-color: #fcf8e3; border-color: #faebcc; padding: 5px; margin-bottom: 4px; border: 1px solid #ead8b7; border-radius: 4px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Nota!</strong> El día de hoy no tiene clase desea crear una nueva ? <a  href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "crear", "id_curso" => $this->getAttribute($context["value"], "getCursoId", array(), "method"), "fecha" => 0, "boolAnterior" => 0)), "html", null, true);
                echo "\"  style=\"    font-size: 9px;\">Crear Clase</a>.
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => $this->getAttribute($context["value"], "getCursoId", array(), "method"), "fecha" => 0, "boolAnterior" => 0)), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute(($context["validaOk"] ?? null), $this->getAttribute($context["value"], "getCursoCodigo", array(), "method"), array(), "array"), 0, array(), "array") == 0)) {
                echo " disabled ";
            }
            echo " type=\"button\" title=\"Revisar Listado\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-check\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "TodoBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 113,  189 => 109,  183 => 106,  180 => 105,  178 => 104,  172 => 101,  168 => 100,  164 => 99,  161 => 98,  157 => 97,  141 => 84,  131 => 77,  128 => 76,  113 => 65,  109 => 64,  104 => 63,  101 => 62,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TodoBundle:Default:inicio.html.twig", "C:\\wamp64\\www\\asistencia\\src\\ControlacFIEC\\TodoBundle/Resources/views/Default/inicio.html.twig");
    }
}
