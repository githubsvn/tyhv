<?php

/* SMAdminBundle:Company:new.html.twig */
class __TwigTemplate_da11bf7090d16afc0933a977ed0b7a2a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Charter Capital", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "charter_capital"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "charter_capital"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Phone", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "phone"), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "phone"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fax", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fax"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "fax"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mst", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mst"), 'errors');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mst"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Website", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "website"), 'errors');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "website"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logo", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logo"), 'errors');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logo"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 82
        $context["isActive"] = 1;
        // line 83
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 84
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 85
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 87
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 89
            echo "                      ";
            $context["isActive"] = 2;
            // line 90
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 93
        $context["isActive"] = 1;
        // line 94
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 95
            echo "                    ";
            $context["currentAL"] = null;
            // line 96
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "company_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["companyLanguage"]) {
                // line 97
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "companyLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 98
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "companyLanguage");
                    // line 99
                    echo "                        ";
                }
                // line 100
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['companyLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 102
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 104
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 106
            echo "                            <fieldset>
                                ";
            // line 107
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 108
                echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 111
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                            ";
                // line 112
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 113
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 115
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                            ";
                }
                // line 117
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Address", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 123
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "address"), 'errors');
                echo "
                                            ";
                // line 124
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 125
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "address"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 127
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "address"), 'widget');
                    echo "
                                            ";
                }
                // line 129
                echo "                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 134
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'errors');
                echo "
                                            ";
                // line 135
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 136
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 138
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                    echo "
                                            ";
                }
                // line 140
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Representation", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 146
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "representation"), 'errors');
                echo "
                                            ";
                // line 147
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 148
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "representation"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 150
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "representation"), 'widget');
                    echo "
                                            ";
                }
                // line 152
                echo "                                        </div>
                                    </div>

                                ";
            }
            // line 156
            echo "                            </fieldset>
                        </div>
                    ";
            // line 158
            $context["isActive"] = 2;
            // line 159
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Company:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 117,  303 => 113,  257 => 98,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  330 => 124,  324 => 123,  310 => 118,  306 => 117,  248 => 99,  345 => 127,  339 => 130,  331 => 124,  323 => 122,  320 => 121,  288 => 107,  266 => 104,  291 => 105,  283 => 103,  271 => 96,  262 => 98,  239 => 93,  208 => 70,  316 => 120,  312 => 119,  308 => 118,  296 => 113,  265 => 96,  261 => 95,  256 => 95,  250 => 100,  236 => 84,  224 => 80,  176 => 63,  113 => 40,  202 => 83,  56 => 23,  304 => 116,  297 => 111,  259 => 103,  244 => 97,  228 => 89,  193 => 74,  90 => 37,  285 => 104,  281 => 108,  275 => 98,  269 => 101,  267 => 95,  251 => 100,  246 => 95,  234 => 88,  192 => 70,  298 => 114,  294 => 111,  278 => 104,  264 => 95,  255 => 101,  247 => 87,  243 => 86,  238 => 96,  218 => 87,  214 => 74,  206 => 71,  158 => 57,  146 => 55,  40 => 8,  286 => 110,  279 => 101,  274 => 94,  260 => 99,  252 => 89,  241 => 94,  237 => 85,  233 => 79,  231 => 82,  210 => 85,  195 => 80,  187 => 64,  181 => 62,  167 => 67,  137 => 53,  124 => 46,  97 => 39,  69 => 19,  53 => 14,  229 => 90,  221 => 75,  209 => 88,  203 => 79,  197 => 75,  174 => 65,  166 => 59,  142 => 51,  117 => 46,  62 => 16,  227 => 93,  223 => 84,  219 => 91,  213 => 72,  207 => 84,  190 => 78,  182 => 73,  168 => 65,  150 => 53,  110 => 40,  129 => 47,  87 => 26,  49 => 16,  134 => 49,  86 => 38,  77 => 22,  164 => 62,  148 => 56,  128 => 46,  199 => 81,  179 => 71,  169 => 61,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 142,  366 => 138,  363 => 140,  357 => 132,  353 => 135,  350 => 128,  347 => 133,  344 => 129,  341 => 131,  335 => 129,  325 => 61,  318 => 121,  309 => 115,  305 => 111,  302 => 115,  293 => 112,  290 => 109,  284 => 106,  280 => 35,  272 => 102,  258 => 102,  254 => 97,  240 => 90,  235 => 91,  232 => 87,  226 => 89,  217 => 86,  200 => 82,  175 => 69,  173 => 60,  170 => 59,  156 => 63,  125 => 49,  99 => 35,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 107,  282 => 104,  276 => 103,  273 => 101,  270 => 102,  268 => 93,  263 => 100,  249 => 96,  245 => 85,  230 => 75,  222 => 79,  220 => 83,  215 => 70,  211 => 89,  204 => 73,  198 => 72,  185 => 73,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 30,  38 => 6,  144 => 59,  141 => 54,  135 => 50,  126 => 47,  109 => 36,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 29,  84 => 26,  94 => 38,  88 => 27,  59 => 5,  28 => 2,  225 => 76,  216 => 90,  212 => 88,  205 => 77,  201 => 76,  196 => 66,  194 => 62,  191 => 73,  189 => 74,  186 => 61,  180 => 71,  172 => 66,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 51,  121 => 45,  118 => 42,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 11,  105 => 35,  93 => 29,  79 => 24,  76 => 23,  72 => 20,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 58,  152 => 61,  149 => 58,  145 => 55,  139 => 51,  131 => 48,  123 => 50,  120 => 37,  115 => 39,  106 => 44,  101 => 34,  96 => 32,  83 => 37,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 68,  165 => 58,  162 => 54,  157 => 57,  153 => 54,  151 => 57,  143 => 48,  138 => 50,  136 => 49,  133 => 52,  130 => 48,  122 => 43,  119 => 41,  116 => 45,  111 => 37,  108 => 36,  102 => 43,  98 => 41,  95 => 31,  92 => 40,  89 => 28,  85 => 41,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
