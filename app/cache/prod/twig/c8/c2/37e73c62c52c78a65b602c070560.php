<?php

/* SMAdminBundle:Menu:edit.html.twig */
class __TwigTemplate_c8c237e73c62c52c78a65b602c070560 extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var type = \$('#sm_bundle_adminbundle_menutype_type').attr('value');
        var link = ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "mnuTypeLink"), "html", null, true);
        echo ";

        if (type != link) {
            \$(\"#url\").hide();
            \$(\"#param\").show();
            \$(\"input[id=sm_bundle_adminbundle_menutype_url]\").attr('value','');
        } else {
            \$(\"#url\").show();
            \$(\"#param\").hide();
        }



        \$(\"#sm_bundle_adminbundle_menutype_type\").bind(\"change\", function(){
            var mnuTypeText = ";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "mnuTypeText"), "html", null, true);
        echo ";
            var mnuTypeLink = ";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "mnuTypeLink"), "html", null, true);
        echo ";
            var typeMenu = \$(this).attr('value');

            if (typeMenu == mnuTypeText || typeMenu == mnuTypeLink) {
                \$('#sm_bundle_adminbundle_menutype_param').removeAttr(\"required\");
            } else {
                \$(\"#sm_bundle_adminbundle_menutype_param\").attr(\"required\", \"true\");
            }

            if (typeMenu == mnuTypeLink) {
                \$(\"#url\").show();
                \$(\"#param\").hide();
            } else {
                \$(\"#url\").hide();
                \$(\"#param\").show();
            }

            var urlMenu = \"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_get_param"), "html", null, true);
        echo "\" + '/' + typeMenu;
            \$.ajax({url:urlMenu, success:function(data){
                //remove all option of the select
                \$('#sm_bundle_adminbundle_menutype_param').children().remove();
                //set new option for select
                var jsonData = JSON.parse(data);
                \$.each(jsonData, function(index, item) {
                    \$(\"#sm_bundle_adminbundle_menutype_param\").append(\"<option value=\" + item.id + \">\" + item.name + \"</option>\");
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

<form action=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Parent", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'errors');
        echo "
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "parent"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'errors');
        echo "
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"url\">
            <label class=\"control-label\" for=\"input01\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'errors');
        echo "
                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\" id=\"param\">
            <label class=\"control-label\" for=\"input01\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu Param", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "param"), 'errors');
        echo "
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "param"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 105
        $context["isActive"] = 1;
        // line 106
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 107
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 108
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 110
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 112
            echo "                      ";
            $context["isActive"] = 2;
            // line 113
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 114
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 116
        $context["isActive"] = 1;
        // line 117
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 118
            echo "                    ";
            $context["currentAL"] = null;
            // line 119
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "menu_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 120
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ctLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 121
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "ctLanguage");
                    // line 122
                    echo "                        ";
                }
                // line 123
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctLanguage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 124
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 125
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 127
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 129
            echo "                            <fieldset>
                                ";
            // line 130
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 131
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 134
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 135
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 136
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 138
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 140
                echo "                                    </div>
                                </div>
                                ";
            }
            // line 143
            echo "                            </fieldset>
                        </div>
                    ";
            // line 145
            $context["isActive"] = 2;
            // line 146
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 147
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back to the list", array(), "SMAdminBundle"), "html", null, true);
        echo "</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Menu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 153,  341 => 152,  337 => 151,  331 => 147,  325 => 146,  323 => 145,  319 => 143,  314 => 140,  308 => 138,  302 => 136,  300 => 135,  296 => 134,  291 => 132,  288 => 131,  286 => 130,  283 => 129,  277 => 127,  271 => 125,  268 => 124,  262 => 123,  259 => 122,  256 => 121,  253 => 120,  248 => 119,  245 => 118,  240 => 117,  238 => 116,  234 => 114,  228 => 113,  225 => 112,  217 => 110,  209 => 108,  206 => 107,  201 => 106,  199 => 105,  188 => 97,  184 => 96,  179 => 94,  171 => 89,  167 => 88,  162 => 86,  155 => 82,  151 => 81,  146 => 79,  139 => 75,  135 => 74,  130 => 72,  123 => 68,  119 => 67,  114 => 65,  106 => 62,  80 => 39,  60 => 22,  56 => 21,  39 => 7,  31 => 3,  28 => 2,);
    }
}
