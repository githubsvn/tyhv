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
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  414 => 161,  410 => 160,  406 => 159,  400 => 155,  394 => 154,  392 => 153,  388 => 151,  382 => 147,  376 => 145,  370 => 143,  368 => 142,  364 => 141,  359 => 139,  353 => 135,  347 => 133,  341 => 131,  339 => 130,  335 => 129,  330 => 127,  324 => 123,  318 => 121,  312 => 119,  310 => 118,  306 => 117,  301 => 115,  298 => 114,  296 => 113,  293 => 112,  287 => 110,  281 => 108,  278 => 107,  272 => 106,  269 => 105,  266 => 104,  263 => 103,  258 => 102,  255 => 101,  250 => 100,  248 => 99,  244 => 97,  238 => 96,  235 => 95,  227 => 93,  219 => 91,  216 => 90,  211 => 89,  209 => 88,  199 => 81,  195 => 80,  190 => 78,  182 => 73,  172 => 66,  168 => 65,  163 => 63,  155 => 58,  151 => 57,  146 => 55,  139 => 51,  135 => 50,  130 => 48,  122 => 43,  118 => 42,  113 => 40,  105 => 35,  101 => 34,  96 => 32,  88 => 27,  84 => 26,  79 => 24,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
