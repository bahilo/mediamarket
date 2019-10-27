<?php

/* OPC170_02/template/product/search.twig */
class __TwigTemplate_db3be02785a409806f5252146801212c8d72ff469daef88a57b478d3f455316e extends Twig_Template
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
<div id=\"product-search\" class=\"container\">
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
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t  <!-- Search Criteria START -->
\t  <div class=\"search-criteria\">
      <label class=\"control-label\" for=\"input-search\">";
        // line 20
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 23
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-sm-4\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 27
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 29
            echo "            ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 30
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            } else {
                // line 32
                echo "            <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
            ";
            }
            // line 34
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 35
                echo "            ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 36
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                } else {
                    // line 38
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
            ";
                }
                // line 40
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 41
                    echo "            ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 42
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    } else {
                        // line 44
                        echo "            <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
            ";
                    }
                    // line 46
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          </select>
        </div>
        <div class=\"col-sm-4\">
          <label class=\"checkbox-inline\">
            ";
        // line 53
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 54
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 56
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 58
        echo "            ";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>
      </div>
      <p>
        <label class=\"checkbox-inline\">
          ";
        // line 63
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 64
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 66
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 68
        echo "          ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
      </p>
      <input type=\"button\" value=\"";
        // line 70
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
\t  </div>
\t  <!-- Search Criteria END -->
      <h2>";
        // line 73
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h2>
      ";
        // line 74
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 75
            echo "\t  <!-- Category filter START -->
\t   <p class=\"category-compare\"><a href=\"";
            // line 76
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></p>
      <div class=\"category-filter\">
\t  <!-- Grid-List Buttons -->
        <div class=\"col-md-2 filter-grid-list\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 81
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 82
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          </div>
        </div>
        <!-- Show Products Selection -->
\t\t<div class=\"filter-show\">
\t\t<div class=\"col-md-4 text-right filter-text\">
            <label class=\"control-label input-group-addon\" for=\"input-limit\">";
            // line 88
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
\t\t</div>
\t\t<div class=\"col-md-8 text-right filter-selection\">
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 93
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 94
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 96
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                }
                // line 98
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "            </select>
          </div>
        </div>
\t\t<!-- Sort By Selection -->
\t\t<div class=\"filter-sort-by\">
        <div class=\"col-md-3 text-right filter-text\">
\t\t    <label class=\"control-label input-group-addon\" for=\"input-sort\">";
            // line 105
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
\t\t</div>
          <div class=\"col-md-9 text-right filter-selection\">
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 110
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 111
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 113
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                }
                // line 115
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </select>
          </div>
        </div>
      </div>
\t  <!-- Category filter END -->
\t  
\t  <!-- Search products START -->
\t  <div class=\"category-products\">
      <div class=\"row\">
        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 126
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb row\">
            <div class=\"image\"><a href=\"";
                // line 128
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a>
\t\t\t";
                // line 129
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 130
                    echo "\t\t\t<div class=\"sale-icon\">Sale</div>
\t\t\t<span class=\"percent\">-";
                    // line 131
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
\t\t\t";
                }
                // line 133
                echo "\t\t\t</div>
            <div class=\"thumb-description\">
              <div class=\"caption\">
                <h4><a href=\"";
                // line 136
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t";
                // line 137
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 138
                    echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t  ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 140
                        echo "\t\t\t\t  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 141
                            echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t  ";
                        } else {
                            // line 143
                            echo "\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t  ";
                        }
                        // line 145
                        echo "\t\t\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t
                <p class=\"description\">";
                // line 149
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t ";
                // line 150
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 151
                    echo "                <div class=\"price\">
                  ";
                    // line 152
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 153
                        echo "                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 155
                        echo "                  <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                  ";
                    }
                    // line 157
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 158
                        echo "                  <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                  ";
                    }
                    // line 160
                    echo "                </div>
               ";
                }
                // line 162
                echo "                
              </div>\t\t  
              \t<div class=\"button-group\">
                 <button class=\"btn-cart";
                // line 165
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
                // line 166
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 167
                    echo "\t\t\t\t\t";
                    echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t\t\t";
                } else {
                    // line 168
                    echo " 
\t\t\t\t\t";
                    // line 169
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t</span></button>
                <button class=\"btn-wishlist\" type=\"button\" title=\"";
                // line 172
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button class=\"btn-compare\" type=\"button\" title=\"";
                // line 173
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 174
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t\t\t<span title=\"";
                // line 175
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t\t\t</button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "      </div>
\t  </div>
\t  <!-- Search products END -->
\t  
\t  <!-- Search category pagination START -->
      <div class=\"category-pagination\">
\t    <div class=\"col-xs-6 text-left\">";
            // line 188
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        <div class=\"col-xs-6 text-right\">";
            // line 189
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
      </div>
\t  <!-- Search category pagination END -->
      ";
        } else {
            // line 193
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 195
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 196
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 245
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 245,  583 => 196,  578 => 195,  572 => 193,  565 => 189,  561 => 188,  553 => 182,  538 => 175,  532 => 174,  526 => 173,  520 => 172,  517 => 171,  512 => 169,  509 => 168,  503 => 167,  501 => 166,  475 => 165,  470 => 162,  466 => 160,  458 => 158,  455 => 157,  447 => 155,  441 => 153,  439 => 152,  436 => 151,  434 => 150,  430 => 149,  427 => 148,  423 => 146,  417 => 145,  413 => 143,  409 => 141,  406 => 140,  402 => 139,  399 => 138,  397 => 137,  391 => 136,  386 => 133,  381 => 131,  378 => 130,  376 => 129,  366 => 128,  362 => 126,  358 => 125,  347 => 116,  341 => 115,  333 => 113,  325 => 111,  322 => 110,  318 => 109,  311 => 105,  303 => 99,  297 => 98,  289 => 96,  281 => 94,  278 => 93,  274 => 92,  267 => 88,  258 => 82,  254 => 81,  244 => 76,  241 => 75,  239 => 74,  235 => 73,  229 => 70,  223 => 68,  219 => 66,  215 => 64,  213 => 63,  204 => 58,  200 => 56,  196 => 54,  194 => 53,  188 => 49,  182 => 48,  176 => 47,  170 => 46,  162 => 44,  154 => 42,  151 => 41,  146 => 40,  138 => 38,  130 => 36,  127 => 35,  122 => 34,  114 => 32,  106 => 30,  103 => 29,  99 => 28,  95 => 27,  86 => 23,  80 => 20,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-search" class="container">*/
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
/*       <h1>{{ heading_title }}</h1>*/
/* 	  <!-- Search Criteria START -->*/
/* 	  <div class="search-criteria">*/
/*       <label class="control-label" for="input-search">{{ entry_search }}</label>*/
/*       <div class="row">*/
/*         <div class="col-sm-4">*/
/*           <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*           <select name="category_id" class="form-control">*/
/*             <option value="0">{{ text_category }}</option>*/
/*             {% for category_1 in categories %}*/
/*             {% if category_1.category_id == category_id %}*/
/*             <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_2 in category_1.children %}*/
/*             {% if category_2.category_id == category_id %}*/
/*             <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*             {% endif %}*/
/*             {% for category_3 in category_2.children %}*/
/*             {% if category_3.category_id == category_id %}*/
/*             <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% else %}*/
/*             <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*           <label class="checkbox-inline">*/
/*             {% if sub_category %}*/
/*             <input type="checkbox" name="sub_category" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="sub_category" value="1" />*/
/*             {% endif %}*/
/*             {{ text_sub_category }}</label>*/
/*         </div>*/
/*       </div>*/
/*       <p>*/
/*         <label class="checkbox-inline">*/
/*           {% if description %}*/
/*           <input type="checkbox" name="description" value="1" id="description" checked="checked" />*/
/*           {% else %}*/
/*           <input type="checkbox" name="description" value="1" id="description" />*/
/*           {% endif %}*/
/*           {{ entry_description }}</label>*/
/*       </p>*/
/*       <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary" />*/
/* 	  </div>*/
/* 	  <!-- Search Criteria END -->*/
/*       <h2>{{ text_search }}</h2>*/
/*       {% if products %}*/
/* 	  <!-- Category filter START -->*/
/* 	   <p class="category-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></p>*/
/*       <div class="category-filter">*/
/* 	  <!-- Grid-List Buttons -->*/
/*         <div class="col-md-2 filter-grid-list">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <!-- Show Products Selection -->*/
/* 		<div class="filter-show">*/
/* 		<div class="col-md-4 text-right filter-text">*/
/*             <label class="control-label input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/* 		</div>*/
/* 		<div class="col-md-8 text-right filter-selection">*/
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
/* 		<!-- Sort By Selection -->*/
/* 		<div class="filter-sort-by">*/
/*         <div class="col-md-3 text-right filter-text">*/
/* 		    <label class="control-label input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/* 		</div>*/
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
/* 	  */
/* 	  <!-- Search products START -->*/
/* 	  <div class="category-products">*/
/*       <div class="row">*/
/*         {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-thumb row">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a>*/
/* 			{% if product.special %}*/
/* 			<div class="sale-icon">Sale</div>*/
/* 			<span class="percent">-{{ product.percent }}%</span>*/
/* 			{% endif %}*/
/* 			</div>*/
/*             <div class="thumb-description">*/
/*               <div class="caption">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
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
/* 				*/
/*                 <p class="description">{{ product.description }}</p>*/
/* 				 {% if product.price %}*/
/*                 <div class="price">*/
/*                   {% if  not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %}*/
/*                   <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                   {% endif %}*/
/*                   {% if product.tax %}*/
/*                   <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                {% endif %}*/
/*                 */
/*               </div>		  */
/*               	<div class="button-group">*/
/*                  <button class="btn-cart{% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 				 {% if product.product_quantity <=0 %}*/
/* 					{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 					{% else %} */
/* 					{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 				{% endif %}*/
/* 				</span></button>*/
/*                 <button class="btn-wishlist" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button class="btn-compare" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* 				<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 				<span title="{{ button_quickview }}">{{ button_quickview }}</span>*/
/* 				</button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/* 	  </div>*/
/* 	  <!-- Search products END -->*/
/* 	  */
/* 	  <!-- Search category pagination START -->*/
/*       <div class="category-pagination">*/
/* 	    <div class="col-xs-6 text-left">{{ results }}</div>*/
/*         <div class="col-xs-6 text-right">{{ pagination }}</div>*/
/*       </div>*/
/* 	  <!-- Search category pagination END -->*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* */
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* */
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* */
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
/* {{ footer }}*/
