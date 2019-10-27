<?php

/* OPC170_02/template/extension/module/tt_category_tab.twig */
class __TwigTemplate_5c4f773ce62c0980cd8ff3bbf1cd148944dfed7008552a9c943f33dbdc4a0791 extends Twig_Template
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
        echo "<div class=\"ttcat-main\">
<div class=\"TTProduct-Tab TT-cat-carousel products-list\">
<div class=\"tt-titletab\">
\t<div class=\"box-heading tthometab-title\"><h3>";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3></div>
\t\t<div id=\"TTCTab-";
        // line 5
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"tab-box-heading\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "\t\t\t\t";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                // line 9
                echo "\t\t\t\t\t";
                $context["class"] = " class=\"active\"";
                // line 10
                echo "\t\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t\t";
                $context["class"] = "";
                // line 12
                echo "\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t<li ";
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "><a href=\"#tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["category"], "category", array());
            echo "</a></li>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</ul>
\t</div>
</div>
<div class=\"row\">
<div class=\"tab-content\">
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["products"]) {
            // line 21
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                // line 22
                echo "\t";
                $context["class"] = " active in";
            } else {
                // line 24
                echo "\t";
                $context["class"] = "";
            }
            // line 26
            echo "
  <div class=\"tab-pane fade\t";
            // line 27
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\" id=\"tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\">
  <div class=\"TTcategory-tab products-carousel\">
\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["products"], "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 30
                echo "\t <div class=\"product-layouts\">
\t\t<div class=\"product-thumb transition\">
\t\t\t<div class=\"image\">
\t\t\t  ";
                // line 33
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 34
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t  <img class=\"image_thumb\" src=\"";
                    // line 35
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t  <img class=\"image_thumb_swap\" src=\"";
                    // line 36
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t</a>
\t\t\t  ";
                } else {
                    // line 39
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t  <img class=\"img-responsive\" src=\"";
                    // line 40
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t</a>
\t\t\t  ";
                }
                // line 43
                echo "
\t\t\t  ";
                // line 44
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 45
                    echo "\t\t\t\t<div class=\"sale-icon\">Sale</div>
\t\t\t\t<span class=\"percent\">-";
                    // line 46
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
\t\t\t  ";
                }
                // line 48
                echo "\t\t\t</div>

\t\t\t<div class=\"thumb-description\">
\t\t\t<div class=\"caption\">
\t\t\t\t";
                // line 52
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 53
                    echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t  ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 55
                        echo "\t\t\t\t  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 56
                            echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t  ";
                        } else {
                            // line 58
                            echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t  ";
                        }
                        // line 60
                        echo "\t\t\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t<h4><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t<!--<p class=\"description\">";
                // line 64
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>-->
\t\t\t\t";
                // line 65
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 66
                    echo "\t\t\t\t<div class=\"price\">
\t\t\t\t  ";
                    // line 67
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 68
                        echo "\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t  ";
                    } else {
                        // line 70
                        echo "\t\t\t\t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t\t\t<span class=\"price-old\">";
                        // line 71
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t  ";
                    }
                    // line 73
                    echo "\t
\t\t\t\t  ";
                    // line 74
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 75
                        echo "\t\t\t\t  <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t  ";
                    }
                    // line 76
                    echo " 
\t\t\t\t</div>
\t\t\t  ";
                }
                // line 79
                echo "\t\t\t</div>
\t\t\t  <div class=\"button-group\">
\t\t\t\t<button class=\"btn-cart";
                // line 81
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
                // line 82
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 83
                    echo "\t\t\t\t\t";
                    echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t\t\t";
                } else {
                    // line 84
                    echo " 
\t\t\t\t\t";
                    // line 85
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t</span></button>
\t\t\t\t<button class=\"btn-wishlist\" title=\"";
                // line 88
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"  onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t<span title=\"";
                // line 89
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn-compare\" title=\"";
                // line 91
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"  onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t\t\t<span title=\"";
                // line 92
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 94
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t\t\t<span title=\"";
                // line 95
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t</button>
\t\t\t  </div>
\t\t\t</div>\t\t
\t\t</div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "  </div>
  </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/tt_category_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 105,  376 => 102,  361 => 95,  355 => 94,  348 => 92,  342 => 91,  335 => 89,  329 => 88,  326 => 87,  321 => 85,  318 => 84,  312 => 83,  310 => 82,  284 => 81,  280 => 79,  275 => 76,  267 => 75,  265 => 74,  262 => 73,  257 => 71,  252 => 70,  246 => 68,  244 => 67,  241 => 66,  239 => 65,  235 => 64,  228 => 63,  224 => 61,  218 => 60,  214 => 58,  210 => 56,  207 => 55,  203 => 54,  200 => 53,  198 => 52,  192 => 48,  187 => 46,  184 => 45,  182 => 44,  179 => 43,  169 => 40,  164 => 39,  154 => 36,  146 => 35,  141 => 34,  139 => 33,  134 => 30,  130 => 29,  123 => 27,  120 => 26,  116 => 24,  112 => 22,  110 => 21,  93 => 20,  86 => 15,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="ttcat-main">*/
/* <div class="TTProduct-Tab TT-cat-carousel products-list">*/
/* <div class="tt-titletab">*/
/* 	<div class="box-heading tthometab-title"><h3>{{ heading_title }}</h3></div>*/
/* 		<div id="TTCTab-{{ module }}" class="tab-box-heading">*/
/* 		<ul class="nav nav-tabs">*/
/* 			{% for category in categories %}*/
/* 				{% if loop.index0 == 0 %}*/
/* 					{% set class = ' class="active"'%}*/
/* 				{% else %}*/
/* 					{% set class = ''%}*/
/* 				{% endif %}*/
/* 				<li {{class}}><a href="#tab-{{loop.index}}" data-toggle="tab">{{category.category}}</a></li>*/
/* 			{% endfor %}*/
/* 			</ul>*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* <div class="tab-content">*/
/* {% for products in categories %}*/
/* {% if loop.index0 == 0 %}*/
/* 	{% set class = ' active in' %}*/
/* {% else %}*/
/* 	{% set class = ''%}*/
/* {% endif %}*/
/* */
/*   <div class="tab-pane fade	{{class}}" id="tab-{{loop.index}}">*/
/*   <div class="TTcategory-tab products-carousel">*/
/* 	{% for product in products.products %}*/
/* 	 <div class="product-layouts">*/
/* 		<div class="product-thumb transition">*/
/* 			<div class="image">*/
/* 			  {% if product.thumb_swap %}*/
/* 				<a href="{{ product.href }}">*/
/* 				  <img class="image_thumb" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 				  <img class="image_thumb_swap" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 				</a>*/
/* 			  {% else %}*/
/* 				<a href="{{ product.href }}">*/
/* 				  <img class="img-responsive" src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" />*/
/* 				</a>*/
/* 			  {% endif %}*/
/* */
/* 			  {% if product.special %}*/
/* 				<div class="sale-icon">Sale</div>*/
/* 				<span class="percent">-{{ product.percent }}%</span>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* */
/* 			<div class="thumb-description">*/
/* 			<div class="caption">*/
/* 				{% if product.rating %}*/
/* 				<div class="rating">*/
/* 				  {% for i in 1..5 %}*/
/* 				  {% if product.rating < i %}*/
/* 				  <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>*/
/* 				  {% else %}*/
/* 				  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>*/
/* 				  {% endif %}*/
/* 				   {% endfor %}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 				<!--<p class="description">{{ product.description }}</p>-->*/
/* 				{% if product.price %}*/
/* 				<div class="price">*/
/* 				  {% if not product.special %}*/
/* 					{{ product.price }}*/
/* 				  {% else %}*/
/* 					<span class="price-new">{{ product.special }}</span> */
/* 					<span class="price-old">{{ product.price }}</span>*/
/* 				  {% endif %}*/
/* 	*/
/* 				  {% if product.tax %}*/
/* 				  <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 				  {% endif %} */
/* 				</div>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* 			  <div class="button-group">*/
/* 				<button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 				 {% if product.product_quantity <=0 %}*/
/* 					{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
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
/* 		</button>*/
/* 			  </div>*/
/* 			</div>		*/
/* 		</div>*/
/* 	</div>*/
/* 	{% endfor %}*/
/*   </div>*/
/*   </div>*/
/* {% endfor %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
