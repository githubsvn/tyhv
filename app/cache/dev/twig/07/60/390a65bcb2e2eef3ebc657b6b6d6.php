<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_0760390a65bcb2e2eef3ebc657b6b6d6 extends Twig_Template
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
        return array (  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1106 => 316,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1038 => 303,  1033 => 302,  1031 => 301,  1028 => 300,  1019 => 294,  1013 => 292,  1010 => 291,  1005 => 290,  1003 => 289,  1000 => 288,  993 => 283,  986 => 281,  983 => 277,  979 => 276,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  926 => 252,  924 => 251,  921 => 250,  913 => 246,  911 => 242,  909 => 241,  906 => 240,  885 => 234,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  837 => 214,  829 => 210,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  808 => 201,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  749 => 175,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  720 => 162,  717 => 161,  715 => 160,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  687 => 150,  681 => 148,  676 => 146,  673 => 145,  665 => 139,  662 => 137,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  521 => 92,  516 => 91,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  450 => 72,  448 => 71,  440 => 70,  435 => 68,  421 => 62,  412 => 60,  405 => 58,  402 => 57,  364 => 41,  790 => 469,  787 => 468,  776 => 187,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 151,  686 => 451,  682 => 450,  678 => 147,  674 => 448,  670 => 447,  666 => 446,  663 => 138,  661 => 136,  644 => 130,  633 => 442,  618 => 437,  613 => 435,  609 => 117,  606 => 116,  604 => 115,  590 => 431,  558 => 401,  540 => 398,  523 => 93,  520 => 396,  518 => 395,  513 => 90,  508 => 391,  388 => 160,  385 => 159,  362 => 153,  342 => 32,  356 => 37,  384 => 49,  377 => 157,  343 => 159,  329 => 26,  374 => 144,  370 => 156,  348 => 134,  336 => 128,  313 => 118,  307 => 116,  391 => 153,  373 => 146,  351 => 136,  340 => 158,  334 => 27,  328 => 126,  20 => 1,  140 => 42,  327 => 139,  317 => 136,  311 => 20,  337 => 151,  319 => 120,  300 => 135,  277 => 127,  253 => 90,  188 => 67,  359 => 131,  352 => 149,  333 => 141,  322 => 124,  314 => 21,  299 => 113,  242 => 89,  429 => 64,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 59,  395 => 154,  389 => 148,  383 => 146,  378 => 144,  372 => 133,  360 => 152,  354 => 150,  349 => 135,  338 => 127,  332 => 125,  326 => 123,  321 => 23,  315 => 113,  303 => 109,  257 => 234,  442 => 172,  438 => 69,  434 => 170,  422 => 165,  420 => 164,  416 => 61,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 148,  367 => 42,  358 => 130,  330 => 140,  324 => 117,  310 => 117,  306 => 128,  248 => 326,  345 => 33,  339 => 145,  331 => 122,  323 => 24,  320 => 135,  288 => 129,  266 => 104,  291 => 113,  283 => 101,  271 => 118,  262 => 236,  239 => 95,  208 => 266,  316 => 22,  312 => 119,  308 => 129,  296 => 134,  265 => 106,  261 => 94,  256 => 330,  250 => 327,  236 => 315,  224 => 81,  176 => 220,  113 => 40,  202 => 263,  56 => 12,  304 => 114,  297 => 108,  259 => 109,  244 => 324,  228 => 307,  193 => 68,  90 => 27,  285 => 102,  281 => 125,  275 => 111,  269 => 5,  267 => 4,  251 => 90,  246 => 325,  234 => 89,  192 => 249,  298 => 103,  294 => 111,  278 => 8,  264 => 3,  255 => 101,  247 => 97,  243 => 86,  238 => 321,  218 => 288,  214 => 82,  206 => 78,  158 => 56,  146 => 178,  40 => 11,  286 => 99,  279 => 95,  274 => 121,  260 => 332,  252 => 328,  241 => 323,  237 => 85,  233 => 314,  231 => 308,  210 => 271,  195 => 250,  187 => 239,  181 => 87,  167 => 64,  137 => 51,  124 => 129,  97 => 23,  69 => 15,  53 => 17,  229 => 87,  221 => 83,  209 => 73,  203 => 77,  197 => 259,  174 => 214,  166 => 206,  142 => 54,  117 => 35,  62 => 16,  227 => 74,  223 => 299,  219 => 72,  213 => 272,  207 => 95,  190 => 240,  182 => 223,  168 => 50,  150 => 75,  110 => 38,  129 => 145,  87 => 26,  49 => 12,  134 => 158,  86 => 46,  77 => 21,  164 => 200,  148 => 58,  128 => 45,  199 => 63,  179 => 222,  169 => 207,  161 => 199,  107 => 37,  23 => 3,  464 => 150,  460 => 149,  456 => 74,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 52,  390 => 107,  387 => 50,  382 => 48,  379 => 47,  375 => 147,  369 => 43,  366 => 155,  363 => 140,  357 => 151,  353 => 36,  350 => 35,  347 => 34,  344 => 147,  341 => 152,  335 => 157,  325 => 138,  318 => 119,  309 => 141,  305 => 110,  302 => 137,  293 => 106,  290 => 14,  284 => 106,  280 => 114,  272 => 6,  258 => 331,  254 => 329,  240 => 93,  235 => 91,  232 => 83,  226 => 300,  217 => 83,  200 => 260,  175 => 65,  173 => 85,  170 => 60,  156 => 192,  125 => 44,  99 => 68,  301 => 125,  295 => 16,  292 => 15,  289 => 119,  287 => 13,  282 => 115,  276 => 248,  273 => 110,  270 => 99,  268 => 107,  263 => 95,  249 => 88,  245 => 96,  230 => 106,  222 => 82,  220 => 297,  215 => 287,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 39,  82 => 26,  65 => 17,  38 => 6,  144 => 173,  141 => 172,  135 => 47,  126 => 144,  109 => 102,  103 => 25,  67 => 17,  61 => 2,  47 => 9,  91 => 56,  84 => 25,  94 => 57,  88 => 30,  59 => 15,  28 => 3,  225 => 88,  216 => 73,  212 => 78,  205 => 265,  201 => 74,  196 => 92,  194 => 72,  191 => 70,  189 => 70,  186 => 94,  180 => 54,  172 => 64,  159 => 193,  154 => 186,  147 => 58,  132 => 47,  127 => 52,  121 => 128,  118 => 44,  114 => 108,  104 => 87,  100 => 36,  78 => 24,  75 => 23,  71 => 19,  34 => 5,  105 => 31,  93 => 28,  79 => 23,  76 => 31,  72 => 21,  68 => 19,  58 => 14,  24 => 2,  27 => 5,  21 => 1,  44 => 8,  31 => 4,  26 => 3,  25 => 4,  19 => 1,  70 => 15,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 46,  152 => 44,  149 => 179,  145 => 57,  139 => 166,  131 => 157,  123 => 35,  120 => 50,  115 => 40,  106 => 101,  101 => 33,  96 => 67,  83 => 24,  80 => 32,  74 => 22,  66 => 12,  55 => 13,  52 => 13,  50 => 12,  43 => 12,  41 => 7,  37 => 7,  35 => 5,  32 => 6,  29 => 3,  184 => 237,  178 => 62,  171 => 213,  165 => 54,  162 => 53,  157 => 46,  153 => 62,  151 => 185,  143 => 56,  138 => 55,  136 => 165,  133 => 50,  130 => 39,  122 => 51,  119 => 114,  116 => 113,  111 => 107,  108 => 33,  102 => 30,  98 => 29,  95 => 31,  92 => 31,  89 => 47,  85 => 16,  81 => 24,  73 => 20,  64 => 3,  60 => 20,  57 => 14,  54 => 13,  51 => 16,  48 => 11,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
