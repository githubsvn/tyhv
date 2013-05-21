<?php

/* SMAdminBundle:Twig:showimg.html.twig */
class __TwigTemplate_5a96fdbd1eef0c647302f1aba1a89a75 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "arrImgs"));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 2
            echo "    ";
            if (($this->getContext($context, "img") != "")) {
                // line 3
                echo "        <div style=\"width: 100px; height: 100px; float: bottom\">
            <img src=\"";
                // line 4
                echo twig_escape_filter($this->env, (($this->getContext($context, "imgPath") . "/") . $this->getContext($context, "img")), "html", null, true);
                echo "\" />
            <div style=\"width: 300px;\">
                <input type=\"checkbox\" value=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getContext($context, "img"), "html", null, true);
                echo "\" name=\"delImgs[]\"> Checked if you want to delete this image.
            </div>
        </div>
        <div style=\"clear: both;\"></div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Twig:showimg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  387 => 154,  382 => 152,  376 => 148,  370 => 147,  368 => 146,  364 => 144,  358 => 140,  352 => 138,  346 => 136,  344 => 135,  340 => 134,  335 => 132,  329 => 128,  323 => 126,  317 => 124,  315 => 123,  311 => 122,  306 => 120,  303 => 119,  301 => 118,  298 => 117,  292 => 115,  286 => 113,  283 => 112,  277 => 111,  274 => 110,  271 => 109,  268 => 108,  263 => 107,  260 => 106,  255 => 105,  253 => 104,  249 => 102,  243 => 101,  240 => 100,  232 => 98,  224 => 96,  221 => 95,  216 => 94,  214 => 93,  202 => 85,  200 => 84,  196 => 83,  192 => 82,  181 => 74,  171 => 67,  167 => 66,  162 => 64,  154 => 59,  150 => 58,  145 => 56,  137 => 51,  133 => 50,  128 => 48,  120 => 43,  116 => 42,  111 => 40,  103 => 35,  99 => 34,  94 => 32,  86 => 27,  82 => 26,  77 => 24,  69 => 19,  65 => 18,  60 => 16,  52 => 11,  48 => 10,  43 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
