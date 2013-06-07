<?php

/* SMAdminBundle:Group:show.html.twig */
class __TwigTemplate_f7af8217b7fdad3a3e88ab009a7d3be6 extends Twig_Template
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
        return array (  53 => 55,  40 => 12,  124 => 46,  117 => 44,  110 => 42,  90 => 37,  56 => 23,  69 => 17,  129 => 46,  87 => 28,  49 => 16,  134 => 46,  86 => 36,  179 => 66,  164 => 60,  148 => 53,  128 => 35,  113 => 31,  107 => 36,  77 => 24,  62 => 19,  23 => 3,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 121,  405 => 118,  401 => 116,  395 => 115,  392 => 114,  383 => 111,  378 => 110,  373 => 109,  370 => 108,  367 => 107,  364 => 106,  359 => 105,  356 => 104,  352 => 84,  346 => 82,  343 => 81,  340 => 80,  334 => 72,  330 => 71,  327 => 70,  324 => 69,  321 => 68,  318 => 67,  312 => 66,  302 => 61,  286 => 57,  279 => 54,  267 => 51,  261 => 36,  257 => 35,  253 => 34,  235 => 25,  231 => 24,  217 => 13,  209 => 11,  203 => 5,  192 => 131,  175 => 65,  173 => 104,  170 => 63,  156 => 56,  125 => 34,  99 => 32,  301 => 100,  295 => 59,  292 => 95,  289 => 94,  287 => 93,  282 => 55,  276 => 86,  273 => 85,  270 => 52,  268 => 83,  263 => 80,  249 => 33,  245 => 32,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 59,  112 => 38,  82 => 24,  65 => 30,  38 => 6,  144 => 52,  141 => 54,  135 => 47,  126 => 45,  109 => 36,  103 => 40,  67 => 29,  61 => 17,  47 => 30,  91 => 29,  84 => 25,  94 => 39,  88 => 22,  59 => 5,  28 => 2,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 71,  194 => 138,  191 => 78,  189 => 67,  186 => 127,  180 => 119,  172 => 67,  159 => 60,  154 => 59,  147 => 57,  132 => 46,  127 => 35,  121 => 34,  118 => 39,  114 => 31,  104 => 89,  100 => 25,  78 => 24,  75 => 23,  71 => 30,  34 => 11,  105 => 41,  93 => 38,  79 => 32,  76 => 67,  72 => 14,  68 => 20,  58 => 18,  24 => 1,  27 => 7,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 14,  22 => 2,  163 => 63,  155 => 59,  152 => 49,  149 => 52,  145 => 51,  139 => 50,  131 => 42,  123 => 45,  120 => 46,  115 => 43,  106 => 29,  101 => 88,  96 => 24,  83 => 33,  80 => 24,  74 => 21,  66 => 17,  55 => 23,  52 => 17,  50 => 34,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 66,  178 => 65,  171 => 64,  165 => 53,  162 => 61,  157 => 48,  153 => 96,  151 => 58,  143 => 55,  138 => 39,  136 => 50,  133 => 93,  130 => 45,  122 => 90,  119 => 32,  116 => 39,  111 => 30,  108 => 37,  102 => 40,  98 => 39,  95 => 30,  92 => 23,  89 => 19,  85 => 41,  81 => 40,  73 => 35,  64 => 17,  60 => 23,  57 => 17,  54 => 11,  51 => 13,  48 => 19,  45 => 15,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
