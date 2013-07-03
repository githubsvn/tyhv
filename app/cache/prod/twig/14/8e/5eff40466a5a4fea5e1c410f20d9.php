<?php

/* SMAdminBundle:Default:menu.html.twig */
class __TwigTemplate_148e5eff40466a5a4fea5e1c410f20d9 extends Twig_Template
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
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        </ul>
    </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['gkey'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  52 => 11,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  320 => 66,  310 => 61,  303 => 59,  294 => 57,  290 => 55,  287 => 54,  278 => 52,  275 => 51,  269 => 36,  265 => 35,  261 => 34,  257 => 33,  253 => 32,  243 => 25,  239 => 24,  225 => 13,  220 => 12,  211 => 5,  202 => 143,  200 => 136,  186 => 127,  184 => 121,  178 => 118,  175 => 117,  173 => 104,  170 => 103,  165 => 100,  159 => 98,  156 => 97,  153 => 96,  133 => 93,  125 => 91,  122 => 90,  104 => 89,  101 => 88,  96 => 86,  91 => 80,  82 => 73,  76 => 67,  74 => 66,  68 => 54,  66 => 51,  51 => 39,  48 => 38,  46 => 11,  37 => 5,  217 => 11,  210 => 76,  205 => 75,  199 => 74,  191 => 130,  183 => 70,  180 => 119,  176 => 68,  172 => 67,  168 => 66,  164 => 64,  162 => 63,  157 => 59,  149 => 56,  142 => 54,  139 => 95,  137 => 52,  131 => 51,  124 => 49,  120 => 47,  114 => 45,  110 => 43,  108 => 42,  103 => 40,  99 => 87,  93 => 85,  90 => 37,  86 => 36,  79 => 72,  75 => 31,  71 => 65,  67 => 29,  55 => 22,  49 => 19,  31 => 1,  28 => 2,);
    }
}
