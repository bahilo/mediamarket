<?php

/* OPC170_02/template/common/cart.twig */
class __TwigTemplate_d01a6e15934a5ed920ad05350f90729899e7362d261be768b44ee3ff702105ef extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i>
  <span class=\"cart-heading\">";
        // line 3
        echo (isset($context["text_cart_heading"]) ? $context["text_cart_heading"] : null);
        echo "</span>
  <span id=\"cart-total\">";
        // line 4
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></button>
  <ul class=\"dropdown-menu pull-right header-cart-toggle\">
    ";
        // line 6
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 7
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "        <tr>
          <td class=\"text-center image\">";
                // line 11
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
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
          <td class=\"text-left name\"><a href=\"";
                // line 12
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 13
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 14
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 17
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 18
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right amount\">";
                // line 19
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center button\"><button type=\"button\" onclick=\"cart.remove('";
                // line 20
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 24
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 26
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right amount\">";
                // line 28
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 29
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 38
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 39
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
            <td class=\"text-right price-total\">";
                // line 40
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 44
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><strong> ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</strong></a><a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\"><strong>";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 48
            echo "    <li>
      <p class=\"text-center\">";
            // line 49
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 52
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 52,  194 => 49,  191 => 48,  178 => 44,  175 => 43,  166 => 40,  162 => 39,  159 => 38,  155 => 37,  148 => 32,  137 => 29,  133 => 28,  128 => 26,  124 => 24,  119 => 23,  108 => 20,  104 => 19,  100 => 18,  92 => 17,  87 => 16,  84 => 15,  75 => 14,  68 => 13,  62 => 12,  48 => 11,  45 => 10,  41 => 9,  37 => 7,  35 => 6,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group">*/
/*   <button type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i>*/
/*   <span class="cart-heading">{{ text_cart_heading }}</span>*/
/*   <span id="cart-total">{{ text_items }}</span></button>*/
/*   <ul class="dropdown-menu pull-right header-cart-toggle">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*       <table class="table table-striped">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center image">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*           <td class="text-left name"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right amount">{{ product.total }}</td>*/
/*           <td class="text-center button"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right amount">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table table-bordered">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-right"><strong>{{ total.title }}</strong></td>*/
/*             <td class="text-right price-total">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-right"><a href="{{ cart }}"><strong> {{ text_cart }}</strong></a><a href="{{ checkout }}"><strong>{{ text_checkout }}</strong></a></p>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
