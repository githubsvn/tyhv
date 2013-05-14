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
        return array (  55 => 14,  42 => 9,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  52 => 11,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 108,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  345 => 102,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  301 => 64,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 49,  256 => 34,  252 => 33,  248 => 32,  244 => 31,  240 => 30,  230 => 23,  226 => 22,  212 => 12,  209 => 11,  203 => 5,  194 => 135,  192 => 129,  186 => 125,  184 => 119,  180 => 117,  178 => 116,  175 => 115,  173 => 102,  170 => 101,  165 => 98,  159 => 96,  156 => 95,  153 => 94,  139 => 93,  133 => 91,  125 => 89,  122 => 88,  104 => 87,  101 => 86,  99 => 85,  93 => 83,  82 => 71,  79 => 70,  74 => 64,  71 => 63,  68 => 52,  66 => 49,  51 => 12,  48 => 36,  37 => 8,  102 => 33,  96 => 84,  91 => 78,  80 => 24,  76 => 65,  69 => 19,  65 => 18,  60 => 16,  57 => 15,  53 => 14,  46 => 10,  41 => 8,  38 => 7,  34 => 6,  31 => 1,  28 => 3,);
    }
}
