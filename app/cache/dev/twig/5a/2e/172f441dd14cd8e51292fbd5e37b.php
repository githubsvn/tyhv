<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_5a2e172f441dd14cd8e51292fbd5e37b extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  176 => 68,  140 => 52,  384 => 138,  377 => 134,  350 => 128,  343 => 126,  224 => 81,  374 => 144,  370 => 143,  336 => 128,  313 => 118,  373 => 146,  357 => 138,  340 => 129,  334 => 128,  328 => 126,  20 => 1,  327 => 141,  317 => 136,  311 => 117,  345 => 134,  331 => 122,  323 => 140,  319 => 120,  308 => 111,  302 => 114,  288 => 109,  256 => 100,  359 => 131,  352 => 136,  333 => 123,  325 => 122,  322 => 124,  314 => 140,  280 => 103,  433 => 166,  425 => 164,  419 => 160,  411 => 158,  407 => 156,  401 => 152,  395 => 154,  389 => 148,  383 => 146,  366 => 132,  349 => 135,  321 => 121,  315 => 113,  309 => 134,  442 => 172,  438 => 171,  434 => 170,  428 => 166,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  396 => 153,  392 => 152,  387 => 152,  369 => 144,  363 => 140,  358 => 130,  353 => 135,  347 => 127,  341 => 152,  339 => 125,  330 => 124,  324 => 117,  296 => 134,  293 => 106,  266 => 104,  258 => 94,  344 => 129,  337 => 151,  318 => 119,  307 => 116,  299 => 113,  305 => 110,  291 => 113,  283 => 101,  271 => 100,  262 => 236,  250 => 100,  316 => 122,  312 => 119,  306 => 118,  300 => 135,  277 => 127,  254 => 91,  248 => 101,  242 => 89,  240 => 219,  236 => 89,  208 => 69,  188 => 97,  113 => 57,  56 => 15,  304 => 114,  297 => 108,  259 => 95,  244 => 91,  235 => 91,  228 => 82,  193 => 62,  90 => 33,  285 => 102,  281 => 122,  267 => 96,  251 => 90,  246 => 95,  234 => 89,  192 => 72,  298 => 114,  284 => 106,  272 => 101,  264 => 96,  255 => 101,  247 => 89,  238 => 218,  232 => 83,  218 => 84,  214 => 80,  206 => 107,  158 => 47,  146 => 55,  40 => 8,  286 => 99,  279 => 106,  274 => 94,  260 => 235,  252 => 93,  241 => 86,  237 => 90,  233 => 88,  231 => 82,  226 => 87,  210 => 78,  195 => 73,  187 => 59,  181 => 55,  167 => 50,  137 => 51,  124 => 49,  97 => 33,  69 => 31,  53 => 38,  229 => 87,  221 => 85,  209 => 68,  203 => 65,  197 => 61,  174 => 52,  166 => 49,  142 => 54,  117 => 49,  62 => 25,  227 => 74,  223 => 73,  219 => 93,  213 => 69,  207 => 66,  190 => 71,  182 => 56,  168 => 50,  150 => 44,  110 => 42,  129 => 38,  87 => 33,  49 => 17,  134 => 38,  86 => 32,  77 => 18,  164 => 64,  148 => 56,  128 => 37,  199 => 63,  179 => 67,  169 => 62,  161 => 50,  107 => 32,  23 => 3,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 165,  421 => 122,  418 => 121,  413 => 159,  409 => 116,  403 => 115,  400 => 114,  391 => 153,  386 => 110,  381 => 148,  378 => 144,  375 => 147,  372 => 133,  367 => 141,  364 => 104,  360 => 138,  354 => 137,  351 => 136,  348 => 134,  342 => 72,  338 => 127,  335 => 124,  332 => 125,  329 => 121,  326 => 123,  320 => 123,  310 => 117,  303 => 109,  294 => 111,  290 => 106,  278 => 102,  275 => 102,  269 => 101,  265 => 106,  261 => 94,  257 => 234,  253 => 94,  243 => 90,  239 => 95,  217 => 83,  202 => 75,  200 => 82,  175 => 65,  173 => 67,  170 => 63,  156 => 59,  125 => 36,  99 => 39,  301 => 112,  295 => 113,  292 => 109,  289 => 104,  287 => 124,  282 => 107,  276 => 248,  273 => 98,  270 => 99,  268 => 107,  263 => 95,  249 => 98,  245 => 92,  230 => 88,  222 => 86,  220 => 90,  215 => 82,  211 => 67,  204 => 67,  198 => 63,  185 => 57,  183 => 69,  177 => 58,  160 => 60,  112 => 33,  82 => 30,  65 => 19,  38 => 6,  144 => 42,  141 => 53,  135 => 39,  126 => 46,  109 => 35,  103 => 40,  67 => 21,  61 => 18,  47 => 12,  91 => 28,  84 => 27,  94 => 27,  88 => 17,  59 => 21,  28 => 3,  225 => 86,  216 => 83,  212 => 88,  205 => 67,  201 => 74,  196 => 69,  194 => 72,  191 => 71,  189 => 70,  186 => 59,  180 => 54,  172 => 67,  159 => 59,  154 => 45,  147 => 55,  132 => 42,  127 => 47,  121 => 50,  118 => 44,  114 => 43,  104 => 30,  100 => 28,  78 => 26,  75 => 24,  71 => 23,  34 => 8,  105 => 31,  93 => 38,  79 => 32,  76 => 29,  72 => 21,  68 => 21,  58 => 9,  24 => 2,  27 => 4,  21 => 2,  44 => 11,  31 => 6,  26 => 3,  25 => 4,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 49,  155 => 46,  152 => 44,  149 => 43,  145 => 54,  139 => 53,  131 => 51,  123 => 36,  120 => 35,  115 => 34,  106 => 31,  101 => 33,  96 => 42,  83 => 24,  80 => 37,  74 => 25,  66 => 31,  55 => 15,  52 => 18,  50 => 15,  43 => 8,  41 => 12,  37 => 7,  35 => 8,  32 => 6,  29 => 6,  184 => 70,  178 => 64,  171 => 63,  165 => 50,  162 => 60,  157 => 46,  153 => 57,  151 => 56,  143 => 41,  138 => 40,  136 => 42,  133 => 50,  130 => 48,  122 => 45,  119 => 34,  116 => 35,  111 => 32,  108 => 42,  102 => 36,  98 => 32,  95 => 34,  92 => 27,  89 => 28,  85 => 16,  81 => 14,  73 => 22,  64 => 11,  60 => 28,  57 => 20,  54 => 19,  51 => 37,  48 => 17,  45 => 13,  42 => 12,  39 => 9,  36 => 7,  33 => 10,  30 => 5,);
    }
}