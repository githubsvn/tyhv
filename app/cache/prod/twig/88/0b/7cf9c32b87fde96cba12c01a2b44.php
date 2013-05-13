<?php

/* SMAdminBundle:Language:show.html.twig */
class __TwigTemplate_880b7cf9c32b87fde96cba12c01a2b44 extends Twig_Template
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
        echo "<h1>Language</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <td>Id</td>
            <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Lang key</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "langkey"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Is Default</td>
            <td>
                ";
        // line 22
        if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") == 1)) {
            // line 23
            echo "                    <input type=\"checkbox\" checked=\"checked\" disabled=\"true\"/>
                ";
        } else {
            // line 25
            echo "                    <input type=\"checkbox\" readonly=\"true\" disabled=\"true\"/>
                ";
        }
        // line 27
        echo "            </td>
        </tr>
        <tr>
            <td colspan=\"2\" width=\"100%\">
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">Back To List</a>
                &nbsp;
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" class=\"btn\">Edit</a>
                ";
        // line 40
        echo "            </td>
        </tr>
    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Language:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 40,  82 => 33,  77 => 31,  71 => 27,  67 => 25,  63 => 23,  61 => 22,  53 => 17,  46 => 13,  39 => 9,  31 => 3,  28 => 2,);
    }
}
