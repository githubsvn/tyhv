<?php

/* SMAdminBundle:Twig:media.html.twig */
class __TwigTemplate_cd9c2dfc170aad97a00deed19f1facd2 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
            \$(\"#typeImg\").bind(\"change\", function(){
            var type = \$(this).attr('value');
            var url = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_get_media"), "html", null, true);
        echo "\" + '/' + type;
            \$.ajax({url:url, success:function(data){
                \$('.thumbnail, .popup').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    var str = '<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaPath"), "html", null, true);
        echo "' + item.name +'\" width=\"100px\" height=\"100px;\"/>';
                    var id = '#label_' + item.id;
                    \$(id).append(str);
                });
            }});

            //Call ajax
            \$('#ajaxModal').modal();
            \$('#ajaxModal').ajaxStart(function() {
                \$(this).show();
            })
            .ajaxStop(function() {
                \$('#ajaxModal').modal('hide')
            });
        });

    });
</script>

<a href=\"#backgroundModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
<!-- Modal -->
<div id=\"backgroundModal\" class=\"modal hide fade\" style=\"width: 580px;\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h3 id=\"backgroundModalLabel\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image", array(), "SMAdminBundle"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"modal-body\">
        <div style=\"text-align: center;\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type of media", array(), "SMAdminBundle"), "html", null, true);
        echo " :
            <select name=\"typeImg\" id=\"typeImg\">
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optMediaTypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 43
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "opt"), "getCurrentLanguage"), "getTreeName"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>
        </div>
        <ul class=\"thumbnails\">
            ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optMedias"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 49
            echo "                <li class=\"thumbImg\" style=\"text-align: center;\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "opt"), "category"), "id"), "html", null, true);
            echo "\">
                    <label id=\"label_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" class=\"thumbnail popup\" for=\"bg_";
            echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" style=\"border: 0px;\">
                    </label>
                    <input id=\"bg_";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" name=\"bg_";
            echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
            echo "\" imagepath=\"";
            echo twig_escape_filter($this->env, ($this->getContext($context, "mediaPath") . $this->getAttribute($this->getContext($context, "opt"), "name")), "html", null, true);
            echo "\" type=\"";
            if ($this->getAttribute($this->getContext($context, "options", true), "multiple", array(), "any", true, true)) {
                if ($this->getAttribute($this->getContext($context, "options"), "multiple")) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
            } else {
                echo "radio";
            }
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" style=\"margin-left: 40px;\"/>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </ul>
    </div>
    <div class=\"modal-footer\">
        <div class=\"row\">
            ";
        // line 59
        if ($this->getAttribute($this->getContext($context, "options", true), "multiple", array(), "any", true, true)) {
            // line 60
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "options"), "multiple")) {
                // line 61
                echo "                <div class=\"span2\" style=\"width: 200px;\">
                        <a class=\"btn\" onclick=\"checkAll('";
                // line 62
                echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
                echo "');\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select All", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                        <a class=\"btn\" onclick=\"clearAll('";
                // line 63
                echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
                echo "');\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Clear All", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 66
            echo "            ";
        }
        // line 67
        echo "            <div class=\"pull-right\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"applySelect('";
        // line 69
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
        echo "')\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>

<div>
    <ul class=\"thumbnails\" id=\"preview_";
        // line 76
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
        echo "\">
    </ul>
</div>

<script type=\"text/javascript\" >
    var mediaPath = \"";
        // line 81
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaPath"), "html", null, true);
        echo "\";
    \$(function() {
        initSelect('";
        // line 83
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
        echo "');
        \$('#backgroundModal').on('hidden', function () {
        });
    });
</script>


<script type=\"text/javascript\">
    \$(document).ready(function() {
        var imgType = 0;

        //get imgType
        \$(\"li.thumbImg\").each(function(){
            var currentLi = \$(this);
            var input = \$(this).find(\"input\");
            if (\$(\"#\"+input.attr('id')).is(':checked')) {
                imgType = currentLi.attr(\"data-type\");
            }
        });

        if (!imgType) {
            imgType = \$(\"#typeImg\").val();
        } else {
            \$(\"#typeImg\").val(imgType);
        }

        \$(\"li.thumbImg\").each(function(){
            var currentLi = \$(this);
            var liType;
            liType = currentLi.attr(\"data-type\");

            if (liType == imgType) {
                currentLi.css('display', 'inline');
            } else {
                currentLi.css('display', 'none');
            }
        });

        \$(\"#typeImg\").bind(\"change\", function(e) {
            var imgType = \$(this).val();
            \$(\"li.thumbImg\").each(function(){
                var currentLi = \$(this);
                var liType = currentLi.attr(\"data-type\");
                if (liType == imgType) {
                    currentLi.css('display', 'inline');
                } else {
                    currentLi.css('display', 'none');
                }
            });
        });
    } );
</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Twig:media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 83,  199 => 81,  191 => 76,  175 => 68,  172 => 67,  155 => 62,  107 => 50,  102 => 49,  98 => 48,  93 => 45,  82 => 43,  78 => 42,  73 => 40,  36 => 12,  27 => 6,  21 => 2,  19 => 1,  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1106 => 316,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1038 => 303,  1033 => 302,  1031 => 301,  1028 => 300,  1019 => 294,  1013 => 292,  1010 => 291,  1005 => 290,  1003 => 289,  1000 => 288,  993 => 283,  986 => 281,  983 => 277,  979 => 276,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  926 => 252,  924 => 251,  921 => 250,  913 => 246,  911 => 242,  909 => 241,  906 => 240,  885 => 234,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  837 => 214,  829 => 210,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  808 => 201,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  776 => 187,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  749 => 175,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  720 => 162,  717 => 161,  715 => 160,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  690 => 151,  687 => 150,  681 => 148,  678 => 147,  676 => 146,  673 => 145,  665 => 139,  663 => 138,  662 => 137,  661 => 136,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  644 => 130,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  609 => 117,  606 => 116,  604 => 115,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  523 => 93,  521 => 92,  516 => 91,  513 => 90,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  379 => 47,  369 => 43,  367 => 42,  364 => 41,  356 => 37,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  334 => 27,  329 => 26,  321 => 23,  316 => 22,  311 => 20,  295 => 16,  292 => 15,  287 => 13,  278 => 8,  272 => 6,  269 => 5,  267 => 4,  264 => 3,  260 => 332,  258 => 331,  254 => 329,  252 => 328,  248 => 326,  246 => 325,  244 => 324,  241 => 323,  238 => 321,  236 => 315,  233 => 314,  231 => 308,  226 => 300,  223 => 299,  220 => 297,  218 => 288,  215 => 287,  213 => 272,  210 => 271,  208 => 266,  205 => 265,  202 => 263,  197 => 259,  192 => 249,  190 => 240,  187 => 239,  184 => 237,  182 => 223,  179 => 69,  176 => 220,  171 => 213,  169 => 66,  166 => 206,  161 => 63,  159 => 193,  154 => 186,  151 => 185,  149 => 60,  146 => 178,  144 => 173,  141 => 55,  136 => 165,  134 => 158,  131 => 157,  129 => 145,  126 => 144,  124 => 129,  121 => 128,  119 => 114,  116 => 52,  114 => 108,  111 => 107,  109 => 102,  106 => 101,  104 => 87,  99 => 68,  94 => 57,  91 => 56,  89 => 47,  86 => 46,  76 => 31,  74 => 20,  69 => 13,  66 => 36,  64 => 3,  61 => 2,  85 => 16,  81 => 40,  77 => 12,  75 => 11,  58 => 31,  55 => 8,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,  357 => 136,  353 => 36,  349 => 134,  343 => 130,  337 => 129,  335 => 128,  331 => 126,  323 => 24,  319 => 120,  314 => 21,  308 => 114,  302 => 112,  296 => 110,  294 => 109,  290 => 14,  285 => 106,  282 => 105,  280 => 104,  277 => 103,  271 => 101,  265 => 99,  262 => 98,  256 => 330,  253 => 96,  250 => 327,  247 => 94,  242 => 93,  239 => 92,  234 => 91,  232 => 90,  228 => 307,  222 => 87,  219 => 86,  211 => 84,  203 => 82,  200 => 260,  195 => 250,  193 => 79,  180 => 70,  178 => 69,  174 => 214,  170 => 67,  164 => 200,  156 => 192,  152 => 61,  147 => 59,  139 => 166,  135 => 50,  130 => 48,  122 => 43,  118 => 42,  113 => 40,  105 => 35,  101 => 86,  96 => 67,  88 => 17,  84 => 41,  79 => 32,  71 => 19,  67 => 18,  62 => 16,  54 => 11,  50 => 10,  45 => 8,  37 => 6,  31 => 3,  28 => 2,);
    }
}
