<?php

/* OPC170_02/template/common/header_right.twig */
class __TwigTemplate_b0abc01575857a712967a6d6e682529bc8ac7bbcf23c85d54fa569e622bd500b extends Twig_Template
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
            echo "<aside id=\"header-right\">
\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 4
                echo "  ";
                echo $context["module"];
                echo "
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/common/header_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* <aside id="header-right">*/
/* 	{% for module in modules %}*/
/*   {{ module }}*/
/*  {% endfor %}*/
/* </aside>*/
/* {% endif %}*/
/* */
