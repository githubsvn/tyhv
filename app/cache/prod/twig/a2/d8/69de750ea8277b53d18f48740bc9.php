<?php

/* SMAdminBundle:Media:edit.html.twig */
class __TwigTemplate_a2d869de750ea8277b53d18f48740bc9 extends Twig_Template
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
        echo "<h1>Media edit</h1>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">Image</label>
            <div class=\"controls\">
                <image src=\"/uploads/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "\" width=\"100px\" height=\"100px\"/>
                <div style=\"display: none;\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "name"), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "width"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "width"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "width"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "height"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "height"), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "height"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "active"), 'label');
        echo "</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "active"), 'errors');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "active"), 'widget');
        echo "
              </label>
            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_media", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">Back To List</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Media:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 58,  142 => 56,  133 => 50,  129 => 49,  123 => 46,  116 => 42,  112 => 41,  107 => 39,  100 => 35,  96 => 34,  91 => 32,  84 => 28,  80 => 27,  75 => 25,  67 => 20,  62 => 18,  52 => 11,  48 => 10,  43 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
