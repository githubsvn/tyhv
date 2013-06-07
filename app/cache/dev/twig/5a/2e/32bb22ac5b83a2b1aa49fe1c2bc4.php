<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_5a2e32bb22ac5b83a2b1aa49fe1c2bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 30
        if ($this->getContext($context, "required")) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  362 => 153,  342 => 146,  275 => 111,  323 => 149,  274 => 121,  214 => 82,  206 => 78,  188 => 67,  262 => 236,  271 => 100,  176 => 61,  208 => 69,  252 => 138,  233 => 88,  140 => 42,  193 => 68,  158 => 56,  384 => 138,  377 => 157,  372 => 133,  358 => 130,  329 => 121,  305 => 110,  285 => 102,  247 => 97,  240 => 93,  232 => 83,  224 => 81,  213 => 69,  174 => 58,  166 => 82,  142 => 54,  374 => 144,  366 => 155,  360 => 152,  354 => 150,  348 => 134,  336 => 128,  331 => 122,  319 => 120,  313 => 118,  307 => 116,  294 => 111,  259 => 109,  256 => 100,  228 => 87,  187 => 59,  181 => 87,  387 => 152,  381 => 148,  375 => 147,  369 => 144,  363 => 140,  357 => 151,  351 => 136,  349 => 135,  345 => 134,  328 => 126,  320 => 135,  316 => 145,  311 => 130,  308 => 129,  291 => 113,  288 => 129,  265 => 106,  237 => 90,  221 => 83,  197 => 61,  20 => 1,  333 => 141,  325 => 138,  322 => 124,  314 => 131,  304 => 114,  299 => 113,  290 => 106,  283 => 101,  280 => 114,  264 => 105,  251 => 90,  242 => 89,  236 => 89,  234 => 89,  169 => 56,  150 => 75,  397 => 153,  391 => 153,  385 => 159,  379 => 158,  361 => 137,  355 => 135,  350 => 128,  344 => 147,  338 => 127,  332 => 125,  326 => 123,  315 => 113,  309 => 141,  303 => 109,  297 => 108,  284 => 106,  260 => 235,  254 => 101,  246 => 95,  241 => 94,  239 => 95,  229 => 87,  226 => 86,  218 => 84,  210 => 78,  207 => 95,  202 => 73,  200 => 82,  414 => 161,  406 => 159,  400 => 155,  394 => 154,  388 => 160,  382 => 147,  376 => 145,  368 => 142,  353 => 135,  347 => 160,  341 => 125,  339 => 145,  335 => 157,  310 => 117,  306 => 128,  298 => 114,  296 => 113,  293 => 106,  281 => 125,  278 => 102,  272 => 101,  269 => 101,  266 => 104,  258 => 103,  255 => 101,  250 => 100,  248 => 101,  244 => 91,  238 => 97,  227 => 93,  219 => 93,  199 => 63,  195 => 73,  168 => 50,  146 => 55,  190 => 89,  182 => 64,  167 => 64,  161 => 80,  137 => 51,  97 => 23,  53 => 17,  40 => 11,  124 => 49,  117 => 49,  110 => 39,  90 => 27,  56 => 12,  69 => 20,  129 => 38,  87 => 26,  49 => 13,  134 => 54,  86 => 28,  179 => 67,  164 => 63,  148 => 58,  128 => 45,  113 => 40,  107 => 27,  77 => 25,  62 => 14,  23 => 3,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 160,  405 => 155,  401 => 154,  395 => 154,  392 => 153,  383 => 147,  378 => 110,  373 => 146,  370 => 156,  367 => 139,  364 => 141,  359 => 131,  356 => 163,  352 => 149,  346 => 82,  343 => 159,  340 => 158,  334 => 128,  330 => 140,  327 => 139,  324 => 117,  321 => 121,  318 => 119,  312 => 119,  302 => 137,  286 => 57,  279 => 106,  267 => 96,  261 => 94,  257 => 234,  253 => 94,  235 => 91,  231 => 88,  217 => 83,  209 => 73,  203 => 77,  192 => 72,  175 => 65,  173 => 85,  170 => 60,  156 => 77,  125 => 44,  99 => 39,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 99,  268 => 107,  263 => 95,  249 => 98,  245 => 96,  230 => 88,  222 => 86,  220 => 90,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 7,  144 => 73,  141 => 53,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 16,  61 => 12,  47 => 15,  91 => 34,  84 => 25,  94 => 27,  88 => 20,  59 => 13,  28 => 6,  225 => 88,  216 => 83,  212 => 78,  205 => 71,  201 => 74,  196 => 92,  194 => 72,  191 => 70,  189 => 70,  186 => 59,  180 => 54,  172 => 64,  159 => 59,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 50,  118 => 44,  114 => 43,  104 => 31,  100 => 36,  78 => 26,  75 => 23,  71 => 20,  34 => 5,  105 => 31,  93 => 28,  79 => 23,  76 => 34,  72 => 18,  68 => 19,  58 => 14,  24 => 2,  27 => 3,  21 => 2,  44 => 10,  31 => 5,  26 => 3,  25 => 4,  19 => 1,  70 => 15,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 46,  152 => 44,  149 => 43,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 31,  101 => 45,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 13,  50 => 16,  43 => 9,  41 => 7,  37 => 7,  35 => 5,  32 => 6,  29 => 4,  184 => 88,  178 => 62,  171 => 84,  165 => 54,  162 => 53,  157 => 46,  153 => 62,  151 => 47,  143 => 56,  138 => 55,  136 => 49,  133 => 50,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 32,  108 => 33,  102 => 30,  98 => 29,  95 => 31,  92 => 21,  89 => 29,  85 => 27,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 12,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
