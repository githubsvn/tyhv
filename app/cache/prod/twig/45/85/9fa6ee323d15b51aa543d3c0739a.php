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
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        foreach ($context['_seq'] as $context["gkey"] => $context["group"]) {
            // line 6
            echo "        ";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if ((twig_length_filter($this->env, $_group_) > 0)) {
                // line 7
                echo "    <table class=\"table table-bordered table-striped sonata-ba-list\">
        <thead>
            <tr>
                <th colspan=\"3\">";
                // line 10
                if (isset($context["gkey"])) { $_gkey_ = $context["gkey"]; } else { $_gkey_ = null; }
                echo twig_escape_filter($this->env, $_gkey_, "html", null, true);
                echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
                // line 14
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_group_);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 15
                    echo "            <tr>
                <td>";
                    // line 16
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_item_, "label"), array(), "SMAdminBundle"), "html", null, true);
                    echo "</td>
                <td style=\"width: 25%; text-align: center;\">
                    <a class=\"btn\" href=\"";
                    // line 18
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($_item_, "action"), 0, array(), "array")), "html", null, true);
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
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($_item_, "action"), 1, array(), "array")), "html", null, true);
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
        return array (  175 => 66,  77 => 21,  42 => 7,  23 => 3,  340 => 116,  331 => 112,  318 => 110,  307 => 108,  286 => 104,  275 => 102,  268 => 99,  263 => 95,  243 => 88,  190 => 69,  326 => 104,  305 => 97,  290 => 89,  285 => 88,  280 => 103,  261 => 78,  241 => 70,  237 => 69,  224 => 65,  142 => 51,  90 => 37,  334 => 109,  329 => 108,  323 => 104,  315 => 102,  311 => 98,  302 => 95,  297 => 94,  283 => 87,  267 => 80,  249 => 75,  244 => 74,  230 => 79,  223 => 67,  177 => 56,  116 => 43,  53 => 17,  44 => 9,  325 => 99,  316 => 95,  309 => 94,  292 => 92,  281 => 89,  276 => 88,  271 => 100,  265 => 86,  260 => 78,  256 => 83,  253 => 76,  214 => 67,  210 => 73,  206 => 76,  196 => 59,  78 => 35,  255 => 74,  251 => 75,  246 => 89,  232 => 68,  228 => 71,  254 => 91,  233 => 86,  231 => 72,  222 => 75,  208 => 58,  204 => 59,  191 => 56,  188 => 59,  185 => 68,  178 => 49,  149 => 42,  143 => 41,  132 => 42,  96 => 28,  169 => 63,  137 => 47,  129 => 40,  119 => 32,  154 => 50,  146 => 54,  141 => 40,  198 => 66,  181 => 68,  135 => 43,  127 => 41,  122 => 39,  86 => 25,  73 => 13,  55 => 13,  227 => 66,  221 => 80,  107 => 41,  67 => 18,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 106,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 81,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 110,  332 => 66,  322 => 103,  314 => 59,  287 => 52,  284 => 51,  278 => 86,  274 => 35,  270 => 34,  266 => 80,  262 => 32,  252 => 25,  211 => 61,  195 => 68,  193 => 72,  187 => 55,  184 => 69,  182 => 54,  164 => 62,  161 => 56,  140 => 46,  126 => 46,  106 => 30,  103 => 32,  100 => 29,  93 => 28,  74 => 18,  68 => 12,  51 => 12,  333 => 100,  327 => 96,  324 => 111,  320 => 94,  317 => 102,  312 => 90,  306 => 86,  303 => 96,  299 => 94,  296 => 106,  291 => 105,  277 => 79,  273 => 84,  258 => 75,  248 => 72,  245 => 72,  239 => 72,  234 => 69,  226 => 11,  216 => 74,  202 => 61,  199 => 61,  192 => 67,  165 => 62,  156 => 50,  134 => 50,  131 => 43,  120 => 38,  115 => 36,  82 => 23,  76 => 34,  61 => 15,  54 => 14,  171 => 65,  163 => 52,  159 => 58,  152 => 46,  138 => 52,  123 => 39,  117 => 31,  111 => 30,  101 => 34,  98 => 29,  83 => 33,  75 => 19,  71 => 30,  64 => 16,  43 => 7,  36 => 12,  104 => 32,  80 => 23,  63 => 30,  58 => 11,  40 => 8,  24 => 2,  94 => 25,  88 => 37,  48 => 10,  39 => 6,  35 => 11,  31 => 4,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 73,  240 => 87,  236 => 71,  229 => 84,  225 => 82,  220 => 5,  218 => 79,  215 => 60,  212 => 64,  209 => 77,  200 => 71,  194 => 57,  179 => 57,  176 => 67,  173 => 52,  166 => 57,  162 => 51,  157 => 60,  155 => 47,  151 => 50,  148 => 48,  145 => 47,  139 => 46,  128 => 41,  114 => 43,  109 => 33,  87 => 24,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 32,  97 => 29,  92 => 25,  89 => 24,  85 => 25,  69 => 17,  28 => 3,  57 => 11,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 66,  189 => 64,  183 => 54,  180 => 67,  174 => 50,  170 => 58,  167 => 63,  158 => 46,  153 => 59,  150 => 44,  147 => 95,  144 => 49,  136 => 43,  133 => 49,  130 => 48,  124 => 39,  121 => 31,  113 => 36,  108 => 33,  105 => 31,  102 => 48,  99 => 30,  95 => 38,  91 => 27,  81 => 35,  70 => 18,  66 => 16,  62 => 16,  59 => 23,  56 => 14,  52 => 10,  49 => 19,  45 => 8,  41 => 27,  37 => 6,  33 => 4,  30 => 4,);
    }
}
