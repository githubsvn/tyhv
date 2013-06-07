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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/css/bootstrap-responsive.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("static/admin/js/bootstrap.min.js"), "html", null, true);
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
        return array (  53 => 55,  40 => 7,  124 => 46,  117 => 44,  110 => 42,  90 => 37,  56 => 23,  69 => 17,  129 => 46,  87 => 28,  49 => 11,  134 => 46,  86 => 36,  179 => 66,  164 => 60,  148 => 53,  128 => 35,  113 => 31,  107 => 36,  77 => 24,  62 => 19,  23 => 2,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 121,  405 => 118,  401 => 116,  395 => 115,  392 => 114,  383 => 111,  378 => 110,  373 => 109,  370 => 108,  367 => 107,  364 => 106,  359 => 105,  356 => 104,  352 => 84,  346 => 82,  343 => 81,  340 => 80,  334 => 72,  330 => 71,  327 => 70,  324 => 69,  321 => 68,  318 => 67,  312 => 66,  302 => 61,  286 => 57,  279 => 54,  267 => 51,  261 => 36,  257 => 35,  253 => 34,  235 => 25,  231 => 24,  217 => 13,  209 => 11,  203 => 5,  192 => 131,  175 => 65,  173 => 104,  170 => 63,  156 => 56,  125 => 34,  99 => 39,  301 => 100,  295 => 59,  292 => 95,  289 => 94,  287 => 93,  282 => 55,  276 => 86,  273 => 85,  270 => 52,  268 => 83,  263 => 80,  249 => 33,  245 => 32,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 59,  112 => 38,  82 => 24,  65 => 11,  38 => 6,  144 => 52,  141 => 54,  135 => 47,  126 => 45,  109 => 36,  103 => 40,  67 => 29,  61 => 17,  47 => 30,  91 => 29,  84 => 21,  94 => 39,  88 => 22,  59 => 5,  28 => 2,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 71,  194 => 138,  191 => 78,  189 => 67,  186 => 127,  180 => 119,  172 => 67,  159 => 60,  154 => 59,  147 => 57,  132 => 46,  127 => 35,  121 => 34,  118 => 39,  114 => 31,  104 => 89,  100 => 25,  78 => 24,  75 => 23,  71 => 30,  34 => 6,  105 => 41,  93 => 38,  79 => 32,  76 => 67,  72 => 14,  68 => 12,  58 => 12,  24 => 1,  27 => 4,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 14,  22 => 2,  163 => 63,  155 => 59,  152 => 49,  149 => 52,  145 => 51,  139 => 50,  131 => 42,  123 => 45,  120 => 46,  115 => 43,  106 => 29,  101 => 88,  96 => 24,  83 => 33,  80 => 24,  74 => 66,  66 => 17,  55 => 22,  52 => 11,  50 => 34,  43 => 8,  41 => 27,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 66,  178 => 65,  171 => 64,  165 => 53,  162 => 61,  157 => 48,  153 => 96,  151 => 58,  143 => 55,  138 => 39,  136 => 50,  133 => 93,  130 => 45,  122 => 90,  119 => 32,  116 => 39,  111 => 30,  108 => 37,  102 => 40,  98 => 39,  95 => 34,  92 => 23,  89 => 19,  85 => 24,  81 => 25,  73 => 13,  64 => 17,  60 => 23,  57 => 17,  54 => 11,  51 => 13,  48 => 10,  45 => 29,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
