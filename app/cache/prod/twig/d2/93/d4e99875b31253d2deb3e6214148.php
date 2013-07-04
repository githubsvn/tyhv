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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 11
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 15
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 19
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "updatedat"), "Y-m-d H:i:s"), "html", null, true);
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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productgroup_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 36
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productgroup_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 37
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_delete_form_, 'widget');
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
        return array (  172 => 48,  168 => 47,  247 => 75,  235 => 70,  213 => 59,  186 => 64,  423 => 134,  416 => 133,  383 => 127,  417 => 143,  412 => 142,  406 => 138,  394 => 134,  385 => 129,  380 => 128,  375 => 126,  369 => 122,  362 => 120,  346 => 113,  425 => 146,  408 => 138,  401 => 136,  397 => 135,  392 => 134,  387 => 132,  363 => 122,  330 => 113,  313 => 102,  201 => 57,  20 => 1,  356 => 140,  301 => 99,  295 => 95,  238 => 102,  294 => 124,  288 => 94,  404 => 131,  371 => 123,  350 => 119,  339 => 117,  304 => 99,  282 => 93,  257 => 84,  217 => 61,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 154,  441 => 148,  437 => 147,  432 => 138,  427 => 147,  414 => 138,  407 => 136,  403 => 135,  398 => 136,  388 => 128,  365 => 142,  360 => 121,  347 => 118,  336 => 112,  310 => 101,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 153,  433 => 148,  426 => 144,  419 => 142,  415 => 140,  410 => 132,  400 => 137,  393 => 132,  382 => 125,  372 => 125,  366 => 147,  359 => 121,  352 => 119,  272 => 92,  377 => 152,  370 => 124,  353 => 120,  342 => 134,  300 => 102,  207 => 71,  344 => 117,  321 => 106,  308 => 105,  289 => 95,  279 => 98,  242 => 89,  358 => 122,  354 => 143,  349 => 140,  343 => 117,  337 => 115,  335 => 110,  298 => 98,  293 => 105,  269 => 95,  264 => 109,  259 => 108,  219 => 75,  205 => 71,  160 => 45,  72 => 19,  175 => 82,  77 => 20,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 107,  307 => 103,  286 => 98,  275 => 96,  268 => 89,  263 => 95,  243 => 91,  190 => 66,  326 => 112,  305 => 100,  290 => 101,  285 => 94,  280 => 87,  261 => 90,  241 => 71,  237 => 69,  224 => 63,  142 => 41,  90 => 29,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 107,  297 => 101,  283 => 94,  267 => 118,  249 => 82,  244 => 86,  230 => 72,  223 => 63,  177 => 60,  116 => 32,  53 => 11,  44 => 17,  325 => 108,  316 => 95,  309 => 94,  292 => 96,  281 => 99,  276 => 91,  271 => 91,  265 => 86,  260 => 89,  256 => 89,  253 => 83,  214 => 61,  210 => 59,  206 => 58,  196 => 55,  78 => 36,  255 => 88,  251 => 88,  246 => 90,  232 => 82,  228 => 79,  254 => 95,  233 => 83,  231 => 72,  222 => 63,  208 => 72,  204 => 70,  191 => 53,  188 => 63,  185 => 63,  178 => 49,  149 => 53,  143 => 38,  132 => 43,  96 => 34,  169 => 47,  137 => 72,  129 => 37,  119 => 56,  154 => 54,  146 => 52,  141 => 51,  198 => 70,  181 => 49,  135 => 40,  127 => 42,  122 => 44,  86 => 30,  73 => 27,  55 => 22,  227 => 78,  221 => 61,  107 => 35,  67 => 17,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 152,  434 => 118,  430 => 116,  424 => 115,  421 => 144,  411 => 111,  405 => 138,  399 => 130,  395 => 127,  390 => 107,  386 => 131,  381 => 128,  378 => 126,  374 => 126,  367 => 124,  364 => 121,  361 => 141,  355 => 117,  351 => 117,  348 => 118,  345 => 69,  341 => 114,  338 => 111,  332 => 109,  322 => 110,  314 => 106,  287 => 100,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 76,  211 => 73,  195 => 55,  193 => 54,  187 => 52,  184 => 62,  182 => 62,  164 => 57,  161 => 56,  140 => 50,  126 => 45,  106 => 30,  103 => 32,  100 => 31,  93 => 42,  74 => 28,  68 => 26,  51 => 19,  333 => 100,  327 => 110,  324 => 111,  320 => 111,  317 => 104,  312 => 129,  306 => 86,  303 => 93,  299 => 106,  296 => 96,  291 => 104,  277 => 112,  273 => 90,  258 => 96,  248 => 94,  245 => 87,  239 => 85,  234 => 73,  226 => 108,  216 => 61,  202 => 97,  199 => 60,  192 => 54,  165 => 58,  156 => 44,  134 => 47,  131 => 35,  120 => 35,  115 => 36,  82 => 36,  76 => 20,  61 => 15,  54 => 24,  171 => 60,  163 => 46,  159 => 45,  152 => 55,  138 => 39,  123 => 36,  117 => 42,  111 => 33,  101 => 31,  98 => 29,  83 => 35,  75 => 31,  71 => 19,  64 => 26,  43 => 15,  36 => 12,  104 => 28,  80 => 29,  63 => 25,  58 => 12,  40 => 16,  24 => 2,  94 => 27,  88 => 28,  48 => 9,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 87,  240 => 86,  236 => 84,  229 => 67,  225 => 71,  220 => 81,  218 => 74,  215 => 60,  212 => 64,  209 => 59,  200 => 57,  194 => 68,  179 => 50,  176 => 47,  173 => 48,  166 => 58,  162 => 46,  157 => 55,  155 => 55,  151 => 43,  148 => 52,  145 => 42,  139 => 52,  128 => 50,  114 => 31,  109 => 36,  87 => 31,  84 => 37,  79 => 36,  65 => 32,  34 => 5,  26 => 5,  125 => 44,  118 => 43,  110 => 33,  97 => 30,  92 => 41,  89 => 28,  85 => 24,  69 => 27,  28 => 2,  57 => 12,  50 => 20,  47 => 9,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 69,  189 => 53,  183 => 63,  180 => 50,  174 => 61,  170 => 59,  167 => 44,  158 => 56,  153 => 40,  150 => 43,  147 => 50,  144 => 42,  136 => 40,  133 => 39,  130 => 46,  124 => 36,  121 => 35,  113 => 35,  108 => 35,  105 => 43,  102 => 46,  99 => 30,  95 => 33,  91 => 33,  81 => 30,  70 => 31,  66 => 17,  62 => 26,  59 => 23,  56 => 23,  52 => 11,  49 => 19,  45 => 9,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
