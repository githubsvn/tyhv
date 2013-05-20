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
        return array (  52 => 11,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  435 => 136,  431 => 135,  427 => 134,  423 => 133,  418 => 132,  415 => 131,  407 => 122,  404 => 121,  399 => 118,  395 => 116,  389 => 115,  386 => 114,  377 => 111,  372 => 110,  367 => 109,  364 => 108,  361 => 107,  358 => 106,  353 => 105,  350 => 104,  346 => 84,  340 => 82,  337 => 81,  334 => 80,  328 => 72,  324 => 71,  321 => 70,  318 => 69,  315 => 68,  312 => 67,  306 => 66,  298 => 61,  293 => 59,  284 => 57,  280 => 55,  277 => 54,  270 => 52,  267 => 51,  261 => 36,  257 => 35,  231 => 24,  217 => 13,  212 => 12,  209 => 11,  194 => 138,  192 => 131,  184 => 121,  180 => 119,  178 => 118,  175 => 117,  173 => 104,  170 => 103,  165 => 100,  159 => 98,  156 => 97,  153 => 96,  139 => 95,  133 => 93,  125 => 91,  104 => 89,  101 => 88,  99 => 87,  96 => 86,  93 => 85,  91 => 80,  79 => 72,  76 => 67,  74 => 66,  71 => 65,  68 => 54,  51 => 39,  48 => 38,  46 => 11,  37 => 5,  290 => 118,  283 => 114,  278 => 113,  272 => 112,  264 => 110,  256 => 108,  253 => 34,  249 => 33,  245 => 32,  241 => 104,  237 => 102,  235 => 25,  230 => 97,  221 => 93,  216 => 91,  213 => 90,  211 => 89,  207 => 88,  203 => 5,  199 => 84,  195 => 82,  193 => 81,  186 => 127,  183 => 78,  177 => 76,  171 => 74,  169 => 73,  164 => 71,  161 => 70,  157 => 69,  137 => 52,  134 => 51,  128 => 50,  122 => 90,  117 => 46,  114 => 45,  110 => 44,  103 => 40,  97 => 36,  86 => 34,  82 => 73,  78 => 31,  72 => 30,  66 => 51,  63 => 27,  59 => 26,  53 => 23,  31 => 1,  28 => 2,);
    }
}
