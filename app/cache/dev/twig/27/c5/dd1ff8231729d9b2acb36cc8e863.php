<?php

/* SMAdminBundle:Company:show.html.twig */
class __TwigTemplate_27c5dd1ff8231729d9b2acb36cc8e863 extends Twig_Template
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
        echo "<h1>Company</h1>

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
            <th>Charter_capital</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "chartercapital"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "phone"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fax</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fax"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mst</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mst"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 57
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
        return "SMAdminBundle:Company:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  350 => 133,  344 => 130,  338 => 126,  326 => 122,  324 => 121,  320 => 120,  315 => 118,  309 => 114,  303 => 112,  297 => 110,  291 => 108,  286 => 106,  280 => 102,  274 => 100,  266 => 97,  257 => 94,  254 => 93,  243 => 89,  237 => 87,  234 => 86,  228 => 85,  219 => 82,  214 => 81,  206 => 79,  200 => 76,  167 => 68,  150 => 58,  137 => 51,  77 => 24,  69 => 31,  23 => 3,  128 => 48,  113 => 57,  107 => 47,  62 => 27,  56 => 23,  53 => 14,  49 => 16,  86 => 27,  40 => 12,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 140,  362 => 138,  359 => 106,  356 => 134,  353 => 104,  348 => 132,  345 => 102,  341 => 82,  335 => 80,  332 => 124,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 96,  256 => 34,  252 => 92,  248 => 32,  244 => 31,  240 => 30,  226 => 22,  209 => 11,  203 => 5,  192 => 129,  175 => 70,  173 => 102,  170 => 101,  156 => 95,  125 => 34,  99 => 34,  301 => 64,  295 => 109,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 98,  263 => 80,  249 => 91,  245 => 77,  230 => 23,  222 => 83,  220 => 72,  215 => 70,  211 => 80,  204 => 78,  198 => 63,  185 => 61,  183 => 72,  177 => 58,  160 => 57,  112 => 39,  82 => 29,  65 => 18,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 56,  103 => 35,  67 => 25,  61 => 16,  47 => 30,  91 => 33,  84 => 25,  94 => 32,  88 => 22,  59 => 5,  28 => 2,  225 => 84,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 80,  194 => 75,  191 => 74,  189 => 77,  186 => 125,  180 => 117,  172 => 69,  159 => 96,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 31,  104 => 87,  100 => 25,  78 => 20,  75 => 23,  71 => 63,  34 => 11,  105 => 32,  93 => 46,  79 => 70,  76 => 35,  72 => 27,  68 => 26,  58 => 18,  24 => 1,  27 => 7,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 24,  63 => 24,  46 => 21,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 56,  139 => 93,  131 => 42,  123 => 47,  120 => 43,  115 => 39,  106 => 29,  101 => 51,  96 => 32,  83 => 39,  80 => 24,  74 => 21,  66 => 23,  55 => 23,  52 => 22,  50 => 34,  43 => 20,  41 => 15,  37 => 13,  35 => 5,  32 => 4,  29 => 4,  184 => 119,  178 => 116,  171 => 62,  165 => 67,  162 => 57,  157 => 56,  153 => 94,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 50,  130 => 47,  122 => 88,  119 => 32,  116 => 47,  111 => 40,  108 => 37,  102 => 33,  98 => 22,  95 => 30,  92 => 23,  89 => 26,  85 => 41,  81 => 40,  73 => 35,  64 => 25,  60 => 24,  57 => 15,  54 => 10,  51 => 13,  48 => 19,  45 => 15,  42 => 7,  39 => 19,  36 => 5,  33 => 12,  30 => 5,);
    }
}
