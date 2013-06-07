<?php

/* SMAdminBundle:Default:index.html.twig */
class __TwigTemplate_45859fa6ee323d15b51aa543d3c0739a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span6\" style=\"margin: 0 auto; float: none\">
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["gkey"] => $context["group"]) {
            // line 6
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "group")) > 0)) {
                // line 7
                echo "    <table class=\"table table-bordered table-striped sonata-ba-list\">
        <thead>
            <tr>
                <th colspan=\"3\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getContext($context, "gkey"), "html", null, true);
                echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "group"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 15
                    echo "            <tr>
                <td>";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "item"), "label"), array(), "SMAdminBundle"), "html", null, true);
                    echo "</td>
                <td style=\"width: 25%; text-align: center;\">
                    <a class=\"btn\" href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "action"), 0, array(), "array")), "html", null, true);
                    echo "\">
                        <i class=\"icon-plus\"></i> ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add new", array(), "SMAdminBundle"), "html", null, true);
                    echo "
                    </a>
                </td>
                <td style=\"width: 20%; text-align: center;\">
                    <a class=\"btn\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "action"), 1, array(), "array")), "html", null, true);
                    echo "\">
                        <i class=\"icon-list\"></i> ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("List", array(), "SMAdminBundle"), "html", null, true);
                    echo "
                    </a>
                </td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 29
                echo "        </tbody>
    </table>
        ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['gkey'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 73,  182 => 71,  167 => 67,  161 => 64,  137 => 54,  97 => 39,  53 => 14,  40 => 8,  124 => 46,  117 => 41,  110 => 42,  90 => 37,  56 => 23,  69 => 19,  129 => 47,  87 => 28,  49 => 16,  134 => 49,  86 => 25,  179 => 70,  164 => 60,  148 => 53,  128 => 46,  113 => 38,  107 => 36,  77 => 22,  62 => 16,  23 => 2,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 121,  405 => 118,  401 => 116,  395 => 115,  392 => 114,  383 => 111,  378 => 110,  373 => 109,  370 => 108,  367 => 107,  364 => 106,  359 => 105,  356 => 104,  352 => 84,  346 => 82,  343 => 81,  340 => 80,  334 => 72,  330 => 71,  327 => 70,  324 => 69,  321 => 68,  318 => 67,  312 => 66,  302 => 61,  286 => 57,  279 => 54,  267 => 51,  261 => 36,  257 => 35,  253 => 34,  235 => 25,  231 => 24,  217 => 13,  209 => 77,  203 => 5,  192 => 131,  175 => 69,  173 => 104,  170 => 63,  156 => 60,  125 => 34,  99 => 32,  301 => 100,  295 => 59,  292 => 95,  289 => 94,  287 => 93,  282 => 55,  276 => 86,  273 => 85,  270 => 52,  268 => 83,  263 => 80,  249 => 33,  245 => 32,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 76,  198 => 75,  185 => 61,  183 => 60,  177 => 58,  160 => 59,  112 => 39,  82 => 25,  65 => 18,  38 => 6,  144 => 56,  141 => 54,  135 => 47,  126 => 50,  109 => 43,  103 => 40,  67 => 19,  61 => 15,  47 => 30,  91 => 29,  84 => 25,  94 => 38,  88 => 28,  59 => 5,  28 => 3,  225 => 96,  216 => 81,  212 => 12,  205 => 84,  201 => 83,  196 => 71,  194 => 138,  191 => 78,  189 => 67,  186 => 127,  180 => 119,  172 => 67,  159 => 60,  154 => 59,  147 => 56,  132 => 47,  127 => 35,  121 => 42,  118 => 46,  114 => 31,  104 => 41,  100 => 25,  78 => 24,  75 => 31,  71 => 30,  34 => 5,  105 => 35,  93 => 29,  79 => 32,  76 => 23,  72 => 20,  68 => 20,  58 => 18,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 4,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 10,  22 => 2,  163 => 65,  155 => 58,  152 => 49,  149 => 52,  145 => 51,  139 => 50,  131 => 42,  123 => 43,  120 => 46,  115 => 39,  106 => 29,  101 => 34,  96 => 32,  83 => 33,  80 => 24,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 12,  43 => 8,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 66,  178 => 65,  171 => 68,  165 => 53,  162 => 61,  157 => 48,  153 => 96,  151 => 57,  143 => 55,  138 => 50,  136 => 49,  133 => 93,  130 => 52,  122 => 48,  119 => 41,  116 => 45,  111 => 30,  108 => 36,  102 => 33,  98 => 32,  95 => 30,  92 => 29,  89 => 28,  85 => 27,  81 => 40,  73 => 21,  64 => 17,  60 => 16,  57 => 15,  54 => 13,  51 => 13,  48 => 19,  45 => 8,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
