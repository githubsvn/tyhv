<?php

/* SMAdminBundle:Branch:edit.html.twig */
class __TwigTemplate_9d7f80fe27a9b3ed115b0feb46d37050 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "branch_languages"));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Branch:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 138,  377 => 134,  343 => 126,  329 => 121,  374 => 144,  370 => 143,  348 => 134,  336 => 128,  313 => 118,  307 => 116,  391 => 153,  373 => 146,  351 => 136,  340 => 129,  334 => 128,  328 => 126,  20 => 1,  140 => 42,  327 => 141,  317 => 136,  311 => 117,  337 => 151,  319 => 120,  300 => 135,  277 => 127,  253 => 90,  188 => 97,  359 => 131,  352 => 136,  333 => 123,  322 => 124,  314 => 140,  299 => 113,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 154,  389 => 148,  383 => 146,  378 => 144,  372 => 133,  360 => 138,  354 => 137,  349 => 135,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 113,  303 => 109,  257 => 91,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 148,  367 => 141,  358 => 130,  330 => 124,  324 => 117,  310 => 117,  306 => 118,  248 => 101,  345 => 134,  339 => 125,  331 => 122,  323 => 140,  320 => 123,  288 => 109,  266 => 104,  291 => 113,  283 => 101,  271 => 118,  262 => 115,  239 => 95,  208 => 70,  316 => 122,  312 => 119,  308 => 111,  296 => 134,  265 => 106,  261 => 94,  256 => 100,  250 => 100,  236 => 84,  224 => 81,  176 => 63,  113 => 57,  202 => 70,  56 => 11,  304 => 114,  297 => 108,  259 => 93,  244 => 110,  228 => 82,  193 => 74,  90 => 20,  285 => 102,  281 => 122,  275 => 98,  269 => 101,  267 => 96,  251 => 90,  246 => 95,  234 => 114,  192 => 63,  298 => 103,  294 => 111,  278 => 102,  264 => 102,  255 => 101,  247 => 89,  243 => 86,  238 => 108,  218 => 74,  214 => 74,  206 => 70,  158 => 49,  146 => 79,  40 => 16,  286 => 99,  279 => 106,  274 => 94,  260 => 105,  252 => 89,  241 => 86,  237 => 98,  233 => 83,  231 => 82,  210 => 87,  195 => 77,  187 => 75,  181 => 65,  167 => 54,  137 => 42,  124 => 37,  97 => 27,  69 => 31,  53 => 11,  229 => 96,  221 => 94,  209 => 72,  203 => 66,  197 => 78,  174 => 63,  166 => 61,  142 => 55,  117 => 49,  62 => 27,  227 => 74,  223 => 73,  219 => 72,  213 => 68,  207 => 67,  190 => 59,  182 => 56,  168 => 51,  150 => 45,  110 => 34,  129 => 39,  87 => 38,  49 => 16,  134 => 52,  86 => 39,  77 => 36,  164 => 64,  148 => 45,  128 => 40,  199 => 69,  179 => 56,  169 => 66,  161 => 61,  107 => 33,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 152,  382 => 105,  379 => 104,  375 => 147,  369 => 144,  366 => 132,  363 => 140,  357 => 138,  353 => 135,  350 => 128,  347 => 127,  344 => 129,  341 => 152,  335 => 124,  325 => 122,  318 => 119,  309 => 134,  305 => 110,  302 => 114,  293 => 106,  290 => 106,  284 => 106,  280 => 97,  272 => 95,  258 => 104,  254 => 91,  240 => 85,  235 => 91,  232 => 83,  226 => 95,  217 => 89,  200 => 82,  175 => 69,  173 => 53,  170 => 52,  156 => 59,  125 => 64,  99 => 31,  301 => 112,  295 => 96,  292 => 109,  289 => 104,  287 => 124,  282 => 107,  276 => 99,  273 => 98,  270 => 104,  268 => 107,  263 => 100,  249 => 98,  245 => 96,  230 => 106,  222 => 82,  220 => 90,  215 => 70,  211 => 77,  204 => 73,  198 => 66,  185 => 62,  183 => 74,  177 => 58,  160 => 49,  112 => 39,  82 => 27,  65 => 32,  38 => 6,  144 => 44,  141 => 43,  135 => 41,  126 => 50,  109 => 56,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 29,  84 => 26,  94 => 38,  88 => 28,  59 => 29,  28 => 2,  225 => 75,  216 => 73,  212 => 88,  205 => 66,  201 => 64,  196 => 61,  194 => 96,  191 => 76,  189 => 62,  186 => 94,  180 => 71,  172 => 66,  159 => 48,  154 => 48,  147 => 56,  132 => 68,  127 => 39,  121 => 50,  118 => 42,  114 => 37,  104 => 29,  100 => 43,  78 => 37,  75 => 30,  71 => 19,  34 => 11,  105 => 35,  93 => 46,  79 => 24,  76 => 35,  72 => 34,  68 => 19,  58 => 26,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 18,  63 => 17,  46 => 9,  22 => 2,  163 => 60,  155 => 82,  152 => 58,  149 => 58,  145 => 45,  139 => 54,  131 => 52,  123 => 39,  120 => 37,  115 => 39,  106 => 30,  101 => 51,  96 => 42,  83 => 27,  80 => 37,  74 => 36,  66 => 17,  55 => 23,  52 => 10,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 55,  171 => 53,  165 => 50,  162 => 86,  157 => 59,  153 => 46,  151 => 56,  143 => 44,  138 => 42,  136 => 42,  133 => 52,  130 => 40,  122 => 38,  119 => 67,  116 => 35,  111 => 45,  108 => 34,  102 => 43,  98 => 41,  95 => 41,  92 => 40,  89 => 29,  85 => 37,  81 => 26,  73 => 35,  64 => 31,  60 => 22,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
