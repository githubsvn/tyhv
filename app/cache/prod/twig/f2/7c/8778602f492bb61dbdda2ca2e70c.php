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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Charter_capital</th>
            <td>";
        // line 11
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "chartercapital"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>";
        // line 15
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "phone"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fax</th>
            <td>";
        // line 19
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "fax"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mst</th>
            <td>";
        // line 23
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "mst"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 27
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 31
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "status"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>";
        // line 35
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>";
        // line 39
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "updatedat"), "Y-m-d H:i:s"), "html", null, true);
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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 57
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
        return "SMAdminBundle:Company:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 131,  371 => 123,  350 => 119,  339 => 117,  304 => 102,  282 => 94,  257 => 87,  217 => 74,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 150,  441 => 148,  437 => 147,  432 => 146,  427 => 144,  414 => 138,  407 => 136,  403 => 135,  398 => 134,  388 => 126,  365 => 123,  360 => 121,  347 => 115,  336 => 112,  310 => 104,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 152,  433 => 146,  426 => 144,  419 => 142,  415 => 141,  410 => 140,  400 => 135,  393 => 132,  382 => 125,  372 => 127,  366 => 123,  359 => 121,  352 => 119,  272 => 95,  377 => 129,  370 => 124,  353 => 119,  342 => 117,  300 => 102,  207 => 74,  344 => 118,  321 => 113,  308 => 96,  289 => 97,  279 => 97,  242 => 72,  358 => 119,  354 => 117,  349 => 117,  343 => 117,  337 => 116,  335 => 115,  298 => 104,  293 => 99,  269 => 84,  264 => 89,  259 => 77,  219 => 82,  205 => 62,  160 => 55,  72 => 34,  175 => 66,  77 => 35,  42 => 7,  23 => 3,  340 => 113,  331 => 111,  318 => 106,  307 => 103,  286 => 98,  275 => 96,  268 => 99,  263 => 95,  243 => 91,  190 => 69,  326 => 109,  305 => 106,  290 => 99,  285 => 95,  280 => 87,  261 => 78,  241 => 87,  237 => 69,  224 => 65,  142 => 52,  90 => 26,  334 => 109,  329 => 112,  323 => 108,  315 => 108,  311 => 107,  302 => 105,  297 => 101,  283 => 87,  267 => 91,  249 => 75,  244 => 74,  230 => 80,  223 => 71,  177 => 56,  116 => 43,  53 => 17,  44 => 9,  325 => 99,  316 => 95,  309 => 106,  292 => 100,  281 => 97,  276 => 99,  271 => 93,  265 => 86,  260 => 91,  256 => 80,  253 => 93,  214 => 69,  210 => 78,  206 => 76,  196 => 59,  78 => 35,  255 => 88,  251 => 89,  246 => 85,  232 => 73,  228 => 71,  254 => 86,  233 => 78,  231 => 85,  222 => 78,  208 => 68,  204 => 59,  191 => 59,  188 => 62,  185 => 58,  178 => 63,  149 => 42,  143 => 41,  132 => 43,  96 => 28,  169 => 58,  137 => 47,  129 => 40,  119 => 56,  154 => 55,  146 => 50,  141 => 48,  198 => 66,  181 => 68,  135 => 43,  127 => 49,  122 => 40,  86 => 25,  73 => 13,  55 => 13,  227 => 84,  221 => 75,  107 => 35,  67 => 27,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 150,  434 => 118,  430 => 116,  424 => 115,  421 => 140,  411 => 111,  405 => 138,  399 => 109,  395 => 127,  390 => 107,  386 => 131,  381 => 127,  378 => 104,  374 => 125,  367 => 82,  364 => 121,  361 => 80,  355 => 120,  351 => 71,  348 => 118,  345 => 69,  341 => 68,  338 => 115,  332 => 114,  322 => 110,  314 => 110,  287 => 102,  284 => 101,  278 => 100,  274 => 35,  270 => 91,  266 => 94,  262 => 32,  252 => 87,  211 => 73,  195 => 68,  193 => 63,  187 => 62,  184 => 61,  182 => 54,  164 => 57,  161 => 56,  140 => 47,  126 => 46,  106 => 30,  103 => 32,  100 => 29,  93 => 26,  74 => 18,  68 => 12,  51 => 19,  333 => 100,  327 => 110,  324 => 111,  320 => 107,  317 => 106,  312 => 101,  306 => 86,  303 => 102,  299 => 101,  296 => 106,  291 => 105,  277 => 79,  273 => 92,  258 => 75,  248 => 84,  245 => 83,  239 => 90,  234 => 69,  226 => 72,  216 => 74,  202 => 73,  199 => 70,  192 => 67,  165 => 57,  156 => 50,  134 => 50,  131 => 43,  120 => 38,  115 => 36,  82 => 36,  76 => 19,  61 => 15,  54 => 14,  171 => 65,  163 => 55,  159 => 55,  152 => 51,  138 => 51,  123 => 48,  117 => 44,  111 => 30,  101 => 34,  98 => 29,  83 => 35,  75 => 31,  71 => 18,  64 => 31,  43 => 15,  36 => 12,  104 => 42,  80 => 23,  63 => 30,  58 => 28,  40 => 8,  24 => 2,  94 => 27,  88 => 25,  48 => 10,  39 => 6,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 75,  240 => 82,  236 => 82,  229 => 77,  225 => 76,  220 => 81,  218 => 65,  215 => 80,  212 => 64,  209 => 63,  200 => 73,  194 => 60,  179 => 60,  176 => 59,  173 => 54,  166 => 57,  162 => 51,  157 => 60,  155 => 47,  151 => 54,  148 => 48,  145 => 47,  139 => 46,  128 => 42,  114 => 35,  109 => 34,  87 => 40,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 51,  97 => 29,  92 => 41,  89 => 38,  85 => 24,  69 => 17,  28 => 2,  57 => 11,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 71,  197 => 71,  189 => 66,  183 => 65,  180 => 67,  174 => 59,  170 => 58,  167 => 63,  158 => 46,  153 => 59,  150 => 49,  147 => 53,  144 => 49,  136 => 46,  133 => 43,  130 => 48,  124 => 57,  121 => 37,  113 => 35,  108 => 34,  105 => 31,  102 => 46,  99 => 41,  95 => 39,  91 => 39,  81 => 35,  70 => 18,  66 => 16,  62 => 16,  59 => 23,  56 => 11,  52 => 10,  49 => 19,  45 => 8,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
