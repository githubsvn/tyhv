<?php

/* SMAdminBundle:Menu:show.html.twig */
class __TwigTemplate_76fe97e5b33a41c29a0173d062aa7299 extends Twig_Template
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
        echo "<h1>Menu</h1>

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
            <th>Lft</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lft"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Rgt</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "rgt"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 45
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
        return "SMAdminBundle:Menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  327 => 141,  317 => 136,  311 => 135,  337 => 151,  319 => 143,  300 => 135,  277 => 127,  253 => 90,  188 => 97,  359 => 131,  352 => 127,  333 => 123,  322 => 120,  314 => 140,  299 => 128,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 150,  389 => 148,  383 => 146,  378 => 144,  372 => 140,  360 => 136,  354 => 134,  349 => 132,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 117,  303 => 113,  257 => 91,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 146,  367 => 141,  358 => 135,  330 => 124,  324 => 123,  310 => 117,  306 => 115,  248 => 119,  345 => 153,  339 => 130,  331 => 142,  323 => 140,  320 => 121,  288 => 131,  266 => 104,  291 => 99,  283 => 129,  271 => 118,  262 => 115,  239 => 93,  208 => 70,  316 => 120,  312 => 119,  308 => 138,  296 => 134,  265 => 96,  261 => 92,  256 => 113,  250 => 100,  236 => 87,  224 => 80,  176 => 63,  113 => 32,  202 => 68,  56 => 11,  304 => 114,  297 => 111,  259 => 122,  244 => 110,  228 => 77,  193 => 74,  90 => 20,  285 => 123,  281 => 122,  275 => 98,  269 => 101,  267 => 95,  251 => 92,  246 => 95,  234 => 114,  192 => 63,  298 => 103,  294 => 111,  278 => 102,  264 => 93,  255 => 101,  247 => 111,  243 => 86,  238 => 108,  218 => 74,  214 => 74,  206 => 70,  158 => 49,  146 => 79,  40 => 8,  286 => 98,  279 => 101,  274 => 94,  260 => 95,  252 => 89,  241 => 109,  237 => 81,  233 => 107,  231 => 82,  210 => 72,  195 => 80,  187 => 64,  181 => 58,  167 => 52,  137 => 70,  124 => 37,  97 => 39,  69 => 31,  53 => 14,  229 => 84,  221 => 75,  209 => 108,  203 => 75,  197 => 75,  174 => 65,  166 => 59,  142 => 43,  117 => 33,  62 => 27,  227 => 93,  223 => 104,  219 => 102,  213 => 101,  207 => 76,  190 => 78,  182 => 73,  168 => 65,  150 => 55,  110 => 44,  129 => 47,  87 => 26,  49 => 16,  134 => 52,  86 => 38,  77 => 22,  164 => 82,  148 => 45,  128 => 38,  199 => 105,  179 => 94,  169 => 84,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 147,  382 => 105,  379 => 104,  375 => 144,  369 => 142,  366 => 138,  363 => 140,  357 => 132,  353 => 135,  350 => 128,  347 => 126,  344 => 129,  341 => 152,  335 => 129,  325 => 146,  318 => 119,  309 => 134,  305 => 132,  302 => 136,  293 => 126,  290 => 106,  284 => 106,  280 => 97,  272 => 95,  258 => 94,  254 => 97,  240 => 117,  235 => 91,  232 => 87,  226 => 83,  217 => 110,  200 => 82,  175 => 69,  173 => 85,  170 => 53,  156 => 58,  125 => 64,  99 => 42,  301 => 112,  295 => 96,  292 => 109,  289 => 108,  287 => 124,  282 => 104,  276 => 120,  273 => 119,  270 => 102,  268 => 117,  263 => 100,  249 => 89,  245 => 87,  230 => 106,  222 => 82,  220 => 83,  215 => 78,  211 => 77,  204 => 73,  198 => 66,  185 => 73,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 14,  38 => 6,  144 => 59,  141 => 71,  135 => 40,  126 => 50,  109 => 57,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 50,  84 => 26,  94 => 38,  88 => 44,  59 => 12,  28 => 2,  225 => 105,  216 => 73,  212 => 88,  205 => 77,  201 => 106,  196 => 65,  194 => 96,  191 => 95,  189 => 62,  186 => 94,  180 => 71,  172 => 66,  159 => 55,  154 => 47,  147 => 56,  132 => 68,  127 => 51,  121 => 63,  118 => 42,  114 => 65,  104 => 29,  100 => 28,  78 => 23,  75 => 17,  71 => 15,  34 => 11,  105 => 56,  93 => 46,  79 => 18,  76 => 35,  72 => 34,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 7,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 82,  152 => 61,  149 => 58,  145 => 55,  139 => 75,  131 => 39,  123 => 68,  120 => 49,  115 => 39,  106 => 62,  101 => 51,  96 => 32,  83 => 39,  80 => 39,  74 => 21,  66 => 17,  55 => 23,  52 => 10,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 93,  178 => 57,  171 => 89,  165 => 51,  162 => 86,  157 => 78,  153 => 77,  151 => 81,  143 => 48,  138 => 53,  136 => 49,  133 => 52,  130 => 72,  122 => 43,  119 => 67,  116 => 61,  111 => 37,  108 => 30,  102 => 43,  98 => 41,  95 => 41,  92 => 45,  89 => 28,  85 => 38,  81 => 40,  73 => 35,  64 => 31,  60 => 22,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
