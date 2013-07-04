<?php

/* SMAdminBundle:Category:edit.html.twig */
class __TwigTemplate_a15289102baf14afa8b09007d8be57f4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Category Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h1>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 28
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 29
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 31
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 39
            echo "                    ";
            $context["currentAL"] = null;
            // line 40
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "category_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 41
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ctLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 42
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "ctLanguage");
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
            if (($this->getContext($context, "isActive") == 1)) {
                // line 46
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 48
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 50
            echo "                            <fieldset>
                                ";
            // line 51
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 52
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 55
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 56
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 57
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 59
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  327 => 141,  317 => 136,  311 => 135,  345 => 153,  331 => 142,  323 => 140,  319 => 143,  308 => 138,  302 => 136,  288 => 131,  256 => 113,  359 => 131,  352 => 127,  333 => 123,  325 => 146,  322 => 120,  314 => 140,  280 => 103,  433 => 166,  425 => 164,  419 => 160,  411 => 158,  407 => 156,  401 => 152,  395 => 150,  389 => 148,  383 => 146,  366 => 138,  349 => 132,  321 => 121,  315 => 117,  309 => 134,  442 => 172,  438 => 171,  434 => 170,  428 => 166,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  396 => 153,  392 => 152,  387 => 147,  369 => 142,  363 => 140,  358 => 135,  353 => 135,  347 => 126,  341 => 152,  339 => 130,  330 => 124,  324 => 123,  296 => 134,  293 => 126,  266 => 104,  258 => 94,  344 => 129,  337 => 151,  318 => 119,  307 => 116,  299 => 128,  305 => 132,  291 => 132,  283 => 129,  271 => 118,  262 => 115,  250 => 100,  316 => 119,  312 => 119,  306 => 115,  300 => 135,  277 => 127,  254 => 97,  248 => 119,  242 => 89,  240 => 117,  236 => 87,  208 => 70,  188 => 97,  113 => 57,  56 => 21,  304 => 114,  297 => 111,  259 => 122,  244 => 110,  235 => 91,  228 => 113,  193 => 65,  90 => 37,  285 => 123,  281 => 122,  267 => 95,  251 => 92,  246 => 95,  234 => 114,  192 => 72,  298 => 114,  284 => 106,  272 => 101,  264 => 97,  255 => 101,  247 => 111,  238 => 108,  232 => 80,  218 => 87,  214 => 80,  206 => 107,  158 => 57,  146 => 79,  40 => 16,  286 => 99,  279 => 95,  274 => 94,  260 => 91,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  226 => 78,  210 => 72,  195 => 67,  187 => 63,  181 => 60,  167 => 54,  137 => 42,  124 => 37,  97 => 43,  69 => 16,  53 => 11,  229 => 84,  221 => 83,  209 => 108,  203 => 75,  197 => 74,  174 => 64,  166 => 59,  142 => 51,  117 => 35,  62 => 26,  227 => 74,  223 => 73,  219 => 72,  213 => 68,  207 => 67,  190 => 59,  182 => 56,  168 => 51,  150 => 45,  110 => 34,  129 => 39,  87 => 38,  49 => 16,  134 => 52,  86 => 25,  77 => 22,  164 => 82,  148 => 75,  128 => 46,  199 => 69,  179 => 94,  169 => 84,  161 => 63,  107 => 33,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 165,  421 => 122,  418 => 121,  413 => 159,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 146,  378 => 144,  375 => 144,  372 => 140,  367 => 141,  364 => 104,  360 => 136,  354 => 134,  351 => 81,  348 => 80,  342 => 72,  338 => 127,  335 => 129,  332 => 125,  329 => 68,  326 => 123,  320 => 120,  310 => 117,  303 => 113,  294 => 110,  290 => 106,  278 => 102,  275 => 102,  269 => 101,  265 => 99,  261 => 34,  257 => 98,  253 => 112,  243 => 90,  239 => 93,  217 => 74,  202 => 98,  200 => 82,  175 => 69,  173 => 53,  170 => 52,  156 => 49,  125 => 64,  99 => 31,  301 => 112,  295 => 113,  292 => 109,  289 => 108,  287 => 124,  282 => 104,  276 => 120,  273 => 119,  270 => 106,  268 => 93,  263 => 100,  249 => 88,  245 => 87,  230 => 106,  222 => 82,  220 => 76,  215 => 78,  211 => 77,  204 => 70,  198 => 63,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 14,  38 => 6,  144 => 44,  141 => 43,  135 => 41,  126 => 50,  109 => 57,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 29,  84 => 19,  94 => 38,  88 => 28,  59 => 13,  28 => 2,  225 => 105,  216 => 90,  212 => 88,  205 => 66,  201 => 64,  196 => 61,  194 => 96,  191 => 65,  189 => 74,  186 => 94,  180 => 71,  172 => 66,  159 => 48,  154 => 48,  147 => 46,  132 => 68,  127 => 39,  121 => 36,  118 => 42,  114 => 37,  104 => 41,  100 => 54,  78 => 23,  75 => 30,  71 => 19,  34 => 11,  105 => 45,  93 => 42,  79 => 36,  76 => 35,  72 => 34,  68 => 19,  58 => 25,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 18,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 82,  152 => 61,  149 => 58,  145 => 45,  139 => 75,  131 => 40,  123 => 68,  120 => 37,  115 => 39,  106 => 30,  101 => 44,  96 => 32,  83 => 27,  80 => 39,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 55,  171 => 89,  165 => 50,  162 => 86,  157 => 78,  153 => 46,  151 => 81,  143 => 44,  138 => 42,  136 => 49,  133 => 51,  130 => 40,  122 => 38,  119 => 67,  116 => 35,  111 => 37,  108 => 36,  102 => 33,  98 => 32,  95 => 41,  92 => 45,  89 => 28,  85 => 37,  81 => 26,  73 => 17,  64 => 31,  60 => 22,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
