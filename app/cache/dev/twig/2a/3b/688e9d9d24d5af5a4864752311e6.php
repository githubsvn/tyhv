<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_2a3b688e9d9d24d5af5a4864752311e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "    ";
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 8
        echo "
    <h1>Configure your Database</h1>
    <p>If your website needs a database connection, please configure it here.</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"symfony-form-column\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "driver"), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "host"), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'row');
        echo "
        </div>
        <div class=\"symfony-form-column\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "user"), 'row');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'row');
        echo "
        </div>

        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1176 => 331,  1170 => 330,  1164 => 329,  1158 => 328,  1152 => 327,  1146 => 326,  1140 => 325,  1134 => 324,  1128 => 323,  1112 => 317,  1105 => 316,  1103 => 315,  1100 => 314,  1077 => 310,  1052 => 309,  1050 => 308,  1047 => 307,  1035 => 302,  1030 => 301,  1028 => 300,  1025 => 299,  1016 => 293,  1010 => 291,  1007 => 290,  1002 => 289,  1000 => 288,  997 => 287,  990 => 282,  983 => 280,  980 => 276,  976 => 275,  973 => 274,  970 => 273,  968 => 272,  965 => 271,  957 => 267,  955 => 266,  952 => 265,  945 => 260,  942 => 259,  934 => 254,  930 => 253,  926 => 252,  923 => 251,  921 => 250,  918 => 249,  910 => 245,  908 => 241,  906 => 240,  903 => 239,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  855 => 224,  853 => 223,  850 => 222,  842 => 216,  839 => 215,  837 => 214,  834 => 213,  826 => 209,  823 => 208,  821 => 207,  818 => 206,  810 => 202,  807 => 201,  805 => 200,  802 => 199,  794 => 195,  791 => 194,  789 => 193,  786 => 192,  778 => 188,  775 => 187,  773 => 186,  770 => 185,  762 => 181,  759 => 180,  757 => 179,  754 => 178,  746 => 174,  744 => 173,  741 => 172,  733 => 168,  730 => 167,  728 => 166,  725 => 165,  717 => 161,  714 => 160,  712 => 159,  710 => 158,  700 => 152,  692 => 151,  687 => 150,  681 => 148,  676 => 146,  673 => 145,  665 => 139,  662 => 137,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  521 => 92,  516 => 91,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  393 => 52,  387 => 50,  382 => 48,  369 => 43,  364 => 41,  334 => 27,  321 => 23,  290 => 14,  278 => 8,  269 => 5,  267 => 4,  250 => 326,  246 => 324,  241 => 322,  236 => 314,  233 => 313,  213 => 271,  210 => 270,  146 => 177,  176 => 219,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 157,  690 => 453,  686 => 451,  682 => 450,  678 => 147,  674 => 448,  670 => 447,  666 => 446,  663 => 138,  661 => 136,  644 => 130,  633 => 442,  618 => 437,  613 => 435,  609 => 117,  606 => 116,  604 => 115,  590 => 431,  558 => 401,  540 => 398,  523 => 93,  520 => 396,  518 => 395,  513 => 90,  508 => 391,  388 => 160,  385 => 159,  379 => 47,  377 => 157,  370 => 156,  366 => 155,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  342 => 32,  339 => 145,  330 => 140,  327 => 139,  314 => 21,  311 => 20,  308 => 129,  306 => 128,  264 => 3,  258 => 330,  247 => 97,  231 => 307,  221 => 83,  207 => 95,  202 => 262,  190 => 239,  169 => 206,  347 => 34,  343 => 159,  340 => 158,  333 => 141,  325 => 138,  302 => 137,  281 => 125,  259 => 109,  217 => 83,  182 => 222,  158 => 56,  140 => 42,  188 => 67,  174 => 213,  134 => 157,  260 => 331,  238 => 320,  223 => 298,  218 => 287,  193 => 68,  181 => 87,  208 => 265,  197 => 258,  179 => 221,  161 => 198,  148 => 58,  142 => 42,  124 => 129,  90 => 27,  195 => 249,  187 => 238,  164 => 199,  117 => 41,  166 => 205,  129 => 145,  110 => 38,  87 => 26,  20 => 1,  97 => 23,  350 => 35,  344 => 147,  338 => 126,  326 => 122,  324 => 121,  320 => 135,  315 => 118,  309 => 141,  303 => 112,  297 => 110,  291 => 108,  286 => 106,  280 => 114,  274 => 121,  266 => 97,  257 => 234,  254 => 328,  243 => 89,  237 => 87,  234 => 89,  228 => 306,  219 => 82,  214 => 82,  206 => 78,  200 => 259,  167 => 64,  150 => 75,  137 => 52,  77 => 21,  69 => 15,  23 => 3,  128 => 45,  113 => 40,  107 => 37,  62 => 16,  56 => 12,  53 => 17,  49 => 12,  86 => 46,  40 => 11,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 57,  399 => 119,  394 => 116,  390 => 114,  384 => 49,  381 => 112,  372 => 109,  367 => 42,  362 => 153,  359 => 106,  356 => 37,  353 => 36,  348 => 132,  345 => 33,  341 => 82,  335 => 157,  332 => 124,  329 => 26,  323 => 24,  319 => 69,  316 => 22,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 129,  279 => 55,  275 => 111,  272 => 6,  265 => 50,  262 => 236,  256 => 329,  252 => 327,  248 => 325,  244 => 323,  240 => 93,  226 => 299,  209 => 73,  203 => 77,  192 => 248,  175 => 66,  173 => 85,  170 => 60,  156 => 191,  125 => 44,  99 => 68,  301 => 125,  295 => 16,  292 => 15,  289 => 119,  287 => 13,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 91,  245 => 96,  230 => 83,  222 => 83,  220 => 296,  215 => 286,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 39,  82 => 26,  65 => 17,  38 => 6,  144 => 172,  141 => 171,  135 => 47,  126 => 144,  109 => 102,  103 => 25,  67 => 17,  61 => 2,  47 => 9,  91 => 56,  84 => 25,  94 => 57,  88 => 30,  59 => 15,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 264,  201 => 65,  196 => 92,  194 => 75,  191 => 70,  189 => 71,  186 => 125,  180 => 117,  172 => 64,  159 => 192,  154 => 185,  147 => 58,  132 => 47,  127 => 52,  121 => 128,  118 => 35,  114 => 108,  104 => 87,  100 => 36,  78 => 24,  75 => 23,  71 => 19,  34 => 5,  105 => 32,  93 => 28,  79 => 23,  76 => 31,  72 => 21,  68 => 19,  58 => 14,  24 => 2,  27 => 5,  21 => 1,  44 => 8,  31 => 4,  26 => 3,  25 => 4,  19 => 1,  70 => 15,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 46,  152 => 45,  149 => 178,  145 => 57,  139 => 165,  131 => 156,  123 => 35,  120 => 50,  115 => 40,  106 => 101,  101 => 33,  96 => 67,  83 => 24,  80 => 32,  74 => 22,  66 => 12,  55 => 13,  52 => 13,  50 => 12,  43 => 12,  41 => 7,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 236,  178 => 62,  171 => 212,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 184,  143 => 56,  138 => 55,  136 => 164,  133 => 46,  130 => 39,  122 => 51,  119 => 114,  116 => 113,  111 => 107,  108 => 33,  102 => 30,  98 => 29,  95 => 31,  92 => 31,  89 => 47,  85 => 37,  81 => 24,  73 => 20,  64 => 3,  60 => 20,  57 => 14,  54 => 13,  51 => 16,  48 => 11,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
