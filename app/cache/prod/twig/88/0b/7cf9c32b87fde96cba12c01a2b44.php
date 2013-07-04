<?php

/* SMAdminBundle:Language:show.html.twig */
class __TwigTemplate_880b7cf9c32b87fde96cba12c01a2b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Language show", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <td>Id</td>
            <td>";
        // line 9
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 13
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lang key", array(), "SMAdminBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 17
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "langkey"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Is default", array(), "SMAdminBundle"), "html", null, true);
        echo "</td>
            <td>
                ";
        // line 22
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if (($this->getAttribute($_entity_, "isdefault") == 1)) {
            // line 23
            echo "                    <input type=\"checkbox\" checked=\"checked\" disabled=\"true\"/>
                ";
        } else {
            // line 25
            echo "                    <input type=\"checkbox\" readonly=\"true\" disabled=\"true\"/>
                ";
        }
        // line 27
        echo "            </td>
        </tr>
        <tr>
            <td colspan=\"2\" width=\"100%\">
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
                &nbsp;
                <a href=\"";
        // line 33
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
            </td>
        </tr>
    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Language:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 48,  168 => 59,  247 => 75,  235 => 70,  213 => 59,  186 => 64,  423 => 134,  416 => 133,  383 => 127,  417 => 143,  412 => 142,  406 => 138,  394 => 134,  385 => 129,  380 => 128,  375 => 126,  369 => 122,  362 => 120,  346 => 113,  425 => 146,  408 => 138,  401 => 136,  397 => 135,  392 => 134,  387 => 132,  363 => 122,  330 => 113,  313 => 102,  201 => 57,  20 => 1,  356 => 140,  301 => 99,  295 => 95,  238 => 102,  294 => 124,  288 => 94,  404 => 131,  371 => 123,  350 => 119,  339 => 117,  304 => 99,  282 => 93,  257 => 84,  217 => 61,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 154,  441 => 148,  437 => 147,  432 => 138,  427 => 147,  414 => 138,  407 => 136,  403 => 135,  398 => 136,  388 => 128,  365 => 142,  360 => 121,  347 => 118,  336 => 112,  310 => 101,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 153,  433 => 148,  426 => 144,  419 => 142,  415 => 140,  410 => 132,  400 => 137,  393 => 132,  382 => 125,  372 => 125,  366 => 147,  359 => 121,  352 => 119,  272 => 92,  377 => 152,  370 => 124,  353 => 120,  342 => 134,  300 => 102,  207 => 71,  344 => 117,  321 => 106,  308 => 105,  289 => 95,  279 => 98,  242 => 89,  358 => 122,  354 => 143,  349 => 140,  343 => 117,  337 => 115,  335 => 110,  298 => 98,  293 => 105,  269 => 95,  264 => 109,  259 => 108,  219 => 74,  205 => 71,  160 => 56,  72 => 19,  175 => 82,  77 => 20,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 107,  307 => 103,  286 => 98,  275 => 96,  268 => 89,  263 => 95,  243 => 91,  190 => 66,  326 => 112,  305 => 100,  290 => 101,  285 => 94,  280 => 87,  261 => 90,  241 => 71,  237 => 69,  224 => 63,  142 => 41,  90 => 27,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 107,  297 => 101,  283 => 94,  267 => 118,  249 => 82,  244 => 86,  230 => 72,  223 => 63,  177 => 60,  116 => 43,  53 => 11,  44 => 17,  325 => 108,  316 => 95,  309 => 94,  292 => 96,  281 => 99,  276 => 91,  271 => 91,  265 => 86,  260 => 89,  256 => 89,  253 => 83,  214 => 61,  210 => 59,  206 => 58,  196 => 55,  78 => 23,  255 => 88,  251 => 88,  246 => 90,  232 => 82,  228 => 79,  254 => 95,  233 => 83,  231 => 76,  222 => 63,  208 => 72,  204 => 70,  191 => 53,  188 => 63,  185 => 63,  178 => 49,  149 => 53,  143 => 38,  132 => 43,  96 => 28,  169 => 47,  137 => 72,  129 => 37,  119 => 56,  154 => 54,  146 => 52,  141 => 51,  198 => 70,  181 => 49,  135 => 40,  127 => 47,  122 => 44,  86 => 27,  73 => 27,  55 => 22,  227 => 78,  221 => 61,  107 => 40,  67 => 29,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 152,  434 => 118,  430 => 116,  424 => 115,  421 => 144,  411 => 111,  405 => 138,  399 => 130,  395 => 127,  390 => 107,  386 => 131,  381 => 128,  378 => 126,  374 => 126,  367 => 124,  364 => 121,  361 => 141,  355 => 117,  351 => 117,  348 => 118,  345 => 69,  341 => 114,  338 => 111,  332 => 109,  322 => 110,  314 => 106,  287 => 100,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 76,  211 => 73,  195 => 55,  193 => 54,  187 => 52,  184 => 67,  182 => 62,  164 => 57,  161 => 56,  140 => 50,  126 => 45,  106 => 30,  103 => 32,  100 => 31,  93 => 42,  74 => 28,  68 => 26,  51 => 10,  333 => 100,  327 => 110,  324 => 111,  320 => 111,  317 => 104,  312 => 129,  306 => 86,  303 => 93,  299 => 106,  296 => 96,  291 => 104,  277 => 112,  273 => 90,  258 => 96,  248 => 94,  245 => 87,  239 => 80,  234 => 73,  226 => 108,  216 => 61,  202 => 97,  199 => 70,  192 => 54,  165 => 58,  156 => 44,  134 => 47,  131 => 49,  120 => 45,  115 => 36,  82 => 25,  76 => 19,  61 => 15,  54 => 24,  171 => 60,  163 => 46,  159 => 45,  152 => 54,  138 => 39,  123 => 36,  117 => 42,  111 => 33,  101 => 31,  98 => 29,  83 => 35,  75 => 22,  71 => 30,  64 => 26,  43 => 15,  36 => 12,  104 => 33,  80 => 29,  63 => 17,  58 => 12,  40 => 16,  24 => 2,  94 => 38,  88 => 28,  48 => 12,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 87,  240 => 86,  236 => 84,  229 => 67,  225 => 75,  220 => 81,  218 => 74,  215 => 60,  212 => 64,  209 => 72,  200 => 57,  194 => 69,  179 => 50,  176 => 64,  173 => 63,  166 => 58,  162 => 46,  157 => 55,  155 => 55,  151 => 43,  148 => 52,  145 => 42,  139 => 51,  128 => 50,  114 => 35,  109 => 34,  87 => 31,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 5,  125 => 44,  118 => 43,  110 => 34,  97 => 30,  92 => 31,  89 => 28,  85 => 24,  69 => 27,  28 => 2,  57 => 11,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 69,  189 => 68,  183 => 63,  180 => 66,  174 => 61,  170 => 59,  167 => 44,  158 => 56,  153 => 40,  150 => 43,  147 => 50,  144 => 42,  136 => 40,  133 => 39,  130 => 46,  124 => 36,  121 => 35,  113 => 42,  108 => 35,  105 => 33,  102 => 39,  99 => 33,  95 => 28,  91 => 37,  81 => 30,  70 => 20,  66 => 16,  62 => 26,  59 => 16,  56 => 11,  52 => 13,  49 => 19,  45 => 9,  41 => 9,  37 => 5,  33 => 4,  30 => 4,);
    }
}
