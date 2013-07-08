<?php

/* SMAdminBundle:News:index.html.twig */
class __TwigTemplate_b73a778c218c9cb934be4ea4e31282a0 extends Twig_Template
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
            \"aaSorting\": [ [1,'asc'], [2,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 0, 3, 4 ] }
            ],
        });
    } );

    \$(document).ready(function() {
        \$(\"#btnReset\").click(function() {
            \$(\"#name\").val('');
            \$(\"#category\").val('');
        });
    } );

</script>

<h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <a id=\"btn-del\" class=\"btn btn-primary\" rel=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete_all"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete all", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>

    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 37
            echo "                ";
            if (($this->getContext($context, "lang") == $this->getAttribute($this->getContext($context, "opt"), "id"))) {
                // line 38
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 40
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 44
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </ul>
    </div>
    <div style=\"clear: both; margin-top: 10px;\"></div>
    <div class=\"btn-group pull-center\">
        <form class=\"well form-search\" method=\"POST\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo " : <input type=\"text\" name=\"name\" id=\"name\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News Category", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"category\" id=\"category\">
                        <option value=\"\">-- ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optCats"));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 55
            echo "                            ";
            if ((!(null === $this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage")))) {
                // line 56
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "obj"), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getContext($context, "obj"), "id") == $this->getContext($context, "catId"))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 57
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage"), "getTreeName"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 60
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </select>
            <input type=\"hidden\" name=\"language\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getContext($context, "lang"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>

<form method=\"post\" name=\"frmList\" id=\"frmList\" action=\"#\">
    <table class=\"table table-bordered table-striped\" id=\"sortTable\">
        <thead>
            <tr>
                <th style=\"text-align: center;\"><input type=\"checkbox\" name=\"checkAll\" id=\"checkAll\"/></th>
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
            echo "            <tr>
                <td style=\"text-align: center;\"><input type=\"checkbox\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\" name=\"checklist[]\" class=\"chkItem\"/> </td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "id"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 87
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "name")))) {
                // line 88
                echo "                        ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), 50), "html", null, true);
                echo "
                    ";
            } else {
                // line 90
                echo "                        <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 92
            echo "                </td>
                <td>";
            // line 93
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 95
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "status") == 1)) {
                // line 96
                echo "                        <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            } else {
                // line 98
                echo "                        <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                    ";
            }
            // line 100
            echo "                </td>
                <td>
                    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                    ";
            // line 103
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "language")))) {
                // line 104
                echo "                        &nbsp; | &nbsp;
                        <a href=\"#\" rel=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 107
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        </tbody>
    </table>
</form>
";
        // line 115
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 116
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 121
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 122
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 124
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 126
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 132
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:News:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 127,  339 => 126,  331 => 124,  323 => 122,  320 => 121,  288 => 107,  266 => 100,  291 => 105,  283 => 103,  271 => 96,  262 => 98,  239 => 81,  208 => 70,  316 => 120,  312 => 119,  308 => 118,  296 => 112,  265 => 96,  261 => 95,  256 => 95,  250 => 87,  236 => 84,  224 => 80,  176 => 63,  113 => 43,  202 => 68,  56 => 23,  304 => 116,  297 => 111,  259 => 103,  244 => 87,  228 => 89,  193 => 74,  90 => 37,  285 => 104,  281 => 105,  275 => 98,  269 => 97,  267 => 95,  251 => 100,  246 => 92,  234 => 88,  192 => 70,  298 => 110,  294 => 111,  278 => 104,  264 => 95,  255 => 102,  247 => 87,  243 => 86,  238 => 85,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 53,  40 => 8,  286 => 110,  279 => 101,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 79,  231 => 82,  210 => 72,  195 => 71,  187 => 64,  181 => 62,  167 => 67,  137 => 53,  124 => 46,  97 => 39,  69 => 19,  53 => 14,  229 => 78,  221 => 75,  209 => 78,  203 => 79,  197 => 75,  174 => 65,  166 => 59,  142 => 51,  117 => 46,  62 => 16,  227 => 85,  223 => 84,  219 => 78,  213 => 72,  207 => 74,  190 => 59,  182 => 56,  168 => 67,  150 => 53,  110 => 40,  129 => 47,  87 => 26,  49 => 16,  134 => 49,  86 => 38,  77 => 22,  164 => 62,  148 => 56,  128 => 46,  199 => 69,  179 => 71,  169 => 61,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 132,  353 => 71,  350 => 128,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 111,  302 => 115,  293 => 52,  290 => 109,  284 => 104,  280 => 35,  272 => 100,  258 => 96,  254 => 88,  240 => 90,  235 => 91,  232 => 87,  226 => 78,  217 => 86,  200 => 66,  175 => 69,  173 => 60,  170 => 59,  156 => 63,  125 => 49,  99 => 35,  301 => 110,  295 => 96,  292 => 111,  289 => 104,  287 => 93,  282 => 104,  276 => 103,  273 => 101,  270 => 102,  268 => 93,  263 => 104,  249 => 93,  245 => 85,  230 => 75,  222 => 79,  220 => 83,  215 => 70,  211 => 71,  204 => 73,  198 => 72,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 18,  38 => 6,  144 => 59,  141 => 54,  135 => 54,  126 => 47,  109 => 36,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 29,  84 => 25,  94 => 38,  88 => 28,  59 => 5,  28 => 2,  225 => 76,  216 => 82,  212 => 88,  205 => 77,  201 => 76,  196 => 66,  194 => 62,  191 => 73,  189 => 69,  186 => 61,  180 => 64,  172 => 62,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 51,  121 => 45,  118 => 46,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 5,  105 => 35,  93 => 29,  79 => 36,  76 => 23,  72 => 20,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 60,  155 => 58,  152 => 61,  149 => 58,  145 => 55,  139 => 43,  131 => 48,  123 => 50,  120 => 37,  115 => 39,  106 => 44,  101 => 34,  96 => 32,  83 => 37,  80 => 25,  74 => 21,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 8,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 68,  165 => 58,  162 => 54,  157 => 57,  153 => 54,  151 => 57,  143 => 48,  138 => 50,  136 => 49,  133 => 52,  130 => 52,  122 => 48,  119 => 41,  116 => 45,  111 => 37,  108 => 36,  102 => 43,  98 => 41,  95 => 31,  92 => 40,  89 => 28,  85 => 27,  81 => 40,  73 => 21,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
