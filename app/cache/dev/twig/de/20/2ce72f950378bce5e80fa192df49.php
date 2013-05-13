<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_de202ce72f950378bce5e80fa192df49 extends Twig_Template
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
        return array (  260 => 235,  238 => 218,  223 => 79,  218 => 78,  193 => 72,  181 => 69,  208 => 69,  197 => 63,  179 => 55,  161 => 58,  148 => 44,  142 => 42,  124 => 37,  90 => 27,  195 => 61,  187 => 59,  164 => 49,  117 => 41,  166 => 50,  129 => 50,  110 => 33,  87 => 31,  20 => 1,  97 => 34,  350 => 133,  344 => 130,  338 => 126,  326 => 122,  324 => 121,  320 => 120,  315 => 118,  309 => 114,  303 => 112,  297 => 110,  291 => 108,  286 => 106,  280 => 102,  274 => 100,  266 => 97,  257 => 234,  254 => 93,  243 => 89,  237 => 87,  234 => 86,  228 => 85,  219 => 82,  214 => 81,  206 => 67,  200 => 76,  167 => 51,  150 => 44,  137 => 52,  77 => 18,  69 => 17,  23 => 3,  128 => 48,  113 => 34,  107 => 47,  62 => 25,  56 => 15,  53 => 38,  49 => 17,  86 => 40,  40 => 8,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 140,  362 => 138,  359 => 106,  356 => 134,  353 => 104,  348 => 132,  345 => 102,  341 => 82,  335 => 80,  332 => 124,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 236,  256 => 34,  252 => 92,  248 => 32,  244 => 31,  240 => 219,  226 => 22,  209 => 11,  203 => 67,  192 => 129,  175 => 66,  173 => 53,  170 => 62,  156 => 56,  125 => 48,  99 => 29,  301 => 64,  295 => 109,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 248,  273 => 85,  270 => 84,  268 => 98,  263 => 80,  249 => 91,  245 => 77,  230 => 83,  222 => 83,  220 => 72,  215 => 70,  211 => 80,  204 => 75,  198 => 63,  185 => 70,  183 => 57,  177 => 67,  160 => 48,  112 => 33,  82 => 25,  65 => 16,  38 => 6,  144 => 54,  141 => 41,  135 => 47,  126 => 44,  109 => 38,  103 => 31,  67 => 21,  61 => 18,  47 => 30,  91 => 28,  84 => 27,  94 => 32,  88 => 22,  59 => 21,  28 => 3,  225 => 84,  216 => 90,  212 => 77,  205 => 84,  201 => 65,  196 => 73,  194 => 75,  191 => 62,  189 => 71,  186 => 125,  180 => 117,  172 => 52,  159 => 96,  154 => 59,  147 => 53,  132 => 38,  127 => 38,  121 => 36,  118 => 35,  114 => 37,  104 => 36,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  105 => 32,  93 => 28,  79 => 70,  76 => 35,  72 => 27,  68 => 26,  58 => 22,  24 => 2,  27 => 4,  21 => 2,  44 => 11,  31 => 6,  26 => 3,  25 => 4,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 63,  155 => 46,  152 => 45,  149 => 51,  145 => 56,  139 => 49,  131 => 42,  123 => 43,  120 => 35,  115 => 39,  106 => 29,  101 => 33,  96 => 35,  83 => 27,  80 => 19,  74 => 25,  66 => 31,  55 => 15,  52 => 18,  50 => 15,  43 => 8,  41 => 12,  37 => 7,  35 => 8,  32 => 6,  29 => 6,  184 => 119,  178 => 54,  171 => 60,  165 => 50,  162 => 57,  157 => 56,  153 => 55,  151 => 54,  143 => 51,  138 => 51,  136 => 40,  133 => 46,  130 => 47,  122 => 88,  119 => 32,  116 => 47,  111 => 39,  108 => 37,  102 => 30,  98 => 28,  95 => 34,  92 => 27,  89 => 28,  85 => 37,  81 => 24,  73 => 22,  64 => 11,  60 => 28,  57 => 20,  54 => 19,  51 => 37,  48 => 17,  45 => 13,  42 => 12,  39 => 9,  36 => 7,  33 => 10,  30 => 5,);
    }
}
