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
        return array (  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  435 => 136,  431 => 135,  427 => 134,  423 => 133,  418 => 132,  415 => 131,  407 => 122,  404 => 121,  399 => 118,  395 => 116,  389 => 115,  386 => 114,  377 => 111,  372 => 110,  367 => 109,  364 => 108,  358 => 106,  353 => 105,  350 => 104,  346 => 84,  340 => 82,  337 => 81,  334 => 80,  328 => 72,  324 => 71,  321 => 70,  318 => 69,  315 => 68,  312 => 67,  298 => 61,  293 => 59,  284 => 57,  280 => 55,  270 => 52,  267 => 51,  261 => 36,  257 => 35,  253 => 34,  249 => 33,  245 => 32,  235 => 25,  217 => 13,  209 => 11,  203 => 5,  194 => 138,  184 => 121,  180 => 119,  178 => 118,  175 => 117,  173 => 104,  170 => 103,  165 => 100,  159 => 98,  156 => 97,  153 => 96,  139 => 95,  125 => 91,  122 => 90,  104 => 89,  101 => 88,  96 => 86,  93 => 85,  91 => 80,  79 => 72,  76 => 67,  74 => 66,  71 => 65,  68 => 54,  66 => 51,  51 => 39,  46 => 11,  37 => 5,  366 => 144,  361 => 107,  355 => 138,  349 => 137,  347 => 136,  343 => 134,  335 => 129,  331 => 128,  326 => 126,  320 => 122,  314 => 120,  308 => 118,  306 => 66,  302 => 116,  297 => 114,  294 => 113,  292 => 112,  289 => 111,  283 => 109,  277 => 54,  274 => 106,  268 => 105,  265 => 104,  262 => 103,  259 => 102,  254 => 101,  251 => 100,  246 => 99,  244 => 98,  240 => 96,  234 => 95,  231 => 24,  223 => 92,  215 => 90,  212 => 12,  207 => 88,  205 => 87,  192 => 131,  190 => 77,  186 => 127,  182 => 75,  171 => 67,  167 => 66,  162 => 64,  154 => 59,  150 => 58,  145 => 56,  137 => 51,  133 => 93,  128 => 48,  120 => 43,  116 => 42,  111 => 40,  103 => 35,  99 => 87,  94 => 32,  86 => 27,  82 => 73,  77 => 24,  69 => 19,  65 => 18,  60 => 16,  52 => 11,  48 => 38,  43 => 8,  35 => 5,  31 => 1,  28 => 2,);
    }
}
