<?php

/* SMAdminBundle:Media:show.html.twig */
class __TwigTemplate_1cb0883810c5283a5912704b4befe5ae extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media Show", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td><image src=\"/web/uploads/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\"/></td>
        </tr>
        <tr>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Category", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>
                ";
        // line 18
        if ($this->getAttribute($this->getContext($context, "entity"), "category")) {
            // line 19
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "category"), "name"), "html", null, true);
            echo "
                ";
        }
        // line 21
        echo "            </td>
        </tr>
        <tr>
            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Width", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "width"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Height", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "height"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <td>
                ";
        // line 38
        if (($this->getAttribute($this->getContext($context, "entity"), "active") == 1)) {
            // line 39
            echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
        } else {
            // line 41
            echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
        }
        // line 43
        echo "            </td>
        </tr>
        <tr>
            <td colspan=\"2\" width=\"100%\">
                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
                &nbsp;
                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        return "SMAdminBundle:Media:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  56 => 23,  304 => 116,  297 => 112,  259 => 103,  244 => 95,  235 => 91,  228 => 89,  193 => 76,  90 => 37,  285 => 103,  281 => 102,  267 => 105,  251 => 100,  246 => 86,  234 => 80,  192 => 63,  298 => 110,  284 => 104,  272 => 100,  264 => 95,  255 => 102,  247 => 87,  238 => 81,  232 => 80,  218 => 75,  214 => 74,  206 => 71,  158 => 57,  146 => 53,  40 => 8,  286 => 110,  279 => 95,  274 => 94,  260 => 94,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  226 => 78,  210 => 72,  195 => 64,  187 => 74,  181 => 72,  167 => 67,  137 => 54,  124 => 47,  97 => 39,  69 => 16,  53 => 55,  229 => 78,  221 => 74,  209 => 79,  203 => 79,  197 => 74,  174 => 69,  166 => 59,  142 => 44,  117 => 41,  62 => 16,  227 => 74,  223 => 87,  219 => 72,  213 => 84,  207 => 71,  190 => 59,  182 => 56,  168 => 67,  150 => 45,  110 => 40,  129 => 47,  87 => 28,  49 => 16,  134 => 49,  86 => 25,  77 => 22,  164 => 66,  148 => 60,  128 => 46,  199 => 69,  179 => 71,  169 => 52,  161 => 63,  107 => 33,  23 => 3,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 136,  421 => 122,  418 => 121,  413 => 118,  409 => 116,  403 => 115,  400 => 114,  391 => 111,  386 => 110,  381 => 109,  378 => 108,  375 => 107,  372 => 106,  367 => 105,  364 => 104,  360 => 84,  354 => 82,  351 => 81,  348 => 80,  342 => 72,  338 => 71,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  320 => 66,  310 => 61,  303 => 59,  294 => 109,  290 => 108,  278 => 108,  275 => 98,  269 => 97,  265 => 35,  261 => 34,  257 => 33,  253 => 32,  243 => 86,  239 => 24,  217 => 86,  202 => 75,  200 => 66,  175 => 69,  173 => 53,  170 => 55,  156 => 63,  125 => 49,  99 => 32,  301 => 100,  295 => 96,  292 => 111,  289 => 104,  287 => 54,  282 => 90,  276 => 102,  273 => 85,  270 => 106,  268 => 93,  263 => 104,  249 => 99,  245 => 87,  230 => 75,  222 => 73,  220 => 76,  215 => 70,  211 => 70,  204 => 70,  198 => 63,  185 => 62,  183 => 71,  177 => 58,  160 => 65,  112 => 39,  82 => 25,  65 => 18,  38 => 6,  144 => 59,  141 => 43,  135 => 50,  126 => 50,  109 => 43,  103 => 36,  67 => 19,  61 => 15,  47 => 30,  91 => 29,  84 => 25,  94 => 38,  88 => 28,  59 => 5,  28 => 2,  225 => 88,  216 => 90,  212 => 88,  205 => 80,  201 => 69,  196 => 77,  194 => 62,  191 => 73,  189 => 65,  186 => 61,  180 => 59,  172 => 68,  159 => 50,  154 => 62,  147 => 56,  132 => 47,  127 => 48,  121 => 42,  118 => 46,  114 => 31,  104 => 41,  100 => 25,  78 => 24,  75 => 31,  71 => 30,  34 => 11,  105 => 35,  93 => 29,  79 => 32,  76 => 67,  72 => 20,  68 => 20,  58 => 18,  24 => 1,  27 => 7,  21 => 2,  44 => 9,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 30,  46 => 9,  22 => 2,  163 => 58,  155 => 58,  152 => 61,  149 => 58,  145 => 45,  139 => 43,  131 => 40,  123 => 43,  120 => 37,  115 => 39,  106 => 29,  101 => 34,  96 => 32,  83 => 33,  80 => 25,  74 => 21,  66 => 17,  55 => 23,  52 => 17,  50 => 12,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 68,  165 => 55,  162 => 54,  157 => 53,  153 => 46,  151 => 57,  143 => 48,  138 => 50,  136 => 49,  133 => 51,  130 => 52,  122 => 48,  119 => 41,  116 => 45,  111 => 30,  108 => 36,  102 => 33,  98 => 32,  95 => 30,  92 => 29,  89 => 28,  85 => 27,  81 => 40,  73 => 21,  64 => 17,  60 => 16,  57 => 27,  54 => 13,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 11,  36 => 12,  33 => 4,  30 => 5,);
    }
}
