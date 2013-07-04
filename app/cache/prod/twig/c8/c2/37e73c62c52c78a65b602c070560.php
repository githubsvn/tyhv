<?php

/* SMAdminBundle:Menu:edit.html.twig */
class __TwigTemplate_c8c237e73c62c52c78a65b602c070560 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var type = \$('#sm_bundle_adminbundle_menutype_type').attr('value');
        var link = ";
        // line 7
        if (isset($context["mnuTypeLink"])) { $_mnuTypeLink_ = $context["mnuTypeLink"]; } else { $_mnuTypeLink_ = null; }
        echo twig_escape_filter($this->env, $_mnuTypeLink_, "html", null, true);
        echo ";

        if (type != link) {
            \$(\"#url\").hide();
            \$(\"#param\").show();
            \$(\"input[id=sm_bundle_adminbundle_menutype_url]\").attr('value','');
        } else {
            \$(\"#url\").show();
            \$(\"#param\").hide();
        }



        \$(\"#sm_bundle_adminbundle_menutype_type\").bind(\"change\", function(){
            var mnuTypeText = ";
        // line 21
        if (isset($context["mnuTypeText"])) { $_mnuTypeText_ = $context["mnuTypeText"]; } else { $_mnuTypeText_ = null; }
        echo twig_escape_filter($this->env, $_mnuTypeText_, "html", null, true);
        echo ";
            var mnuTypeLink = ";
        // line 22
        if (isset($context["mnuTypeLink"])) { $_mnuTypeLink_ = $context["mnuTypeLink"]; } else { $_mnuTypeLink_ = null; }
        echo twig_escape_filter($this->env, $_mnuTypeLink_, "html", null, true);
        echo ";
            var typeMenu = \$(this).attr('value');

            if (typeMenu == mnuTypeText || typeMenu == mnuTypeLink) {
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
        // line 39
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
        // line 62
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 67
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "parent"), 'errors');
        echo "
                ";
        // line 68
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 74
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'errors');
        echo "
                ";
        // line 75
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"url\">
            <label class=\"control-label\" for=\"input01\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 81
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "url"), 'errors');
        echo "
                ";
        // line 82
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "url"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"param\">
            <label class=\"control-label\" for=\"input01\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 88
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "param"), 'errors');
        echo "
                ";
        // line 89
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "param"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 96
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'errors');
        echo "
                ";
        // line 97
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 105
        $context["isActive"] = 1;
        // line 106
        echo "                  ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 107
            echo "                      ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 108
                echo "                          <li class=\"active\"><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 110
                echo "                          <li><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 112
            echo "                      ";
            $context["isActive"] = 2;
            // line 113
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 116
        $context["isActive"] = 1;
        // line 117
        echo "                ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 118
            echo "                    ";
            $context["currentAL"] = null;
            // line 119
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "menu_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 120
                echo "                        ";
                if (isset($context["ctLanguage"])) { $_ctLanguage_ = $context["ctLanguage"]; } else { $_ctLanguage_ = null; }
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_ctLanguage_, "vars"), "value"), "language"), "id") == $this->getAttribute($_lang_, "id"))) {
                    // line 121
                    echo "                            ";
                    if (isset($context["ctLanguage"])) { $_ctLanguage_ = $context["ctLanguage"]; } else { $_ctLanguage_ = null; }
                    $context["currentAL"] = $_ctLanguage_;
                    // line 122
                    echo "                        ";
                }
                // line 123
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                    ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 125
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 127
                echo "                        <div class=\"tab-pane\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 129
            echo "                            <fieldset>
                                ";
            // line 130
            if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
            if ((!(null === $_currentAL_))) {
                // line 131
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 134
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'errors');
                echo "
                                        ";
                // line 135
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 136
                    echo "                                            ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 138
                    echo "                                            ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget');
                    echo "
                                        ";
                }
                // line 140
                echo "                                    </div>
                                </div>
                                ";
            }
            // line 143
            echo "                            </fieldset>
                        </div>
                    ";
            // line 145
            $context["isActive"] = 2;
            // line 146
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 151
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 153
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
        return "SMAdminBundle:Menu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 124,  288 => 123,  404 => 131,  371 => 123,  350 => 119,  339 => 117,  304 => 102,  282 => 94,  257 => 87,  217 => 74,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 150,  441 => 148,  437 => 147,  432 => 146,  427 => 144,  414 => 138,  407 => 136,  403 => 135,  398 => 134,  388 => 126,  365 => 123,  360 => 146,  347 => 115,  336 => 112,  310 => 104,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 152,  433 => 146,  426 => 144,  419 => 142,  415 => 141,  410 => 140,  400 => 135,  393 => 132,  382 => 125,  372 => 151,  366 => 147,  359 => 121,  352 => 119,  272 => 95,  377 => 152,  370 => 124,  353 => 119,  342 => 138,  300 => 102,  207 => 74,  344 => 118,  321 => 132,  308 => 96,  289 => 97,  279 => 97,  242 => 72,  358 => 145,  354 => 143,  349 => 140,  343 => 117,  337 => 116,  335 => 136,  298 => 125,  293 => 99,  269 => 84,  264 => 89,  259 => 116,  219 => 82,  205 => 62,  160 => 81,  72 => 34,  175 => 66,  77 => 35,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 131,  307 => 103,  286 => 98,  275 => 96,  268 => 99,  263 => 95,  243 => 91,  190 => 69,  326 => 134,  305 => 127,  290 => 99,  285 => 122,  280 => 87,  261 => 117,  241 => 87,  237 => 69,  224 => 65,  142 => 74,  90 => 26,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 105,  297 => 101,  283 => 87,  267 => 118,  249 => 113,  244 => 74,  230 => 80,  223 => 71,  177 => 56,  116 => 43,  53 => 17,  44 => 9,  325 => 99,  316 => 95,  309 => 106,  292 => 100,  281 => 121,  276 => 120,  271 => 93,  265 => 86,  260 => 91,  256 => 80,  253 => 93,  214 => 105,  210 => 78,  206 => 76,  196 => 59,  78 => 35,  255 => 114,  251 => 89,  246 => 112,  232 => 73,  228 => 71,  254 => 86,  233 => 78,  231 => 85,  222 => 107,  208 => 68,  204 => 59,  191 => 59,  188 => 62,  185 => 58,  178 => 88,  149 => 42,  143 => 41,  132 => 43,  96 => 28,  169 => 58,  137 => 72,  129 => 68,  119 => 65,  154 => 55,  146 => 50,  141 => 48,  198 => 66,  181 => 68,  135 => 43,  127 => 49,  122 => 40,  86 => 25,  73 => 13,  55 => 13,  227 => 84,  221 => 75,  107 => 35,  67 => 27,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 150,  434 => 118,  430 => 116,  424 => 115,  421 => 140,  411 => 111,  405 => 138,  399 => 109,  395 => 127,  390 => 107,  386 => 131,  381 => 153,  378 => 104,  374 => 125,  367 => 82,  364 => 121,  361 => 80,  355 => 120,  351 => 71,  348 => 118,  345 => 69,  341 => 68,  338 => 115,  332 => 114,  322 => 110,  314 => 110,  287 => 102,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 87,  211 => 73,  195 => 68,  193 => 63,  187 => 62,  184 => 61,  182 => 54,  164 => 57,  161 => 56,  140 => 47,  126 => 46,  106 => 30,  103 => 32,  100 => 29,  93 => 26,  74 => 18,  68 => 12,  51 => 19,  333 => 100,  327 => 110,  324 => 111,  320 => 107,  317 => 106,  312 => 129,  306 => 86,  303 => 102,  299 => 101,  296 => 106,  291 => 105,  277 => 79,  273 => 92,  258 => 75,  248 => 84,  245 => 83,  239 => 90,  234 => 69,  226 => 108,  216 => 106,  202 => 97,  199 => 70,  192 => 94,  165 => 82,  156 => 50,  134 => 50,  131 => 43,  120 => 38,  115 => 36,  82 => 36,  76 => 19,  61 => 15,  54 => 14,  171 => 65,  163 => 55,  159 => 55,  152 => 51,  138 => 51,  123 => 48,  117 => 44,  111 => 30,  101 => 34,  98 => 29,  83 => 39,  75 => 31,  71 => 18,  64 => 31,  43 => 15,  36 => 12,  104 => 42,  80 => 23,  63 => 30,  58 => 28,  40 => 8,  24 => 2,  94 => 27,  88 => 25,  48 => 10,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 75,  240 => 82,  236 => 110,  229 => 77,  225 => 76,  220 => 81,  218 => 65,  215 => 80,  212 => 64,  209 => 63,  200 => 73,  194 => 60,  179 => 60,  176 => 59,  173 => 86,  166 => 57,  162 => 51,  157 => 60,  155 => 79,  151 => 54,  148 => 48,  145 => 47,  139 => 46,  128 => 42,  114 => 35,  109 => 62,  87 => 40,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 51,  97 => 29,  92 => 41,  89 => 38,  85 => 24,  69 => 17,  28 => 2,  57 => 21,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 71,  197 => 96,  189 => 66,  183 => 89,  180 => 67,  174 => 59,  170 => 58,  167 => 63,  158 => 46,  153 => 59,  150 => 49,  147 => 75,  144 => 49,  136 => 46,  133 => 43,  130 => 48,  124 => 67,  121 => 37,  113 => 35,  108 => 34,  105 => 31,  102 => 46,  99 => 41,  95 => 39,  91 => 39,  81 => 35,  70 => 18,  66 => 16,  62 => 22,  59 => 23,  56 => 11,  52 => 10,  49 => 19,  45 => 8,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
