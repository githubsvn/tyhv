<?php

/* SMAdminBundle:User:show.html.twig */
class __TwigTemplate_1f53fd07e3cd1dc5bbcbc719521fec13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User detail", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<table class=\"table table-bordered table-striped\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fullname", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fullname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created_at", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "active"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"well form-inline\">
    <a class=\"btn\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user"), "html", null, true);
        echo "\">
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "
    </a>
    <a class=\"btn\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "
    </a>
</form>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  112 => 38,  107 => 36,  103 => 35,  99 => 34,  91 => 29,  87 => 28,  81 => 25,  77 => 24,  71 => 21,  67 => 20,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  41 => 9,  31 => 3,  28 => 2,);
    }
}
