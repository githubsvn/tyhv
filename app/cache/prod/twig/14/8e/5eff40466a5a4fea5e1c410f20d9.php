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
        return array (  52 => 11,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  320 => 66,  310 => 61,  303 => 59,  287 => 54,  275 => 51,  269 => 36,  257 => 33,  253 => 32,  243 => 25,  239 => 24,  225 => 13,  220 => 12,  217 => 11,  211 => 5,  202 => 143,  200 => 136,  191 => 130,  186 => 127,  180 => 119,  178 => 118,  175 => 117,  173 => 104,  165 => 100,  159 => 98,  156 => 97,  139 => 95,  133 => 93,  125 => 91,  122 => 90,  104 => 89,  101 => 88,  96 => 86,  93 => 85,  91 => 80,  82 => 73,  79 => 72,  76 => 67,  74 => 66,  71 => 65,  66 => 51,  51 => 39,  48 => 38,  46 => 11,  316 => 119,  312 => 118,  308 => 117,  302 => 113,  296 => 112,  294 => 57,  290 => 55,  282 => 104,  278 => 52,  273 => 101,  265 => 35,  261 => 34,  256 => 93,  250 => 89,  244 => 87,  238 => 85,  236 => 84,  232 => 83,  227 => 81,  224 => 80,  222 => 79,  219 => 78,  213 => 76,  207 => 74,  204 => 73,  198 => 72,  195 => 71,  192 => 70,  189 => 69,  184 => 121,  181 => 67,  176 => 66,  174 => 65,  170 => 103,  164 => 62,  161 => 61,  153 => 96,  145 => 57,  142 => 56,  137 => 55,  135 => 54,  123 => 46,  121 => 45,  117 => 44,  113 => 43,  107 => 40,  99 => 87,  89 => 28,  85 => 27,  80 => 25,  72 => 20,  68 => 54,  63 => 17,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 1,  28 => 2,);
    }
}
