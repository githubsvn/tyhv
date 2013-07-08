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
                $context = array_intersect_key($context, $_parent) + $_parent;
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
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  113 => 38,  202 => 75,  56 => 23,  304 => 116,  297 => 112,  259 => 103,  244 => 95,  228 => 89,  193 => 76,  90 => 37,  285 => 103,  281 => 102,  275 => 98,  269 => 97,  267 => 105,  251 => 100,  246 => 86,  234 => 80,  192 => 63,  298 => 110,  294 => 109,  278 => 108,  264 => 95,  255 => 102,  247 => 87,  243 => 86,  238 => 81,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 53,  40 => 8,  286 => 110,  279 => 95,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  210 => 72,  195 => 64,  187 => 74,  181 => 72,  167 => 67,  137 => 54,  124 => 47,  97 => 39,  69 => 19,  53 => 14,  229 => 78,  221 => 74,  209 => 79,  203 => 79,  197 => 74,  174 => 69,  166 => 59,  142 => 44,  117 => 41,  62 => 16,  227 => 74,  223 => 87,  219 => 72,  213 => 84,  207 => 71,  190 => 59,  182 => 56,  168 => 67,  150 => 45,  110 => 40,  129 => 47,  87 => 28,  49 => 16,  134 => 49,  86 => 25,  77 => 22,  164 => 66,  148 => 60,  128 => 46,  199 => 69,  179 => 71,  169 => 52,  161 => 63,  107 => 33,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 108,  284 => 104,  280 => 35,  272 => 100,  258 => 25,  254 => 24,  240 => 13,  235 => 91,  232 => 80,  226 => 78,  217 => 86,  200 => 66,  175 => 69,  173 => 53,  170 => 55,  156 => 63,  125 => 49,  99 => 32,  301 => 100,  295 => 96,  292 => 111,  289 => 104,  287 => 93,  282 => 90,  276 => 102,  273 => 85,  270 => 106,  268 => 93,  263 => 104,  249 => 99,  245 => 87,  230 => 75,  222 => 73,  220 => 76,  215 => 70,  211 => 70,  204 => 70,  198 => 63,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 18,  38 => 6,  144 => 59,  141 => 43,  135 => 50,  126 => 50,  109 => 43,  103 => 36,  67 => 19,  61 => 15,  47 => 30,  91 => 29,  84 => 25,  94 => 38,  88 => 28,  59 => 5,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 80,  201 => 69,  196 => 77,  194 => 62,  191 => 73,  189 => 65,  186 => 61,  180 => 59,  172 => 68,  159 => 50,  154 => 62,  147 => 56,  132 => 47,  127 => 48,  121 => 42,  118 => 46,  114 => 31,  104 => 41,  100 => 25,  78 => 24,  75 => 31,  71 => 30,  34 => 5,  105 => 35,  93 => 29,  79 => 32,  76 => 23,  72 => 20,  68 => 20,  58 => 18,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 4,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 30,  46 => 10,  22 => 2,  163 => 58,  155 => 58,  152 => 61,  149 => 58,  145 => 45,  139 => 43,  131 => 40,  123 => 43,  120 => 37,  115 => 39,  106 => 29,  101 => 34,  96 => 32,  83 => 33,  80 => 24,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 12,  43 => 8,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 68,  165 => 55,  162 => 54,  157 => 53,  153 => 46,  151 => 57,  143 => 48,  138 => 50,  136 => 49,  133 => 51,  130 => 52,  122 => 48,  119 => 41,  116 => 45,  111 => 30,  108 => 36,  102 => 33,  98 => 32,  95 => 30,  92 => 29,  89 => 28,  85 => 27,  81 => 40,  73 => 21,  64 => 17,  60 => 16,  57 => 15,  54 => 13,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
