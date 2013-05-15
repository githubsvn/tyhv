<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_4e7a1cc8744130464f439c6626d01d93 extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "trace"), "type") . $this->getAttribute($this->getContext($context, "trace"), "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace"), "file")) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true)) && $this->getAttribute($this->getContext($context, "trace"), "line"))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "function")) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('code')->formatFile($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "'); switchIcons('icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_open', 'icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_close'); return false;\">
        <img class=\"toggle\" id=\"icon_";
            // line 15
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("visible") : ("hidden"));
            echo "\" />
        <img class=\"toggle\" id=\"icon_";
            // line 16
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("hidden") : ("visible"));
            echo "; margin-left: -18px\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, "prefix") . "_") . $this->getContext($context, "i")), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == $this->getContext($context, "i"))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($this->getContext($context, "trace"), "file"), $this->getAttribute($this->getContext($context, "trace"), "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  55 => 13,  44 => 10,  36 => 7,  25 => 4,  105 => 24,  98 => 22,  83 => 18,  72 => 14,  50 => 8,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  216 => 90,  201 => 83,  196 => 80,  189 => 77,  172 => 67,  163 => 63,  157 => 60,  147 => 55,  143 => 54,  138 => 51,  132 => 48,  130 => 47,  127 => 46,  118 => 44,  100 => 34,  95 => 31,  78 => 28,  75 => 27,  63 => 24,  58 => 9,  88 => 6,  59 => 22,  39 => 6,  21 => 2,  32 => 4,  1176 => 331,  1170 => 330,  1164 => 329,  1158 => 328,  1152 => 327,  1146 => 326,  1140 => 325,  1134 => 324,  1128 => 323,  1112 => 317,  1105 => 316,  1103 => 315,  1100 => 314,  1077 => 310,  1052 => 309,  1050 => 308,  1047 => 307,  1035 => 302,  1030 => 301,  1028 => 300,  1025 => 299,  1016 => 293,  1010 => 291,  1007 => 290,  1002 => 289,  1000 => 288,  997 => 287,  990 => 282,  983 => 280,  980 => 276,  976 => 275,  973 => 274,  970 => 273,  968 => 272,  965 => 271,  957 => 267,  955 => 266,  952 => 265,  945 => 260,  942 => 259,  934 => 254,  930 => 253,  926 => 252,  923 => 251,  921 => 250,  918 => 249,  910 => 245,  908 => 241,  906 => 240,  903 => 239,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  855 => 224,  853 => 223,  850 => 222,  842 => 216,  839 => 215,  837 => 214,  834 => 213,  826 => 209,  823 => 208,  821 => 207,  818 => 206,  810 => 202,  807 => 201,  805 => 200,  802 => 199,  794 => 195,  791 => 194,  789 => 193,  786 => 192,  778 => 188,  775 => 187,  773 => 186,  770 => 185,  762 => 181,  759 => 180,  757 => 179,  754 => 178,  746 => 174,  744 => 173,  741 => 172,  733 => 168,  730 => 167,  728 => 166,  725 => 165,  717 => 161,  714 => 160,  712 => 159,  710 => 158,  707 => 157,  700 => 152,  692 => 151,  687 => 150,  681 => 148,  678 => 147,  676 => 146,  673 => 145,  665 => 139,  663 => 138,  662 => 137,  661 => 136,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  644 => 130,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  609 => 117,  606 => 116,  604 => 115,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  523 => 93,  521 => 92,  516 => 91,  513 => 90,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  393 => 52,  387 => 50,  382 => 48,  379 => 47,  364 => 41,  350 => 35,  347 => 34,  342 => 32,  321 => 23,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  278 => 8,  269 => 5,  267 => 4,  264 => 3,  260 => 331,  258 => 330,  254 => 328,  250 => 326,  246 => 324,  236 => 314,  231 => 307,  228 => 306,  220 => 296,  218 => 287,  215 => 286,  208 => 265,  205 => 84,  200 => 259,  197 => 258,  195 => 249,  190 => 239,  187 => 238,  182 => 222,  179 => 221,  176 => 219,  174 => 213,  169 => 206,  166 => 205,  164 => 199,  161 => 198,  151 => 184,  149 => 178,  146 => 177,  144 => 172,  141 => 171,  136 => 50,  134 => 157,  131 => 156,  129 => 145,  126 => 144,  124 => 129,  121 => 45,  119 => 114,  114 => 43,  109 => 102,  106 => 101,  89 => 19,  84 => 19,  81 => 40,  64 => 3,  61 => 2,  41 => 9,  38 => 7,  34 => 11,  29 => 3,  26 => 6,  23 => 2,  19 => 1,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 57,  399 => 119,  394 => 116,  390 => 114,  384 => 49,  372 => 109,  362 => 107,  359 => 106,  356 => 37,  353 => 36,  348 => 103,  341 => 82,  335 => 80,  332 => 79,  329 => 26,  323 => 24,  319 => 69,  313 => 67,  307 => 65,  301 => 64,  288 => 57,  279 => 55,  275 => 53,  272 => 6,  265 => 50,  252 => 327,  248 => 325,  240 => 30,  226 => 299,  212 => 88,  209 => 11,  203 => 5,  192 => 248,  180 => 72,  178 => 71,  175 => 115,  173 => 102,  170 => 101,  165 => 98,  159 => 61,  156 => 191,  153 => 94,  139 => 165,  125 => 89,  122 => 88,  104 => 36,  101 => 86,  96 => 21,  93 => 20,  91 => 20,  79 => 17,  76 => 16,  74 => 16,  71 => 26,  68 => 12,  66 => 15,  51 => 12,  46 => 11,  37 => 5,  386 => 147,  381 => 112,  375 => 141,  369 => 43,  367 => 42,  363 => 137,  357 => 133,  351 => 131,  345 => 33,  343 => 128,  339 => 127,  334 => 27,  328 => 121,  322 => 119,  316 => 22,  314 => 21,  310 => 66,  305 => 113,  299 => 109,  293 => 59,  287 => 13,  285 => 104,  281 => 103,  276 => 101,  273 => 100,  271 => 99,  268 => 98,  262 => 49,  256 => 329,  253 => 93,  247 => 92,  244 => 323,  241 => 322,  238 => 320,  233 => 313,  230 => 23,  225 => 96,  223 => 298,  219 => 83,  213 => 271,  210 => 270,  202 => 262,  194 => 79,  191 => 78,  186 => 76,  184 => 236,  177 => 70,  171 => 212,  167 => 66,  162 => 64,  154 => 59,  150 => 58,  145 => 56,  137 => 51,  133 => 91,  128 => 48,  120 => 43,  116 => 113,  111 => 107,  103 => 35,  99 => 68,  94 => 39,  86 => 46,  82 => 71,  77 => 24,  69 => 13,  65 => 18,  60 => 23,  52 => 11,  48 => 19,  43 => 7,  35 => 7,  31 => 5,  28 => 2,);
    }
}
