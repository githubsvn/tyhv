<?php

/* SMAdminBundle:Group:edit.html.twig */
class __TwigTemplate_de6b8c139f9c5f6aafadf5863bfcfac6 extends Twig_Template
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
        echo "<h1>Group edit</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'widget');
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 18
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
        return "SMAdminBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 116,  297 => 112,  259 => 103,  244 => 95,  228 => 89,  193 => 76,  90 => 38,  285 => 103,  281 => 102,  275 => 98,  269 => 97,  267 => 105,  251 => 100,  246 => 86,  234 => 80,  192 => 63,  298 => 110,  294 => 109,  278 => 108,  264 => 95,  255 => 102,  247 => 87,  243 => 86,  238 => 81,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 53,  40 => 12,  286 => 110,  279 => 95,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  210 => 72,  195 => 64,  187 => 74,  181 => 72,  167 => 67,  137 => 47,  124 => 47,  97 => 27,  69 => 16,  53 => 55,  229 => 78,  221 => 74,  209 => 82,  203 => 79,  197 => 65,  174 => 69,  166 => 59,  142 => 44,  117 => 45,  62 => 16,  227 => 74,  223 => 87,  219 => 72,  213 => 84,  207 => 71,  190 => 59,  182 => 56,  168 => 56,  150 => 45,  110 => 40,  129 => 50,  87 => 28,  49 => 11,  134 => 46,  86 => 25,  77 => 24,  164 => 60,  148 => 60,  128 => 35,  199 => 69,  179 => 71,  169 => 52,  161 => 63,  107 => 33,  23 => 3,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 108,  284 => 104,  280 => 35,  272 => 100,  258 => 25,  254 => 24,  240 => 13,  235 => 91,  232 => 80,  226 => 78,  217 => 86,  200 => 66,  175 => 65,  173 => 53,  170 => 55,  156 => 62,  125 => 49,  99 => 35,  301 => 100,  295 => 96,  292 => 111,  289 => 104,  287 => 93,  282 => 90,  276 => 102,  273 => 85,  270 => 106,  268 => 93,  263 => 104,  249 => 99,  245 => 87,  230 => 75,  222 => 73,  220 => 76,  215 => 70,  211 => 70,  204 => 70,  198 => 63,  185 => 62,  183 => 57,  177 => 58,  160 => 63,  112 => 38,  82 => 27,  65 => 30,  38 => 6,  144 => 59,  141 => 43,  135 => 50,  126 => 44,  109 => 43,  103 => 36,  67 => 18,  61 => 17,  47 => 30,  91 => 29,  84 => 37,  94 => 40,  88 => 22,  59 => 5,  28 => 2,  225 => 88,  216 => 90,  212 => 88,  205 => 80,  201 => 69,  196 => 77,  194 => 62,  191 => 65,  189 => 65,  186 => 61,  180 => 59,  172 => 67,  159 => 50,  154 => 52,  147 => 50,  132 => 46,  127 => 48,  121 => 36,  118 => 42,  114 => 31,  104 => 89,  100 => 25,  78 => 35,  75 => 34,  71 => 33,  34 => 11,  105 => 37,  93 => 29,  79 => 24,  76 => 67,  72 => 14,  68 => 12,  58 => 31,  24 => 1,  27 => 7,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 30,  46 => 9,  22 => 2,  163 => 58,  155 => 57,  152 => 61,  149 => 51,  145 => 45,  139 => 43,  131 => 40,  123 => 39,  120 => 37,  115 => 47,  106 => 29,  101 => 28,  96 => 24,  83 => 27,  80 => 24,  74 => 66,  66 => 17,  55 => 23,  52 => 18,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 68,  165 => 55,  162 => 54,  157 => 53,  153 => 46,  151 => 46,  143 => 48,  138 => 42,  136 => 42,  133 => 51,  130 => 40,  122 => 38,  119 => 48,  116 => 35,  111 => 30,  108 => 39,  102 => 40,  98 => 41,  95 => 30,  92 => 23,  89 => 28,  85 => 41,  81 => 40,  73 => 35,  64 => 17,  60 => 23,  57 => 27,  54 => 11,  51 => 11,  48 => 17,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
