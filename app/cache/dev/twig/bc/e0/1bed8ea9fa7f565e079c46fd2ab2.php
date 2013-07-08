<?php

/* SMAdminBundle:Security:login.html.twig */
class __TwigTemplate_bce01bed8ea9fa7f565e079c46fd2ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMAdminBundle::layout.login.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMAdminBundle::layout.login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<form class=\"form-horizontal form-login\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_admin_login_check"), "html", null, true);
        echo "\" method=\"post\">
    <fieldset>
        <legend>System Login</legend>
        ";
        // line 6
        if ($this->getContext($context, "error")) {
            // line 7
            echo "            <div class=\"alert alert-error\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 11
        echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <div class=\"input-prepend\">
                    <span class=\"add-on\">
                        <i class=\"icon-user\"></i>
                    </span>
                        <input class=\"span3\" id=\"username\" type=\"text\" placeholder=\"Username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>
        <div class=\"control-group\">
            <div class=\"controls\">
                <div class=\"input-prepend\">
                    <span class=\"add-on\">
                        <i class=\"icon-lock\"></i>
                    </span>
                    <input class=\"span3\" id=\"password\" type=\"password\" placeholder=\"Password\" name=\"_password\" >
                </div>
            </div>
        </div>
        <div>
            <label for=\"remember_me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" />
                Keep me logged in
            </label>
        </div>
    </fieldset>
    <div class=\"form-actions\">
        <button name=\"login\" type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"Loading...\" id=\"form-login-btnLogin\">Login</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "SMAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  286 => 99,  279 => 95,  274 => 94,  260 => 91,  252 => 89,  241 => 86,  237 => 85,  233 => 83,  231 => 82,  210 => 72,  195 => 67,  187 => 63,  181 => 60,  167 => 54,  137 => 42,  124 => 37,  97 => 27,  69 => 16,  53 => 11,  229 => 76,  221 => 74,  209 => 69,  203 => 66,  197 => 62,  174 => 54,  166 => 51,  142 => 44,  117 => 35,  62 => 16,  227 => 74,  223 => 73,  219 => 72,  213 => 68,  207 => 71,  190 => 59,  182 => 56,  168 => 51,  150 => 45,  110 => 31,  129 => 39,  87 => 28,  49 => 11,  134 => 46,  86 => 25,  77 => 24,  164 => 60,  148 => 53,  128 => 40,  199 => 69,  179 => 56,  169 => 52,  161 => 63,  107 => 33,  23 => 2,  464 => 150,  460 => 149,  456 => 148,  452 => 147,  447 => 146,  444 => 145,  436 => 122,  433 => 121,  428 => 118,  424 => 116,  418 => 115,  415 => 114,  406 => 111,  401 => 110,  396 => 109,  393 => 108,  390 => 107,  387 => 106,  382 => 105,  379 => 104,  375 => 84,  369 => 82,  366 => 81,  363 => 80,  357 => 72,  353 => 71,  350 => 70,  347 => 69,  344 => 68,  341 => 67,  335 => 66,  325 => 61,  318 => 59,  309 => 57,  305 => 55,  302 => 54,  293 => 52,  290 => 51,  284 => 36,  280 => 35,  272 => 33,  258 => 25,  254 => 24,  240 => 13,  235 => 12,  232 => 11,  226 => 78,  217 => 74,  200 => 136,  175 => 65,  173 => 53,  170 => 55,  156 => 49,  125 => 43,  99 => 31,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 34,  273 => 85,  270 => 84,  268 => 93,  263 => 80,  249 => 88,  245 => 87,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 83,  198 => 63,  185 => 62,  183 => 57,  177 => 58,  160 => 49,  112 => 38,  82 => 27,  65 => 14,  38 => 6,  144 => 44,  141 => 43,  135 => 41,  126 => 45,  109 => 36,  103 => 35,  67 => 18,  61 => 17,  47 => 12,  91 => 29,  84 => 19,  94 => 39,  88 => 28,  59 => 13,  28 => 2,  225 => 75,  216 => 90,  212 => 88,  205 => 70,  201 => 64,  196 => 61,  194 => 62,  191 => 65,  189 => 77,  186 => 127,  180 => 119,  172 => 67,  159 => 50,  154 => 48,  147 => 46,  132 => 46,  127 => 39,  121 => 36,  118 => 39,  114 => 38,  104 => 89,  100 => 32,  78 => 42,  75 => 23,  71 => 19,  34 => 6,  105 => 41,  93 => 26,  79 => 32,  76 => 67,  72 => 14,  68 => 21,  58 => 31,  24 => 3,  27 => 6,  21 => 2,  44 => 12,  31 => 3,  26 => 3,  25 => 4,  19 => 1,  70 => 18,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 57,  152 => 61,  149 => 52,  145 => 45,  139 => 43,  131 => 40,  123 => 39,  120 => 37,  115 => 43,  106 => 30,  101 => 28,  96 => 31,  83 => 27,  80 => 24,  74 => 66,  66 => 17,  55 => 12,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  37 => 5,  35 => 5,  32 => 4,  29 => 4,  184 => 57,  178 => 59,  171 => 53,  165 => 50,  162 => 57,  157 => 56,  153 => 46,  151 => 46,  143 => 44,  138 => 42,  136 => 42,  133 => 93,  130 => 40,  122 => 38,  119 => 44,  116 => 35,  111 => 35,  108 => 34,  102 => 40,  98 => 39,  95 => 34,  92 => 30,  89 => 29,  85 => 24,  81 => 26,  73 => 17,  64 => 17,  60 => 23,  57 => 17,  54 => 11,  51 => 13,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 12,  33 => 4,  30 => 7,);
    }
}
