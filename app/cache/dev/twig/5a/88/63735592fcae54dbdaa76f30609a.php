<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_5a8863735592fcae54dbdaa76f30609a extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 236,  271 => 100,  176 => 68,  208 => 69,  252 => 93,  233 => 88,  140 => 52,  193 => 62,  158 => 47,  384 => 138,  377 => 134,  372 => 133,  358 => 130,  329 => 121,  305 => 110,  285 => 102,  247 => 89,  240 => 219,  232 => 83,  224 => 81,  213 => 69,  174 => 52,  166 => 49,  142 => 54,  374 => 144,  366 => 132,  360 => 138,  354 => 137,  348 => 134,  336 => 128,  331 => 122,  319 => 120,  313 => 118,  307 => 116,  294 => 111,  259 => 95,  256 => 100,  228 => 82,  187 => 59,  181 => 55,  387 => 152,  381 => 148,  375 => 147,  369 => 144,  363 => 140,  357 => 138,  351 => 136,  349 => 135,  345 => 134,  328 => 126,  320 => 123,  316 => 122,  311 => 117,  308 => 111,  291 => 113,  288 => 109,  265 => 106,  237 => 90,  221 => 85,  197 => 61,  20 => 1,  333 => 123,  325 => 122,  322 => 124,  314 => 118,  304 => 114,  299 => 113,  290 => 106,  283 => 101,  280 => 103,  264 => 96,  251 => 90,  242 => 89,  236 => 89,  234 => 89,  169 => 62,  150 => 44,  397 => 153,  391 => 153,  385 => 148,  379 => 145,  361 => 137,  355 => 135,  350 => 128,  344 => 129,  338 => 127,  332 => 125,  326 => 123,  315 => 113,  309 => 115,  303 => 109,  297 => 108,  284 => 106,  260 => 235,  254 => 91,  246 => 95,  241 => 94,  239 => 95,  229 => 87,  226 => 87,  218 => 84,  210 => 78,  207 => 66,  202 => 75,  200 => 82,  414 => 161,  406 => 159,  400 => 155,  394 => 154,  388 => 151,  382 => 147,  376 => 145,  368 => 142,  353 => 135,  347 => 127,  341 => 125,  339 => 125,  335 => 124,  310 => 117,  306 => 118,  298 => 114,  296 => 113,  293 => 106,  281 => 108,  278 => 102,  272 => 101,  269 => 101,  266 => 104,  258 => 94,  255 => 101,  250 => 100,  248 => 101,  244 => 91,  238 => 218,  227 => 93,  219 => 93,  199 => 63,  195 => 73,  168 => 50,  146 => 55,  190 => 71,  182 => 73,  167 => 50,  161 => 50,  137 => 51,  97 => 33,  53 => 38,  40 => 8,  124 => 49,  117 => 49,  110 => 42,  90 => 33,  56 => 15,  69 => 31,  129 => 38,  87 => 33,  49 => 17,  134 => 38,  86 => 32,  179 => 67,  164 => 64,  148 => 56,  128 => 37,  113 => 57,  107 => 32,  77 => 18,  62 => 25,  23 => 3,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 160,  405 => 155,  401 => 154,  395 => 154,  392 => 153,  383 => 147,  378 => 110,  373 => 146,  370 => 143,  367 => 139,  364 => 141,  359 => 131,  356 => 104,  352 => 136,  346 => 82,  343 => 126,  340 => 129,  334 => 128,  330 => 124,  327 => 70,  324 => 117,  321 => 121,  318 => 119,  312 => 119,  302 => 114,  286 => 57,  279 => 106,  267 => 96,  261 => 94,  257 => 234,  253 => 94,  235 => 91,  231 => 24,  217 => 83,  209 => 68,  203 => 65,  192 => 72,  175 => 65,  173 => 67,  170 => 63,  156 => 59,  125 => 36,  99 => 39,  301 => 112,  295 => 59,  292 => 109,  289 => 104,  287 => 107,  282 => 107,  276 => 248,  273 => 98,  270 => 99,  268 => 107,  263 => 95,  249 => 98,  245 => 92,  230 => 88,  222 => 86,  220 => 90,  215 => 82,  211 => 67,  204 => 67,  198 => 63,  185 => 57,  183 => 69,  177 => 58,  160 => 60,  112 => 33,  82 => 30,  65 => 19,  38 => 6,  144 => 42,  141 => 53,  135 => 39,  126 => 46,  109 => 35,  103 => 40,  67 => 21,  61 => 18,  47 => 12,  91 => 28,  84 => 27,  94 => 27,  88 => 31,  59 => 21,  28 => 3,  225 => 86,  216 => 83,  212 => 88,  205 => 67,  201 => 74,  196 => 69,  194 => 72,  191 => 71,  189 => 70,  186 => 59,  180 => 54,  172 => 67,  159 => 59,  154 => 45,  147 => 55,  132 => 42,  127 => 47,  121 => 50,  118 => 44,  114 => 43,  104 => 30,  100 => 28,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  105 => 31,  93 => 38,  79 => 32,  76 => 29,  72 => 21,  68 => 21,  58 => 22,  24 => 2,  27 => 4,  21 => 2,  44 => 11,  31 => 6,  26 => 3,  25 => 4,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 49,  155 => 46,  152 => 44,  149 => 43,  145 => 54,  139 => 53,  131 => 51,  123 => 36,  120 => 35,  115 => 34,  106 => 31,  101 => 33,  96 => 42,  83 => 24,  80 => 37,  74 => 25,  66 => 31,  55 => 15,  52 => 18,  50 => 15,  43 => 8,  41 => 12,  37 => 7,  35 => 8,  32 => 6,  29 => 6,  184 => 70,  178 => 64,  171 => 63,  165 => 60,  162 => 60,  157 => 46,  153 => 57,  151 => 56,  143 => 41,  138 => 40,  136 => 49,  133 => 50,  130 => 48,  122 => 45,  119 => 34,  116 => 48,  111 => 32,  108 => 42,  102 => 36,  98 => 32,  95 => 34,  92 => 27,  89 => 28,  85 => 27,  81 => 40,  73 => 22,  64 => 11,  60 => 28,  57 => 20,  54 => 19,  51 => 37,  48 => 17,  45 => 13,  42 => 12,  39 => 9,  36 => 7,  33 => 10,  30 => 5,);
    }
}
