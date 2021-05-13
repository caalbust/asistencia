<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_3140f374d09998262fa8fed4b47521bf6ab39de797f5ab064b1fb9de34cd951b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["dumps_count"] = $this->getAttribute(($context["collector"] ?? null), "dumpsCount", array());
        // line 5
        echo "
    ";
        // line 6
        if (($context["dumps_count"] ?? null)) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M21 14h-1c-0.3-4.8-4.1-8.7-9-9V4h-1v1c-4.8 0.3-8.7 4.1-9 9H0v1h1c0.3 4.8 4.1 8.7 9 9v1h1v-1 c4.8-0.3 8.7-4.1 9-9h1V14z M11 22v-4h-1v4c-3.7-0.2-6.7-3.2-7-7h4v-1H3c0.2-3.7 3.2-6.7 7-7v4h1V7c3.7 0.2 6.7 3.2 7 7h-4v1h4 C17.7 18.7 14.7 21.7 11 22z\"/></svg>
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 9
            echo twig_escape_filter($this->env, ($context["dumps_count"] ?? null), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>dump()</b>
            </div>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 17
                echo "                <div class=\"sf-toolbar-info-piece\">
                    in
                    ";
                // line 19
                if ($this->getAttribute($context["dump"], "file", array())) {
                    // line 20
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 21
                    echo "                        ";
                    if (($context["link"] ?? null)) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 26
                    echo "                    ";
                } else {
                    // line 27
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 29
                echo "                    line ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo ":
                    ";
                // line 30
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            <img src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" onload=\"var h = this.parentNode.innerHTML, rx=/<script>(.*?)<\\/script>/g, s; while (s = rx.exec(h)) {eval(s[1]);};\" />
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Debug/Profiler/dump.html.twig", 36)->display(array_merge($context, array("link" => true)));
            // line 37
            echo "    ";
        }
    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        // line 41
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 43
        echo "";
        // line 44
        echo "<svg width=\"28\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 28 28\" enable-background=\"new 0 0 28 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M28 13h-1.1C26.5 6.6 21.4 1.5 15 1.1V0h-2v1.1C6.6 1.5 1.5 6.6 1.1 13H0v2h1.1C1.5 21.4 6.6 26.5 13 26.9 V28h2v-1.1c6.4-0.5 11.5-5.6 11.9-11.9H28V13z M15 24.9V19h-2v5.9c-5.3-0.5-9.5-4.7-9.9-9.9H9v-2H3.1C3.5 7.7 7.7 3.5 13 3.1V9h2 V3.1c5.3 0.5 9.5 4.7 9.9 9.9H19v2h5.9C24.5 20.3 20.3 24.5 15 24.9z\"/></svg>";
        // line 45
        echo "";
        // line 46
        echo "</span>
        <strong>dump()</strong>
        <span class=\"count\">
            <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "dumpsCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        // line 55
        echo "    <h2>dump()</h2>

    <style>
        li.sf-dump {
            list-style-type: disc;
        }
        .sf-dump ol>li {
            padding: 0;
        }
        .sf-dump a {
            cursor: pointer;
        }
        .sf-dump-compact {
            display: none;
        }
    </style>

    ";
        // line 72
        if ($this->getAttribute(($context["collector"] ?? null), "dumpsCount", array())) {
            // line 73
            echo "        <ul class=\"alt\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 75
                echo "            <li class=\"sf-dump sf-reset\">
                in
                ";
                // line 77
                if ($this->getAttribute($context["dump"], "line", array())) {
                    // line 78
                    echo "                    ";
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 79
                    echo "                    ";
                    if (($context["link"] ?? null)) {
                        // line 80
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                    ";
                    } else {
                        // line 82
                        echo "                        <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                    ";
                    }
                    // line 84
                    echo "                ";
                } else {
                    // line 85
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                ";
                }
                // line 87
                echo "                line ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo ":
                <a onclick=\"var s = this.nextElementSibling; if ('sf-dump-compact' == s.className) {this.innerHTML = '&#9660;'; s.className = 'sf-dump-expanded';} else {this.innerHTML = '&#9654;'; s.className = 'sf-dump-compact';}\">&#9654;</a>
                <span class=\"sf-dump-compact\">
                ";
                // line 90
                if ($this->getAttribute($context["dump"], "fileExcerpt", array())) {
                    echo $this->getAttribute($context["dump"], "fileExcerpt", array());
                } else {
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                }
                // line 91
                echo "                </span>

                ";
                // line 93
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "        </ul>
    ";
        } else {
            // line 98
            echo "        <p>
            <em>No dumped variable</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 98,  254 => 96,  245 => 93,  241 => 91,  235 => 90,  228 => 87,  222 => 85,  219 => 84,  211 => 82,  201 => 80,  198 => 79,  195 => 78,  193 => 77,  189 => 75,  185 => 74,  182 => 73,  180 => 72,  161 => 55,  158 => 54,  150 => 49,  145 => 46,  143 => 45,  141 => 44,  139 => 43,  136 => 41,  133 => 40,  128 => 37,  126 => 36,  123 => 35,  119 => 33,  110 => 30,  105 => 29,  99 => 27,  96 => 26,  88 => 24,  78 => 22,  75 => 21,  72 => 20,  70 => 19,  66 => 17,  62 => 16,  57 => 13,  55 => 12,  52 => 11,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Debug/Profiler/dump.html.twig", "C:\\wamp64\\www\\asistencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle\\Resources\\views\\Profiler\\dump.html.twig");
    }
}
