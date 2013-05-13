<?php

/* SMAdminBundle:Branch:edit.html.twig */
class __TwigTemplate_9d7f80fe27a9b3ed115b0feb46d37050 extends Twig_Template
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
        echo "<h1>Branch creation</h1>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 19
        $context["isActive"] = 1;
        // line 20
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 21
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 22
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 24
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 26
            echo "                      ";
            $context["isActive"] = 2;
            // line 27
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 30
        $context["isActive"] = 1;
        // line 31
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 32
            echo "                    ";
            $context["currentAL"] = null;
            // line 33
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "branch_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["ctLanguage"]) {
                // line 34
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "ctLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 35
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "ctLanguage");
                    // line 36
                    echo "                        ";
                }
                // line 37
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ctLanguage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 39
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 41
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 43
            echo "                            <fieldset>
                                ";
            // line 44
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 45
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 46
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 48
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 49
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 50
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 52
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 54
                echo "                                    </div>
                                </div>
                                ";
            }
            // line 57
            echo "                            </fieldset>
                        </div>
                    ";
            // line 59
            $context["isActive"] = 2;
            // line 60
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
            <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">Back To List</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Branch:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 67,  201 => 65,  195 => 61,  189 => 60,  187 => 59,  183 => 57,  178 => 54,  172 => 52,  166 => 50,  164 => 49,  160 => 48,  155 => 46,  152 => 45,  150 => 44,  147 => 43,  141 => 41,  135 => 39,  132 => 38,  126 => 37,  123 => 36,  120 => 35,  117 => 34,  112 => 33,  109 => 32,  104 => 31,  102 => 30,  98 => 28,  92 => 27,  89 => 26,  81 => 24,  73 => 22,  70 => 21,  65 => 20,  63 => 19,  52 => 11,  48 => 10,  43 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
