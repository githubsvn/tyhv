<?php

/* SMAdminBundle:News:show.html.twig */
class __TwigTemplate_80d260f957f45bafad1210146392c669 extends Twig_Template
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
        echo "<h1>News</h1>

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
        <tr>
            <th>Image</th>
            <td>";
        // line 23
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "image"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 35
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 40
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 41
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
        return "SMAdminBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 123,  370 => 122,  353 => 119,  342 => 117,  300 => 102,  207 => 72,  344 => 111,  321 => 113,  308 => 96,  289 => 99,  279 => 97,  242 => 72,  358 => 119,  354 => 118,  349 => 117,  343 => 113,  337 => 116,  335 => 109,  298 => 93,  293 => 93,  269 => 84,  264 => 90,  259 => 77,  219 => 70,  205 => 62,  160 => 51,  72 => 34,  175 => 66,  77 => 35,  42 => 7,  23 => 3,  340 => 110,  331 => 109,  318 => 110,  307 => 108,  286 => 98,  275 => 95,  268 => 99,  263 => 95,  243 => 76,  190 => 69,  326 => 114,  305 => 97,  290 => 89,  285 => 88,  280 => 87,  261 => 78,  241 => 70,  237 => 69,  224 => 65,  142 => 52,  90 => 37,  334 => 109,  329 => 105,  323 => 104,  315 => 102,  311 => 98,  302 => 95,  297 => 94,  283 => 87,  267 => 91,  249 => 75,  244 => 74,  230 => 80,  223 => 71,  177 => 56,  116 => 43,  53 => 17,  44 => 9,  325 => 99,  316 => 95,  309 => 106,  292 => 100,  281 => 89,  276 => 88,  271 => 93,  265 => 86,  260 => 78,  256 => 80,  253 => 79,  214 => 69,  210 => 73,  206 => 76,  196 => 59,  78 => 35,  255 => 88,  251 => 75,  246 => 85,  232 => 73,  228 => 71,  254 => 91,  233 => 86,  231 => 72,  222 => 78,  208 => 68,  204 => 59,  191 => 59,  188 => 62,  185 => 58,  178 => 49,  149 => 42,  143 => 41,  132 => 42,  96 => 28,  169 => 63,  137 => 47,  129 => 40,  119 => 32,  154 => 55,  146 => 48,  141 => 40,  198 => 66,  181 => 68,  135 => 43,  127 => 49,  122 => 39,  86 => 25,  73 => 13,  55 => 13,  227 => 79,  221 => 80,  107 => 35,  67 => 17,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 127,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 121,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 110,  332 => 115,  322 => 104,  314 => 110,  287 => 89,  284 => 87,  278 => 86,  274 => 35,  270 => 34,  266 => 79,  262 => 32,  252 => 87,  211 => 73,  195 => 68,  193 => 63,  187 => 62,  184 => 61,  182 => 54,  164 => 57,  161 => 56,  140 => 47,  126 => 46,  106 => 30,  103 => 32,  100 => 29,  93 => 26,  74 => 18,  68 => 12,  51 => 19,  333 => 100,  327 => 96,  324 => 111,  320 => 94,  317 => 111,  312 => 101,  306 => 86,  303 => 95,  299 => 94,  296 => 106,  291 => 105,  277 => 79,  273 => 81,  258 => 75,  248 => 72,  245 => 73,  239 => 83,  234 => 69,  226 => 72,  216 => 74,  202 => 61,  199 => 70,  192 => 67,  165 => 62,  156 => 50,  134 => 50,  131 => 43,  120 => 38,  115 => 36,  82 => 36,  76 => 34,  61 => 15,  54 => 14,  171 => 65,  163 => 55,  159 => 58,  152 => 54,  138 => 51,  123 => 48,  117 => 44,  111 => 30,  101 => 34,  98 => 29,  83 => 23,  75 => 19,  71 => 30,  64 => 31,  43 => 15,  36 => 12,  104 => 42,  80 => 23,  63 => 30,  58 => 28,  40 => 8,  24 => 2,  94 => 25,  88 => 25,  48 => 10,  39 => 6,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 75,  240 => 87,  236 => 82,  229 => 68,  225 => 82,  220 => 5,  218 => 65,  215 => 74,  212 => 64,  209 => 63,  200 => 61,  194 => 60,  179 => 60,  176 => 59,  173 => 54,  166 => 57,  162 => 51,  157 => 60,  155 => 47,  151 => 54,  148 => 48,  145 => 47,  139 => 46,  128 => 44,  114 => 43,  109 => 33,  87 => 40,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 32,  97 => 29,  92 => 41,  89 => 38,  85 => 25,  69 => 17,  28 => 2,  57 => 12,  50 => 20,  47 => 9,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 71,  197 => 65,  189 => 64,  183 => 57,  180 => 67,  174 => 59,  170 => 58,  167 => 63,  158 => 46,  153 => 59,  150 => 49,  147 => 53,  144 => 49,  136 => 46,  133 => 45,  130 => 48,  124 => 39,  121 => 37,  113 => 35,  108 => 34,  105 => 31,  102 => 31,  99 => 41,  95 => 39,  91 => 27,  81 => 35,  70 => 30,  66 => 16,  62 => 16,  59 => 23,  56 => 14,  52 => 11,  49 => 19,  45 => 8,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}