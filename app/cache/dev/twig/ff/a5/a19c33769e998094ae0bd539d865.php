<?php

/* SMAdminBundle:CompanyType:index.html.twig */
class __TwigTemplate_ffa5a19c33769e998094ae0bd539d865 extends Twig_Template
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
            \"aaSorting\": [ [0,'asc'], [1,'asc'] ],
            \"aoColumnDefs\": [
                { 'bSortable': false, 'aTargets': [ 3, 4 ] }
            ],
        });
    } );
</script>
<h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Type List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 26
            echo "                ";
            if (($this->getContext($context, "lang") == $this->getAttribute($this->getContext($context, "opt"), "id"))) {
                // line 27
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 29
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 33
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => 1, "lang" => $this->getAttribute($this->getContext($context, "opt"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </ul>
    </div>
</div>

<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "        <tr>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 54
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 55
                echo "                    ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                ";
            } else {
                // line 57
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                ";
            }
            // line 59
            echo "            </td>
            <td>";
            // line 60
            if ($this->getAttribute($this->getContext($context, "entity"), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 62
            if (($this->getAttribute($this->getContext($context, "entity"), "status") == 1)) {
                // line 63
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 65
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 67
            echo "            </td>
            <td>
                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 70
            if ((!(null === $this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage")))) {
                // line 71
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "getCurrentLanguage"), "getId"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                ";
            }
            // line 74
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </tbody>
</table>

";
        // line 82
        if (($this->getContext($context, "lastPage") > 1)) {
            // line 83
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => 1, "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $this->getContext($context, "previousPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "lastPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 88
                echo "      ";
                if (($this->getContext($context, "page") == $this->getContext($context, "currentPage"))) {
                    // line 89
                    echo "        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 91
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $this->getContext($context, "page"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 93
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $this->getContext($context, "nextPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $this->getContext($context, "lastPage"), "lang" => $this->getContext($context, "lang"))), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:CompanyType:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 138,  377 => 134,  343 => 126,  329 => 121,  374 => 144,  370 => 143,  348 => 134,  336 => 128,  313 => 118,  307 => 116,  391 => 153,  373 => 146,  351 => 136,  340 => 129,  334 => 128,  328 => 126,  20 => 1,  140 => 52,  327 => 141,  317 => 136,  311 => 117,  337 => 151,  319 => 120,  300 => 135,  277 => 127,  253 => 90,  188 => 97,  359 => 131,  352 => 136,  333 => 123,  322 => 124,  314 => 140,  299 => 113,  242 => 89,  429 => 165,  425 => 164,  419 => 160,  413 => 159,  411 => 158,  407 => 156,  395 => 154,  389 => 148,  383 => 146,  378 => 144,  372 => 133,  360 => 138,  354 => 137,  349 => 135,  338 => 127,  332 => 125,  326 => 123,  321 => 121,  315 => 113,  303 => 109,  257 => 91,  442 => 172,  438 => 171,  434 => 170,  422 => 165,  420 => 164,  416 => 162,  410 => 158,  404 => 156,  398 => 154,  392 => 152,  381 => 148,  367 => 141,  358 => 130,  330 => 124,  324 => 117,  310 => 117,  306 => 118,  248 => 101,  345 => 134,  339 => 125,  331 => 122,  323 => 140,  320 => 123,  288 => 109,  266 => 104,  291 => 113,  283 => 101,  271 => 118,  262 => 115,  239 => 95,  208 => 70,  316 => 122,  312 => 119,  308 => 111,  296 => 134,  265 => 106,  261 => 94,  256 => 100,  250 => 100,  236 => 89,  224 => 81,  176 => 68,  113 => 57,  202 => 70,  56 => 11,  304 => 114,  297 => 108,  259 => 93,  244 => 91,  228 => 82,  193 => 62,  90 => 33,  285 => 102,  281 => 122,  275 => 98,  269 => 101,  267 => 96,  251 => 90,  246 => 95,  234 => 114,  192 => 63,  298 => 103,  294 => 111,  278 => 102,  264 => 102,  255 => 101,  247 => 89,  243 => 86,  238 => 108,  218 => 74,  214 => 74,  206 => 70,  158 => 47,  146 => 79,  40 => 16,  286 => 99,  279 => 95,  274 => 94,  260 => 91,  252 => 93,  241 => 86,  237 => 85,  233 => 88,  231 => 82,  210 => 78,  195 => 67,  187 => 59,  181 => 55,  167 => 50,  137 => 51,  124 => 49,  97 => 33,  69 => 16,  53 => 11,  229 => 87,  221 => 85,  209 => 68,  203 => 65,  197 => 61,  174 => 52,  166 => 49,  142 => 54,  117 => 35,  62 => 16,  227 => 74,  223 => 73,  219 => 72,  213 => 69,  207 => 66,  190 => 59,  182 => 56,  168 => 50,  150 => 44,  110 => 42,  129 => 38,  87 => 38,  49 => 19,  134 => 38,  86 => 32,  77 => 36,  164 => 64,  148 => 45,  128 => 37,  199 => 63,  179 => 67,  169 => 62,  161 => 61,  107 => 32,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 166,  428 => 166,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 152,  396 => 153,  393 => 108,  390 => 107,  387 => 152,  382 => 105,  379 => 104,  375 => 147,  369 => 144,  366 => 132,  363 => 140,  357 => 138,  353 => 135,  350 => 128,  347 => 127,  344 => 129,  341 => 152,  335 => 124,  325 => 122,  318 => 119,  309 => 134,  305 => 110,  302 => 114,  293 => 106,  290 => 106,  284 => 106,  280 => 97,  272 => 95,  258 => 94,  254 => 91,  240 => 85,  235 => 91,  232 => 83,  226 => 78,  217 => 83,  200 => 82,  175 => 65,  173 => 53,  170 => 55,  156 => 49,  125 => 36,  99 => 39,  301 => 112,  295 => 96,  292 => 109,  289 => 104,  287 => 124,  282 => 107,  276 => 99,  273 => 98,  270 => 99,  268 => 93,  263 => 95,  249 => 88,  245 => 87,  230 => 106,  222 => 82,  220 => 90,  215 => 82,  211 => 67,  204 => 73,  198 => 66,  185 => 57,  183 => 69,  177 => 58,  160 => 49,  112 => 33,  82 => 30,  65 => 19,  38 => 6,  144 => 42,  141 => 43,  135 => 39,  126 => 46,  109 => 56,  103 => 40,  67 => 26,  61 => 17,  47 => 12,  91 => 26,  84 => 25,  94 => 27,  88 => 31,  59 => 13,  28 => 2,  225 => 86,  216 => 73,  212 => 88,  205 => 67,  201 => 74,  196 => 61,  194 => 72,  191 => 71,  189 => 70,  186 => 94,  180 => 54,  172 => 67,  159 => 59,  154 => 45,  147 => 55,  132 => 68,  127 => 39,  121 => 36,  118 => 44,  114 => 43,  104 => 30,  100 => 28,  78 => 25,  75 => 22,  71 => 30,  34 => 11,  105 => 31,  93 => 38,  79 => 32,  76 => 29,  72 => 21,  68 => 21,  58 => 26,  24 => 1,  27 => 7,  21 => 2,  44 => 17,  31 => 3,  26 => 5,  25 => 4,  19 => 1,  70 => 27,  63 => 25,  46 => 9,  22 => 2,  163 => 49,  155 => 46,  152 => 44,  149 => 43,  145 => 54,  139 => 53,  131 => 51,  123 => 36,  120 => 35,  115 => 34,  106 => 31,  101 => 35,  96 => 42,  83 => 24,  80 => 37,  74 => 23,  66 => 20,  55 => 22,  52 => 10,  50 => 10,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 63,  165 => 50,  162 => 60,  157 => 46,  153 => 57,  151 => 46,  143 => 41,  138 => 40,  136 => 42,  133 => 50,  130 => 40,  122 => 45,  119 => 34,  116 => 35,  111 => 32,  108 => 42,  102 => 43,  98 => 41,  95 => 28,  92 => 27,  89 => 28,  85 => 27,  81 => 26,  73 => 22,  64 => 31,  60 => 22,  57 => 16,  54 => 11,  51 => 11,  48 => 19,  45 => 8,  42 => 7,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
