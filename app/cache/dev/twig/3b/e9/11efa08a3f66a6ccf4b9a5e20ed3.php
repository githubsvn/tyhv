<?php

/* SMAdminBundle:Category:new.html.twig */
class __TwigTemplate_3be911efa08a3f66a6ccf4b9a5e20ed3 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Category Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_new"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "category_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["categoryLanguage"]) {
                // line 42
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "categoryLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 43
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "categoryLanguage");
                    // line 44
                    echo "                        ";
                }
                // line 45
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryLanguage'], $context['_parent'], $context['loop']);
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
        return "SMAdminBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  140 => 42,  327 => 141,  317 => 136,  311 => 135,  337 => 151,  319 => 143,  300 => 135,  277 => 127,  253 => 90,  188 => 97,  359 => 131,  352 => 127,  333 => 123,  322 => 120,  314 => 140,  299 => 128,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 117,  303 => 113,  257 => 91,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  330 => 124,  324 => 123,  310 => 117,  306 => 115,  248 => 119,  345 => 153,  339 => 130,  331 => 142,  323 => 140,  320 => 121,  288 => 131,  266 => 104,  291 => 99,  283 => 129,  271 => 118,  262 => 115,  239 => 93,  208 => 70,  316 => 120,  312 => 119,  308 => 138,  296 => 134,  265 => 96,  261 => 92,  256 => 113,  250 => 100,  236 => 87,  224 => 80,  176 => 63,  113 => 32,  202 => 68,  56 => 11,  304 => 114,  297 => 111,  259 => 122,  244 => 110,  228 => 77,  193 => 74,  90 => 20,  285 => 123,  281 => 122,  275 => 98,  269 => 101,  267 => 95,  251 => 92,  246 => 95,  234 => 114,  192 => 63,  298 => 103,  294 => 111,  278 => 102,  264 => 93,  255 => 101,  247 => 111,  243 => 86,  238 => 108,  218 => 74,  214 => 74,  206 => 70,  158 => 49,  146 => 79,  40 => 16,  286 => 98,  279 => 101,  274 => 94,  260 => 95,  252 => 89,  241 => 109,  237 => 81,  233 => 107,  231 => 82,  210 => 72,  195 => 80,  187 => 64,  181 => 58,  167 => 52,  137 => 70,  124 => 37,  97 => 43,  69 => 31,  53 => 14,  229 => 76,  221 => 74,  209 => 69,  203 => 66,  197 => 62,  174 => 54,  166 => 51,  142 => 44,  117 => 36,  62 => 16,  227 => 74,  223 => 73,  219 => 72,  213 => 68,  207 => 68,  190 => 59,  182 => 56,  168 => 51,  150 => 45,  110 => 34,  129 => 47,  87 => 38,  49 => 16,  134 => 52,  86 => 38,  77 => 22,  164 => 82,  148 => 45,  128 => 40,  199 => 105,  179 => 56,  169 => 52,  161 => 61,  107 => 33,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 142,  366 => 138,  363 => 140,  357 => 132,  353 => 135,  350 => 128,  347 => 126,  344 => 129,  341 => 152,  335 => 129,  325 => 146,  318 => 119,  309 => 134,  305 => 132,  302 => 136,  293 => 126,  290 => 106,  284 => 106,  280 => 97,  272 => 95,  258 => 94,  254 => 97,  240 => 117,  235 => 91,  232 => 87,  226 => 83,  217 => 110,  200 => 82,  175 => 69,  173 => 53,  170 => 52,  156 => 58,  125 => 64,  99 => 31,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 124,  282 => 104,  276 => 120,  273 => 119,  270 => 102,  268 => 117,  263 => 100,  249 => 89,  245 => 87,  230 => 106,  222 => 82,  220 => 83,  215 => 70,  211 => 77,  204 => 73,  198 => 66,  185 => 58,  183 => 57,  177 => 58,  160 => 49,  112 => 39,  82 => 27,  65 => 14,  38 => 6,  144 => 44,  141 => 43,  135 => 41,  126 => 50,  109 => 57,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 29,  84 => 28,  94 => 38,  88 => 28,  59 => 12,  28 => 2,  225 => 75,  216 => 73,  212 => 88,  205 => 66,  201 => 64,  196 => 61,  194 => 96,  191 => 60,  189 => 62,  186 => 94,  180 => 71,  172 => 66,  159 => 48,  154 => 47,  147 => 56,  132 => 68,  127 => 39,  121 => 38,  118 => 42,  114 => 37,  104 => 29,  100 => 32,  78 => 23,  75 => 30,  71 => 19,  34 => 11,  105 => 45,  93 => 42,  79 => 18,  76 => 35,  72 => 34,  68 => 19,  58 => 25,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 18,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 82,  152 => 61,  149 => 58,  145 => 45,  139 => 43,  131 => 41,  123 => 39,  120 => 37,  115 => 39,  106 => 62,  101 => 44,  96 => 32,  83 => 27,  80 => 39,  74 => 21,  66 => 17,  55 => 12,  52 => 10,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 55,  171 => 53,  165 => 50,  162 => 86,  157 => 78,  153 => 46,  151 => 46,  143 => 48,  138 => 42,  136 => 42,  133 => 52,  130 => 40,  122 => 38,  119 => 67,  116 => 35,  111 => 35,  108 => 34,  102 => 43,  98 => 41,  95 => 41,  92 => 30,  89 => 29,  85 => 37,  81 => 26,  73 => 35,  64 => 31,  60 => 22,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
