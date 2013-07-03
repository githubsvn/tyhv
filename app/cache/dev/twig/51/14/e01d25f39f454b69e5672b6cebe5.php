<?php

/* SMAdminBundle:Language:index.html.twig */
class __TwigTemplate_5114e01d25f39f454b69e5672b6cebe5 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#sortTable').dataTable({
            \"bPaginate\": false,
            \"bLengthChange\": false,
            \"bFilter\": false,
            \"bSort\": true,
            \"bInfo\": false,
            \"bAutoWidth\": true,
            \"aaSorting\": [ [0,'asc'], [1,'asc'], [2,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 3, 4 ] }
            ],
        });
    } );
</script>
<h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Language list", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"btn-group nav\">
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
</div>

<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>Id</th>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lang key", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Is default", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "        <tr>
            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "langkey"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 42
            if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") == 1)) {
                // line 43
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 45
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_set_default", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"/>
                ";
            }
            // line 47
            echo "            </td>
            <td>
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Show", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                &nbsp; | &nbsp;
                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 52
            if (($this->getAttribute($this->getContext($context, "entity"), "isdefault") != 1)) {
                // line 53
                echo "                &nbsp; | &nbsp;
                <a class=\"delete\" rel=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                ";
            }
            // line 56
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </tbody>
</table>

";
        // line 63
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 64
            echo "<div class=\"pagination\" style=\"text-align: right;\">
    <ul>
        <li><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => 1)), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "previousPage"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 69
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 70
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 72
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 74
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "nextPage"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_language", array("page" => $this->getContext($context, "lastPage"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 80
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
        return array (  176 => 68,  140 => 44,  384 => 138,  377 => 134,  350 => 128,  343 => 126,  224 => 81,  374 => 144,  370 => 143,  336 => 128,  313 => 118,  373 => 146,  357 => 138,  340 => 129,  334 => 128,  328 => 126,  20 => 1,  327 => 141,  317 => 136,  311 => 117,  345 => 134,  331 => 122,  323 => 140,  319 => 120,  308 => 111,  302 => 114,  288 => 109,  256 => 100,  359 => 131,  352 => 136,  333 => 123,  325 => 122,  322 => 124,  314 => 140,  280 => 103,  433 => 166,  425 => 164,  419 => 160,  411 => 158,  407 => 156,  401 => 152,  395 => 154,  389 => 148,  383 => 146,  366 => 132,  349 => 135,  321 => 121,  315 => 113,  309 => 134,  442 => 172,  438 => 171,  434 => 170,  428 => 166,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  396 => 153,  392 => 152,  387 => 152,  369 => 144,  363 => 140,  358 => 130,  353 => 135,  347 => 127,  341 => 152,  339 => 125,  330 => 124,  324 => 117,  296 => 134,  293 => 106,  266 => 104,  258 => 94,  344 => 129,  337 => 151,  318 => 119,  307 => 116,  299 => 113,  305 => 110,  291 => 113,  283 => 101,  271 => 100,  262 => 115,  250 => 100,  316 => 122,  312 => 119,  306 => 118,  300 => 135,  277 => 127,  254 => 91,  248 => 101,  242 => 89,  240 => 85,  236 => 89,  208 => 69,  188 => 97,  113 => 57,  56 => 23,  304 => 114,  297 => 108,  259 => 95,  244 => 91,  235 => 91,  228 => 82,  193 => 62,  90 => 37,  285 => 102,  281 => 122,  267 => 96,  251 => 90,  246 => 95,  234 => 89,  192 => 72,  298 => 114,  284 => 106,  272 => 101,  264 => 96,  255 => 101,  247 => 89,  238 => 108,  232 => 83,  218 => 84,  214 => 80,  206 => 107,  158 => 47,  146 => 55,  40 => 16,  286 => 99,  279 => 106,  274 => 94,  260 => 105,  252 => 93,  241 => 86,  237 => 90,  233 => 88,  231 => 82,  226 => 87,  210 => 76,  195 => 73,  187 => 59,  181 => 55,  167 => 52,  137 => 52,  124 => 49,  97 => 33,  69 => 31,  53 => 11,  229 => 76,  221 => 74,  209 => 69,  203 => 66,  197 => 61,  174 => 52,  166 => 49,  142 => 54,  117 => 49,  62 => 16,  227 => 74,  223 => 73,  219 => 93,  213 => 69,  207 => 68,  190 => 71,  182 => 56,  168 => 66,  150 => 44,  110 => 43,  129 => 41,  87 => 33,  49 => 19,  134 => 51,  86 => 36,  77 => 30,  164 => 64,  148 => 56,  128 => 37,  199 => 74,  179 => 67,  169 => 62,  161 => 50,  107 => 32,  23 => 2,  449 => 141,  445 => 140,  441 => 139,  437 => 138,  432 => 137,  429 => 165,  421 => 122,  418 => 121,  413 => 159,  409 => 116,  403 => 115,  400 => 114,  391 => 153,  386 => 110,  381 => 148,  378 => 144,  375 => 147,  372 => 133,  367 => 141,  364 => 104,  360 => 138,  354 => 137,  351 => 136,  348 => 134,  342 => 72,  338 => 127,  335 => 124,  332 => 125,  329 => 121,  326 => 123,  320 => 123,  310 => 117,  303 => 109,  294 => 111,  290 => 106,  278 => 102,  275 => 102,  269 => 101,  265 => 106,  261 => 94,  257 => 98,  253 => 94,  243 => 90,  239 => 95,  217 => 80,  202 => 75,  200 => 82,  175 => 55,  173 => 67,  170 => 63,  156 => 59,  125 => 36,  99 => 39,  301 => 112,  295 => 113,  292 => 109,  289 => 104,  287 => 124,  282 => 107,  276 => 99,  273 => 98,  270 => 99,  268 => 107,  263 => 95,  249 => 98,  245 => 92,  230 => 88,  222 => 86,  220 => 90,  215 => 70,  211 => 79,  204 => 67,  198 => 63,  185 => 57,  183 => 70,  177 => 58,  160 => 60,  112 => 36,  82 => 30,  65 => 19,  38 => 6,  144 => 42,  141 => 53,  135 => 39,  126 => 46,  109 => 35,  103 => 40,  67 => 29,  61 => 15,  47 => 30,  91 => 34,  84 => 25,  94 => 27,  88 => 27,  59 => 29,  28 => 2,  225 => 75,  216 => 83,  212 => 88,  205 => 75,  201 => 74,  196 => 69,  194 => 72,  191 => 72,  189 => 70,  186 => 59,  180 => 69,  172 => 67,  159 => 59,  154 => 58,  147 => 55,  132 => 42,  127 => 47,  121 => 50,  118 => 37,  114 => 45,  104 => 30,  100 => 28,  78 => 37,  75 => 31,  71 => 30,  34 => 11,  105 => 35,  93 => 38,  79 => 32,  76 => 29,  72 => 20,  68 => 27,  58 => 26,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 27,  63 => 17,  46 => 9,  22 => 2,  163 => 61,  155 => 48,  152 => 47,  149 => 56,  145 => 54,  139 => 53,  131 => 51,  123 => 46,  120 => 47,  115 => 44,  106 => 31,  101 => 34,  96 => 42,  83 => 31,  80 => 37,  74 => 36,  66 => 31,  55 => 22,  52 => 11,  50 => 10,  43 => 8,  41 => 15,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 64,  171 => 63,  165 => 50,  162 => 63,  157 => 59,  153 => 57,  151 => 56,  143 => 45,  138 => 52,  136 => 42,  133 => 50,  130 => 48,  122 => 39,  119 => 45,  116 => 35,  111 => 43,  108 => 42,  102 => 36,  98 => 32,  95 => 28,  92 => 27,  89 => 28,  85 => 27,  81 => 26,  73 => 22,  64 => 26,  60 => 22,  57 => 15,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
