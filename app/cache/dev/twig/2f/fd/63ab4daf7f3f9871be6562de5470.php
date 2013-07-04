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
        return array (  20 => 1,  327 => 141,  317 => 136,  311 => 135,  345 => 153,  331 => 142,  323 => 140,  319 => 143,  308 => 138,  302 => 136,  288 => 131,  256 => 113,  359 => 131,  352 => 127,  333 => 123,  325 => 146,  322 => 120,  314 => 140,  280 => 103,  433 => 166,  425 => 164,  419 => 160,  411 => 158,  407 => 156,  401 => 152,  395 => 150,  389 => 148,  383 => 146,  366 => 138,  349 => 132,  321 => 121,  315 => 117,  309 => 134,  442 => 172,  438 => 171,  434 => 170,  428 => 166,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  396 => 153,  392 => 152,  387 => 147,  369 => 142,  363 => 140,  358 => 135,  353 => 135,  347 => 126,  341 => 152,  339 => 130,  330 => 124,  324 => 123,  296 => 134,  293 => 126,  266 => 104,  258 => 94,  344 => 129,  337 => 151,  318 => 119,  307 => 116,  299 => 128,  305 => 132,  291 => 132,  283 => 129,  271 => 118,  262 => 115,  250 => 100,  316 => 119,  312 => 119,  306 => 115,  300 => 135,  277 => 127,  254 => 97,  248 => 119,  242 => 89,  240 => 117,  236 => 87,  208 => 70,  188 => 97,  113 => 57,  56 => 21,  304 => 114,  297 => 111,  259 => 122,  244 => 110,  235 => 91,  228 => 113,  193 => 65,  90 => 37,  285 => 123,  281 => 122,  267 => 95,  251 => 92,  246 => 95,  234 => 114,  192 => 72,  298 => 114,  284 => 106,  272 => 101,  264 => 97,  255 => 101,  247 => 111,  238 => 108,  232 => 80,  218 => 87,  214 => 80,  206 => 107,  158 => 57,  146 => 79,  40 => 16,  286 => 99,  279 => 95,  274 => 94,  260 => 91,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  226 => 78,  210 => 72,  195 => 67,  187 => 63,  181 => 60,  167 => 54,  137 => 42,  124 => 37,  97 => 43,  69 => 16,  53 => 11,  229 => 84,  221 => 83,  209 => 108,  203 => 75,  197 => 74,  174 => 64,  166 => 59,  142 => 51,  117 => 35,  62 => 26,  227 => 93,  223 => 104,  219 => 102,  213 => 101,  207 => 71,  190 => 78,  182 => 73,  168 => 65,  150 => 55,  110 => 31,  129 => 39,  87 => 38,  49 => 16,  134 => 52,  86 => 25,  77 => 22,  164 => 82,  148 => 75,  128 => 46,  199 => 69,  179 => 94,  169 => 84,  161 => 63,  107 => 33,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 165,  421 => 122,  418 => 121,  413 => 159,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 146,  378 => 144,  375 => 144,  372 => 140,  367 => 141,  364 => 104,  360 => 136,  354 => 134,  351 => 81,  348 => 80,  342 => 72,  338 => 127,  335 => 129,  332 => 125,  329 => 68,  326 => 123,  320 => 120,  310 => 117,  303 => 113,  294 => 110,  290 => 106,  278 => 102,  275 => 102,  269 => 101,  265 => 99,  261 => 34,  257 => 98,  253 => 112,  243 => 90,  239 => 93,  217 => 74,  202 => 98,  200 => 82,  175 => 69,  173 => 85,  170 => 55,  156 => 49,  125 => 64,  99 => 42,  301 => 112,  295 => 113,  292 => 109,  289 => 108,  287 => 124,  282 => 104,  276 => 120,  273 => 119,  270 => 106,  268 => 93,  263 => 100,  249 => 88,  245 => 87,  230 => 106,  222 => 82,  220 => 76,  215 => 78,  211 => 77,  204 => 70,  198 => 63,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 14,  38 => 6,  144 => 59,  141 => 71,  135 => 74,  126 => 50,  109 => 57,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 50,  84 => 19,  94 => 38,  88 => 44,  59 => 13,  28 => 2,  225 => 105,  216 => 90,  212 => 88,  205 => 70,  201 => 106,  196 => 73,  194 => 96,  191 => 65,  189 => 74,  186 => 94,  180 => 71,  172 => 66,  159 => 50,  154 => 48,  147 => 46,  132 => 68,  127 => 47,  121 => 36,  118 => 42,  114 => 37,  104 => 41,  100 => 54,  78 => 23,  75 => 30,  71 => 19,  34 => 11,  105 => 45,  93 => 42,  79 => 36,  76 => 35,  72 => 34,  68 => 19,  58 => 25,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 28,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 82,  152 => 61,  149 => 58,  145 => 45,  139 => 75,  131 => 40,  123 => 68,  120 => 49,  115 => 39,  106 => 30,  101 => 44,  96 => 32,  83 => 39,  80 => 39,  74 => 21,  66 => 27,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 93,  178 => 59,  171 => 89,  165 => 60,  162 => 86,  157 => 78,  153 => 77,  151 => 81,  143 => 44,  138 => 53,  136 => 49,  133 => 51,  130 => 72,  122 => 43,  119 => 67,  116 => 61,  111 => 37,  108 => 36,  102 => 33,  98 => 32,  95 => 41,  92 => 45,  89 => 28,  85 => 37,  81 => 40,  73 => 17,  64 => 31,  60 => 22,  57 => 15,  54 => 24,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}