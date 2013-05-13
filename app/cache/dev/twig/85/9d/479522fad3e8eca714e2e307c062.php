<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_859d479522fad3e8eca714e2e307c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
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
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Exception</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
            // line 16
            echo "    ";
        }
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html", null, true);
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 23
        if ($this->getAttribute($this->getContext($context, "collector"), "counterrors")) {
            // line 24
            echo "        <span class=\"count\">
            <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "counterrors"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 28
        echo "</span>
";
    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        // line 32
        echo "    <h2>Logs</h2>

    ";
        // line 34
        $context["priority"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 35
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\" />
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 45
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
            echo ((($this->getContext($context, "value") == $this->getContext($context, "priority"))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "text"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\" />
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 56
        if ($this->getAttribute($this->getContext($context, "collector"), "logs")) {
            // line 57
            echo "        <ul class=\"alt\">
            ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (($this->getAttribute($this->getContext($context, "log"), "priority") >= $this->getContext($context, "priority"))) {
                    // line 59
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                    if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
                    echo "
                    ";
                    // line 61
                    if (($this->getAttribute($this->getContext($context, "log", true), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "log"), "context"))))) {
                        // line 62
                        echo "                        <br />
                        <small>
                            <strong>Context</strong>: ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "log"), "context")), "html", null, true);
                        echo "
                        </small>
                    ";
                    }
                    // line 67
                    echo "                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "        </ul>
    ";
        } else {
            // line 73
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  264 => 105,  258 => 103,  247 => 97,  231 => 88,  221 => 83,  207 => 95,  202 => 73,  190 => 89,  169 => 56,  347 => 160,  343 => 159,  340 => 158,  333 => 141,  325 => 138,  302 => 137,  281 => 125,  259 => 109,  217 => 83,  182 => 64,  158 => 56,  140 => 42,  188 => 67,  174 => 58,  134 => 54,  260 => 235,  238 => 97,  223 => 79,  218 => 78,  193 => 68,  181 => 87,  208 => 69,  197 => 63,  179 => 55,  161 => 80,  148 => 58,  142 => 42,  124 => 37,  90 => 28,  195 => 61,  187 => 59,  164 => 63,  117 => 41,  166 => 82,  129 => 50,  110 => 39,  87 => 40,  20 => 1,  97 => 23,  350 => 133,  344 => 147,  338 => 126,  326 => 122,  324 => 121,  320 => 135,  315 => 118,  309 => 141,  303 => 112,  297 => 110,  291 => 108,  286 => 106,  280 => 114,  274 => 121,  266 => 97,  257 => 234,  254 => 101,  243 => 89,  237 => 87,  234 => 89,  228 => 87,  219 => 82,  214 => 82,  206 => 78,  200 => 76,  167 => 64,  150 => 75,  137 => 52,  77 => 24,  69 => 20,  23 => 3,  128 => 45,  113 => 40,  107 => 27,  62 => 27,  56 => 13,  53 => 38,  49 => 13,  86 => 28,  40 => 8,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 140,  362 => 153,  359 => 106,  356 => 163,  353 => 104,  348 => 132,  345 => 102,  341 => 82,  335 => 157,  332 => 124,  329 => 78,  323 => 149,  319 => 69,  316 => 145,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 129,  279 => 55,  275 => 111,  272 => 52,  265 => 50,  262 => 236,  256 => 34,  252 => 138,  248 => 32,  244 => 31,  240 => 93,  226 => 86,  209 => 73,  203 => 77,  192 => 72,  175 => 66,  173 => 85,  170 => 60,  156 => 77,  125 => 44,  99 => 29,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 91,  245 => 96,  230 => 83,  222 => 83,  220 => 72,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 16,  38 => 18,  144 => 73,  141 => 41,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 9,  91 => 35,  84 => 25,  94 => 32,  88 => 20,  59 => 21,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 65,  196 => 92,  194 => 75,  191 => 70,  189 => 71,  186 => 125,  180 => 117,  172 => 64,  159 => 96,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 36,  118 => 35,  114 => 37,  104 => 35,  100 => 24,  78 => 26,  75 => 23,  71 => 20,  34 => 8,  105 => 32,  93 => 42,  79 => 23,  76 => 34,  72 => 22,  68 => 19,  58 => 25,  24 => 2,  27 => 3,  21 => 2,  44 => 20,  31 => 6,  26 => 3,  25 => 4,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 46,  152 => 45,  149 => 51,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 29,  101 => 45,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 10,  43 => 8,  41 => 19,  37 => 7,  35 => 5,  32 => 6,  29 => 6,  184 => 88,  178 => 62,  171 => 84,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 40,  133 => 46,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 39,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 29,  85 => 37,  81 => 24,  73 => 33,  64 => 11,  60 => 15,  57 => 20,  54 => 12,  51 => 12,  48 => 11,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
