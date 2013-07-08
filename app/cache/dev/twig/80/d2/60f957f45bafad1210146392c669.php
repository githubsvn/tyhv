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
        <tr>
            <th>Image</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "image"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 41
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
        return "SMAdminBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 127,  339 => 126,  331 => 124,  323 => 122,  320 => 121,  288 => 107,  266 => 100,  291 => 105,  283 => 103,  271 => 96,  262 => 98,  239 => 81,  208 => 70,  316 => 120,  312 => 119,  308 => 118,  296 => 112,  265 => 96,  261 => 95,  256 => 95,  250 => 87,  236 => 84,  224 => 80,  176 => 63,  113 => 43,  202 => 68,  56 => 23,  304 => 116,  297 => 111,  259 => 103,  244 => 87,  228 => 89,  193 => 74,  90 => 37,  285 => 104,  281 => 105,  275 => 98,  269 => 97,  267 => 95,  251 => 100,  246 => 92,  234 => 88,  192 => 70,  298 => 110,  294 => 111,  278 => 104,  264 => 95,  255 => 102,  247 => 87,  243 => 86,  238 => 85,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 53,  40 => 8,  286 => 110,  279 => 101,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 79,  231 => 82,  210 => 72,  195 => 71,  187 => 64,  181 => 62,  167 => 67,  137 => 53,  124 => 46,  97 => 39,  69 => 19,  53 => 14,  229 => 78,  221 => 75,  209 => 78,  203 => 79,  197 => 75,  174 => 65,  166 => 59,  142 => 51,  117 => 46,  62 => 16,  227 => 85,  223 => 84,  219 => 78,  213 => 72,  207 => 74,  190 => 59,  182 => 56,  168 => 67,  150 => 53,  110 => 40,  129 => 47,  87 => 26,  49 => 16,  134 => 49,  86 => 38,  77 => 22,  164 => 62,  148 => 56,  128 => 46,  199 => 69,  179 => 71,  169 => 61,  161 => 61,  107 => 40,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 132,  353 => 71,  350 => 128,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 111,  302 => 115,  293 => 52,  290 => 109,  284 => 104,  280 => 35,  272 => 100,  258 => 96,  254 => 88,  240 => 90,  235 => 91,  232 => 87,  226 => 78,  217 => 86,  200 => 66,  175 => 69,  173 => 60,  170 => 59,  156 => 63,  125 => 49,  99 => 35,  301 => 110,  295 => 96,  292 => 111,  289 => 104,  287 => 93,  282 => 104,  276 => 103,  273 => 101,  270 => 102,  268 => 93,  263 => 104,  249 => 93,  245 => 85,  230 => 75,  222 => 79,  220 => 83,  215 => 70,  211 => 71,  204 => 73,  198 => 72,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 30,  38 => 6,  144 => 59,  141 => 54,  135 => 54,  126 => 47,  109 => 36,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 29,  84 => 25,  94 => 38,  88 => 28,  59 => 5,  28 => 2,  225 => 76,  216 => 82,  212 => 88,  205 => 77,  201 => 76,  196 => 66,  194 => 62,  191 => 73,  189 => 69,  186 => 61,  180 => 64,  172 => 62,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 51,  121 => 45,  118 => 46,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 11,  105 => 35,  93 => 29,  79 => 36,  76 => 23,  72 => 20,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 32,  63 => 17,  46 => 9,  22 => 2,  163 => 60,  155 => 58,  152 => 61,  149 => 58,  145 => 55,  139 => 43,  131 => 48,  123 => 50,  120 => 37,  115 => 39,  106 => 44,  101 => 34,  96 => 32,  83 => 37,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 63,  178 => 61,  171 => 68,  165 => 58,  162 => 54,  157 => 57,  153 => 54,  151 => 57,  143 => 48,  138 => 50,  136 => 49,  133 => 52,  130 => 52,  122 => 48,  119 => 41,  116 => 45,  111 => 37,  108 => 36,  102 => 43,  98 => 41,  95 => 31,  92 => 40,  89 => 28,  85 => 41,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
