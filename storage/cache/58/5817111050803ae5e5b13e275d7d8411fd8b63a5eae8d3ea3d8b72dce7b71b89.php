<?php

/* OPC170_02/template/common/menu.twig */
class __TwigTemplate_e6d8cfc23031cd1891d71e0b120960c167cfc35ef40f1d25cd3e74c1bc4a1d1e extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<div class=\"menu-container\">
<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
\t";
            // line 6
            echo "    <div class=\"navbar-header collapsed\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t<span id=\"category\" class=\"visible-xs\">";
            // line 7
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
     <!-- <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>-->
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 14
                    echo "        <li class=\"dropdown\">
\t\t\t<a href=\"";
                    // line 15
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          <div class=\"dropdown-menu\">
          <div class=\"dropdown-inner\">
\t\t\t\t ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 19
                        echo "                 <ul class=\"list-unstyled childs_1 ";
                        if (($this->getAttribute($context["category"], "column", array()) <= 1)) {
                            echo " ";
                            echo "single-dropdown-menu";
                            echo " ";
                        } else {
                            echo " ";
                            echo "mega-dropdown-menu";
                            echo " ";
                        }
                        echo "\">
               
\t\t\t\t";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            echo "\t\t";
                            // line 22
                            echo "\t\t\t\t";
                            if ($this->getAttribute($context["child"], "childs", array())) {
                                // line 23
                                echo "                <li class=\"dropdown\"><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a>

\t\t\t\t\t<div class=\"dropdown-menu\">
          \t\t\t<div class=\"dropdown-inner\">
 \t\t\t\t\t";
                                // line 27
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["child"], "childs", array()), (twig_length_filter($this->env, $this->getAttribute($context["child"], "childs", array())) / twig_round($this->getAttribute($context["child"], "column", array()), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 28
                                    echo "\t\t        \t <ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t";
                                    // line 29
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 30
                                        echo "\t\t\t\t\t\t  <li><a href=\"";
                                        echo $this->getAttribute($context["childs_2"], "href", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["childs_2"], "name", array());
                                        echo "</a></li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 32
                                    echo "\t\t\t\t\t </ul>
\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 34
                                echo "\t\t\t\t\t </div>
\t\t\t\t\t </div>

\t\t\t\t</li>
\t\t\t\t";
                            } else {
                                // line 39
                                echo "\t\t\t\t\t<li><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a></li>
\t\t\t\t";
                            }
                            // line 40
                            echo "\t\t";
                            // line 41
                            echo "\t\t\t    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "\t\t\t</div>
\t\t\t</div>

\t\t\t</li>
\t\t";
                } else {
                    // line 49
                    echo "            <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
\t\t";
                }
                // line 51
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t";
            if (((isset($context["blog_enable"]) ? $context["blog_enable"] : null) == true)) {
                // line 53
                echo "\t\t\t\t<li> <a href=\"";
                echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
                echo "\">
\t\t\t\t<span data-hover=\"";
                // line 54
                echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
                echo "\">";
                echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
                echo "</span>
\t\t\t\t</a></li>       
\t\t";
            }
            // line 56
            echo "\t\t

      \t </ul>
      </div>
    </nav>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 56,  181 => 54,  176 => 53,  173 => 52,  167 => 51,  157 => 49,  150 => 44,  143 => 42,  137 => 41,  135 => 40,  127 => 39,  120 => 34,  113 => 32,  102 => 30,  98 => 29,  95 => 28,  91 => 27,  81 => 23,  78 => 22,  73 => 21,  59 => 19,  55 => 18,  47 => 15,  44 => 14,  41 => 13,  37 => 12,  29 => 7,  26 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <div class="menu-container">*/
/* <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/* 	{# add class name as 'mega-menu' LIKE class="mega-menu" #}*/
/*     <div class="navbar-header collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/* 		<span id="category" class="visible-xs">{{ text_category }}</span>*/
/*      <!-- <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>-->*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/* 		{% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown">*/
/* 			<a href="{{ category.href }}">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*           <div class="dropdown-inner">*/
/* 				 {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                  <ul class="list-unstyled childs_1 {% if category.column <=1 %} {{ 'single-dropdown-menu' }} {% else %} {{ 'mega-dropdown-menu' }} {% endif %}">*/
/*                */
/* 				{% for child in children %}		{# 2 Level Sub Categories START #}*/
/* 				{% if child.childs %}*/
/*                 <li class="dropdown"><a href="{{ child.href }}">{{ child.name }}</a>*/
/* */
/* 					<div class="dropdown-menu">*/
/*           			<div class="dropdown-inner">*/
/*  					{% for childs_col in child.childs|batch(child.childs|length / child.column|round(1, 'ceil')) %}*/
/* 		        	 <ul class="list-unstyled childs_2">*/
/* 						{% for childs_2 in childs_col %}*/
/* 						  <li><a href="{{ childs_2.href }}">{{ childs_2.name }}</a></li>*/
/* 						{% endfor %}*/
/* 					 </ul>*/
/* 					{% endfor %}*/
/* 					 </div>*/
/* 					 </div>*/
/* */
/* 				</li>*/
/* 				{% else %}*/
/* 					<li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/* 				{% endif %}		{# 2 Level Sub Categories END #}*/
/* 			    {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}*/
/* 			</div>*/
/* 			</div>*/
/* */
/* 			</li>*/
/* 		{% else %}*/
/*             <li><a href="{{ category.href }}">{{ text_all }} {{ category.name }}</a></li>*/
/* 		{% endif %}*/
/* 		{% endfor %}*/
/* 		{% if blog_enable == true %}*/
/* 				<li> <a href="{{ all_blogs }}">*/
/* 				<span data-hover="{{ text_blog }}">{{ text_blog }}</span>*/
/* 				</a></li>       */
/* 		{% endif %}		*/
/* */
/*       	 </ul>*/
/*       </div>*/
/*     </nav>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
