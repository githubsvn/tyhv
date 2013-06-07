<?php

/* SMAdminBundle:Company:show.html.twig */
class __TwigTemplate_f27c8778602f492bb61dbdda2ca2e70c extends Twig_Template
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
        return array (  333 => 123,  325 => 121,  322 => 120,  314 => 118,  304 => 114,  299 => 110,  290 => 106,  283 => 104,  280 => 103,  264 => 97,  251 => 92,  242 => 89,  236 => 87,  234 => 86,  169 => 61,  150 => 55,  397 => 153,  391 => 149,  385 => 148,  379 => 145,  361 => 137,  355 => 135,  350 => 133,  344 => 129,  338 => 127,  332 => 125,  326 => 123,  315 => 117,  309 => 115,  303 => 113,  297 => 111,  284 => 106,  260 => 95,  254 => 97,  246 => 95,  241 => 94,  239 => 93,  229 => 84,  226 => 83,  218 => 87,  210 => 85,  207 => 76,  202 => 83,  200 => 82,  414 => 161,  406 => 159,  400 => 155,  394 => 154,  388 => 151,  382 => 147,  376 => 145,  368 => 142,  353 => 135,  347 => 126,  341 => 125,  339 => 130,  335 => 129,  310 => 117,  306 => 115,  298 => 114,  296 => 113,  293 => 112,  281 => 108,  278 => 102,  272 => 101,  269 => 101,  266 => 104,  258 => 94,  255 => 101,  250 => 100,  248 => 91,  244 => 97,  238 => 96,  227 => 93,  219 => 91,  199 => 74,  195 => 80,  168 => 65,  146 => 55,  190 => 78,  182 => 73,  167 => 67,  161 => 64,  137 => 54,  97 => 39,  53 => 14,  40 => 8,  124 => 46,  117 => 41,  110 => 44,  90 => 37,  56 => 23,  69 => 31,  129 => 47,  87 => 28,  49 => 16,  134 => 52,  86 => 25,  179 => 70,  164 => 60,  148 => 53,  128 => 46,  113 => 57,  107 => 36,  77 => 22,  62 => 27,  23 => 2,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 160,  405 => 155,  401 => 154,  395 => 115,  392 => 153,  383 => 147,  378 => 110,  373 => 141,  370 => 143,  367 => 139,  364 => 141,  359 => 131,  356 => 104,  352 => 127,  346 => 82,  343 => 81,  340 => 80,  334 => 72,  330 => 124,  327 => 70,  324 => 123,  321 => 121,  318 => 119,  312 => 119,  302 => 61,  286 => 57,  279 => 54,  267 => 51,  261 => 36,  257 => 98,  253 => 34,  235 => 91,  231 => 24,  217 => 13,  209 => 88,  203 => 75,  192 => 131,  175 => 69,  173 => 62,  170 => 63,  156 => 58,  125 => 34,  99 => 42,  301 => 112,  295 => 59,  292 => 109,  289 => 108,  287 => 107,  282 => 55,  276 => 86,  273 => 85,  270 => 52,  268 => 99,  263 => 100,  249 => 96,  245 => 32,  230 => 75,  222 => 82,  220 => 72,  215 => 78,  211 => 77,  204 => 76,  198 => 75,  185 => 73,  183 => 60,  177 => 58,  160 => 59,  112 => 39,  82 => 25,  65 => 18,  38 => 6,  144 => 56,  141 => 54,  135 => 50,  126 => 50,  109 => 56,  103 => 40,  67 => 18,  61 => 15,  47 => 30,  91 => 39,  84 => 26,  94 => 38,  88 => 27,  59 => 5,  28 => 2,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 71,  194 => 138,  191 => 78,  189 => 74,  186 => 127,  180 => 71,  172 => 66,  159 => 60,  154 => 59,  147 => 56,  132 => 47,  127 => 35,  121 => 42,  118 => 42,  114 => 31,  104 => 41,  100 => 25,  78 => 24,  75 => 31,  71 => 19,  34 => 11,  105 => 35,  93 => 46,  79 => 36,  76 => 35,  72 => 34,  68 => 20,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 10,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 52,  145 => 51,  139 => 51,  131 => 42,  123 => 43,  120 => 49,  115 => 39,  106 => 29,  101 => 51,  96 => 32,  83 => 39,  80 => 24,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 65,  171 => 68,  165 => 60,  162 => 59,  157 => 48,  153 => 96,  151 => 57,  143 => 55,  138 => 53,  136 => 49,  133 => 93,  130 => 51,  122 => 43,  119 => 41,  116 => 48,  111 => 30,  108 => 36,  102 => 33,  98 => 32,  95 => 41,  92 => 29,  89 => 28,  85 => 38,  81 => 40,  73 => 21,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 13,  48 => 19,  45 => 8,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
