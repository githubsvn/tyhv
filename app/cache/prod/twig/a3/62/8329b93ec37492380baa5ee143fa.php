<?php

/* SMAdminBundle::admin.login.html.twig */
class __TwigTemplate_a3628329b93ec37492380baa5ee143fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <!--
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/extjs4/resources/css/ext-all.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/extjs4/ext-debug.js"), "html", null, true);
        echo "\"></script>
        -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/extjs3/resources/css/ext-all.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/extjs3/ext-base.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/static/extjs3/ext-all-debug.js"), "html", null, true);
        echo "\"></script>

    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle::admin.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  74 => 20,  68 => 5,  62 => 22,  60 => 20,  53 => 16,  49 => 15,  45 => 14,  39 => 11,  35 => 10,  27 => 5,  21 => 1,  31 => 3,  28 => 2,);
    }
}
