<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_a445d85383e935cb10928b19db2c3414 extends Twig_Template
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
        if ($this->getContext($context, "include_jquery")) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        }
        // line 4
        if ($this->getContext($context, "tinymce_jquery")) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/vendor/tiny_mce/jquery.tinymce.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/init.jquery.js"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/vendor/tiny_mce/tiny_mce.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/ready.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/init.standard.js"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    initTinyMCE(";
        // line 14
        echo $this->getContext($context, "tinymce_config");
        echo ");
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 79,  218 => 78,  193 => 72,  181 => 69,  208 => 69,  197 => 63,  179 => 55,  161 => 58,  148 => 44,  142 => 42,  124 => 37,  90 => 27,  195 => 61,  187 => 59,  164 => 49,  117 => 41,  166 => 50,  129 => 50,  110 => 33,  87 => 31,  20 => 1,  97 => 34,  350 => 133,  344 => 130,  338 => 126,  326 => 122,  324 => 121,  320 => 120,  315 => 118,  309 => 114,  303 => 112,  297 => 110,  291 => 108,  286 => 106,  280 => 102,  274 => 100,  266 => 97,  257 => 94,  254 => 93,  243 => 89,  237 => 87,  234 => 86,  228 => 85,  219 => 82,  214 => 81,  206 => 67,  200 => 76,  167 => 51,  150 => 44,  137 => 52,  77 => 33,  69 => 17,  23 => 3,  128 => 48,  113 => 34,  107 => 47,  62 => 26,  56 => 23,  53 => 12,  49 => 11,  86 => 40,  40 => 12,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 140,  362 => 138,  359 => 106,  356 => 134,  353 => 104,  348 => 132,  345 => 102,  341 => 82,  335 => 80,  332 => 124,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 96,  256 => 34,  252 => 92,  248 => 32,  244 => 31,  240 => 30,  226 => 22,  209 => 11,  203 => 67,  192 => 129,  175 => 66,  173 => 53,  170 => 62,  156 => 56,  125 => 48,  99 => 29,  301 => 64,  295 => 109,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 98,  263 => 80,  249 => 91,  245 => 77,  230 => 83,  222 => 83,  220 => 72,  215 => 70,  211 => 80,  204 => 75,  198 => 63,  185 => 70,  183 => 57,  177 => 67,  160 => 48,  112 => 33,  82 => 25,  65 => 16,  38 => 6,  144 => 54,  141 => 41,  135 => 47,  126 => 44,  109 => 38,  103 => 31,  67 => 25,  61 => 14,  47 => 30,  91 => 33,  84 => 25,  94 => 32,  88 => 22,  59 => 5,  28 => 2,  225 => 84,  216 => 90,  212 => 77,  205 => 84,  201 => 65,  196 => 73,  194 => 75,  191 => 62,  189 => 71,  186 => 125,  180 => 117,  172 => 52,  159 => 96,  154 => 59,  147 => 53,  132 => 38,  127 => 38,  121 => 36,  118 => 35,  114 => 37,  104 => 36,  100 => 36,  78 => 37,  75 => 26,  71 => 22,  34 => 11,  105 => 32,  93 => 28,  79 => 70,  76 => 35,  72 => 27,  68 => 26,  58 => 22,  24 => 1,  27 => 5,  21 => 2,  44 => 18,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 28,  63 => 19,  46 => 10,  22 => 2,  163 => 63,  155 => 46,  152 => 45,  149 => 51,  145 => 56,  139 => 49,  131 => 42,  123 => 43,  120 => 35,  115 => 39,  106 => 29,  101 => 35,  96 => 35,  83 => 27,  80 => 19,  74 => 36,  66 => 31,  55 => 14,  52 => 23,  50 => 34,  43 => 8,  41 => 15,  37 => 8,  35 => 5,  32 => 6,  29 => 4,  184 => 119,  178 => 54,  171 => 60,  165 => 50,  162 => 57,  157 => 56,  153 => 55,  151 => 54,  143 => 51,  138 => 51,  136 => 40,  133 => 46,  130 => 47,  122 => 88,  119 => 32,  116 => 47,  111 => 39,  108 => 37,  102 => 30,  98 => 28,  95 => 33,  92 => 27,  89 => 26,  85 => 37,  81 => 24,  73 => 22,  64 => 29,  60 => 28,  57 => 21,  54 => 24,  51 => 12,  48 => 17,  45 => 15,  42 => 9,  39 => 14,  36 => 13,  33 => 12,  30 => 5,);
    }
}
