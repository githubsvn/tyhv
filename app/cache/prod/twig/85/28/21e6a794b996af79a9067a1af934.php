<?php

/* SMAdminBundle:Company:edit.html.twig */
class __TwigTemplate_852821e6a794b996af79a9067a1af934 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Edit", array(), "SMAdminBundle"), "html", null, true);
        echo "</h2>

<form action=\"";
        // line 5
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"form-horizontal\">
    <fieldset>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Company Type", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'errors');
        echo "
                ";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Charter Capital", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "charter_capital"), 'errors');
        echo "
                ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "charter_capital"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Phone", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "phone"), 'errors');
        echo "
                ";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "phone"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Fax", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "fax"), 'errors');
        echo "
                ";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "fax"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mst", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "mst"), 'errors');
        echo "
                ";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "mst"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email"), 'errors');
        echo "
                ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email"), 'widget');
        echo "
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Website", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 57
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "website"), 'errors');
        echo "
                ";
        // line 58
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "website"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logo", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 65
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "logo"), 'errors');
        echo "
                ";
        // line 66
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "logo"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\"></label>
            <div class=\"controls\">
                ";
        // line 73
        if (isset($context["arrImgs"])) { $_arrImgs_ = $context["arrImgs"]; } else { $_arrImgs_ = null; }
        if (isset($context["imgPath"])) { $_imgPath_ = $context["imgPath"]; } else { $_imgPath_ = null; }
        echo $this->env->getExtension('mtx.twig.show_image_extension')->showImages($_arrImgs_, $_imgPath_);
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status", array(), "SMAdminBundle"), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                ";
        // line 80
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'errors');
        echo "
                ";
        // line 81
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status"), 'widget');
        echo "
            </div>
        </div>

        <hr />
        <div class=\"tabbable\"> <!-- Only required for left/right tabs -->
            <ul class=\"nav nav-tabs\">
                  ";
        // line 88
        $context["isActive"] = 1;
        // line 89
        echo "                  ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 90
            echo "                      ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 91
                echo "                          <li class=\"active\"><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            } else {
                // line 93
                echo "                          <li><a href=\"#tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "name"), "html", null, true);
                echo "</a></li>
                      ";
            }
            // line 95
            echo "                      ";
            $context["isActive"] = 2;
            // line 96
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            </ul>
            <div class=\"tab-content\">
                ";
        // line 99
        $context["isActive"] = 1;
        // line 100
        echo "                ";
        if (isset($context["langList"])) { $_langList_ = $context["langList"]; } else { $_langList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langList_);
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 101
            echo "                    ";
            $context["currentAL"] = null;
            // line 102
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "company_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["companyLanguage"]) {
                // line 103
                echo "                        ";
                if (isset($context["companyLanguage"])) { $_companyLanguage_ = $context["companyLanguage"]; } else { $_companyLanguage_ = null; }
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_companyLanguage_, "vars"), "value"), "language"), "id") == $this->getAttribute($_lang_, "id"))) {
                    // line 104
                    echo "                            ";
                    if (isset($context["companyLanguage"])) { $_companyLanguage_ = $context["companyLanguage"]; } else { $_companyLanguage_ = null; }
                    $context["currentAL"] = $_companyLanguage_;
                    // line 105
                    echo "                        ";
                }
                // line 106
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['companyLanguage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                    ";
            if (isset($context["isActive"])) { $_isActive_ = $context["isActive"]; } else { $_isActive_ = null; }
            if (($_isActive_ == 1)) {
                // line 108
                echo "                        <div class=\"tab-pane active\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 110
                echo "                        <div class=\"tab-pane\" id=\"tab";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "id"), "html", null, true);
                echo "\">
                    ";
            }
            // line 112
            echo "                            <fieldset>
                                ";
            // line 113
            if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
            if ((!(null === $_currentAL_))) {
                // line 114
                echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 117
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'errors');
                echo "
                                            ";
                // line 118
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 119
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget', array("attr" => array("required" => "required")));
                    echo "
                                            ";
                } else {
                    // line 121
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "name"), 'widget');
                    echo "
                                            ";
                }
                // line 123
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Address", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 129
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "address"), 'errors');
                echo "
                                            ";
                // line 130
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 131
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "address"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 133
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "address"), 'widget');
                    echo "
                                            ";
                }
                // line 135
                echo "                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 140
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "description"), 'errors');
                echo "
                                            ";
                // line 141
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 142
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "description"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 144
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "description"), 'widget');
                    echo "
                                            ";
                }
                // line 146
                echo "                                        </div>
                                    </div>

                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"input01\">";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Representation", array(), "SMAdminBundle"), "html", null, true);
                echo "</label>
                                        <div class=\"controls\">
                                            ";
                // line 152
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "representation"), 'errors');
                echo "
                                            ";
                // line 153
                if (isset($context["defaultLanguage"])) { $_defaultLanguage_ = $context["defaultLanguage"]; } else { $_defaultLanguage_ = null; }
                if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                if (($this->getAttribute($_defaultLanguage_, "name") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_currentAL_, "vars"), "value"), "language"), "name"))) {
                    // line 154
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "representation"), 'widget');
                    echo "
                                            ";
                } else {
                    // line 156
                    echo "                                                ";
                    if (isset($context["currentAL"])) { $_currentAL_ = $context["currentAL"]; } else { $_currentAL_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_currentAL_, "representation"), 'widget');
                    echo "
                                            ";
                }
                // line 158
                echo "                                        </div>
                                    </div>

                                ";
            }
            // line 162
            echo "                            </fieldset>
                        </div>
                    ";
            // line 164
            $context["isActive"] = 2;
            // line 165
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "            </div>
        </div>

        <div class=\"form-actions\">
            ";
        // line 170
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save", array(), "SMAdminBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_company", array("page" => 1)), "html", null, true);
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
        return "SMAdminBundle:Company:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 172,  496 => 171,  491 => 170,  485 => 166,  479 => 165,  477 => 164,  473 => 162,  467 => 158,  460 => 156,  449 => 153,  444 => 152,  433 => 146,  426 => 144,  419 => 142,  415 => 141,  410 => 140,  400 => 135,  393 => 133,  382 => 130,  372 => 127,  366 => 123,  359 => 121,  352 => 119,  272 => 97,  377 => 129,  370 => 122,  353 => 119,  342 => 117,  300 => 102,  207 => 72,  344 => 111,  321 => 113,  308 => 96,  289 => 99,  279 => 97,  242 => 72,  358 => 119,  354 => 118,  349 => 117,  343 => 117,  337 => 116,  335 => 114,  298 => 104,  293 => 103,  269 => 84,  264 => 90,  259 => 77,  219 => 70,  205 => 62,  160 => 55,  72 => 34,  175 => 66,  77 => 35,  42 => 7,  23 => 3,  340 => 110,  331 => 109,  318 => 110,  307 => 108,  286 => 98,  275 => 95,  268 => 99,  263 => 95,  243 => 91,  190 => 69,  326 => 114,  305 => 106,  290 => 89,  285 => 88,  280 => 87,  261 => 78,  241 => 70,  237 => 69,  224 => 65,  142 => 48,  90 => 26,  334 => 109,  329 => 112,  323 => 104,  315 => 108,  311 => 107,  302 => 105,  297 => 94,  283 => 87,  267 => 91,  249 => 75,  244 => 74,  230 => 80,  223 => 71,  177 => 56,  116 => 43,  53 => 17,  44 => 9,  325 => 99,  316 => 95,  309 => 106,  292 => 100,  281 => 89,  276 => 99,  271 => 93,  265 => 86,  260 => 78,  256 => 80,  253 => 93,  214 => 69,  210 => 78,  206 => 76,  196 => 59,  78 => 35,  255 => 88,  251 => 75,  246 => 85,  232 => 73,  228 => 71,  254 => 91,  233 => 89,  231 => 88,  222 => 78,  208 => 68,  204 => 59,  191 => 59,  188 => 62,  185 => 58,  178 => 49,  149 => 42,  143 => 41,  132 => 42,  96 => 28,  169 => 63,  137 => 47,  129 => 40,  119 => 32,  154 => 55,  146 => 48,  141 => 40,  198 => 66,  181 => 68,  135 => 43,  127 => 49,  122 => 39,  86 => 25,  73 => 13,  55 => 13,  227 => 79,  221 => 80,  107 => 35,  67 => 17,  470 => 141,  466 => 140,  462 => 139,  458 => 138,  453 => 154,  450 => 136,  442 => 122,  439 => 150,  434 => 118,  430 => 116,  424 => 115,  421 => 114,  411 => 111,  405 => 138,  399 => 109,  395 => 108,  390 => 107,  386 => 131,  381 => 105,  378 => 104,  374 => 84,  367 => 82,  364 => 121,  361 => 80,  355 => 72,  351 => 71,  348 => 118,  345 => 69,  341 => 68,  338 => 115,  332 => 113,  322 => 110,  314 => 110,  287 => 102,  284 => 101,  278 => 100,  274 => 35,  270 => 34,  266 => 96,  262 => 32,  252 => 87,  211 => 73,  195 => 68,  193 => 63,  187 => 62,  184 => 65,  182 => 54,  164 => 57,  161 => 56,  140 => 47,  126 => 46,  106 => 30,  103 => 32,  100 => 29,  93 => 26,  74 => 18,  68 => 12,  51 => 19,  333 => 100,  327 => 96,  324 => 111,  320 => 94,  317 => 111,  312 => 101,  306 => 86,  303 => 95,  299 => 94,  296 => 106,  291 => 105,  277 => 79,  273 => 81,  258 => 75,  248 => 72,  245 => 73,  239 => 90,  234 => 69,  226 => 72,  216 => 74,  202 => 61,  199 => 70,  192 => 67,  165 => 57,  156 => 50,  134 => 50,  131 => 43,  120 => 38,  115 => 36,  82 => 36,  76 => 19,  61 => 15,  54 => 14,  171 => 65,  163 => 55,  159 => 58,  152 => 51,  138 => 51,  123 => 40,  117 => 44,  111 => 30,  101 => 34,  98 => 29,  83 => 23,  75 => 19,  71 => 18,  64 => 31,  43 => 15,  36 => 12,  104 => 32,  80 => 23,  63 => 30,  58 => 28,  40 => 8,  24 => 2,  94 => 25,  88 => 25,  48 => 10,  39 => 6,  35 => 11,  31 => 3,  21 => 2,  46 => 8,  29 => 3,  32 => 4,  250 => 75,  240 => 87,  236 => 82,  229 => 68,  225 => 82,  220 => 81,  218 => 65,  215 => 80,  212 => 64,  209 => 63,  200 => 73,  194 => 60,  179 => 63,  176 => 59,  173 => 54,  166 => 57,  162 => 51,  157 => 60,  155 => 47,  151 => 54,  148 => 48,  145 => 47,  139 => 46,  128 => 42,  114 => 35,  109 => 34,  87 => 40,  84 => 24,  79 => 32,  65 => 16,  34 => 5,  26 => 6,  125 => 34,  118 => 36,  110 => 32,  97 => 29,  92 => 41,  89 => 38,  85 => 24,  69 => 17,  28 => 2,  57 => 11,  50 => 20,  47 => 8,  38 => 6,  27 => 7,  22 => 2,  25 => 3,  19 => 1,  203 => 71,  197 => 65,  189 => 66,  183 => 57,  180 => 67,  174 => 59,  170 => 58,  167 => 63,  158 => 46,  153 => 59,  150 => 49,  147 => 50,  144 => 49,  136 => 46,  133 => 43,  130 => 48,  124 => 39,  121 => 37,  113 => 35,  108 => 34,  105 => 31,  102 => 31,  99 => 41,  95 => 27,  91 => 27,  81 => 35,  70 => 30,  66 => 16,  62 => 16,  59 => 23,  56 => 14,  52 => 10,  49 => 19,  45 => 8,  41 => 27,  37 => 5,  33 => 4,  30 => 4,);
    }
}
