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
        return array (  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  320 => 66,  310 => 61,  303 => 59,  294 => 57,  290 => 55,  278 => 52,  275 => 51,  269 => 36,  265 => 35,  261 => 34,  257 => 33,  253 => 32,  243 => 25,  239 => 24,  217 => 11,  202 => 143,  200 => 136,  175 => 117,  173 => 104,  170 => 103,  156 => 97,  125 => 91,  99 => 87,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 54,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 12,  215 => 70,  211 => 5,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 73,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  91 => 80,  84 => 28,  94 => 39,  88 => 27,  59 => 22,  28 => 3,  225 => 13,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 130,  189 => 77,  186 => 127,  180 => 119,  172 => 67,  159 => 98,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 89,  100 => 33,  78 => 24,  75 => 23,  71 => 65,  34 => 6,  105 => 24,  93 => 85,  79 => 72,  76 => 67,  72 => 14,  68 => 54,  58 => 12,  24 => 3,  27 => 4,  21 => 2,  44 => 12,  31 => 1,  26 => 3,  25 => 4,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 95,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 88,  96 => 86,  83 => 18,  80 => 24,  74 => 66,  66 => 51,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 121,  178 => 118,  171 => 62,  165 => 100,  162 => 57,  157 => 56,  153 => 96,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 93,  130 => 47,  122 => 90,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 39,  48 => 38,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
