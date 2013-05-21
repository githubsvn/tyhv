<?php

/* SMAdminBundle:Products:edit.html.twig */
class __TwigTemplate_8908ae0bdf4a8f7ea96381fd7e89483d extends Twig_Template
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
        echo "<h1>Product creation</h1>

<form id=\"frmProduct\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "branch"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "branch"), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "branch"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "productgroup"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "productgroup"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "productgroup"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "price"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "price"), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "price"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "unit"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "unit"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "unit"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "discount"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "discount"), 'errors');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "discount"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "amount"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "amount"), 'errors');
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "amount"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "thumb"), 'label');
        echo "</label>
            <div class=\"controls\">
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "thumb"), 'errors');
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "thumb"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\"></label>
            <div class=\"controls\">
                ";
        // line 74
        echo $this->env->getExtension('mtx.twig.show_image_extension')->showImages($this->getContext($context, "arrImgs"), $this->getContext($context, "imgPath"));
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">Images</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'errors');
        echo "
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "media_id"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
                    ";
        // line 84
        $context["selectName"] = $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "media_id"), "get", array(0 => "full_name"), "method");
        // line 85
        echo "                    ";
        echo $this->env->getExtension('sm.twig.media_extension')->selectMedia($this->getContext($context, "optMedias"), $this->getContext($context, "optMediaTypes"), $this->getContext($context, "selectName"), $this->getContext($context, "mediaPath"), array("multiple" => true));
        echo "
              </label>
            </div>
        </div>

        <hr />
        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 93
        $context["isActive"] = 1;
        // line 94
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 95
            echo "                      ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 96
                echo "                          <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 98
                echo "                          <li><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 100
            echo "                      ";
            $context["isActive"] = 2;
            // line 101
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 102
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 104
        $context["isActive"] = 1;
        // line 105
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "langList"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 106
            echo "                    ";
            $context["currentAL"] = null;
            // line 107
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "product_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["productsLanguage"]) {
                // line 108
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "productsLanguage"), "vars"), "value"), "language"), "id") == $this->getAttribute($this->getContext($context, "lang"), "id"))) {
                    // line 109
                    echo "                            ";
                    $context["currentAL"] = $this->getContext($context, "productsLanguage");
                    // line 110
                    echo "                        ";
                }
                // line 111
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productsLanguage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 112
            echo "                    ";
            if (($this->getContext($context, "isActive") == 1)) {
                // line 113
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 115
                echo "                        <div class=\"tab-pane\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lang"), "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 117
            echo "                            <fieldset>
                                ";
            // line 118
            if ((!(null === $this->getContext($context, "currentAL")))) {
                // line 119
                echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 120
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'label');
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 122
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'errors');
                echo "
                                            ";
                // line 123
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 124
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 126
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "name"), 'widget');
                    echo "
                                            ";
                }
                // line 128
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 132
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'label');
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 134
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'errors');
                echo "
                                            ";
                // line 135
                if (($this->getAttribute($this->getContext($context, "defaultLanguage"), "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "currentAL"), "vars"), "value"), "language"), "name"))) {
                    // line 136
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 138
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "currentAL"), "description"), 'widget');
                    echo "
                                            ";
                }
                // line 140
                echo "                                        </div>
                                    </div>

                                ";
            }
            // line 144
            echo "                            </fieldset>
                        </div>
                    ";
            // line 146
            $context["isActive"] = 2;
            // line 147
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 148
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
            <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_products", array("page" => 1)), "html", null, true);
        echo "\" class=\"btn\">Back To List</a>
        </div>

    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Products:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 154,  382 => 152,  376 => 148,  370 => 147,  368 => 146,  364 => 144,  358 => 140,  352 => 138,  346 => 136,  344 => 135,  340 => 134,  335 => 132,  329 => 128,  323 => 126,  317 => 124,  315 => 123,  311 => 122,  306 => 120,  303 => 119,  301 => 118,  298 => 117,  292 => 115,  286 => 113,  283 => 112,  277 => 111,  274 => 110,  271 => 109,  268 => 108,  263 => 107,  260 => 106,  255 => 105,  253 => 104,  249 => 102,  243 => 101,  240 => 100,  232 => 98,  224 => 96,  221 => 95,  216 => 94,  214 => 93,  202 => 85,  200 => 84,  196 => 83,  192 => 82,  181 => 74,  171 => 67,  167 => 66,  162 => 64,  154 => 59,  150 => 58,  145 => 56,  137 => 51,  133 => 50,  128 => 48,  120 => 43,  116 => 42,  111 => 40,  103 => 35,  99 => 34,  94 => 32,  86 => 27,  82 => 26,  77 => 24,  69 => 19,  65 => 18,  60 => 16,  52 => 11,  48 => 10,  43 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
