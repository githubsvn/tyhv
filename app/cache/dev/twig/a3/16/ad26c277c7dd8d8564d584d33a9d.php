<?php

/* SMAdminBundle:CompanyType:edit.html.twig */
class __TwigTemplate_a316ad26c277c7dd8d8564d584d33a9d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Type Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h1>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 19
        $context["isActive"] = 1;
        // line 20
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 21
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 22
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 24
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 26
            echo "                      ";
            $context["isActive"] = 2;
            // line 27
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 30
        $context["isActive"] = 1;
        // line 31
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 32
            echo "                    ";
            $context["currentAL"] = null;
            // line 33
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "companytype_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 34
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ctLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 35
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "ctLanguage");
                    // line 36
                    echo "                        ";
                }
                // line 37
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 39
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 41
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 43
            echo "                            <fieldset>
                                ";
            // line 44
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 45
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 48
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 49
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 50
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 52
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 54
                echo "                                    </div>
                                </div>
                                ";
            }
            // line 57
            echo "                            </fieldset>
                        </div>
                    ";
            // line 59
            $context["isActive"] = 2;
            // line 60
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:CompanyType:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 138,  377 => 134,  343 => 126,  329 => 121,  374 => 144,  370 => 143,  348 => 134,  336 => 128,  313 => 118,  307 => 116,  391 => 153,  373 => 146,  351 => 136,  340 => 129,  334 => 128,  328 => 126,  20 => 1,  140 => 42,  327 => 141,  317 => 136,  311 => 117,  337 => 151,  319 => 120,  300 => 135,  277 => 127,  253 => 90,  188 => 97,  359 => 131,  352 => 136,  333 => 123,  322 => 124,  314 => 140,  299 => 113,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 154,  389 => 148,  383 => 146,  378 => 144,  372 => 133,  360 => 138,  354 => 137,  349 => 135,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 113,  303 => 109,  257 => 91,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 148,  367 => 141,  358 => 130,  330 => 124,  324 => 117,  310 => 117,  306 => 118,  248 => 101,  345 => 134,  339 => 125,  331 => 122,  323 => 140,  320 => 123,  288 => 109,  266 => 104,  291 => 113,  283 => 101,  271 => 118,  262 => 115,  239 => 95,  208 => 70,  316 => 122,  312 => 119,  308 => 111,  296 => 134,  265 => 106,  261 => 94,  256 => 100,  250 => 100,  236 => 84,  224 => 81,  176 => 68,  113 => 57,  202 => 70,  56 => 11,  304 => 114,  297 => 108,  259 => 93,  244 => 110,  228 => 82,  193 => 74,  90 => 37,  285 => 102,  281 => 122,  275 => 98,  269 => 101,  267 => 96,  251 => 90,  246 => 95,  234 => 114,  192 => 63,  298 => 103,  294 => 111,  278 => 102,  264 => 102,  255 => 101,  247 => 89,  243 => 86,  238 => 108,  218 => 74,  214 => 74,  206 => 70,  158 => 49,  146 => 79,  40 => 16,  286 => 99,  279 => 95,  274 => 94,  260 => 91,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  210 => 76,  195 => 67,  187 => 63,  181 => 60,  167 => 54,  137 => 39,  124 => 49,  97 => 33,  69 => 16,  53 => 11,  229 => 76,  221 => 74,  209 => 69,  203 => 65,  197 => 61,  174 => 52,  166 => 49,  142 => 54,  117 => 35,  62 => 16,  227 => 74,  223 => 73,  219 => 72,  213 => 68,  207 => 66,  190 => 59,  182 => 56,  168 => 50,  150 => 45,  110 => 43,  129 => 39,  87 => 38,  49 => 19,  134 => 38,  86 => 36,  77 => 36,  164 => 64,  148 => 45,  128 => 37,  199 => 74,  179 => 56,  169 => 52,  161 => 61,  107 => 33,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 152,  382 => 105,  379 => 104,  375 => 147,  369 => 144,  366 => 132,  363 => 140,  357 => 138,  353 => 135,  350 => 128,  347 => 127,  344 => 129,  341 => 152,  335 => 124,  325 => 122,  318 => 119,  309 => 134,  305 => 110,  302 => 114,  293 => 106,  290 => 106,  284 => 106,  280 => 97,  272 => 95,  258 => 104,  254 => 91,  240 => 85,  235 => 91,  232 => 83,  226 => 78,  217 => 80,  200 => 82,  175 => 69,  173 => 53,  170 => 55,  156 => 49,  125 => 36,  99 => 39,  301 => 112,  295 => 96,  292 => 109,  289 => 104,  287 => 124,  282 => 107,  276 => 99,  273 => 98,  270 => 104,  268 => 93,  263 => 100,  249 => 88,  245 => 87,  230 => 106,  222 => 82,  220 => 90,  215 => 70,  211 => 67,  204 => 73,  198 => 66,  185 => 57,  183 => 70,  177 => 58,  160 => 49,  112 => 39,  82 => 27,  65 => 19,  38 => 6,  144 => 44,  141 => 43,  135 => 41,  126 => 50,  109 => 56,  103 => 40,  67 => 20,  61 => 17,  47 => 12,  91 => 26,  84 => 19,  94 => 27,  88 => 31,  59 => 13,  28 => 2,  225 => 75,  216 => 73,  212 => 88,  205 => 75,  201 => 64,  196 => 61,  194 => 96,  191 => 60,  189 => 59,  186 => 94,  180 => 54,  172 => 67,  159 => 50,  154 => 45,  147 => 46,  132 => 68,  127 => 39,  121 => 36,  118 => 42,  114 => 33,  104 => 30,  100 => 28,  78 => 25,  75 => 22,  71 => 30,  34 => 11,  105 => 35,  93 => 38,  79 => 32,  76 => 35,  72 => 21,  68 => 19,  58 => 26,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 18,  63 => 17,  46 => 9,  22 => 2,  163 => 60,  155 => 82,  152 => 44,  149 => 43,  145 => 45,  139 => 53,  131 => 51,  123 => 39,  120 => 47,  115 => 39,  106 => 31,  101 => 34,  96 => 42,  83 => 24,  80 => 37,  74 => 23,  66 => 31,  55 => 22,  52 => 10,  50 => 10,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 53,  165 => 50,  162 => 48,  157 => 46,  153 => 46,  151 => 46,  143 => 41,  138 => 42,  136 => 42,  133 => 52,  130 => 40,  122 => 35,  119 => 34,  116 => 35,  111 => 32,  108 => 42,  102 => 43,  98 => 41,  95 => 33,  92 => 30,  89 => 28,  85 => 27,  81 => 26,  73 => 17,  64 => 31,  60 => 22,  57 => 16,  54 => 11,  51 => 13,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
