<?php

/* SMAdminBundle::layout.html.twig */
class __TwigTemplate_85430de3fe073e5b59e644b68dc65251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
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

    public function getTemplateName()
    {
        return "SMAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 55,  123 => 52,  112 => 47,  108 => 46,  102 => 43,  96 => 42,  90 => 41,  86 => 40,  82 => 39,  78 => 38,  72 => 37,  69 => 36,  65 => 35,  31 => 3,  28 => 2,);
    }
}
