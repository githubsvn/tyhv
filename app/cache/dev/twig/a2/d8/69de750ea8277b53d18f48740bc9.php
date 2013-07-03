<?php

/* SMAdminBundle:Media:edit.html.twig */
class __TwigTemplate_a2d869de750ea8277b53d18f48740bc9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Category", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                <image src=\"/web/uploads/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\"/>
                <div style=\"display: none;\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "name"), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("File", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Width", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "width"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "width"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Height", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "height"), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "height"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "active"), 'errors');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "active"), 'widget');
        echo "
              </label>
            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Media:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 116,  297 => 112,  259 => 103,  244 => 95,  235 => 91,  228 => 89,  193 => 76,  90 => 38,  285 => 103,  281 => 102,  267 => 105,  251 => 100,  246 => 86,  234 => 80,  192 => 63,  298 => 110,  284 => 104,  272 => 100,  264 => 95,  255 => 102,  247 => 87,  238 => 81,  232 => 80,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 53,  40 => 12,  286 => 110,  279 => 95,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  226 => 78,  210 => 72,  195 => 64,  187 => 74,  181 => 72,  167 => 67,  137 => 47,  124 => 47,  97 => 27,  69 => 16,  53 => 55,  229 => 78,  221 => 74,  209 => 82,  203 => 79,  197 => 65,  174 => 69,  166 => 59,  142 => 44,  117 => 41,  62 => 16,  227 => 74,  223 => 87,  219 => 72,  213 => 84,  207 => 71,  190 => 59,  182 => 56,  168 => 56,  150 => 45,  110 => 40,  129 => 50,  87 => 28,  49 => 16,  134 => 49,  86 => 25,  77 => 24,  164 => 60,  148 => 60,  128 => 46,  199 => 69,  179 => 71,  169 => 52,  161 => 63,  107 => 33,  23 => 3,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  320 => 66,  310 => 61,  303 => 59,  294 => 109,  290 => 108,  278 => 108,  275 => 98,  269 => 97,  265 => 35,  261 => 34,  257 => 33,  253 => 32,  243 => 86,  239 => 24,  217 => 86,  202 => 143,  200 => 66,  175 => 65,  173 => 53,  170 => 55,  156 => 62,  125 => 49,  99 => 32,  301 => 100,  295 => 96,  292 => 111,  289 => 104,  287 => 54,  282 => 90,  276 => 102,  273 => 85,  270 => 106,  268 => 93,  263 => 104,  249 => 99,  245 => 87,  230 => 75,  222 => 73,  220 => 76,  215 => 70,  211 => 70,  204 => 70,  198 => 63,  185 => 62,  183 => 57,  177 => 58,  160 => 63,  112 => 39,  82 => 27,  65 => 30,  38 => 6,  144 => 59,  141 => 43,  135 => 50,  126 => 44,  109 => 43,  103 => 36,  67 => 18,  61 => 17,  47 => 30,  91 => 29,  84 => 25,  94 => 40,  88 => 22,  59 => 5,  28 => 2,  225 => 88,  216 => 90,  212 => 88,  205 => 80,  201 => 69,  196 => 77,  194 => 62,  191 => 65,  189 => 65,  186 => 61,  180 => 59,  172 => 67,  159 => 50,  154 => 52,  147 => 56,  132 => 46,  127 => 48,  121 => 42,  118 => 42,  114 => 31,  104 => 89,  100 => 25,  78 => 35,  75 => 34,  71 => 33,  34 => 11,  105 => 35,  93 => 29,  79 => 24,  76 => 67,  72 => 20,  68 => 20,  58 => 18,  24 => 1,  27 => 7,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 30,  46 => 9,  22 => 2,  163 => 58,  155 => 58,  152 => 61,  149 => 51,  145 => 45,  139 => 43,  131 => 40,  123 => 39,  120 => 37,  115 => 47,  106 => 29,  101 => 34,  96 => 32,  83 => 27,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 17,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 68,  165 => 55,  162 => 54,  157 => 53,  153 => 46,  151 => 57,  143 => 48,  138 => 50,  136 => 42,  133 => 51,  130 => 40,  122 => 38,  119 => 48,  116 => 35,  111 => 30,  108 => 39,  102 => 40,  98 => 41,  95 => 30,  92 => 23,  89 => 28,  85 => 27,  81 => 40,  73 => 35,  64 => 17,  60 => 23,  57 => 27,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
