<?php

/* OPC170_02/template/extension/module/tt_category_feature.twig */
class __TwigTemplate_0c80466794145e56aeec8a396f577e18e806954c87cb355998e2440d60de8382 extends Twig_Template
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
        echo "<div class=\"tt-category-featured\">
<div class=\"customNavigation\">
\t<a class=\"btn prev ttfcat_prev\"></a>
\t<a class=\"btn next ttfcat_next\"></a>
</div>
<div class=\"box-heading\"><h3>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3></div>
<div class=\"ttfcat-items\">
<div class=\"row\">
<div class=\"category-feature tt-carousel\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "\t  <div class=\"item\">
\t\t<div class=\"content\">
\t\t  <div class=\"image col-xs-6 col-sm-6\">
\t\t\t<a href=\"";
            // line 14
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">
\t\t\t\t<img src=\"";
            // line 15
            echo $this->getAttribute($context["category"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["category"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["category"], "name", array());
            echo "\" class=\"img-responsive\" />
\t\t\t</a>
\t\t  </div>
\t\t  <div class=\"caption col-xs-6 col-sm-6\">
\t\t\t<div class=\"cat-title\">
\t\t\t\t<h4><a href=\"";
            // line 20
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a></h4>
\t\t\t</div>
\t\t\t<div class=\"cat-sub\">
\t\t\t  ";
            // line 23
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 24
                echo "\t\t\t  <ul>
\t\t\t  ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 26
                    echo "\t\t\t  <li><a href=\"";
                    echo $this->getAttribute($context["child"], "href", array());
                    echo "\" class=\"list-group-item\">";
                    echo $this->getAttribute($context["child"], "name", array());
                    echo "</a></li>
\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t  </ul>
\t\t\t  ";
            }
            // line 30
            echo "\t\t   </div>
\t\t  </div> <!-- Caption END -->
\t\t</div>
\t  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/tt_category_feature.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  90 => 30,  86 => 28,  75 => 26,  71 => 25,  68 => 24,  66 => 23,  58 => 20,  46 => 15,  42 => 14,  37 => 11,  33 => 10,  26 => 6,  19 => 1,);
    }
}
/* <div class="tt-category-featured">*/
/* <div class="customNavigation">*/
/* 	<a class="btn prev ttfcat_prev"></a>*/
/* 	<a class="btn next ttfcat_next"></a>*/
/* </div>*/
/* <div class="box-heading"><h3>{{ heading_title }}</h3></div>*/
/* <div class="ttfcat-items">*/
/* <div class="row">*/
/* <div class="category-feature tt-carousel">*/
/*   {% for category in categories %}*/
/* 	  <div class="item">*/
/* 		<div class="content">*/
/* 		  <div class="image col-xs-6 col-sm-6">*/
/* 			<a href="{{ category.href }}">*/
/* 				<img src="{{ category.thumb }}" alt="{{ category.name }}" title="{{ category.name }}" class="img-responsive" />*/
/* 			</a>*/
/* 		  </div>*/
/* 		  <div class="caption col-xs-6 col-sm-6">*/
/* 			<div class="cat-title">*/
/* 				<h4><a href="{{ category.href }}">{{ category.name }}</a></h4>*/
/* 			</div>*/
/* 			<div class="cat-sub">*/
/* 			  {% if category.children %}*/
/* 			  <ul>*/
/* 			  {% for child in category.children %}*/
/* 			  <li><a href="{{ child.href }}" class="list-group-item">{{ child.name }}</a></li>*/
/* 			  {% endfor %}*/
/* 			  </ul>*/
/* 			  {% endif %}*/
/* 		   </div>*/
/* 		  </div> <!-- Caption END -->*/
/* 		</div>*/
/* 	  </div>*/
/*   {% endfor %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
