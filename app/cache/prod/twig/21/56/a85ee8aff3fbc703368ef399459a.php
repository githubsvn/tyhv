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
        return array (  55 => 14,  42 => 9,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  52 => 11,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  320 => 66,  310 => 61,  303 => 59,  294 => 57,  290 => 55,  287 => 54,  278 => 52,  275 => 51,  269 => 36,  265 => 35,  261 => 34,  257 => 33,  253 => 32,  243 => 25,  239 => 24,  225 => 13,  220 => 12,  217 => 11,  211 => 5,  202 => 143,  200 => 136,  191 => 130,  186 => 127,  184 => 121,  180 => 119,  178 => 118,  175 => 117,  173 => 104,  170 => 103,  165 => 100,  159 => 98,  156 => 97,  153 => 96,  139 => 95,  133 => 93,  125 => 91,  122 => 90,  104 => 89,  101 => 88,  99 => 87,  93 => 85,  82 => 73,  79 => 72,  74 => 66,  71 => 65,  68 => 54,  66 => 51,  51 => 12,  48 => 38,  37 => 8,  102 => 33,  96 => 86,  91 => 80,  80 => 24,  76 => 67,  69 => 19,  65 => 18,  60 => 16,  57 => 15,  53 => 14,  46 => 10,  41 => 8,  38 => 7,  34 => 6,  31 => 1,  28 => 3,);
    }
}
