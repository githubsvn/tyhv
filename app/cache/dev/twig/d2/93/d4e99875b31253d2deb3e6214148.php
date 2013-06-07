<?php

/* SMAdminBundle:ProductGroup:show.html.twig */
class __TwigTemplate_d293d4e99875b31253d2deb3e6214148 extends Twig_Template
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
        echo "<h1>ProductGroup</h1>

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
            <th>Status</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "status"), "html", null, true);
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
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productgroup"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productgroup_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productgroup_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 37
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
        return "SMAdminBundle:ProductGroup:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 100,  176 => 66,  208 => 69,  252 => 93,  233 => 88,  140 => 44,  193 => 62,  158 => 47,  384 => 138,  377 => 134,  372 => 133,  358 => 130,  329 => 121,  305 => 110,  285 => 102,  247 => 89,  240 => 85,  232 => 83,  224 => 81,  213 => 69,  174 => 52,  166 => 49,  142 => 55,  374 => 144,  366 => 132,  360 => 138,  354 => 137,  348 => 134,  336 => 128,  331 => 122,  319 => 120,  313 => 118,  307 => 116,  294 => 111,  259 => 95,  256 => 100,  228 => 82,  187 => 59,  181 => 55,  387 => 152,  381 => 148,  375 => 147,  369 => 144,  363 => 140,  357 => 138,  351 => 136,  349 => 135,  345 => 134,  328 => 126,  320 => 123,  316 => 122,  311 => 117,  308 => 111,  291 => 113,  288 => 109,  265 => 106,  237 => 90,  221 => 74,  197 => 61,  20 => 1,  333 => 123,  325 => 122,  322 => 124,  314 => 118,  304 => 114,  299 => 113,  290 => 106,  283 => 101,  280 => 103,  264 => 96,  251 => 90,  242 => 89,  236 => 89,  234 => 89,  169 => 62,  150 => 44,  397 => 153,  391 => 153,  385 => 148,  379 => 145,  361 => 137,  355 => 135,  350 => 128,  344 => 129,  338 => 127,  332 => 125,  326 => 123,  315 => 113,  309 => 115,  303 => 109,  297 => 108,  284 => 106,  260 => 105,  254 => 91,  246 => 95,  241 => 94,  239 => 95,  229 => 76,  226 => 87,  218 => 84,  210 => 70,  207 => 68,  202 => 75,  200 => 82,  414 => 161,  406 => 159,  400 => 155,  394 => 154,  388 => 151,  382 => 147,  376 => 145,  368 => 142,  353 => 135,  347 => 127,  341 => 125,  339 => 125,  335 => 124,  310 => 117,  306 => 118,  298 => 114,  296 => 113,  293 => 106,  281 => 108,  278 => 102,  272 => 101,  269 => 101,  266 => 104,  258 => 94,  255 => 101,  250 => 100,  248 => 101,  244 => 91,  238 => 96,  227 => 93,  219 => 93,  199 => 63,  195 => 73,  168 => 50,  146 => 55,  190 => 71,  182 => 73,  167 => 52,  161 => 50,  137 => 43,  97 => 43,  53 => 14,  40 => 16,  124 => 40,  117 => 49,  110 => 42,  90 => 30,  56 => 23,  69 => 31,  129 => 41,  87 => 33,  49 => 19,  134 => 51,  86 => 32,  179 => 67,  164 => 64,  148 => 56,  128 => 37,  113 => 57,  107 => 32,  77 => 30,  62 => 27,  23 => 2,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 160,  405 => 155,  401 => 154,  395 => 154,  392 => 153,  383 => 147,  378 => 110,  373 => 146,  370 => 143,  367 => 139,  364 => 141,  359 => 131,  356 => 104,  352 => 136,  346 => 82,  343 => 126,  340 => 129,  334 => 128,  330 => 124,  327 => 70,  324 => 117,  321 => 121,  318 => 119,  312 => 119,  302 => 114,  286 => 57,  279 => 106,  267 => 96,  261 => 94,  257 => 98,  253 => 94,  235 => 91,  231 => 24,  217 => 83,  209 => 69,  203 => 66,  192 => 72,  175 => 55,  173 => 67,  170 => 63,  156 => 59,  125 => 36,  99 => 42,  301 => 112,  295 => 59,  292 => 109,  289 => 104,  287 => 107,  282 => 107,  276 => 99,  273 => 98,  270 => 99,  268 => 107,  263 => 95,  249 => 98,  245 => 92,  230 => 88,  222 => 86,  220 => 90,  215 => 70,  211 => 79,  204 => 67,  198 => 63,  185 => 57,  183 => 69,  177 => 58,  160 => 60,  112 => 36,  82 => 30,  65 => 19,  38 => 6,  144 => 42,  141 => 53,  135 => 39,  126 => 46,  109 => 35,  103 => 40,  67 => 26,  61 => 15,  47 => 30,  91 => 34,  84 => 25,  94 => 27,  88 => 27,  59 => 29,  28 => 2,  225 => 75,  216 => 83,  212 => 88,  205 => 67,  201 => 74,  196 => 69,  194 => 72,  191 => 71,  189 => 70,  186 => 59,  180 => 68,  172 => 64,  159 => 59,  154 => 58,  147 => 55,  132 => 42,  127 => 47,  121 => 50,  118 => 37,  114 => 43,  104 => 30,  100 => 28,  78 => 37,  75 => 22,  71 => 28,  34 => 11,  105 => 31,  93 => 31,  79 => 24,  76 => 29,  72 => 20,  68 => 27,  58 => 26,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 27,  63 => 17,  46 => 9,  22 => 2,  163 => 61,  155 => 48,  152 => 47,  149 => 43,  145 => 54,  139 => 54,  131 => 52,  123 => 46,  120 => 35,  115 => 44,  106 => 31,  101 => 33,  96 => 42,  83 => 31,  80 => 37,  74 => 36,  66 => 31,  55 => 12,  52 => 11,  50 => 20,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 64,  171 => 63,  165 => 60,  162 => 60,  157 => 46,  153 => 57,  151 => 56,  143 => 45,  138 => 52,  136 => 49,  133 => 50,  130 => 48,  122 => 39,  119 => 45,  116 => 48,  111 => 43,  108 => 36,  102 => 36,  98 => 32,  95 => 28,  92 => 27,  89 => 28,  85 => 29,  81 => 40,  73 => 22,  64 => 26,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
