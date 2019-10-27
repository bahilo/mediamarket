<?php

/* OPC170_02/template/product/category.twig */
class __TwigTemplate_88683c2d8534dd737b1b1e1b5c3d3dc4563e3847f515f36f8ef635e00918c1c2 extends Twig_Template
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
<div id=\"product-category\" class=\"container product-category\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "

\t  <!-- Category Description START -->
      <h1 class=\"category-name\">";
        // line 19
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>

      
\t  <div class=\"category-description\">
      <div class=\"row\">
\t    ";
        // line 24
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 25
            echo "        <div class=\"col-sm-5 category-image\">
\t\t\t<div class=\"category-bg\">
\t\t\t\t<a class=\"cat-img\"><img src=\"";
            // line 27
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"img-thumbnail\" /></a>
\t\t\t</div>
\t\t</div>
        ";
        }
        // line 31
        echo "\t\t
\t\t";
        // line 32
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 33
            echo "\t\t<div class=\"block-description col-sm-7\">
        ";
            // line 34
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 35
                echo "        <div class=\"category-content\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 37
            echo "\t\t
\t\t<!-- Category listing START -->
\t\t  ";
            // line 39
            if ((isset($context["categories"]) ? $context["categories"] : null)) {
                // line 40
                echo "\t\t  <div class=\"category-list\">
\t\t  <h3>";
                // line 41
                echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
                echo "</h3>
\t\t  <div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t  <ul>
\t\t\t\t";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 46
                    echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"subcategory-image\">
\t\t\t\t\t\t";
                    // line 48
                    if ($this->getAttribute($context["category"], "img", array())) {
                        // line 49
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["category"], "href", array());
                        echo "\"><img src=\"";
                        echo $this->getAttribute($context["category"], "img", array());
                        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t<h5><a href=\"";
                    // line 52
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></h5>
\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t  </ul>
\t\t\t</div>
\t\t  </div>
\t\t  </div>
\t\t  ";
            }
            // line 60
            echo "\t  \t<!-- Category listing END -->
\t\t<p class=\"category-compare\"><a href=\"";
            // line 61
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></p>
\t\t</div>
\t\t";
        }
        // line 64
        echo "\t\t
\t\t</div>
\t\t</div>
      

\t  <!-- Category Description END -->

      ";
        // line 71
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 72
            echo "\t  
\t  <!-- Category filter START -->
\t  <div class=\"category-filter\">
\t    <!-- Grid-List Buttons -->
        <div class=\"col-md-2 filter-grid-list\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 78
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 79
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          </div>
        </div>

\t\t<!-- Show Products Selection -->
\t\t<div class=\"filter-show\">
          <div class=\"col-md-4 text-right filter-text\">
            <label class=\"input-group-addon control-label\" for=\"input-limit\">";
            // line 86
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t  </div>
\t\t  <div class=\"col-md-8 text-right filter-selection\">
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 91
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 92
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 94
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                }
                // line 96
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            </select>
          </div>
        </div>

\t\t<!-- Sort By Selection -->
\t\t<div class=\"filter-sort-by\">
\t\t  <div class=\"col-md-3 text-right filter-text\">
            <label class=\"input-group-addon control-label\" for=\"input-sort\">";
            // line 104
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t  </div>
          <div class=\"col-md-9 text-right filter-selection\">
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 109
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 110
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 112
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                }
                // line 114
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "            </select>
          </div>
        </div>
      </div>
\t  <!-- Category filter END -->

\t  <!-- Category products START -->
\t  <div class=\"category-products\">
      <div class=\"row\">
\t  ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 125
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb row\">
            <div class=\"image\">
\t\t\t";
                // line 128
                if ($this->getAttribute($context["product"], "thumb_swap", array())) {
                    // line 129
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t<img class=\"image_thumb\" src=\"";
                    // line 130
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t\t\t<img class=\"image_thumb_swap\" src=\"";
                    // line 131
                    echo $this->getAttribute($context["product"], "thumb_swap", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t\t</a>
\t\t\t\t";
                } else {
                    // line 134
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                    // line 135
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" />
\t\t\t\t\t</a>
\t\t\t";
                }
                // line 138
                echo "\t\t\t";
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 139
                    echo "\t\t\t  <div class=\"sale-icon\">Sale</div>
\t\t\t  <span class=\"percent\">-";
                    // line 140
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
\t\t\t";
                }
                // line 142
                echo "\t\t  </div>
            <div class=\"thumb-description\">
              <div class=\"caption\">
\t\t\t\t<h4><a href=\"";
                // line 145
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
               ";
                // line 146
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 147
                    echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t  ";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 149
                        echo "\t\t\t\t  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 150
                            echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t  ";
                        } else {
                            // line 152
                            echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t  ";
                        }
                        // line 154
                        echo "\t\t\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 157
                echo "
                <p class=\"description\">";
                // line 158
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t";
                // line 159
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 160
                    echo "                \t<div class=\"price\">
\t\t\t\t  ";
                    // line 161
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 162
                        echo "                    ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 164
                        echo "\t\t\t\t    <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
\t\t\t\t\t<span class=\"price-old\">";
                        // line 165
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t  ";
                    }
                    // line 167
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    // line 168
                    echo "\t\t\t\t</div>
              \t";
                }
                // line 170
                echo " 
\t\t\t</div>\t
\t\t\t\t
\t\t\t  <div class=\"button-group\">
\t\t\t\t <button class=\"btn-cart";
                // line 174
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
                // line 175
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 176
                    echo "\t\t\t\t\t";
                    echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t\t\t";
                } else {
                    // line 177
                    echo " 
\t\t\t\t\t";
                    // line 178
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t\t\t";
                }
                // line 180
                echo "\t\t\t\t</span></button>
\t\t\t\t<button class=\"btn-wishlist\" title=\"";
                // line 181
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"  onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t\t<span title=\"";
                // line 182
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn-compare\" title=\"";
                // line 184
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"  onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t\t\t\t<span title=\"";
                // line 185
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 187
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t\t\t<span title=\"";
                // line 188
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t\t\t</button>
              </div>
\t\t  </div>   
         </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "\t  </div>
\t  </div>
\t  <!-- Category products END -->
\t  <!-- Category pagination START -->
      <div class=\"category-pagination\">
        <div class=\"col-xs-6 text-left\">";
            // line 200
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        <div class=\"col-xs-6 text-right\">";
            // line 201
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
      </div>
\t  <!-- Category pagination END -->
      ";
        }
        // line 205
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 206
            echo "      <p class=\"text-empty\">";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 208
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 211
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t  </div>
    ";
        // line 213
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
";
        // line 216
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 216,  591 => 213,  585 => 211,  577 => 208,  571 => 206,  568 => 205,  561 => 201,  557 => 200,  550 => 195,  535 => 188,  529 => 187,  522 => 185,  516 => 184,  509 => 182,  503 => 181,  500 => 180,  495 => 178,  492 => 177,  486 => 176,  484 => 175,  458 => 174,  452 => 170,  448 => 168,  439 => 167,  434 => 165,  429 => 164,  423 => 162,  421 => 161,  418 => 160,  416 => 159,  412 => 158,  409 => 157,  405 => 155,  399 => 154,  395 => 152,  391 => 150,  388 => 149,  384 => 148,  381 => 147,  379 => 146,  373 => 145,  368 => 142,  363 => 140,  360 => 139,  357 => 138,  347 => 135,  342 => 134,  332 => 131,  324 => 130,  319 => 129,  317 => 128,  312 => 125,  308 => 124,  297 => 115,  291 => 114,  283 => 112,  275 => 110,  272 => 109,  268 => 108,  261 => 104,  252 => 97,  246 => 96,  238 => 94,  230 => 92,  227 => 91,  223 => 90,  216 => 86,  206 => 79,  202 => 78,  194 => 72,  192 => 71,  183 => 64,  175 => 61,  172 => 60,  165 => 55,  154 => 52,  151 => 51,  143 => 49,  141 => 48,  137 => 46,  133 => 45,  126 => 41,  123 => 40,  121 => 39,  117 => 37,  111 => 35,  109 => 34,  106 => 33,  104 => 32,  101 => 31,  90 => 27,  86 => 25,  84 => 24,  76 => 19,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container product-category">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/* */
/* 	  <!-- Category Description START -->*/
/*       <h1 class="category-name">{{ heading_title }}</h1>*/
/* */
/*       */
/* 	  <div class="category-description">*/
/*       <div class="row">*/
/* 	    {% if thumb %}*/
/*         <div class="col-sm-5 category-image">*/
/* 			<div class="category-bg">*/
/* 				<a class="cat-img"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></a>*/
/* 			</div>*/
/* 		</div>*/
/*         {% endif %}*/
/* 		*/
/* 		{% if thumb or description %}*/
/* 		<div class="block-description col-sm-7">*/
/*         {% if description %}*/
/*         <div class="category-content">{{ description }}</div>*/
/*         {% endif %}*/
/* 		*/
/* 		<!-- Category listing START -->*/
/* 		  {% if categories %}*/
/* 		  <div class="category-list">*/
/* 		  <h3>{{ text_refine }}</h3>*/
/* 		  <div class="row">*/
/* 			<div class="col-sm-12">*/
/* 			  <ul>*/
/* 				{% for category in categories %}*/
/* 				<li>*/
/* 					<div class="subcategory-image">*/
/* 						{% if category.img %}*/
/* 							<a href="{{ category.href }}"><img src="{{ category.img }}" alt="" /></a>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<h5><a href="{{ category.href }}">{{ category.name }}</a></h5>*/
/* 				</li>*/
/* 				{% endfor %}*/
/* 			  </ul>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  </div>*/
/* 		  {% endif %}*/
/* 	  	<!-- Category listing END -->*/
/* 		<p class="category-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></p>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		*/
/* 		</div>*/
/* 		</div>*/
/*       */
/* */
/* 	  <!-- Category Description END -->*/
/* */
/*       {% if products %}*/
/* 	  */
/* 	  <!-- Category filter START -->*/
/* 	  <div class="category-filter">*/
/* 	    <!-- Grid-List Buttons -->*/
/*         <div class="col-md-2 filter-grid-list">*/
/*           <div class="btn-group">*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*           </div>*/
/*         </div>*/
/* */
/* 		<!-- Show Products Selection -->*/
/* 		<div class="filter-show">*/
/*           <div class="col-md-4 text-right filter-text">*/
/*             <label class="input-group-addon control-label" for="input-limit">{{ text_limit }}</label>*/
/* 		  </div>*/
/* 		  <div class="col-md-8 text-right filter-selection">*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/* */
/* 		<!-- Sort By Selection -->*/
/* 		<div class="filter-sort-by">*/
/* 		  <div class="col-md-3 text-right filter-text">*/
/*             <label class="input-group-addon control-label" for="input-sort">{{ text_sort }}</label>*/
/* 		  </div>*/
/*           <div class="col-md-9 text-right filter-selection">*/
/*             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* 	  <!-- Category filter END -->*/
/* */
/* 	  <!-- Category products START -->*/
/* 	  <div class="category-products">*/
/*       <div class="row">*/
/* 	  {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-thumb row">*/
/*             <div class="image">*/
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
/*             <div class="thumb-description">*/
/*               <div class="caption">*/
/* 				<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                {% if product.rating %}*/
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
/* */
/*                 <p class="description">{{ product.description }}</p>*/
/* 				{% if product.price %}*/
/*                 	<div class="price">*/
/* 				  {% if not product.special %}*/
/*                     {{ product.price }}*/
/*                   {% else %}*/
/* 				    <span class="price-new">{{ product.special }}</span>*/
/* 					<span class="price-old">{{ product.price }}</span>*/
/* 				  {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %}*/
/* 				</div>*/
/*               	{% endif %}*/
/*  */
/* 			</div>	*/
/* 				*/
/* 			  <div class="button-group">*/
/* 				 <button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 				 {% if product.product_quantity <=0 %}*/
/* 					{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 					{% else %} */
/* 					{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 				{% endif %}*/
/* 				</span></button>*/
/* 				<button class="btn-wishlist" title="{{ button_wishlist }}"  onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i>*/
/* 					<span title="{{ button_wishlist }}">{{ button_wishlist }}</span>*/
/* 				</button>*/
/* 				<button class="btn-compare" title="{{ button_compare }}"  onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i>*/
/* 					<span title="{{ button_compare }}">{{ button_compare }}</span>*/
/* 				</button>*/
/* 				<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 				<span title="{{ button_quickview }}">{{ button_quickview }}</span>*/
/* 				</button>*/
/*               </div>*/
/* 		  </div>   */
/*          </div>*/
/*         </div>*/
/*         {% endfor %}*/
/* 	  </div>*/
/* 	  </div>*/
/* 	  <!-- Category products END -->*/
/* 	  <!-- Category pagination START -->*/
/*       <div class="category-pagination">*/
/*         <div class="col-xs-6 text-left">{{ results }}</div>*/
/*         <div class="col-xs-6 text-right">{{ pagination }}</div>*/
/*       </div>*/
/* 	  <!-- Category pagination END -->*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p class="text-empty">{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}*/
/* 	  </div>*/
/*     {{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* {{ footer }}*/
