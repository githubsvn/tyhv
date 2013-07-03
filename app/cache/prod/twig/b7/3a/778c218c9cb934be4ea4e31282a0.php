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
            \"aaSorting\": [ [0,'asc'], [1,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 3, 4 ] }
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo " : <input type=\"text\" name=\"name\" id=\"name\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News Category", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"category\" id=\"category\">
                        <option value=\"\">-- ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optCats"));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 53
            echo "                            ";
            if ((!(null === $this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage")))) {
                // line 54
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "obj"), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getContext($context, "obj"), "id") == $this->getContext($context, "catId"))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 55
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "obj"), "getCurrentLanguage"), "getTreeName"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 58
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
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

<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 79
            echo "        <tr>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 82
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "name")))) {
                // line 83
                echo "                    ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), 50), "html", null, true);
                echo "
                ";
            } else {
                // line 85
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                ";
            }
            // line 87
            echo "            </td>
            <td>";
            // line 88
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 90
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "status") == 1)) {
                // line 91
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 93
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 95
            echo "            </td>
            <td>
                <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "news"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 98
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "language")))) {
                // line 99
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                ";
            }
            // line 102
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "    </tbody>
</table>

";
        // line 110
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 111
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 115
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 116
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 117
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 119
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 121
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 127
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
        return array (  344 => 127,  337 => 123,  332 => 122,  326 => 121,  318 => 119,  310 => 117,  307 => 116,  303 => 115,  299 => 114,  295 => 113,  291 => 111,  289 => 110,  284 => 106,  275 => 102,  268 => 100,  265 => 99,  263 => 98,  257 => 97,  253 => 95,  249 => 93,  245 => 91,  243 => 90,  236 => 88,  233 => 87,  227 => 85,  221 => 83,  219 => 82,  214 => 80,  211 => 79,  207 => 78,  200 => 74,  196 => 73,  192 => 72,  188 => 71,  184 => 70,  173 => 62,  169 => 61,  165 => 60,  162 => 59,  156 => 58,  150 => 55,  141 => 54,  138 => 53,  134 => 52,  130 => 51,  126 => 50,  120 => 49,  116 => 48,  110 => 44,  99 => 42,  95 => 41,  91 => 39,  85 => 38,  79 => 36,  76 => 35,  72 => 34,  64 => 31,  58 => 28,  31 => 3,  28 => 2,);
    }
}
