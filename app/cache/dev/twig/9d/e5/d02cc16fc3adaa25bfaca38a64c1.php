<?php

/* SMAdminBundle:Group:show.html.twig */
class __TwigTemplate_9de5d02cc16fc3adaa25bfaca38a64c1 extends Twig_Template
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
        echo "<h1>Group</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Active</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "active"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  128 => 35,  113 => 50,  107 => 47,  62 => 19,  56 => 21,  53 => 55,  49 => 16,  86 => 27,  40 => 12,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 108,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  345 => 102,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 49,  256 => 34,  252 => 33,  248 => 32,  244 => 31,  240 => 30,  226 => 22,  209 => 11,  203 => 5,  192 => 129,  175 => 115,  173 => 102,  170 => 101,  156 => 95,  125 => 34,  99 => 32,  301 => 64,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 23,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 39,  82 => 71,  65 => 30,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 34,  103 => 46,  67 => 25,  61 => 16,  47 => 30,  91 => 78,  84 => 25,  94 => 39,  88 => 22,  59 => 5,  28 => 2,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 80,  194 => 135,  191 => 78,  189 => 77,  186 => 125,  180 => 117,  172 => 67,  159 => 96,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 31,  104 => 87,  100 => 25,  78 => 20,  75 => 23,  71 => 63,  34 => 11,  105 => 32,  93 => 83,  79 => 70,  76 => 65,  72 => 14,  68 => 20,  58 => 18,  24 => 1,  27 => 7,  21 => 2,  44 => 12,  31 => 3,  26 => 6,  25 => 4,  19 => 1,  70 => 24,  63 => 24,  46 => 13,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 93,  131 => 42,  123 => 47,  120 => 54,  115 => 39,  106 => 29,  101 => 86,  96 => 24,  83 => 18,  80 => 24,  74 => 21,  66 => 23,  55 => 23,  52 => 17,  50 => 34,  43 => 8,  41 => 15,  37 => 13,  35 => 5,  32 => 4,  29 => 4,  184 => 119,  178 => 116,  171 => 62,  165 => 98,  162 => 57,  157 => 56,  153 => 94,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 91,  130 => 47,  122 => 88,  119 => 32,  116 => 35,  111 => 30,  108 => 37,  102 => 31,  98 => 22,  95 => 30,  92 => 23,  89 => 26,  85 => 41,  81 => 40,  73 => 35,  64 => 17,  60 => 21,  57 => 17,  54 => 10,  51 => 13,  48 => 19,  45 => 15,  42 => 7,  39 => 11,  36 => 5,  33 => 12,  30 => 5,);
    }
}
