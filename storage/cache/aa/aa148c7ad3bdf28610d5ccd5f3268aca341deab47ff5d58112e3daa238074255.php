<?php

/* OPC170_02/template/common/home.twig */
class __TwigTemplate_1a322955317223a2f65a659aaf47f639551844f8550f2a9d38b2fc69246add75 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"content-top\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 5
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t</div>
\t</div>
</div>
<div class=\"container\">
\t<div class=\"row\">
  \t";
        // line 11
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " left-column\">
\t";
        // line 20
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t</div>
    ";
        // line 22
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
";
        // line 25
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  53 => 17,  50 => 16,  47 => 15,  44 => 14,  41 => 13,  39 => 12,  35 => 11,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="content-top">*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			{{ content_top }}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="container">*/
/* 	<div class="row">*/
/*   	{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} left-column">*/
/* 	{{ content_bottom }}*/
/* 	</div>*/
/*     {{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* {{ footer }}*/
