<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_318469e99e6414d5d1a328a7886441da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  43 => 7,  32 => 4,  29 => 3,  237 => 88,  232 => 86,  224 => 81,  212 => 74,  208 => 73,  205 => 72,  202 => 71,  194 => 68,  188 => 67,  185 => 66,  182 => 65,  180 => 64,  174 => 60,  149 => 57,  144 => 55,  138 => 54,  133 => 53,  129 => 52,  124 => 49,  113 => 47,  109 => 46,  104 => 44,  97 => 40,  89 => 35,  52 => 17,  47 => 15,  41 => 14,  37 => 13,  27 => 6,  21 => 2,  19 => 1,);
    }
}
