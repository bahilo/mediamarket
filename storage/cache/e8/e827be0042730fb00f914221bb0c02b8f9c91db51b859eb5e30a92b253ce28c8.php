<?php

/* extension/module/tt_product_tab.twig */
class __TwigTemplate_399359d776c65657d311288e7fed9709ed2c4318a87a02771f90b8ca7c59d8d2 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-tt_product_tab\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-tt_product_tab\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 38
        echo (isset($context["entry_features"]) ? $context["entry_features"] : null);
        echo "</label>
            <div class=\"col-sm-1\">
              ";
        // line 40
        if ((isset($context["featured_products"]) ? $context["featured_products"] : null)) {
            // line 41
            echo "                 <input type=\"checkbox\" name=\"featured_products\" value=\"1\" checked=\"checked\"> 
\t\t\t  ";
        } else {
            // line 43
            echo "                <input type=\"checkbox\"  name=\"featured_products\" value=\"1\">
\t\t\t  ";
        }
        // line 45
        echo "            </div>
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 46
        echo (isset($context["entry_latest"]) ? $context["entry_latest"] : null);
        echo "</label>
            <div class=\"col-sm-1\">
              ";
        // line 48
        if ((isset($context["latest_products"]) ? $context["latest_products"] : null)) {
            // line 49
            echo "                 <input type=\"checkbox\" name=\"latest_products\" value=\"1\" checked=\"checked\"> 
\t\t\t  ";
        } else {
            // line 51
            echo "                <input type=\"checkbox\"  name=\"latest_products\" value=\"1\">
\t\t\t  ";
        }
        // line 53
        echo "            </div>
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 54
        echo (isset($context["entry_bestseller"]) ? $context["entry_bestseller"] : null);
        echo "</label>
            <div class=\"col-sm-1\">
              ";
        // line 56
        if ((isset($context["bestseller_products"]) ? $context["bestseller_products"] : null)) {
            // line 57
            echo "                 <input type=\"checkbox\" name=\"bestseller_products\" value=\"1\" checked=\"checked\">
               ";
        } else {
            // line 59
            echo "                <input type=\"checkbox\"  name=\"bestseller_products\" value=\"1\">
\t\t\t";
        }
        // line 61
        echo "            </div>
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 62
        echo (isset($context["entry_special"]) ? $context["entry_special"] : null);
        echo "</label>
            <div class=\"col-sm-1\">
              ";
        // line 64
        if ((isset($context["special_products"]) ? $context["special_products"] : null)) {
            // line 65
            echo "                 <input type=\"checkbox\" name=\"special_products\" value=\"1\" checked=\"checked\">
               ";
        } else {
            // line 67
            echo "                <input type=\"checkbox\"  name=\"special_products\" value=\"1\">
\t\t\t  ";
        }
        // line 69
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 72
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 74
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <div id=\"featured-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 77
            echo "                <div id=\"featured-product";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
\t\t\t\t";
            // line 78
            echo $this->getAttribute($context["product"], "name", array());
            echo "
                  <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 79
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\" />
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 86
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 88
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 92
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 94
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 95
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 96
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
              ";
        }
        // line 98
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 101
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 103
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 104
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 105
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
              ";
        }
        // line 107
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 110
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 113
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 114
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 115
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 117
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 118
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t ";
        }
        // line 120
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    <script type=\"text/javascript\">
\$('input[name=\\'product\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 131
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'product\\']').val('');
    
    \$('#featured-product' + item['value']).remove();
    
    \$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');  
  }
});
  
\$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
</script>
</div>
";
        // line 157
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/tt_product_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 157,  328 => 131,  315 => 120,  310 => 118,  305 => 117,  300 => 115,  295 => 114,  293 => 113,  287 => 110,  282 => 107,  276 => 105,  274 => 104,  268 => 103,  263 => 101,  258 => 98,  252 => 96,  250 => 95,  244 => 94,  239 => 92,  230 => 88,  225 => 86,  219 => 82,  210 => 79,  206 => 78,  201 => 77,  197 => 76,  192 => 74,  187 => 72,  182 => 69,  178 => 67,  174 => 65,  172 => 64,  167 => 62,  164 => 61,  160 => 59,  156 => 57,  154 => 56,  149 => 54,  146 => 53,  142 => 51,  138 => 49,  136 => 48,  131 => 46,  128 => 45,  124 => 43,  120 => 41,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-tt_product_tab" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-tt_product_tab" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_features }}</label>*/
/*             <div class="col-sm-1">*/
/*               {% if featured_products %}*/
/*                  <input type="checkbox" name="featured_products" value="1" checked="checked"> */
/* 			  {% else %}*/
/*                 <input type="checkbox"  name="featured_products" value="1">*/
/* 			  {% endif %}*/
/*             </div>*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_latest }}</label>*/
/*             <div class="col-sm-1">*/
/*               {% if latest_products %}*/
/*                  <input type="checkbox" name="latest_products" value="1" checked="checked"> */
/* 			  {% else %}*/
/*                 <input type="checkbox"  name="latest_products" value="1">*/
/* 			  {% endif %}*/
/*             </div>*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_bestseller }}</label>*/
/*             <div class="col-sm-1">*/
/*               {% if bestseller_products %}*/
/*                  <input type="checkbox" name="bestseller_products" value="1" checked="checked">*/
/*                {% else %}*/
/*                 <input type="checkbox"  name="bestseller_products" value="1">*/
/* 			{% endif %}*/
/*             </div>*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_special }}</label>*/
/*             <div class="col-sm-1">*/
/*               {% if special_products %}*/
/*                  <input type="checkbox" name="special_products" value="1" checked="checked">*/
/*                {% else %}*/
/*                 <input type="checkbox"  name="special_products" value="1">*/
/* 			  {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-product">{{ entry_product }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="product" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*               <div id="featured-product" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% for product in products %}*/
/*                 <div id="featured-product{{ product.product_id }}"><i class="fa fa-minus-circle"></i> */
/* 				{{ product.name }}*/
/*                   <input type="hidden" name="product[]" value="{{ product.product_id }}" />*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-limit">{{ entry_limit }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="limit" value="{{ limit }}" placeholder="{{ entry_limit }}" id="input-limit" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-width">{{ entry_width }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*               {% if error_width %}*/
/*               <div class="text-danger">{{ error_width }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-height">{{ entry_height }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*               {% if error_height %}*/
/*               <div class="text-danger">{{ error_height }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 				 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*     <script type="text/javascript">*/
/* $('input[name=\'product\']').autocomplete({*/
/*   source: function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             label: item['name'],*/
/*             value: item['product_id']*/
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   select: function(item) {*/
/*     $('input[name=\'product\']').val('');*/
/*     */
/*     $('#featured-product' + item['value']).remove();*/
/*     */
/*     $('#featured-product').append('<div id="featured-product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product[]" value="' + item['value'] + '" /></div>');  */
/*   }*/
/* });*/
/*   */
/* $('#featured-product').delegate('.fa-minus-circle', 'click', function() {*/
/*   $(this).parent().remove();*/
/* });*/
/* </script>*/
/* </div>*/
/* {{ footer }}*/
