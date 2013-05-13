<?php

/* SMAdminBundle::admin.html.twig */
class __TwigTemplate_2e1dafe46d8202ca090b51b2739ec903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'logo' => array($this, 'block_logo'),
            'profile' => array($this, 'block_profile'),
            'topbar_before_nav' => array($this, 'block_topbar_before_nav'),
            'topbar_nav' => array($this, 'block_topbar_nav'),
            'topbar_after_nav' => array($this, 'block_topbar_after_nav'),
            'grouplabel' => array($this, 'block_grouplabel'),
            'notice' => array($this, 'block_notice'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
        // line 36
        echo "
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>

        </head>
    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    ";
        // line 49
        $this->displayBlock('logo', $context, $blocks);
        // line 52
        echo "                    ";
        $this->displayBlock('profile', $context, $blocks);
        // line 63
        echo "                    <ul class=\"nav\">
                        ";
        // line 64
        $this->displayBlock('topbar_before_nav', $context, $blocks);
        // line 65
        echo "                        ";
        $this->displayBlock('topbar_nav', $context, $blocks);
        // line 70
        echo "                        ";
        $this->displayBlock('topbar_after_nav', $context, $blocks);
        // line 71
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
        // line 78
        $this->displayBlock('grouplabel', $context, $blocks);
        // line 83
        echo "                    ";
        if (((array_key_exists("_breadcrumb", $context) && (!twig_test_empty($this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 84
            echo "                        <ul class=\"breadcrumb\">
                            ";
            // line 85
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 86
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 87
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                        // line 88
                        echo "                                        ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 89
                            echo "                                            <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "uri"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</a><span class=\"divider\">/</span></li>
                                        ";
                        } else {
                            // line 91
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 93
                        echo "                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 94
                    echo "                                ";
                }
                // line 95
                echo "                            ";
            } else {
                // line 96
                echo "                                ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                            ";
            }
            // line 98
            echo "                        </ul>
                        <hr/>
                    ";
        }
        // line 101
        echo "
                    ";
        // line 102
        $this->displayBlock('notice', $context, $blocks);
        // line 115
        echo "
                    ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "                </div>
            </div>
            ";
        // line 119
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </div>
        <!-- Le javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "        ";
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administrator";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap.css"), "html", null, true);
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/css/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <!--<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js') }}\"></script>-->
            <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        ";
    }

    // line 49
    public function block_logo($context, array $blocks = array())
    {
        // line 50
        echo "                    <a class=\"brand\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_admin_home"), "html", null, true);
        echo "\">Welcome</a>
                    ";
    }

    // line 52
    public function block_profile($context, array $blocks = array())
    {
        // line 53
        echo "                    <div class=\"btn-group pull-right\">
                        <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:void(0)\">
                            <i class=\"icon-user icon-white\"></i>";
        // line 55
        if ($this->getAttribute($this->getContext($context, "app", true), "user", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "fullname"), "html", null, true);
            echo " ";
        }
        echo "<span class=\"caret\"></span> </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"))), "html", null, true);
        echo "\">Profile</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_admin_logout"), "html", null, true);
        echo "\">Sign Out</a></li>
                        </ul>
                    </div>
                    ";
    }

    // line 64
    public function block_topbar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 65
    public function block_topbar_nav($context, array $blocks = array())
    {
        // line 66
        echo "                            ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 67
            echo "                                ";
            echo $this->env->getExtension('actions')->renderAction("SMAdminBundle:Default:menu", array(), array());
            // line 68
            echo "                            ";
        }
        // line 69
        echo "                        ";
    }

    // line 70
    public function block_topbar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 78
    public function block_grouplabel($context, array $blocks = array())
    {
        // line 79
        echo "                        ";
        if (array_key_exists("_grouplabel", $context)) {
            // line 80
            echo "                        <h1>";
            echo twig_escape_filter($this->env, $this->getContext($context, "_grouplabel"), "html", null, true);
            echo "</h1>
                        ";
        }
        // line 82
        echo "                    ";
    }

    // line 102
    public function block_notice($context, array $blocks = array())
    {
        // line 103
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 104
            echo "                            ";
            $context["session_var"] = ("sm_flash_" . $this->getContext($context, "notice_level"));
            // line 105
            echo "                            ";
            $context["session_flashbag"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => $this->getContext($context, "session_var")), "method");
            // line 106
            echo "                            ";
            if ($this->getContext($context, "session_flashbag")) {
                // line 107
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "session_flashbag"));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 108
                    echo "                                <div class=\"alert ";
                    echo twig_escape_filter($this->env, ("alert-" . $this->getContext($context, "notice_level")), "html", null, true);
                    echo "\">
                                    ";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "flash"), array(), "SMAdminBundle"), "html", null, true);
                    echo "
                                </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 112
                echo "                            ";
            }
            // line 113
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 114
        echo "                    ";
    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
    }

    // line 119
    public function block_footer($context, array $blocks = array())
    {
        // line 120
        echo "            <hr/>
            <footer>
                <p>&copy; Admin Panel 2013</p>
            </footer>
            ";
    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        // line 130
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/prettify.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/admin/js/common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/static/admin/js/twig.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 108,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  345 => 102,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 49,  256 => 34,  252 => 33,  248 => 32,  244 => 31,  240 => 30,  226 => 22,  209 => 11,  203 => 5,  192 => 129,  175 => 115,  173 => 102,  170 => 101,  156 => 95,  125 => 89,  99 => 85,  301 => 64,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 23,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 71,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  91 => 78,  84 => 28,  94 => 39,  88 => 27,  59 => 22,  28 => 3,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 80,  194 => 135,  191 => 78,  189 => 77,  186 => 125,  180 => 117,  172 => 67,  159 => 96,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 87,  100 => 33,  78 => 24,  75 => 23,  71 => 63,  34 => 11,  105 => 24,  93 => 83,  79 => 70,  76 => 65,  72 => 14,  68 => 52,  58 => 12,  24 => 3,  27 => 4,  21 => 2,  44 => 12,  31 => 1,  26 => 6,  25 => 4,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 93,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 86,  96 => 84,  83 => 18,  80 => 24,  74 => 64,  66 => 49,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 3,  184 => 119,  178 => 116,  171 => 62,  165 => 98,  162 => 57,  157 => 56,  153 => 94,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 91,  130 => 47,  122 => 88,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 37,  48 => 36,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
