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
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  298 => 110,  294 => 109,  290 => 108,  284 => 104,  278 => 103,  276 => 102,  272 => 100,  264 => 95,  260 => 94,  255 => 92,  247 => 87,  243 => 86,  238 => 84,  232 => 80,  226 => 78,  220 => 76,  218 => 75,  214 => 74,  209 => 72,  206 => 71,  204 => 70,  201 => 69,  195 => 67,  189 => 65,  186 => 64,  180 => 63,  177 => 62,  174 => 61,  171 => 60,  166 => 59,  163 => 58,  158 => 57,  156 => 56,  152 => 54,  146 => 53,  143 => 52,  135 => 50,  127 => 48,  124 => 47,  119 => 46,  117 => 45,  105 => 37,  103 => 36,  99 => 35,  95 => 34,  89 => 31,  81 => 26,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
