<?php

/* SMAdminBundle:Company:index.html.twig */
class __TwigTemplate_5faf1a370cd2c3a7dce4a2a487f20353 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#sortTable').dataTable({
            \"bPaginate\": false,
            \"bLengthChange\": false,
            \"bFilter\": false,
            \"bSort\": true,
            \"bInfo\": false,
            \"bAutoWidth\": true,
            \"aaSorting\": [ [0,'asc'], [1,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 3, 4 ] }
            ],
        });
    } );

    \$(document).ready(function() {
        \$(\"#btnReset\").click(function() {
            \$(\"#name\").val('');
            \$(\"#type\").val('');
        });
    } );

</script>

<h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\" style=\"margin-bottom: 10px;\">
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 35
            echo "                ";
            if (($this->getContext($context, "lang") == $this->getAttribute($this->getContext($context, "opt"), "id"))) {
                // line 36
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 38
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 42
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </ul>
    </div>
    <div style=\"clear: both; margin-top: 10px;\"></div>
    <div class=\"btn-group pull-center\">
        <form class=\"well form-search\" method=\"POST\" action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo " : <input type=\"text\" name=\"name\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\" id=\"name\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Type", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"type\" id=\"type\">
                        <option value=\"\">-- ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optComTypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["comType"]) {
            // line 53
            echo "                            ";
            if ((!(null === $this->getAttribute($this->getContext($context, "comType"), "getCurrentLanguage")))) {
                // line 54
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comType"), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getContext($context, "comType"), "id") == $this->getContext($context, "type"))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 55
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "comType"), "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 58
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </select>
                    <input type=\"hidden\" name=\"language\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "lang"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>
<div style=\"clear: both; margin-bottom: 10px;\"></div>
<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th colspan=\"2\" style=\"text-align: left;\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total", array(), "SMAdminBundle"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getContext($context, "total"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page", array(), "SMAdminBundle"), "html", null, true);
        echo " : (";
        echo twig_escape_filter($this->env, $this->getContext($context, "currentPage"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getContext($context, "lastPage"), "html", null, true);
        echo ")</th>
            <th colspan=\"3\"></th>
        </tr>
        <tr>
            <th>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 83
            echo "        <tr>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "company"), "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 86
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "name")))) {
                // line 87
                echo "                    ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), 50), "html", null, true);
                echo "
                ";
            } else {
                // line 89
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                ";
            }
            // line 91
            echo "            </td>
            <td>";
            // line 92
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "company"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "company"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 94
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "company"), "status") == 1)) {
                // line 95
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 97
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 99
            echo "            </td>
            <td>
                <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "company"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 102
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "language")))) {
                // line 103
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                ";
            }
            // line 106
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "    </tbody>
</table>

";
        // line 114
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 115
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 119
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 120
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 121
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 123
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 125
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 131
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Company:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 131,  352 => 127,  333 => 123,  322 => 120,  314 => 118,  299 => 110,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 117,  303 => 113,  257 => 98,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  330 => 124,  324 => 123,  310 => 117,  306 => 115,  248 => 91,  345 => 127,  339 => 130,  331 => 124,  323 => 122,  320 => 121,  288 => 107,  266 => 104,  291 => 105,  283 => 104,  271 => 96,  262 => 98,  239 => 93,  208 => 70,  316 => 120,  312 => 119,  308 => 118,  296 => 113,  265 => 96,  261 => 95,  256 => 95,  250 => 100,  236 => 87,  224 => 80,  176 => 63,  113 => 40,  202 => 83,  56 => 23,  304 => 114,  297 => 111,  259 => 103,  244 => 97,  228 => 89,  193 => 74,  90 => 37,  285 => 104,  281 => 108,  275 => 98,  269 => 101,  267 => 95,  251 => 92,  246 => 95,  234 => 86,  192 => 70,  298 => 114,  294 => 111,  278 => 102,  264 => 97,  255 => 101,  247 => 87,  243 => 86,  238 => 96,  218 => 87,  214 => 74,  206 => 71,  158 => 57,  146 => 55,  40 => 8,  286 => 110,  279 => 101,  274 => 94,  260 => 95,  252 => 89,  241 => 94,  237 => 85,  233 => 79,  231 => 82,  210 => 85,  195 => 80,  187 => 64,  181 => 62,  167 => 67,  137 => 53,  124 => 46,  97 => 39,  69 => 19,  53 => 14,  229 => 84,  221 => 75,  209 => 88,  203 => 75,  197 => 75,  174 => 65,  166 => 59,  142 => 51,  117 => 46,  62 => 16,  227 => 93,  223 => 84,  219 => 91,  213 => 72,  207 => 76,  190 => 78,  182 => 73,  168 => 65,  150 => 55,  110 => 44,  129 => 47,  87 => 26,  49 => 16,  134 => 52,  86 => 38,  77 => 22,  164 => 62,  148 => 56,  128 => 46,  199 => 74,  179 => 71,  169 => 61,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 142,  366 => 138,  363 => 140,  357 => 132,  353 => 135,  350 => 128,  347 => 126,  344 => 129,  341 => 125,  335 => 129,  325 => 121,  318 => 119,  309 => 115,  305 => 111,  302 => 115,  293 => 112,  290 => 106,  284 => 106,  280 => 103,  272 => 101,  258 => 94,  254 => 97,  240 => 90,  235 => 91,  232 => 87,  226 => 83,  217 => 86,  200 => 82,  175 => 69,  173 => 62,  170 => 59,  156 => 58,  125 => 49,  99 => 42,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 107,  282 => 104,  276 => 103,  273 => 101,  270 => 102,  268 => 99,  263 => 100,  249 => 96,  245 => 85,  230 => 75,  222 => 82,  220 => 83,  215 => 78,  211 => 77,  204 => 73,  198 => 72,  185 => 73,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 30,  38 => 6,  144 => 59,  141 => 54,  135 => 50,  126 => 50,  109 => 36,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 39,  84 => 26,  94 => 38,  88 => 27,  59 => 5,  28 => 2,  225 => 76,  216 => 90,  212 => 88,  205 => 77,  201 => 76,  196 => 66,  194 => 62,  191 => 73,  189 => 74,  186 => 61,  180 => 71,  172 => 66,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 51,  121 => 45,  118 => 42,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 11,  105 => 35,  93 => 29,  79 => 36,  76 => 35,  72 => 34,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 58,  152 => 61,  149 => 58,  145 => 55,  139 => 51,  131 => 48,  123 => 50,  120 => 49,  115 => 39,  106 => 44,  101 => 34,  96 => 32,  83 => 37,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 61,  171 => 68,  165 => 60,  162 => 59,  157 => 57,  153 => 54,  151 => 57,  143 => 48,  138 => 53,  136 => 49,  133 => 52,  130 => 51,  122 => 43,  119 => 41,  116 => 48,  111 => 37,  108 => 36,  102 => 43,  98 => 41,  95 => 41,  92 => 40,  89 => 28,  85 => 38,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
