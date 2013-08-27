<?php

/* SMAdminBundle:Twig:showimg.html.twig */
class __TwigTemplate_1cb96c44e9b7ba950d5733978387a8fd extends Twig_Template
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
            <img width=\"100px;\" height=\"100px;\" src=\"";
                // line 4
                echo twig_escape_filter($this->env, (($this->getContext($context, "imgPath") . "/") . $this->getContext($context, "img")), "html", null, true);
                echo "\" />
            <div style=\"width: 300px;\">
                <input type=\"checkbox\" value=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getContext($context, "img"), "html", null, true);
                echo "\" name=\"delImgs[]\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Checked if you want to delete this image", array(), "SMAdminBundle"), "html", null, true);
                echo "
            </div>
        </div>
        <div style=\"clear: both;\"></div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  378 => 146,  374 => 145,  370 => 144,  364 => 140,  358 => 139,  356 => 138,  352 => 136,  346 => 132,  340 => 130,  334 => 128,  332 => 127,  328 => 126,  323 => 124,  317 => 120,  311 => 118,  305 => 116,  303 => 115,  299 => 114,  294 => 112,  291 => 111,  289 => 110,  286 => 109,  280 => 107,  274 => 105,  271 => 104,  265 => 103,  262 => 102,  259 => 101,  256 => 100,  251 => 99,  248 => 98,  243 => 97,  241 => 96,  237 => 94,  231 => 93,  228 => 92,  220 => 90,  212 => 88,  209 => 87,  204 => 86,  202 => 85,  190 => 77,  188 => 76,  184 => 75,  180 => 74,  174 => 71,  166 => 66,  156 => 59,  152 => 58,  147 => 56,  139 => 51,  135 => 50,  130 => 48,  122 => 43,  118 => 42,  113 => 40,  105 => 35,  101 => 34,  96 => 32,  88 => 27,  84 => 26,  79 => 24,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
