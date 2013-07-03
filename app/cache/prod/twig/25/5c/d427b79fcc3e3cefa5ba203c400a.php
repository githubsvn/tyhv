<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_255cd427b79fcc3e3cefa5ba203c400a extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  84 => 19,  74 => 16,  66 => 15,  57 => 14,  55 => 13,  51 => 12,  44 => 10,  36 => 7,  25 => 4,  105 => 24,  98 => 22,  96 => 21,  93 => 20,  83 => 18,  76 => 16,  72 => 14,  68 => 12,  50 => 8,  33 => 5,  24 => 3,  22 => 2,  225 => 96,  216 => 90,  201 => 83,  196 => 80,  191 => 78,  189 => 77,  186 => 76,  178 => 71,  172 => 67,  163 => 63,  159 => 61,  157 => 60,  154 => 59,  147 => 55,  143 => 54,  136 => 50,  132 => 48,  130 => 47,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  100 => 34,  95 => 31,  78 => 28,  75 => 27,  71 => 26,  63 => 24,  60 => 23,  58 => 9,  34 => 11,  94 => 39,  88 => 6,  81 => 40,  79 => 17,  59 => 22,  48 => 19,  39 => 6,  35 => 4,  31 => 5,  26 => 3,  46 => 7,  43 => 7,  32 => 4,  29 => 3,  237 => 88,  232 => 86,  224 => 81,  212 => 88,  208 => 73,  205 => 84,  202 => 71,  194 => 79,  188 => 67,  185 => 66,  182 => 65,  180 => 72,  174 => 60,  149 => 57,  144 => 55,  138 => 51,  133 => 53,  129 => 52,  124 => 49,  113 => 47,  109 => 46,  104 => 36,  97 => 40,  89 => 19,  52 => 17,  47 => 15,  41 => 9,  37 => 13,  27 => 4,  21 => 2,  19 => 1,);
    }
}
