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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 13
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fullname", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 17
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "fullname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 21
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created_at", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 25
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 29
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "active"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<form action=\"";
        // line 34
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
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
        return array (  96 => 29,  169 => 56,  137 => 46,  129 => 45,  119 => 38,  154 => 50,  146 => 46,  141 => 45,  198 => 66,  181 => 60,  135 => 43,  127 => 39,  122 => 38,  86 => 24,  73 => 18,  55 => 22,  227 => 83,  221 => 81,  107 => 49,  67 => 29,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 106,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 81,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 67,  332 => 66,  322 => 61,  314 => 59,  287 => 52,  284 => 51,  278 => 36,  274 => 35,  270 => 34,  266 => 33,  262 => 32,  252 => 25,  211 => 143,  195 => 68,  193 => 121,  187 => 118,  184 => 117,  182 => 104,  164 => 97,  161 => 96,  140 => 45,  126 => 90,  106 => 41,  103 => 40,  100 => 29,  93 => 85,  74 => 21,  68 => 17,  51 => 10,  333 => 100,  327 => 96,  324 => 95,  320 => 94,  317 => 93,  312 => 90,  306 => 86,  303 => 57,  299 => 55,  296 => 54,  291 => 80,  277 => 79,  273 => 77,  258 => 75,  248 => 24,  245 => 72,  239 => 70,  234 => 13,  226 => 11,  216 => 62,  202 => 61,  199 => 69,  192 => 67,  165 => 52,  156 => 50,  134 => 47,  131 => 46,  120 => 41,  115 => 35,  82 => 22,  76 => 67,  61 => 12,  54 => 14,  171 => 57,  163 => 52,  159 => 51,  152 => 50,  138 => 49,  123 => 38,  117 => 36,  111 => 34,  101 => 34,  98 => 39,  83 => 33,  75 => 31,  71 => 30,  64 => 15,  43 => 7,  36 => 12,  104 => 31,  80 => 23,  63 => 17,  58 => 12,  40 => 6,  24 => 2,  94 => 27,  88 => 24,  48 => 12,  39 => 7,  35 => 5,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 96,  240 => 90,  236 => 88,  229 => 12,  225 => 83,  220 => 5,  218 => 79,  215 => 78,  212 => 76,  209 => 136,  200 => 130,  194 => 65,  179 => 103,  176 => 59,  173 => 62,  166 => 60,  162 => 51,  157 => 51,  155 => 51,  151 => 48,  148 => 47,  145 => 47,  139 => 45,  128 => 39,  114 => 36,  109 => 32,  87 => 34,  84 => 43,  79 => 32,  65 => 14,  34 => 5,  26 => 6,  125 => 52,  118 => 36,  110 => 35,  97 => 45,  92 => 28,  89 => 28,  85 => 25,  69 => 17,  28 => 2,  57 => 10,  50 => 10,  47 => 7,  38 => 6,  27 => 6,  22 => 2,  25 => 3,  19 => 1,  203 => 72,  197 => 66,  189 => 64,  183 => 63,  180 => 63,  174 => 100,  170 => 61,  167 => 98,  158 => 52,  153 => 50,  150 => 44,  147 => 95,  144 => 42,  136 => 43,  133 => 44,  130 => 91,  124 => 39,  121 => 31,  113 => 50,  108 => 33,  105 => 34,  102 => 48,  99 => 29,  95 => 24,  91 => 35,  81 => 24,  70 => 20,  66 => 51,  62 => 22,  59 => 16,  56 => 11,  52 => 13,  49 => 19,  45 => 8,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
