<?php

/* SMAdminBundle:MediaCategory:edit.html.twig */
class __TwigTemplate_1670a49bfdbef461dba104959600cfa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media Category Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h1>

<form action=\"";
        // line 5
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "parent"), 'errors');
        echo "
                ";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'errors');
        echo "
                ";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 26
        $context["isActive"] = 1;
        // line 27
        echo "                  ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 28
            echo "                      ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 29
                echo "                          <li class=\"active\"><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 31
                echo "                          <li><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 33
            echo "                      ";
            $context["isActive"] = 2;
            // line 34
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 37
        $context["isActive"] = 1;
        // line 38
        echo "                ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 39
            echo "                    ";
            $context["currentAL"] = null;
            // line 40
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "mediacategory_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 41
                echo "                        ";
                if (isset($context["ctLanguage"])) { $_ctLanguage_ = $context["ctLanguage"]; } else { $_ctLanguage_ = null; }
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_ctLanguage_, "vars"), "value"), "language"), "id") == $this->getAttribute($_lang_, "id"))) {
                    // line 42
                    echo "                            ";
                    if (isset($context["ctLanguage"])) { $_ctLanguage_ = $context["ctLanguage"]; } else { $_ctLanguage_ = null; }
                    $context["currentAL"] = $_ctLanguage_;
                    // line 43
                    echo "                        ";
                }
                // line 44
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 46
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 48
                echo "                        <div class=\"tab-pane\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 50
            echo "                            <fieldset>
                                ";
            // line 51
            if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
            if ((!(null === $_currentAL_))) {
                // line 52
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 55
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'errors');
                echo "
                                        ";
                // line 56
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 57
                    echo "                                            ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 59
                    echo "                                            ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget');
                    echo "
                                        ";
                }
                // line 61
                echo "                                    </div>
                                </div>
                                ";
            }
            // line 64
            echo "                            </fieldset>
                        </div>
                    ";
            // line 66
            $context["isActive"] = 2;
            // line 67
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 72
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:MediaCategory:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 74,  233 => 67,  231 => 66,  222 => 61,  208 => 57,  204 => 56,  191 => 52,  188 => 51,  185 => 50,  178 => 48,  149 => 41,  143 => 40,  132 => 37,  96 => 29,  169 => 56,  137 => 46,  129 => 45,  119 => 33,  154 => 42,  146 => 46,  141 => 45,  198 => 66,  181 => 60,  135 => 43,  127 => 39,  122 => 34,  86 => 24,  73 => 18,  55 => 22,  227 => 64,  221 => 81,  107 => 49,  67 => 29,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 106,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 81,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 67,  332 => 66,  322 => 61,  314 => 59,  287 => 52,  284 => 51,  278 => 36,  274 => 35,  270 => 34,  266 => 33,  262 => 32,  252 => 25,  211 => 143,  195 => 68,  193 => 121,  187 => 118,  184 => 117,  182 => 104,  164 => 97,  161 => 44,  140 => 39,  126 => 90,  106 => 41,  103 => 40,  100 => 29,  93 => 85,  74 => 21,  68 => 17,  51 => 10,  333 => 100,  327 => 96,  324 => 95,  320 => 94,  317 => 93,  312 => 90,  306 => 86,  303 => 57,  299 => 55,  296 => 54,  291 => 80,  277 => 79,  273 => 77,  258 => 75,  248 => 24,  245 => 72,  239 => 68,  234 => 13,  226 => 11,  216 => 62,  202 => 61,  199 => 55,  192 => 67,  165 => 52,  156 => 50,  134 => 38,  131 => 46,  120 => 41,  115 => 35,  82 => 22,  76 => 67,  61 => 12,  54 => 14,  171 => 46,  163 => 52,  159 => 51,  152 => 50,  138 => 49,  123 => 38,  117 => 36,  111 => 34,  101 => 34,  98 => 39,  83 => 33,  75 => 18,  71 => 30,  64 => 15,  43 => 7,  36 => 12,  104 => 31,  80 => 23,  63 => 17,  58 => 12,  40 => 6,  24 => 2,  94 => 27,  88 => 24,  48 => 12,  39 => 7,  35 => 5,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 73,  240 => 90,  236 => 88,  229 => 12,  225 => 83,  220 => 5,  218 => 79,  215 => 59,  212 => 76,  209 => 136,  200 => 130,  194 => 53,  179 => 103,  176 => 59,  173 => 62,  166 => 60,  162 => 51,  157 => 51,  155 => 51,  151 => 48,  148 => 47,  145 => 47,  139 => 45,  128 => 35,  114 => 36,  109 => 31,  87 => 26,  84 => 43,  79 => 32,  65 => 15,  34 => 5,  26 => 6,  125 => 52,  118 => 36,  110 => 35,  97 => 45,  92 => 28,  89 => 27,  85 => 25,  69 => 17,  28 => 2,  57 => 11,  50 => 10,  47 => 8,  38 => 6,  27 => 6,  22 => 2,  25 => 3,  19 => 1,  203 => 72,  197 => 66,  189 => 64,  183 => 63,  180 => 63,  174 => 100,  170 => 61,  167 => 45,  158 => 43,  153 => 50,  150 => 44,  147 => 95,  144 => 42,  136 => 43,  133 => 44,  130 => 91,  124 => 39,  121 => 31,  113 => 50,  108 => 33,  105 => 34,  102 => 48,  99 => 29,  95 => 28,  91 => 35,  81 => 24,  70 => 17,  66 => 51,  62 => 22,  59 => 16,  56 => 11,  52 => 10,  49 => 19,  45 => 8,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
