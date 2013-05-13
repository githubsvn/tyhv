<?php

/* SMAdminBundle:Default:menu.html.twig */
class __TwigTemplate_db5ac859de9ff43a602539ddc722076b extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["gkey"] => $context["group"]) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, $this->getContext($context, "group")) > 0)) {
                // line 3
                echo "    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 4
                echo twig_escape_filter($this->env, $this->getContext($context, "gkey"), "html", null, true);
                echo "<span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            ";
                // line 6
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "group"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 7
                    echo "            <li>
                <a href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "action"), 1, array(), "array")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "item"), "label"), array(), "SMAdminBundle"), "html", null, true);
                    echo "</a>
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 11
                echo "        </ul>
    </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['gkey'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 108,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  345 => 102,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  301 => 64,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 49,  256 => 34,  252 => 33,  248 => 32,  244 => 31,  240 => 30,  226 => 22,  209 => 11,  203 => 5,  194 => 135,  192 => 129,  186 => 125,  184 => 119,  180 => 117,  178 => 116,  173 => 102,  165 => 98,  159 => 96,  125 => 89,  122 => 88,  99 => 85,  96 => 84,  93 => 83,  91 => 78,  82 => 71,  79 => 70,  76 => 65,  74 => 64,  71 => 63,  68 => 52,  66 => 49,  51 => 37,  48 => 36,  37 => 5,  230 => 23,  223 => 79,  218 => 78,  212 => 12,  204 => 75,  196 => 73,  193 => 72,  189 => 71,  185 => 70,  181 => 69,  177 => 67,  175 => 115,  170 => 101,  161 => 58,  156 => 95,  153 => 94,  151 => 54,  147 => 53,  143 => 51,  139 => 93,  135 => 47,  133 => 91,  126 => 44,  123 => 43,  117 => 41,  111 => 39,  109 => 38,  104 => 87,  101 => 86,  97 => 34,  80 => 19,  69 => 17,  65 => 16,  61 => 14,  55 => 13,  49 => 11,  46 => 11,  42 => 9,  36 => 6,  31 => 1,  28 => 2,);
    }
}
