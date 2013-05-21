<?php

/* SMAdminBundle:Language:index.html.twig */
class __TwigTemplate_5114e01d25f39f454b69e5672b6cebe5 extends Twig_Template
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
            \"aaSorting\": [ [0,'asc'], [1,'asc'], [2,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 3, 4 ] }
            ],
        });
    } );
</script>
<h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Language list", array(), "SMAdminBundle"), "html", null, true);
        echo "</h1>

<div class=\"btn-group nav\">
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
</div>

<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>Id</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lang key", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Is default", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "        <tr>
            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "langkey"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 42
            if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") == 1)) {
                // line 43
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 45
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_set_default", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"/>
                ";
            }
            // line 47
            echo "            </td>
            <td>
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>Show</a>
                &nbsp; | &nbsp;
                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>Edit</a>
                ";
            // line 52
            if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") != 1)) {
                // line 53
                echo "                &nbsp; | &nbsp;
                <a class=\"delete\" rel=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">Delete</a>
                ";
            }
            // line 56
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "    </tbody>
</table>

";
        // line 63
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 64
            echo "<div class=\"pagination\" style=\"text-align: right;\">
    <ul>
        <li><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => 1)), "html", null, true);
            echo "\">«</a></li>
        <li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\">Previous</a></li>
    ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 69
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 70
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 72
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 74
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\">Next</a></li>
        <li><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "lastPage"))), "html", null, true);
            echo "\">»</a></li>
    </ul>
</div>
";
        }
        // line 80
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Language:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 80,  204 => 76,  199 => 75,  193 => 74,  185 => 72,  177 => 70,  174 => 69,  170 => 68,  166 => 67,  162 => 66,  158 => 64,  156 => 63,  151 => 59,  143 => 56,  138 => 54,  135 => 53,  133 => 52,  129 => 51,  124 => 49,  120 => 47,  114 => 45,  110 => 43,  108 => 42,  103 => 40,  99 => 39,  93 => 38,  90 => 37,  86 => 36,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  55 => 22,  49 => 19,  31 => 3,  28 => 2,);
    }
}
