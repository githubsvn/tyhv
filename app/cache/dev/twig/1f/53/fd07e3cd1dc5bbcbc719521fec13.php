<?php

/* SMAdminBundle:User:show.html.twig */
class __TwigTemplate_1f53fd07e3cd1dc5bbcbc719521fec13 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User detail", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<table class=\"table table-bordered table-striped\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fullname", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fullname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created_at", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "active"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"well form-inline\">
    <a class=\"btn\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user"), "html", null, true);
        echo "\">
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "
    </a>
    <a class=\"btn\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "
    </a>
</form>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  87 => 28,  49 => 19,  134 => 46,  86 => 25,  77 => 24,  164 => 60,  148 => 53,  128 => 45,  199 => 81,  179 => 66,  169 => 66,  161 => 63,  107 => 36,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  320 => 66,  310 => 61,  303 => 59,  294 => 57,  290 => 55,  278 => 52,  275 => 51,  269 => 36,  265 => 35,  261 => 34,  257 => 33,  253 => 32,  243 => 25,  239 => 24,  217 => 11,  202 => 143,  200 => 136,  175 => 65,  173 => 104,  170 => 103,  156 => 56,  125 => 43,  99 => 34,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 54,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 12,  215 => 70,  211 => 5,  204 => 83,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 59,  112 => 38,  82 => 24,  65 => 16,  38 => 6,  144 => 52,  141 => 50,  135 => 47,  126 => 45,  109 => 36,  103 => 35,  67 => 20,  61 => 17,  47 => 12,  91 => 29,  84 => 25,  94 => 39,  88 => 27,  59 => 15,  28 => 2,  225 => 13,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 76,  189 => 77,  186 => 127,  180 => 119,  172 => 67,  159 => 98,  154 => 59,  147 => 59,  132 => 46,  127 => 49,  121 => 45,  118 => 39,  114 => 38,  104 => 89,  100 => 32,  78 => 42,  75 => 31,  71 => 21,  34 => 6,  105 => 41,  93 => 29,  79 => 32,  76 => 67,  72 => 14,  68 => 18,  58 => 31,  24 => 3,  27 => 6,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 11,  22 => 2,  163 => 63,  155 => 57,  152 => 61,  149 => 52,  145 => 51,  139 => 50,  131 => 42,  123 => 45,  120 => 46,  115 => 43,  106 => 35,  101 => 88,  96 => 31,  83 => 33,  80 => 24,  74 => 66,  66 => 17,  55 => 22,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 121,  178 => 118,  171 => 64,  165 => 100,  162 => 57,  157 => 56,  153 => 96,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 93,  130 => 45,  122 => 90,  119 => 44,  116 => 39,  111 => 42,  108 => 37,  102 => 40,  98 => 39,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 25,  73 => 40,  64 => 17,  60 => 23,  57 => 16,  54 => 11,  51 => 13,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 7,);
    }
}
