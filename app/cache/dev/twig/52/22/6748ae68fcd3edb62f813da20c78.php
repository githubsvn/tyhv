<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_52226748ae68fcd3edb62f813da20c78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "request"), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "request"), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute($this->getContext($context, "router"), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getContext($context, "router"), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "traces"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("almost") : ((((2 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "pattern"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  388 => 160,  385 => 159,  362 => 153,  342 => 146,  356 => 163,  384 => 138,  377 => 157,  343 => 159,  329 => 121,  374 => 144,  370 => 156,  348 => 134,  336 => 128,  313 => 118,  307 => 116,  391 => 153,  373 => 146,  351 => 136,  340 => 158,  334 => 128,  328 => 126,  20 => 1,  140 => 42,  327 => 139,  317 => 136,  311 => 130,  337 => 151,  319 => 120,  300 => 135,  277 => 127,  253 => 90,  188 => 67,  359 => 131,  352 => 149,  333 => 141,  322 => 124,  314 => 131,  299 => 113,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 154,  389 => 148,  383 => 146,  378 => 144,  372 => 133,  360 => 152,  354 => 150,  349 => 135,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 113,  303 => 109,  257 => 234,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 148,  367 => 141,  358 => 130,  330 => 140,  324 => 117,  310 => 117,  306 => 128,  248 => 101,  345 => 134,  339 => 145,  331 => 122,  323 => 149,  320 => 135,  288 => 129,  266 => 104,  291 => 113,  283 => 101,  271 => 118,  262 => 236,  239 => 95,  208 => 70,  316 => 145,  312 => 119,  308 => 129,  296 => 134,  265 => 106,  261 => 94,  256 => 100,  250 => 100,  236 => 89,  224 => 81,  176 => 61,  113 => 40,  202 => 73,  56 => 13,  304 => 114,  297 => 108,  259 => 109,  244 => 91,  228 => 87,  193 => 68,  90 => 28,  285 => 102,  281 => 125,  275 => 111,  269 => 101,  267 => 96,  251 => 90,  246 => 95,  234 => 89,  192 => 72,  298 => 103,  294 => 111,  278 => 102,  264 => 105,  255 => 101,  247 => 97,  243 => 86,  238 => 97,  218 => 74,  214 => 82,  206 => 78,  158 => 56,  146 => 79,  40 => 11,  286 => 99,  279 => 95,  274 => 121,  260 => 235,  252 => 138,  241 => 86,  237 => 85,  233 => 88,  231 => 88,  210 => 78,  195 => 67,  187 => 59,  181 => 87,  167 => 64,  137 => 51,  124 => 49,  97 => 23,  69 => 20,  53 => 17,  229 => 87,  221 => 83,  209 => 73,  203 => 77,  197 => 61,  174 => 58,  166 => 82,  142 => 54,  117 => 35,  62 => 21,  227 => 74,  223 => 73,  219 => 72,  213 => 69,  207 => 95,  190 => 89,  182 => 64,  168 => 50,  150 => 75,  110 => 39,  129 => 38,  87 => 33,  49 => 13,  134 => 54,  86 => 28,  77 => 25,  164 => 63,  148 => 58,  128 => 45,  199 => 63,  179 => 67,  169 => 56,  161 => 80,  107 => 27,  23 => 3,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 152,  382 => 105,  379 => 158,  375 => 147,  369 => 144,  366 => 155,  363 => 140,  357 => 151,  353 => 135,  350 => 128,  347 => 160,  344 => 147,  341 => 152,  335 => 157,  325 => 138,  318 => 119,  309 => 141,  305 => 110,  302 => 137,  293 => 106,  290 => 106,  284 => 106,  280 => 114,  272 => 95,  258 => 103,  254 => 101,  240 => 93,  235 => 91,  232 => 83,  226 => 86,  217 => 83,  200 => 82,  175 => 65,  173 => 85,  170 => 60,  156 => 77,  125 => 44,  99 => 39,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 99,  268 => 107,  263 => 95,  249 => 88,  245 => 96,  230 => 106,  222 => 82,  220 => 90,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 7,  144 => 73,  141 => 43,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 15,  91 => 34,  84 => 25,  94 => 27,  88 => 20,  59 => 21,  28 => 6,  225 => 88,  216 => 73,  212 => 78,  205 => 71,  201 => 74,  196 => 92,  194 => 72,  191 => 70,  189 => 70,  186 => 94,  180 => 54,  172 => 64,  159 => 59,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 36,  118 => 44,  114 => 43,  104 => 37,  100 => 36,  78 => 26,  75 => 23,  71 => 20,  34 => 5,  105 => 31,  93 => 42,  79 => 23,  76 => 34,  72 => 22,  68 => 19,  58 => 25,  24 => 2,  27 => 3,  21 => 2,  44 => 10,  31 => 4,  26 => 3,  25 => 4,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 46,  152 => 44,  149 => 43,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 31,  101 => 45,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 16,  43 => 8,  41 => 19,  37 => 7,  35 => 5,  32 => 6,  29 => 6,  184 => 88,  178 => 62,  171 => 84,  165 => 54,  162 => 53,  157 => 46,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 42,  133 => 50,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 32,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 29,  85 => 16,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 12,  51 => 13,  48 => 11,  45 => 14,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}
