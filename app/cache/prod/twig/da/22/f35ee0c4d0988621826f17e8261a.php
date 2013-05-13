<?php

/* SMAdminBundle:Branch:new.html.twig */
class __TwigTemplate_da22f35ee0c4d0988621826f17e8261a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch_new"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />

        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 20
        $context["isActive"] = 1;
        // line 21
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 22
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 23
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 25
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 27
            echo "                      ";
            $context["isActive"] = 2;
            // line 28
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 31
        $context["isActive"] = 1;
        // line 32
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 33
            echo "                    ";
            $context["currentAL"] = null;
            // line 34
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "branch_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["branchLanguage"]) {
                // line 35
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "branchLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 36
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "branchLanguage");
                    // line 37
                    echo "                        ";
                }
                // line 38
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchLanguage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 40
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 42
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 44
            echo "                            <fieldset>
                                ";
            // line 45
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 46
                echo "                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"input01\">";
                // line 47
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 49
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                        ";
                // line 50
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 51
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                        ";
                } else {
                    // line 53
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                        ";
                }
                // line 55
                echo "                                    </div>
                                </div>

                                ";
            }
            // line 59
            echo "                            </fieldset>
                        </div>
                    ";
            // line 61
            $context["isActive"] = 2;
            // line 62
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 63
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
            <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_branch", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">Back To List</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Branch:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 69,  203 => 67,  197 => 63,  191 => 62,  189 => 61,  185 => 59,  179 => 55,  173 => 53,  167 => 51,  165 => 50,  161 => 49,  156 => 47,  153 => 46,  151 => 45,  148 => 44,  142 => 42,  136 => 40,  133 => 39,  127 => 38,  124 => 37,  121 => 36,  118 => 35,  113 => 34,  110 => 33,  105 => 32,  103 => 31,  99 => 29,  93 => 28,  90 => 27,  82 => 25,  74 => 23,  71 => 22,  66 => 21,  64 => 20,  53 => 12,  49 => 11,  44 => 9,  35 => 5,  31 => 3,  28 => 2,);
    }
}
