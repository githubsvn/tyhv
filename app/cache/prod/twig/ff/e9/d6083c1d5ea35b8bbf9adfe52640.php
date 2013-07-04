<?php

/* SMAdminBundle:Menu:index.html.twig */
class __TwigTemplate_ffe9d6083c1d5ea35b8bbf9adfe52640 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 9
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 10
            echo "                ";
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            if (($_lang_ == $this->getAttribute($_opt_, "id"))) {
                // line 11
                echo "                ";
                if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_opt_, "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 16
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 17
            echo "                <li><a href=\"";
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1, "lang" => $this->getAttribute($_opt_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_opt_, "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ul>
    </div>
</div>

<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th style=\"width: 14px;\">&nbsp;</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 35
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 39
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ((!(null === $this->getAttribute($_entity_, "getCurrentLanguage")))) {
                // line 40
                echo "                    ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "getCurrentLanguage"), "getTreeName"), 50), "html", null, true);
                echo "
                ";
            } else {
                // line 42
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                ";
            }
            // line 44
            echo "
            </td>
            <td>";
            // line 46
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "createdAt")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 48
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($this->getAttribute($_entity_, "parent", array(), "any", false, true), "children", array(), "any", true, true)) {
                // line 49
                echo "                ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_entity_, "parent"), "children"), 0, array(), "array"), "id") != $this->getAttribute($_entity_, "id"))) {
                    // line 50
                    echo "                    <a href=\"";
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_up", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                    echo "\">
                        <i class=\"icon-arrow-up\"></i>
                    </a>
                ";
                }
                // line 54
                echo "                ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_entity_, "parent"), "children"), (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "parent"), "children")) - 1), array(), "array"), "id") != $this->getAttribute($_entity_, "id"))) {
                    // line 55
                    echo "                    <a class=\"pull-right\" href=\"";
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_down", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                    echo "\">
                        <i class=\"icon-arrow-down\"></i>
                    </a>
                ";
                }
                // line 59
                echo "                ";
            }
            // line 60
            echo "            </td>
            <td>
                ";
            // line 62
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (($this->getAttribute($_entity_, "status") == 1)) {
                // line 63
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 65
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 67
            echo "            </td>
            <td>
                <a href=\"";
            // line 69
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 70
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ((!(null === $this->getAttribute($_entity_, "getCurrentLanguage")))) {
                // line 71
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 72
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_delete", array("id" => $this->getAttribute($this->getAttribute($_entity_, "getCurrentLanguage"), "getId"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                ";
            }
            // line 74
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </tbody>
</table>

";
        // line 82
        if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
        if (($_lastPage_ > 1)) {
            // line 83
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 85
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 86
            if (isset($context["previousPage"])) { $_previousPage_ = $context["previousPage"]; } else { $_previousPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $_previousPage_, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 87
            if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $_lastPage_));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 88
                echo "      ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
                if (($_page_ == $_currentPage_)) {
                    // line 89
                    echo "        <li class=\"active\"><a href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $_page_, "lang" => $_lang_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 91
                    echo "        <li><a href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $_page_, "lang" => $_lang_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 93
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        <li><a href=\"";
            if (isset($context["nextPage"])) { $_nextPage_ = $context["nextPage"]; } else { $_nextPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $_nextPage_, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 95
            if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $_lastPage_, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Menu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 140,  301 => 119,  295 => 117,  238 => 102,  294 => 124,  288 => 115,  404 => 131,  371 => 123,  350 => 136,  339 => 117,  304 => 120,  282 => 94,  257 => 87,  217 => 74,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 150,  441 => 148,  437 => 147,  432 => 146,  427 => 144,  414 => 138,  407 => 136,  403 => 135,  398 => 134,  388 => 126,  365 => 142,  360 => 146,  347 => 115,  336 => 112,  310 => 104,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 152,  433 => 146,  426 => 144,  419 => 142,  415 => 141,  410 => 140,  400 => 135,  393 => 132,  382 => 125,  372 => 151,  366 => 147,  359 => 121,  352 => 119,  272 => 95,  377 => 152,  370 => 124,  353 => 119,  342 => 134,  300 => 102,  207 => 74,  344 => 135,  321 => 132,  308 => 96,  289 => 97,  279 => 97,  242 => 104,  358 => 145,  354 => 143,  349 => 140,  343 => 117,  337 => 116,  335 => 136,  298 => 118,  293 => 99,  269 => 84,  264 => 109,  259 => 108,  219 => 98,  205 => 95,  160 => 81,  72 => 34,  175 => 82,  77 => 35,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 124,  307 => 103,  286 => 98,  275 => 96,  268 => 110,  263 => 95,  243 => 91,  190 => 69,  326 => 134,  305 => 127,  290 => 99,  285 => 122,  280 => 87,  261 => 117,  241 => 87,  237 => 69,  224 => 65,  142 => 74,  90 => 26,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 105,  297 => 101,  283 => 87,  267 => 118,  249 => 113,  244 => 105,  230 => 80,  223 => 71,  177 => 56,  116 => 43,  53 => 17,  44 => 9,  325 => 99,  316 => 95,  309 => 94,  292 => 91,  281 => 89,  276 => 88,  271 => 87,  265 => 86,  260 => 85,  256 => 83,  253 => 82,  214 => 67,  210 => 65,  206 => 63,  196 => 59,  78 => 17,  255 => 114,  251 => 89,  246 => 112,  232 => 101,  228 => 71,  254 => 86,  233 => 78,  231 => 72,  222 => 107,  208 => 68,  204 => 59,  191 => 59,  188 => 62,  185 => 85,  178 => 88,  149 => 71,  143 => 41,  132 => 37,  96 => 28,  169 => 58,  137 => 72,  129 => 36,  119 => 65,  154 => 44,  146 => 50,  141 => 40,  198 => 66,  181 => 68,  135 => 43,  127 => 49,  122 => 40,  86 => 25,  73 => 16,  55 => 13,  227 => 84,  221 => 75,  107 => 35,  67 => 27,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 150,  434 => 118,  430 => 116,  424 => 115,  421 => 140,  411 => 111,  405 => 138,  399 => 109,  395 => 127,  390 => 107,  386 => 131,  381 => 153,  378 => 104,  374 => 125,  367 => 82,  364 => 121,  361 => 141,  355 => 120,  351 => 71,  348 => 118,  345 => 69,  341 => 68,  338 => 132,  332 => 128,  322 => 110,  314 => 123,  287 => 102,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 87,  211 => 73,  195 => 68,  193 => 63,  187 => 55,  184 => 61,  182 => 54,  164 => 57,  161 => 56,  140 => 47,  126 => 63,  106 => 30,  103 => 54,  100 => 26,  93 => 50,  74 => 18,  68 => 12,  51 => 10,  333 => 100,  327 => 110,  324 => 111,  320 => 107,  317 => 106,  312 => 129,  306 => 86,  303 => 93,  299 => 101,  296 => 106,  291 => 105,  277 => 112,  273 => 92,  258 => 75,  248 => 78,  245 => 83,  239 => 74,  234 => 69,  226 => 108,  216 => 106,  202 => 97,  199 => 60,  192 => 94,  165 => 82,  156 => 50,  134 => 50,  131 => 64,  120 => 38,  115 => 36,  82 => 36,  76 => 19,  61 => 15,  54 => 14,  171 => 65,  163 => 55,  159 => 55,  152 => 51,  138 => 39,  123 => 48,  117 => 31,  111 => 30,  101 => 34,  98 => 29,  83 => 39,  75 => 31,  71 => 18,  64 => 31,  43 => 15,  36 => 12,  104 => 27,  80 => 23,  63 => 13,  58 => 28,  40 => 8,  24 => 2,  94 => 27,  88 => 25,  48 => 10,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 9,  29 => 3,  32 => 4,  250 => 106,  240 => 82,  236 => 110,  229 => 100,  225 => 70,  220 => 81,  218 => 69,  215 => 80,  212 => 64,  209 => 96,  200 => 73,  194 => 60,  179 => 60,  176 => 59,  173 => 86,  166 => 57,  162 => 77,  157 => 75,  155 => 79,  151 => 54,  148 => 42,  145 => 47,  139 => 68,  128 => 42,  114 => 35,  109 => 62,  87 => 40,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 51,  97 => 29,  92 => 41,  89 => 38,  85 => 24,  69 => 14,  28 => 2,  57 => 21,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 93,  189 => 66,  183 => 54,  180 => 84,  174 => 50,  170 => 49,  167 => 48,  158 => 46,  153 => 59,  150 => 49,  147 => 75,  144 => 70,  136 => 46,  133 => 43,  130 => 48,  124 => 35,  121 => 61,  113 => 30,  108 => 28,  105 => 31,  102 => 46,  99 => 41,  95 => 39,  91 => 19,  81 => 35,  70 => 18,  66 => 16,  62 => 22,  59 => 23,  56 => 11,  52 => 10,  49 => 19,  45 => 9,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
