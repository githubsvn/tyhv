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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lang key", array(), "SMAdminBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "langkey"), "html", null, true);
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
        if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") == 1)) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        return array (  271 => 100,  176 => 68,  208 => 69,  252 => 93,  233 => 88,  140 => 44,  193 => 62,  158 => 47,  384 => 138,  377 => 134,  372 => 133,  358 => 130,  329 => 121,  305 => 110,  285 => 102,  247 => 89,  240 => 85,  232 => 83,  224 => 81,  213 => 69,  174 => 52,  166 => 49,  142 => 54,  374 => 144,  366 => 132,  360 => 138,  354 => 137,  348 => 134,  336 => 128,  331 => 122,  319 => 120,  313 => 118,  307 => 116,  294 => 111,  259 => 95,  256 => 100,  228 => 82,  187 => 59,  181 => 55,  387 => 152,  381 => 148,  375 => 147,  369 => 144,  363 => 140,  357 => 138,  351 => 136,  349 => 135,  345 => 134,  328 => 126,  320 => 123,  316 => 122,  311 => 117,  308 => 111,  291 => 113,  288 => 109,  265 => 106,  237 => 90,  221 => 74,  197 => 61,  20 => 1,  333 => 123,  325 => 122,  322 => 124,  314 => 118,  304 => 114,  299 => 113,  290 => 106,  283 => 101,  280 => 103,  264 => 96,  251 => 90,  242 => 89,  236 => 89,  234 => 89,  169 => 62,  150 => 44,  397 => 153,  391 => 153,  385 => 148,  379 => 145,  361 => 137,  355 => 135,  350 => 128,  344 => 129,  338 => 127,  332 => 125,  326 => 123,  315 => 113,  309 => 115,  303 => 109,  297 => 108,  284 => 106,  260 => 105,  254 => 91,  246 => 95,  241 => 94,  239 => 95,  229 => 76,  226 => 87,  218 => 84,  210 => 76,  207 => 68,  202 => 75,  200 => 82,  414 => 161,  406 => 159,  400 => 155,  394 => 154,  388 => 151,  382 => 147,  376 => 145,  368 => 142,  353 => 135,  347 => 127,  341 => 125,  339 => 125,  335 => 124,  310 => 117,  306 => 118,  298 => 114,  296 => 113,  293 => 106,  281 => 108,  278 => 102,  272 => 101,  269 => 101,  266 => 104,  258 => 94,  255 => 101,  250 => 100,  248 => 101,  244 => 91,  238 => 96,  227 => 93,  219 => 93,  199 => 74,  195 => 73,  168 => 66,  146 => 55,  190 => 71,  182 => 73,  167 => 52,  161 => 50,  137 => 52,  97 => 33,  53 => 14,  40 => 16,  124 => 49,  117 => 49,  110 => 43,  90 => 37,  56 => 23,  69 => 31,  129 => 41,  87 => 33,  49 => 19,  134 => 51,  86 => 36,  179 => 67,  164 => 64,  148 => 56,  128 => 37,  113 => 57,  107 => 32,  77 => 30,  62 => 16,  23 => 2,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 160,  405 => 155,  401 => 154,  395 => 154,  392 => 153,  383 => 147,  378 => 110,  373 => 146,  370 => 143,  367 => 139,  364 => 141,  359 => 131,  356 => 104,  352 => 136,  346 => 82,  343 => 126,  340 => 129,  334 => 128,  330 => 124,  327 => 70,  324 => 117,  321 => 121,  318 => 119,  312 => 119,  302 => 114,  286 => 57,  279 => 106,  267 => 96,  261 => 94,  257 => 98,  253 => 94,  235 => 91,  231 => 24,  217 => 80,  209 => 69,  203 => 66,  192 => 72,  175 => 55,  173 => 67,  170 => 63,  156 => 59,  125 => 36,  99 => 39,  301 => 112,  295 => 59,  292 => 109,  289 => 104,  287 => 107,  282 => 107,  276 => 99,  273 => 98,  270 => 99,  268 => 107,  263 => 95,  249 => 98,  245 => 92,  230 => 88,  222 => 86,  220 => 90,  215 => 70,  211 => 79,  204 => 67,  198 => 63,  185 => 57,  183 => 70,  177 => 58,  160 => 60,  112 => 36,  82 => 27,  65 => 19,  38 => 6,  144 => 42,  141 => 53,  135 => 39,  126 => 46,  109 => 35,  103 => 40,  67 => 20,  61 => 17,  47 => 12,  91 => 34,  84 => 25,  94 => 27,  88 => 31,  59 => 29,  28 => 2,  225 => 75,  216 => 83,  212 => 88,  205 => 75,  201 => 74,  196 => 69,  194 => 72,  191 => 72,  189 => 70,  186 => 59,  180 => 69,  172 => 67,  159 => 59,  154 => 58,  147 => 55,  132 => 42,  127 => 47,  121 => 50,  118 => 37,  114 => 45,  104 => 30,  100 => 28,  78 => 25,  75 => 31,  71 => 30,  34 => 11,  105 => 35,  93 => 38,  79 => 32,  76 => 29,  72 => 22,  68 => 27,  58 => 26,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 27,  63 => 17,  46 => 9,  22 => 2,  163 => 61,  155 => 48,  152 => 47,  149 => 56,  145 => 54,  139 => 53,  131 => 51,  123 => 46,  120 => 47,  115 => 44,  106 => 31,  101 => 34,  96 => 42,  83 => 31,  80 => 37,  74 => 23,  66 => 31,  55 => 22,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 64,  171 => 63,  165 => 60,  162 => 63,  157 => 59,  153 => 57,  151 => 56,  143 => 45,  138 => 52,  136 => 49,  133 => 50,  130 => 48,  122 => 39,  119 => 45,  116 => 48,  111 => 43,  108 => 42,  102 => 36,  98 => 32,  95 => 33,  92 => 27,  89 => 28,  85 => 27,  81 => 40,  73 => 22,  64 => 26,  60 => 16,  57 => 16,  54 => 11,  51 => 13,  48 => 19,  45 => 8,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
