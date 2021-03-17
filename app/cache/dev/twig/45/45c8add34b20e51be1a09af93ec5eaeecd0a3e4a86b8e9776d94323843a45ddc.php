<?php

/* UtilBundle:Default:baseInicio.html.twig */
class __TwigTemplate_61dd83511587257ab7158cadaba69c12963102ab349e7a7391a1040562708f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'extraStyle' => array($this, 'block_extraStyle'),
            'extraScripts' => array($this, 'block_extraScripts'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Sistema de Asistencias | ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- GLOBAL STYLES -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/images/logo-gris.png"), "html", null, true);
        echo "\" rel=\"shortcut icon\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/css/site.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/css/estilo_espol.css"), "html", null, true);
        echo "\" />
    <!-- La hoja de estilos comentada da problemas con las clases de collapso de la navbar que implementa bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/css/wg_espol.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/todo/cssAsistencia.css"), "html", null, true);
        echo "\" />
    <!--END GLOBAL STYLES -->
    ";
        // line 17
        $this->displayBlock('extraStyle', $context, $blocks);
        // line 18
        echo "\t<style>
        @media screen and (max-width: 300px) {
            #titulo_principal {
                font-size: 20px;
            }
            #titulo_secundario{
                font-size: 12px;
            }
        }

        .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
        .boton{
            width:30px;
            height:30px;
            background-color:#ffffff;
            margin: 5px;
            padding-left:7px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            font-size:15px;
            line-height:32px;
            text-transform: uppercase;
            float: right;
            margin-top: 2px;
        }
        .boton a{
            color: #001c43;
        }
        .boton:hover{
            background-color: #F5b400;

        }
        .boton a:hover{
            color: white;

        }
    </style>
    <!--SCRIPTS-->
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/assets/js/jquery-2.1.4.js.descarga"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/util/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 63
        $this->displayBlock('extraScripts', $context, $blocks);
        // line 64
        echo "\t
</head>
<body>
<!-- HEADER SECTION -->
<div id=\"header\">
    <div class=\"container\">
        <!--TITULO-->
        <div class=\"col-md-12 header_page_start\">
            <section style=\"margin-left: 70px\">
                <h1 style=\"margin-top: 31px\" id=\"titulo_principal\" class=\"h_title_end\">Sistema de Asistencias</h1>
                <!--<h2 id=\"titulo_secundario\" class=\"h_title_start\">Sistema de</h2>-->
            </section>
            <section style=\"margin-left: 70px\">
                <!--<h1 id=\"titulo_principal\" class=\"h_title_end\">Control Académico</h1>-->
                <h2 id=\"titulo_secundario\" style=\"font-size: 25px; margin: 4px 0px 0px 15px\">FIEC -ESPOL</h2>
                <span style=\"float: right;\" class=\"user_login_right\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "name"), "method"), "html", null, true);
        echo "</span><input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "us_id"), "method"), "html", null, true);
        echo "\" id=\"user_id\"/>
            </section>
        </div>
    </div>
    <hr class=\"hr_header\">
    <div id=\"divNavbar\" >
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button id=\"barras\" type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" id=\"menuBrand\"></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\" id=\"menuPrincipal\">
                        ";
        // line 98
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCENTE")) {
            // line 99
            echo "                            <li>
                                <a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_index", array("action" => "index"));
            echo "\" >
                                    MIS CURSOS
                                </a>
                            </li>
                            <li>
                                <a class=\"menu\" href=\"\" >
                                    MIS CURSOS ANTERIORES
                                </a>
                            </li>
                            <li>
                                <a class=\"menu\" href=\"\" >
                                   REPORTES
                                </a>
                            </li>
                        ";
        }
        // line 115
        echo "
                        
                        <li id=\"cerrarSesion\">
                            <a id=\"LinkButton1\" class=\"salir pull-right\" title=\"Salir\" onclick=\"setCookie('modal','no')\"href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" style=\"width: 30px;\"> </a>
                            <div class=\"boton\"><a target=\"_blank\" title=\"Manual\" href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("static_file", array("archivo" => "MPControlac"));
        echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div id=\"loadingDivSt\" style=\"display: none\" >
    <div id=\"loadingMsg\">
        <div style=\"display: inline-block\">
            <div class=\"loader\"></div>
        </div>
        <div id=\"cargandoMsg\" >
            <div >Cargando...</div>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"col-md-10 col-md-offset-1\">
        ";
        // line 139
        $this->displayBlock('contenido', $context, $blocks);
        // line 141
        echo "    </div>
</div>

<br>
<br>
<br>
<br>
<!--FOOTER-->
<footer style=\"bottom: 0;
\t\theight: 60px;
\t\tleft: 0;
\t\tright: 0;
\t\tposition: fixed;
\t\twidth: 100%;
\t\tz-index: 100000;
\t\tpadding-bottom:30px;\">
    <div class=\"container footer-portal\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center footer-left\">
                <p>
                    © Facultad de Ingeniería en Electricidad y Computación • 2021<br>
                    Guayaquil - Ecuador • Sistema de Asistencia de Estudiantes <a class=\"link\" href=\"mailto:asistencia@fiec.espol.edu.ec\">asistencia@fiec.espol.edu.ec</a>

                    <br><br><br>
                </p>
                <div style=\"clear:both\"></div>
            </div>
        </div>
    </div>
</footer>
</body>




<!-- Estilo y script para el menu -->
<style>
    
    @media (max-width: 1030px) {
        .navbar-header {
            float: none;
        }
        .navbar-left,.navbar-right {
            float: none !important;
        }
        .navbar-toggle {
            display: block;
        }
        .navbar-collapse {
            border-top: 1px solid transparent;
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
        }
        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px;
        }
        .navbar-collapse.collapse {
            display: none!important;
        }
        .navbar-nav {
            float: none!important;
            margin-top: 7.5px;
        }
        .navbar-nav>li {
            float: none;
        }
        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .collapse.in{
            display:block !important;
        }
    }
    .navbar-default .navbar-nav>li>a{
        color: white;
    }
    .navbar .nav>li{
        margin-top: 0;
    }
    #cerrarSesion{
        float: initial;
        margin-top: 8px;
        width: 100%;
        height: 0px;
    }
    .navbar{
        z-index: 1;
    }
    #menuPrincipal{
        margin-left: 20px;
        width: 89%;
    }
    .navbar-default {
        background-color: #001c43;
        border-color: #001c43;
    }
    #menuBrand{
        color: white;
    }
    .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
        color: #f5b400;
    }

    /*.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
        background-color: #f5b400;
    }*/

    .navbar-default .navbar-toggle {
        border-color: #ffffff;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #fff;
    }
    .navbar {
        border-radius: 0;
        
       /* margin-right: 10%;*/

    }
    .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
        color: #f7c53b;
        background-color: #001c43;
    }
    .navbar ul.nav li ul {
        opacity: 1;
    }
    .dropdown-menu {
        top: 125%;
        left: 20%;
        margin-top: -1px;
    }
    .dropdown-menu>li>a {
        color: white;
    }
    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu>li>a {
            color: #fff;
        }
        .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
            color: #f5b400;
        }
    }
    .dropdown-menu>li>a:hover {
        color: #f7c53b;
        text-decoration: none;
        background-color: #001c43;
    }
    @media screen and (max-width: 1204px) {
        .navbar {
            border-radius: 0;
            margin-left: 0%;

        }
    }
</style>
<script>
    jQuery(\"#barras\").hover(function () {
        jQuery(\"#barras\").attr('style','background-color: #f5b400;')
    },function () {
        jQuery(\"#barras\").attr('style','background-color: #001c43;')
    });
</script>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 17
    public function block_extraStyle($context, array $blocks = array())
    {
    }

    // line 63
    public function block_extraScripts($context, array $blocks = array())
    {
    }

    // line 139
    public function block_contenido($context, array $blocks = array())
    {
        // line 140
        echo "        ";
    }

    public function getTemplateName()
    {
        return "UtilBundle:Default:baseInicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 140,  402 => 139,  397 => 63,  392 => 17,  387 => 6,  220 => 141,  218 => 139,  195 => 119,  191 => 118,  186 => 115,  168 => 100,  165 => 99,  163 => 98,  139 => 79,  122 => 64,  120 => 63,  116 => 62,  112 => 61,  67 => 18,  65 => 17,  60 => 15,  56 => 14,  52 => 13,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UtilBundle:Default:baseInicio.html.twig", "C:\\wamp64\\www\\asistenciaFIECCAS\\src\\ControlacFIEC\\UtilBundle/Resources/views/Default/baseInicio.html.twig");
    }
}
