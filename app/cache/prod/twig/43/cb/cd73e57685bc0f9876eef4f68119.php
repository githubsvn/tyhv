<?php

/* SMAdminBundle:Menu:new.html.twig */
class __TwigTemplate_43cbcd73e57685bc0f9876eef4f68119 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Creation", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#url\").hide();
        \$(\"#sm_bundle_adminbundle_menutype_type\").bind(\"change\", function(){
            var mnuTypeText = ";
        // line 8
        if (isset($context["mnuTypeText"])) { $_mnuTypeText_ = $context["mnuTypeText"]; } else { $_mnuTypeText_ = null; }
        echo twig_escape_filter($this->env, $_mnuTypeText_, "html", null, true);
        echo ";
            var mnuTypeLink = ";
        // line 9
        if (isset($context["mnuTypeLink"])) { $_mnuTypeLink_ = $context["mnuTypeLink"]; } else { $_mnuTypeLink_ = null; }
        echo twig_escape_filter($this->env, $_mnuTypeLink_, "html", null, true);
        echo ";
            var typeMenu = \$(this).attr('value');

            if (typeMenu == mnuTypeText) {
                \$('#sm_bundle_adminbundle_menutype_param').removeAttr(\"required\");
            } else {
                \$(\"#sm_bundle_adminbundle_menutype_param\").attr(\"required\", \"true\");
            }

            if (typeMenu == mnuTypeLink) {
                \$(\"#url\").show();
                \$(\"#param\").hide();
            } else {
                \$(\"#url\").hide();
                \$(\"#param\").show();
            }


            var urlMenu = \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_get_param"), "html", null, true);
        echo "\" + '/' + typeMenu;
            \$.ajax({url:urlMenu, success:function(data){
                //remove all option of the select
                \$('#sm_bundle_adminbundle_menutype_param').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    \$(\"#sm_bundle_adminbundle_menutype_param\").append(\"<option value=\" + item.id + \">\" + item.name + \"</option>\");
                });
            }});

            //Call ajax
            \$('#ajaxModal').modal();
            \$('#ajaxModal').ajaxStart(function() {
                \$(this).show();
            })
            .ajaxStop(function() {
                \$('#ajaxModal').modal('hide')
            });
        });
    });
</script>

<form action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_new"), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "parent"), 'errors');
        echo "
                ";
        // line 57
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 63
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'errors');
        echo "
                ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"url\">
            <label class=\"control-label\" for=\"input01\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 70
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "url"), 'errors');
        echo "
                ";
        // line 71
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "url"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"param\">
            <label class=\"control-label\" for=\"input01\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "param"), 'errors');
        echo "
                ";
        // line 78
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "param"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 84
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'errors');
        echo "
                ";
        // line 85
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'widget', array("attr" => array("checked" => "checked")));
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 93
        $context["isActive"] = 1;
        // line 94
        echo "                  ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 95
            echo "                      ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 96
                echo "                          <li class=\"active\"><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 98
                echo "                          <li><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 100
            echo "                      ";
            $context["isActive"] = 2;
            // line 101
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 104
        $context["isActive"] = 1;
        // line 105
        echo "                ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 106
            echo "                    ";
            $context["currentAL"] = null;
            // line 107
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "menu_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["menuLanguage"]) {
                // line 108
                echo "                        ";
                if (isset($context["menuLanguage"])) { $_menuLanguage_ = $context["menuLanguage"]; } else { $_menuLanguage_ = null; }
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_menuLanguage_, "vars"), "value"), "language"), "id") == $this->getAttribute($_lang_, "id"))) {
                    // line 109
                    echo "                            ";
                    if (isset($context["menuLanguage"])) { $_menuLanguage_ = $context["menuLanguage"]; } else { $_menuLanguage_ = null; }
                    $context["currentAL"] = $_menuLanguage_;
                    // line 110
                    echo "                        ";
                }
                // line 111
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                    ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 113
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 115
                echo "                        <div class=\"tab-pane\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 117
            echo "                            <fieldset>
                                ";
            // line 118
            if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
            if ((!(null === $_currentAL_))) {
                // line 119
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 122
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'errors');
                echo "
                                        ";
                // line 123
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 124
                    echo "                                            ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 126
                    echo "                                            ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget');
                    echo "
                                        ";
                }
                // line 128
                echo "                                    </div>
                                </div>

                                ";
            }
            // line 132
            echo "                            </fieldset>
                        </div>
                    ";
            // line 134
            $context["isActive"] = 2;
            // line 135
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 140
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Menu:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 140,  301 => 119,  295 => 117,  238 => 102,  294 => 124,  288 => 115,  404 => 131,  371 => 123,  350 => 136,  339 => 117,  304 => 120,  282 => 94,  257 => 87,  217 => 74,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 150,  441 => 148,  437 => 147,  432 => 146,  427 => 144,  414 => 138,  407 => 136,  403 => 135,  398 => 134,  388 => 126,  365 => 142,  360 => 146,  347 => 115,  336 => 112,  310 => 104,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 152,  433 => 146,  426 => 144,  419 => 142,  415 => 141,  410 => 140,  400 => 135,  393 => 132,  382 => 125,  372 => 151,  366 => 147,  359 => 121,  352 => 119,  272 => 95,  377 => 152,  370 => 124,  353 => 119,  342 => 134,  300 => 102,  207 => 74,  344 => 135,  321 => 132,  308 => 96,  289 => 97,  279 => 97,  242 => 104,  358 => 145,  354 => 143,  349 => 140,  343 => 117,  337 => 116,  335 => 136,  298 => 118,  293 => 99,  269 => 84,  264 => 109,  259 => 108,  219 => 98,  205 => 95,  160 => 81,  72 => 34,  175 => 82,  77 => 35,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 124,  307 => 103,  286 => 98,  275 => 96,  268 => 110,  263 => 95,  243 => 91,  190 => 69,  326 => 134,  305 => 127,  290 => 99,  285 => 122,  280 => 87,  261 => 117,  241 => 87,  237 => 69,  224 => 65,  142 => 74,  90 => 26,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 105,  297 => 101,  283 => 87,  267 => 118,  249 => 113,  244 => 105,  230 => 80,  223 => 71,  177 => 56,  116 => 43,  53 => 17,  44 => 9,  325 => 126,  316 => 95,  309 => 122,  292 => 100,  281 => 113,  276 => 120,  271 => 111,  265 => 86,  260 => 91,  256 => 80,  253 => 107,  214 => 105,  210 => 78,  206 => 76,  196 => 59,  78 => 35,  255 => 114,  251 => 89,  246 => 112,  232 => 101,  228 => 71,  254 => 86,  233 => 78,  231 => 85,  222 => 107,  208 => 68,  204 => 59,  191 => 59,  188 => 62,  185 => 85,  178 => 88,  149 => 71,  143 => 41,  132 => 43,  96 => 28,  169 => 58,  137 => 72,  129 => 68,  119 => 65,  154 => 55,  146 => 50,  141 => 48,  198 => 66,  181 => 68,  135 => 43,  127 => 49,  122 => 40,  86 => 25,  73 => 13,  55 => 13,  227 => 84,  221 => 75,  107 => 35,  67 => 27,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 150,  434 => 118,  430 => 116,  424 => 115,  421 => 140,  411 => 111,  405 => 138,  399 => 109,  395 => 127,  390 => 107,  386 => 131,  381 => 153,  378 => 104,  374 => 125,  367 => 82,  364 => 121,  361 => 141,  355 => 120,  351 => 71,  348 => 118,  345 => 69,  341 => 68,  338 => 132,  332 => 128,  322 => 110,  314 => 123,  287 => 102,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 87,  211 => 73,  195 => 68,  193 => 63,  187 => 62,  184 => 61,  182 => 54,  164 => 57,  161 => 56,  140 => 47,  126 => 63,  106 => 30,  103 => 54,  100 => 29,  93 => 50,  74 => 18,  68 => 12,  51 => 19,  333 => 100,  327 => 110,  324 => 111,  320 => 107,  317 => 106,  312 => 129,  306 => 86,  303 => 102,  299 => 101,  296 => 106,  291 => 105,  277 => 112,  273 => 92,  258 => 75,  248 => 84,  245 => 83,  239 => 90,  234 => 69,  226 => 108,  216 => 106,  202 => 97,  199 => 94,  192 => 94,  165 => 82,  156 => 50,  134 => 50,  131 => 64,  120 => 38,  115 => 36,  82 => 36,  76 => 19,  61 => 15,  54 => 14,  171 => 65,  163 => 55,  159 => 55,  152 => 51,  138 => 51,  123 => 48,  117 => 44,  111 => 30,  101 => 34,  98 => 29,  83 => 39,  75 => 31,  71 => 18,  64 => 31,  43 => 15,  36 => 12,  104 => 42,  80 => 23,  63 => 30,  58 => 28,  40 => 8,  24 => 2,  94 => 27,  88 => 25,  48 => 10,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 106,  240 => 82,  236 => 110,  229 => 100,  225 => 76,  220 => 81,  218 => 65,  215 => 80,  212 => 64,  209 => 96,  200 => 73,  194 => 60,  179 => 60,  176 => 59,  173 => 86,  166 => 57,  162 => 77,  157 => 75,  155 => 79,  151 => 54,  148 => 48,  145 => 47,  139 => 68,  128 => 42,  114 => 35,  109 => 62,  87 => 40,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 51,  97 => 29,  92 => 41,  89 => 38,  85 => 24,  69 => 17,  28 => 2,  57 => 21,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 71,  197 => 93,  189 => 66,  183 => 89,  180 => 84,  174 => 59,  170 => 58,  167 => 78,  158 => 46,  153 => 59,  150 => 49,  147 => 75,  144 => 70,  136 => 46,  133 => 43,  130 => 48,  124 => 67,  121 => 61,  113 => 57,  108 => 56,  105 => 31,  102 => 46,  99 => 41,  95 => 39,  91 => 39,  81 => 35,  70 => 18,  66 => 16,  62 => 22,  59 => 23,  56 => 11,  52 => 10,  49 => 19,  45 => 9,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
