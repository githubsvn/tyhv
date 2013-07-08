<?php

/* SMAdminBundle:Company:edit.html.twig */
class __TwigTemplate_852821e6a794b996af79a9067a1af934 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
            <label class=\"control-label\" for=\"input01\"></label>
            <div class=\"controls\">
                ";
        // line 73
        echo $this->env->getExtension('mtx.twig.show_image_extension')->showImages($this->getContext($context, "arrImgs"), $this->getContext($context, "imgPath"));
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />
        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 88
        $context["isActive"] = 1;
        // line 89
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 90
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 91
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 93
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 95
            echo "                      ";
            $context["isActive"] = 2;
            // line 96
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 99
        $context["isActive"] = 1;
        // line 100
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 101
            echo "                    ";
            $context["currentAL"] = null;
            // line 102
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "company_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["companyLanguage"]) {
                // line 103
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "companyLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 104
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "companyLanguage");
                    // line 105
                    echo "                        ";
                }
                // line 106
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['companyLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 108
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 110
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 112
            echo "                            <fieldset>
                                ";
            // line 113
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 114
                echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 117
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                            ";
                // line 118
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 119
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 121
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                            ";
                }
                // line 123
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Address", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 129
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "address"), 'errors');
                echo "
                                            ";
                // line 130
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 131
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "address"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 133
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "address"), 'widget');
                    echo "
                                            ";
                }
                // line 135
                echo "                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 140
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'errors');
                echo "
                                            ";
                // line 141
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 142
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 144
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                    echo "
                                            ";
                }
                // line 146
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Representation", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 152
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "representation"), 'errors');
                echo "
                                            ";
                // line 153
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 154
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "representation"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 156
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "representation"), 'widget');
                    echo "
                                            ";
                }
                // line 158
                echo "                                        </div>
                                    </div>

                                ";
            }
            // line 162
            echo "                            </fieldset>
                        </div>
                    ";
            // line 164
            $context["isActive"] = 2;
            // line 165
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 172
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
        return "SMAdminBundle:Company:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 138,  330 => 127,  324 => 123,  310 => 118,  306 => 117,  248 => 99,  345 => 127,  339 => 130,  331 => 124,  323 => 122,  320 => 121,  288 => 107,  266 => 104,  291 => 105,  283 => 103,  271 => 96,  262 => 98,  239 => 81,  208 => 70,  316 => 120,  312 => 119,  308 => 118,  296 => 113,  265 => 96,  261 => 95,  256 => 95,  250 => 100,  236 => 84,  224 => 80,  176 => 63,  113 => 40,  202 => 68,  56 => 23,  304 => 116,  297 => 111,  259 => 103,  244 => 97,  228 => 89,  193 => 74,  90 => 37,  285 => 104,  281 => 108,  275 => 98,  269 => 105,  267 => 95,  251 => 100,  246 => 92,  234 => 88,  192 => 70,  298 => 114,  294 => 111,  278 => 107,  264 => 95,  255 => 101,  247 => 87,  243 => 86,  238 => 96,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 55,  40 => 8,  286 => 110,  279 => 101,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 79,  231 => 82,  210 => 72,  195 => 80,  187 => 64,  181 => 62,  167 => 67,  137 => 53,  124 => 46,  97 => 39,  69 => 19,  53 => 14,  229 => 78,  221 => 75,  209 => 88,  203 => 79,  197 => 75,  174 => 65,  166 => 59,  142 => 51,  117 => 46,  62 => 16,  227 => 93,  223 => 84,  219 => 91,  213 => 72,  207 => 74,  190 => 78,  182 => 73,  168 => 65,  150 => 53,  110 => 40,  129 => 47,  87 => 26,  49 => 16,  134 => 49,  86 => 38,  77 => 22,  164 => 62,  148 => 56,  128 => 46,  199 => 81,  179 => 71,  169 => 61,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 153,  393 => 108,  390 => 107,  387 => 150,  382 => 105,  379 => 104,  375 => 144,  369 => 142,  366 => 81,  363 => 140,  357 => 132,  353 => 135,  350 => 128,  347 => 133,  344 => 68,  341 => 131,  335 => 129,  325 => 61,  318 => 121,  309 => 57,  305 => 111,  302 => 115,  293 => 112,  290 => 109,  284 => 104,  280 => 35,  272 => 106,  258 => 102,  254 => 88,  240 => 90,  235 => 95,  232 => 87,  226 => 78,  217 => 86,  200 => 66,  175 => 69,  173 => 60,  170 => 59,  156 => 63,  125 => 49,  99 => 35,  301 => 115,  295 => 96,  292 => 111,  289 => 104,  287 => 110,  282 => 104,  276 => 103,  273 => 101,  270 => 102,  268 => 93,  263 => 103,  249 => 93,  245 => 85,  230 => 75,  222 => 79,  220 => 83,  215 => 70,  211 => 89,  204 => 73,  198 => 72,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 30,  38 => 6,  144 => 59,  141 => 54,  135 => 50,  126 => 47,  109 => 36,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 29,  84 => 26,  94 => 38,  88 => 27,  59 => 5,  28 => 2,  225 => 76,  216 => 90,  212 => 88,  205 => 77,  201 => 76,  196 => 66,  194 => 62,  191 => 73,  189 => 69,  186 => 61,  180 => 64,  172 => 66,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 51,  121 => 45,  118 => 42,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 11,  105 => 35,  93 => 29,  79 => 24,  76 => 23,  72 => 20,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 58,  152 => 61,  149 => 58,  145 => 55,  139 => 51,  131 => 48,  123 => 50,  120 => 37,  115 => 39,  106 => 44,  101 => 34,  96 => 32,  83 => 37,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 68,  165 => 58,  162 => 54,  157 => 57,  153 => 54,  151 => 57,  143 => 48,  138 => 50,  136 => 49,  133 => 52,  130 => 48,  122 => 43,  119 => 41,  116 => 45,  111 => 37,  108 => 36,  102 => 43,  98 => 41,  95 => 31,  92 => 40,  89 => 28,  85 => 41,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
