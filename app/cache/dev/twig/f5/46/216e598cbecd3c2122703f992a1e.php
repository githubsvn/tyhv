<?php

/* SMAdminBundle:User:show.html.twig */
class __TwigTemplate_f546216e598cbecd3c2122703f992a1e extends Twig_Template
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
        echo "<h1>User</h1>

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
            <th>Username</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fullname</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fullname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Salt</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "salt"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Password</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "password"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Active</th>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "active"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<form action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"well form-inline\">
    <a class=\"btn\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user"), "html", null, true);
        echo "\">
        Back to the list
    </a>
    <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
        Edit
    </a>
    <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
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
        return array (  113 => 50,  107 => 47,  62 => 22,  56 => 21,  53 => 17,  49 => 19,  86 => 27,  40 => 14,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 108,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  345 => 102,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 49,  256 => 34,  252 => 33,  248 => 32,  244 => 31,  240 => 30,  226 => 22,  209 => 11,  203 => 5,  192 => 129,  175 => 115,  173 => 102,  170 => 101,  156 => 95,  125 => 89,  99 => 85,  301 => 64,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 23,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 39,  82 => 71,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 34,  103 => 46,  67 => 25,  61 => 16,  47 => 9,  91 => 78,  84 => 24,  94 => 39,  88 => 37,  59 => 22,  28 => 2,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 80,  194 => 135,  191 => 78,  189 => 77,  186 => 125,  180 => 117,  172 => 67,  159 => 96,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 87,  100 => 33,  78 => 20,  75 => 23,  71 => 63,  34 => 11,  105 => 32,  93 => 83,  79 => 70,  76 => 65,  72 => 14,  68 => 52,  58 => 12,  24 => 3,  27 => 4,  21 => 2,  44 => 12,  31 => 3,  26 => 6,  25 => 4,  19 => 1,  70 => 24,  63 => 24,  46 => 13,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 93,  131 => 42,  123 => 47,  120 => 54,  115 => 39,  106 => 35,  101 => 86,  96 => 31,  83 => 18,  80 => 26,  74 => 29,  66 => 23,  55 => 14,  52 => 15,  50 => 10,  43 => 7,  41 => 6,  37 => 13,  35 => 5,  32 => 4,  29 => 3,  184 => 119,  178 => 116,  171 => 62,  165 => 98,  162 => 57,  157 => 56,  153 => 94,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 91,  130 => 47,  122 => 88,  119 => 41,  116 => 35,  111 => 38,  108 => 37,  102 => 31,  98 => 22,  95 => 41,  92 => 30,  89 => 26,  85 => 24,  81 => 33,  73 => 19,  64 => 17,  60 => 21,  57 => 14,  54 => 10,  51 => 13,  48 => 36,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 12,  30 => 7,);
    }
}
