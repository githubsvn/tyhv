<?php

/* SMAdminBundle::popup.html.twig */
class __TwigTemplate_2ffd63ab4daf7f3f9871be6562de5470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Le styles -->
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/css/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js') }}\"></script>
            <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>

        </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "                </div>
            </div>
        </div>

        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/prettify.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/static/admin/js/twig.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  356 => 140,  301 => 119,  295 => 117,  238 => 102,  294 => 124,  288 => 115,  404 => 131,  371 => 123,  350 => 136,  339 => 117,  304 => 120,  282 => 94,  257 => 87,  217 => 74,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 150,  441 => 148,  437 => 147,  432 => 146,  427 => 144,  414 => 138,  407 => 136,  403 => 135,  398 => 134,  388 => 126,  365 => 142,  360 => 146,  347 => 115,  336 => 112,  310 => 104,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 152,  433 => 146,  426 => 144,  419 => 142,  415 => 141,  410 => 140,  400 => 135,  393 => 132,  382 => 125,  372 => 151,  366 => 147,  359 => 121,  352 => 119,  272 => 95,  377 => 152,  370 => 124,  353 => 119,  342 => 134,  300 => 102,  207 => 74,  344 => 135,  321 => 132,  308 => 96,  289 => 97,  279 => 97,  242 => 104,  358 => 145,  354 => 143,  349 => 140,  343 => 117,  337 => 116,  335 => 136,  298 => 118,  293 => 99,  269 => 84,  264 => 109,  259 => 108,  219 => 98,  205 => 95,  160 => 81,  72 => 34,  175 => 82,  77 => 35,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 124,  307 => 103,  286 => 98,  275 => 96,  268 => 110,  263 => 95,  243 => 91,  190 => 69,  326 => 134,  305 => 127,  290 => 99,  285 => 122,  280 => 87,  261 => 117,  241 => 87,  237 => 69,  224 => 65,  142 => 74,  90 => 26,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 105,  297 => 101,  283 => 87,  267 => 118,  249 => 113,  244 => 105,  230 => 80,  223 => 71,  177 => 56,  116 => 43,  53 => 17,  44 => 17,  325 => 99,  316 => 95,  309 => 94,  292 => 91,  281 => 89,  276 => 88,  271 => 87,  265 => 86,  260 => 85,  256 => 83,  253 => 82,  214 => 67,  210 => 65,  206 => 63,  196 => 59,  78 => 34,  255 => 114,  251 => 89,  246 => 112,  232 => 101,  228 => 71,  254 => 86,  233 => 78,  231 => 72,  222 => 107,  208 => 68,  204 => 59,  191 => 59,  188 => 62,  185 => 85,  178 => 88,  149 => 71,  143 => 41,  132 => 37,  96 => 28,  169 => 58,  137 => 72,  129 => 36,  119 => 65,  154 => 44,  146 => 50,  141 => 40,  198 => 66,  181 => 68,  135 => 43,  127 => 49,  122 => 40,  86 => 39,  73 => 16,  55 => 13,  227 => 84,  221 => 75,  107 => 35,  67 => 27,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 150,  434 => 118,  430 => 116,  424 => 115,  421 => 140,  411 => 111,  405 => 138,  399 => 109,  395 => 127,  390 => 107,  386 => 131,  381 => 153,  378 => 104,  374 => 125,  367 => 82,  364 => 121,  361 => 141,  355 => 120,  351 => 71,  348 => 118,  345 => 69,  341 => 68,  338 => 132,  332 => 128,  322 => 110,  314 => 123,  287 => 102,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 87,  211 => 73,  195 => 68,  193 => 63,  187 => 55,  184 => 61,  182 => 54,  164 => 57,  161 => 56,  140 => 47,  126 => 63,  106 => 30,  103 => 54,  100 => 45,  93 => 42,  74 => 18,  68 => 12,  51 => 19,  333 => 100,  327 => 110,  324 => 111,  320 => 107,  317 => 106,  312 => 129,  306 => 86,  303 => 93,  299 => 101,  296 => 106,  291 => 105,  277 => 112,  273 => 92,  258 => 75,  248 => 78,  245 => 83,  239 => 74,  234 => 69,  226 => 108,  216 => 106,  202 => 97,  199 => 60,  192 => 94,  165 => 82,  156 => 50,  134 => 50,  131 => 64,  120 => 38,  115 => 36,  82 => 36,  76 => 19,  61 => 15,  54 => 24,  171 => 65,  163 => 55,  159 => 55,  152 => 51,  138 => 39,  123 => 48,  117 => 31,  111 => 30,  101 => 44,  98 => 29,  83 => 39,  75 => 30,  71 => 18,  64 => 31,  43 => 15,  36 => 12,  104 => 27,  80 => 23,  63 => 13,  58 => 25,  40 => 16,  24 => 2,  94 => 27,  88 => 25,  48 => 10,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 9,  29 => 3,  32 => 4,  250 => 106,  240 => 82,  236 => 110,  229 => 100,  225 => 70,  220 => 81,  218 => 69,  215 => 80,  212 => 64,  209 => 96,  200 => 73,  194 => 60,  179 => 60,  176 => 59,  173 => 86,  166 => 57,  162 => 77,  157 => 75,  155 => 79,  151 => 54,  148 => 42,  145 => 47,  139 => 68,  128 => 42,  114 => 37,  109 => 62,  87 => 38,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 5,  125 => 34,  118 => 36,  110 => 51,  97 => 43,  92 => 41,  89 => 38,  85 => 37,  69 => 14,  28 => 2,  57 => 21,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 93,  189 => 66,  183 => 54,  180 => 84,  174 => 50,  170 => 49,  167 => 48,  158 => 46,  153 => 59,  150 => 49,  147 => 75,  144 => 70,  136 => 46,  133 => 43,  130 => 48,  124 => 35,  121 => 61,  113 => 30,  108 => 28,  105 => 45,  102 => 46,  99 => 41,  95 => 44,  91 => 19,  81 => 35,  70 => 28,  66 => 27,  62 => 26,  59 => 23,  56 => 11,  52 => 10,  49 => 19,  45 => 9,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
