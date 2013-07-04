<?php

/* SMAdminBundle:Group:index.html.twig */
class __TwigTemplate_3279aeda7134e446d3e831066d916fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<table class=\"table table-bordered table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created Time</th>
            <th>Last Updated</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 15
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "        <tr>
            <td><a href=\"";
            // line 17
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 18
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "createdat")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 20
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "updatedat")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "updatedat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 21
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "active"), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\">
                    <a href=\"";
            // line 24
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                    <a href=\"";
            // line 25
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>edit</a>
                </div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
</table>
<a class=\"btn btn-primary\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_new"), "html", null, true);
        echo "\">
    Create a new entry
</a>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  23 => 3,  340 => 116,  331 => 112,  318 => 110,  307 => 108,  286 => 104,  275 => 102,  268 => 99,  263 => 95,  243 => 88,  190 => 71,  326 => 104,  305 => 97,  290 => 89,  285 => 88,  280 => 103,  261 => 78,  241 => 70,  237 => 69,  224 => 65,  142 => 51,  90 => 27,  334 => 109,  329 => 108,  323 => 104,  315 => 102,  311 => 98,  302 => 95,  297 => 94,  283 => 87,  267 => 80,  249 => 75,  244 => 74,  230 => 69,  223 => 67,  177 => 56,  116 => 43,  53 => 17,  44 => 8,  325 => 99,  316 => 95,  309 => 94,  292 => 92,  281 => 89,  276 => 88,  271 => 100,  265 => 86,  260 => 78,  256 => 83,  253 => 76,  214 => 67,  210 => 65,  206 => 76,  196 => 59,  78 => 35,  255 => 74,  251 => 75,  246 => 89,  232 => 68,  228 => 71,  254 => 91,  233 => 86,  231 => 72,  222 => 62,  208 => 58,  204 => 59,  191 => 56,  188 => 59,  185 => 58,  178 => 49,  149 => 42,  143 => 41,  132 => 42,  96 => 24,  169 => 63,  137 => 46,  129 => 36,  119 => 32,  154 => 50,  146 => 46,  141 => 40,  198 => 66,  181 => 68,  135 => 43,  127 => 39,  122 => 47,  86 => 24,  73 => 13,  55 => 22,  227 => 66,  221 => 80,  107 => 49,  67 => 29,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 106,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 81,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 110,  332 => 66,  322 => 103,  314 => 59,  287 => 52,  284 => 51,  278 => 86,  274 => 35,  270 => 34,  266 => 80,  262 => 32,  252 => 25,  211 => 61,  195 => 68,  193 => 72,  187 => 55,  184 => 69,  182 => 54,  164 => 52,  161 => 61,  140 => 47,  126 => 48,  106 => 30,  103 => 41,  100 => 29,  93 => 85,  74 => 20,  68 => 12,  51 => 17,  333 => 100,  327 => 96,  324 => 111,  320 => 94,  317 => 102,  312 => 90,  306 => 86,  303 => 96,  299 => 94,  296 => 106,  291 => 105,  277 => 79,  273 => 84,  258 => 75,  248 => 72,  245 => 72,  239 => 72,  234 => 69,  226 => 11,  216 => 65,  202 => 61,  199 => 61,  192 => 67,  165 => 62,  156 => 50,  134 => 46,  131 => 46,  120 => 39,  115 => 35,  82 => 21,  76 => 34,  61 => 18,  54 => 14,  171 => 47,  163 => 52,  159 => 51,  152 => 46,  138 => 50,  123 => 38,  117 => 31,  111 => 30,  101 => 34,  98 => 40,  83 => 33,  75 => 19,  71 => 33,  64 => 15,  43 => 12,  36 => 12,  104 => 27,  80 => 23,  63 => 30,  58 => 12,  40 => 6,  24 => 1,  94 => 25,  88 => 37,  48 => 12,  39 => 11,  35 => 11,  31 => 3,  21 => 2,  46 => 9,  29 => 3,  32 => 4,  250 => 73,  240 => 87,  236 => 71,  229 => 84,  225 => 82,  220 => 5,  218 => 79,  215 => 60,  212 => 64,  209 => 77,  200 => 74,  194 => 57,  179 => 57,  176 => 67,  173 => 52,  166 => 60,  162 => 51,  157 => 60,  155 => 47,  151 => 48,  148 => 42,  145 => 47,  139 => 45,  128 => 41,  114 => 31,  109 => 32,  87 => 40,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 32,  97 => 31,  92 => 41,  89 => 24,  85 => 25,  69 => 14,  28 => 2,  57 => 27,  50 => 16,  47 => 9,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 66,  189 => 64,  183 => 54,  180 => 63,  174 => 50,  170 => 49,  167 => 51,  158 => 46,  153 => 59,  150 => 44,  147 => 95,  144 => 48,  136 => 43,  133 => 49,  130 => 91,  124 => 35,  121 => 31,  113 => 36,  108 => 35,  105 => 34,  102 => 48,  99 => 30,  95 => 28,  91 => 19,  81 => 35,  70 => 30,  66 => 19,  62 => 22,  59 => 23,  56 => 18,  52 => 11,  49 => 19,  45 => 15,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
