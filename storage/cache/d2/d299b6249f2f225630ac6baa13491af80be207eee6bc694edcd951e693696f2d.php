<?php

/* OPC170_02/template/extension/module/latest.twig */
class __TwigTemplate_3c342bb8f0ae053b470c0b57097560319fe9055d53ce2605caf4ea3869613b08 extends Twig_Template
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
        echo "<div class=\"latest-carousel products-list\">
<div class=\"box-heading\"><h3>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3></div>
<div class=\"latest-items products-carousel row\"> 
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "  <div class=\"product-layouts\">
    <div class=\"product-thumb transition\">
      <div class=\"image\">
\t\t";
            // line 8
            if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                // line 9
                echo "\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t<img class=\"image_thumb\" src=\"";
                // line 10
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" />
\t\t\t\t<img class=\"image_thumb_swap\" src=\"";
                // line 11
                echo $this->getAttribute($context["product"], "thumb_swap", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" />
\t\t\t</a>
\t\t";
            } else {
                // line 14
                echo "\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 15
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" />
\t\t\t</a>
\t\t";
            }
            // line 18
            echo "\t\t\t";
            if ($this->getAttribute($context["product"], "special", array())) {
                // line 19
                echo "\t\t\t  <div class=\"sale-icon\">Sale</div>
\t\t\t  <span class=\"percent\">-";
                // line 20
                echo $this->getAttribute($context["product"], "percent", array());
                echo "%</span>
\t\t\t";
            }
            // line 22
            echo "\t  </div>
      <div class=\"thumb-description\">
      <div class=\"caption\"> 
\t\t";
            // line 25
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 26
                echo "\t\t<div class=\"rating\">
          ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 28
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 29
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 31
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t  ";
                    }
                    // line 33
                    echo "\t\t   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </div>
\t\t";
            }
            // line 36
            echo "\t\t
\t\t<h4><a href=\"";
            // line 37
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
       <!-- <p>";
            // line 38
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p> -->
\t\t";
            // line 39
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 40
                echo "        <div class=\"price\">
          ";
                // line 41
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 42
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 44
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 46
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 47
                    echo "          <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          ";
                }
                // line 49
                echo "        </div>
        ";
            }
            // line 51
            echo "        
      </div>
\t  \t<div class=\"button-group\">
\t\t\t<button class=\"btn-cart";
            // line 54
            if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                echo " ";
                echo "disabled";
                echo " ";
            }
            echo "\" type=\"button\" title=\"";
            if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                echo $this->getAttribute($context["product"], "product_stock", array());
            } else {
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            }
            echo "\" onclick=\"";
            if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
            } else {
                echo "cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "')";
            }
            echo "\"";
            if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                echo "";
                echo " ";
            }
            echo ">
\t\t\t ";
            // line 55
            if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                // line 56
                echo "\t\t\t\t";
                echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                echo "
\t\t\t\t";
            } else {
                // line 57
                echo " 
\t\t\t\t";
                // line 58
                echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                echo "
\t\t\t";
            }
            // line 60
            echo "\t\t\t</span></button>
\t\t\t<button class=\"btn-wishlist\" type=\"button\" title=\"";
            // line 61
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i>\t</button>
\t\t\t<button class=\"btn-compare\" type=\"button\" title=\"";
            // line 62
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
            // line 63
            echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
            echo "\" onclick=\"tt_quickview.ajaxView('";
            echo $this->getAttribute($context["product"], "href", array());
            echo "')\"><i class=\"fa fa-eye\"></i>
\t\t</button>
      </div>
\t </div>
    </div>
  \t</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo " 
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 69,  233 => 63,  227 => 62,  221 => 61,  218 => 60,  213 => 58,  210 => 57,  204 => 56,  202 => 55,  176 => 54,  171 => 51,  167 => 49,  159 => 47,  156 => 46,  148 => 44,  142 => 42,  140 => 41,  137 => 40,  135 => 39,  131 => 38,  125 => 37,  122 => 36,  118 => 34,  112 => 33,  108 => 31,  104 => 29,  101 => 28,  97 => 27,  94 => 26,  92 => 25,  87 => 22,  82 => 20,  79 => 19,  76 => 18,  66 => 15,  61 => 14,  51 => 11,  43 => 10,  38 => 9,  36 => 8,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="latest-carousel products-list">*/
/* <div class="box-heading"><h3>{{ heading_title }}</h3></div>*/
/* <div class="latest-items products-carousel row"> */
/* 	{% for product in products %}*/
/*   <div class="product-layouts">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image">*/
/* 		{% if product.thumb_swap %}*/
/* 			<a href="{{ product.href }}">*/
/* 				<img class="image_thumb" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 				<img class="image_thumb_swap" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 			</a>*/
/* 		{% else %}*/
/* 			<a href="{{ product.href }}">*/
/* 				<img class="img-responsive" src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" />*/
/* 			</a>*/
/* 		{% endif %}*/
/* 			{% if product.special %}*/
/* 			  <div class="sale-icon">Sale</div>*/
/* 			  <span class="percent">-{{ product.percent }}%</span>*/
/* 			{% endif %}*/
/* 	  </div>*/
/*       <div class="thumb-description">*/
/*       <div class="caption"> */
/* 		{% if product.rating %}*/
/* 		<div class="rating">*/
/*           {% for i in 1..5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>*/
/* 		  {% endif %}*/
/* 		   {% endfor %}*/
/*         </div>*/
/* 		{% endif %}*/
/* 		*/
/* 		<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*        <!-- <p>{{ product.description }}</p> -->*/
/* 		{% if product.price %}*/
/*         <div class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/*         */
/*       </div>*/
/* 	  	<div class="button-group">*/
/* 			<button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 			 {% if product.product_quantity <=0 %}*/
/* 				{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 				{% else %} */
/* 				{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 			{% endif %}*/
/* 			</span></button>*/
/* 			<button class="btn-wishlist" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i>	</button>*/
/* 			<button class="btn-compare" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* 			<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 		</button>*/
/*       </div>*/
/* 	 </div>*/
/*     </div>*/
/*   	</div>*/
/*   {% endfor %} */
/* </div>*/
/* </div>*/
/* */
