<?php

/* SMAdminBundle:Products:index.html.twig */
class __TwigTemplate_f016e218c9224f6cf8290035d833b826 extends Twig_Template
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

    \$(document).ready(function() {
        \$(\"#btnReset\").click(function() {
            \$(\"#name\").val('');
            \$(\"#branch\").val('');
            \$(\"#productgroup\").val('');
        });
    } );

</script>

<h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Product List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"nav\">
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
    <div class=\"btn-group pull-right\">
        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">
            ";
        // line 35
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 36
            echo "                ";
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            if (($_lang_ == $this->getAttribute($_opt_, "id"))) {
                // line 37
                echo "                ";
                if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_opt_, "name"), "html", null, true);
                echo " <span class=\"caret\"></span>
                ";
            }
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
        // line 42
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 43
            echo "                <li><a href=\"";
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => 1, "lang" => $this->getAttribute($_opt_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["opt"])) { $_opt_ = $context["opt"]; } else { $_opt_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_opt_, "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </ul>
    </div>
    <div style=\"clear: both; margin-top: 10px;\"></div>
    <div class=\"btn-group pull-center\">
        <form class=\"well form-search\" method=\"POST\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products"), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo " : <input type=\"text\" name=\"name\" id=\"name\" value=\"";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Branch", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"branch\" id=\"branch\">
                        <option value=\"\">-- ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 53
        if (isset($context["optBranchs"])) { $_optBranchs_ = $context["optBranchs"]; } else { $_optBranchs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_optBranchs_);
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 54
            echo "                            ";
            if (isset($context["obj"])) { $_obj_ = $context["obj"]; } else { $_obj_ = null; }
            if ((!(null === $this->getAttribute($_obj_, "getCurrentLanguage")))) {
                // line 55
                echo "                                <option value=\"";
                if (isset($context["obj"])) { $_obj_ = $context["obj"]; } else { $_obj_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_obj_, "id"), "html", null, true);
                echo "\" ";
                if (isset($context["obj"])) { $_obj_ = $context["obj"]; } else { $_obj_ = null; }
                if (isset($context["branchId"])) { $_branchId_ = $context["branchId"]; } else { $_branchId_ = null; }
                if (($this->getAttribute($_obj_, "id") == $_branchId_)) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 56
                if (isset($context["obj"])) { $_obj_ = $context["obj"]; } else { $_obj_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($_obj_, "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 59
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </select>
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Product Group", array(), "SMAdminBundle"), "html", null, true);
        echo " : <select name=\"productgroup\" id=\"productgroup\">
                        <option value=\"\">-- ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo " -- </option>
                        ";
        // line 63
        if (isset($context["optProductGroups"])) { $_optProductGroups_ = $context["optProductGroups"]; } else { $_optProductGroups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_optProductGroups_);
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 64
            echo "                            ";
            if (isset($context["obj"])) { $_obj_ = $context["obj"]; } else { $_obj_ = null; }
            if ((!(null === $this->getAttribute($_obj_, "getCurrentLanguage")))) {
                // line 65
                echo "                                <option value=\"";
                if (isset($context["obj"])) { $_obj_ = $context["obj"]; } else { $_obj_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_obj_, "id"), "html", null, true);
                echo "\" ";
                if (isset($context["obj"])) { $_obj_ = $context["obj"]; } else { $_obj_ = null; }
                if (isset($context["productgroupId"])) { $_productgroupId_ = $context["productgroupId"]; } else { $_productgroupId_ = null; }
                if (($this->getAttribute($_obj_, "id") == $_productgroupId_)) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                    ";
                // line 66
                if (isset($context["obj"])) { $_obj_ = $context["obj"]; } else { $_obj_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($_obj_, "getCurrentLanguage"), "name"), 50), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 69
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </select>
            <input type=\"hidden\" name=\"language\" value=\"";
        // line 71
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $_lang_, "html", null, true);
        echo "\"/>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn\" style=\"width: 100px;\" id=\"btnReset\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>

<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 89
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 90
            echo "        <tr>
            <td>";
            // line 91
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "product"), "id"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 93
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ((!(null === $this->getAttribute($_entity_, "name")))) {
                // line 94
                echo "                    ";
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_entity_, "name"), 50), "html", null, true);
                echo "
                ";
            } else {
                // line 96
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Not set value in this language", array(), "SMAdminBundle"), "html", null, true);
                echo "</span>
                ";
            }
            // line 98
            echo "            </td>
            <td>";
            // line 99
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($this->getAttribute($_entity_, "product"), "createdAt")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "product"), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 101
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (($this->getAttribute($this->getAttribute($_entity_, "product"), "status") == 1)) {
                // line 102
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 104
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 106
            echo "            </td>
            <td>
                <a href=\"";
            // line 108
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_edit", array("id" => $this->getAttribute($this->getAttribute($_entity_, "product"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                ";
            // line 109
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ((!(null === $this->getAttribute($_entity_, "language")))) {
                // line 110
                echo "                    &nbsp; | &nbsp;
                    <a href=\"#\" rel=\"";
                // line 111
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"icon-remove\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                ";
            }
            // line 113
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "    </tbody>
</table>

";
        // line 121
        if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
        if (($_lastPage_ > 1)) {
            // line 122
            echo "<div class=\"pagination pull-right\">
    <ul>
        <li><a href=\"";
            // line 124
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => 1, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 125
            if (isset($context["previousPage"])) { $_previousPage_ = $context["previousPage"]; } else { $_previousPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $_previousPage_, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 126
            if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $_lastPage_));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 127
                echo "      ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
                if (($_page_ == $_currentPage_)) {
                    // line 128
                    echo "        <li class=\"active\"><a href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $_page_, "lang" => $_lang_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 130
                    echo "        <li><a href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $_page_, "lang" => $_lang_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 132
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "        <li><a href=\"";
            if (isset($context["nextPage"])) { $_nextPage_ = $context["nextPage"]; } else { $_nextPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $_nextPage_, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 134
            if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => $_lastPage_, "lang" => $_lang_)), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 138
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Products:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 134,  416 => 133,  383 => 127,  417 => 143,  412 => 142,  406 => 138,  394 => 134,  385 => 129,  380 => 128,  375 => 126,  369 => 122,  362 => 120,  346 => 113,  425 => 146,  408 => 138,  401 => 136,  397 => 135,  392 => 134,  387 => 132,  363 => 122,  330 => 113,  313 => 102,  201 => 74,  20 => 1,  356 => 140,  301 => 99,  295 => 117,  238 => 102,  294 => 124,  288 => 115,  404 => 131,  371 => 123,  350 => 119,  339 => 117,  304 => 120,  282 => 93,  257 => 84,  217 => 78,  488 => 166,  484 => 165,  465 => 158,  461 => 156,  455 => 152,  448 => 154,  441 => 148,  437 => 147,  432 => 138,  427 => 147,  414 => 138,  407 => 136,  403 => 135,  398 => 136,  388 => 128,  365 => 142,  360 => 121,  347 => 118,  336 => 112,  310 => 101,  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 164,  477 => 164,  473 => 160,  467 => 159,  460 => 156,  449 => 153,  444 => 153,  433 => 148,  426 => 144,  419 => 142,  415 => 140,  410 => 132,  400 => 137,  393 => 132,  382 => 125,  372 => 125,  366 => 147,  359 => 121,  352 => 119,  272 => 95,  377 => 152,  370 => 124,  353 => 120,  342 => 134,  300 => 102,  207 => 74,  344 => 117,  321 => 106,  308 => 105,  289 => 97,  279 => 98,  242 => 89,  358 => 122,  354 => 143,  349 => 140,  343 => 117,  337 => 115,  335 => 110,  298 => 98,  293 => 105,  269 => 95,  264 => 109,  259 => 108,  219 => 98,  205 => 95,  160 => 56,  72 => 34,  175 => 82,  77 => 35,  42 => 7,  23 => 3,  340 => 113,  331 => 135,  318 => 107,  307 => 103,  286 => 98,  275 => 96,  268 => 89,  263 => 95,  243 => 91,  190 => 67,  326 => 112,  305 => 104,  290 => 101,  285 => 94,  280 => 87,  261 => 85,  241 => 87,  237 => 69,  224 => 65,  142 => 48,  90 => 39,  334 => 109,  329 => 112,  323 => 108,  315 => 130,  311 => 107,  302 => 107,  297 => 101,  283 => 87,  267 => 118,  249 => 82,  244 => 105,  230 => 72,  223 => 71,  177 => 60,  116 => 43,  53 => 17,  44 => 17,  325 => 108,  316 => 95,  309 => 94,  292 => 96,  281 => 99,  276 => 91,  271 => 87,  265 => 86,  260 => 85,  256 => 92,  253 => 83,  214 => 77,  210 => 65,  206 => 63,  196 => 59,  78 => 36,  255 => 76,  251 => 75,  246 => 90,  232 => 68,  228 => 71,  254 => 95,  233 => 67,  231 => 72,  222 => 70,  208 => 58,  204 => 75,  191 => 53,  188 => 63,  185 => 66,  178 => 49,  149 => 42,  143 => 53,  132 => 43,  96 => 40,  169 => 58,  137 => 72,  129 => 36,  119 => 34,  154 => 44,  146 => 50,  141 => 48,  198 => 72,  181 => 68,  135 => 51,  127 => 42,  122 => 40,  86 => 39,  73 => 35,  55 => 13,  227 => 84,  221 => 75,  107 => 35,  67 => 27,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 152,  434 => 118,  430 => 116,  424 => 115,  421 => 144,  411 => 111,  405 => 138,  399 => 130,  395 => 127,  390 => 107,  386 => 131,  381 => 128,  378 => 126,  374 => 126,  367 => 124,  364 => 121,  361 => 141,  355 => 117,  351 => 117,  348 => 118,  345 => 69,  341 => 114,  338 => 111,  332 => 109,  322 => 110,  314 => 106,  287 => 100,  284 => 101,  278 => 100,  274 => 35,  270 => 119,  266 => 94,  262 => 32,  252 => 87,  211 => 79,  195 => 68,  193 => 64,  187 => 55,  184 => 62,  182 => 54,  164 => 56,  161 => 56,  140 => 40,  126 => 63,  106 => 30,  103 => 32,  100 => 42,  93 => 42,  74 => 18,  68 => 12,  51 => 10,  333 => 100,  327 => 110,  324 => 111,  320 => 111,  317 => 104,  312 => 129,  306 => 86,  303 => 93,  299 => 106,  296 => 102,  291 => 104,  277 => 112,  273 => 90,  258 => 96,  248 => 94,  245 => 81,  239 => 74,  234 => 73,  226 => 108,  216 => 69,  202 => 97,  199 => 60,  192 => 94,  165 => 58,  156 => 50,  134 => 39,  131 => 64,  120 => 38,  115 => 36,  82 => 36,  76 => 19,  61 => 15,  54 => 24,  171 => 59,  163 => 55,  159 => 55,  152 => 55,  138 => 39,  123 => 40,  117 => 31,  111 => 30,  101 => 44,  98 => 29,  83 => 37,  75 => 19,  71 => 18,  64 => 31,  43 => 15,  36 => 12,  104 => 32,  80 => 23,  63 => 13,  58 => 25,  40 => 16,  24 => 2,  94 => 27,  88 => 25,  48 => 10,  39 => 7,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 73,  240 => 70,  236 => 88,  229 => 100,  225 => 71,  220 => 81,  218 => 69,  215 => 60,  212 => 64,  209 => 66,  200 => 73,  194 => 54,  179 => 64,  176 => 59,  173 => 86,  166 => 58,  162 => 77,  157 => 75,  155 => 79,  151 => 51,  148 => 54,  145 => 47,  139 => 52,  128 => 50,  114 => 35,  109 => 34,  87 => 27,  84 => 24,  79 => 36,  65 => 32,  34 => 5,  26 => 5,  125 => 34,  118 => 45,  110 => 51,  97 => 43,  92 => 41,  89 => 26,  85 => 24,  69 => 14,  28 => 2,  57 => 11,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 65,  189 => 67,  183 => 54,  180 => 61,  174 => 50,  170 => 59,  167 => 48,  158 => 46,  153 => 59,  150 => 49,  147 => 50,  144 => 70,  136 => 46,  133 => 43,  130 => 48,  124 => 49,  121 => 61,  113 => 35,  108 => 34,  105 => 43,  102 => 46,  99 => 30,  95 => 27,  91 => 19,  81 => 35,  70 => 18,  66 => 16,  62 => 26,  59 => 29,  56 => 11,  52 => 10,  49 => 19,  45 => 9,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
