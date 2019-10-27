<?php

/* OPC170_02/template/extension/module/html.twig */
class __TwigTemplate_d0a5f50c98d64bf8bd7fe9338c3c8363cf24b7734c65f5eb6b21436c7416fd0b extends Twig_Template
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
        echo "<div class=\"html-content\">
";
        // line 2
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 3
            echo "  <div class=\"box-heading\"><h3>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3></div>
  ";
        }
        // line 5
        echo "  ";
        if ((isset($context["html"]) ? $context["html"] : null)) {
            // line 6
            echo "  <div class=\"box-content\">";
            echo (isset($context["html"]) ? $context["html"] : null);
            echo "</div>
  ";
        }
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="html-content">*/
/* {% if heading_title %}*/
/*   <div class="box-heading"><h3>{{ heading_title }}</h3></div>*/
/*   {% endif %}*/
/*   {% if html %}*/
/*   <div class="box-content">{{ html }}</div>*/
/*   {% endif %}*/
/* </div>*/
/* */
