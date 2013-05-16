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
        echo "<h1>Company list</h1>

<div class=\"nav\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Create a new entry</a>
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
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "        </ul>
    </div>
    <div style=\"clear: both;\"></div>
    <div class=\"btn-group pull-right\">
        <form class=\"navbar-form pull-left\" method=\"GET\">
            Name : <input type=\"text\" name=\"name\" >
            Type : <select name=\"type\">
                        <option value=\"\">-- Select Company Type -- </option>
                        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optComTypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["comType"]) {
            // line 28
            echo "                            ";
            if ((!(null === $this->getAttribute($this->getContext($context, "comType"), "getCurrentLanguage")))) {
                // line 29
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comType"), "id"), "html", null, true);
                echo "\">
                                    ";
                // line 30
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "comType"), "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 33
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comType'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "                    </select>
            <button type=\"submit\" class=\"btn\">Search</button>
        </form>
    </div>
</div>
<div style=\"clear: both; margin-bottom: 10px;\"></div>
<table class=\"table table-bordered table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created at</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 52
            echo "        <tr>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 55
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 56
                echo "                    ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                ";
            } else {
                // line 58
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                ";
            }
            // line 60
            echo "            </td>
            <td>";
            // line 61
            if ($this->getAttribute($this->getContext($context, "entity"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 63
            if (($this->getAttribute($this->getContext($context, "entity"), "status") == 1)) {
                // line 64
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 66
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 68
            echo "            </td>
            <td>
                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                ";
            // line 71
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 72
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getId"))), "html", null, true);
                echo "\" class=\"delete\">Delete</a>
                ";
            }
            // line 75
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 79
        echo "    </tbody>
</table>

";
        // line 83
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 84
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\">«</a></li>
        <li><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\">Previous</a></li>
    ";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 89
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 90
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 92
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 94
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 95
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\">Next</a></li>
        <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\">»</a></li>
    </ul>
</div>
";
        }
        // line 100
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
        return array (  266 => 100,  259 => 96,  254 => 95,  248 => 94,  240 => 92,  232 => 90,  229 => 89,  225 => 88,  221 => 87,  217 => 86,  213 => 84,  211 => 83,  206 => 79,  197 => 75,  192 => 73,  189 => 72,  187 => 71,  183 => 70,  179 => 68,  175 => 66,  171 => 64,  169 => 63,  162 => 61,  159 => 60,  153 => 58,  147 => 56,  145 => 55,  140 => 53,  137 => 52,  133 => 51,  114 => 34,  108 => 33,  102 => 30,  97 => 29,  94 => 28,  90 => 27,  80 => 19,  69 => 17,  65 => 16,  61 => 14,  55 => 13,  49 => 11,  46 => 10,  42 => 9,  36 => 6,  31 => 3,  28 => 2,);
    }
}
