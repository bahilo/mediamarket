<?php

/* OPC170_02/template/extension/module/tt_product_tab.twig */
class __TwigTemplate_66cb30af54959cedf5dfeeaac1e0440b7fe78972096fc67ea0b61a7e9ce49a25 extends Twig_Template
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
        echo "<div class=\"ttproduct-main\">
<div class=\"TTProduct-Tab TT-product-carousel products-list\">
<div class=\"tthometab\">
<div class=\"box-heading tthometab-title\"><h3>";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3></div>
<div id=\"TTPTab-";
        // line 5
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"tab-box-heading\">
\t<ul class=\"nav nav-tabs\">
\t";
        // line 7
        if ((isset($context["featured_products"]) ? $context["featured_products"] : null)) {
            // line 8
            echo "\t  <li><a href=\"#tab-featured-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_featured"]) ? $context["tab_featured"] : null);
            echo "</a></li>
\t";
        }
        // line 10
        echo "\t";
        if ((isset($context["latest_products"]) ? $context["latest_products"] : null)) {
            // line 11
            echo "\t  <li><a href=\"#tab-latest-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_latest"]) ? $context["tab_latest"] : null);
            echo "</a></li>
\t";
        }
        // line 13
        echo "\t";
        if ((isset($context["bestseller_products"]) ? $context["bestseller_products"] : null)) {
            // line 14
            echo "\t  <li><a href=\"#tab-bestseller-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_bestseller"]) ? $context["tab_bestseller"] : null);
            echo "</a></li>
\t";
        }
        // line 16
        echo "\t";
        if ((isset($context["special_products"]) ? $context["special_products"] : null)) {
            // line 17
            echo "\t  <li><a href=\"#tab-special-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_special"]) ? $context["tab_special"] : null);
            echo "</a></li>
\t";
        }
        // line 19
        echo "\t</ul>
</div>
</div>
<div class=\"tab-content\">
";
        // line 23
        if ((isset($context["featured_products"]) ? $context["featured_products"] : null)) {
            // line 24
            $context["cnt"] = 1;
            // line 25
            $context["tcnt_f"] = twig_length_filter($this->env, (isset($context["featured_products"]) ? $context["featured_products"] : null));
            // line 26
            echo "  <div id=\"tab-featured-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"tab-pane row\">
   <div class=\"products-carousel\">
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["featured_products"]) ? $context["featured_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "\t\t\t";
                if (((isset($context["tcnt_f"]) ? $context["tcnt_f"] : null) >= 8)) {
                    // line 30
                    echo "\t\t\t\t";
                    if ((0 == (isset($context["cnt"]) ? $context["cnt"] : null) % 2)) {
                        // line 31
                        echo "\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t<div class='single-column'>
\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t";
                }
                // line 35
                echo "\t <div class=\"product-layouts\">
\t\t<div class=\"product-thumb transition\">
\t\t  <div class=\"image\">
\t\t\t";
                // line 38
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 39
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t<img class=\"image_thumb\" src=\"";
                    // line 40
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t\t\t<img class=\"image_thumb_swap\" src=\"";
                    // line 41
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t\t</a>
\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                    // line 45
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t\t</a>
\t\t\t";
                }
                // line 48
                echo "\t\t\t";
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 49
                    echo "\t\t\t  <div class=\"sale-icon\">Sale</div>
\t\t\t  <span class=\"percent\">-";
                    // line 50
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
\t\t\t";
                }
                // line 52
                echo "\t\t  </div>
\t\t  
\t  \t  <div class=\"thumb-description\">
      <div class=\"caption\">

\t\t";
                // line 57
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 58
                    echo "\t\t<div class=\"rating\">
          ";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 60
                        echo "          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 61
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 63
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t  ";
                        }
                        // line 65
                        echo "\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "        </div>
\t\t";
                }
                // line 68
                echo "\t\t
\t\t<h4><a href=\"";
                // line 69
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
        <!--<p class=\"description\">";
                // line 70
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>-->
\t\t";
                // line 71
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 72
                    echo "\t\t\t<div class=\"price\">
\t\t\t  ";
                    // line 73
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 74
                        echo "\t\t\t  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t  ";
                    } else {
                        // line 76
                        echo "\t\t\t  <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t  <span class=\"price-old\">";
                        // line 77
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t  ";
                    }
                    // line 78
                    echo " 
\t\t\t  ";
                    // line 79
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 80
                        echo "\t\t\t  <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t  ";
                    }
                    // line 82
                    echo "\t\t\t</div>
\t\t  ";
                }
                // line 84
                echo "
      </div>\t  \t  
\t\t  <div class=\"button-group\">
\t\t\t <button class=\"btn-cart ";
                // line 87
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    echo "disabled";
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
                // line 88
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 89
                    echo "\t\t\t\t";
                    echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t\t";
                } else {
                    // line 90
                    echo " 
\t\t\t\t";
                    // line 91
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t\t";
                }
                // line 93
                echo "\t\t\t</span></button>
\t\t\t<button class=\"btn-wishlist\" title=\"";
                // line 94
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"  onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i>
\t\t\t<span title=\"";
                // line 95
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span>
\t\t\t</button>
\t\t\t<button class=\"btn-compare\" title=\"";
                // line 97
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"  onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t\t<span title=\"";
                // line 98
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span>
\t\t\t</button>
\t\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 100
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t\t\t<span title=\"";
                // line 101
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t</button>
\t\t  </div>
\t  </div>
\t  </div>
      </div>
\t ";
                // line 107
                if (((isset($context["tcnt_f"]) ? $context["tcnt_f"] : null) >= 8)) {
                    // line 108
                    echo "\t\t\t\t";
                    if ((0 == (isset($context["cnt"]) ? $context["cnt"] : null) % 2)) {
                        // line 109
                        echo "\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 111
                    echo "\t\t\t\t";
                }
                // line 112
                echo "
\t\t\t\t";
                // line 113
                $context["cnt"] = ((isset($context["cnt"]) ? $context["cnt"] : null) + 1);
                // line 114
                echo "\t  \t\t
      \t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo " ";
            // line 116
            echo "
\t\t\t ";
            // line 117
            $context["cnt"] = 1;
            // line 118
            echo "\t\t  ";
            if (((isset($context["tcnt_f"]) ? $context["tcnt_f"] : null) >= 8)) {
                // line 119
                echo "\t\t   ";
                if ((0 == (isset($context["tcnt_f"]) ? $context["tcnt_f"] : null) % 2)) {
                    // line 120
                    echo "\t\t   ";
                } else {
                    // line 121
                    echo "\t\t\t </div>
\t\t   ";
                }
                // line 122
                echo " 
\t\t ";
            }
            // line 124
            echo "    </div>
</div>
";
        }
        // line 127
        echo "
";
        // line 128
        if ((isset($context["latest_products"]) ? $context["latest_products"] : null)) {
            // line 129
            $context["cnt"] = 1;
            // line 130
            $context["tcnt_l"] = twig_length_filter($this->env, (isset($context["latest_products"]) ? $context["latest_products"] : null));
            // line 131
            echo "  <div id=\"tab-latest-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"tab-pane row\">
\t<div class=\"products-carousel\">
\t  ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latest_products"]) ? $context["latest_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 134
                echo "\t\t\t";
                if (((isset($context["tcnt_l"]) ? $context["tcnt_l"] : null) >= 8)) {
                    // line 135
                    echo "\t\t\t\t";
                    if ((0 == (isset($context["cnt"]) ? $context["cnt"] : null) % 2)) {
                        // line 136
                        echo "\t\t\t\t";
                    } else {
                        // line 137
                        echo "\t\t\t\t\t<div class='single-column'>
\t\t\t\t";
                    }
                    // line 139
                    echo "\t\t\t\t";
                }
                // line 140
                echo "\t  \t\t <div class=\"product-layouts\">
\t\t  <div class=\"product-thumb transition\">
      <div class=\"image\">
\t";
                // line 143
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 144
                    echo "\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t<img class=\"image_thumb\" src=\"";
                    // line 145
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t<img class=\"image_thumb_swap\" src=\"";
                    // line 146
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t</a>

\t\t";
                } else {
                    // line 150
                    echo "
\t\t\t<a href=\"";
                    // line 151
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t<img class=\"img-responsive\" src=\"";
                    // line 152
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t</a>
\t";
                }
                // line 155
                echo "        ";
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 156
                    echo "\t\t  <div class=\"sale-icon\">Sale</div>
\t\t  <span class=\"percent\">-";
                    // line 157
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
\t\t";
                }
                // line 159
                echo "\t  </div>
\t  <div class=\"thumb-description\">
      <div class=\"caption\">
\t    
        <h4><a href=\"";
                // line 163
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t
\t\t";
                // line 165
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 166
                    echo "\t\t<div class=\"rating\">
          ";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 168
                        echo "          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 169
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 171
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t  ";
                        }
                        // line 173
                        echo "\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "        </div>
\t\t";
                }
                // line 176
                echo "        <!--<p class=\"description\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>-->
      
        ";
                // line 178
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 179
                    echo "        <div class=\"price\">
          ";
                    // line 180
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 181
                        echo "          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
          ";
                    } else {
                        // line 183
                        echo "          <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t  ";
                    }
                    // line 184
                    echo " 
          ";
                    // line 185
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 186
                        echo "          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t  ";
                    }
                    // line 188
                    echo "        </div>
\t\t";
                }
                // line 190
                echo "\t\t
      </div>
        <div class=\"button-group\">
\t\t  <button class=\"btn-cart";
                // line 193
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
                // line 194
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 195
                    echo "\t\t\t";
                    echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t";
                } else {
                    // line 196
                    echo " 
\t\t\t";
                    // line 197
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t";
                }
                // line 199
                echo "\t\t</span></button>
         <button class=\"btn-wishlist\" title=\"";
                // line 200
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"  onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i>
\t\t<span title=\"";
                // line 201
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span>
\t\t</button>
        <button class=\"btn-compare\" title=\"";
                // line 203
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"  onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t<span title=\"";
                // line 204
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span>
\t\t</button>
\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 206
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t<span title=\"";
                // line 207
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t</button>
      </div>
\t  </div>
\t  </div>
\t</div>\t
\t\t";
                // line 213
                if (((isset($context["tcnt_l"]) ? $context["tcnt_l"] : null) >= 8)) {
                    // line 214
                    echo "\t\t\t\t";
                    if ((0 == (isset($context["cnt"]) ? $context["cnt"] : null) % 2)) {
                        // line 215
                        echo "\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 217
                    echo "\t\t\t\t";
                }
                // line 218
                echo "\t\t\t\t";
                $context["cnt"] = ((isset($context["cnt"]) ? $context["cnt"] : null) + 1);
                // line 219
                echo "\t  \t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "\t\t";
            $context["cnt"] = 1;
            // line 222
            echo "\t\t  ";
            if (((isset($context["tcnt_l"]) ? $context["tcnt_l"] : null) >= 8)) {
                echo " 
\t\t  ";
                // line 223
                if ((0 == (isset($context["tcnt_l"]) ? $context["tcnt_l"] : null) % 2)) {
                    // line 224
                    echo "\t\t  ";
                } else {
                    // line 225
                    echo "\t\t   </div>
\t\t  ";
                }
                // line 226
                echo " 
\t\t  ";
            }
            // line 227
            echo "\t
\t</div>
</div>
";
        }
        // line 231
        echo "

";
        // line 233
        if ((isset($context["bestseller_products"]) ? $context["bestseller_products"] : null)) {
            // line 234
            $context["cnt"] = 1;
            // line 235
            $context["tcnt_b"] = twig_length_filter($this->env, (isset($context["bestseller_products"]) ? $context["bestseller_products"] : null));
            // line 236
            echo " <div id=\"tab-bestseller-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"tab-pane row\">
    <div class=\"products-carousel\">
      ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bestseller_products"]) ? $context["bestseller_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 239
                echo "\t  \t\t\t";
                if (((isset($context["tcnt_b"]) ? $context["tcnt_b"] : null) >= 8)) {
                    // line 240
                    echo "\t\t\t\t";
                    if ((0 == (isset($context["cnt"]) ? $context["cnt"] : null) % 2)) {
                        // line 241
                        echo "\t\t\t\t";
                    } else {
                        // line 242
                        echo "\t\t\t\t\t<div class='single-column'>
\t\t\t\t";
                    }
                    // line 244
                    echo "\t\t\t\t";
                }
                // line 245
                echo "      <div class=\"product-layouts\">
          <div class=\"product-thumb transition\">
      <div class=\"image\">
\t\t";
                // line 248
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 249
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t<img class=\"image_thumb\" src=\"";
                    // line 250
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t\t<img class=\"image_thumb_swap\" src=\"";
                    // line 251
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t</a>

\t\t\t";
                } else {
                    // line 255
                    echo "
\t\t\t\t<a href=\"";
                    // line 256
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                    // line 257
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t</a>
\t\t";
                }
                // line 259
                echo " 
        ";
                // line 260
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 261
                    echo "\t\t  <div class=\"sale-icon\">Sale</div>
\t\t  <span class=\"percent\">-";
                    // line 262
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
\t\t";
                }
                // line 264
                echo "\t  </div>
\t  <div class=\"thumb-description\">
      <div class=\"caption\">
\t  
        <h4><a href=\"";
                // line 268
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t
\t\t";
                // line 270
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 271
                    echo "\t\t<div class=\"rating\">
          ";
                    // line 272
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 273
                        echo "          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 274
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 276
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t  ";
                        }
                        // line 278
                        echo "\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 279
                    echo "        </div>
\t\t";
                }
                // line 281
                echo "\t\t
        <!--<p class=\"description\">";
                // line 282
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>-->
      
        ";
                // line 284
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 285
                    echo "        <div class=\"price\">
          ";
                    // line 286
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 287
                        echo "          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
          ";
                    } else {
                        // line 289
                        echo "          <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
          ";
                    }
                    // line 291
                    echo "          ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 292
                        echo "          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
          ";
                    }
                    // line 294
                    echo "        </div> 
\t  ";
                }
                // line 296
                echo "      </div>
        <div class=\"button-group\">
        <button class=\"btn-cart";
                // line 298
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
                // line 299
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 300
                    echo "\t\t\t";
                    echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t";
                } else {
                    // line 301
                    echo " 
\t\t\t";
                    // line 302
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t";
                }
                // line 304
                echo "\t\t</span></button>
\t\t<button class=\"btn-wishlist\" title=\"";
                // line 305
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"  onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i>
\t\t<span title=\"";
                // line 306
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span>
\t\t</button>
        <button class=\"btn-compare\" title=\"";
                // line 308
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"  onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t<span title=\"";
                // line 309
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 310
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t<span title=\"";
                // line 311
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t</button>
      </div>
\t  </div>
\t  </div>
        </div>
\t\t\t";
                // line 317
                if (((isset($context["tcnt_b"]) ? $context["tcnt_b"] : null) >= 8)) {
                    // line 318
                    echo "\t\t\t\t";
                    if ((0 == (isset($context["cnt"]) ? $context["cnt"] : null) % 2)) {
                        // line 319
                        echo "\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 321
                    echo "\t\t\t\t";
                }
                // line 322
                echo "\t\t\t\t";
                $context["cnt"] = ((isset($context["cnt"]) ? $context["cnt"] : null) + 1);
                // line 323
                echo "\t  \t\t
      \t\t   ";
                // line 325
                echo "\t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo " 
\t\t";
            // line 327
            $context["cnt"] = 1;
            // line 328
            echo "\t\t  ";
            if (((isset($context["tcnt_b"]) ? $context["tcnt_b"] : null) >= 8)) {
                echo " 
\t\t  ";
                // line 329
                if ((0 == (isset($context["tcnt_b"]) ? $context["tcnt_b"] : null) % 2)) {
                    // line 330
                    echo "\t\t  ";
                } else {
                    // line 331
                    echo "\t\t   </div>
\t\t  ";
                }
                // line 332
                echo " 
\t\t  ";
            }
            // line 333
            echo "  
\t
    </div>
</div>
";
        }
        // line 338
        echo "


";
        // line 341
        if ((isset($context["special_products"]) ? $context["special_products"] : null)) {
            // line 342
            $context["cnt"] = 1;
            // line 343
            $context["tcnt_b"] = twig_length_filter($this->env, (isset($context["special_products"]) ? $context["special_products"] : null));
            // line 344
            echo " <div id=\"tab-special-";
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"tab-pane row\">
    <div class=\"products-carousel\">
\t  ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["special_products"]) ? $context["special_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 347
                echo "\t\t\t";
                if (((isset($context["tcnt_s"]) ? $context["tcnt_s"] : null) >= 8)) {
                    // line 348
                    echo "\t\t\t";
                    if ((0 == (isset($context["cnt"]) ? $context["cnt"] : null) % 2)) {
                        // line 349
                        echo "\t\t\t";
                    } else {
                        // line 350
                        echo "\t\t\t\t<div class='single-column'>
\t\t\t";
                    }
                    // line 352
                    echo "\t\t\t";
                }
                // line 353
                echo "      <div class=\"product-layouts\">
          <div class=\"product-thumb transition\">
      <div class=\"image\">
\t\t";
                // line 356
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 357
                    echo "\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t<img class=\"image_thumb\" src=\"";
                    // line 358
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t\t<img class=\"image_thumb_swap\" src=\"";
                    // line 359
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t</a>

\t\t\t";
                } else {
                    // line 363
                    echo "
\t\t\t\t<a href=\"";
                    // line 364
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                    // line 365
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t</a>
\t\t\t";
                }
                // line 368
                echo "        ";
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 369
                    echo "\t\t  <div class=\"sale-icon\">Sale</div>
\t\t  <span class=\"percent\">-";
                    // line 370
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
\t\t";
                }
                // line 372
                echo "\t  </div>
\t  <div class=\"thumb-description\">
      <div class=\"caption\">
\t    
        <h4><a href=\"";
                // line 376
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t
\t\t";
                // line 378
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 379
                    echo "\t\t<div class=\"rating\">
          ";
                    // line 380
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 381
                        echo "          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 382
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 384
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t  ";
                        }
                        // line 386
                        echo "\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 387
                    echo "        </div>
\t\t";
                }
                // line 389
                echo "        <!--<p class=\"description\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>-->
        
        ";
                // line 391
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 392
                    echo "        <div class=\"price\">
          ";
                    // line 393
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 394
                        echo "          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
          ";
                    } else {
                        // line 396
                        echo "          <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t  <span class=\"price-old\">";
                        // line 397
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
          ";
                    }
                    // line 399
                    echo "          ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 400
                        echo "          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
          ";
                    }
                    // line 402
                    echo "        </div>
\t\t";
                }
                // line 403
                echo " 

      </div>
        <div class=\"button-group\">
\t\t<button class=\"btn-cart";
                // line 407
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
                // line 408
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 409
                    echo "\t\t\t";
                    echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t";
                } else {
                    // line 410
                    echo " 
\t\t\t";
                    // line 411
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t";
                }
                // line 413
                echo "\t\t</span></button>
        <button class=\"btn-wishlist\"  title=\"";
                // line 414
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"  onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i>
\t\t<span title=\"";
                // line 415
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span>
\t\t</button>
        <button class=\"btn-compare\" title=\"";
                // line 417
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"  onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t<span title=\"";
                // line 418
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 419
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t<span title=\"";
                // line 420
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t</button>
      </div>
\t  </div>
\t  </div>
       </div>\t
      \t\t ";
                // line 426
                if (((isset($context["tcnt_s"]) ? $context["tcnt_s"] : null) >= 8)) {
                    // line 427
                    echo "\t\t\t\t";
                    if ((0 == (isset($context["cnt"]) ? $context["cnt"] : null) % 2)) {
                        // line 428
                        echo "\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 430
                    echo "\t\t\t\t";
                }
                // line 431
                echo "\t\t\t\t";
                $context["cnt"] = ((isset($context["cnt"]) ? $context["cnt"] : null) + 1);
                // line 432
                echo "\t  \t\t
      \t\t   ";
                // line 435
                echo "\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            echo "\t\t ";
            $context["cnt"] = 1;
            // line 437
            echo "\t\t  ";
            if (((isset($context["tcnt_s"]) ? $context["tcnt_s"] : null) >= 8)) {
                echo " 
\t\t  ";
                // line 438
                if ((0 == (isset($context["tcnt_s"]) ? $context["tcnt_s"] : null) % 2)) {
                    // line 439
                    echo "\t\t  ";
                } else {
                    // line 440
                    echo "\t\t   </div>
\t\t  ";
                }
                // line 441
                echo " 
\t\t  ";
            }
            // line 443
            echo " </div>
 </div>
";
        }
        // line 446
        echo "</div>
</div>
</div>


<script type=\"text/javascript\">
\$('.TTProduct-Tab  .tab-box-heading > ul > li:first-child').addClass('active');
\$('.TTProduct-Tab  .tab-content > .tab-pane:first-child').addClass('active');
var tttrendingproducts = \$(\".TTProduct-Tab .products-carousel.owl-carousel\");
\ttttrendingproducts.owlCarousel({
\titems:4,
    itemsDesktop : [1170,4],
    itemsDesktopSmall : [991,3],
    itemsTablet: [767,2],
    itemsMobile : [480,1],
\tnavigation: true,
\tpagination: false
    });
</script>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/tt_product_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1383 => 446,  1378 => 443,  1374 => 441,  1370 => 440,  1367 => 439,  1365 => 438,  1360 => 437,  1357 => 436,  1351 => 435,  1348 => 432,  1345 => 431,  1342 => 430,  1338 => 428,  1335 => 427,  1333 => 426,  1322 => 420,  1316 => 419,  1310 => 418,  1304 => 417,  1297 => 415,  1291 => 414,  1288 => 413,  1283 => 411,  1280 => 410,  1274 => 409,  1272 => 408,  1246 => 407,  1240 => 403,  1236 => 402,  1228 => 400,  1225 => 399,  1220 => 397,  1215 => 396,  1209 => 394,  1207 => 393,  1204 => 392,  1202 => 391,  1196 => 389,  1192 => 387,  1186 => 386,  1182 => 384,  1178 => 382,  1175 => 381,  1171 => 380,  1168 => 379,  1166 => 378,  1159 => 376,  1153 => 372,  1148 => 370,  1145 => 369,  1142 => 368,  1132 => 365,  1128 => 364,  1125 => 363,  1114 => 359,  1106 => 358,  1101 => 357,  1099 => 356,  1094 => 353,  1091 => 352,  1087 => 350,  1084 => 349,  1081 => 348,  1078 => 347,  1074 => 346,  1068 => 344,  1066 => 343,  1064 => 342,  1062 => 341,  1057 => 338,  1050 => 333,  1046 => 332,  1042 => 331,  1039 => 330,  1037 => 329,  1032 => 328,  1030 => 327,  1027 => 326,  1020 => 325,  1017 => 323,  1014 => 322,  1011 => 321,  1007 => 319,  1004 => 318,  1002 => 317,  991 => 311,  985 => 310,  979 => 309,  973 => 308,  966 => 306,  960 => 305,  957 => 304,  952 => 302,  949 => 301,  943 => 300,  941 => 299,  915 => 298,  911 => 296,  907 => 294,  899 => 292,  896 => 291,  888 => 289,  882 => 287,  880 => 286,  877 => 285,  875 => 284,  870 => 282,  867 => 281,  863 => 279,  857 => 278,  853 => 276,  849 => 274,  846 => 273,  842 => 272,  839 => 271,  837 => 270,  830 => 268,  824 => 264,  819 => 262,  816 => 261,  814 => 260,  811 => 259,  801 => 257,  797 => 256,  794 => 255,  783 => 251,  775 => 250,  770 => 249,  768 => 248,  763 => 245,  760 => 244,  756 => 242,  753 => 241,  750 => 240,  747 => 239,  743 => 238,  737 => 236,  735 => 235,  733 => 234,  731 => 233,  727 => 231,  721 => 227,  717 => 226,  713 => 225,  710 => 224,  708 => 223,  703 => 222,  700 => 221,  693 => 219,  690 => 218,  687 => 217,  683 => 215,  680 => 214,  678 => 213,  667 => 207,  661 => 206,  654 => 204,  648 => 203,  641 => 201,  635 => 200,  632 => 199,  627 => 197,  624 => 196,  618 => 195,  616 => 194,  590 => 193,  585 => 190,  581 => 188,  573 => 186,  571 => 185,  568 => 184,  560 => 183,  554 => 181,  552 => 180,  549 => 179,  547 => 178,  541 => 176,  537 => 174,  531 => 173,  527 => 171,  523 => 169,  520 => 168,  516 => 167,  513 => 166,  511 => 165,  504 => 163,  498 => 159,  493 => 157,  490 => 156,  487 => 155,  477 => 152,  473 => 151,  470 => 150,  459 => 146,  451 => 145,  446 => 144,  444 => 143,  439 => 140,  436 => 139,  432 => 137,  429 => 136,  426 => 135,  423 => 134,  419 => 133,  413 => 131,  411 => 130,  409 => 129,  407 => 128,  404 => 127,  399 => 124,  395 => 122,  391 => 121,  388 => 120,  385 => 119,  382 => 118,  380 => 117,  377 => 116,  375 => 115,  368 => 114,  366 => 113,  363 => 112,  360 => 111,  356 => 109,  353 => 108,  351 => 107,  340 => 101,  334 => 100,  327 => 98,  321 => 97,  314 => 95,  308 => 94,  305 => 93,  300 => 91,  297 => 90,  291 => 89,  289 => 88,  265 => 87,  260 => 84,  256 => 82,  248 => 80,  246 => 79,  243 => 78,  238 => 77,  233 => 76,  227 => 74,  225 => 73,  222 => 72,  220 => 71,  216 => 70,  210 => 69,  207 => 68,  203 => 66,  197 => 65,  193 => 63,  189 => 61,  186 => 60,  182 => 59,  179 => 58,  177 => 57,  170 => 52,  165 => 50,  162 => 49,  159 => 48,  149 => 45,  144 => 44,  134 => 41,  126 => 40,  121 => 39,  119 => 38,  114 => 35,  111 => 34,  107 => 32,  104 => 31,  101 => 30,  98 => 29,  94 => 28,  88 => 26,  86 => 25,  84 => 24,  82 => 23,  76 => 19,  68 => 17,  65 => 16,  57 => 14,  54 => 13,  46 => 11,  43 => 10,  35 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="ttproduct-main">*/
/* <div class="TTProduct-Tab TT-product-carousel products-list">*/
/* <div class="tthometab">*/
/* <div class="box-heading tthometab-title"><h3>{{ heading_title }}</h3></div>*/
/* <div id="TTPTab-{{ module }}" class="tab-box-heading">*/
/* 	<ul class="nav nav-tabs">*/
/* 	{% if featured_products%}*/
/* 	  <li><a href="#tab-featured-{{ module }}" data-toggle="tab">{{ tab_featured }}</a></li>*/
/* 	{% endif %}*/
/* 	{% if latest_products%}*/
/* 	  <li><a href="#tab-latest-{{ module }}" data-toggle="tab">{{ tab_latest }}</a></li>*/
/* 	{% endif %}*/
/* 	{% if bestseller_products%}*/
/* 	  <li><a href="#tab-bestseller-{{ module }}" data-toggle="tab">{{ tab_bestseller }}</a></li>*/
/* 	{% endif %}*/
/* 	{% if special_products%}*/
/* 	  <li><a href="#tab-special-{{ module }}" data-toggle="tab">{{ tab_special }}</a></li>*/
/* 	{% endif %}*/
/* 	</ul>*/
/* </div>*/
/* </div>*/
/* <div class="tab-content">*/
/* {% if featured_products %}*/
/* {% set cnt = 1 %}*/
/* {% set tcnt_f = featured_products|length %}*/
/*   <div id="tab-featured-{{ module }}" class="tab-pane row">*/
/*    <div class="products-carousel">*/
/*       {% for product in featured_products %}*/
/* 			{% if tcnt_f >= 8 %}*/
/* 				{% if cnt is divisible by(2) %}*/
/* 				{% else %}*/
/* 					<div class='single-column'>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* 	 <div class="product-layouts">*/
/* 		<div class="product-thumb transition">*/
/* 		  <div class="image">*/
/* 			{% if product.thumb_swap %}*/
/* 					<a href="{{ product.href }}">*/
/* 						<img class="image_thumb" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 						<img class="image_thumb_swap" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 					</a>*/
/* 				{% else %}*/
/* 					<a href="{{ product.href }}">*/
/* 						<img class="img-responsive" src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" />*/
/* 					</a>*/
/* 			{% endif %}*/
/* 			{% if product.special %}*/
/* 			  <div class="sale-icon">Sale</div>*/
/* 			  <span class="percent">-{{ product.percent }}%</span>*/
/* 			{% endif %}*/
/* 		  </div>*/
/* 		  */
/* 	  	  <div class="thumb-description">*/
/*       <div class="caption">*/
/* */
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
/*         <!--<p class="description">{{ product.description }}</p>-->*/
/* 		{% if product.price %}*/
/* 			<div class="price">*/
/* 			  {% if not product.special %}*/
/* 			  {{ product.price }}*/
/* 			  {% else %}*/
/* 			  <span class="price-new">{{ product.special }}</span> */
/* 			  <span class="price-old">{{ product.price }}</span>*/
/* 			  {% endif %} */
/* 			  {% if product.tax %}*/
/* 			  <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* 		  {% endif %}*/
/* */
/*       </div>	  	  */
/* 		  <div class="button-group">*/
/* 			 <button class="btn-cart {% if product.product_quantity <= 0 %}{{ "disabled" }}{% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 			 {% if product.product_quantity <=0 %}*/
/* 				{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 				{% else %} */
/* 				{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 			{% endif %}*/
/* 			</span></button>*/
/* 			<button class="btn-wishlist" title="{{ button_wishlist }}"  onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i>*/
/* 			<span title="{{ button_wishlist }}">{{ button_wishlist }}</span>*/
/* 			</button>*/
/* 			<button class="btn-compare" title="{{ button_compare }}"  onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i>*/
/* 			<span title="{{ button_compare }}">{{ button_compare }}</span>*/
/* 			</button>*/
/* 			<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 				<span title="{{ button_quickview }}">{{ button_quickview }}</span>*/
/* 		</button>*/
/* 		  </div>*/
/* 	  </div>*/
/* 	  </div>*/
/*       </div>*/
/* 	 {% if tcnt_f >= 8 %}*/
/* 				{% if cnt is divisible by(2) %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* */
/* 				{% set cnt = cnt + 1 %}*/
/* 	  		*/
/*       		 {% endfor %} {# foreach END #}*/
/* */
/* 			 {% set cnt = 1 %}*/
/* 		  {% if tcnt_f >= 8 %}*/
/* 		   {% if tcnt_f is divisible by(2) %}*/
/* 		   {% else %}*/
/* 			 </div>*/
/* 		   {% endif %} */
/* 		 {% endif %}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if latest_products%}*/
/* {% set cnt = 1 %}*/
/* {% set tcnt_l = latest_products|length %}*/
/*   <div id="tab-latest-{{ module }}" class="tab-pane row">*/
/* 	<div class="products-carousel">*/
/* 	  {% for product in latest_products %}*/
/* 			{% if tcnt_l >= 8 %}*/
/* 				{% if cnt  is divisibleby(2) %}*/
/* 				{% else %}*/
/* 					<div class='single-column'>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* 	  		 <div class="product-layouts">*/
/* 		  <div class="product-thumb transition">*/
/*       <div class="image">*/
/* 	{% if product.thumb_swap %}*/
/* 			<a href="{{ product.href }}">*/
/* 				<img class="image_thumb" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 				<img class="image_thumb_swap" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 			</a>*/
/* */
/* 		{% else %}*/
/* */
/* 			<a href="{{ product.href }}">*/
/* 				<img class="img-responsive" src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" />*/
/* 			</a>*/
/* 	{% endif %}*/
/*         {% if product.special %}*/
/* 		  <div class="sale-icon">Sale</div>*/
/* 		  <span class="percent">-{{ product.percent }}%</span>*/
/* 		{% endif %}*/
/* 	  </div>*/
/* 	  <div class="thumb-description">*/
/*       <div class="caption">*/
/* 	    */
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 		*/
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
/*         <!--<p class="description">{{ product.description }}</p>-->*/
/*       */
/*         {% if product.price %}*/
/*         <div class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* 		  {% endif %} */
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 		  {% endif %}*/
/*         </div>*/
/* 		{% endif %}*/
/* 		*/
/*       </div>*/
/*         <div class="button-group">*/
/* 		  <button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 		 {% if product.product_quantity <=0 %}*/
/* 			{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 			{% else %} */
/* 			{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 		{% endif %}*/
/* 		</span></button>*/
/*          <button class="btn-wishlist" title="{{ button_wishlist }}"  onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i>*/
/* 		<span title="{{ button_wishlist }}">{{ button_wishlist }}</span>*/
/* 		</button>*/
/*         <button class="btn-compare" title="{{ button_compare }}"  onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i>*/
/* 		<span title="{{ button_compare }}">{{ button_compare }}</span>*/
/* 		</button>*/
/* 		<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 		<span title="{{ button_quickview }}">{{ button_quickview }}</span>*/
/* 		</button>*/
/*       </div>*/
/* 	  </div>*/
/* 	  </div>*/
/* 	</div>	*/
/* 		{% if tcnt_l >= 8 %}*/
/* 				{% if cnt is divisibleby(2) %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* 				{% set cnt = cnt + 1 %}*/
/* 	  		*/
/* 	{% endfor %}*/
/* 		{% set cnt = 1 %}*/
/* 		  {% if tcnt_l >= 8 %} */
/* 		  {% if tcnt_l  is divisibleby(2) %}*/
/* 		  {% else %}*/
/* 		   </div>*/
/* 		  {% endif %} */
/* 		  {% endif %}	*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* {% if bestseller_products%}*/
/* {% set cnt = 1 %}*/
/* {% set tcnt_b = bestseller_products|length %}*/
/*  <div id="tab-bestseller-{{ module }}" class="tab-pane row">*/
/*     <div class="products-carousel">*/
/*       {% for product in bestseller_products %}*/
/* 	  			{% if tcnt_b >= 8 %}*/
/* 				{% if cnt  is divisibleby(2) %}*/
/* 				{% else %}*/
/* 					<div class='single-column'>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/*       <div class="product-layouts">*/
/*           <div class="product-thumb transition">*/
/*       <div class="image">*/
/* 		{% if product.thumb_swap %}*/
/* 				<a href="{{ product.href }}">*/
/* 					<img class="image_thumb" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 					<img class="image_thumb_swap" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 				</a>*/
/* */
/* 			{% else %}*/
/* */
/* 				<a href="{{ product.href }}">*/
/* 					<img class="img-responsive" src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" />*/
/* 				</a>*/
/* 		{% endif %} */
/*         {% if product.special %}*/
/* 		  <div class="sale-icon">Sale</div>*/
/* 		  <span class="percent">-{{ product.percent }}%</span>*/
/* 		{% endif %}*/
/* 	  </div>*/
/* 	  <div class="thumb-description">*/
/*       <div class="caption">*/
/* 	  */
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 		*/
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
/*         <!--<p class="description">{{ product.description }}</p>-->*/
/*       */
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
/*         </div> */
/* 	  {% endif %}*/
/*       </div>*/
/*         <div class="button-group">*/
/*         <button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 		 {% if product.product_quantity <=0 %}*/
/* 			{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 			{% else %} */
/* 			{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 		{% endif %}*/
/* 		</span></button>*/
/* 		<button class="btn-wishlist" title="{{ button_wishlist }}"  onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i>*/
/* 		<span title="{{ button_wishlist }}">{{ button_wishlist }}</span>*/
/* 		</button>*/
/*         <button class="btn-compare" title="{{ button_compare }}"  onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i>*/
/* 		<span title="{{ button_compare }}">{{ button_compare }}</span></button>*/
/* 		<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 		<span title="{{ button_quickview }}">{{ button_quickview }}</span>*/
/* 		</button>*/
/*       </div>*/
/* 	  </div>*/
/* 	  </div>*/
/*         </div>*/
/* 			{% if tcnt_b >= 8 %}*/
/* 				{% if cnt  is divisibleby(2) %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* 				{% set cnt = cnt + 1 %}*/
/* 	  		*/
/*       		   {# foreach END*/
/*  #}		*/
/* 	{% endfor %} */
/* 		{% set cnt = 1 %}*/
/* 		  {% if tcnt_b >= 8 %} */
/* 		  {% if tcnt_b is divisibleby(2) %}*/
/* 		  {% else %}*/
/* 		   </div>*/
/* 		  {% endif %} */
/* 		  {% endif %}  */
/* 	*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% if special_products%}*/
/* {% set cnt = 1 %}*/
/* {% set tcnt_b = special_products|length %}*/
/*  <div id="tab-special-{{ module }}" class="tab-pane row">*/
/*     <div class="products-carousel">*/
/* 	  {% for product in special_products %}*/
/* 			{% if tcnt_s >= 8 %}*/
/* 			{% if cnt  is divisibleby(2) %}*/
/* 			{% else %}*/
/* 				<div class='single-column'>*/
/* 			{% endif %}*/
/* 			{% endif %}*/
/*       <div class="product-layouts">*/
/*           <div class="product-thumb transition">*/
/*       <div class="image">*/
/* 		{% if product.thumb_swap %}*/
/* 				<a href="{{ product.href }}">*/
/* 					<img class="image_thumb" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 					<img class="image_thumb_swap" src="{{ product.thumb_swap }}" title="{{ product.name }}" alt="{{ product.name }}" />*/
/* 				</a>*/
/* */
/* 			{% else %}*/
/* */
/* 				<a href="{{ product.href }}">*/
/* 					<img class="img-responsive" src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" />*/
/* 				</a>*/
/* 			{% endif %}*/
/*         {% if product.special %}*/
/* 		  <div class="sale-icon">Sale</div>*/
/* 		  <span class="percent">-{{ product.percent }}%</span>*/
/* 		{% endif %}*/
/* 	  </div>*/
/* 	  <div class="thumb-description">*/
/*       <div class="caption">*/
/* 	    */
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 		*/
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
/*         <!--<p class="description">{{ product.description }}</p>-->*/
/*         */
/*         {% if product.price %}*/
/*         <div class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> */
/* 		  <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </div>*/
/* 		{% endif %} */
/* */
/*       </div>*/
/*         <div class="button-group">*/
/* 		<button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 		 {% if product.product_quantity <=0 %}*/
/* 			{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 			{% else %} */
/* 			{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 		{% endif %}*/
/* 		</span></button>*/
/*         <button class="btn-wishlist"  title="{{ button_wishlist }}"  onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i>*/
/* 		<span title="{{ button_wishlist }}">{{ button_wishlist }}</span>*/
/* 		</button>*/
/*         <button class="btn-compare" title="{{ button_compare }}"  onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i>*/
/* 		<span title="{{ button_compare }}">{{ button_compare }}</span></button>*/
/* 		<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 		<span title="{{ button_quickview }}">{{ button_quickview }}</span>*/
/* 		</button>*/
/*       </div>*/
/* 	  </div>*/
/* 	  </div>*/
/*        </div>	*/
/*       		 {% if tcnt_s >= 8 %}*/
/* 				{% if cnt  is divisibleby(2) %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* 				{% set cnt = cnt + 1 %}*/
/* 	  		*/
/*       		   {# foreach END*/
/*  #}*/
/* 	  {% endfor %}*/
/* 		 {% set cnt = 1 %}*/
/* 		  {% if tcnt_s >= 8 %} */
/* 		  {% if tcnt_s is divisibleby(2) %}*/
/* 		  {% else %}*/
/* 		   </div>*/
/* 		  {% endif %} */
/* 		  {% endif %}*/
/*  </div>*/
/*  </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript">*/
/* $('.TTProduct-Tab  .tab-box-heading > ul > li:first-child').addClass('active');*/
/* $('.TTProduct-Tab  .tab-content > .tab-pane:first-child').addClass('active');*/
/* var tttrendingproducts = $(".TTProduct-Tab .products-carousel.owl-carousel");*/
/* 	tttrendingproducts.owlCarousel({*/
/* 	items:4,*/
/*     itemsDesktop : [1170,4],*/
/*     itemsDesktopSmall : [991,3],*/
/*     itemsTablet: [767,2],*/
/*     itemsMobile : [480,1],*/
/* 	navigation: true,*/
/* 	pagination: false*/
/*     });*/
/* </script>*/
