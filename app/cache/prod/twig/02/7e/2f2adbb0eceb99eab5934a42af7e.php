<?php

/* SMAdminBundle:Media:index.html.twig */
class __TwigTemplate_027e2f2adbb0eceb99eab5934a42af7e extends Twig_Template
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
                { 'bSortable': false, 'aTargets': [ 1, 3, 4 ] }
            ],
        });
    } );
</script>

<h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Media List", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<div class=\"btn-group nav\">
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_new"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new entry", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
</div>

<table class=\"table table-bordered table-striped\" id=\"sortTable\">
    <thead>
        <tr>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created Time", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action", array(), "SMAdminBundle"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 37
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "        <tr>
            <td><a href=\"";
            // line 39
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</a></td>
            <td>
                <image src=\"";
            // line 41
            if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, ($_imgPath_ . $this->getAttribute($_entity_, "name")), "html", null, true);
            echo "\" width=\"100px\" height=\"100px\"/>
            </td>
            <td>";
            // line 43
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "createdat")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                ";
            // line 45
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if (($this->getAttribute($_entity_, "active") == 1)) {
                // line 46
                echo "                    <input type=\"checkbox\" checked=\"checked\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            } else {
                // line 48
                echo "                    <input type=\"checkbox\" class=\"defaultCheckBox\" disabled=\"true\"/>
                ";
            }
            // line 50
            echo "            </td>
            <td>
                <a href=\"";
            // line 52
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
                &nbsp; | &nbsp;
                <a class=\"delete\" rel=\"";
            // line 54
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete", array(), "SMAdminBundle"), "html", null, true);
            echo "</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </tbody>
</table>

";
        // line 62
        if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
        if (($_lastPage_ > 1)) {
            // line 63
            echo "<div class=\"pagination\" style=\"text-align: right;\">
    <ul>
        <li><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => 1)), "html", null, true);
            echo "\"><i class=\"icon-fast-backward\"></i></a></li>
        <li><a href=\"";
            // line 66
            if (isset($context["previousPage"])) { $_previousPage_ = $context["previousPage"]; } else { $_previousPage_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $_previousPage_)), "html", null, true);
            echo "\"><i class=\"icon-backward\"></i></a></li>
    ";
            // line 67
            if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $_lastPage_));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 68
                echo "      ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
                if (($_page_ == $_currentPage_)) {
                    // line 69
                    echo "        <li class=\"active\"><a href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $_page_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                } else {
                    // line 71
                    echo "        <li><a href=\"";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $_page_)), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 73
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        <li><a href=\"";
            if (isset($context["nextPage"])) { $_nextPage_ = $context["nextPage"]; } else { $_nextPage_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $_nextPage_)), "html", null, true);
            echo "\"><i class=\"icon-forward\"></i></a></li>
        <li><a href=\"";
            // line 75
            if (isset($context["lastPage"])) { $_lastPage_ = $context["lastPage"]; } else { $_lastPage_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => $_lastPage_)), "html", null, true);
            echo "\"><i class=\"icon-fast-forward\"></i></a></li>
    </ul>
</div>
";
        }
        // line 79
        echo "
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Media:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  77 => 20,  42 => 12,  23 => 3,  340 => 116,  331 => 112,  318 => 110,  307 => 108,  286 => 104,  275 => 102,  268 => 99,  263 => 95,  243 => 88,  190 => 69,  326 => 104,  305 => 97,  290 => 89,  285 => 88,  280 => 103,  261 => 78,  241 => 70,  237 => 69,  224 => 65,  142 => 51,  90 => 37,  334 => 109,  329 => 108,  323 => 104,  315 => 102,  311 => 98,  302 => 95,  297 => 94,  283 => 87,  267 => 80,  249 => 75,  244 => 74,  230 => 79,  223 => 67,  177 => 56,  116 => 43,  53 => 17,  44 => 8,  325 => 99,  316 => 95,  309 => 94,  292 => 92,  281 => 89,  276 => 88,  271 => 100,  265 => 86,  260 => 78,  256 => 83,  253 => 76,  214 => 67,  210 => 73,  206 => 76,  196 => 59,  78 => 35,  255 => 74,  251 => 75,  246 => 89,  232 => 68,  228 => 71,  254 => 91,  233 => 86,  231 => 72,  222 => 75,  208 => 58,  204 => 59,  191 => 56,  188 => 59,  185 => 68,  178 => 49,  149 => 42,  143 => 41,  132 => 42,  96 => 28,  169 => 63,  137 => 46,  129 => 40,  119 => 32,  154 => 50,  146 => 54,  141 => 40,  198 => 66,  181 => 68,  135 => 43,  127 => 41,  122 => 39,  86 => 25,  73 => 13,  55 => 22,  227 => 66,  221 => 80,  107 => 41,  67 => 29,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 137,  450 => 136,  442 => 122,  439 => 121,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 110,  399 => 109,  395 => 108,  390 => 107,  386 => 106,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 81,  361 => 80,  355 => 72,  351 => 71,  348 => 70,  345 => 69,  341 => 68,  338 => 110,  332 => 66,  322 => 103,  314 => 59,  287 => 52,  284 => 51,  278 => 86,  274 => 35,  270 => 34,  266 => 80,  262 => 32,  252 => 25,  211 => 61,  195 => 68,  193 => 72,  187 => 55,  184 => 69,  182 => 54,  164 => 62,  161 => 56,  140 => 46,  126 => 46,  106 => 30,  103 => 41,  100 => 29,  93 => 85,  74 => 18,  68 => 12,  51 => 10,  333 => 100,  327 => 96,  324 => 111,  320 => 94,  317 => 102,  312 => 90,  306 => 86,  303 => 96,  299 => 94,  296 => 106,  291 => 105,  277 => 79,  273 => 84,  258 => 75,  248 => 72,  245 => 72,  239 => 72,  234 => 69,  226 => 11,  216 => 74,  202 => 61,  199 => 61,  192 => 67,  165 => 62,  156 => 50,  134 => 50,  131 => 46,  120 => 39,  115 => 35,  82 => 22,  76 => 34,  61 => 18,  54 => 14,  171 => 65,  163 => 52,  159 => 58,  152 => 46,  138 => 52,  123 => 45,  117 => 31,  111 => 30,  101 => 34,  98 => 39,  83 => 33,  75 => 31,  71 => 30,  64 => 15,  43 => 15,  36 => 12,  104 => 32,  80 => 23,  63 => 30,  58 => 12,  40 => 6,  24 => 1,  94 => 25,  88 => 37,  48 => 12,  39 => 11,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 73,  240 => 87,  236 => 71,  229 => 84,  225 => 82,  220 => 5,  218 => 79,  215 => 60,  212 => 64,  209 => 77,  200 => 71,  194 => 57,  179 => 57,  176 => 67,  173 => 52,  166 => 57,  162 => 51,  157 => 60,  155 => 47,  151 => 50,  148 => 48,  145 => 47,  139 => 46,  128 => 41,  114 => 43,  109 => 34,  87 => 24,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 32,  97 => 31,  92 => 25,  89 => 24,  85 => 25,  69 => 17,  28 => 2,  57 => 11,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 62,  197 => 66,  189 => 64,  183 => 54,  180 => 67,  174 => 50,  170 => 58,  167 => 63,  158 => 46,  153 => 59,  150 => 44,  147 => 95,  144 => 47,  136 => 43,  133 => 49,  130 => 48,  124 => 39,  121 => 31,  113 => 36,  108 => 35,  105 => 31,  102 => 48,  99 => 30,  95 => 38,  91 => 27,  81 => 35,  70 => 30,  66 => 16,  62 => 22,  59 => 23,  56 => 23,  52 => 10,  49 => 19,  45 => 15,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
