<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_a0c3e1361f08d2792245dea9826ccea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ($this->getContext($context, "image_path")) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ($this->getContext($context, "link_url")) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (($this->getContext($context, "link_filter")) ? ($this->env->getExtension('liip_imagine')->filter($this->getContext($context, "link_url"), $this->getContext($context, "link_filter"))) : ($this->getContext($context, "link_url"))), "html", null, true);
                echo "\" ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "link_attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getContext($context, "image_path"), $this->getContext($context, "image_filter")), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "image_attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ($this->getContext($context, "link_url")) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  384 => 138,  377 => 134,  343 => 126,  329 => 121,  374 => 144,  370 => 143,  348 => 134,  336 => 128,  313 => 118,  307 => 116,  391 => 153,  373 => 146,  351 => 136,  340 => 129,  334 => 128,  328 => 126,  20 => 1,  140 => 52,  327 => 141,  317 => 136,  311 => 117,  337 => 151,  319 => 120,  300 => 135,  277 => 127,  253 => 90,  188 => 97,  359 => 131,  352 => 136,  333 => 123,  322 => 124,  314 => 140,  299 => 113,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 154,  389 => 148,  383 => 146,  378 => 144,  372 => 133,  360 => 138,  354 => 137,  349 => 135,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 113,  303 => 109,  257 => 91,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 148,  367 => 141,  358 => 130,  330 => 124,  324 => 117,  310 => 117,  306 => 118,  248 => 101,  345 => 134,  339 => 125,  331 => 122,  323 => 140,  320 => 123,  288 => 109,  266 => 104,  291 => 113,  283 => 101,  271 => 118,  262 => 115,  239 => 95,  208 => 70,  316 => 122,  312 => 119,  308 => 111,  296 => 134,  265 => 106,  261 => 94,  256 => 100,  250 => 100,  236 => 89,  224 => 81,  176 => 68,  113 => 57,  202 => 70,  56 => 11,  304 => 114,  297 => 108,  259 => 93,  244 => 91,  228 => 82,  193 => 62,  90 => 33,  285 => 102,  281 => 122,  275 => 98,  269 => 101,  267 => 96,  251 => 90,  246 => 95,  234 => 114,  192 => 63,  298 => 103,  294 => 111,  278 => 102,  264 => 102,  255 => 101,  247 => 89,  243 => 86,  238 => 108,  218 => 74,  214 => 74,  206 => 70,  158 => 47,  146 => 79,  40 => 12,  286 => 99,  279 => 95,  274 => 94,  260 => 91,  252 => 93,  241 => 86,  237 => 85,  233 => 88,  231 => 82,  210 => 78,  195 => 67,  187 => 59,  181 => 55,  167 => 50,  137 => 51,  124 => 49,  97 => 33,  69 => 16,  53 => 11,  229 => 87,  221 => 85,  209 => 68,  203 => 65,  197 => 61,  174 => 52,  166 => 49,  142 => 54,  117 => 35,  62 => 16,  227 => 74,  223 => 73,  219 => 72,  213 => 69,  207 => 66,  190 => 59,  182 => 56,  168 => 50,  150 => 44,  110 => 42,  129 => 38,  87 => 38,  49 => 19,  134 => 38,  86 => 32,  77 => 12,  164 => 64,  148 => 45,  128 => 37,  199 => 63,  179 => 67,  169 => 62,  161 => 61,  107 => 32,  23 => 3,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 152,  382 => 105,  379 => 104,  375 => 147,  369 => 144,  366 => 132,  363 => 140,  357 => 138,  353 => 135,  350 => 128,  347 => 127,  344 => 129,  341 => 152,  335 => 124,  325 => 122,  318 => 119,  309 => 134,  305 => 110,  302 => 114,  293 => 106,  290 => 106,  284 => 106,  280 => 97,  272 => 95,  258 => 94,  254 => 91,  240 => 85,  235 => 91,  232 => 83,  226 => 78,  217 => 83,  200 => 82,  175 => 65,  173 => 53,  170 => 55,  156 => 49,  125 => 36,  99 => 39,  301 => 112,  295 => 96,  292 => 109,  289 => 104,  287 => 124,  282 => 107,  276 => 99,  273 => 98,  270 => 99,  268 => 93,  263 => 95,  249 => 88,  245 => 87,  230 => 106,  222 => 82,  220 => 90,  215 => 82,  211 => 67,  204 => 73,  198 => 66,  185 => 57,  183 => 69,  177 => 58,  160 => 49,  112 => 33,  82 => 30,  65 => 19,  38 => 6,  144 => 42,  141 => 43,  135 => 39,  126 => 46,  109 => 56,  103 => 40,  67 => 26,  61 => 17,  47 => 12,  91 => 26,  84 => 25,  94 => 27,  88 => 17,  59 => 13,  28 => 2,  225 => 86,  216 => 73,  212 => 88,  205 => 67,  201 => 74,  196 => 61,  194 => 72,  191 => 71,  189 => 70,  186 => 94,  180 => 54,  172 => 67,  159 => 59,  154 => 45,  147 => 55,  132 => 68,  127 => 39,  121 => 36,  118 => 44,  114 => 43,  104 => 30,  100 => 28,  78 => 37,  75 => 11,  71 => 30,  34 => 11,  105 => 31,  93 => 38,  79 => 32,  76 => 29,  72 => 21,  68 => 21,  58 => 9,  24 => 1,  27 => 5,  21 => 2,  44 => 18,  31 => 3,  26 => 2,  25 => 4,  19 => 1,  70 => 28,  63 => 25,  46 => 10,  22 => 2,  163 => 49,  155 => 46,  152 => 44,  149 => 43,  145 => 54,  139 => 53,  131 => 51,  123 => 36,  120 => 35,  115 => 34,  106 => 31,  101 => 35,  96 => 42,  83 => 24,  80 => 37,  74 => 36,  66 => 31,  55 => 8,  52 => 23,  50 => 10,  43 => 8,  41 => 15,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 57,  178 => 59,  171 => 63,  165 => 50,  162 => 60,  157 => 46,  153 => 57,  151 => 46,  143 => 41,  138 => 40,  136 => 42,  133 => 50,  130 => 40,  122 => 45,  119 => 34,  116 => 35,  111 => 32,  108 => 42,  102 => 43,  98 => 41,  95 => 28,  92 => 27,  89 => 28,  85 => 16,  81 => 14,  73 => 22,  64 => 29,  60 => 28,  57 => 16,  54 => 11,  51 => 12,  48 => 17,  45 => 15,  42 => 9,  39 => 14,  36 => 13,  33 => 4,  30 => 5,);
    }
}
