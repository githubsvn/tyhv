<?php

/* SMAdminBundle:News:new.html.twig */
class __TwigTemplate_c5a8e43942aca8097f1b64686cab1127 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News Category", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'errors');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
                    ";
        // line 36
        $context["selectName"] = $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "media_id"), "get", array(0 => "full_name"), "method");
        // line 37
        echo "                    ";
        echo $this->env->getExtension('sm.twig.media_extension')->selectMedia($this->getContext($context, "optMedias"), $this->getContext($context, "optMediaTypes"), $this->getContext($context, "selectName"), $this->getContext($context, "mediaPath"), array("multiple" => true));
        echo "
              </label>
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 46
        $context["isActive"] = 1;
        // line 47
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 48
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 49
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 51
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 53
            echo "                      ";
            $context["isActive"] = 2;
            // line 54
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 57
        $context["isActive"] = 1;
        // line 58
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 59
            echo "                    ";
            $context["currentAL"] = null;
            // line 60
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "news_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["newsLanguage"]) {
                // line 61
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "newsLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 62
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "newsLanguage");
                    // line 63
                    echo "                        ";
                }
                // line 64
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 66
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 68
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 70
            echo "                            <fieldset>
                                ";
            // line 71
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 72
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 75
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 76
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 77
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 79
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 81
                echo "                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Intro", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 87
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "intro"), 'errors');
                echo "
                                        ";
                // line 88
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "intro"), 'widget');
                echo "
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 95
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'errors');
                echo "
                                        ";
                // line 96
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                echo "
                                    </div>
                                </div>

                                ";
            }
            // line 101
            echo "                            </fieldset>
                        </div>
                    ";
            // line 103
            $context["isActive"] = 2;
            // line 104
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:News:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 105,  283 => 103,  271 => 96,  262 => 93,  239 => 81,  208 => 70,  316 => 119,  312 => 118,  308 => 117,  296 => 112,  265 => 96,  261 => 95,  256 => 93,  250 => 87,  236 => 84,  224 => 80,  176 => 66,  113 => 43,  202 => 68,  56 => 23,  304 => 116,  297 => 109,  259 => 103,  244 => 87,  228 => 89,  193 => 65,  90 => 37,  285 => 104,  281 => 102,  275 => 98,  269 => 97,  267 => 95,  251 => 100,  246 => 86,  234 => 80,  192 => 70,  298 => 110,  294 => 111,  278 => 103,  264 => 95,  255 => 102,  247 => 87,  243 => 86,  238 => 85,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 53,  40 => 8,  286 => 110,  279 => 101,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 79,  231 => 82,  210 => 72,  195 => 71,  187 => 64,  181 => 62,  167 => 67,  137 => 55,  124 => 46,  97 => 39,  69 => 19,  53 => 14,  229 => 78,  221 => 75,  209 => 79,  203 => 79,  197 => 74,  174 => 65,  166 => 59,  142 => 51,  117 => 44,  62 => 16,  227 => 77,  223 => 87,  219 => 78,  213 => 72,  207 => 74,  190 => 59,  182 => 56,  168 => 67,  150 => 53,  110 => 40,  129 => 47,  87 => 26,  49 => 16,  134 => 49,  86 => 25,  77 => 22,  164 => 62,  148 => 60,  128 => 46,  199 => 69,  179 => 71,  169 => 52,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 111,  302 => 113,  293 => 52,  290 => 109,  284 => 104,  280 => 35,  272 => 100,  258 => 25,  254 => 88,  240 => 13,  235 => 91,  232 => 83,  226 => 78,  217 => 86,  200 => 66,  175 => 69,  173 => 60,  170 => 59,  156 => 63,  125 => 49,  99 => 35,  301 => 110,  295 => 96,  292 => 111,  289 => 104,  287 => 93,  282 => 104,  276 => 102,  273 => 101,  270 => 106,  268 => 93,  263 => 104,  249 => 99,  245 => 85,  230 => 75,  222 => 79,  220 => 76,  215 => 70,  211 => 71,  204 => 73,  198 => 72,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 18,  38 => 6,  144 => 59,  141 => 43,  135 => 54,  126 => 47,  109 => 36,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 29,  84 => 25,  94 => 38,  88 => 28,  59 => 5,  28 => 2,  225 => 76,  216 => 73,  212 => 88,  205 => 80,  201 => 69,  196 => 66,  194 => 62,  191 => 73,  189 => 69,  186 => 61,  180 => 59,  172 => 68,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 48,  121 => 45,  118 => 46,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 5,  105 => 35,  93 => 29,  79 => 32,  76 => 23,  72 => 20,  68 => 19,  58 => 18,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 17,  46 => 9,  22 => 2,  163 => 57,  155 => 58,  152 => 61,  149 => 58,  145 => 57,  139 => 43,  131 => 48,  123 => 46,  120 => 37,  115 => 39,  106 => 29,  101 => 34,  96 => 32,  83 => 25,  80 => 25,  74 => 21,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 8,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 68,  165 => 58,  162 => 54,  157 => 53,  153 => 54,  151 => 57,  143 => 48,  138 => 50,  136 => 49,  133 => 51,  130 => 52,  122 => 48,  119 => 41,  116 => 45,  111 => 37,  108 => 36,  102 => 33,  98 => 32,  95 => 31,  92 => 29,  89 => 28,  85 => 27,  81 => 40,  73 => 21,  64 => 17,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
