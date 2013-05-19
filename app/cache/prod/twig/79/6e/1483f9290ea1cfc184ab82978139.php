<?php

/* SMAdminBundle:Products:search.html.twig */
class __TwigTemplate_796e1483f9290ea1cfc184ab82978139 extends Twig_Template
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
                { 'bSortable': false, 'aTargets': [ 2, 3] }
            ],
        });
    } );
</script>

<h1>Results of search Product</h1>

<div class=\"nav\">
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Back To Product</a>
    <div style=\"clear: both;\"></div>
</div>
<div style=\"clear: both; margin-bottom: 10px;\"></div>
<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "        <tr>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "product"), "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 41
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "name")))) {
                // line 42
                echo "                    ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), 50), "html", null, true);
                echo "
                ";
            } else {
                // line 44
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                ";
            }
            // line 46
            echo "            </td>
            <td>
                ";
            // line 48
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "product"), "status") == 1)) {
                // line 49
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 51
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 53
            echo "            </td>
            <td>
                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "product"), "id"))), "html", null, true);
            echo "\">edit</a>
                ";
            // line 56
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "language")))) {
                // line 57
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\" class=\"delete\">Delete</a>
                ";
            }
            // line 60
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 64
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Products:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 64,  128 => 60,  123 => 58,  120 => 57,  118 => 56,  114 => 55,  110 => 53,  106 => 51,  102 => 49,  100 => 48,  96 => 46,  90 => 44,  84 => 42,  82 => 41,  77 => 39,  74 => 38,  70 => 37,  53 => 23,  31 => 3,  28 => 2,);
    }
}
