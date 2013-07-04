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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 10
            echo "                ";
            if (($this->getContext($context, "lang") == $this->getAttribute($this->getContext($context, "opt"), "id"))) {
                // line 11
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 17
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 39
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 40
                echo "                    ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getTreeName"), 50), "html", null, true);
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
            if ($this->getAttribute($this->getContext($context, "entity"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 48
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "entity", true), "parent", array(), "any", false, true), "children", array(), "any", true, true)) {
                // line 49
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "parent"), "children"), 0, array(), "array"), "id") != $this->getAttribute($this->getContext($context, "entity"), "id"))) {
                    // line 50
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_up", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                    echo "\">
                        <i class=\"icon-arrow-up\"></i>
                    </a>
                ";
                }
                // line 54
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "parent"), "children"), (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "parent"), "children")) - 1), array(), "array"), "id") != $this->getAttribute($this->getContext($context, "entity"), "id"))) {
                    // line 55
                    echo "                    <a class=\"pull-right\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_down", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
            if (($this->getAttribute($this->getContext($context, "entity"), "status") == 1)) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 70
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 71
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getId"))), "html", null, true);
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
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 83
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 88
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 89
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 91
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
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
        return array (  327 => 141,  317 => 136,  311 => 135,  345 => 153,  331 => 142,  323 => 140,  319 => 143,  308 => 138,  302 => 136,  288 => 131,  256 => 113,  359 => 131,  352 => 127,  333 => 123,  325 => 146,  322 => 120,  314 => 140,  280 => 103,  433 => 166,  425 => 164,  419 => 160,  411 => 158,  407 => 156,  401 => 152,  395 => 150,  389 => 148,  383 => 146,  366 => 138,  349 => 132,  321 => 121,  315 => 117,  309 => 134,  442 => 172,  438 => 171,  434 => 170,  428 => 166,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  396 => 153,  392 => 152,  387 => 147,  369 => 142,  363 => 140,  358 => 135,  353 => 135,  347 => 126,  341 => 152,  339 => 130,  330 => 124,  324 => 123,  296 => 134,  293 => 126,  266 => 104,  258 => 94,  344 => 129,  337 => 151,  318 => 119,  307 => 116,  299 => 128,  305 => 132,  291 => 132,  283 => 129,  271 => 118,  262 => 115,  250 => 100,  316 => 119,  312 => 119,  306 => 115,  300 => 135,  277 => 127,  254 => 97,  248 => 119,  242 => 89,  240 => 117,  236 => 87,  208 => 70,  188 => 97,  113 => 57,  56 => 21,  304 => 114,  297 => 111,  259 => 122,  244 => 110,  235 => 91,  228 => 113,  193 => 65,  90 => 37,  285 => 123,  281 => 122,  267 => 95,  251 => 92,  246 => 95,  234 => 114,  192 => 72,  298 => 114,  284 => 106,  272 => 101,  264 => 97,  255 => 101,  247 => 111,  238 => 108,  232 => 80,  218 => 87,  214 => 80,  206 => 107,  158 => 57,  146 => 79,  40 => 8,  286 => 99,  279 => 95,  274 => 94,  260 => 91,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  226 => 78,  210 => 72,  195 => 67,  187 => 63,  181 => 60,  167 => 54,  137 => 42,  124 => 37,  97 => 27,  69 => 16,  53 => 11,  229 => 84,  221 => 83,  209 => 108,  203 => 75,  197 => 74,  174 => 64,  166 => 59,  142 => 51,  117 => 35,  62 => 27,  227 => 93,  223 => 104,  219 => 102,  213 => 101,  207 => 71,  190 => 78,  182 => 73,  168 => 65,  150 => 55,  110 => 31,  129 => 39,  87 => 26,  49 => 16,  134 => 52,  86 => 25,  77 => 22,  164 => 82,  148 => 75,  128 => 46,  199 => 69,  179 => 94,  169 => 84,  161 => 63,  107 => 33,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 165,  421 => 122,  418 => 121,  413 => 159,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 146,  378 => 144,  375 => 144,  372 => 140,  367 => 141,  364 => 104,  360 => 136,  354 => 134,  351 => 81,  348 => 80,  342 => 72,  338 => 127,  335 => 129,  332 => 125,  329 => 68,  326 => 123,  320 => 120,  310 => 117,  303 => 113,  294 => 110,  290 => 106,  278 => 102,  275 => 102,  269 => 101,  265 => 99,  261 => 34,  257 => 98,  253 => 112,  243 => 90,  239 => 93,  217 => 74,  202 => 98,  200 => 82,  175 => 69,  173 => 85,  170 => 55,  156 => 49,  125 => 64,  99 => 42,  301 => 112,  295 => 113,  292 => 109,  289 => 108,  287 => 124,  282 => 104,  276 => 120,  273 => 119,  270 => 106,  268 => 93,  263 => 100,  249 => 88,  245 => 87,  230 => 106,  222 => 82,  220 => 76,  215 => 78,  211 => 77,  204 => 70,  198 => 63,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 14,  38 => 6,  144 => 59,  141 => 71,  135 => 74,  126 => 50,  109 => 57,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 50,  84 => 19,  94 => 38,  88 => 27,  59 => 13,  28 => 2,  225 => 105,  216 => 90,  212 => 88,  205 => 70,  201 => 106,  196 => 73,  194 => 96,  191 => 65,  189 => 74,  186 => 94,  180 => 71,  172 => 66,  159 => 50,  154 => 48,  147 => 46,  132 => 68,  127 => 47,  121 => 36,  118 => 42,  114 => 65,  104 => 41,  100 => 54,  78 => 23,  75 => 31,  71 => 19,  34 => 11,  105 => 56,  93 => 26,  79 => 36,  76 => 35,  72 => 34,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 82,  152 => 61,  149 => 58,  145 => 45,  139 => 75,  131 => 40,  123 => 68,  120 => 49,  115 => 39,  106 => 30,  101 => 28,  96 => 32,  83 => 39,  80 => 39,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 93,  178 => 59,  171 => 89,  165 => 60,  162 => 86,  157 => 78,  153 => 77,  151 => 81,  143 => 44,  138 => 53,  136 => 49,  133 => 51,  130 => 72,  122 => 43,  119 => 67,  116 => 61,  111 => 37,  108 => 36,  102 => 33,  98 => 32,  95 => 41,  92 => 29,  89 => 28,  85 => 38,  81 => 40,  73 => 17,  64 => 31,  60 => 22,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
