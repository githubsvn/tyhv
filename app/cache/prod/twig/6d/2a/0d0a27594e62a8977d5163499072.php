<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6d2a0d0a27594e62a8977d5163499072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "\".

Please e-mail us at [email] and let us know what you were doing when this
error occurred. We will fix it as soon as possible. Sorry for any
inconvenience caused.
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  94 => 39,  88 => 6,  48 => 14,  39 => 8,  35 => 7,  31 => 6,  21 => 1,  46 => 7,  29 => 3,  32 => 4,  250 => 96,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 79,  215 => 78,  212 => 77,  209 => 76,  200 => 71,  194 => 67,  179 => 61,  176 => 60,  173 => 59,  166 => 55,  162 => 54,  157 => 51,  155 => 50,  151 => 48,  148 => 47,  145 => 46,  139 => 45,  128 => 43,  114 => 34,  109 => 31,  87 => 28,  84 => 27,  79 => 39,  65 => 23,  34 => 11,  26 => 4,  125 => 24,  118 => 36,  110 => 20,  97 => 18,  92 => 17,  89 => 16,  85 => 14,  69 => 24,  28 => 4,  57 => 9,  50 => 7,  47 => 7,  38 => 5,  27 => 2,  22 => 2,  25 => 5,  19 => 1,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 29,  105 => 19,  102 => 27,  99 => 26,  95 => 24,  91 => 22,  81 => 40,  70 => 15,  66 => 13,  62 => 22,  59 => 22,  56 => 10,  52 => 6,  49 => 8,  45 => 6,  41 => 15,  37 => 4,  33 => 9,  30 => 4,);
    }
}
