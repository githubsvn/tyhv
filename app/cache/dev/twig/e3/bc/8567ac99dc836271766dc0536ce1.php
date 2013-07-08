<?php

/* SMAdminBundle:Twig:media.html.twig */
class __TwigTemplate_e3bc8567ac99dc836271766dc0536ce1 extends Twig_Template
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
        return array (  199 => 81,  179 => 69,  169 => 66,  161 => 63,  107 => 50,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 51,  284 => 36,  280 => 35,  272 => 33,  258 => 25,  254 => 24,  240 => 13,  235 => 12,  232 => 11,  226 => 5,  217 => 152,  200 => 136,  175 => 68,  173 => 104,  170 => 103,  156 => 97,  125 => 91,  99 => 87,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 34,  273 => 85,  270 => 84,  268 => 32,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 145,  211 => 69,  204 => 83,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 43,  65 => 16,  38 => 6,  144 => 50,  141 => 55,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  91 => 80,  84 => 28,  94 => 39,  88 => 27,  59 => 22,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 76,  189 => 77,  186 => 127,  180 => 119,  172 => 67,  159 => 98,  154 => 59,  147 => 59,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 89,  100 => 33,  78 => 42,  75 => 23,  71 => 65,  34 => 6,  105 => 24,  93 => 45,  79 => 72,  76 => 67,  72 => 14,  68 => 54,  58 => 31,  24 => 3,  27 => 6,  21 => 2,  44 => 12,  31 => 1,  26 => 3,  25 => 4,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 2,  163 => 63,  155 => 62,  152 => 61,  149 => 60,  145 => 46,  139 => 95,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 88,  96 => 86,  83 => 18,  80 => 24,  74 => 66,  66 => 36,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 121,  178 => 118,  171 => 62,  165 => 100,  162 => 57,  157 => 56,  153 => 96,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 93,  130 => 47,  122 => 90,  119 => 36,  116 => 52,  111 => 38,  108 => 37,  102 => 49,  98 => 48,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 40,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 39,  48 => 38,  45 => 8,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 7,);
    }
}
