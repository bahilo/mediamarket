<?php

/* OPC170_02/template/extension/total/coupon.twig */
class __TwigTemplate_a19f8cb2075c0abe0a5c6334fe38027634fdbdbf7c9552c36f1395fcb458b2a6 extends Twig_Template
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
    <h4 class=\"panel-title\"><a href=\"#collapse-coupon\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-coupon\" class=\"panel-collapse collapse\">
    <div class=\"panel-body\">
      <label class=\"col-sm-2 control-label\" for=\"input-coupon\">";
        // line 7
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" name=\"coupon\" value=\"";
        // line 9
        echo (isset($context["coupon"]) ? $context["coupon"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "\" id=\"input-coupon\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <input type=\"button\" value=\"";
        // line 11
        echo (isset($context["button_coupon"]) ? $context["button_coupon"] : null);
        echo "\" id=\"button-coupon\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"  class=\"btn btn-primary\" />
        </span></div>
      <script type=\"text/javascript\"><!--
\$('#button-coupon').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\ttype: 'post',
\t\tdata: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();\t\t
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
        return "OPC170_02/template/extension/total/coupon.twig";
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
/*     <h4 class="panel-title"><a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ heading_title }} <i class="fa fa-caret-down"></i></a></h4>*/
/*   </div>*/
/*   <div id="collapse-coupon" class="panel-collapse collapse">*/
/*     <div class="panel-body">*/
/*       <label class="col-sm-2 control-label" for="input-coupon">{{ entry_coupon }}</label>*/
/*       <div class="input-group">*/
/*         <input type="text" name="coupon" value="{{ coupon }}" placeholder="{{ entry_coupon }}" id="input-coupon" class="form-control" />*/
/*         <span class="input-group-btn">*/
/*         <input type="button" value="{{ button_coupon }}" id="button-coupon" data-loading-text="{{ text_loading }}"  class="btn btn-primary" />*/
/*         </span></div>*/
/*       <script type="text/javascript"><!--*/
/* $('#button-coupon').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/coupon/coupon',*/
/* 		type: 'post',*/
/* 		data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-coupon').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-coupon').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 				$('.alert-dismissible').remove();		*/
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
