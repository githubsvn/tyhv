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
        return array (  359 => 131,  352 => 127,  333 => 123,  322 => 120,  314 => 118,  299 => 110,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 117,  303 => 113,  257 => 98,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  330 => 124,  324 => 123,  310 => 117,  306 => 115,  248 => 91,  345 => 127,  339 => 130,  331 => 124,  323 => 122,  320 => 121,  288 => 107,  266 => 104,  291 => 105,  283 => 104,  271 => 96,  262 => 98,  239 => 93,  208 => 70,  316 => 120,  312 => 119,  308 => 118,  296 => 113,  265 => 96,  261 => 95,  256 => 95,  250 => 100,  236 => 87,  224 => 80,  176 => 63,  113 => 57,  202 => 83,  56 => 23,  304 => 114,  297 => 111,  259 => 103,  244 => 97,  228 => 89,  193 => 74,  90 => 37,  285 => 104,  281 => 108,  275 => 98,  269 => 101,  267 => 95,  251 => 92,  246 => 95,  234 => 86,  192 => 70,  298 => 114,  294 => 111,  278 => 102,  264 => 97,  255 => 101,  247 => 87,  243 => 86,  238 => 96,  218 => 87,  214 => 74,  206 => 71,  158 => 57,  146 => 55,  40 => 8,  286 => 110,  279 => 101,  274 => 94,  260 => 95,  252 => 89,  241 => 94,  237 => 85,  233 => 79,  231 => 82,  210 => 85,  195 => 80,  187 => 64,  181 => 62,  167 => 67,  137 => 53,  124 => 46,  97 => 39,  69 => 31,  53 => 14,  229 => 84,  221 => 75,  209 => 88,  203 => 75,  197 => 75,  174 => 65,  166 => 59,  142 => 51,  117 => 46,  62 => 27,  227 => 93,  223 => 84,  219 => 91,  213 => 72,  207 => 76,  190 => 78,  182 => 73,  168 => 65,  150 => 55,  110 => 44,  129 => 47,  87 => 26,  49 => 16,  134 => 52,  86 => 38,  77 => 22,  164 => 62,  148 => 56,  128 => 46,  199 => 74,  179 => 71,  169 => 61,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 142,  366 => 138,  363 => 140,  357 => 132,  353 => 135,  350 => 128,  347 => 126,  344 => 129,  341 => 125,  335 => 129,  325 => 121,  318 => 119,  309 => 115,  305 => 111,  302 => 115,  293 => 112,  290 => 106,  284 => 106,  280 => 103,  272 => 101,  258 => 94,  254 => 97,  240 => 90,  235 => 91,  232 => 87,  226 => 83,  217 => 86,  200 => 82,  175 => 69,  173 => 62,  170 => 59,  156 => 58,  125 => 49,  99 => 42,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 107,  282 => 104,  276 => 103,  273 => 101,  270 => 102,  268 => 99,  263 => 100,  249 => 96,  245 => 85,  230 => 75,  222 => 82,  220 => 83,  215 => 78,  211 => 77,  204 => 73,  198 => 72,  185 => 73,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 30,  38 => 6,  144 => 59,  141 => 54,  135 => 50,  126 => 50,  109 => 56,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 39,  84 => 26,  94 => 38,  88 => 27,  59 => 5,  28 => 2,  225 => 76,  216 => 90,  212 => 88,  205 => 77,  201 => 76,  196 => 66,  194 => 62,  191 => 73,  189 => 74,  186 => 61,  180 => 71,  172 => 66,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 51,  121 => 45,  118 => 42,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 11,  105 => 35,  93 => 46,  79 => 36,  76 => 35,  72 => 34,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 58,  152 => 61,  149 => 58,  145 => 55,  139 => 51,  131 => 48,  123 => 50,  120 => 49,  115 => 39,  106 => 44,  101 => 51,  96 => 32,  83 => 39,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 61,  171 => 68,  165 => 60,  162 => 59,  157 => 57,  153 => 54,  151 => 57,  143 => 48,  138 => 53,  136 => 49,  133 => 52,  130 => 51,  122 => 43,  119 => 41,  116 => 48,  111 => 37,  108 => 36,  102 => 43,  98 => 41,  95 => 41,  92 => 40,  89 => 28,  85 => 38,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
