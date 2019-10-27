<?php

/* extension/payment/payplug.twig */
class __TwigTemplate_b8a47ec2ed0146e625710350109f875be1b2173da3457d5fd4217d7036af38df extends Twig_Template
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
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
\t\t\t  <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><?php echo \$tab_general; ?></a></li>
\t\t\t  <li><a href=\"#tab-status\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_order_status"]) ? $context["tab_order_status"] : null);
        echo "</a></li>
\t\t  </ul>
\t\t  <div class=\"tab-content\">
\t\t    <div class=\"alert alert-warning\"><i class=\"fa fa-warning\"></i>&nbsp;";
        // line 33
        echo (isset($context["text_module_disabled"]) ? $context["text_module_disabled"] : null);
        echo "</div>
\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"entry-email\">";
        // line 36
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"payplug_email\" value=\"";
        // line 38
        echo (isset($context["payplug_email"]) ? $context["payplug_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"entry-email\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"entry-password\">";
        // line 42
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"payplug_password\" value=\"";
        // line 44
        echo (isset($context["payplug_password"]) ? $context["payplug_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"entry-password\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sandbox\"><span data-toggle=\"tooltip\" title=\"";
        // line 48
        echo (isset($context["help_sandbox"]) ? $context["help_sandbox"] : null);
        echo "\">";
        echo (isset($context["entry_sandbox"]) ? $context["entry_sandbox"] : null);
        echo "</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"payplug_sandbox\" id=\"input-sandbox\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 51
        if ((isset($context["payplug_sandbox"]) ? $context["payplug_sandbox"] : null)) {
            // line 52
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 53
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 56
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-popup\"><?php echo \$entry_popup; ?></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"payplug_popup\" id=\"input-popup\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 65
        if ((isset($context["payplug_popup"]) ? $context["payplug_popup"] : null)) {
            // line 66
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 67
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 70
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 76
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"payplug_total\" value=\"";
        // line 78
        echo (isset($context["payplug_total"]) ? $context["payplug_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 82
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"payplug_sort_order\" value=\"";
        // line 84
        echo (isset($context["payplug_sort_order"]) ? $context["payplug_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 88
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"payplug_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"0\">";
        // line 91
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
\t\t\t\t\t\t\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zone"]) ? $context["geo_zone"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zones"]) {
            // line 93
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["geo_zone"]) ? $context["geo_zone"] : null), "geo_zone_id", array()) == (isset($context["payplug_geo_zone_id"]) ? $context["payplug_geo_zone_id"] : null))) {
                // line 94
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute((isset($context["geo_zone"]) ? $context["geo_zone"] : null), "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["geo_zone"]) ? $context["geo_zone"] : null), "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 96
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute((isset($context["geo_zone"]) ? $context["geo_zone"] : null), "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute((isset($context["geo_zone"]) ? $context["geo_zone"] : null), "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 103
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"payplug_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 106
        if ((isset($context["payplug_status"]) ? $context["payplug_status"] : null)) {
            // line 107
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 108
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 111
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-status\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 119
        echo (isset($context["entry_paid_status"]) ? $context["entry_paid_status"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payplug_paid_status_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_status"]) ? $context["order_status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 123
            echo "                                        ";
            if (($this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "order_status_id", array()) == (isset($context["payplug_paid_status_id"]) ? $context["payplug_paid_status_id"] : null))) {
                // line 124
                echo "                                        <option value=\"";
                echo $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "order_status_id", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "name", array(), "array");
                echo "</option>
                                        ";
            } else {
                // line 126
                echo "                                        <option value=\"";
                echo $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "order_status_id", array());
                echo "\">";
                echo $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "name", array(), "array");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 133
        echo (isset($context["entry_refunded_status"]) ? $context["entry_refunded_status"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"payplug_refunded_status_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_status"]) ? $context["order_status"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 137
            echo "                                        ";
            if (($this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "order_status_id", array()) == (isset($context["payplug_refunded_status_id"]) ? $context["payplug_refunded_status_id"] : null))) {
                // line 138
                echo "                                        <option value=\"";
                echo $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "name", array());
                echo "</option>
                                        ";
            } else {
                // line 140
                echo "                                        <option value=\"";
                echo $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "order_status_id", array());
                echo "\">";
                echo $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "name", array());
                echo "</option>
                                        ";
            }
            // line 142
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
          </div>
        </form>
        <div class=\"alert alert-info\">";
        // line 149
        echo (isset($context["help_alipay_setup"]) ? $context["help_alipay_setup"] : null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
";
        // line 154
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/payplug.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 154,  392 => 149,  384 => 143,  378 => 142,  370 => 140,  362 => 138,  359 => 137,  355 => 136,  349 => 133,  343 => 129,  337 => 128,  329 => 126,  321 => 124,  318 => 123,  314 => 122,  308 => 119,  300 => 113,  295 => 111,  290 => 110,  285 => 108,  280 => 107,  278 => 106,  272 => 103,  266 => 99,  260 => 98,  252 => 96,  244 => 94,  241 => 93,  237 => 92,  233 => 91,  227 => 88,  218 => 84,  213 => 82,  204 => 78,  197 => 76,  191 => 72,  186 => 70,  181 => 69,  176 => 67,  171 => 66,  169 => 65,  160 => 58,  155 => 56,  150 => 55,  145 => 53,  140 => 52,  138 => 51,  130 => 48,  121 => 44,  116 => 42,  107 => 38,  102 => 36,  96 => 33,  90 => 30,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/* 			  <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>*/
/* 			  <li><a href="#tab-status" data-toggle="tab">{{ tab_order_status }}</a></li>*/
/* 		  </ul>*/
/* 		  <div class="tab-content">*/
/* 		    <div class="alert alert-warning"><i class="fa fa-warning"></i>&nbsp;{{ text_module_disabled }}</div>*/
/* 			<div class="tab-pane active" id="tab-general">*/
/* 				<div class="form-group required">*/
/* 					<label class="col-sm-2 control-label" for="entry-email">{{ entry_email }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<input type="text" name="payplug_email" value="{{ payplug_email }}" placeholder="{{ entry_email }}" id="entry-email" class="form-control"/>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group required">*/
/* 					<label class="col-sm-2 control-label" for="entry-password">{{ entry_password }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<input type="text" name="payplug_password" value="{{ payplug_password }}" placeholder="{{ entry_password }}" id="entry-password" class="form-control"/>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-sandbox"><span data-toggle="tooltip" title="{{ help_sandbox }}">{{ entry_sandbox }}</span></label>*/
/* 					<div class="col-sm-10">*/
/* 						<select name="payplug_sandbox" id="input-sandbox" class="form-control">*/
/* 						{% if payplug_sandbox %}*/
/* 							<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 							<option value="0">{{ text_no }}</option>*/
/* 						{% else %}*/
/* 							<option value="1">{{ text_yes }}</option>*/
/* 							<option value="0" selected="selected">{{ text_no }}</option>*/
/* 						{% endif %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-popup"><?php echo $entry_popup; ?></label>*/
/* 					<div class="col-sm-10">*/
/* 						<select name="payplug_popup" id="input-popup" class="form-control">*/
/* 						{% if payplug_popup %}*/
/* 							<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 							<option value="0">{{ text_disabled }}</option>*/
/* 						{% else %}*/
/* 							<option value="1">{{ text_enabled }}</option>*/
/* 							<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 						{% endif %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/* 					<div class="col-sm-10">*/
/* 						<input type="text" name="payplug_total" value="{{ payplug_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control"/>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<input type="text" name="payplug_sort_order" value="{{ payplug_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control"/>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<select name="payplug_geo_zone_id" id="input-geo-zone" class="form-control">*/
/* 							<option value="0">{{ text_all_zones }}</option>*/
/* 							{% for geo_zones in geo_zone %}*/
/* 								{% if geo_zone.geo_zone_id == payplug_geo_zone_id %}*/
/* 								<option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/* 								{% else %}*/
/* 								<option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/* 					<div class="col-sm-10">*/
/* 						<select name="payplug_status" id="input-status" class="form-control">*/
/* 							{% if payplug_status %}*/
/* 							<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 							<option value="0">{{ text_disabled }}</option>*/
/* 							{% else %}*/
/* 							<option value="1">{{ text_enabled }}</option>*/
/* 							<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 							{% endif %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-status">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">{{ entry_paid_status }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="payplug_paid_status_id" class="form-control">*/
/* 									{% for order_statuses in order_status %}*/
/*                                         {% if order_status.order_status_id == payplug_paid_status_id %}*/
/*                                         <option value="{{ order_status['order_status_id'] }}" selected="selected">{{ order_status['name'] }}</option>*/
/*                                         {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status['name'] }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">{{ entry_refunded_status }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="payplug_refunded_status_id" class="form-control">*/
/* 									{% for order_statuses in order_status %}*/
/*                                         {% if order_status.order_status_id == payplug_refunded_status_id %}*/
/*                                         <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                                         {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                         {% endif %}*/
/* 									{% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*           </div>*/
/*         </form>*/
/*         <div class="alert alert-info">{{ help_alipay_setup }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
