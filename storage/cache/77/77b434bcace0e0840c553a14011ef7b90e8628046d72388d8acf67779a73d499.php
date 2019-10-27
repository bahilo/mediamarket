<?php

/* extension/module/tt_category_tab.twig */
class __TwigTemplate_ad0eb9c47060298ec5e43b990f69e8ec5b47c07c9137916801055f3c0a1c800e extends Twig_Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
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
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
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
            <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 38
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"category_name\" value=\"\" placeholder=\"";
        // line 40
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\" />
              ";
        // line 41
        if ((isset($context["error_category"]) ? $context["error_category"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_category"]) ? $context["error_category"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "              <div id=\"category-tab\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 46
            echo "                <div id=\"category-tab";
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["category"], "name", array());
            echo "
                  <input type=\"hidden\" name=\"category[]\" value=\"";
            // line 47
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\" />
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 54
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 56
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 60
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 62
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 63
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 64
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
              ";
        }
        // line 66
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 69
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 71
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 72
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 73
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
              ";
        }
        // line 75
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 78
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 81
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 82
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 83
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 85
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 86
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 88
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'category_name\\']').autocomplete({
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 99
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(item) {
\t\t\$('input[name=\\'category_name\\']').val('');
\t\t
\t\t\$('#category-tab' + item['value']).remove();
\t\t
\t\t\$('#category-tab').append('<div id=\"category-tab' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});
\t
\$('#category-tab').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script></div>
";
        // line 124
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/tt_category_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 124,  264 => 99,  251 => 88,  246 => 86,  241 => 85,  236 => 83,  231 => 82,  229 => 81,  223 => 78,  218 => 75,  212 => 73,  210 => 72,  204 => 71,  199 => 69,  194 => 66,  188 => 64,  186 => 63,  180 => 62,  175 => 60,  166 => 56,  161 => 54,  155 => 50,  146 => 47,  139 => 46,  135 => 45,  132 => 44,  126 => 42,  124 => 41,  120 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>          */
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="category_name" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control" />*/
/*               {% if error_category %}*/
/*               <div class="text-danger">{{ error_category }}</div>*/
/*               {% endif %}*/
/*               <div id="category-tab" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% for category in categories %}*/
/*                 <div id="category-tab{{ category.category_id }}"><i class="fa fa-minus-circle"></i> {{ category.name }}*/
/*                   <input type="hidden" name="category[]" value="{{ category.category_id }}" />*/
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
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'category_name\']').autocomplete({*/
/* 	source: function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	select: function(item) {*/
/* 		$('input[name=\'category_name\']').val('');*/
/* 		*/
/* 		$('#category-tab' + item['value']).remove();*/
/* 		*/
/* 		$('#category-tab').append('<div id="category-tab' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category[]" value="' + item['value'] + '" /></div>');	*/
/* 	}*/
/* });*/
/* 	*/
/* $('#category-tab').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script></div>*/
/* {{ footer }}*/
/* */
