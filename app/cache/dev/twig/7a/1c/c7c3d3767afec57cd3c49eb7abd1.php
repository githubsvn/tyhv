<?php

/* SMAdminBundle:Products:show.html.twig */
class __TwigTemplate_7a1cc7c3d3767afec57cd3c49eb7abd1 extends Twig_Template
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
        echo "<h1>Products</h1>

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
            <th>Price</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "price"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Unit</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "unit"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Discount</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "discount"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Thumb</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "thumb"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Amount</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "amount"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        return "SMAdminBundle:Products:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 138,  377 => 134,  372 => 133,  358 => 130,  329 => 121,  305 => 110,  285 => 102,  247 => 89,  240 => 85,  232 => 83,  224 => 81,  213 => 73,  174 => 63,  166 => 61,  142 => 55,  374 => 144,  366 => 132,  360 => 138,  354 => 137,  348 => 134,  336 => 128,  331 => 122,  319 => 120,  313 => 118,  307 => 116,  294 => 111,  259 => 93,  256 => 100,  228 => 82,  187 => 75,  181 => 65,  387 => 152,  381 => 148,  375 => 147,  369 => 144,  363 => 140,  357 => 138,  351 => 136,  349 => 135,  345 => 134,  328 => 126,  320 => 123,  316 => 122,  311 => 117,  308 => 111,  291 => 113,  288 => 109,  265 => 106,  237 => 98,  221 => 94,  197 => 78,  20 => 1,  333 => 123,  325 => 122,  322 => 124,  314 => 118,  304 => 114,  299 => 113,  290 => 106,  283 => 101,  280 => 103,  264 => 102,  251 => 90,  242 => 89,  236 => 84,  234 => 86,  169 => 66,  150 => 55,  397 => 153,  391 => 153,  385 => 148,  379 => 145,  361 => 137,  355 => 135,  350 => 128,  344 => 129,  338 => 127,  332 => 125,  326 => 123,  315 => 113,  309 => 115,  303 => 109,  297 => 108,  284 => 106,  260 => 105,  254 => 91,  246 => 95,  241 => 94,  239 => 95,  229 => 96,  226 => 95,  218 => 87,  210 => 87,  207 => 85,  202 => 70,  200 => 82,  414 => 161,  406 => 159,  400 => 155,  394 => 154,  388 => 151,  382 => 147,  376 => 145,  368 => 142,  353 => 135,  347 => 127,  341 => 125,  339 => 125,  335 => 124,  310 => 117,  306 => 118,  298 => 114,  296 => 113,  293 => 106,  281 => 108,  278 => 102,  272 => 101,  269 => 101,  266 => 104,  258 => 104,  255 => 101,  250 => 100,  248 => 101,  244 => 97,  238 => 96,  227 => 93,  219 => 93,  199 => 74,  195 => 77,  168 => 65,  146 => 55,  190 => 66,  182 => 73,  167 => 67,  161 => 64,  137 => 54,  97 => 43,  53 => 14,  40 => 16,  124 => 46,  117 => 49,  110 => 44,  90 => 37,  56 => 23,  69 => 31,  129 => 47,  87 => 38,  49 => 16,  134 => 52,  86 => 39,  179 => 70,  164 => 64,  148 => 53,  128 => 46,  113 => 57,  107 => 36,  77 => 36,  62 => 27,  23 => 2,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 160,  405 => 155,  401 => 154,  395 => 154,  392 => 153,  383 => 147,  378 => 110,  373 => 146,  370 => 143,  367 => 139,  364 => 141,  359 => 131,  356 => 104,  352 => 136,  346 => 82,  343 => 126,  340 => 129,  334 => 128,  330 => 124,  327 => 70,  324 => 117,  321 => 121,  318 => 119,  312 => 119,  302 => 114,  286 => 57,  279 => 106,  267 => 96,  261 => 94,  257 => 98,  253 => 34,  235 => 91,  231 => 24,  217 => 89,  209 => 72,  203 => 75,  192 => 131,  175 => 69,  173 => 67,  170 => 62,  156 => 59,  125 => 34,  99 => 42,  301 => 112,  295 => 59,  292 => 109,  289 => 104,  287 => 107,  282 => 107,  276 => 99,  273 => 98,  270 => 104,  268 => 107,  263 => 100,  249 => 98,  245 => 96,  230 => 75,  222 => 82,  220 => 90,  215 => 78,  211 => 77,  204 => 76,  198 => 75,  185 => 73,  183 => 74,  177 => 58,  160 => 59,  112 => 39,  82 => 25,  65 => 32,  38 => 6,  144 => 56,  141 => 54,  135 => 53,  126 => 50,  109 => 56,  103 => 40,  67 => 18,  61 => 15,  47 => 30,  91 => 39,  84 => 26,  94 => 38,  88 => 27,  59 => 29,  28 => 2,  225 => 96,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 69,  194 => 138,  191 => 76,  189 => 74,  186 => 127,  180 => 71,  172 => 66,  159 => 60,  154 => 59,  147 => 56,  132 => 47,  127 => 51,  121 => 50,  118 => 42,  114 => 37,  104 => 41,  100 => 43,  78 => 24,  75 => 30,  71 => 19,  34 => 11,  105 => 35,  93 => 46,  79 => 24,  76 => 35,  72 => 34,  68 => 20,  58 => 25,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 28,  63 => 24,  46 => 10,  22 => 2,  163 => 60,  155 => 58,  152 => 58,  149 => 52,  145 => 51,  139 => 54,  131 => 52,  123 => 43,  120 => 49,  115 => 39,  106 => 29,  101 => 51,  96 => 42,  83 => 39,  80 => 37,  74 => 21,  66 => 27,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 64,  171 => 68,  165 => 60,  162 => 59,  157 => 59,  153 => 96,  151 => 56,  143 => 55,  138 => 53,  136 => 49,  133 => 93,  130 => 48,  122 => 43,  119 => 41,  116 => 48,  111 => 45,  108 => 36,  102 => 33,  98 => 32,  95 => 41,  92 => 40,  89 => 28,  85 => 37,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 13,  48 => 19,  45 => 8,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
