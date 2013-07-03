<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_a0c3e1361f08d2792245dea9826ccea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ($this->getContext($context, "image_path")) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ($this->getContext($context, "link_url")) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (($this->getContext($context, "link_filter")) ? ($this->env->getExtension('liip_imagine')->filter($this->getContext($context, "link_url"), $this->getContext($context, "link_filter"))) : ($this->getContext($context, "link_url"))), "html", null, true);
                echo "\" ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "link_attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getContext($context, "image_path"), $this->getContext($context, "image_filter")), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "image_attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ($this->getContext($context, "link_url")) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  81 => 14,  77 => 12,  75 => 11,  58 => 9,  55 => 8,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,  320 => 120,  316 => 119,  312 => 118,  306 => 114,  300 => 113,  298 => 112,  294 => 110,  286 => 105,  282 => 104,  277 => 102,  269 => 97,  265 => 96,  260 => 94,  254 => 90,  248 => 88,  242 => 86,  240 => 85,  236 => 84,  231 => 82,  228 => 81,  226 => 80,  223 => 79,  217 => 77,  211 => 75,  208 => 74,  202 => 73,  199 => 72,  196 => 71,  193 => 70,  188 => 69,  185 => 68,  180 => 67,  178 => 66,  174 => 64,  168 => 63,  165 => 62,  157 => 60,  149 => 58,  146 => 57,  141 => 56,  139 => 55,  127 => 47,  125 => 46,  121 => 45,  117 => 44,  111 => 41,  103 => 36,  99 => 35,  89 => 28,  85 => 16,  80 => 25,  72 => 20,  68 => 19,  63 => 17,  54 => 11,  50 => 10,  45 => 8,  37 => 6,  31 => 3,  28 => 2,);
    }
}
