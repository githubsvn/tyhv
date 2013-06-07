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
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        return array (  333 => 123,  325 => 121,  322 => 120,  314 => 118,  304 => 114,  299 => 110,  290 => 106,  283 => 104,  280 => 103,  264 => 97,  251 => 92,  242 => 89,  236 => 87,  234 => 86,  169 => 61,  150 => 55,  397 => 153,  391 => 149,  385 => 148,  379 => 145,  361 => 137,  355 => 135,  350 => 133,  344 => 129,  338 => 127,  332 => 125,  326 => 123,  315 => 117,  309 => 115,  303 => 113,  297 => 111,  284 => 106,  260 => 95,  254 => 97,  246 => 95,  241 => 94,  239 => 93,  229 => 84,  226 => 83,  218 => 87,  210 => 85,  207 => 76,  202 => 83,  200 => 82,  414 => 161,  406 => 159,  400 => 155,  394 => 154,  388 => 151,  382 => 147,  376 => 145,  368 => 142,  353 => 135,  347 => 126,  341 => 125,  339 => 130,  335 => 129,  310 => 117,  306 => 115,  298 => 114,  296 => 113,  293 => 112,  281 => 108,  278 => 102,  272 => 101,  269 => 101,  266 => 104,  258 => 94,  255 => 101,  250 => 100,  248 => 91,  244 => 97,  238 => 96,  227 => 93,  219 => 91,  199 => 74,  195 => 80,  168 => 65,  146 => 55,  190 => 78,  182 => 73,  167 => 67,  161 => 64,  137 => 54,  97 => 39,  53 => 14,  40 => 8,  124 => 46,  117 => 41,  110 => 44,  90 => 37,  56 => 23,  69 => 19,  129 => 47,  87 => 28,  49 => 16,  134 => 52,  86 => 25,  179 => 70,  164 => 60,  148 => 53,  128 => 46,  113 => 40,  107 => 36,  77 => 22,  62 => 16,  23 => 2,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 160,  405 => 155,  401 => 154,  395 => 115,  392 => 153,  383 => 147,  378 => 110,  373 => 141,  370 => 143,  367 => 139,  364 => 141,  359 => 131,  356 => 104,  352 => 127,  346 => 82,  343 => 81,  340 => 80,  334 => 72,  330 => 124,  327 => 70,  324 => 123,  321 => 121,  318 => 119,  312 => 119,  302 => 61,  286 => 57,  279 => 54,  267 => 51,  261 => 36,  257 => 98,  253 => 34,  235 => 91,  231 => 24,  217 => 13,  209 => 88,  203 => 75,  192 => 131,  175 => 69,  173 => 62,  170 => 63,  156 => 58,  125 => 34,  99 => 42,  301 => 112,  295 => 59,  292 => 109,  289 => 108,  287 => 107,  282 => 55,  276 => 86,  273 => 85,  270 => 52,  268 => 99,  263 => 100,  249 => 96,  245 => 32,  230 => 75,  222 => 82,  220 => 72,  215 => 78,  211 => 77,  204 => 76,  198 => 75,  185 => 73,  183 => 60,  177 => 58,  160 => 59,  112 => 39,  82 => 25,  65 => 18,  38 => 6,  144 => 56,  141 => 54,  135 => 50,  126 => 50,  109 => 43,  103 => 40,  67 => 18,  61 => 15,  47 => 30,  91 => 39,  84 => 26,  94 => 38,  88 => 27,  59 => 5,  28 => 2,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 71,  194 => 138,  191 => 78,  189 => 74,  186 => 127,  180 => 71,  172 => 66,  159 => 60,  154 => 59,  147 => 56,  132 => 47,  127 => 35,  121 => 42,  118 => 42,  114 => 31,  104 => 41,  100 => 25,  78 => 24,  75 => 31,  71 => 19,  34 => 5,  105 => 35,  93 => 29,  79 => 36,  76 => 35,  72 => 34,  68 => 20,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 10,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 52,  145 => 51,  139 => 51,  131 => 42,  123 => 43,  120 => 49,  115 => 39,  106 => 29,  101 => 34,  96 => 32,  83 => 33,  80 => 24,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 65,  171 => 68,  165 => 60,  162 => 59,  157 => 48,  153 => 96,  151 => 57,  143 => 55,  138 => 53,  136 => 49,  133 => 93,  130 => 51,  122 => 43,  119 => 41,  116 => 48,  111 => 30,  108 => 36,  102 => 33,  98 => 32,  95 => 41,  92 => 29,  89 => 28,  85 => 38,  81 => 40,  73 => 21,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 13,  48 => 19,  45 => 8,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
