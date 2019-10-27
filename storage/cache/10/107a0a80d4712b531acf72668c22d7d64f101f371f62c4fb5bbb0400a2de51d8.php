<?php

/* OPC170_02/template/product/product.twig */
class __TwigTemplate_340b74f81b223e487b70ddce1bcb36f32eb0b726eebf93369452654f39d68dcb extends Twig_Template
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
<div id=\"product-product\" class=\"container product-product\">
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
  <div class=\"row\">
  \t";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t<h1 class=\"page-title\">";
        // line 19
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
\t  <!-- Product row START -->
      <div class=\"row\">
\t  ";
        // line 22
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 23
            echo "\t    ";
            $context["class"] = "col-sm-6";
            // line 24
            echo "\t  ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "        ";
            $context["class"] = "col-sm-5";
            // line 26
            echo "      ";
        } else {
            // line 27
            echo "        ";
            $context["class"] = "col-xs-12 col-sm-5 col-md-5";
            // line 28
            echo "      ";
        }
        // line 29
        echo "\t  \t<div class=\"product-block\">
        <div class=\"";
        // line 30
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " product-images\">
\t\t";
        // line 31
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 32
            echo "\t\t  <!-- Product Image thumbnails START -->
          <div class=\"thumbnails\">
            ";
            // line 34
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 35
                echo "            <div class=\"product-image\">
\t\t\t  <a class=\"thumbnail\" title=\"";
                // line 36
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\">
\t\t\t  <img src=\"";
                // line 37
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" data-zoom-image=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" />
\t\t\t  ";
                // line 38
                if ((isset($context["special"]) ? $context["special"] : null)) {
                    // line 39
                    echo "\t\t\t\t <span class=\"product-sale-icon\">Sale</span>
\t\t\t\t <span class=\"product-percent\">-";
                    // line 40
                    echo (isset($context["product_percent"]) ? $context["product_percent"] : null);
                    echo "%</span>
\t\t\t  ";
                }
                // line 42
                echo "\t\t\t  </a>
\t\t\t</div>
            ";
            }
            // line 45
            echo "\t\t\t
\t\t  <div class=\"additional-images-container\">
            ";
            // line 47
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 48
                echo "\t\t\t<div class=\"additional-images\">
            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 50
                    echo "            <div class=\"image-additional\"> 
\t\t\t\t<img src=\"";
                    // line 51
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" data-image=\"";
                    echo $this->getAttribute($context["image"], "large", array());
                    echo "\" data-zoom-image=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" />
\t\t\t</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t</div>
            ";
            }
            // line 56
            echo "\t\t  </div>
\t\t  <!-- Product Image thumbnails END -->
\t\t  </div>
        ";
        }
        // line 60
        echo "        </div>
<script type=\"text/javascript\">
\$(\".additional-images\").owlCarousel({
\titems: 3,
\titemsDesktop: [1199,2],
\titemsDesktopSmall: [991,2],
\titemsTablet: [767,3],
\titemsMobile: [480,2],
\tautoPlay: false,
\tnavigation: true,
\tpagination: false
});

// Custom Navigation Events
\$(\".additional-next\").click(function(){
\t\$(\".additional-images\").trigger('owl.next');
})
\$(\".additional-prev\").click(function(){
\t\$(\".additional-images\").trigger('owl.prev');
})
\$(\".additional-images-container .customNavigation\").addClass('owl-navigation');

</script>
\t\t";
        // line 83
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 84
            echo "\t\t";
            $context["class"] = "col-sm-6";
            // line 85
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 86
            echo "        ";
            $context["class"] = "col-sm-7";
            // line 87
            echo "        ";
        } else {
            // line 88
            echo "        ";
            $context["class"] = "col-xs-12 col-sm-7 col-md-7";
            // line 89
            echo "        ";
        }
        // line 90
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " product-details\">
\t\t<h1 class=\"product-name\">";
        // line 91
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t
\t\t<table class=\"product-info\">
            ";
        // line 94
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 95
            echo "            <tr><td>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</td><td class=\"product-info-value\"><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></td></tr>
            ";
        }
        // line 97
        echo "            <tr><td>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo "</td><td class=\"product-info-value\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</td></tr>
            ";
        // line 98
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 99
            echo "            <tr><td>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</td><td class=\"product-info-value\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</td></tr>
            ";
        }
        // line 101
        echo "            <tr><td>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</td><td class=\"product-info-value\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</td></tr>
          </table>

\t\t  <!-- Product Rating START -->
          ";
        // line 105
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 106
            echo "\t\t  <div class=\"rating\">
          <div class=\"product-rating\">
\t\t\t";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 109
                echo "              ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    // line 110
                    echo "\t\t\t    <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-1x\"></i></span>
\t\t\t  ";
                } else {
                    // line 112
                    echo "\t\t\t    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i></span>
\t\t\t  ";
                }
                // line 114
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "          </div>
\t\t  <a class=\"product-total-review\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\"><i class=\"fa fa-comment\"></i>";
            // line 116
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
\t\t\t<a class=\"product-write-review\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\"><i class=\"fa fa-pencil\"></i>";
            // line 117
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
\t\t  </div>
          ";
        }
        // line 120
        echo "\t\t  <!-- Product Rating END -->

          ";
        // line 122
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 123
            echo "          <ul class=\"list-unstyled product-price\">
            ";
            // line 124
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 125
                echo "            <li>
              <h2>";
                // line 126
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 129
                echo "\t\t\t<li>
              <h2 class=\"price-new\">";
                // line 130
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h2>
            </li>
            <li><span class=\"price-old\">";
                // line 132
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
            ";
            }
            // line 134
            echo "\t\t\t";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 135
                echo "            <li class=\"product-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
            ";
            }
            // line 137
            echo "\t\t\t
            ";
            // line 138
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 139
                echo "            <li class=\"product-reward-points\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 141
            echo "\t\t\t
            ";
            // line 142
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 143
                echo "            <li>
\t\t\t<ul class=\"product-discounts\">
\t\t\t\t";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 146
                    echo "\t\t\t\t<li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "\t\t\t</ul>
\t\t\t</li>
            ";
            }
            // line 151
            echo "          </ul>
          ";
        }
        // line 153
        echo "
\t\t  <!-- Product Options START -->
          <div id=\"product\" class=\"product-options\">
\t\t  ";
        // line 156
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 157
            echo "            <h3>";
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 159
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 160
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 161
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 162
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 163
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 165
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">
\t\t\t\t";
                        // line 166
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 167
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 168
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 169
                        echo " 
\t\t\t\t</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    echo "              </select>
            </div>
            ";
                }
                // line 175
                echo "\t\t\t
            ";
                // line 176
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 177
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 178
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 179
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> 
\t\t\t  \t";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 181
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 183
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 184
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " 
\t\t\t\t\t<img src=\"";
                            // line 185
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> 
\t\t\t\t\t";
                        }
                        // line 186
                        echo " 
\t\t\t\t\t                 
                    ";
                        // line 188
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 189
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 190
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 191
                        echo " 
\t\t\t\t  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo " 
\t\t\t  </div>
            </div>
            ";
                }
                // line 198
                echo "\t\t\t
            ";
                // line 199
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 200
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 201
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 202
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> 
\t\t\t    ";
                    // line 203
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 204
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 206
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 207
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " 
\t\t\t\t\t<img src=\"";
                            // line 208
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> 
\t\t\t\t\t";
                        }
                        // line 210
                        echo "\t\t\t\t\t
                    ";
                        // line 211
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 212
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 213
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 214
                        echo " 
\t\t\t\t  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo " 
\t\t\t  </div>
            </div>
            ";
                }
                // line 221
                echo "\t\t\t
            ";
                // line 222
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 223
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 224
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 225
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 228
                echo "\t\t\t
            ";
                // line 229
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 230
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 231
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 232
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 235
                echo "\t\t\t
            ";
                // line 236
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 237
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 238
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 239
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 240
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 243
                echo "\t\t\t
            ";
                // line 244
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 245
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 246
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 248
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 254
                echo "\t\t\t
            ";
                // line 255
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 256
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 257
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 259
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 265
                echo "\t\t\t
            ";
                // line 266
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 267
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 268
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 270
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
\t\t\t  </div>
            </div>
            ";
                }
                // line 277
                echo "\t\t\t
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "            ";
        }
        // line 280
        echo "\t\t\t
            ";
        // line 281
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 282
            echo "            <h3>";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 285
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 287
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 293
        echo "\t\t\t
            <div class=\"form-group product-quantity\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 295
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 296
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 297
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 298
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn ";
        if (((isset($context["stock_quantity"]) ? $context["stock_quantity"] : null) <= 0)) {
            echo " ";
            echo "btn-info";
            echo " ";
        } else {
            echo " btn-primary ";
        }
        echo " btn-lg btn-block\" ";
        if (((isset($context["stock_quantity"]) ? $context["stock_quantity"] : null) <= 0)) {
            echo " ";
            echo "disabled";
            echo " ";
        }
        echo ">
\t\t\t  ";
        // line 299
        if (((isset($context["stock_quantity"]) ? $context["stock_quantity"] : null) <= 0)) {
            echo " ";
            echo (isset($context["stock"]) ? $context["stock"] : null);
            echo " ";
        } else {
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo " ";
        }
        echo "</button>
            </div>
            ";
        // line 301
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 302
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 304
        echo "\t\t\t</div>
\t\t  <!-- Product Options END -->

\t\t  <!-- Product Wishlist Compare START -->
          <div class=\"btn-group\">
            <button class=\"btn btn-default product-btn-wishlist\" type=\"button\" class=\"btn btn-default\" title=\"";
        // line 309
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i>
\t\t\t";
        // line 310
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo " 
\t\t\t</button> 
            <button class=\"btn btn-default product-btn-compare\" type=\"button\" class=\"btn btn-default\" title=\"";
        // line 312
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t\t";
        // line 313
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "
\t\t\t</button>
          </div>
\t\t  <!-- Product Wishlist Compare END -->
\t\t\t

            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 320
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
\t\t </div>
\t\t <!-- Product option details END -->
\t\t </div>
\t\t  </div>  <!-- Product row END -->
\t\t <!-- Product nav Tabs START -->
\t\t  <div class=\"col-sm-12 product-tabs\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 330
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
            ";
        // line 331
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 332
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
            ";
        }
        // line 334
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 335
            echo "            <li class=\"li-tab-review\"><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
            ";
        }
        // line 337
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 339
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 340
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 341
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 344
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 346
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 350
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 351
                    echo "                <tr>
                  <td>";
                    // line 352
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 353
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 356
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "              </table>
            </div>
            ";
        }
        // line 361
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 362
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 365
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                ";
            // line 366
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 367
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 369
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 370
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 375
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 377
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 382
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 383
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 393
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "
\t\t\t\t  </div>
                </div>
                ";
                // line 396
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 399
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 403
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 405
            echo "              </form>
            </div>
            ";
        }
        // line 408
        echo "\t\t\t</div>
\t      </div>
\t\t  <!-- Product tab END -->
\t\t   <!-- Related products START -->
\t\t  ";
        // line 412
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 413
            echo "\t\t  <div class=\"related-carousel products-list\">
\t\t  <div class=\"box-heading\"><h3>";
            // line 414
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3></div>
\t\t  <div class=\"related-items products-carousel row\">
\t\t\t";
            // line 416
            $context["i"] = 0;
            // line 417
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 418
                echo "\t\t\t<div class=\"product-layouts\">
\t\t\t  <div class=\"product-thumb transition\">
\t\t\t\t<div class=\"image\">
\t\t\t\t  <a href=\"";
                // line 421
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t";
                // line 422
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 423
                    echo "\t\t\t\t<div class=\"sale-icon\">Sale</div>
\t\t\t\t<span class=\"percent\">-";
                    // line 424
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
\t\t\t\t";
                }
                // line 426
                echo "\t\t\t\t</div>
\t
\t\t\t\t<div class=\"thumb-description\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t  <h4><a href=\"";
                // line 430
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
\t\t\t\t\t  ";
                // line 431
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 432
                    echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t  ";
                    // line 433
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 434
                        echo "\t\t\t\t\t\t  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 435
                            echo "\t\t\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t  ";
                        } else {
                            // line 437
                            echo "\t\t\t\t\t\t  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t  ";
                        }
                        // line 439
                        echo "\t\t\t\t\t\t   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 440
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 442
                echo "
\t\t\t\t\t    <p class=\"description\">";
                // line 443
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t";
                // line 444
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 445
                    echo "\t\t\t\t\t\t  <div class=\"price\">
\t\t\t\t\t\t  ";
                    // line 446
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 447
                        echo "\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t  ";
                    } else {
                        // line 449
                        echo "\t\t\t\t\t\t\t  <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
\t\t\t\t\t\t\t  <span class=\"price-old\">";
                        // line 450
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t  ";
                    }
                    // line 452
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " 
\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        // line 453
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> 
\t\t\t\t\t\t\t";
                    }
                    // line 455
                    echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t";
                }
                // line 457
                echo "\t\t\t\t\t  
\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t  <button class=\"btn-cart ";
                // line 461
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
\t\t\t\t\t\t ";
                // line 462
                if (($this->getAttribute($context["product"], "product_quantity", array()) <= 0)) {
                    // line 463
                    echo "\t\t\t\t\t\t\t";
                    echo ("<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">" . $this->getAttribute($context["product"], "product_stock", array()));
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 464
                    echo " 
\t\t\t\t\t\t\t";
                    // line 465
                    echo ("<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">" . (isset($context["button_cart"]) ? $context["button_cart"] : null));
                    echo "
\t\t\t\t\t\t";
                }
                // line 467
                echo "\t\t\t\t\t\t</span></button>
\t\t\t\t\t\t<button class=\"btn-wishlist\" title=\"";
                // line 468
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"  onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t<span title=\"";
                // line 469
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"btn-compare\" title=\"";
                // line 471
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"  onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i>
\t\t\t\t\t\t\t<span title=\"";
                // line 472
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" title=\"";
                // line 474
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\" onclick=\"tt_quickview.ajaxView('";
                echo $this->getAttribute($context["product"], "href", array());
                echo "')\"><i class=\"fa fa-eye\"></i>
\t\t\t\t<span title=\"";
                // line 475
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "\">";
                echo (isset($context["button_quickview"]) ? $context["button_quickview"] : null);
                echo "</span>
\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 483
            echo "\t\t  </div>
\t\t  </div>
\t\t  ";
        }
        // line 486
        echo "\t  \t  <!-- Related products END -->
\t  </div>  <!-- id content END -->

      ";
        // line 489
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 490
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 491
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 492
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " 
\t\t<a href=\"";
                    // line 493
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
        ";
                } else {
                    // line 495
                    echo "\t\t <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> 
\t\t";
                }
                // line 497
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t</p>
        ";
        }
        // line 500
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    ";
        // line 501
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
</div>
<script src=\"catalog/view/javascript/TemplateTrip/jquery.elevatezoom.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
function proelevateZoom(){
jQuery(\".product-image img\").elevateZoom({
\tzoomType: \"inner\",
\tcursor: \"crosshair\",
\tzoomWindowFadeIn: 500,
\tzoomWindowFadeOut: 750
});
}
proelevateZoom();
\$('.image-additional img').on(
      'click',
      (event) => {\t  \t
        \$('.product-image img').attr('src',\$(event.target).data('image'));\t\t
        \$('.selected').removeClass('selected');
        \$(event.target).addClass('selected');
\t\t\$('.product-image img').data('zoom-image', \$(event.currentTarget).data('zoom-image'));
        \$('.product-image img').prop('src', \$(event.currentTarget).data('image'));
\t\tproelevateZoom();
      }
\t  
);
//--></script> 
<script type=\"text/javascript\"><!--
\t\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t     \$.notify({
\t\t\t\t     \tmessage: json['success'],
\t\t\t\t     \ttarget: '_blank'
\t\t\t\t     },{
\t\t\t\t     \t// settings
\t\t\t\t     \telement: 'body',
\t\t\t\t     \tposition: null,
\t\t\t\t     \ttype: \"info\",
\t\t\t\t     \tallow_dismiss: true,
\t\t\t\t     \tnewest_on_top: false,
\t\t\t\t     \tplacement: {
\t\t\t\t     \t\tfrom: \"top\",
\t\t\t\t     \t\talign: \"right\"
\t\t\t\t     \t},
\t\t\t\t     \toffset: 20,
\t\t\t\t     \tspacing: 10,
\t\t\t\t     \tz_index: 2031,
\t\t\t\t     \tdelay: 5000,
\t\t\t\t     \ttimer: 1000,
\t\t\t\t     \turl_target: '_blank',
\t\t\t\t     \tmouse_over: null,
\t\t\t\t     \tanimate: {
\t\t\t\t     \t\tenter: 'animated fadeInDown',
\t\t\t\t     \t\texit: 'animated fadeOutUp'
\t\t\t\t     \t},
\t\t\t\t     \tonShow: null,
\t\t\t\t     \tonShown: null,
\t\t\t\t     \tonClose: null,
\t\t\t\t     \tonClosed: null,
\t\t\t\t     \ticon_type: 'class',
\t\t\t\t     \ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
\t\t\t\t     \t\t'<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">×</button>' +
\t\t\t\t     \t\t'<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
\t\t\t\t     \t\t'<div class=\"progress\" data-notify=\"progressbar\">' +
\t\t\t\t     \t\t\t'<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
\t\t\t\t     \t\t'</div>' +
\t\t\t\t     \t\t'<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
\t\t\t\t     \t'</div>' 
\t\t\t\t     });
\t\t\t\t\t 
\t\t\t\t\t // Need to set timeout otherwise it wont update the total
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$('#cart > button').html('<i class=\"fa fa-shopping-cart\"></i><span class=\"cart-heading\">Checkout</span><span id=\"cart-total\"> ' + json['total'] + '</span>');
\t\t\t\t\t}, 100);
\t\t\t\t     \t\t\t\t\t
\t\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 641
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 646
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 652
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 719
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 723
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {

if(window.location.hash.substr(1)=='tab-review') {
\t\$('.nav.nav-tabs > li.li-tab-review a').trigger('click');
\t\$('html, body').animate({
        scrollTop: \$(\".product-tabs\").offset().top
    }, 2000);
}

\$(\".product-write-review,.product-total-review\").click(function() {
    \$('html, body').animate({
        scrollTop: \$(\".product-tabs\").offset().top
    }, 2000);
});

});
//--></script> 
";
        // line 767
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1750 => 767,  1703 => 723,  1696 => 719,  1626 => 652,  1617 => 646,  1609 => 641,  1466 => 501,  1461 => 500,  1451 => 497,  1443 => 495,  1436 => 493,  1431 => 492,  1427 => 491,  1422 => 490,  1420 => 489,  1415 => 486,  1410 => 483,  1394 => 475,  1388 => 474,  1381 => 472,  1375 => 471,  1368 => 469,  1362 => 468,  1359 => 467,  1354 => 465,  1351 => 464,  1345 => 463,  1343 => 462,  1317 => 461,  1311 => 457,  1307 => 455,  1300 => 453,  1295 => 452,  1290 => 450,  1285 => 449,  1279 => 447,  1277 => 446,  1274 => 445,  1272 => 444,  1268 => 443,  1265 => 442,  1261 => 440,  1255 => 439,  1251 => 437,  1247 => 435,  1244 => 434,  1240 => 433,  1237 => 432,  1235 => 431,  1229 => 430,  1223 => 426,  1218 => 424,  1215 => 423,  1213 => 422,  1203 => 421,  1198 => 418,  1193 => 417,  1191 => 416,  1186 => 414,  1183 => 413,  1181 => 412,  1175 => 408,  1170 => 405,  1164 => 403,  1155 => 399,  1149 => 396,  1143 => 393,  1130 => 383,  1126 => 382,  1118 => 377,  1113 => 375,  1105 => 370,  1101 => 369,  1097 => 367,  1095 => 366,  1091 => 365,  1086 => 362,  1083 => 361,  1078 => 358,  1071 => 356,  1062 => 353,  1058 => 352,  1055 => 351,  1051 => 350,  1044 => 346,  1040 => 344,  1036 => 343,  1032 => 341,  1030 => 340,  1026 => 339,  1022 => 337,  1016 => 335,  1013 => 334,  1007 => 332,  1005 => 331,  1001 => 330,  988 => 320,  978 => 313,  972 => 312,  967 => 310,  961 => 309,  954 => 304,  948 => 302,  946 => 301,  934 => 299,  916 => 298,  912 => 297,  908 => 296,  904 => 295,  900 => 293,  894 => 289,  883 => 287,  879 => 286,  875 => 285,  868 => 282,  866 => 281,  863 => 280,  860 => 279,  853 => 277,  839 => 270,  832 => 268,  825 => 267,  823 => 266,  820 => 265,  807 => 259,  800 => 257,  793 => 256,  791 => 255,  788 => 254,  775 => 248,  768 => 246,  761 => 245,  759 => 244,  756 => 243,  748 => 240,  740 => 239,  736 => 238,  729 => 237,  727 => 236,  724 => 235,  712 => 232,  706 => 231,  699 => 230,  697 => 229,  694 => 228,  682 => 225,  676 => 224,  669 => 223,  667 => 222,  664 => 221,  658 => 217,  649 => 214,  642 => 213,  640 => 212,  636 => 211,  633 => 210,  618 => 208,  614 => 207,  608 => 206,  604 => 204,  600 => 203,  596 => 202,  592 => 201,  585 => 200,  583 => 199,  580 => 198,  574 => 194,  565 => 191,  558 => 190,  556 => 189,  552 => 188,  548 => 186,  533 => 185,  529 => 184,  523 => 183,  519 => 181,  515 => 180,  511 => 179,  507 => 178,  500 => 177,  498 => 176,  495 => 175,  490 => 172,  482 => 169,  475 => 168,  473 => 167,  469 => 166,  464 => 165,  460 => 164,  456 => 163,  450 => 162,  444 => 161,  437 => 160,  434 => 159,  430 => 158,  425 => 157,  423 => 156,  418 => 153,  414 => 151,  409 => 148,  398 => 146,  394 => 145,  390 => 143,  388 => 142,  385 => 141,  377 => 139,  375 => 138,  372 => 137,  364 => 135,  361 => 134,  356 => 132,  351 => 130,  348 => 129,  342 => 126,  339 => 125,  337 => 124,  334 => 123,  332 => 122,  328 => 120,  322 => 117,  318 => 116,  315 => 115,  309 => 114,  305 => 112,  301 => 110,  298 => 109,  294 => 108,  290 => 106,  288 => 105,  278 => 101,  270 => 99,  268 => 98,  261 => 97,  251 => 95,  249 => 94,  243 => 91,  238 => 90,  235 => 89,  232 => 88,  229 => 87,  226 => 86,  223 => 85,  220 => 84,  218 => 83,  193 => 60,  187 => 56,  183 => 54,  166 => 51,  163 => 50,  159 => 49,  156 => 48,  154 => 47,  150 => 45,  145 => 42,  140 => 40,  137 => 39,  135 => 38,  125 => 37,  121 => 36,  118 => 35,  116 => 34,  112 => 32,  110 => 31,  106 => 30,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  91 => 25,  88 => 24,  85 => 23,  83 => 22,  77 => 19,  73 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container product-product">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">*/
/*   	{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/* 	{{ content_top }}*/
/* 	<h1 class="page-title">{{ heading_title }} </h1>*/
/* 	  <!-- Product row START -->*/
/*       <div class="row">*/
/* 	  {% if column_left and column_right %}*/
/* 	    {% set class = 'col-sm-6' %}*/
/* 	  {% elseif column_left or column_right %}*/
/*         {% set class = 'col-sm-5' %}*/
/*       {% else %}*/
/*         {% set class = 'col-xs-12 col-sm-5 col-md-5' %}*/
/*       {% endif %}*/
/* 	  	<div class="product-block">*/
/*         <div class="{{ class }} product-images">*/
/* 		{% if thumb or images %}*/
/* 		  <!-- Product Image thumbnails START -->*/
/*           <div class="thumbnails">*/
/*             {% if thumb %}*/
/*             <div class="product-image">*/
/* 			  <a class="thumbnail" title="{{ heading_title }}">*/
/* 			  <img src="{{ thumb }}" title="{{ heading_title }}" data-zoom-image="{{ popup }}" alt="{{ heading_title }}" />*/
/* 			  {% if special %}*/
/* 				 <span class="product-sale-icon">Sale</span>*/
/* 				 <span class="product-percent">-{{ product_percent }}%</span>*/
/* 			  {% endif %}*/
/* 			  </a>*/
/* 			</div>*/
/*             {% endif %}*/
/* 			*/
/* 		  <div class="additional-images-container">*/
/*             {% if images %}*/
/* 			<div class="additional-images">*/
/*             {% for image in images %}*/
/*             <div class="image-additional"> */
/* 				<img src="{{ image.thumb }}" title="{{ heading_title }}" data-image="{{ image.large }}" data-zoom-image="{{ image.popup }}" alt="{{ heading_title }}" />*/
/* 			</div>*/
/*             {% endfor %}*/
/* 			</div>*/
/*             {% endif %}*/
/* 		  </div>*/
/* 		  <!-- Product Image thumbnails END -->*/
/* 		  </div>*/
/*         {% endif %}*/
/*         </div>*/
/* <script type="text/javascript">*/
/* $(".additional-images").owlCarousel({*/
/* 	items: 3,*/
/* 	itemsDesktop: [1199,2],*/
/* 	itemsDesktopSmall: [991,2],*/
/* 	itemsTablet: [767,3],*/
/* 	itemsMobile: [480,2],*/
/* 	autoPlay: false,*/
/* 	navigation: true,*/
/* 	pagination: false*/
/* });*/
/* */
/* // Custom Navigation Events*/
/* $(".additional-next").click(function(){*/
/* 	$(".additional-images").trigger('owl.next');*/
/* })*/
/* $(".additional-prev").click(function(){*/
/* 	$(".additional-images").trigger('owl.prev');*/
/* })*/
/* $(".additional-images-container .customNavigation").addClass('owl-navigation');*/
/* */
/* </script>*/
/* 		{% if column_left and column_right %}*/
/* 		{% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*         {% set class = 'col-sm-7' %}*/
/*         {% else %}*/
/*         {% set class = 'col-xs-12 col-sm-7 col-md-7' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }} product-details">*/
/* 		<h1 class="product-name">{{ heading_title }}</h1>*/
/* 		*/
/* 		<table class="product-info">*/
/*             {% if manufacturer %}*/
/*             <tr><td>{{ text_manufacturer }}</td><td class="product-info-value"><a href="{{ manufacturers }}">{{ manufacturer }}</a></td></tr>*/
/*             {% endif %}*/
/*             <tr><td>{{ text_model }}</td><td class="product-info-value">{{ model }}</td></tr>*/
/*             {% if reward %}*/
/*             <tr><td>{{ text_reward }}</td><td class="product-info-value">{{ reward }}</td></tr>*/
/*             {% endif %}*/
/*             <tr><td>{{ text_stock }}</td><td class="product-info-value">{{ stock }}</td></tr>*/
/*           </table>*/
/* */
/* 		  <!-- Product Rating START -->*/
/*           {% if review_status %}*/
/* 		  <div class="rating">*/
/*           <div class="product-rating">*/
/* 			{% for i in 1..5 %}*/
/*               {% if rating < i %}*/
/* 			    <span class="fa fa-stack"><i class="fa fa-star off fa-stack-1x"></i></span>*/
/* 			  {% else %}*/
/* 			    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>*/
/* 			  {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/* 		  <a class="product-total-review" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><i class="fa fa-comment"></i>{{ reviews }}</a>*/
/* 			<a class="product-write-review" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><i class="fa fa-pencil"></i>{{ text_write }}</a>*/
/* 		  </div>*/
/*           {% endif %}*/
/* 		  <!-- Product Rating END -->*/
/* */
/*           {% if price %}*/
/*           <ul class="list-unstyled product-price">*/
/*             {% if not special %}*/
/*             <li>*/
/*               <h2>{{ price }}</h2>*/
/*             </li>*/
/*             {% else %}*/
/* 			<li>*/
/*               <h2 class="price-new">{{ special }}</h2>*/
/*             </li>*/
/*             <li><span class="price-old">{{ price }}</span></li>*/
/*             {% endif %}*/
/* 			{% if tax %}*/
/*             <li class="product-tax">{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %}*/
/* 			*/
/*             {% if points %}*/
/*             <li class="product-reward-points">{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/* 			*/
/*             {% if discounts %}*/
/*             <li>*/
/* 			<ul class="product-discounts">*/
/* 				{% for discount in discounts %}*/
/* 				<li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 			</li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/* */
/* 		  <!-- Product Options START -->*/
/*           <div id="product" class="product-options">*/
/* 		  {% if options %}*/
/*             <h3>{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">*/
/* 				{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} */
/* 				</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> */
/* 			  	{% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} */
/* 					<img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> */
/* 					{% endif %} */
/* 					                 */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} */
/* 				  </label>*/
/*                 </div>*/
/*                 {% endfor %} */
/* 			  </div>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> */
/* 			    {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} */
/* 					<img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> */
/* 					{% endif %}*/
/* 					*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} */
/* 				  </label>*/
/*                 </div>*/
/*                 {% endfor %} */
/* 			  </div>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span>*/
/* 			  </div>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             {% endfor %}*/
/*             {% endif %}*/
/* 			*/
/*             {% if recurrings %}*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/* 			*/
/*             <div class="form-group product-quantity">*/
/*               <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*               <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn {% if stock_quantity<=0 %} {{ "btn-info" }} {% else %} btn-primary {% endif %} btn-lg btn-block" {% if stock_quantity<=0 %} {{ "disabled" }} {% endif %}>*/
/* 			  {% if stock_quantity<=0 %} {{ stock }} {% else %}{{ button_cart }} {% endif %}</button>*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/* 			</div>*/
/* 		  <!-- Product Options END -->*/
/* */
/* 		  <!-- Product Wishlist Compare START -->*/
/*           <div class="btn-group">*/
/*             <button class="btn btn-default product-btn-wishlist" type="button" class="btn btn-default" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i>*/
/* 			{{ button_wishlist }} */
/* 			</button> */
/*             <button class="btn btn-default product-btn-compare" type="button" class="btn btn-default" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i>*/
/* 			{{ button_compare }}*/
/* 			</button>*/
/*           </div>*/
/* 		  <!-- Product Wishlist Compare END -->*/
/* 			*/
/* */
/*             <!-- AddThis Button BEGIN -->*/
/*             <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/*             <!-- AddThis Button END --> */
/* 		 </div>*/
/* 		 <!-- Product option details END -->*/
/* 		 </div>*/
/* 		  </div>  <!-- Product row END -->*/
/* 		 <!-- Product nav Tabs START -->*/
/* 		  <div class="col-sm-12 product-tabs">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*             <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <li class="li-tab-review"><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2>{{ text_write }}</h2>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}*/
/* 				  </div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}*/
/* 			</div>*/
/* 	      </div>*/
/* 		  <!-- Product tab END -->*/
/* 		   <!-- Related products START -->*/
/* 		  {% if products %}*/
/* 		  <div class="related-carousel products-list">*/
/* 		  <div class="box-heading"><h3>{{ text_related }}</h3></div>*/
/* 		  <div class="related-items products-carousel row">*/
/* 			{% set i = 0 %}*/
/* 			{% for product in products %}*/
/* 			<div class="product-layouts">*/
/* 			  <div class="product-thumb transition">*/
/* 				<div class="image">*/
/* 				  <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a>*/
/* 				{% if product.special %}*/
/* 				<div class="sale-icon">Sale</div>*/
/* 				<span class="percent">-{{ product.percent }}%</span>*/
/* 				{% endif %}*/
/* 				</div>*/
/* 	*/
/* 				<div class="thumb-description">*/
/* 					<div class="caption">*/
/* 					  <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 					  {% if product.rating %}*/
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
/* */
/* 					    <p class="description">{{ product.description }}</p>*/
/* 						{% if product.price %}*/
/* 						  <div class="price">*/
/* 						  {% if not product.special %}*/
/* 							{{ product.price }}*/
/* 						  {% else %}*/
/* 							  <span class="price-new">{{ product.special }}</span>*/
/* 							  <span class="price-old">{{ product.price }}</span>*/
/* 						  {% endif %}*/
/* 							{% if product.tax %} */
/* 							<span class="price-tax">{{ text_tax }} {{ product.tax }}</span> */
/* 							{% endif %}*/
/* 						  </div>*/
/* 						{% endif %}*/
/* 					  */
/* 					  </div>*/
/* 												*/
/* 						<div class="button-group">*/
/* 						  <button class="btn-cart {% if product.product_quantity<=0 %} {{ "disabled" }} {% endif %}" type="button" title="{% if product.product_quantity <=0 %}{{ product.product_stock }}{% else %}{{ button_cart }}{% endif %}" onclick="{% if product.product_quantity <=0 %}{% else %}cart.add('{{ product.product_id }}'){% endif %}"{% if product.product_quantity <=0 %}{{ "" }} {% endif %}>*/
/* 						 {% if product.product_quantity <=0 %}*/
/* 							{{ "<i class=\"fa fa-shopping-cart\"></i><span class=\"out of stock\">"~product.product_stock }}*/
/* 							{% else %} */
/* 							{{ "<i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">"~button_cart }}*/
/* 						{% endif %}*/
/* 						</span></button>*/
/* 						<button class="btn-wishlist" title="{{ button_wishlist }}"  onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i>*/
/* 							<span title="{{ button_wishlist }}">{{ button_wishlist }}</span>*/
/* 						</button>*/
/* 						<button class="btn-compare" title="{{ button_compare }}"  onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i>*/
/* 							<span title="{{ button_compare }}">{{ button_compare }}</span>*/
/* 						</button>*/
/* 						<button class="btn-quickview" type="button" title="{{ button_quickview }}" onclick="tt_quickview.ajaxView('{{ product.href }}')"><i class="fa fa-eye"></i>*/
/* 				<span title="{{ button_quickview }}">{{ button_quickview }}</span>*/
/* 				</button>*/
/* 						</div>*/
/* 				</div>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 		  </div>*/
/* 		  </div>*/
/* 		  {% endif %}*/
/* 	  	  <!-- Related products END -->*/
/* 	  </div>  <!-- id content END -->*/
/* */
/*       {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} */
/* 		<a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %}*/
/* 		 <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> */
/* 		{% endif %}*/
/*         {% endfor %} */
/* 		</p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}*/
/*     {{ column_right }}*/
/* </div>*/
/* </div>*/
/* <script src="catalog/view/javascript/TemplateTrip/jquery.elevatezoom.min.js" type="text/javascript"></script>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* function proelevateZoom(){*/
/* jQuery(".product-image img").elevateZoom({*/
/* 	zoomType: "inner",*/
/* 	cursor: "crosshair",*/
/* 	zoomWindowFadeIn: 500,*/
/* 	zoomWindowFadeOut: 750*/
/* });*/
/* }*/
/* proelevateZoom();*/
/* $('.image-additional img').on(*/
/*       'click',*/
/*       (event) => {	  	*/
/*         $('.product-image img').attr('src',$(event.target).data('image'));		*/
/*         $('.selected').removeClass('selected');*/
/*         $(event.target).addClass('selected');*/
/* 		$('.product-image img').data('zoom-image', $(event.currentTarget).data('zoom-image'));*/
/*         $('.product-image img').prop('src', $(event.currentTarget).data('image'));*/
/* 		proelevateZoom();*/
/*       }*/
/* 	  */
/* );*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* 	$('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				     $.notify({*/
/* 				     	message: json['success'],*/
/* 				     	target: '_blank'*/
/* 				     },{*/
/* 				     	// settings*/
/* 				     	element: 'body',*/
/* 				     	position: null,*/
/* 				     	type: "info",*/
/* 				     	allow_dismiss: true,*/
/* 				     	newest_on_top: false,*/
/* 				     	placement: {*/
/* 				     		from: "top",*/
/* 				     		align: "right"*/
/* 				     	},*/
/* 				     	offset: 20,*/
/* 				     	spacing: 10,*/
/* 				     	z_index: 2031,*/
/* 				     	delay: 5000,*/
/* 				     	timer: 1000,*/
/* 				     	url_target: '_blank',*/
/* 				     	mouse_over: null,*/
/* 				     	animate: {*/
/* 				     		enter: 'animated fadeInDown',*/
/* 				     		exit: 'animated fadeOutUp'*/
/* 				     	},*/
/* 				     	onShow: null,*/
/* 				     	onShown: null,*/
/* 				     	onClose: null,*/
/* 				     	onClosed: null,*/
/* 				     	icon_type: 'class',*/
/* 				     	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +*/
/* 				     		'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +*/
/* 				     		'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +*/
/* 				     		'<div class="progress" data-notify="progressbar">' +*/
/* 				     			'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +*/
/* 				     		'</div>' +*/
/* 				     		'<a href="{3}" target="{4}" data-notify="url"></a>' +*/
/* 				     	'</div>' */
/* 				     });*/
/* 					 */
/* 					 // Need to set timeout otherwise it wont update the total*/
/* 					setTimeout(function () {*/
/* 						$('#cart > button').html('<i class="fa fa-shopping-cart"></i><span class="cart-heading">Checkout</span><span id="cart-total"> ' + json['total'] + '</span>');*/
/* 					}, 100);*/
/* 				     					*/
/* 					$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 				}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* */
/* if(window.location.hash.substr(1)=='tab-review') {*/
/* 	$('.nav.nav-tabs > li.li-tab-review a').trigger('click');*/
/* 	$('html, body').animate({*/
/*         scrollTop: $(".product-tabs").offset().top*/
/*     }, 2000);*/
/* }*/
/* */
/* $(".product-write-review,.product-total-review").click(function() {*/
/*     $('html, body').animate({*/
/*         scrollTop: $(".product-tabs").offset().top*/
/*     }, 2000);*/
/* });*/
/* */
/* });*/
/* //--></script> */
/* {{ footer }} */
/* */
