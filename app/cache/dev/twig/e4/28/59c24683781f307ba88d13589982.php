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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_mediacategory_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        return array (  124 => 46,  117 => 44,  110 => 42,  90 => 37,  56 => 23,  69 => 17,  129 => 46,  87 => 28,  49 => 19,  134 => 46,  86 => 36,  179 => 66,  164 => 60,  148 => 53,  128 => 45,  113 => 31,  107 => 36,  77 => 24,  62 => 19,  23 => 2,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 121,  405 => 118,  401 => 116,  395 => 115,  392 => 114,  383 => 111,  378 => 110,  373 => 109,  370 => 108,  367 => 107,  364 => 106,  359 => 105,  356 => 104,  352 => 84,  346 => 82,  343 => 81,  340 => 80,  334 => 72,  330 => 71,  327 => 70,  324 => 69,  321 => 68,  318 => 67,  312 => 66,  302 => 61,  286 => 57,  279 => 54,  267 => 51,  261 => 36,  257 => 35,  253 => 34,  235 => 25,  231 => 24,  217 => 13,  209 => 11,  203 => 5,  192 => 131,  175 => 65,  173 => 104,  170 => 63,  156 => 56,  125 => 43,  99 => 39,  301 => 100,  295 => 59,  292 => 95,  289 => 94,  287 => 93,  282 => 55,  276 => 86,  273 => 85,  270 => 52,  268 => 83,  263 => 80,  249 => 33,  245 => 32,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 59,  112 => 38,  82 => 24,  65 => 16,  38 => 6,  144 => 52,  141 => 54,  135 => 47,  126 => 45,  109 => 36,  103 => 40,  67 => 29,  61 => 17,  47 => 12,  91 => 29,  84 => 25,  94 => 39,  88 => 27,  59 => 15,  28 => 2,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 71,  194 => 138,  191 => 78,  189 => 67,  186 => 127,  180 => 119,  172 => 67,  159 => 60,  154 => 59,  147 => 57,  132 => 46,  127 => 35,  121 => 34,  118 => 39,  114 => 38,  104 => 89,  100 => 32,  78 => 24,  75 => 23,  71 => 30,  34 => 6,  105 => 41,  93 => 38,  79 => 32,  76 => 67,  72 => 14,  68 => 21,  58 => 12,  24 => 3,  27 => 4,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 14,  22 => 2,  163 => 63,  155 => 59,  152 => 49,  149 => 52,  145 => 51,  139 => 50,  131 => 42,  123 => 45,  120 => 46,  115 => 43,  106 => 35,  101 => 88,  96 => 31,  83 => 33,  80 => 24,  74 => 66,  66 => 17,  55 => 22,  52 => 11,  50 => 20,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 66,  178 => 65,  171 => 64,  165 => 53,  162 => 61,  157 => 48,  153 => 96,  151 => 58,  143 => 55,  138 => 39,  136 => 50,  133 => 93,  130 => 45,  122 => 90,  119 => 44,  116 => 39,  111 => 42,  108 => 37,  102 => 40,  98 => 39,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 25,  73 => 19,  64 => 17,  60 => 23,  57 => 16,  54 => 11,  51 => 13,  48 => 10,  45 => 8,  42 => 13,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
