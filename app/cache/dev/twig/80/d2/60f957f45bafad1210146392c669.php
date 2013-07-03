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
        return array (  344 => 127,  337 => 123,  318 => 119,  307 => 116,  299 => 114,  305 => 111,  291 => 111,  283 => 103,  271 => 96,  262 => 93,  250 => 87,  316 => 119,  312 => 118,  306 => 114,  300 => 113,  277 => 102,  254 => 88,  248 => 88,  242 => 86,  240 => 85,  236 => 88,  208 => 70,  188 => 71,  113 => 38,  56 => 23,  304 => 116,  297 => 109,  259 => 103,  244 => 95,  235 => 91,  228 => 81,  193 => 65,  90 => 37,  285 => 104,  281 => 102,  267 => 95,  251 => 100,  246 => 86,  234 => 80,  192 => 72,  298 => 112,  284 => 106,  272 => 100,  264 => 95,  255 => 102,  247 => 87,  238 => 81,  232 => 80,  218 => 75,  214 => 80,  206 => 71,  158 => 57,  146 => 57,  40 => 8,  286 => 105,  279 => 101,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 87,  231 => 82,  226 => 80,  210 => 72,  195 => 64,  187 => 64,  181 => 62,  167 => 67,  137 => 54,  124 => 46,  97 => 39,  69 => 19,  53 => 14,  229 => 78,  221 => 83,  209 => 79,  203 => 79,  197 => 74,  174 => 64,  166 => 59,  142 => 51,  117 => 44,  62 => 16,  227 => 85,  223 => 79,  219 => 82,  213 => 72,  207 => 78,  190 => 59,  182 => 56,  168 => 63,  150 => 55,  110 => 44,  129 => 47,  87 => 26,  49 => 16,  134 => 52,  86 => 25,  77 => 22,  164 => 66,  148 => 60,  128 => 46,  199 => 72,  179 => 71,  169 => 61,  161 => 63,  107 => 33,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 122,  329 => 68,  326 => 121,  320 => 120,  310 => 117,  303 => 115,  294 => 110,  290 => 108,  278 => 108,  275 => 102,  269 => 97,  265 => 99,  261 => 34,  257 => 97,  253 => 95,  243 => 90,  239 => 81,  217 => 77,  202 => 68,  200 => 74,  175 => 69,  173 => 62,  170 => 59,  156 => 58,  125 => 46,  99 => 42,  301 => 110,  295 => 113,  292 => 111,  289 => 110,  287 => 54,  282 => 104,  276 => 102,  273 => 85,  270 => 106,  268 => 100,  263 => 98,  249 => 93,  245 => 91,  230 => 75,  222 => 73,  220 => 76,  215 => 70,  211 => 79,  204 => 70,  198 => 63,  185 => 68,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 30,  38 => 6,  144 => 59,  141 => 54,  135 => 50,  126 => 50,  109 => 36,  103 => 36,  67 => 18,  61 => 15,  47 => 30,  91 => 39,  84 => 25,  94 => 38,  88 => 28,  59 => 5,  28 => 2,  225 => 76,  216 => 73,  212 => 88,  205 => 80,  201 => 69,  196 => 73,  194 => 62,  191 => 73,  189 => 65,  186 => 61,  180 => 67,  172 => 68,  159 => 55,  154 => 62,  147 => 56,  132 => 47,  127 => 47,  121 => 45,  118 => 46,  114 => 31,  104 => 41,  100 => 25,  78 => 23,  75 => 31,  71 => 19,  34 => 11,  105 => 35,  93 => 29,  79 => 36,  76 => 35,  72 => 34,  68 => 19,  58 => 28,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 17,  46 => 9,  22 => 2,  163 => 57,  155 => 58,  152 => 61,  149 => 58,  145 => 45,  139 => 55,  131 => 48,  123 => 43,  120 => 49,  115 => 39,  106 => 29,  101 => 34,  96 => 32,  83 => 25,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 61,  171 => 68,  165 => 60,  162 => 59,  157 => 60,  153 => 54,  151 => 57,  143 => 48,  138 => 53,  136 => 49,  133 => 51,  130 => 51,  122 => 48,  119 => 41,  116 => 48,  111 => 37,  108 => 36,  102 => 33,  98 => 32,  95 => 41,  92 => 29,  89 => 28,  85 => 41,  81 => 40,  73 => 35,  64 => 31,  60 => 16,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
