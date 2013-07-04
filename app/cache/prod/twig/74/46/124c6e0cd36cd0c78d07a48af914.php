<?php

/* SMAdminBundle:ProductGroup:new.html.twig */
class __TwigTemplate_7446124c6e0cd36cd0c78d07a48af914 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Product Group Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productgroup_new"), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Branch", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "branch"), 'errors');
        echo "
                ";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "branch"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'errors');
        echo "
                ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 28
        $context["isActive"] = 1;
        // line 29
        echo "                  ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 30
            echo "                      ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 31
                echo "                          <li class=\"active\"><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 33
                echo "                          <li><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 35
            echo "                      ";
            $context["isActive"] = 2;
            // line 36
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 39
        $context["isActive"] = 1;
        // line 40
        echo "                ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 41
            echo "                    ";
            $context["currentAL"] = null;
            // line 42
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "productgroup_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["productgroupLanguage"]) {
                // line 43
                echo "                        ";
                if (isset($context["productgroupLanguage"])) { $_productgroupLanguage_ = $context["productgroupLanguage"]; } else { $_productgroupLanguage_ = null; }
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_productgroupLanguage_, "vars"), "value"), "language"), "id") == $this->getAttribute($_lang_, "id"))) {
                    // line 44
                    echo "                            ";
                    if (isset($context["productgroupLanguage"])) { $_productgroupLanguage_ = $context["productgroupLanguage"]; } else { $_productgroupLanguage_ = null; }
                    $context["currentAL"] = $_productgroupLanguage_;
                    // line 45
                    echo "                        ";
                }
                // line 46
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productgroupLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 48
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 50
                echo "                        <div class=\"tab-pane\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 52
            echo "                            <fieldset>
                                ";
            // line 53
            if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
            if ((!(null === $_currentAL_))) {
                // line 54
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 57
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'errors');
                echo "
                                        ";
                // line 58
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 59
                    echo "                                            ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 61
                    echo "                                            ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget');
                    echo "
                                        ";
                }
                // line 63
                echo "                                    </div>
                                </div>

                                ";
            }
            // line 67
            echo "                            </fieldset>
                        </div>
                    ";
            // line 69
            $context["isActive"] = 2;
            // line 70
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 75
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productgroup", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:ProductGroup:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 48,  168 => 47,  247 => 75,  235 => 70,  213 => 59,  186 => 52,  423 => 134,  416 => 133,  383 => 127,  417 => 143,  412 => 142,  406 => 138,  394 => 134,  385 => 129,  380 => 128,  375 => 126,  369 => 122,  362 => 120,  346 => 113,  425 => 146,  408 => 138,  401 => 136,  397 => 135,  392 => 134,  387 => 132,  363 => 122,  330 => 113,  313 => 102,  201 => 57,  20 => 1,  356 => 140,  301 => 99,  295 => 95,  238 => 102,  294 => 124,  288 => 94,  404 => 131,  371 => 123,  350 => 119,  339 => 117,  304 => 99,  282 => 93,  257 => 84,  217 => 61,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 154,  441 => 148,  437 => 147,  432 => 138,  427 => 147,  414 => 138,  407 => 136,  403 => 135,  398 => 136,  388 => 128,  365 => 142,  360 => 121,  347 => 118,  336 => 112,  310 => 101,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 153,  433 => 148,  426 => 144,  419 => 142,  415 => 140,  410 => 132,  400 => 137,  393 => 132,  382 => 125,  372 => 125,  366 => 147,  359 => 121,  352 => 119,  272 => 95,  377 => 152,  370 => 124,  353 => 120,  342 => 134,  300 => 102,  207 => 71,  344 => 117,  321 => 106,  308 => 105,  289 => 97,  279 => 98,  242 => 89,  358 => 122,  354 => 143,  349 => 140,  343 => 117,  337 => 115,  335 => 110,  298 => 98,  293 => 105,  269 => 95,  264 => 109,  259 => 108,  219 => 98,  205 => 58,  160 => 45,  72 => 19,  175 => 82,  77 => 20,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 107,  307 => 103,  286 => 98,  275 => 96,  268 => 89,  263 => 95,  243 => 91,  190 => 53,  326 => 112,  305 => 104,  290 => 101,  285 => 94,  280 => 87,  261 => 85,  241 => 71,  237 => 69,  224 => 63,  142 => 41,  90 => 29,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 107,  297 => 101,  283 => 87,  267 => 118,  249 => 82,  244 => 86,  230 => 72,  223 => 63,  177 => 60,  116 => 32,  53 => 11,  44 => 17,  325 => 108,  316 => 95,  309 => 94,  292 => 96,  281 => 99,  276 => 91,  271 => 91,  265 => 86,  260 => 89,  256 => 77,  253 => 83,  214 => 61,  210 => 59,  206 => 58,  196 => 55,  78 => 36,  255 => 88,  251 => 75,  246 => 90,  232 => 82,  228 => 67,  254 => 95,  233 => 69,  231 => 72,  222 => 63,  208 => 58,  204 => 70,  191 => 53,  188 => 63,  185 => 63,  178 => 49,  149 => 39,  143 => 38,  132 => 43,  96 => 30,  169 => 47,  137 => 72,  129 => 37,  119 => 56,  154 => 54,  146 => 50,  141 => 41,  198 => 72,  181 => 49,  135 => 40,  127 => 42,  122 => 33,  86 => 30,  73 => 27,  55 => 22,  227 => 78,  221 => 61,  107 => 35,  67 => 17,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 152,  434 => 118,  430 => 116,  424 => 115,  421 => 144,  411 => 111,  405 => 138,  399 => 130,  395 => 127,  390 => 107,  386 => 131,  381 => 128,  378 => 126,  374 => 126,  367 => 124,  364 => 121,  361 => 141,  355 => 117,  351 => 117,  348 => 118,  345 => 69,  341 => 114,  338 => 111,  332 => 109,  322 => 110,  314 => 106,  287 => 100,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 76,  211 => 79,  195 => 55,  193 => 54,  187 => 52,  184 => 62,  182 => 62,  164 => 57,  161 => 56,  140 => 50,  126 => 63,  106 => 30,  103 => 32,  100 => 31,  93 => 42,  74 => 18,  68 => 26,  51 => 19,  333 => 100,  327 => 110,  324 => 111,  320 => 111,  317 => 104,  312 => 129,  306 => 86,  303 => 93,  299 => 106,  296 => 102,  291 => 104,  277 => 112,  273 => 90,  258 => 96,  248 => 94,  245 => 81,  239 => 85,  234 => 73,  226 => 108,  216 => 61,  202 => 97,  199 => 60,  192 => 54,  165 => 58,  156 => 44,  134 => 39,  131 => 35,  120 => 35,  115 => 36,  82 => 36,  76 => 20,  61 => 15,  54 => 24,  171 => 59,  163 => 46,  159 => 45,  152 => 55,  138 => 39,  123 => 36,  117 => 42,  111 => 33,  101 => 31,  98 => 29,  83 => 35,  75 => 31,  71 => 19,  64 => 31,  43 => 15,  36 => 12,  104 => 28,  80 => 29,  63 => 25,  58 => 12,  40 => 16,  24 => 2,  94 => 27,  88 => 28,  48 => 9,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 87,  240 => 70,  236 => 67,  229 => 67,  225 => 71,  220 => 81,  218 => 74,  215 => 60,  212 => 64,  209 => 59,  200 => 57,  194 => 54,  179 => 50,  176 => 47,  173 => 48,  166 => 58,  162 => 46,  157 => 55,  155 => 44,  151 => 43,  148 => 52,  145 => 42,  139 => 52,  128 => 50,  114 => 31,  109 => 34,  87 => 27,  84 => 37,  79 => 36,  65 => 32,  34 => 5,  26 => 5,  125 => 44,  118 => 45,  110 => 33,  97 => 30,  92 => 41,  89 => 28,  85 => 24,  69 => 20,  28 => 2,  57 => 12,  50 => 20,  47 => 9,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 69,  189 => 53,  183 => 54,  180 => 50,  174 => 50,  170 => 59,  167 => 44,  158 => 46,  153 => 40,  150 => 43,  147 => 50,  144 => 42,  136 => 40,  133 => 39,  130 => 37,  124 => 36,  121 => 35,  113 => 35,  108 => 35,  105 => 43,  102 => 46,  99 => 30,  95 => 33,  91 => 29,  81 => 23,  70 => 31,  66 => 17,  62 => 26,  59 => 23,  56 => 11,  52 => 11,  49 => 19,  45 => 9,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
