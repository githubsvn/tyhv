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
        return array (  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  316 => 119,  312 => 118,  308 => 117,  302 => 113,  296 => 112,  294 => 111,  290 => 109,  282 => 104,  278 => 103,  273 => 101,  265 => 96,  261 => 95,  256 => 93,  250 => 89,  244 => 87,  238 => 85,  236 => 84,  232 => 83,  227 => 81,  224 => 80,  222 => 79,  219 => 78,  213 => 76,  207 => 74,  204 => 73,  198 => 72,  195 => 71,  192 => 70,  189 => 69,  184 => 68,  181 => 67,  176 => 66,  174 => 65,  170 => 63,  164 => 62,  161 => 61,  153 => 59,  145 => 57,  142 => 56,  137 => 55,  135 => 54,  123 => 46,  121 => 45,  117 => 44,  113 => 43,  107 => 40,  99 => 35,  89 => 28,  85 => 27,  80 => 25,  72 => 20,  68 => 19,  63 => 17,  54 => 11,  50 => 10,  45 => 8,  37 => 5,  31 => 3,  28 => 2,);
    }
}
