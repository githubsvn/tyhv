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
        return array (  84 => 19,  55 => 13,  44 => 10,  36 => 7,  25 => 4,  105 => 24,  98 => 22,  89 => 19,  83 => 18,  72 => 14,  50 => 8,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  225 => 96,  216 => 90,  205 => 84,  201 => 83,  196 => 80,  191 => 78,  189 => 77,  172 => 67,  163 => 63,  157 => 60,  154 => 59,  147 => 55,  143 => 54,  138 => 51,  136 => 50,  132 => 48,  130 => 47,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  100 => 34,  95 => 31,  78 => 28,  75 => 27,  63 => 24,  58 => 9,  94 => 39,  88 => 6,  81 => 40,  59 => 22,  39 => 6,  35 => 7,  21 => 2,  43 => 7,  32 => 4,  52 => 11,  29 => 3,  26 => 6,  23 => 2,  19 => 1,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 108,  362 => 107,  359 => 106,  356 => 105,  353 => 104,  348 => 103,  345 => 102,  341 => 82,  335 => 80,  332 => 79,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  301 => 64,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 49,  256 => 34,  252 => 33,  248 => 32,  244 => 31,  240 => 30,  230 => 23,  226 => 22,  212 => 88,  209 => 11,  203 => 5,  194 => 79,  192 => 129,  186 => 76,  184 => 119,  180 => 72,  178 => 71,  175 => 115,  173 => 102,  170 => 101,  165 => 98,  159 => 61,  156 => 95,  153 => 94,  139 => 93,  133 => 91,  125 => 89,  122 => 88,  104 => 36,  101 => 86,  99 => 85,  93 => 20,  82 => 71,  79 => 17,  74 => 16,  71 => 26,  68 => 12,  66 => 15,  51 => 12,  48 => 19,  37 => 5,  102 => 33,  96 => 21,  91 => 20,  80 => 24,  76 => 16,  69 => 19,  65 => 18,  60 => 23,  57 => 14,  53 => 14,  46 => 11,  41 => 9,  38 => 7,  34 => 11,  31 => 5,  28 => 3,);
    }
}
