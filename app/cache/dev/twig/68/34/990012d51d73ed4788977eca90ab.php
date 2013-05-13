<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6834990012d51d73ed4788977eca90ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 69,  174 => 67,  134 => 54,  260 => 235,  238 => 218,  223 => 79,  218 => 78,  193 => 72,  181 => 69,  208 => 69,  197 => 63,  179 => 55,  161 => 58,  148 => 44,  142 => 42,  124 => 37,  90 => 27,  195 => 61,  187 => 59,  164 => 63,  117 => 41,  166 => 50,  129 => 50,  110 => 42,  87 => 34,  20 => 1,  97 => 34,  350 => 133,  344 => 130,  338 => 126,  326 => 122,  324 => 121,  320 => 120,  315 => 118,  309 => 114,  303 => 112,  297 => 110,  291 => 108,  286 => 106,  280 => 102,  274 => 100,  266 => 97,  257 => 234,  254 => 93,  243 => 89,  237 => 87,  234 => 86,  228 => 85,  219 => 82,  214 => 81,  206 => 67,  200 => 76,  167 => 64,  150 => 44,  137 => 52,  77 => 18,  69 => 17,  23 => 3,  128 => 48,  113 => 34,  107 => 47,  62 => 25,  56 => 15,  53 => 38,  49 => 13,  86 => 40,  40 => 8,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 140,  362 => 138,  359 => 106,  356 => 134,  353 => 104,  348 => 132,  345 => 102,  341 => 82,  335 => 80,  332 => 124,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 236,  256 => 34,  252 => 92,  248 => 32,  244 => 31,  240 => 219,  226 => 22,  209 => 11,  203 => 67,  192 => 129,  175 => 66,  173 => 53,  170 => 62,  156 => 56,  125 => 48,  99 => 29,  301 => 64,  295 => 109,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 98,  263 => 80,  249 => 91,  245 => 77,  230 => 83,  222 => 83,  220 => 72,  215 => 70,  211 => 80,  204 => 71,  198 => 63,  185 => 68,  183 => 57,  177 => 67,  160 => 48,  112 => 33,  82 => 25,  65 => 16,  38 => 7,  144 => 54,  141 => 41,  135 => 47,  126 => 44,  109 => 38,  103 => 31,  67 => 23,  61 => 18,  47 => 30,  91 => 35,  84 => 33,  94 => 32,  88 => 22,  59 => 21,  28 => 3,  225 => 84,  216 => 90,  212 => 77,  205 => 84,  201 => 65,  196 => 73,  194 => 75,  191 => 70,  189 => 71,  186 => 125,  180 => 117,  172 => 52,  159 => 96,  154 => 59,  147 => 58,  132 => 38,  127 => 52,  121 => 36,  118 => 35,  114 => 37,  104 => 39,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  105 => 32,  93 => 28,  79 => 70,  76 => 35,  72 => 27,  68 => 26,  58 => 16,  24 => 2,  27 => 3,  21 => 2,  44 => 11,  31 => 6,  26 => 3,  25 => 4,  19 => 1,  70 => 24,  63 => 21,  46 => 12,  22 => 2,  163 => 63,  155 => 46,  152 => 45,  149 => 51,  145 => 56,  139 => 49,  131 => 42,  123 => 43,  120 => 50,  115 => 39,  106 => 29,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 25,  66 => 31,  55 => 15,  52 => 14,  50 => 15,  43 => 8,  41 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 6,  184 => 119,  178 => 54,  171 => 66,  165 => 50,  162 => 57,  157 => 56,  153 => 62,  151 => 54,  143 => 51,  138 => 55,  136 => 40,  133 => 46,  130 => 53,  122 => 51,  119 => 32,  116 => 47,  111 => 39,  108 => 41,  102 => 30,  98 => 28,  95 => 36,  92 => 27,  89 => 28,  85 => 37,  81 => 24,  73 => 22,  64 => 11,  60 => 28,  57 => 20,  54 => 19,  51 => 37,  48 => 17,  45 => 13,  42 => 12,  39 => 9,  36 => 7,  33 => 10,  30 => 3,);
    }
}
