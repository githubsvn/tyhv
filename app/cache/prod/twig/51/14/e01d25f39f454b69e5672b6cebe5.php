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
        echo "<h1>Language list</h1>

<div class=\"btn-group nav\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Create a new entry</a>
</div>

<table class=\"table table-bordered table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Lang key</th>
            <th>Is default</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "        <tr>
            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "langkey"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 26
            if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") == 1)) {
                // line 27
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 29
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_set_default", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"/>
                ";
            }
            // line 31
            echo "            </td>
            <td>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Show</a>
                &nbsp; | &nbsp;
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Edit</a>
                ";
            // line 36
            if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") != 1)) {
                // line 37
                echo "                &nbsp; | &nbsp;
                <a class=\"delete\" rel=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">Delete</a>
                ";
            }
            // line 40
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "    </tbody>
</table>

";
        // line 47
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 48
            echo "<div class=\"pagination\" style=\"text-align: right;\">
    <ul>
        <li><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => 1)), "html", null, true);
            echo "\">«</a></li>
        <li><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\">Previous</a></li>
    ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 53
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 54
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 56
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 58
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 59
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\">Next</a></li>
        <li><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "lastPage"))), "html", null, true);
            echo "\">»</a></li>
    </ul>
</div>
";
        }
        // line 64
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
        return array (  178 => 64,  171 => 60,  166 => 59,  160 => 58,  152 => 56,  144 => 54,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  125 => 48,  123 => 47,  118 => 43,  110 => 40,  105 => 38,  102 => 37,  100 => 36,  96 => 35,  91 => 33,  87 => 31,  81 => 29,  77 => 27,  75 => 26,  70 => 24,  66 => 23,  60 => 22,  57 => 21,  53 => 20,  36 => 6,  31 => 3,  28 => 2,);
    }
}
