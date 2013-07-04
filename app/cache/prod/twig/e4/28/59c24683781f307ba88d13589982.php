<?php

/* SMAdminBundle:MediaCategory:show.html.twig */
class __TwigTemplate_e42859c24683781f307ba88d13589982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media Category Show", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 9
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 13
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 17
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td colspan=\"2\" width=\"100%\">
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
                &nbsp;
                <a href=\"";
        // line 23
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
            </td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:MediaCategory:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 99,  316 => 95,  309 => 94,  292 => 91,  281 => 89,  276 => 88,  271 => 87,  265 => 86,  260 => 85,  256 => 83,  253 => 82,  214 => 67,  210 => 65,  206 => 63,  196 => 59,  78 => 23,  255 => 76,  251 => 75,  246 => 74,  232 => 68,  228 => 71,  254 => 74,  233 => 67,  231 => 72,  222 => 62,  208 => 58,  204 => 57,  191 => 53,  188 => 52,  185 => 51,  178 => 49,  149 => 42,  143 => 41,  132 => 37,  96 => 29,  169 => 56,  137 => 46,  129 => 36,  119 => 34,  154 => 44,  146 => 46,  141 => 40,  198 => 66,  181 => 60,  135 => 43,  127 => 39,  122 => 35,  86 => 24,  73 => 16,  55 => 22,  227 => 64,  221 => 81,  107 => 49,  67 => 29,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 106,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 81,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 67,  332 => 66,  322 => 61,  314 => 59,  287 => 52,  284 => 51,  278 => 36,  274 => 35,  270 => 34,  266 => 33,  262 => 32,  252 => 25,  211 => 143,  195 => 68,  193 => 121,  187 => 55,  184 => 117,  182 => 104,  164 => 97,  161 => 45,  140 => 40,  126 => 90,  106 => 41,  103 => 40,  100 => 26,  93 => 85,  74 => 21,  68 => 17,  51 => 10,  333 => 100,  327 => 96,  324 => 95,  320 => 94,  317 => 93,  312 => 90,  306 => 86,  303 => 93,  299 => 55,  296 => 54,  291 => 80,  277 => 79,  273 => 77,  258 => 75,  248 => 78,  245 => 72,  239 => 74,  234 => 69,  226 => 11,  216 => 62,  202 => 61,  199 => 60,  192 => 67,  165 => 52,  156 => 50,  134 => 39,  131 => 46,  120 => 41,  115 => 35,  82 => 22,  76 => 67,  61 => 12,  54 => 14,  171 => 47,  163 => 52,  159 => 51,  152 => 50,  138 => 39,  123 => 38,  117 => 31,  111 => 34,  101 => 34,  98 => 39,  83 => 33,  75 => 19,  71 => 21,  64 => 15,  43 => 7,  36 => 12,  104 => 27,  80 => 23,  63 => 17,  58 => 12,  40 => 6,  24 => 2,  94 => 27,  88 => 24,  48 => 12,  39 => 7,  35 => 5,  31 => 3,  21 => 2,  46 => 9,  29 => 3,  32 => 4,  250 => 73,  240 => 70,  236 => 88,  229 => 12,  225 => 70,  220 => 5,  218 => 69,  215 => 60,  212 => 76,  209 => 136,  200 => 130,  194 => 54,  179 => 103,  176 => 59,  173 => 62,  166 => 60,  162 => 51,  157 => 51,  155 => 51,  151 => 48,  148 => 42,  145 => 47,  139 => 45,  128 => 36,  114 => 36,  109 => 32,  87 => 27,  84 => 43,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 52,  118 => 36,  110 => 35,  97 => 45,  92 => 28,  89 => 28,  85 => 25,  69 => 14,  28 => 2,  57 => 12,  50 => 10,  47 => 9,  38 => 6,  27 => 6,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 66,  189 => 64,  183 => 54,  180 => 63,  174 => 50,  170 => 49,  167 => 48,  158 => 46,  153 => 50,  150 => 44,  147 => 95,  144 => 42,  136 => 43,  133 => 44,  130 => 91,  124 => 35,  121 => 31,  113 => 30,  108 => 28,  105 => 34,  102 => 48,  99 => 30,  95 => 29,  91 => 19,  81 => 24,  70 => 18,  66 => 51,  62 => 22,  59 => 16,  56 => 11,  52 => 13,  49 => 19,  45 => 8,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
