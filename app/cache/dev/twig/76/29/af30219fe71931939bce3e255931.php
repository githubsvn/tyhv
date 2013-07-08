<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_7629af30219fe71931939bce3e255931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_b053546bec8037e5c0c70732cccf799ae4ff8dfd"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html", null, true);
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Priority</th>
            <th>Listener</th>
        </tr>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 33
            echo "            <tr>
                <td><code>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "priority"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 36
            echo $context["__internal_b053546bec8037e5c0c70732cccf799ae4ff8dfd"]->getdisplay_listener($this->getContext($context, "listener"));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </table>

    ";
        // line 41
        if ($this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners")) {
            // line 42
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Priority</th>
                <th>Listener</th>
            </tr>
            ";
            // line 50
            $context["listeners"] = $this->getAttribute($this->getContext($context, "collector"), "notcalledlisteners");
            // line 51
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "listeners"))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 52
                echo "                <tr>
                    <td><code>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"), "priority"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 55
                echo $context["__internal_b053546bec8037e5c0c70732cccf799ae4ff8dfd"]->getdisplay_listener($this->getAttribute($this->getContext($context, "listeners"), $this->getContext($context, "listener"), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </table>
    ";
        }
    }

    // line 62
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "listener"), "type") == "Closure")) {
                // line 64
                echo "        Closure
    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Function")) {
                // line 66
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 67
                echo "        ";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "function"), "html", null, true);
                }
                // line 68
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "listener"), "type") == "Method")) {
                // line 69
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getContext($context, "listener"), "file"), $this->getAttribute($this->getContext($context, "listener"), "line"));
                // line 70
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "listener"), "class"));
                echo "::";
                if ($this->getContext($context, "link")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listener"), "method"), "html", null, true);
                }
                // line 71
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 138,  377 => 134,  343 => 126,  329 => 121,  374 => 144,  370 => 143,  348 => 134,  336 => 128,  313 => 118,  307 => 116,  391 => 153,  373 => 146,  351 => 136,  340 => 129,  334 => 128,  328 => 126,  20 => 1,  140 => 52,  327 => 141,  317 => 136,  311 => 117,  337 => 151,  319 => 120,  300 => 135,  277 => 127,  253 => 90,  188 => 69,  359 => 131,  352 => 136,  333 => 123,  322 => 124,  314 => 140,  299 => 113,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 154,  389 => 148,  383 => 146,  378 => 144,  372 => 133,  360 => 138,  354 => 137,  349 => 135,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 113,  303 => 109,  257 => 234,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 148,  367 => 141,  358 => 130,  330 => 124,  324 => 117,  310 => 117,  306 => 118,  248 => 101,  345 => 134,  339 => 125,  331 => 122,  323 => 140,  320 => 123,  288 => 109,  266 => 104,  291 => 113,  283 => 101,  271 => 118,  262 => 236,  239 => 95,  208 => 70,  316 => 122,  312 => 119,  308 => 111,  296 => 134,  265 => 106,  261 => 94,  256 => 100,  250 => 100,  236 => 89,  224 => 81,  176 => 68,  113 => 57,  202 => 70,  56 => 15,  304 => 114,  297 => 108,  259 => 93,  244 => 91,  228 => 82,  193 => 62,  90 => 33,  285 => 102,  281 => 122,  275 => 98,  269 => 101,  267 => 96,  251 => 90,  246 => 95,  234 => 114,  192 => 63,  298 => 103,  294 => 111,  278 => 102,  264 => 102,  255 => 101,  247 => 89,  243 => 86,  238 => 218,  218 => 74,  214 => 74,  206 => 70,  158 => 47,  146 => 79,  40 => 8,  286 => 99,  279 => 95,  274 => 94,  260 => 235,  252 => 93,  241 => 86,  237 => 85,  233 => 88,  231 => 82,  210 => 78,  195 => 67,  187 => 59,  181 => 55,  167 => 64,  137 => 51,  124 => 49,  97 => 33,  69 => 16,  53 => 38,  229 => 87,  221 => 85,  209 => 68,  203 => 65,  197 => 61,  174 => 67,  166 => 49,  142 => 54,  117 => 35,  62 => 25,  227 => 74,  223 => 73,  219 => 72,  213 => 69,  207 => 66,  190 => 59,  182 => 56,  168 => 50,  150 => 44,  110 => 42,  129 => 38,  87 => 34,  49 => 13,  134 => 54,  86 => 32,  77 => 18,  164 => 63,  148 => 45,  128 => 37,  199 => 63,  179 => 67,  169 => 62,  161 => 61,  107 => 32,  23 => 3,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 152,  382 => 105,  379 => 104,  375 => 147,  369 => 144,  366 => 132,  363 => 140,  357 => 138,  353 => 135,  350 => 128,  347 => 127,  344 => 129,  341 => 152,  335 => 124,  325 => 122,  318 => 119,  309 => 134,  305 => 110,  302 => 114,  293 => 106,  290 => 106,  284 => 106,  280 => 97,  272 => 95,  258 => 94,  254 => 91,  240 => 219,  235 => 91,  232 => 83,  226 => 78,  217 => 83,  200 => 82,  175 => 65,  173 => 53,  170 => 55,  156 => 49,  125 => 36,  99 => 39,  301 => 112,  295 => 96,  292 => 109,  289 => 104,  287 => 124,  282 => 107,  276 => 248,  273 => 98,  270 => 99,  268 => 93,  263 => 95,  249 => 88,  245 => 87,  230 => 106,  222 => 82,  220 => 90,  215 => 82,  211 => 67,  204 => 71,  198 => 66,  185 => 68,  183 => 69,  177 => 58,  160 => 49,  112 => 33,  82 => 30,  65 => 19,  38 => 7,  144 => 42,  141 => 43,  135 => 39,  126 => 46,  109 => 56,  103 => 40,  67 => 23,  61 => 18,  47 => 12,  91 => 35,  84 => 33,  94 => 27,  88 => 17,  59 => 21,  28 => 3,  225 => 86,  216 => 73,  212 => 88,  205 => 67,  201 => 74,  196 => 61,  194 => 72,  191 => 70,  189 => 70,  186 => 94,  180 => 54,  172 => 67,  159 => 59,  154 => 45,  147 => 58,  132 => 68,  127 => 52,  121 => 36,  118 => 44,  114 => 43,  104 => 39,  100 => 28,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  105 => 31,  93 => 38,  79 => 32,  76 => 29,  72 => 21,  68 => 21,  58 => 16,  24 => 2,  27 => 3,  21 => 2,  44 => 11,  31 => 6,  26 => 3,  25 => 4,  19 => 1,  70 => 24,  63 => 21,  46 => 12,  22 => 2,  163 => 49,  155 => 46,  152 => 44,  149 => 43,  145 => 54,  139 => 53,  131 => 51,  123 => 36,  120 => 50,  115 => 34,  106 => 31,  101 => 33,  96 => 42,  83 => 24,  80 => 32,  74 => 25,  66 => 31,  55 => 15,  52 => 14,  50 => 15,  43 => 8,  41 => 12,  37 => 7,  35 => 6,  32 => 5,  29 => 6,  184 => 57,  178 => 59,  171 => 66,  165 => 50,  162 => 60,  157 => 46,  153 => 62,  151 => 46,  143 => 41,  138 => 55,  136 => 42,  133 => 50,  130 => 53,  122 => 51,  119 => 34,  116 => 35,  111 => 32,  108 => 41,  102 => 43,  98 => 41,  95 => 36,  92 => 27,  89 => 28,  85 => 16,  81 => 14,  73 => 22,  64 => 11,  60 => 28,  57 => 20,  54 => 19,  51 => 37,  48 => 17,  45 => 13,  42 => 12,  39 => 9,  36 => 7,  33 => 10,  30 => 5,);
    }
}
