<?php

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_ca75effffe61a7e0517e21a886e6d073a662443346bae4b863c157be851e853e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
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
        // line 3
        $context["__internal_4e46aebef7d222218a3c0b93264f53607987090b48739211f97b6d110d6c96a7"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "data", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"20\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 20 28\" enable-background=\"new 0 0 20 28\" xml:space=\"preserve\"><g><polygon fill=\"#3F3F3F\" points=\"16,5 13,5 13,3 7,3 7,5 4,5 4,9 16,9\"/><path fill=\"#3F3F3F\" d=\"M17 6v4H3V6H0v19h20V6H17z M8 22H3v-1h5V22z M17 20H3v-1h14V20z M17 18H3v-1h14V18z M17 16H3v-1h14V16z M17 14H4v-1h13V14z\"/></g></svg>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "nb_errors", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array())), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/form.html.twig", 12)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? null))));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><svg width=\"20\" height=\"27\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 20 27\" enable-background=\"new 0 0 20 27\" xml:space=\"preserve\"><g><polygon fill=\"#3F3F3F\" points=\"16,2 13,2 13,0 7,0 7,2 4,2 4,6 16,6\"/><path fill=\"#3F3F3F\" d=\"M17 3v4H3V3H0v24h20V3H17z M3 13h10v1H3V13z M8 24H3v-1h5V24z M17 22H3v-1h14V22z M17 20H3v-1h14V20z M17 18H3v-1h14V18z M17 16H4v-1h13V16z M17 12H3v-1h14V12z M17 10H4V9h13V10z\"/></g></svg></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array())), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .toggle-icon {
        display: inline-block;
        background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
    }
    .closed .toggle-icon, .closed.toggle-icon {
        background-position: bottom left;
    }
    .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree .tree-inner {
        width: 100%;
        padding: 5px 7px 5px 22px;
        border-radius: 6px;
        color: #313131;
        cursor: pointer;
        position: relative;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .tree a {
        text-decoration: none;
    }
    .tree .toggle-button {
        /* provide a bigger clickable area than just 10x10px */
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -8px;
        margin-left: -18px;
    }
    .tree .toggle-icon {
        width: 10px;
        height: 10px;
        /* position the icon in the center of the clickable area */
        margin-left: 3px;
        margin-top: 3px;
        background-size: 10px 20px;
        background-color: #ccc;
    }
    .tree .toggle-icon.empty {
        width: 10px;
        height: 10px;
        position: absolute;
        top: 50%;
        margin-top: -5px;
        margin-left: -15px;
        background-size: 10px 10px;
    }
    .tree ul ul .tree-inner {
        padding-left: 37px;
    }
    .tree ul ul ul .tree-inner {
        padding-left: 52px;
    }
    .tree ul ul ul ul .tree-inner {
        padding-left: 67px;
    }
    .tree ul ul ul ul ul .tree-inner {
        padding-left: 82px;
    }
    .tree .tree-inner:hover {
        background: #dfdfdf;
    }
    .tree .tree-inner.active, .tree .tree-inner.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
        background-color: #aaa;
    }
    .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .tree-details h3 {
        position: relative;
    }
    .tree-details .toggle-icon {
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -9px;
        margin-left: 6px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    .badge-error {
        float: right;
        background: #a33;
        color: #fff;
        padding: 1px 4px;
        font-size: 10px;
        font-weight: bold;
        vertical-align: middle;
        border-radius: 6px;
    }
    .errors h3 {
        color: #800;
    }
    .errors th, .errors td {
        border-color: #800;
    }
    .errors th {
        background: #a33;
        color: #fff;
    }
    .errors .toggle-icon {
        background-color: #a33;
    }
    h3 a, h3 a:hover, h3 a:focus {
        color: inherit;
        text-decoration: inherit;
    }
    </style>

    ";
        // line 181
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()))) {
            // line 182
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 188
                echo "                    ";
                echo $context["__internal_4e46aebef7d222218a3c0b93264f53607987090b48739211f97b6d110d6c96a7"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                </ul>
            </div>

            ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 194
                echo "                ";
                echo $context["__internal_4e46aebef7d222218a3c0b93264f53607987090b48739211f97b6d110d6c96a7"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "data", array()), "forms_by_hash", array()));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        </div>
    ";
        } else {
            // line 198
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 200
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 420
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 421
            echo "    ";
            $context["tree"] = $this;
            // line 422
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 423
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 424
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", array()))) {
                // line 425
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 427
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 429
            echo "            ";
            echo twig_escape_filter($this->env, (((isset($context["name"]) || array_key_exists("name", $context))) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if (($this->getAttribute(($context["data"] ?? null), "type_class", array(), "any", true, true) && $this->getAttribute(($context["data"] ?? null), "type", array(), "any", true, true))) {
                echo "[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", array()), "html", null, true);
                echo "</abbr>]";
            }
            // line 430
            echo "            ";
            if (($this->getAttribute(($context["data"] ?? null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())) > 0))) {
                // line 431
                echo "            <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 433
            echo "        </div>

        ";
            // line 435
            if ( !twig_test_empty($this->getAttribute(($context["data"] ?? null), "children", array()))) {
                // line 436
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-children\"";
                if ( !($context["expanded"] ?? null)) {
                    echo " class=\"hidden\"";
                }
                echo ">
                ";
                // line 437
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 438
                    echo "                    ";
                    echo $context["tree"]->getform_tree_entry($context["childName"], $context["childData"], false);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 440
                echo "            </ul>
        ";
            }
            // line 442
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 445
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 446
            echo "    ";
            $context["tree"] = $this;
            // line 447
            echo "    <div class=\"tree-details\" ";
            if ($this->getAttribute(($context["data"] ?? null), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 449
            echo twig_escape_filter($this->env, (((isset($context["name"]) || array_key_exists("name", $context))) ? (_twig_default_filter(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 450
            if (($this->getAttribute(($context["data"] ?? null), "type_class", array(), "any", true, true) && $this->getAttribute(($context["data"] ?? null), "type", array(), "any", true, true))) {
                // line 451
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", array()), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 453
            echo "        </h2>

        ";
            // line 455
            if (($this->getAttribute(($context["data"] ?? null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "errors", array())) > 0))) {
                // line 456
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 458
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors
                    <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 464
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-errors\">
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                ";
                // line 470
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 471
                    echo "                <tr>
                    <td>";
                    // line 472
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 474
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", array()))) {
                        // line 475
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ( !$this->getAttribute(                    // line 476
($context["forms_by_hash"] ?? null), $this->getAttribute($context["error"], "origin", array()), array(), "array", true, true)) {
                        // line 477
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 479
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["forms_by_hash"] ?? null), $this->getAttribute($context["error"], "origin", array()), array(), "array"), "name", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 481
                    echo "                    </td>
                    <td>
                        ";
                    // line 483
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["error"], "trace", array()));
                    $context['_iterated'] = false;
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 484
                        echo "                            ";
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            // line 485
                            echo "                                <br/>Caused by:<br/><br/>
                            ";
                        }
                        // line 487
                        echo "                            ";
                        if ($this->getAttribute($context["trace"], "root", array(), "any", true, true)) {
                            // line 488
                            echo "                                <strong>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong><br/>
                                <pre>";
                            // line 490
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "root", array()), "html", null, true);
                            // line 491
                            if ( !twig_test_empty($this->getAttribute($context["trace"], "path", array()))) {
                                // line 492
                                if ((twig_first($this->env, $this->getAttribute($context["trace"], "path", array())) != "[")) {
                                    echo ".";
                                }
                                // line 493
                                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
                            }
                            // line 494
                            echo " = ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "value", array()), "html", null, true);
                            // line 495
                            echo "</pre>
                            ";
                        } elseif ($this->getAttribute(                        // line 496
$context["trace"], "message", array(), "any", true, true)) {
                            // line 497
                            echo "                                <strong>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong><br/>
                                <pre>";
                            // line 498
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "message", array()), "html", null, true);
                            echo "</pre>
                            ";
                        } else {
                            // line 500
                            echo "                                <pre>";
                            echo twig_escape_filter($this->env, $context["trace"], "html", null, true);
                            echo "</pre>
                            ";
                        }
                        // line 502
                        echo "                        ";
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 503
                        echo "                            <em>Unknown.</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 505
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 508
                echo "            </table>
        </div>
        ";
            }
            // line 511
            echo "
        ";
            // line 512
            if ($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", true, true)) {
                // line 513
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 514
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 520
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-default_data\">
            <table>
                <tr>
                    <th width=\"180\">Model Format</th>
                    <td>
                        ";
                // line 525
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 526
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "model", array()), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 528
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 530
                echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                // line 534
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "norm", array()), "html", null, true);
                echo "</pre></td>
                </tr>
                <tr>
                    <th>View Format</th>
                    <td>
                        ";
                // line 539
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 540
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "default_data", array()), "view", array()), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 542
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 544
                echo "                    </td>
                </tr>
            </table>
        </div>
        ";
            }
            // line 549
            echo "
        ";
            // line 550
            if ($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", true, true)) {
                // line 551
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 552
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 558
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 559
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 560
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 564
                    if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 565
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "view", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 567
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 569
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 573
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "norm", array()), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 578
                    if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 579
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "submitted_data", array()), "model", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 581
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 583
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 587
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 589
                echo "        </div>
        ";
            }
            // line 591
            echo "
        ";
            // line 592
            if ($this->getAttribute(($context["data"] ?? null), "passed_options", array(), "any", true, true)) {
                // line 593
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 594
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 600
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-passed_options\">
            ";
                // line 601
                if (twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "passed_options", array()))) {
                    // line 602
                    echo "            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Passed Value</th>
                    <th>Resolved Value</th>
                </tr>
                ";
                    // line 608
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "passed_options", array()));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 609
                        echo "                <tr>
                    <th>";
                        // line 610
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td><pre>";
                        // line 611
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</pre></td>
                    <td>
                        ";
                        // line 613
                        if (($this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array()), $context["option"], array(), "array") === $context["value"])) {
                            // line 614
                            echo "                            <em>same as passed value</em>
                        ";
                        } else {
                            // line 616
                            echo "                            <pre>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "resolved_options", array()), $context["option"], array(), "array"), "html", null, true);
                            echo "</pre>
                        ";
                        }
                        // line 618
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 621
                    echo "            </table>
            ";
                } else {
                    // line 623
                    echo "            <p><em>No options where passed when constructing this form.</em></p>
            ";
                }
                // line 625
                echo "        </div>
        ";
            }
            // line 627
            echo "
        ";
            // line 628
            if ($this->getAttribute(($context["data"] ?? null), "resolved_options", array(), "any", true, true)) {
                // line 629
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 630
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 636
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Value</th>
                </tr>
                ";
                // line 642
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "resolved_options", array()));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 643
                    echo "                <tr>
                    <th>";
                    // line 644
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 645
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 648
                echo "            </table>
        </div>
        ";
            }
            // line 651
            echo "
        ";
            // line 652
            if ($this->getAttribute(($context["data"] ?? null), "view_vars", array(), "any", true, true)) {
                // line 653
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 654
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 660
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Variable</th>
                    <th>Value</th>
                </tr>
                ";
                // line 666
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "view_vars", array()));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 667
                    echo "                <tr>
                    <th>";
                    // line 668
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 669
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 672
                echo "            </table>
        </div>
        ";
            }
            // line 675
            echo "    </div>

    ";
            // line 677
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 678
                echo "        ";
                echo $context["tree"]->getform_tree_details($context["childName"], $context["childData"], ($context["forms_by_hash"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1167 => 678,  1163 => 677,  1159 => 675,  1154 => 672,  1145 => 669,  1141 => 668,  1138 => 667,  1134 => 666,  1125 => 660,  1116 => 654,  1113 => 653,  1111 => 652,  1108 => 651,  1103 => 648,  1094 => 645,  1090 => 644,  1087 => 643,  1083 => 642,  1074 => 636,  1065 => 630,  1062 => 629,  1060 => 628,  1057 => 627,  1053 => 625,  1049 => 623,  1045 => 621,  1037 => 618,  1031 => 616,  1027 => 614,  1025 => 613,  1020 => 611,  1016 => 610,  1013 => 609,  1009 => 608,  1001 => 602,  999 => 601,  995 => 600,  986 => 594,  983 => 593,  981 => 592,  978 => 591,  974 => 589,  970 => 587,  964 => 583,  960 => 581,  954 => 579,  952 => 578,  944 => 573,  938 => 569,  934 => 567,  928 => 565,  926 => 564,  920 => 560,  918 => 559,  914 => 558,  905 => 552,  902 => 551,  900 => 550,  897 => 549,  890 => 544,  886 => 542,  880 => 540,  878 => 539,  870 => 534,  864 => 530,  860 => 528,  854 => 526,  852 => 525,  844 => 520,  835 => 514,  832 => 513,  830 => 512,  827 => 511,  822 => 508,  814 => 505,  807 => 503,  794 => 502,  788 => 500,  783 => 498,  778 => 497,  776 => 496,  773 => 495,  770 => 494,  767 => 493,  763 => 492,  761 => 491,  759 => 490,  754 => 488,  751 => 487,  747 => 485,  744 => 484,  726 => 483,  722 => 481,  716 => 479,  712 => 477,  710 => 476,  707 => 475,  705 => 474,  700 => 472,  697 => 471,  693 => 470,  684 => 464,  675 => 458,  671 => 456,  669 => 455,  665 => 453,  657 => 451,  655 => 450,  651 => 449,  641 => 447,  638 => 446,  624 => 445,  608 => 442,  604 => 440,  595 => 438,  591 => 437,  582 => 436,  580 => 435,  576 => 433,  570 => 431,  567 => 430,  556 => 429,  552 => 427,  546 => 425,  544 => 424,  540 => 423,  537 => 422,  534 => 421,  520 => 420,  298 => 200,  294 => 198,  290 => 196,  281 => 194,  277 => 193,  272 => 190,  263 => 188,  259 => 187,  252 => 182,  250 => 181,  94 => 27,  91 => 26,  86 => 23,  80 => 21,  78 => 20,  73 => 17,  70 => 16,  65 => 13,  63 => 12,  60 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/form.html.twig", "C:\\wamp64\\www\\asistencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\form.html.twig");
    }
}
