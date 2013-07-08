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
        return array (  20 => 1,  140 => 42,  327 => 141,  317 => 136,  311 => 135,  337 => 151,  319 => 143,  300 => 135,  277 => 127,  253 => 90,  188 => 97,  359 => 131,  352 => 127,  333 => 123,  322 => 120,  314 => 140,  299 => 128,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 117,  303 => 113,  257 => 91,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  330 => 124,  324 => 123,  310 => 117,  306 => 115,  248 => 119,  345 => 153,  339 => 130,  331 => 142,  323 => 140,  320 => 121,  288 => 131,  266 => 104,  291 => 99,  283 => 129,  271 => 118,  262 => 115,  239 => 93,  208 => 70,  316 => 120,  312 => 119,  308 => 138,  296 => 134,  265 => 96,  261 => 92,  256 => 113,  250 => 100,  236 => 87,  224 => 80,  176 => 63,  113 => 32,  202 => 68,  56 => 11,  304 => 114,  297 => 111,  259 => 122,  244 => 110,  228 => 77,  193 => 74,  90 => 20,  285 => 123,  281 => 122,  275 => 98,  269 => 101,  267 => 95,  251 => 92,  246 => 95,  234 => 114,  192 => 63,  298 => 103,  294 => 111,  278 => 102,  264 => 93,  255 => 101,  247 => 111,  243 => 86,  238 => 108,  218 => 74,  214 => 74,  206 => 70,  158 => 49,  146 => 79,  40 => 16,  286 => 98,  279 => 101,  274 => 94,  260 => 95,  252 => 89,  241 => 109,  237 => 81,  233 => 107,  231 => 82,  210 => 72,  195 => 80,  187 => 64,  181 => 58,  167 => 52,  137 => 70,  124 => 37,  97 => 43,  69 => 31,  53 => 14,  229 => 84,  221 => 75,  209 => 108,  203 => 75,  197 => 75,  174 => 65,  166 => 59,  142 => 43,  117 => 33,  62 => 26,  227 => 93,  223 => 104,  219 => 102,  213 => 101,  207 => 76,  190 => 78,  182 => 73,  168 => 65,  150 => 55,  110 => 44,  129 => 47,  87 => 38,  49 => 16,  134 => 52,  86 => 38,  77 => 22,  164 => 82,  148 => 45,  128 => 38,  199 => 105,  179 => 94,  169 => 84,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 142,  366 => 138,  363 => 140,  357 => 132,  353 => 135,  350 => 128,  347 => 126,  344 => 129,  341 => 152,  335 => 129,  325 => 146,  318 => 119,  309 => 134,  305 => 132,  302 => 136,  293 => 126,  290 => 106,  284 => 106,  280 => 97,  272 => 95,  258 => 94,  254 => 97,  240 => 117,  235 => 91,  232 => 87,  226 => 83,  217 => 110,  200 => 82,  175 => 69,  173 => 85,  170 => 53,  156 => 58,  125 => 64,  99 => 42,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 124,  282 => 104,  276 => 120,  273 => 119,  270 => 102,  268 => 117,  263 => 100,  249 => 89,  245 => 87,  230 => 106,  222 => 82,  220 => 83,  215 => 78,  211 => 77,  204 => 73,  198 => 66,  185 => 73,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 14,  38 => 6,  144 => 59,  141 => 71,  135 => 40,  126 => 50,  109 => 57,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 50,  84 => 26,  94 => 38,  88 => 44,  59 => 12,  28 => 2,  225 => 105,  216 => 73,  212 => 88,  205 => 77,  201 => 106,  196 => 65,  194 => 96,  191 => 95,  189 => 62,  186 => 94,  180 => 71,  172 => 66,  159 => 55,  154 => 47,  147 => 56,  132 => 68,  127 => 51,  121 => 63,  118 => 42,  114 => 37,  104 => 29,  100 => 28,  78 => 23,  75 => 30,  71 => 15,  34 => 11,  105 => 45,  93 => 42,  79 => 18,  76 => 35,  72 => 34,  68 => 19,  58 => 25,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 28,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 82,  152 => 61,  149 => 58,  145 => 55,  139 => 75,  131 => 39,  123 => 68,  120 => 49,  115 => 39,  106 => 62,  101 => 44,  96 => 32,  83 => 39,  80 => 39,  74 => 21,  66 => 27,  55 => 23,  52 => 10,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 93,  178 => 57,  171 => 89,  165 => 51,  162 => 86,  157 => 78,  153 => 77,  151 => 81,  143 => 48,  138 => 53,  136 => 49,  133 => 52,  130 => 72,  122 => 43,  119 => 67,  116 => 61,  111 => 37,  108 => 30,  102 => 43,  98 => 41,  95 => 41,  92 => 45,  89 => 28,  85 => 37,  81 => 40,  73 => 35,  64 => 31,  60 => 22,  57 => 15,  54 => 24,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
