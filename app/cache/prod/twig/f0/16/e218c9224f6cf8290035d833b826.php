<?php

/* SMAdminBundle:Products:index.html.twig */
class __TwigTemplate_f016e218c9224f6cf8290035d833b826 extends Twig_Template
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
            \$(\"#branch\").val('');
            \$(\"#productgroup\").val('');
        });
    } );

</script>

<h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Product List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 36
            echo "                ";
            if (($this->getContext($context, "lang") == $this->getAttribute($this->getContext($context, "opt"), "id"))) {
                // line 37
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 43
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "        </ul>
    </div>
    <div style=\"clear: both; margin-top: 10px;\"></div>
    <div class=\"btn-group pull-center\">
        <form class=\"well form-search\" method=\"POST\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo " : <input type=\"text\" name=\"name\" id=\"name\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Branch", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"branch\" id=\"branch\">
                        <option value=\"\">-- ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optBranchs"));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 54
            echo "                            ";
            if ((!(null === $this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage")))) {
                // line 55
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "obj"), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getContext($context, "obj"), "id") == $this->getContext($context, "branchId"))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 56
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 59
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "                    </select>
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Product Group", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"productgroup\" id=\"productgroup\">
                        <option value=\"\">-- ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optProductGroups"));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 64
            echo "                            ";
            if ((!(null === $this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage")))) {
                // line 65
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "obj"), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getContext($context, "obj"), "id") == $this->getContext($context, "productgroupId"))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 66
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 69
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "                    </select>
            <input type=\"hidden\" name=\"language\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getContext($context, "lang"), "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>

<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 90
            echo "        <tr>
            <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "product"), "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 93
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "name")))) {
                // line 94
                echo "                    ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), 50), "html", null, true);
                echo "
                ";
            } else {
                // line 96
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                ";
            }
            // line 98
            echo "            </td>
            <td>";
            // line 99
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "product"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "product"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 101
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "product"), "status") == 1)) {
                // line 102
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 104
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 106
            echo "            </td>
            <td>
                <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "product"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 109
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "language")))) {
                // line 110
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                ";
            }
            // line 113
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 117
        echo "    </tbody>
</table>

";
        // line 121
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 122
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 126
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 127
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 128
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 130
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 132
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 133
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 138
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Products:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 138,  377 => 134,  372 => 133,  366 => 132,  358 => 130,  350 => 128,  347 => 127,  343 => 126,  339 => 125,  335 => 124,  331 => 122,  329 => 121,  324 => 117,  315 => 113,  308 => 111,  305 => 110,  303 => 109,  297 => 108,  293 => 106,  289 => 104,  285 => 102,  283 => 101,  276 => 99,  273 => 98,  267 => 96,  261 => 94,  259 => 93,  254 => 91,  251 => 90,  247 => 89,  240 => 85,  236 => 84,  232 => 83,  228 => 82,  224 => 81,  213 => 73,  209 => 72,  205 => 71,  202 => 70,  196 => 69,  190 => 66,  181 => 65,  178 => 64,  174 => 63,  170 => 62,  166 => 61,  163 => 60,  157 => 59,  151 => 56,  142 => 55,  139 => 54,  135 => 53,  131 => 52,  127 => 51,  121 => 50,  117 => 49,  111 => 45,  100 => 43,  96 => 42,  92 => 40,  86 => 39,  80 => 37,  77 => 36,  73 => 35,  65 => 32,  59 => 29,  31 => 3,  28 => 2,);
    }
}
