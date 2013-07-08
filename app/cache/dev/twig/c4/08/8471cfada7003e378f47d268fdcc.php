<?php

/* SMAdminBundle:Page:new.html.twig */
class __TwigTemplate_c4088471cfada7003e378f47d268fdcc extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget');
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

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'errors');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
                    ";
        // line 29
        $context["selectName"] = $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "media_id"), "get", array(0 => "full_name"), "method");
        // line 30
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
        // line 39
        $context["isActive"] = 1;
        // line 40
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 41
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 42
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 44
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 46
            echo "                      ";
            $context["isActive"] = 2;
            // line 47
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 50
        $context["isActive"] = 1;
        // line 51
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 52
            echo "                    ";
            $context["currentAL"] = null;
            // line 53
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "page_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["pageLanguage"]) {
                // line 54
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "pageLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 55
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "pageLanguage");
                    // line 56
                    echo "                        ";
                }
                // line 57
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 59
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 61
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 63
            echo "                            <fieldset>
                                ";
            // line 64
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 65
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 68
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 69
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 70
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 72
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 74
                echo "                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Intro", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 80
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "intro"), 'errors');
                echo "
                                        ";
                // line 81
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "intro"), 'widget');
                echo "
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 88
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'errors');
                echo "
                                        ";
                // line 89
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                echo "
                                    </div>
                                </div>

                                ";
            }
            // line 94
            echo "                            </fieldset>
                        </div>
                    ";
            // line 96
            $context["isActive"] = 2;
            // line 97
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Page:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 103,  281 => 102,  275 => 98,  269 => 97,  267 => 96,  251 => 88,  246 => 86,  234 => 80,  192 => 63,  298 => 110,  294 => 109,  278 => 103,  264 => 95,  255 => 89,  247 => 87,  243 => 86,  238 => 81,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 53,  40 => 7,  286 => 99,  279 => 95,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  210 => 72,  195 => 64,  187 => 63,  181 => 60,  167 => 54,  137 => 47,  124 => 47,  97 => 27,  69 => 16,  53 => 55,  229 => 78,  221 => 74,  209 => 69,  203 => 66,  197 => 65,  174 => 61,  166 => 59,  142 => 44,  117 => 45,  62 => 16,  227 => 74,  223 => 74,  219 => 72,  213 => 68,  207 => 71,  190 => 59,  182 => 56,  168 => 56,  150 => 45,  110 => 40,  129 => 39,  87 => 28,  49 => 11,  134 => 46,  86 => 25,  77 => 24,  164 => 60,  148 => 53,  128 => 35,  199 => 69,  179 => 56,  169 => 52,  161 => 63,  107 => 33,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 108,  284 => 104,  280 => 35,  272 => 100,  258 => 25,  254 => 24,  240 => 13,  235 => 12,  232 => 80,  226 => 78,  217 => 72,  200 => 66,  175 => 65,  173 => 53,  170 => 55,  156 => 56,  125 => 34,  99 => 35,  301 => 100,  295 => 96,  292 => 95,  289 => 104,  287 => 93,  282 => 90,  276 => 102,  273 => 85,  270 => 84,  268 => 93,  263 => 94,  249 => 88,  245 => 87,  230 => 75,  222 => 73,  220 => 76,  215 => 70,  211 => 70,  204 => 70,  198 => 63,  185 => 62,  183 => 57,  177 => 58,  160 => 49,  112 => 38,  82 => 27,  65 => 11,  38 => 6,  144 => 44,  141 => 43,  135 => 50,  126 => 44,  109 => 36,  103 => 36,  67 => 18,  61 => 17,  47 => 30,  91 => 29,  84 => 21,  94 => 39,  88 => 22,  59 => 5,  28 => 2,  225 => 75,  216 => 90,  212 => 88,  205 => 68,  201 => 69,  196 => 61,  194 => 62,  191 => 65,  189 => 65,  186 => 61,  180 => 59,  172 => 67,  159 => 50,  154 => 52,  147 => 50,  132 => 46,  127 => 48,  121 => 36,  118 => 42,  114 => 31,  104 => 89,  100 => 25,  78 => 42,  75 => 23,  71 => 19,  34 => 6,  105 => 37,  93 => 29,  79 => 24,  76 => 67,  72 => 14,  68 => 12,  58 => 31,  24 => 1,  27 => 6,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 9,  22 => 2,  163 => 58,  155 => 57,  152 => 54,  149 => 51,  145 => 45,  139 => 43,  131 => 40,  123 => 39,  120 => 37,  115 => 41,  106 => 29,  101 => 28,  96 => 24,  83 => 27,  80 => 24,  74 => 66,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 8,  41 => 27,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 57,  165 => 55,  162 => 54,  157 => 53,  153 => 46,  151 => 46,  143 => 48,  138 => 42,  136 => 42,  133 => 93,  130 => 40,  122 => 38,  119 => 46,  116 => 35,  111 => 30,  108 => 39,  102 => 40,  98 => 39,  95 => 30,  92 => 23,  89 => 28,  85 => 27,  81 => 26,  73 => 13,  64 => 17,  60 => 23,  57 => 17,  54 => 11,  51 => 11,  48 => 10,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
