<?php

/* OPC170_02/template/common/footer_top.twig */
class __TwigTemplate_74f8ed6c00b15dd442a3da22989ddfa60124b9211ba97593a8d4819aee59536f extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "<aside id=\"footer-top\">
<div class=\"container\">
<div class=\"row\">
\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 6
                echo "  ";
                echo $context["module"];
                echo "
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</div>
</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/common/footer_top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* <aside id="footer-top">*/
/* <div class="container">*/
/* <div class="row">*/
/* 	{% for module in modules %}*/
/*   {{ module }}*/
/*  {% endfor %}*/
/* </div>*/
/* </div>*/
/* </aside>*/
/* {% endif %}*/
/* */
