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
        return array (  359 => 131,  352 => 127,  333 => 123,  325 => 121,  322 => 120,  314 => 118,  280 => 103,  433 => 166,  425 => 164,  419 => 160,  411 => 158,  407 => 156,  401 => 152,  395 => 150,  389 => 148,  383 => 146,  366 => 138,  349 => 132,  321 => 121,  315 => 117,  309 => 115,  442 => 172,  438 => 171,  434 => 170,  428 => 166,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  396 => 153,  392 => 152,  387 => 147,  369 => 142,  363 => 140,  358 => 135,  353 => 135,  347 => 126,  341 => 125,  339 => 130,  330 => 124,  324 => 123,  296 => 113,  293 => 112,  266 => 104,  258 => 94,  344 => 129,  337 => 123,  318 => 119,  307 => 116,  299 => 110,  305 => 111,  291 => 111,  283 => 104,  271 => 96,  262 => 93,  250 => 100,  316 => 119,  312 => 119,  306 => 115,  300 => 113,  277 => 102,  254 => 97,  248 => 91,  242 => 89,  240 => 85,  236 => 87,  208 => 70,  188 => 71,  113 => 57,  56 => 23,  304 => 114,  297 => 111,  259 => 103,  244 => 97,  235 => 91,  228 => 81,  193 => 65,  90 => 37,  285 => 104,  281 => 108,  267 => 95,  251 => 92,  246 => 95,  234 => 86,  192 => 72,  298 => 114,  284 => 106,  272 => 101,  264 => 97,  255 => 101,  247 => 87,  238 => 96,  232 => 80,  218 => 87,  214 => 80,  206 => 71,  158 => 57,  146 => 55,  40 => 8,  286 => 105,  279 => 101,  274 => 94,  260 => 95,  252 => 89,  241 => 94,  237 => 85,  233 => 87,  231 => 82,  226 => 83,  210 => 85,  195 => 80,  187 => 64,  181 => 62,  167 => 67,  137 => 54,  124 => 46,  97 => 39,  69 => 31,  53 => 14,  229 => 84,  221 => 83,  209 => 88,  203 => 75,  197 => 74,  174 => 64,  166 => 59,  142 => 51,  117 => 44,  62 => 27,  227 => 93,  223 => 79,  219 => 91,  213 => 72,  207 => 76,  190 => 78,  182 => 73,  168 => 65,  150 => 55,  110 => 44,  129 => 47,  87 => 26,  49 => 16,  134 => 52,  86 => 25,  77 => 22,  164 => 66,  148 => 60,  128 => 46,  199 => 74,  179 => 71,  169 => 61,  161 => 63,  107 => 33,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 165,  421 => 122,  418 => 121,  413 => 159,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 146,  378 => 144,  375 => 144,  372 => 140,  367 => 141,  364 => 104,  360 => 136,  354 => 134,  351 => 81,  348 => 80,  342 => 72,  338 => 127,  335 => 129,  332 => 125,  329 => 68,  326 => 123,  320 => 120,  310 => 117,  303 => 113,  294 => 110,  290 => 106,  278 => 102,  275 => 102,  269 => 101,  265 => 99,  261 => 34,  257 => 98,  253 => 95,  243 => 90,  239 => 93,  217 => 77,  202 => 83,  200 => 82,  175 => 69,  173 => 62,  170 => 59,  156 => 58,  125 => 46,  99 => 42,  301 => 112,  295 => 113,  292 => 109,  289 => 108,  287 => 107,  282 => 104,  276 => 102,  273 => 85,  270 => 106,  268 => 99,  263 => 100,  249 => 96,  245 => 91,  230 => 75,  222 => 82,  220 => 76,  215 => 78,  211 => 77,  204 => 70,  198 => 63,  185 => 73,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 30,  38 => 6,  144 => 59,  141 => 54,  135 => 50,  126 => 50,  109 => 56,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 39,  84 => 26,  94 => 38,  88 => 27,  59 => 5,  28 => 2,  225 => 76,  216 => 90,  212 => 88,  205 => 80,  201 => 69,  196 => 73,  194 => 62,  191 => 73,  189 => 74,  186 => 61,  180 => 71,  172 => 66,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 47,  121 => 45,  118 => 42,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 11,  105 => 35,  93 => 46,  79 => 36,  76 => 35,  72 => 34,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 58,  152 => 61,  149 => 58,  145 => 45,  139 => 51,  131 => 48,  123 => 43,  120 => 49,  115 => 39,  106 => 29,  101 => 51,  96 => 32,  83 => 39,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 61,  171 => 68,  165 => 60,  162 => 59,  157 => 60,  153 => 54,  151 => 57,  143 => 48,  138 => 53,  136 => 49,  133 => 51,  130 => 51,  122 => 43,  119 => 41,  116 => 48,  111 => 37,  108 => 36,  102 => 33,  98 => 32,  95 => 41,  92 => 29,  89 => 28,  85 => 38,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
