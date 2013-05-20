<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_2156a85ee8aff3fbc703368ef399459a extends Twig_Template
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
            echo "    <!--<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>-->
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
        return array (  55 => 14,  42 => 9,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  52 => 11,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  435 => 136,  431 => 135,  427 => 134,  423 => 133,  418 => 132,  415 => 131,  407 => 122,  404 => 121,  399 => 118,  395 => 116,  389 => 115,  386 => 114,  377 => 111,  372 => 110,  367 => 109,  364 => 108,  361 => 107,  358 => 106,  353 => 105,  350 => 104,  346 => 84,  340 => 82,  337 => 81,  334 => 80,  328 => 72,  324 => 71,  321 => 70,  318 => 69,  315 => 68,  312 => 67,  306 => 66,  298 => 61,  293 => 59,  284 => 57,  280 => 55,  277 => 54,  270 => 52,  267 => 51,  261 => 36,  257 => 35,  231 => 24,  217 => 13,  212 => 12,  209 => 11,  194 => 138,  192 => 131,  184 => 121,  180 => 119,  178 => 118,  175 => 117,  173 => 104,  170 => 103,  165 => 100,  159 => 98,  156 => 97,  153 => 96,  139 => 95,  133 => 93,  125 => 91,  104 => 89,  101 => 88,  99 => 87,  96 => 86,  93 => 85,  91 => 80,  79 => 72,  76 => 67,  74 => 66,  71 => 65,  68 => 54,  51 => 12,  48 => 38,  46 => 10,  37 => 8,  290 => 118,  283 => 114,  278 => 113,  272 => 112,  264 => 110,  256 => 108,  253 => 34,  249 => 33,  245 => 32,  241 => 104,  237 => 102,  235 => 25,  230 => 97,  221 => 93,  216 => 91,  213 => 90,  211 => 89,  207 => 88,  203 => 5,  199 => 84,  195 => 82,  193 => 81,  186 => 127,  183 => 78,  177 => 76,  171 => 74,  169 => 73,  164 => 71,  161 => 70,  157 => 69,  137 => 52,  134 => 51,  128 => 50,  122 => 90,  117 => 46,  114 => 45,  110 => 44,  103 => 40,  97 => 36,  86 => 34,  82 => 73,  78 => 31,  72 => 30,  66 => 51,  63 => 27,  59 => 26,  53 => 23,  31 => 1,  28 => 2,);
    }
}
