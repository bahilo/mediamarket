<?php

/* OPC170_02/template/extension/module/category.twig */
class __TwigTemplate_5314b3b948f9b920654556c55c4da72d1d56c8ecb56aa36b151b4e7f0a29f3d8 extends Twig_Template
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
        echo "<div class=\"panel panel-default category-treeview\">
<div class=\"panel-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
\t<ul class=\"list-group\">
\t  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "\t  ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                echo " 
\t  \t<li class=\"category-li category-active\">
\t\t  <a href=\"";
                // line 7
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a> 
\t\t  ";
                // line 8
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 9
                    echo "\t\t  <ul>
\t\t\t  ";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 11
                        echo "\t\t\t  ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 12
                            echo "\t\t\t  \t<li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item current-child-item active\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
\t\t\t  ";
                        } else {
                            // line 13
                            echo " 
\t\t\t  \t<li><a href=\"";
                            // line 14
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item current-child-item\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
\t\t\t  ";
                        }
                        // line 16
                        echo "\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "\t\t  </ul>
\t\t  ";
                }
                // line 19
                echo "\t\t</li>
\t  ";
            } else {
                // line 21
                echo "\t    <li class=\"category-li\">
\t\t\t  \t<a href=\"";
                // line 22
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
\t\t\t\t<!-- Display all category - child items list -->
\t\t\t\t";
                // line 24
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 25
                    echo "\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 27
                        echo "\t\t\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\" class=\"list-group-item child-item\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "\t\t\t\t</ul>
\t\t\t  ";
                }
                // line 31
                echo "\t\t\t  </li>
\t  ";
            }
            // line 33
            echo "\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  125 => 33,  121 => 31,  117 => 29,  106 => 27,  102 => 26,  99 => 25,  97 => 24,  90 => 22,  87 => 21,  83 => 19,  79 => 17,  73 => 16,  66 => 14,  63 => 13,  55 => 12,  52 => 11,  48 => 10,  45 => 9,  43 => 8,  37 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="panel panel-default category-treeview">*/
/* <div class="panel-heading">{{ heading_title }}</div>*/
/* 	<ul class="list-group">*/
/* 	  {% for category in categories %}*/
/* 	  {% if category.category_id == category_id %} */
/* 	  	<li class="category-li category-active">*/
/* 		  <a href="{{ category.href }}" class="list-group-item active">{{ category.name }}</a> */
/* 		  {% if category.children %}*/
/* 		  <ul>*/
/* 			  {% for child in category.children %}*/
/* 			  {% if child.category_id == child_id %}*/
/* 			  	<li><a href="{{ child.href }}" class="list-group-item current-child-item active">{{ child.name }}</a></li>*/
/* 			  {% else %} */
/* 			  	<li><a href="{{ child.href }}" class="list-group-item current-child-item">{{ child.name }}</a></li>*/
/* 			  {% endif %}*/
/* 			  {% endfor %}*/
/* 		  </ul>*/
/* 		  {% endif %}*/
/* 		</li>*/
/* 	  {% else %}*/
/* 	    <li class="category-li">*/
/* 			  	<a href="{{ category.href }}" class="list-group-item">{{ category.name }}</a>*/
/* 				<!-- Display all category - child items list -->*/
/* 				{% if category.children %}*/
/* 				<ul>*/
/* 					{% for child in category.children %}*/
/* 						<li><a href="{{ child.href }}" class="list-group-item child-item">{{ child.name }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			  {% endif %}*/
/* 			  </li>*/
/* 	  {% endif %}*/
/* 	  {% endfor %}*/
/* 	</ul>*/
/* </div>*/
