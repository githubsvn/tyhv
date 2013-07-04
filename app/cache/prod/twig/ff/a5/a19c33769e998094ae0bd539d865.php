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
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 26
            echo "                ";
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            if (($_lang_ == $this->getAttribute($_opt_, "id"))) {
                // line 27
                echo "                ";
                if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_opt_, "name"), "html", null, true);
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
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 33
            echo "                <li><a href=\"";
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => 1, "lang" => $this->getAttribute($_opt_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_opt_, "name"), "html", null, true);
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
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "        <tr>
            <td>";
            // line 52
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 54
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ((!(null === $this->getAttribute($_entity_, "getCurrentLanguage")))) {
                // line 55
                echo "                    ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "getCurrentLanguage"), "name"), 50), "html", null, true);
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
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "createdAt")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 62
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (($this->getAttribute($_entity_, "status") == 1)) {
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
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 70
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ((!(null === $this->getAttribute($_entity_, "getCurrentLanguage")))) {
                // line 71
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 72
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype_delete", array("id" => $this->getAttribute($this->getAttribute($_entity_, "getCurrentLanguage"), "getId"))), "html", null, true);
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
        if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
        if (($_lastPage_ > 1)) {
            // line 83
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 85
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => 1, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 86
            if (isset($context["previousPage"])) { $_previousPage_ = $context["previousPage"]; } else { $_previousPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $_previousPage_, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 87
            if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $_lastPage_));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 88
                echo "      ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
                if (($_page_ == $_currentPage_)) {
                    // line 89
                    echo "        <li class=\"active\"><a href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $_page_, "lang" => $_lang_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 91
                    echo "        <li><a href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $_page_, "lang" => $_lang_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
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
            if (isset($context["nextPage"])) { $_nextPage_ = $context["nextPage"]; } else { $_nextPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $_nextPage_, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 95
            if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_companytype", array("page" => $_lastPage_, "lang" => $_lang_)), "html", null, true);
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
        return array (  172 => 48,  168 => 59,  247 => 75,  235 => 83,  213 => 59,  186 => 50,  423 => 134,  416 => 133,  383 => 127,  417 => 143,  412 => 142,  406 => 138,  394 => 134,  385 => 129,  380 => 128,  375 => 126,  369 => 122,  362 => 120,  346 => 113,  425 => 146,  408 => 138,  401 => 136,  397 => 135,  392 => 134,  387 => 132,  363 => 122,  330 => 113,  313 => 102,  201 => 57,  20 => 1,  356 => 140,  301 => 99,  295 => 95,  238 => 102,  294 => 124,  288 => 94,  404 => 131,  371 => 123,  350 => 119,  339 => 117,  304 => 99,  282 => 93,  257 => 84,  217 => 61,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 154,  441 => 148,  437 => 147,  432 => 138,  427 => 147,  414 => 138,  407 => 136,  403 => 135,  398 => 136,  388 => 128,  365 => 142,  360 => 121,  347 => 118,  336 => 112,  310 => 101,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 153,  433 => 148,  426 => 144,  419 => 142,  415 => 140,  410 => 132,  400 => 137,  393 => 132,  382 => 125,  372 => 125,  366 => 147,  359 => 121,  352 => 119,  272 => 92,  377 => 152,  370 => 124,  353 => 120,  342 => 134,  300 => 102,  207 => 71,  344 => 117,  321 => 106,  308 => 105,  289 => 95,  279 => 98,  242 => 89,  358 => 122,  354 => 143,  349 => 140,  343 => 117,  337 => 115,  335 => 110,  298 => 98,  293 => 105,  269 => 95,  264 => 109,  259 => 108,  219 => 74,  205 => 71,  160 => 42,  72 => 19,  175 => 82,  77 => 22,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 107,  307 => 103,  286 => 98,  275 => 96,  268 => 89,  263 => 95,  243 => 91,  190 => 51,  326 => 112,  305 => 100,  290 => 101,  285 => 94,  280 => 87,  261 => 90,  241 => 71,  237 => 69,  224 => 63,  142 => 41,  90 => 32,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 107,  297 => 101,  283 => 94,  267 => 118,  249 => 82,  244 => 86,  230 => 72,  223 => 63,  177 => 60,  116 => 32,  53 => 11,  44 => 17,  325 => 108,  316 => 95,  309 => 94,  292 => 96,  281 => 99,  276 => 91,  271 => 91,  265 => 86,  260 => 89,  256 => 89,  253 => 83,  214 => 61,  210 => 72,  206 => 58,  196 => 55,  78 => 23,  255 => 88,  251 => 88,  246 => 90,  232 => 82,  228 => 67,  254 => 95,  233 => 68,  231 => 76,  222 => 63,  208 => 72,  204 => 70,  191 => 53,  188 => 63,  185 => 63,  178 => 49,  149 => 39,  143 => 38,  132 => 43,  96 => 28,  169 => 47,  137 => 72,  129 => 45,  119 => 56,  154 => 54,  146 => 52,  141 => 51,  198 => 70,  181 => 49,  135 => 40,  127 => 47,  122 => 33,  86 => 30,  73 => 27,  55 => 22,  227 => 78,  221 => 61,  107 => 40,  67 => 29,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 152,  434 => 118,  430 => 116,  424 => 115,  421 => 144,  411 => 111,  405 => 138,  399 => 130,  395 => 127,  390 => 107,  386 => 131,  381 => 128,  378 => 126,  374 => 126,  367 => 124,  364 => 121,  361 => 141,  355 => 117,  351 => 117,  348 => 118,  345 => 69,  341 => 114,  338 => 111,  332 => 109,  322 => 110,  314 => 106,  287 => 100,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 76,  211 => 73,  195 => 55,  193 => 67,  187 => 52,  184 => 67,  182 => 62,  164 => 57,  161 => 56,  140 => 50,  126 => 45,  106 => 30,  103 => 32,  100 => 31,  93 => 42,  74 => 28,  68 => 26,  51 => 10,  333 => 100,  327 => 110,  324 => 111,  320 => 111,  317 => 104,  312 => 129,  306 => 86,  303 => 93,  299 => 106,  296 => 96,  291 => 104,  277 => 112,  273 => 90,  258 => 96,  248 => 94,  245 => 87,  239 => 85,  234 => 73,  226 => 108,  216 => 62,  202 => 97,  199 => 70,  192 => 54,  165 => 58,  156 => 44,  134 => 47,  131 => 35,  120 => 45,  115 => 36,  82 => 25,  76 => 19,  61 => 15,  54 => 24,  171 => 60,  163 => 46,  159 => 45,  152 => 54,  138 => 39,  123 => 36,  117 => 42,  111 => 33,  101 => 27,  98 => 29,  83 => 35,  75 => 22,  71 => 21,  64 => 26,  43 => 15,  36 => 12,  104 => 28,  80 => 29,  63 => 25,  58 => 12,  40 => 16,  24 => 2,  94 => 38,  88 => 28,  48 => 12,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 87,  240 => 86,  236 => 67,  229 => 67,  225 => 75,  220 => 81,  218 => 74,  215 => 60,  212 => 64,  209 => 57,  200 => 57,  194 => 69,  179 => 50,  176 => 47,  173 => 60,  166 => 58,  162 => 46,  157 => 55,  155 => 55,  151 => 43,  148 => 52,  145 => 51,  139 => 51,  128 => 50,  114 => 31,  109 => 34,  87 => 31,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 5,  125 => 44,  118 => 43,  110 => 29,  97 => 30,  92 => 31,  89 => 28,  85 => 24,  69 => 20,  28 => 2,  57 => 12,  50 => 20,  47 => 9,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 69,  189 => 65,  183 => 63,  180 => 66,  174 => 61,  170 => 59,  167 => 44,  158 => 56,  153 => 40,  150 => 43,  147 => 50,  144 => 42,  136 => 36,  133 => 46,  130 => 46,  124 => 36,  121 => 43,  113 => 42,  108 => 35,  105 => 33,  102 => 39,  99 => 33,  95 => 33,  91 => 25,  81 => 23,  70 => 20,  66 => 16,  62 => 26,  59 => 16,  56 => 11,  52 => 11,  49 => 19,  45 => 9,  41 => 9,  37 => 5,  33 => 4,  30 => 4,);
    }
}
