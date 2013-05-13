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
        return array (  43 => 7,  32 => 4,  52 => 11,  29 => 3,  26 => 3,  23 => 2,  19 => 1,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 108,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  345 => 102,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  301 => 64,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 49,  256 => 34,  252 => 33,  248 => 32,  244 => 31,  240 => 30,  230 => 23,  226 => 22,  212 => 12,  209 => 11,  203 => 5,  194 => 135,  192 => 129,  186 => 125,  184 => 119,  180 => 117,  178 => 116,  175 => 115,  173 => 102,  170 => 101,  165 => 98,  159 => 96,  156 => 95,  153 => 94,  139 => 93,  133 => 91,  125 => 89,  122 => 88,  104 => 87,  101 => 86,  99 => 85,  93 => 83,  82 => 71,  79 => 70,  74 => 64,  71 => 63,  68 => 52,  66 => 49,  51 => 37,  48 => 36,  37 => 5,  102 => 33,  96 => 84,  91 => 78,  80 => 24,  76 => 65,  69 => 19,  65 => 18,  60 => 16,  57 => 15,  53 => 14,  46 => 8,  41 => 8,  38 => 7,  34 => 6,  31 => 1,  28 => 3,);
    }
}
