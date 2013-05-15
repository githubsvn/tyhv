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
        return array (  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  372 => 109,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  313 => 67,  307 => 65,  301 => 64,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  252 => 33,  248 => 32,  240 => 30,  226 => 22,  212 => 12,  209 => 11,  203 => 5,  192 => 129,  180 => 117,  178 => 116,  175 => 115,  173 => 102,  170 => 101,  165 => 98,  159 => 96,  156 => 95,  153 => 94,  139 => 93,  125 => 89,  122 => 88,  104 => 87,  101 => 86,  96 => 84,  93 => 83,  91 => 78,  79 => 70,  76 => 65,  74 => 64,  71 => 63,  68 => 52,  66 => 49,  51 => 37,  46 => 11,  37 => 5,  386 => 147,  381 => 112,  375 => 141,  369 => 140,  367 => 108,  363 => 137,  357 => 133,  351 => 131,  345 => 102,  343 => 128,  339 => 127,  334 => 125,  328 => 121,  322 => 119,  316 => 68,  314 => 116,  310 => 66,  305 => 113,  299 => 109,  293 => 59,  287 => 105,  285 => 104,  281 => 103,  276 => 101,  273 => 100,  271 => 99,  268 => 98,  262 => 49,  256 => 34,  253 => 93,  247 => 92,  244 => 31,  241 => 90,  238 => 89,  233 => 88,  230 => 23,  225 => 86,  223 => 85,  219 => 83,  213 => 82,  210 => 81,  202 => 79,  194 => 135,  191 => 76,  186 => 125,  184 => 119,  177 => 70,  171 => 67,  167 => 66,  162 => 64,  154 => 59,  150 => 58,  145 => 56,  137 => 51,  133 => 91,  128 => 48,  120 => 43,  116 => 42,  111 => 40,  103 => 35,  99 => 85,  94 => 32,  86 => 27,  82 => 71,  77 => 24,  69 => 19,  65 => 18,  60 => 16,  52 => 11,  48 => 36,  43 => 8,  35 => 5,  31 => 1,  28 => 2,);
    }
}
