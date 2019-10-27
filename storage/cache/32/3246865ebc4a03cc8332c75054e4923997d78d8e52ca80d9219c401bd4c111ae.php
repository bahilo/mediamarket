<?php

/* OPC170_02/template/extension/total/voucher.twig */
class __TwigTemplate_0f26083953bb2414c22505665a1b82b0cfc389e1645280cb2b1cacf7aae3de48 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\"><a href=\"#collapse-voucher\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-voucher\" class=\"panel-collapse collapse\">
    <div class=\"panel-body\">
      <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
        // line 7
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" name=\"voucher\" value=\"";
        // line 9
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "\" id=\"input-voucher\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <input type=\"submit\" value=\"";
        // line 11
        echo (isset($context["button_voucher"]) ? $context["button_voucher"] : null);
        echo "\" id=\"button-voucher\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"  class=\"btn btn-primary\" />
        </span> </div>
      <script type=\"text/javascript\"><!--
\$('#button-voucher').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/voucher/voucher',
\t\ttype: 'post',
\t\tdata: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (json['error']) {
\t\t\t\t     \$.notify({
\t\t\t\t     \tmessage: json['error'],
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
\t\t\t\t     \ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-danger alert-dismissible\" role=\"alert\">' +
\t\t\t\t     \t\t'<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&times;</button>' +
\t\t\t\t     \t\t'<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
\t\t\t\t     \t\t'<div class=\"progress\" data-notify=\"progressbar\">' +
\t\t\t\t     \t\t\t'<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
\t\t\t\t     \t\t'</div>' +
\t\t\t\t     \t\t'<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
\t\t\t\t     \t'</div>' 
\t\t\t\t     });
\t\t\t\t}
\t\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/total/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  35 => 9,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title"><a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ heading_title }} <i class="fa fa-caret-down"></i></a></h4>*/
/*   </div>*/
/*   <div id="collapse-voucher" class="panel-collapse collapse">*/
/*     <div class="panel-body">*/
/*       <label class="col-sm-2 control-label" for="input-voucher">{{ entry_voucher }}</label>*/
/*       <div class="input-group">*/
/*         <input type="text" name="voucher" value="{{ voucher }}" placeholder="{{ entry_voucher }}" id="input-voucher" class="form-control" />*/
/*         <span class="input-group-btn">*/
/*         <input type="submit" value="{{ button_voucher }}" id="button-voucher" data-loading-text="{{ text_loading }}"  class="btn btn-primary" />*/
/*         </span> </div>*/
/*       <script type="text/javascript"><!--*/
/* $('#button-voucher').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/voucher/voucher',*/
/* 		type: 'post',*/
/* 		data: 'voucher=' + encodeURIComponent($('input[name=\'voucher\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				}*/
/* 				*/
/* 				if (json['error']) {*/
/* 				     $.notify({*/
/* 				     	message: json['error'],*/
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
/* 				     	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-danger alert-dismissible" role="alert">' +*/
/* 				     		'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +*/
/* 				     		'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +*/
/* 				     		'<div class="progress" data-notify="progressbar">' +*/
/* 				     			'<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +*/
/* 				     		'</div>' +*/
/* 				     		'<a href="{3}" target="{4}" data-notify="url"></a>' +*/
/* 				     	'</div>' */
/* 				     });*/
/* 				}*/
/* 			},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
