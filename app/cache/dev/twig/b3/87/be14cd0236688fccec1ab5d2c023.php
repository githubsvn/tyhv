<?php

/* SMAdminBundle:MediaCategory:new.html.twig */
class __TwigTemplate_b387be14cd0236688fccec1ab5d2c023 extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media Category Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 27
        $context["isActive"] = 1;
        // line 28
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 29
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 30
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 32
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 34
            echo "                      ";
            $context["isActive"] = 2;
            // line 35
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 38
        $context["isActive"] = 1;
        // line 39
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 40
            echo "                    ";
            $context["currentAL"] = null;
            // line 41
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "mediacategory_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["mediacategoryLanguage"]) {
                // line 42
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "mediacategoryLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 43
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "mediacategoryLanguage");
                    // line 44
                    echo "                        ";
                }
                // line 45
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediacategoryLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 47
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 49
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 51
            echo "                            <fieldset>
                                ";
            // line 52
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 53
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 56
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 57
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 58
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 60
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 62
                echo "                                    </div>
                                </div>

                                ";
            }
            // line 66
            echo "                            </fieldset>
                        </div>
                    ";
            // line 68
            $context["isActive"] = 2;
            // line 69
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 76
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
        return "SMAdminBundle:MediaCategory:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 76,  221 => 74,  209 => 69,  203 => 66,  197 => 62,  174 => 54,  166 => 51,  142 => 44,  117 => 36,  62 => 16,  227 => 74,  223 => 73,  219 => 72,  213 => 68,  207 => 68,  190 => 59,  182 => 56,  168 => 51,  150 => 45,  110 => 34,  129 => 46,  87 => 28,  49 => 19,  134 => 46,  86 => 25,  77 => 24,  164 => 60,  148 => 53,  128 => 40,  199 => 81,  179 => 56,  169 => 52,  161 => 63,  107 => 33,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  320 => 66,  310 => 61,  303 => 59,  294 => 57,  290 => 55,  278 => 52,  275 => 51,  269 => 36,  265 => 35,  261 => 34,  257 => 33,  253 => 32,  243 => 25,  239 => 24,  217 => 11,  202 => 143,  200 => 136,  175 => 65,  173 => 53,  170 => 52,  156 => 56,  125 => 43,  99 => 31,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 54,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 12,  215 => 70,  211 => 5,  204 => 83,  198 => 63,  185 => 58,  183 => 57,  177 => 58,  160 => 49,  112 => 38,  82 => 27,  65 => 16,  38 => 6,  144 => 44,  141 => 43,  135 => 41,  126 => 45,  109 => 36,  103 => 35,  67 => 18,  61 => 15,  47 => 12,  91 => 29,  84 => 28,  94 => 39,  88 => 28,  59 => 15,  28 => 2,  225 => 75,  216 => 90,  212 => 88,  205 => 66,  201 => 64,  196 => 61,  194 => 62,  191 => 60,  189 => 77,  186 => 127,  180 => 119,  172 => 67,  159 => 48,  154 => 47,  147 => 59,  132 => 46,  127 => 39,  121 => 38,  118 => 39,  114 => 38,  104 => 89,  100 => 32,  78 => 42,  75 => 31,  71 => 19,  34 => 6,  105 => 41,  93 => 29,  79 => 32,  76 => 67,  72 => 14,  68 => 18,  58 => 31,  24 => 3,  27 => 6,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 57,  152 => 61,  149 => 52,  145 => 45,  139 => 43,  131 => 41,  123 => 39,  120 => 37,  115 => 43,  106 => 35,  101 => 88,  96 => 31,  83 => 27,  80 => 24,  74 => 66,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 55,  171 => 53,  165 => 50,  162 => 57,  157 => 56,  153 => 46,  151 => 46,  143 => 54,  138 => 42,  136 => 42,  133 => 93,  130 => 40,  122 => 38,  119 => 44,  116 => 35,  111 => 35,  108 => 34,  102 => 40,  98 => 39,  95 => 34,  92 => 30,  89 => 29,  85 => 24,  81 => 26,  73 => 40,  64 => 17,  60 => 23,  57 => 16,  54 => 11,  51 => 11,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 7,);
    }
}
