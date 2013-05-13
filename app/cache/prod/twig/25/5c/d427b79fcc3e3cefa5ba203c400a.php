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
        return array (  84 => 19,  55 => 13,  44 => 10,  36 => 7,  25 => 4,  105 => 24,  98 => 22,  89 => 19,  83 => 18,  72 => 14,  50 => 8,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  225 => 96,  216 => 90,  205 => 84,  201 => 83,  196 => 80,  191 => 78,  189 => 77,  172 => 67,  163 => 63,  157 => 60,  154 => 59,  147 => 55,  143 => 54,  138 => 51,  136 => 50,  132 => 48,  130 => 47,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  100 => 34,  95 => 31,  78 => 28,  75 => 27,  63 => 24,  58 => 9,  94 => 39,  88 => 6,  81 => 40,  59 => 22,  39 => 6,  35 => 4,  21 => 2,  43 => 7,  32 => 4,  52 => 11,  29 => 3,  26 => 3,  23 => 2,  19 => 1,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 108,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  345 => 102,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  301 => 64,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 49,  256 => 34,  252 => 33,  248 => 32,  244 => 31,  240 => 30,  230 => 23,  226 => 22,  212 => 88,  209 => 11,  203 => 5,  194 => 79,  192 => 129,  186 => 76,  184 => 119,  180 => 72,  178 => 71,  175 => 115,  173 => 102,  170 => 101,  165 => 98,  159 => 61,  156 => 95,  153 => 94,  139 => 93,  133 => 91,  125 => 89,  122 => 88,  104 => 36,  101 => 86,  99 => 85,  93 => 20,  82 => 71,  79 => 17,  74 => 16,  71 => 26,  68 => 12,  66 => 15,  51 => 12,  48 => 19,  37 => 5,  102 => 33,  96 => 21,  91 => 20,  80 => 24,  76 => 16,  69 => 19,  65 => 18,  60 => 23,  57 => 14,  53 => 14,  46 => 7,  41 => 9,  38 => 7,  34 => 11,  31 => 5,  28 => 3,);
    }
}
