<?php

/* SMAdminBundle:Page:edit.html.twig */
class __TwigTemplate_22f89d4ca092dc0cb1595a80eb561daa extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form id=\"frmProduct\" action=\"";
        // line 5
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'errors');
        echo "
                ";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'widget');
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "image"), 'errors');
        echo "
                ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "image"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\"></label>
            <div class=\"controls\">
                ";
        // line 26
        if (isset($context["arrImgs"])) { $_arrImgs_ = $context["arrImgs"]; } else { $_arrImgs_ = null; }
        if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
        echo $this->env->getExtension('mtx.twig.show_image_extension')->showImages($_arrImgs_, $_imgPath_);
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "media_id"), 'errors');
        echo "
                    ";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "media_id"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
                    ";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context["selectName"] = $this->getAttribute($this->getAttribute($_form_, "media_id"), "get", array(0 => "full_name"), "method");
        // line 37
        echo "                    ";
        if (isset($context["optMedias"])) { $_optMedias_ = $context["optMedias"]; } else { $_optMedias_ = null; }
        if (isset($context["optMediaTypes"])) { $_optMediaTypes_ = $context["optMediaTypes"]; } else { $_optMediaTypes_ = null; }
        if (isset($context["selectName"])) { $_selectName_ = $context["selectName"]; } else { $_selectName_ = null; }
        if (isset($context["mediaPath"])) { $_mediaPath_ = $context["mediaPath"]; } else { $_mediaPath_ = null; }
        echo $this->env->getExtension('sm.twig.media_extension')->selectMedia($_optMedias_, $_optMediaTypes_, $_selectName_, $_mediaPath_, array("multiple" => true));
        echo "
              </label>
            </div>
        </div>

        <hr />
        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 45
        $context["isActive"] = 1;
        // line 46
        echo "                  ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 47
            echo "                      ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 48
                echo "                          <li class=\"active\"><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 50
                echo "                          <li><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 52
            echo "                      ";
            $context["isActive"] = 2;
            // line 53
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 56
        $context["isActive"] = 1;
        // line 57
        echo "                ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 58
            echo "                    ";
            $context["currentAL"] = null;
            // line 59
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "page_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["pageLanguage"]) {
                // line 60
                echo "                        ";
                if (isset($context["pageLanguage"])) { $_pageLanguage_ = $context["pageLanguage"]; } else { $_pageLanguage_ = null; }
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_pageLanguage_, "vars"), "value"), "language"), "id") == $this->getAttribute($_lang_, "id"))) {
                    // line 61
                    echo "                            ";
                    if (isset($context["pageLanguage"])) { $_pageLanguage_ = $context["pageLanguage"]; } else { $_pageLanguage_ = null; }
                    $context["currentAL"] = $_pageLanguage_;
                    // line 62
                    echo "                        ";
                }
                // line 63
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 65
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 67
                echo "                        <div class=\"tab-pane\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 69
            echo "                            <fieldset>
                                ";
            // line 70
            if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
            if ((!(null === $_currentAL_))) {
                // line 71
                echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 74
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'errors');
                echo "
                                            ";
                // line 75
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 76
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 78
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget');
                    echo "
                                            ";
                }
                // line 80
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Intro", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 86
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "intro"), 'errors');
                echo "
                                        ";
                // line 87
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "intro"), 'widget');
                echo "
                                    </div>
                                </div>
                                
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 94
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "description"), 'errors');
                echo "
                                        ";
                // line 95
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "description"), 'widget');
                echo "
                                    </div>
                                </div>
                                
                                ";
            }
            // line 100
            echo "                            </fieldset>
                        </div>
                    ";
            // line 102
            $context["isActive"] = 2;
            // line 103
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 108
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 110
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
        return "SMAdminBundle:Page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 109,  329 => 108,  323 => 104,  315 => 102,  311 => 100,  302 => 95,  297 => 94,  283 => 87,  267 => 80,  249 => 75,  244 => 74,  230 => 69,  223 => 67,  177 => 56,  116 => 37,  53 => 55,  44 => 8,  325 => 99,  316 => 95,  309 => 94,  292 => 92,  281 => 89,  276 => 88,  271 => 87,  265 => 86,  260 => 78,  256 => 83,  253 => 76,  214 => 67,  210 => 65,  206 => 63,  196 => 59,  78 => 23,  255 => 76,  251 => 75,  246 => 74,  232 => 68,  228 => 71,  254 => 74,  233 => 70,  231 => 72,  222 => 62,  208 => 58,  204 => 57,  191 => 53,  188 => 59,  185 => 58,  178 => 49,  149 => 42,  143 => 41,  132 => 45,  96 => 24,  169 => 56,  137 => 46,  129 => 36,  119 => 32,  154 => 50,  146 => 46,  141 => 40,  198 => 66,  181 => 60,  135 => 43,  127 => 39,  122 => 35,  86 => 24,  73 => 13,  55 => 22,  227 => 64,  221 => 81,  107 => 49,  67 => 29,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 106,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 81,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 110,  332 => 66,  322 => 61,  314 => 59,  287 => 52,  284 => 51,  278 => 86,  274 => 35,  270 => 34,  266 => 33,  262 => 32,  252 => 25,  211 => 143,  195 => 68,  193 => 121,  187 => 55,  184 => 117,  182 => 104,  164 => 52,  161 => 45,  140 => 47,  126 => 90,  106 => 29,  103 => 34,  100 => 25,  93 => 85,  74 => 21,  68 => 12,  51 => 11,  333 => 100,  327 => 96,  324 => 95,  320 => 94,  317 => 103,  312 => 90,  306 => 86,  303 => 93,  299 => 55,  296 => 54,  291 => 80,  277 => 79,  273 => 84,  258 => 75,  248 => 78,  245 => 72,  239 => 72,  234 => 69,  226 => 11,  216 => 65,  202 => 61,  199 => 61,  192 => 67,  165 => 52,  156 => 50,  134 => 46,  131 => 46,  120 => 41,  115 => 35,  82 => 22,  76 => 19,  61 => 12,  54 => 14,  171 => 47,  163 => 52,  159 => 51,  152 => 50,  138 => 39,  123 => 38,  117 => 31,  111 => 30,  101 => 34,  98 => 39,  83 => 33,  75 => 19,  71 => 18,  64 => 15,  43 => 7,  36 => 12,  104 => 27,  80 => 23,  63 => 17,  58 => 12,  40 => 6,  24 => 1,  94 => 27,  88 => 22,  48 => 12,  39 => 11,  35 => 5,  31 => 3,  21 => 2,  46 => 9,  29 => 3,  32 => 4,  250 => 73,  240 => 70,  236 => 71,  229 => 12,  225 => 70,  220 => 5,  218 => 69,  215 => 60,  212 => 64,  209 => 136,  200 => 130,  194 => 60,  179 => 57,  176 => 59,  173 => 54,  166 => 60,  162 => 51,  157 => 51,  155 => 51,  151 => 48,  148 => 42,  145 => 47,  139 => 45,  128 => 35,  114 => 31,  109 => 32,  87 => 26,  84 => 21,  79 => 32,  65 => 11,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 35,  97 => 31,  92 => 23,  89 => 28,  85 => 25,  69 => 14,  28 => 2,  57 => 11,  50 => 34,  47 => 8,  38 => 6,  27 => 6,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 66,  189 => 64,  183 => 54,  180 => 63,  174 => 50,  170 => 49,  167 => 53,  158 => 46,  153 => 50,  150 => 44,  147 => 95,  144 => 48,  136 => 43,  133 => 44,  130 => 91,  124 => 35,  121 => 31,  113 => 36,  108 => 35,  105 => 34,  102 => 48,  99 => 30,  95 => 29,  91 => 19,  81 => 24,  70 => 18,  66 => 16,  62 => 22,  59 => 5,  56 => 11,  52 => 10,  49 => 19,  45 => 29,  41 => 27,  37 => 5,  33 => 4,  30 => 5,);
    }
}
