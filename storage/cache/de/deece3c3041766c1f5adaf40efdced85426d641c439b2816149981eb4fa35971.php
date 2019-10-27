<?php

/* OPC170_02/template/extension/module/tt_special_countdown.twig */
class __TwigTemplate_66ab037cff1a9e25042833fc08a85feb7dce50ddfe5c8d14c36282aa8341d329 extends Twig_Template
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
        echo "<div class=\"tt-special-countdown\">
<div class=\"tt-countdown-carousel list-products\">
<div class=\"box-heading\"><h3>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3></div>
<div class=\"ttcountdown-inner\">
<div class=\"special-countdown products-carousel row\">
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "\t";
            if (($this->getAttribute($context["product"], "to_date", array()) != "0000-00-00")) {
                // line 8
                echo "\t\t<div class=\"product-layouts\">
    \t<div class=\"product-thumb transition\">
\t\t\t\t<div class=\"countdown-images col-sm-5 col-xs-5\">
\t\t\t\t\t<div class=\"special-image\">
\t\t\t\t\t\t\t<a href=\"";
                // line 12
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t<img class=\"image_thumb\" src=\"";
                // line 13
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"countdown-labele\">
\t\t\t\t\t\t  <span class=\"hot\">";
                // line 16
                echo (isset($context["text_hot"]) ? $context["text_hot"] : null);
                echo "</span> 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 19
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 20
                    echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t  ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 22
                        echo "\t\t\t\t\t\t  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 23
                            echo "\t\t\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t  ";
                        } else {
                            // line 25
                            echo "\t\t\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t  ";
                        }
                        // line 27
                        echo "\t\t\t\t\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"additional-images-container\">
\t\t\t\t\t";
                // line 34
                if ($this->getAttribute($context["product"], "images", array())) {
                    // line 35
                    echo "\t\t\t\t\t\t<div class=\"special-additional-images\">
\t\t\t\t\t\t\t";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 37
                        echo "\t\t\t\t\t\t\t\t<div class=\"image-additional\">
\t\t\t\t\t\t\t\t<img src=\"";
                        // line 38
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" data-image-large-src=\"";
                        echo $this->getAttribute($context["image"], "large", array());
                        echo "\" alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"thumb-description col-sm-7 col-xs-7\">
\t\t\t\t<div class=\"product-description\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4><a href=\"";
                // line 49
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"description\">";
                // line 51
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t
\t\t\t\t\t";
                // line 53
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 54
                    echo "\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t  ";
                    // line 55
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 56
                        echo "\t\t\t\t\t\t  \t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t  ";
                    } else {
                        // line 58
                        echo "\t\t\t\t\t\t\t  <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t\t\t\t\t  <span class=\"price-old\">";
                        // line 59
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t  ";
                    }
                    // line 61
                    echo "\t\t\t\t\t\t  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 62
                        echo "\t\t\t\t\t\t  \t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t  ";
                    }
                    // line 64
                    echo "\t\t\t\t\t\t  <span class=\"percent\"> ";
                    echo (isset($context["text_save"]) ? $context["text_save"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo " %</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"ttqtyprogress\">
\t\t\t\t\t<span id=\"QuantityAvailable\">";
                // line 70
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    echo (isset($context["product_unavailable"]) ? $context["product_unavailable"] : null);
                    echo ":";
                } else {
                    echo (isset($context["product_available"]) ? $context["product_available"] : null);
                    echo ":";
                }
                echo "</span>
\t\t\t\t\t<span id=\"quantity\" name=\"quantity\">";
                // line 71
                echo $this->getAttribute($context["product"], "product_quantity", array());
                echo "</span>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t  \t\t\t\t";
                // line 77
                if (($this->getAttribute($context["product"], "to_date", array()) != "0000-00-00")) {
                    // line 78
                    echo "\t\t\t\t\t";
                    $context["date_time"] = twig_date_format_filter($this->env, $this->getAttribute($context["product"], "to_date", array()), "Y-m-d");
                    // line 79
                    echo "\t\t\t\t\t\t<div id=\"countdown_";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" class=\"item-countdown\" data-date=\"";
                    echo (isset($context["date_time"]) ? $context["date_time"] : null);
                    echo "\"></div>
\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t<button class=\"btn-cart";
                // line 83
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
\t\t\t\t ";
                // line 84
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 85
                    echo "\t\t\t\t\t";
                    echo ("<span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t\t\t";
                } else {
                    // line 86
                    echo " 
\t\t\t\t\t";
                    // line 87
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t</span></button>
\t\t\t\t<button class=\"btn-wishlist\" title=\"";
                // line 90
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"  onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t<span title=\"";
                // line 91
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn-compare\" title=\"";
                // line 93
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"  onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t\t\t<span title=\"";
                // line 94
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 96
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t\t\t<span title=\"";
                // line 97
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t\t\t</button>
\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                // line 102
                $context["date_time"] = twig_date_format_filter($this->env, $this->getAttribute($context["product"], "to_date", array()), "Y-m-d");
                // line 103
                echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t  jQuery(document).ready(function(\$){
\t\t\t\t  \$(\".item-countdown\").each(function(){
\t\t\t\t  var date = \$(this).data('date');
\t\t\t\t  \$(this).lofCountDown({
\t\t\t\t\t  TargetDate:date,
\t\t\t\t\t  DisplayFormat:\"<div>%%D%% <span>";
                // line 109
                echo (isset($context["text_days"]) ? $context["text_days"] : null);
                echo "</span></div><div>%%H%% <span>";
                echo (isset($context["text_hours"]) ? $context["text_hours"] : null);
                echo "</span></div><div>%%M%% <span>";
                echo (isset($context["text_minutes"]) ? $context["text_minutes"] : null);
                echo "</span></div><div>%%S%% <span>";
                echo (isset($context["text_seconds"]) ? $context["text_seconds"] : null);
                echo "</span></div>\"
\t\t\t\t\t});
\t\t\t\t  });
\t\t\t\t  });   
\t\t\t </script> \t \t  
\t\t</div>
\t\t</div>
\t";
            }
            // line 117
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/tt_special_countdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 118,  347 => 117,  330 => 109,  322 => 103,  320 => 102,  310 => 97,  304 => 96,  297 => 94,  291 => 93,  284 => 91,  278 => 90,  275 => 89,  270 => 87,  267 => 86,  261 => 85,  259 => 84,  233 => 83,  229 => 81,  221 => 79,  218 => 78,  216 => 77,  207 => 71,  197 => 70,  192 => 67,  183 => 64,  175 => 62,  172 => 61,  167 => 59,  162 => 58,  156 => 56,  154 => 55,  151 => 54,  149 => 53,  144 => 51,  137 => 49,  129 => 43,  125 => 41,  110 => 38,  107 => 37,  103 => 36,  100 => 35,  98 => 34,  92 => 30,  88 => 28,  82 => 27,  78 => 25,  74 => 23,  71 => 22,  67 => 21,  64 => 20,  62 => 19,  56 => 16,  46 => 13,  42 => 12,  36 => 8,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="tt-special-countdown">*/
/* <div class="tt-countdown-carousel list-products">*/
/* <div class="box-heading"><h3>{{ heading_title }}</h3></div>*/
/* <div class="ttcountdown-inner">*/
/* <div class="special-countdown products-carousel row">*/
/* 	{% for product in products %}*/
/* 	{% if product.to_date  !=  '0000-00-00' %}*/
/* 		<div class="product-layouts">*/
/*     	<div class="product-thumb transition">*/
/* 				<div class="countdown-images col-sm-5 col-xs-5">*/
/* 					<div class="special-image">*/
/* 							<a href="{{ product.href }}">*/
/* 								<img class="image_thumb" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 							</a>*/
/* 						<div class="countdown-labele">*/
/* 						  <span class="hot">{{ text_hot }}</span> */
/* 						</div>*/
/* 						*/
/* 						{% if product.rating %}*/
/* 						<div class="rating">*/
/* 						  {% for i in 1..5 %}*/
/* 						  {% if product.rating < i %}*/
/* 						  <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>*/
/* 						  {% else %}*/
/* 						  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>*/
/* 						  {% endif %}*/
/* 						   {% endfor %}*/
/* 						</div>*/
/* 						{% endif %}*/
/* 			*/
/* 						</div>*/
/* 				*/
/* 					<div class="additional-images-container">*/
/* 					{% if product.images %}*/
/* 						<div class="special-additional-images">*/
/* 							{% for image in product.images %}*/
/* 								<div class="image-additional">*/
/* 								<img src="{{ image.thumb }}" title="{{ heading_title }}" data-image-large-src="{{ image.large }}" alt="{{ heading_title }}" />*/
/* 								</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="thumb-description col-sm-7 col-xs-7">*/
/* 				<div class="product-description">*/
/* 				<div class="caption">*/
/* 					<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 					*/
/* 					<p class="description">{{ product.description }}</p>*/
/* 				*/
/* 					{% if product.price %}*/
/* 						<div class="price">*/
/* 						  {% if not product.special %}*/
/* 						  	{{ product.price }}*/
/* 						  {% else %}*/
/* 							  <span class="price-new">{{ product.special }}</span> */
/* 							  <span class="price-old">{{ product.price }}</span>*/
/* 						  {% endif %}*/
/* 						  {% if product.tax %}*/
/* 						  	<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 						  {% endif %}*/
/* 						  <span class="percent"> {{ text_save }} {{ product.percent }} %</span>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				*/
/* 					<div class="ttqtyprogress">*/
/* 					<span id="QuantityAvailable">{% if product.product_quantity <=0 %}{{product_unavailable}}:{% else %}{{product_available}}:{% endif %}</span>*/
/* 					<span id="quantity" name="quantity">{{product.product_quantity}}</span>*/
/* 					<div class="progress">*/
/* 					<div class="progress-bar" role="progressbar"></div>*/
/* 					</div>*/
/* 					</div>*/
/* 					*/
/* 	  				{% if product.to_date !=  '0000-00-00' %}*/
/* 					{% set date_time = product.to_date|date('Y-m-d') %}*/
/* 						<div id="countdown_{{ product.product_id }}" class="item-countdown" data-date="{{ date_time }}"></div>*/
/* 					{% endif %}*/
/* 				*/
/* 				<div class="button-group">*/
/* 				<button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 				 {% if product.product_quantity <=0 %}*/
/* 					{{ "<span class=\"out of stock\">"~product.product_stock }}*/
/* 					{% else %} */
/* 					{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 				{% endif %}*/
/* 				</span></button>*/
/* 				<button class="btn-wishlist" title="{{ button_wishlist }}"  onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i>*/
/* 				<span title="{{ button_wishlist }}">{{ button_wishlist }}</span>*/
/* 				</button>*/
/* 				<button class="btn-compare" title="{{ button_compare }}"  onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i>*/
/* 				<span title="{{ button_compare }}">{{ button_compare }}</span>*/
/* 				</button>*/
/* 				<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 				<span title="{{ button_quickview }}">{{ button_quickview }}</span>*/
/* 				</button>*/
/* 			  </div>*/
/* 				</div>*/
/* 				</div>*/
/* 			{% set date_time = product.to_date|date('Y-m-d') %}*/
/* 				<script type="text/javascript">*/
/* 				  jQuery(document).ready(function($){*/
/* 				  $(".item-countdown").each(function(){*/
/* 				  var date = $(this).data('date');*/
/* 				  $(this).lofCountDown({*/
/* 					  TargetDate:date,*/
/* 					  DisplayFormat:"<div>%%D%% <span>{{ text_days}}</span></div><div>%%H%% <span>{{ text_hours }}</span></div><div>%%M%% <span>{{ text_minutes }}</span></div><div>%%S%% <span>{{ text_seconds }}</span></div>"*/
/* 					});*/
/* 				  });*/
/* 				  });   */
/* 			 </script> 	 	  */
/* 		</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% endfor %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
