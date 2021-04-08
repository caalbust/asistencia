<?php

/* TodoBundle:Default:anteriores.html.twig */
class __TwigTemplate_798a2b2253ed82d3d0797d21f3e7ba461058470e9ced279e268c5fbb6e86ead5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UtilBundle:Default:baseInicio.html.twig", "TodoBundle:Default:anteriores.html.twig", 1);
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
        echo "    CARGA CLASES
";
    }

    // line 5
    public function block_extraStyle($context, array $blocks = array())
    {
        // line 6
        echo "<style>
#tabla_cursos_length{
    display:none;
}
</style>
";
    }

    // line 12
    public function block_extraScripts($context, array $blocks = array())
    {
        // line 13
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
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

    // line 30
    public function block_contenido($context, array $blocks = array())
    {
        // line 31
        echo "\t\t<div class=\"oculto\">
            <div class=\"panel panel-default widget-box\">
                <div class=\"panel-body widget-content\">
                    <div class=\"row\" style=\"    margin: 10px;\">\t
                        <div class=\"col-sm-4\">
                            <h3>";
        // line 36
        echo twig_escape_filter($this->env, ($context["semestre"] ?? null), "html", null, true);
        echo " </h3>
                        </div>
                        <div class=\"col-sm-4\" style=\"text-align: center;font-size: 24px;\">
                        </div>
                        <div class=\"col-sm-4\" style=\"text-align: right;\">
                               
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"contener_reunion\" >
                <div class=\"panel panel-default widget-box\">
                    <div class=\"panel-body widget-content\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\" style=\"margin-top: 36px;\">
                                <table id=\"tabla_cursos\" class=\"table table-striped table-bordered\" style=\"    width: 96%;margin-left: 20px\">
                                    <thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>PAR</th>
\t\t\t\t\t\t\t\t\t\t\t<th>CÓDIGO</th>
\t\t\t\t\t\t\t\t\t\t\t<th>MATERIA</th>
\t\t\t\t\t\t\t\t\t\t\t<th width=\"287px\">REVISAR PARA TOMA DE ASISTENCIA</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curso"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["fechaTemp"] = twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["fechascursos"] ?? null), $this->getAttribute($context["value"], "getCursoCodigo", array(), "method"), array(), "array"), 0, array(), "array"), "Y-m-d");
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "getCursoParalelo", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "getCursoMateria", array(), "method"), "getMateriasCodigo", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["value"], "getCursoMateria", array(), "method"), "getMateriasName", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a  href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_listado_asistencia", array("action" => "index", "id_curso" => $this->getAttribute($context["value"], "getCursoId", array(), "method"), "fecha" => ($context["fechaTemp"] ?? null), "boolAnterior" => 1)), "html", null, true);
            echo "\" type=\"button\" title=\"Revisar Listado\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-check\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t\t\t\t</tbody>
                                </table>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
\t\t</div>

<!--MODAL -->

";
    }

    public function getTemplateName()
    {
        return "TodoBundle:Default:anteriores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 72,  143 => 68,  138 => 66,  134 => 65,  130 => 64,  127 => 63,  124 => 62,  120 => 61,  92 => 36,  85 => 31,  82 => 30,  63 => 15,  59 => 14,  54 => 13,  51 => 12,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TodoBundle:Default:anteriores.html.twig", "C:\\wamp64\\www\\asistencia\\src\\ControlacFIEC\\TodoBundle/Resources/views/Default/anteriores.html.twig");
    }
}
