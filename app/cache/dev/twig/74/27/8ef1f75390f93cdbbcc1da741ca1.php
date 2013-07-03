<?php

/* SMAdminBundle:CompanyType:new.html.twig */
class __TwigTemplate_74278ef1f75390f93cdbbcc1da741ca1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Type Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\">
            <ul class=\"nav nav-tabs\">
                  ";
        // line 20
        $context["isActive"] = 1;
        // line 21
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 22
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 23
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 25
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 27
            echo "                      ";
            $context["isActive"] = 2;
            // line 28
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 31
        $context["isActive"] = 1;
        // line 32
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 33
            echo "                    ";
            $context["currentAL"] = null;
            // line 34
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "companytype_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["companytypeLanguage"]) {
                // line 35
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "companytypeLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 36
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "companytypeLanguage");
                    // line 37
                    echo "                        ";
                }
                // line 38
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['companytypeLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 40
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 42
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 44
            echo "                            <fieldset>
                                ";
            // line 45
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 46
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 49
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 50
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 51
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 53
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 55
                echo "                                    </div>
                                </div>

                                ";
            }
            // line 59
            echo "                            </fieldset>
                        </div>
                    ";
            // line 61
            $context["isActive"] = 2;
            // line 62
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 69
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
        return "SMAdminBundle:CompanyType:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 68,  140 => 44,  384 => 138,  377 => 134,  350 => 128,  343 => 126,  224 => 81,  374 => 144,  370 => 143,  336 => 128,  313 => 118,  373 => 146,  357 => 138,  340 => 129,  334 => 128,  328 => 126,  20 => 1,  327 => 141,  317 => 136,  311 => 117,  345 => 134,  331 => 122,  323 => 140,  319 => 120,  308 => 111,  302 => 114,  288 => 109,  256 => 100,  359 => 131,  352 => 136,  333 => 123,  325 => 122,  322 => 124,  314 => 140,  280 => 103,  433 => 166,  425 => 164,  419 => 160,  411 => 158,  407 => 156,  401 => 152,  395 => 154,  389 => 148,  383 => 146,  366 => 132,  349 => 135,  321 => 121,  315 => 113,  309 => 134,  442 => 172,  438 => 171,  434 => 170,  428 => 166,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  396 => 153,  392 => 152,  387 => 152,  369 => 144,  363 => 140,  358 => 130,  353 => 135,  347 => 127,  341 => 152,  339 => 125,  330 => 124,  324 => 117,  296 => 134,  293 => 106,  266 => 104,  258 => 94,  344 => 129,  337 => 151,  318 => 119,  307 => 116,  299 => 113,  305 => 110,  291 => 113,  283 => 101,  271 => 100,  262 => 115,  250 => 100,  316 => 122,  312 => 119,  306 => 118,  300 => 135,  277 => 127,  254 => 91,  248 => 101,  242 => 89,  240 => 85,  236 => 89,  208 => 69,  188 => 97,  113 => 57,  56 => 23,  304 => 114,  297 => 108,  259 => 95,  244 => 91,  235 => 91,  228 => 82,  193 => 62,  90 => 37,  285 => 102,  281 => 122,  267 => 96,  251 => 90,  246 => 95,  234 => 89,  192 => 72,  298 => 114,  284 => 106,  272 => 101,  264 => 96,  255 => 101,  247 => 89,  238 => 108,  232 => 83,  218 => 84,  214 => 80,  206 => 107,  158 => 47,  146 => 55,  40 => 16,  286 => 99,  279 => 106,  274 => 94,  260 => 105,  252 => 93,  241 => 86,  237 => 90,  233 => 88,  231 => 82,  226 => 87,  210 => 76,  195 => 73,  187 => 59,  181 => 55,  167 => 50,  137 => 39,  124 => 49,  97 => 33,  69 => 31,  53 => 11,  229 => 76,  221 => 74,  209 => 68,  203 => 65,  197 => 61,  174 => 52,  166 => 49,  142 => 54,  117 => 49,  62 => 16,  227 => 74,  223 => 73,  219 => 93,  213 => 69,  207 => 66,  190 => 71,  182 => 56,  168 => 50,  150 => 44,  110 => 43,  129 => 38,  87 => 33,  49 => 19,  134 => 38,  86 => 36,  77 => 30,  164 => 64,  148 => 56,  128 => 37,  199 => 63,  179 => 67,  169 => 51,  161 => 50,  107 => 32,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 165,  421 => 122,  418 => 121,  413 => 159,  409 => 116,  403 => 115,  400 => 114,  391 => 153,  386 => 110,  381 => 148,  378 => 144,  375 => 147,  372 => 133,  367 => 141,  364 => 104,  360 => 138,  354 => 137,  351 => 136,  348 => 134,  342 => 72,  338 => 127,  335 => 124,  332 => 125,  329 => 121,  326 => 123,  320 => 123,  310 => 117,  303 => 109,  294 => 111,  290 => 106,  278 => 102,  275 => 102,  269 => 101,  265 => 106,  261 => 94,  257 => 98,  253 => 94,  243 => 90,  239 => 95,  217 => 80,  202 => 75,  200 => 82,  175 => 53,  173 => 67,  170 => 63,  156 => 59,  125 => 36,  99 => 39,  301 => 112,  295 => 113,  292 => 109,  289 => 104,  287 => 124,  282 => 107,  276 => 99,  273 => 98,  270 => 99,  268 => 107,  263 => 95,  249 => 98,  245 => 92,  230 => 88,  222 => 86,  220 => 90,  215 => 70,  211 => 67,  204 => 67,  198 => 63,  185 => 57,  183 => 70,  177 => 58,  160 => 60,  112 => 33,  82 => 27,  65 => 19,  38 => 6,  144 => 42,  141 => 53,  135 => 39,  126 => 37,  109 => 35,  103 => 40,  67 => 20,  61 => 17,  47 => 12,  91 => 26,  84 => 25,  94 => 27,  88 => 31,  59 => 29,  28 => 2,  225 => 75,  216 => 83,  212 => 88,  205 => 67,  201 => 74,  196 => 69,  194 => 72,  191 => 61,  189 => 59,  186 => 59,  180 => 54,  172 => 67,  159 => 59,  154 => 45,  147 => 55,  132 => 42,  127 => 47,  121 => 50,  118 => 37,  114 => 33,  104 => 30,  100 => 28,  78 => 25,  75 => 22,  71 => 30,  34 => 11,  105 => 31,  93 => 38,  79 => 32,  76 => 23,  72 => 21,  68 => 21,  58 => 26,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 27,  63 => 17,  46 => 9,  22 => 2,  163 => 49,  155 => 46,  152 => 44,  149 => 43,  145 => 54,  139 => 53,  131 => 51,  123 => 36,  120 => 35,  115 => 34,  106 => 31,  101 => 29,  96 => 42,  83 => 24,  80 => 37,  74 => 23,  66 => 20,  55 => 12,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 64,  171 => 63,  165 => 50,  162 => 48,  157 => 46,  153 => 45,  151 => 56,  143 => 41,  138 => 40,  136 => 42,  133 => 50,  130 => 48,  122 => 35,  119 => 34,  116 => 35,  111 => 32,  108 => 42,  102 => 36,  98 => 32,  95 => 28,  92 => 27,  89 => 28,  85 => 27,  81 => 26,  73 => 22,  64 => 26,  60 => 22,  57 => 16,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
