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
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  409 => 161,  404 => 159,  398 => 155,  392 => 154,  390 => 153,  386 => 151,  380 => 147,  374 => 145,  368 => 143,  366 => 142,  362 => 141,  357 => 139,  351 => 135,  345 => 133,  339 => 131,  337 => 130,  333 => 129,  328 => 127,  322 => 123,  316 => 121,  310 => 119,  308 => 118,  304 => 117,  299 => 115,  296 => 114,  294 => 113,  291 => 112,  285 => 110,  279 => 108,  276 => 107,  270 => 106,  267 => 105,  264 => 104,  261 => 103,  256 => 102,  253 => 101,  248 => 100,  246 => 99,  242 => 97,  236 => 96,  233 => 95,  225 => 93,  217 => 91,  214 => 90,  209 => 89,  207 => 88,  197 => 81,  193 => 80,  188 => 78,  180 => 73,  170 => 66,  166 => 65,  161 => 63,  153 => 58,  149 => 57,  144 => 55,  137 => 51,  133 => 50,  128 => 48,  120 => 43,  116 => 42,  111 => 40,  103 => 35,  99 => 34,  94 => 32,  86 => 27,  82 => 26,  77 => 24,  69 => 19,  65 => 18,  60 => 16,  52 => 11,  48 => 10,  43 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
