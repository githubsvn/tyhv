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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "        <tr>
            <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            if ($this->getAttribute($this->getContext($context, "entity"), "createdat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 20
            if ($this->getAttribute($this->getContext($context, "entity"), "updatedat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "active"), "html", null, true);
            echo "</td>
            <td>
                <div class=\"btn-group\">
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>edit</a>
                </div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        return array (  53 => 55,  40 => 12,  124 => 46,  117 => 44,  110 => 42,  90 => 37,  56 => 23,  69 => 17,  129 => 46,  87 => 28,  49 => 16,  134 => 46,  86 => 36,  179 => 66,  164 => 60,  148 => 53,  128 => 35,  113 => 31,  107 => 36,  77 => 24,  62 => 19,  23 => 3,  441 => 136,  437 => 135,  433 => 134,  429 => 133,  424 => 132,  421 => 131,  413 => 122,  410 => 121,  405 => 118,  401 => 116,  395 => 115,  392 => 114,  383 => 111,  378 => 110,  373 => 109,  370 => 108,  367 => 107,  364 => 106,  359 => 105,  356 => 104,  352 => 84,  346 => 82,  343 => 81,  340 => 80,  334 => 72,  330 => 71,  327 => 70,  324 => 69,  321 => 68,  318 => 67,  312 => 66,  302 => 61,  286 => 57,  279 => 54,  267 => 51,  261 => 36,  257 => 35,  253 => 34,  235 => 25,  231 => 24,  217 => 13,  209 => 11,  203 => 5,  192 => 131,  175 => 65,  173 => 104,  170 => 63,  156 => 56,  125 => 34,  99 => 32,  301 => 100,  295 => 59,  292 => 95,  289 => 94,  287 => 93,  282 => 55,  276 => 86,  273 => 85,  270 => 52,  268 => 83,  263 => 80,  249 => 33,  245 => 32,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 59,  112 => 38,  82 => 24,  65 => 11,  38 => 6,  144 => 52,  141 => 54,  135 => 47,  126 => 45,  109 => 36,  103 => 40,  67 => 29,  61 => 17,  47 => 30,  91 => 29,  84 => 25,  94 => 39,  88 => 22,  59 => 5,  28 => 2,  225 => 96,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 71,  194 => 138,  191 => 78,  189 => 67,  186 => 127,  180 => 119,  172 => 67,  159 => 60,  154 => 59,  147 => 57,  132 => 46,  127 => 35,  121 => 34,  118 => 39,  114 => 31,  104 => 89,  100 => 25,  78 => 24,  75 => 23,  71 => 30,  34 => 6,  105 => 41,  93 => 38,  79 => 32,  76 => 67,  72 => 14,  68 => 20,  58 => 18,  24 => 1,  27 => 4,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 14,  22 => 2,  163 => 63,  155 => 59,  152 => 49,  149 => 52,  145 => 51,  139 => 50,  131 => 42,  123 => 45,  120 => 46,  115 => 43,  106 => 29,  101 => 88,  96 => 24,  83 => 33,  80 => 24,  74 => 21,  66 => 17,  55 => 22,  52 => 17,  50 => 34,  43 => 8,  41 => 27,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 66,  178 => 65,  171 => 64,  165 => 53,  162 => 61,  157 => 48,  153 => 96,  151 => 58,  143 => 55,  138 => 39,  136 => 50,  133 => 93,  130 => 45,  122 => 90,  119 => 32,  116 => 39,  111 => 30,  108 => 37,  102 => 40,  98 => 39,  95 => 30,  92 => 23,  89 => 19,  85 => 24,  81 => 25,  73 => 13,  64 => 17,  60 => 23,  57 => 17,  54 => 11,  51 => 13,  48 => 17,  45 => 15,  42 => 13,  39 => 11,  36 => 5,  33 => 4,  30 => 5,);
    }
}
