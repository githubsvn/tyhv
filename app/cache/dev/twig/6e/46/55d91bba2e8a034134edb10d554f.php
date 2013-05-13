<?php

/* SMAdminBundle:Language:index.html.twig */
class __TwigTemplate_6e4655d91bba2e8a034134edb10d554f extends Twig_Template
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
        echo "<h1>Language list</h1>

<div class=\"btn-group nav\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Create a new entry</a>
</div>

<table class=\"table table-bordered table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Lang key</th>
            <th>Is default</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "        <tr>
            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "langkey"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 26
            if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") == 1)) {
                // line 27
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 29
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_set_default", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"/>
                ";
            }
            // line 31
            echo "            </td>
            <td>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Show</a>
                &nbsp; | &nbsp;
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Edit</a>
                ";
            // line 36
            if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") != 1)) {
                // line 37
                echo "                &nbsp; | &nbsp;
                <a class=\"delete\" rel=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">Delete</a>
                ";
            }
            // line 40
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "    </tbody>
</table>

";
        // line 47
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 48
            echo "<div class=\"pagination\" style=\"text-align: right;\">
    <ul>
        <li><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => 1)), "html", null, true);
            echo "\">«</a></li>
        <li><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\">Previous</a></li>
    ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 53
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 54
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 56
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 58
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 59
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\">Next</a></li>
        <li><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "lastPage"))), "html", null, true);
            echo "\">»</a></li>
    </ul>
</div>
";
        }
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Language:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 59,  129 => 50,  110 => 40,  87 => 31,  20 => 1,  97 => 43,  350 => 133,  344 => 130,  338 => 126,  326 => 122,  324 => 121,  320 => 120,  315 => 118,  309 => 114,  303 => 112,  297 => 110,  291 => 108,  286 => 106,  280 => 102,  274 => 100,  266 => 97,  257 => 94,  254 => 93,  243 => 89,  237 => 87,  234 => 86,  228 => 85,  219 => 82,  214 => 81,  206 => 79,  200 => 76,  167 => 68,  150 => 58,  137 => 52,  77 => 27,  69 => 19,  23 => 3,  128 => 48,  113 => 57,  107 => 47,  62 => 26,  56 => 23,  53 => 20,  49 => 16,  86 => 27,  40 => 16,  426 => 133,  422 => 132,  418 => 131,  413 => 130,  410 => 129,  402 => 120,  399 => 119,  394 => 116,  390 => 114,  384 => 113,  381 => 112,  372 => 109,  367 => 140,  362 => 138,  359 => 106,  356 => 134,  353 => 104,  348 => 132,  345 => 102,  341 => 82,  335 => 80,  332 => 124,  329 => 78,  323 => 70,  319 => 69,  316 => 68,  313 => 67,  310 => 66,  307 => 65,  293 => 59,  288 => 57,  279 => 55,  275 => 53,  272 => 52,  265 => 50,  262 => 96,  256 => 34,  252 => 92,  248 => 32,  244 => 31,  240 => 30,  226 => 22,  209 => 11,  203 => 5,  192 => 129,  175 => 70,  173 => 102,  170 => 101,  156 => 95,  125 => 48,  99 => 34,  301 => 64,  295 => 109,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 98,  263 => 80,  249 => 91,  245 => 77,  230 => 23,  222 => 83,  220 => 72,  215 => 70,  211 => 80,  204 => 78,  198 => 63,  185 => 61,  183 => 72,  177 => 58,  160 => 58,  112 => 39,  82 => 29,  65 => 18,  38 => 6,  144 => 54,  141 => 53,  135 => 47,  126 => 45,  109 => 56,  103 => 35,  67 => 25,  61 => 16,  47 => 30,  91 => 33,  84 => 25,  94 => 32,  88 => 22,  59 => 5,  28 => 2,  225 => 84,  216 => 90,  212 => 12,  205 => 84,  201 => 83,  196 => 80,  194 => 75,  191 => 74,  189 => 77,  186 => 125,  180 => 117,  172 => 69,  159 => 96,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 43,  114 => 37,  104 => 87,  100 => 36,  78 => 20,  75 => 26,  71 => 63,  34 => 11,  105 => 38,  93 => 42,  79 => 70,  76 => 35,  72 => 27,  68 => 26,  58 => 25,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 24,  63 => 24,  46 => 21,  22 => 2,  163 => 63,  155 => 58,  152 => 56,  149 => 51,  145 => 56,  139 => 93,  131 => 42,  123 => 47,  120 => 43,  115 => 39,  106 => 29,  101 => 44,  96 => 35,  83 => 27,  80 => 24,  74 => 21,  66 => 23,  55 => 23,  52 => 11,  50 => 34,  43 => 8,  41 => 15,  37 => 13,  35 => 5,  32 => 4,  29 => 4,  184 => 119,  178 => 64,  171 => 60,  165 => 67,  162 => 57,  157 => 56,  153 => 94,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 51,  130 => 47,  122 => 88,  119 => 32,  116 => 47,  111 => 40,  108 => 37,  102 => 37,  98 => 22,  95 => 33,  92 => 23,  89 => 26,  85 => 37,  81 => 29,  73 => 35,  64 => 25,  60 => 22,  57 => 21,  54 => 24,  51 => 13,  48 => 10,  45 => 15,  42 => 7,  39 => 19,  36 => 6,  33 => 12,  30 => 5,);
    }
}
