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
        echo "<a href=\"#backgroundModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
<!-- Modal -->
<div id=\"backgroundModal\" class=\"modal hide fade\" style=\"width: 580px;\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h3 id=\"backgroundModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image", array(), "SMAdminBundle"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"modal-body\">
        <div style=\"text-align: center;\">
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type of media", array(), "SMAdminBundle"), "html", null, true);
        echo " :
            <select name=\"typeImg\" id=\"typeImg\">
                ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optMediaTypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 14
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "opt"), "getCurrentLanguage"), "getTreeName"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "            </select>
        </div>
        <ul class=\"thumbnails\">
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "optMedias"));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 20
            echo "                <li class=\"thumbImg\" style=\"text-align: center;\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "opt"), "category"), "id"), "html", null, true);
            echo "\">
                    <label class=\"thumbnail\" for=\"bg_";
            // line 21
            echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "opt"), "id"), "html", null, true);
            echo "\" style=\"border: 0px;\">
                        <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, ($this->getContext($context, "mediaPath") . $this->getAttribute($this->getContext($context, "opt"), "name")), "html", null, true);
            echo "\" width=\"100px\" height=\"100px;\"/>
                    </label>
                    <input id=\"bg_";
            // line 24
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
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "        </ul>
    </div>
    <div class=\"modal-footer\">
        <div class=\"row\">
            ";
        // line 31
        if ($this->getAttribute($this->getContext($context, "options", true), "multiple", array(), "any", true, true)) {
            // line 32
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "options"), "multiple")) {
                // line 33
                echo "                <div class=\"span2\" style=\"width: 200px;\">
                        <a class=\"btn\" onclick=\"checkAll('";
                // line 34
                echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
                echo "');\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select All", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                        <a class=\"btn\" onclick=\"clearAll('";
                // line 35
                echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
                echo "');\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Clear All", array(), "SMAdminBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 38
            echo "            ";
        }
        // line 39
        echo "            <div class=\"pull-right\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" data-dismiss=\"modal\" onclick=\"applySelect('";
        // line 41
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
        // line 48
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaName"), "html", null, true);
        echo "\">
    </ul>
</div>

<script type=\"text/javascript\" >
    var mediaPath = \"";
        // line 53
        echo twig_escape_filter($this->env, $this->getContext($context, "mediaPath"), "html", null, true);
        echo "\";
    \$(function() {
        initSelect('";
        // line 55
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
        return array (  170 => 55,  165 => 53,  157 => 48,  145 => 41,  141 => 40,  138 => 39,  121 => 34,  118 => 33,  115 => 32,  113 => 31,  107 => 27,  82 => 24,  77 => 22,  66 => 20,  57 => 16,  46 => 14,  42 => 13,  30 => 7,  21 => 2,  34 => 6,  29 => 4,  26 => 3,  23 => 2,  19 => 1,  298 => 110,  294 => 109,  290 => 108,  284 => 104,  278 => 103,  276 => 102,  272 => 100,  264 => 95,  260 => 94,  255 => 92,  247 => 87,  243 => 86,  238 => 84,  232 => 80,  226 => 78,  220 => 76,  218 => 75,  214 => 74,  209 => 72,  206 => 71,  204 => 70,  201 => 69,  195 => 67,  189 => 65,  186 => 64,  180 => 63,  177 => 62,  174 => 61,  171 => 60,  166 => 59,  163 => 58,  158 => 57,  156 => 56,  152 => 54,  146 => 53,  143 => 52,  135 => 38,  127 => 35,  124 => 47,  119 => 46,  117 => 45,  105 => 37,  103 => 36,  99 => 35,  95 => 34,  89 => 31,  81 => 26,  71 => 21,  67 => 18,  62 => 19,  54 => 11,  50 => 10,  45 => 8,  37 => 11,  31 => 3,  28 => 2,);
    }
}
