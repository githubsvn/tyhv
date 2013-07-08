<?php

/* SMAdminBundle::admin.login.html.twig */
class __TwigTemplate_36fb58197fe2c7186f4d07cd1f746811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'bootstraps' => array($this, 'block_bootstraps'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Le styles -->
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('bootstraps', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        </body>
    </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 30
    public function block_bootstraps($context, array $blocks = array())
    {
        // line 31
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "            <script>
              \$('.form-login').css({
                'margin-left':-(\$('.form-login').outerWidth()/2),
                'margin-top':-(\$('.form-login').outerHeight()/2)
              });
              \$(window).resize(function () {
                \$('.form-login').css({
                  'margin-left':-(\$('.form-login').outerWidth()/2),
                  'margin-top':-(\$('.form-login').outerHeight()/2)
                });
              });
              \$('#form-login-btnLogin').click(function () {
                var btn = \$(this)
                btn.button('loading');
                setTimeout(function () {
                  btn.button('reset');
                }, 3000)
              });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::admin.login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  286 => 99,  279 => 95,  274 => 94,  260 => 91,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  210 => 72,  195 => 67,  187 => 63,  181 => 60,  167 => 54,  137 => 42,  124 => 37,  97 => 27,  69 => 16,  53 => 55,  229 => 76,  221 => 74,  209 => 69,  203 => 66,  197 => 62,  174 => 54,  166 => 51,  142 => 44,  117 => 35,  62 => 16,  227 => 74,  223 => 73,  219 => 72,  213 => 68,  207 => 71,  190 => 59,  182 => 56,  168 => 51,  150 => 45,  110 => 31,  129 => 39,  87 => 28,  49 => 11,  134 => 46,  86 => 25,  77 => 24,  164 => 60,  148 => 53,  128 => 35,  199 => 69,  179 => 56,  169 => 52,  161 => 63,  107 => 33,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 51,  284 => 36,  280 => 35,  272 => 33,  258 => 25,  254 => 24,  240 => 13,  235 => 12,  232 => 11,  226 => 78,  217 => 74,  200 => 136,  175 => 65,  173 => 53,  170 => 55,  156 => 49,  125 => 34,  99 => 31,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 34,  273 => 85,  270 => 84,  268 => 93,  263 => 80,  249 => 88,  245 => 87,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 83,  198 => 63,  185 => 62,  183 => 57,  177 => 58,  160 => 49,  112 => 38,  82 => 27,  65 => 11,  38 => 6,  144 => 44,  141 => 43,  135 => 41,  126 => 45,  109 => 36,  103 => 35,  67 => 18,  61 => 17,  47 => 30,  91 => 29,  84 => 21,  94 => 39,  88 => 22,  59 => 5,  28 => 2,  225 => 75,  216 => 90,  212 => 88,  205 => 70,  201 => 64,  196 => 61,  194 => 62,  191 => 65,  189 => 77,  186 => 127,  180 => 119,  172 => 67,  159 => 50,  154 => 48,  147 => 46,  132 => 46,  127 => 39,  121 => 36,  118 => 39,  114 => 31,  104 => 89,  100 => 25,  78 => 42,  75 => 23,  71 => 19,  34 => 6,  105 => 41,  93 => 26,  79 => 32,  76 => 67,  72 => 14,  68 => 12,  58 => 31,  24 => 1,  27 => 6,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 57,  152 => 61,  149 => 52,  145 => 45,  139 => 43,  131 => 40,  123 => 39,  120 => 37,  115 => 43,  106 => 29,  101 => 28,  96 => 24,  83 => 27,  80 => 24,  74 => 66,  66 => 17,  55 => 12,  52 => 11,  50 => 34,  43 => 8,  41 => 27,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 53,  165 => 50,  162 => 57,  157 => 56,  153 => 46,  151 => 46,  143 => 44,  138 => 42,  136 => 42,  133 => 93,  130 => 40,  122 => 38,  119 => 32,  116 => 35,  111 => 30,  108 => 34,  102 => 40,  98 => 39,  95 => 34,  92 => 23,  89 => 29,  85 => 24,  81 => 26,  73 => 13,  64 => 17,  60 => 23,  57 => 17,  54 => 11,  51 => 13,  48 => 10,  45 => 29,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
