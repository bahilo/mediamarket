<?php

/* OPC170_02/template/checkout/cart.twig */
class __TwigTemplate_06b5f775df548b10c3eaa3aaf75327d356482cc8fcc91dd14a88aec39e039cf8 extends Twig_Template
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
<div id=\"checkout-cart\" class=\"container\">
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
  ";
        // line 8
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 24
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 32
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "
        ";
        // line 33
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            // line 34
            echo "        &nbsp;(";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo ")
        ";
        }
        // line 35
        echo " </h1>
      <form action=\"";
        // line 36
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"cart-form\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center\">";
        // line 41
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 42
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 43
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 44
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 45
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                <td class=\"text-right text-right-price\">";
        // line 46
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "            <tr>
              <td class=\"text-center\">";
            // line 52
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " 
\t\t\t   <a href=\"";
                // line 53
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left\"><a href=\"";
            // line 54
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> 
\t\t\t  \t";
            // line 55
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " 
\t\t\t\t\t<span class=\"text-danger\">***</span> 
\t\t\t\t";
            }
            // line 58
            echo "                ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 59
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                <small>";
                    // line 60
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                ";
            }
            // line 62
            echo "                ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br />
                <small>";
                // line 63
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 64
            echo "                ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br />
                <span class=\"label label-info\">";
                // line 65
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span> <small>";
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-left\">";
            // line 66
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
              <td class=\"text-left\"><div class=\"cart_input_block input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 68
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 70
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-primary main\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right unit-price\">";
            // line 73
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
              <td class=\"text-right total-price\">";
            // line 74
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 78
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 80
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 85
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 87
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 88
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      ";
        // line 96
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 97
            echo "\t  <div class=\"row\">
\t\t  <div class=\"col-sm-12\">
\t\t  <h2>";
            // line 99
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
\t\t  <p>";
            // line 100
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
\t\t  </div>
\t\t  <div class=\"panel-group col-sm-8\" id=\"accordion\"> ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 103
                echo "\t\t\t";
                echo $context["module"];
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t  </div>
\t\t  ";
        }
        // line 107
        echo "          <div class=\"col-sm-4 sub-total-table\">
          <table class=\"table table-bordered\">
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 110
            echo "            <tr>
              <td class=\"text-right heading-title\"><strong>";
            // line 111
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
              <td class=\"text-right total-amount\">";
            // line 112
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons\">
        <div class=\"pull-left\"><a href=\"";
        // line 119
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-default cnt\">";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 120
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary checkout\">";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a></div>
      </div>
      ";
        // line 122
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 123
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 125
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 125,  395 => 123,  391 => 122,  384 => 120,  378 => 119,  372 => 115,  363 => 112,  359 => 111,  356 => 110,  352 => 109,  348 => 107,  344 => 105,  335 => 103,  331 => 102,  326 => 100,  322 => 99,  318 => 97,  316 => 96,  309 => 91,  300 => 88,  296 => 87,  289 => 85,  281 => 80,  277 => 78,  272 => 77,  263 => 74,  259 => 73,  252 => 71,  248 => 70,  241 => 68,  236 => 66,  228 => 65,  223 => 64,  219 => 63,  214 => 62,  211 => 61,  202 => 60,  195 => 59,  192 => 58,  186 => 55,  180 => 54,  168 => 53,  164 => 52,  161 => 51,  157 => 50,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  122 => 36,  119 => 35,  113 => 34,  111 => 33,  107 => 32,  100 => 31,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  80 => 24,  75 => 23,  67 => 19,  64 => 18,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="checkout-cart" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if attention %}*/
/*   <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}*/
/*         {% if weight %}*/
/*         &nbsp;({{ weight }})*/
/*         {% endif %} </h1>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="cart-form">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-center">{{ column_image }}</td>*/
/*                 <td class="text-left">{{ column_name }}</td>*/
/*                 <td class="text-left">{{ column_model }}</td>*/
/*                 <td class="text-left">{{ column_quantity }}</td>*/
/*                 <td class="text-right">{{ column_price }}</td>*/
/*                 <td class="text-right text-right-price">{{ column_total }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for product in products %}*/
/*             <tr>*/
/*               <td class="text-center">{% if product.thumb %} */
/* 			   <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*               <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> */
/* 			  	{% if not product.stock %} */
/* 					<span class="text-danger">***</span> */
/* 				{% endif %}*/
/*                 {% if product.option %}*/
/*                 {% for option in product.option %} <br />*/
/*                 <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                 {% endif %}*/
/*                 {% if product.reward %} <br />*/
/*                 <small>{{ product.reward }}</small> {% endif %}*/
/*                 {% if product.recurring %} <br />*/
/*                 <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*               <td class="text-left">{{ product.model }}</td>*/
/*               <td class="text-left"><div class="cart_input_block input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary main"><i class="fa fa-refresh"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right unit-price">{{ product.price }}</td>*/
/*               <td class="text-right total-price">{{ product.total }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*             <tr>*/
/*               <td></td>*/
/*               <td class="text-left">{{ voucher.description }}</td>*/
/*               <td class="text-left"></td>*/
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*               </tbody>*/
/*             */
/*           </table>*/
/*         </div>*/
/*       </form>*/
/*       {% if modules %}*/
/* 	  <div class="row">*/
/* 		  <div class="col-sm-12">*/
/* 		  <h2>{{ text_next }}</h2>*/
/* 		  <p>{{ text_next_choice }}</p>*/
/* 		  </div>*/
/* 		  <div class="panel-group col-sm-8" id="accordion"> {% for module in modules %}*/
/* 			{{ module }}*/
/* 			{% endfor %}*/
/* 		  </div>*/
/* 		  {% endif %}*/
/*           <div class="col-sm-4 sub-total-table">*/
/*           <table class="table table-bordered">*/
/*             {% for total in totals %}*/
/*             <tr>*/
/*               <td class="text-right heading-title"><strong>{{ total.title }}:</strong></td>*/
/*               <td class="text-right total-amount">{{ total.text }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="buttons">*/
/*         <div class="pull-left"><a href="{{ continue }}" class="btn btn-default cnt">{{ button_shopping }}</a></div>*/
/*         <div class="pull-right"><a href="{{ checkout }}" class="btn btn-primary checkout">{{ button_checkout }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
