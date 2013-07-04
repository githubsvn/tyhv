<?php

/* SMAdminBundle:User:edit.html.twig */
class __TwigTemplate_e9352ce8331d0ea04b03bc0f2f65f9f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>User edit</h2>

<form action=\"";
        // line 5
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_update", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_edit_form_, 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "username"), 'errors');
        echo "
                ";
        // line 11
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "username"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fullname", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 17
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "fullname"), 'errors');
        echo "
                ";
        // line 18
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "fullname"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Current Password", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 24
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "currentPassword"), 'errors');
        echo "
                ";
        // line 25
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "currentPassword"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 31
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_edit_form_, "password"), "password"), 'errors');
        echo "
                ";
        // line 32
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_edit_form_, "password"), "password"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Repeat Password", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 38
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_edit_form_, "password"), "confirm"), 'errors');
        echo "
                ";
        // line 39
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_edit_form_, "password"), "confirm"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 45
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "email"), 'errors');
        echo "
                ";
        // line 46
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "email"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Roles", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 52
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "role_collection"), 'errors');
        echo "
                ";
        // line 53
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "role_collection"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Group", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 59
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "group"), 'errors');
        echo "
                ";
        // line 60
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "group"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-actions\">
            ";
        // line 64
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a class=\"btn\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
        </div>

    </fieldset>

</form>


";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 66,  181 => 60,  135 => 43,  127 => 39,  122 => 38,  86 => 24,  73 => 18,  55 => 11,  227 => 83,  221 => 81,  107 => 49,  67 => 36,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 106,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 81,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 67,  332 => 66,  322 => 61,  314 => 59,  287 => 52,  284 => 51,  278 => 36,  274 => 35,  270 => 34,  266 => 33,  262 => 32,  252 => 25,  211 => 143,  195 => 68,  193 => 121,  187 => 118,  184 => 117,  182 => 104,  164 => 97,  161 => 96,  140 => 45,  126 => 90,  106 => 89,  103 => 88,  100 => 87,  93 => 85,  74 => 40,  68 => 17,  51 => 39,  333 => 100,  327 => 96,  324 => 95,  320 => 94,  317 => 93,  312 => 90,  306 => 86,  303 => 57,  299 => 55,  296 => 54,  291 => 80,  277 => 79,  273 => 77,  258 => 75,  248 => 24,  245 => 72,  239 => 70,  234 => 13,  226 => 11,  216 => 62,  202 => 61,  199 => 69,  192 => 67,  165 => 52,  156 => 50,  134 => 47,  131 => 46,  120 => 41,  115 => 35,  82 => 73,  76 => 67,  61 => 12,  54 => 14,  171 => 57,  163 => 53,  159 => 53,  152 => 50,  138 => 49,  123 => 42,  117 => 36,  111 => 34,  101 => 34,  98 => 33,  83 => 24,  75 => 20,  71 => 65,  64 => 16,  43 => 7,  36 => 12,  104 => 31,  80 => 23,  63 => 15,  58 => 12,  40 => 6,  24 => 2,  94 => 27,  88 => 24,  48 => 38,  39 => 7,  35 => 5,  31 => 3,  21 => 2,  46 => 11,  29 => 3,  32 => 4,  250 => 96,  240 => 90,  236 => 88,  229 => 12,  225 => 83,  220 => 5,  218 => 79,  215 => 78,  212 => 76,  209 => 136,  200 => 130,  194 => 65,  179 => 103,  176 => 59,  173 => 62,  166 => 60,  162 => 51,  157 => 55,  155 => 51,  151 => 48,  148 => 47,  145 => 46,  139 => 45,  128 => 43,  114 => 20,  109 => 32,  87 => 28,  84 => 43,  79 => 42,  65 => 14,  34 => 5,  26 => 6,  125 => 52,  118 => 36,  110 => 20,  97 => 45,  92 => 17,  89 => 28,  85 => 23,  69 => 17,  28 => 2,  57 => 10,  50 => 10,  47 => 7,  38 => 6,  27 => 6,  22 => 2,  25 => 3,  19 => 1,  203 => 72,  197 => 66,  189 => 64,  183 => 63,  180 => 63,  174 => 100,  170 => 61,  167 => 98,  158 => 52,  153 => 50,  150 => 44,  147 => 95,  144 => 42,  136 => 37,  133 => 44,  130 => 91,  124 => 32,  121 => 31,  113 => 50,  108 => 33,  105 => 19,  102 => 48,  99 => 29,  95 => 24,  91 => 25,  81 => 22,  70 => 15,  66 => 51,  62 => 22,  59 => 31,  56 => 12,  52 => 10,  49 => 9,  45 => 8,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
