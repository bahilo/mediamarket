<?php

/* OPC170_02/template/extension/module/featured.twig */
class __TwigTemplate_ef58d7775ae39d78a2b5c54a7f9a3e3153c225f8777a37884b8ef04c0dfc3950 extends Twig_Template
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
        echo "<div class=\"featured-carousel products-list\">
<div class=\"box-heading\"><h3>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3></div>
<div class=\"featured-items products-carousel row\">
 ";
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
            echo "\t\t";
            if ($this->getAttribute($context["product"], "special", array())) {
                // line 19
                echo "\t\t  <div class=\"sale-icon\">Sale</div>
\t\t  <span class=\"percent\">-";
                // line 20
                echo $this->getAttribute($context["product"], "percent", array());
                echo "%</span>
\t\t";
            }
            // line 22
            echo "\t  </div>
\t  <div class=\"thumb-description\">
      <div class=\"caption\">
        <h4><a href=\"";
            // line 25
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
       ";
            // line 26
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 27
                echo "\t\t<div class=\"rating\">
          ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 29
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 30
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 32
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t  ";
                    }
                    // line 34
                    echo "\t\t   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "        </div>
\t\t";
            }
            // line 37
            echo "\t\t
\t\t<!--<p>";
            // line 38
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>-->
\t\t
        ";
            // line 40
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 41
                echo "        <div class=\"price\">
          ";
                // line 42
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 43
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 45
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 47
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 48
                    echo "          <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          ";
                }
                // line 50
                echo "        </div>
        ";
            }
            // line 52
            echo "      </div>
\t  <div class=\"button-group\">
        <button class=\"btn-cart";
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
\t\t ";
            // line 55
            if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                // line 56
                echo "\t\t\t";
                echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                echo "
\t\t\t";
            } else {
                // line 57
                echo " 
\t\t\t";
                // line 58
                echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                echo "
\t\t";
            }
            // line 60
            echo "\t\t</span></button>
        <button class=\"btn-wishlist\" type=\"button\" title=\"";
            // line 61
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button class=\"btn-compare\" type=\"button\" title=\"";
            // line 62
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
            // line 63
            echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
            echo "\" onclick=\"tt_quickview.ajaxView('";
            echo $this->getAttribute($context["product"], "href", array());
            echo "')\"><i class=\"fa fa-eye\"></i>
\t\t</button>
      </div>
\t </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 70,  233 => 63,  227 => 62,  221 => 61,  218 => 60,  213 => 58,  210 => 57,  204 => 56,  202 => 55,  176 => 54,  172 => 52,  168 => 50,  160 => 48,  157 => 47,  149 => 45,  143 => 43,  141 => 42,  138 => 41,  136 => 40,  131 => 38,  128 => 37,  124 => 35,  118 => 34,  114 => 32,  110 => 30,  107 => 29,  103 => 28,  100 => 27,  98 => 26,  92 => 25,  87 => 22,  82 => 20,  79 => 19,  76 => 18,  66 => 15,  61 => 14,  51 => 11,  43 => 10,  38 => 9,  36 => 8,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="featured-carousel products-list">*/
/* <div class="box-heading"><h3>{{ heading_title }}</h3></div>*/
/* <div class="featured-items products-carousel row">*/
/*  {% for product in products %}*/
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
/* 		{% if product.special %}*/
/* 		  <div class="sale-icon">Sale</div>*/
/* 		  <span class="percent">-{{ product.percent }}%</span>*/
/* 		{% endif %}*/
/* 	  </div>*/
/* 	  <div class="thumb-description">*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*        {% if product.rating %}*/
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
/* 		<!--<p>{{ product.description }}</p>-->*/
/* 		*/
/*         {% if product.price %}*/
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
/*       </div>*/
/* 	  <div class="button-group">*/
/*         <button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 		 {% if product.product_quantity <=0 %}*/
/* 			{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 			{% else %} */
/* 			{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 		{% endif %}*/
/* 		</span></button>*/
/*         <button class="btn-wishlist" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button class="btn-compare" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* 		<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 		</button>*/
/*       </div>*/
/* 	 </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* </div>*/
/* */
