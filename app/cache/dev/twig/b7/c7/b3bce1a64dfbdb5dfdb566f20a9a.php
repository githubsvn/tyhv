<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_b7c7b3bce1a64dfbdb5dfdb566f20a9a extends Twig_Template
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
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  362 => 153,  342 => 146,  275 => 111,  323 => 149,  274 => 121,  214 => 82,  206 => 78,  188 => 67,  262 => 236,  271 => 100,  176 => 61,  208 => 69,  252 => 138,  233 => 88,  140 => 42,  193 => 68,  158 => 56,  384 => 138,  377 => 157,  372 => 133,  358 => 130,  329 => 121,  305 => 110,  285 => 102,  247 => 97,  240 => 93,  232 => 83,  224 => 81,  213 => 69,  174 => 58,  166 => 82,  142 => 54,  374 => 144,  366 => 155,  360 => 152,  354 => 150,  348 => 134,  336 => 128,  331 => 122,  319 => 120,  313 => 118,  307 => 116,  294 => 111,  259 => 109,  256 => 100,  228 => 87,  187 => 59,  181 => 87,  387 => 152,  381 => 148,  375 => 147,  369 => 144,  363 => 140,  357 => 151,  351 => 136,  349 => 135,  345 => 134,  328 => 126,  320 => 135,  316 => 145,  311 => 130,  308 => 129,  291 => 113,  288 => 129,  265 => 106,  237 => 90,  221 => 83,  197 => 61,  20 => 1,  333 => 141,  325 => 138,  322 => 124,  314 => 131,  304 => 114,  299 => 113,  290 => 106,  283 => 101,  280 => 114,  264 => 105,  251 => 90,  242 => 89,  236 => 89,  234 => 89,  169 => 56,  150 => 75,  397 => 153,  391 => 153,  385 => 159,  379 => 158,  361 => 137,  355 => 135,  350 => 128,  344 => 147,  338 => 127,  332 => 125,  326 => 123,  315 => 113,  309 => 141,  303 => 109,  297 => 108,  284 => 106,  260 => 235,  254 => 101,  246 => 95,  241 => 94,  239 => 95,  229 => 87,  226 => 86,  218 => 84,  210 => 78,  207 => 95,  202 => 73,  200 => 82,  414 => 161,  406 => 159,  400 => 155,  394 => 154,  388 => 160,  382 => 147,  376 => 145,  368 => 142,  353 => 135,  347 => 160,  341 => 125,  339 => 145,  335 => 157,  310 => 117,  306 => 128,  298 => 114,  296 => 113,  293 => 106,  281 => 125,  278 => 102,  272 => 101,  269 => 101,  266 => 104,  258 => 103,  255 => 101,  250 => 100,  248 => 101,  244 => 91,  238 => 97,  227 => 93,  219 => 93,  199 => 63,  195 => 73,  168 => 50,  146 => 55,  190 => 89,  182 => 64,  167 => 64,  161 => 80,  137 => 51,  97 => 23,  53 => 38,  40 => 8,  124 => 49,  117 => 49,  110 => 39,  90 => 28,  56 => 13,  69 => 20,  129 => 38,  87 => 40,  49 => 13,  134 => 54,  86 => 28,  179 => 67,  164 => 63,  148 => 58,  128 => 45,  113 => 40,  107 => 27,  77 => 24,  62 => 27,  23 => 3,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 160,  405 => 155,  401 => 154,  395 => 154,  392 => 153,  383 => 147,  378 => 110,  373 => 146,  370 => 156,  367 => 139,  364 => 141,  359 => 131,  356 => 163,  352 => 149,  346 => 82,  343 => 159,  340 => 158,  334 => 128,  330 => 140,  327 => 139,  324 => 117,  321 => 121,  318 => 119,  312 => 119,  302 => 137,  286 => 57,  279 => 106,  267 => 96,  261 => 94,  257 => 234,  253 => 94,  235 => 91,  231 => 88,  217 => 83,  209 => 73,  203 => 77,  192 => 72,  175 => 65,  173 => 85,  170 => 60,  156 => 77,  125 => 44,  99 => 39,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 99,  268 => 107,  263 => 95,  249 => 98,  245 => 96,  230 => 88,  222 => 86,  220 => 90,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 19,  38 => 18,  144 => 73,  141 => 53,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 9,  91 => 35,  84 => 25,  94 => 27,  88 => 20,  59 => 21,  28 => 3,  225 => 88,  216 => 83,  212 => 78,  205 => 71,  201 => 74,  196 => 92,  194 => 72,  191 => 70,  189 => 70,  186 => 59,  180 => 54,  172 => 64,  159 => 59,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 50,  118 => 44,  114 => 43,  104 => 35,  100 => 24,  78 => 26,  75 => 23,  71 => 20,  34 => 8,  105 => 31,  93 => 42,  79 => 23,  76 => 34,  72 => 22,  68 => 19,  58 => 25,  24 => 2,  27 => 3,  21 => 2,  44 => 20,  31 => 6,  26 => 3,  25 => 4,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 46,  152 => 44,  149 => 43,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 31,  101 => 45,  96 => 42,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 10,  43 => 8,  41 => 19,  37 => 7,  35 => 5,  32 => 6,  29 => 6,  184 => 88,  178 => 62,  171 => 84,  165 => 54,  162 => 53,  157 => 46,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 49,  133 => 50,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 32,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 29,  85 => 27,  81 => 24,  73 => 33,  64 => 11,  60 => 15,  57 => 20,  54 => 12,  51 => 12,  48 => 11,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
