<?php

/* OPC170_02/template/extension/module/ttnewslettersubscribe.twig */
class __TwigTemplate_c5eb77eaccfee7b92546d96d78a6a3d13c9ba2e76816e3a30ba37e7e3879e0f6 extends Twig_Template
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
        echo "<div class=\"newletter-subscribe col-sm-9\">
<div id=\"newletter-boxes\" class=\"newletter-container\">
 <div id=\"dialog-normal\" class=\"window\">
\t<div class=\"box\">
\t  <div class=\"newletter-title col-sm-5\"><h2 class=\"tt-title\">";
        // line 5
        echo (isset($context["heading_title3"]) ? $context["heading_title3"] : null);
        echo "</h2></div>
\t  <div class=\"box-content newleter-content col-sm-7\">
\t  <label>";
        // line 7
        echo (isset($context["newletter_lable"]) ? $context["newletter_lable"] : null);
        echo "</label>
\t\t  <div id=\"form_subscribe\">
\t\t\t  <form name=\"subscribe\" id=\"subscribe\">
\t\t\t\t\t <input type=\"text\" placeholder=\"";
        // line 10
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\">
\t\t\t\t\t  <input type=\"hidden\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t\t\t\t<a class=\"button btn btn-primary\" onclick=\"email_subscribe()\"><span>";
        // line 12
        echo (isset($context["entry_button"]) ? $context["entry_button"] : null);
        echo "</span><i class=\"fa fa-paper-plane\"></i></a>
\t\t\t\t\t";
        // line 13
        if ((isset($context["option_unsubscribe"]) ? $context["option_unsubscribe"] : null)) {
            // line 14
            echo "\t\t\t\t\t<a class=\"button btn btn-primary\" onclick=\"email_unsubscribe()\"><span>";
            echo (isset($context["entry_unbutton"]) ? $context["entry_unbutton"] : null);
            echo "</span><i class=\"fa fa-telegram-plane\"></i></a>
\t\t\t\t\t";
        }
        // line 15
        echo " 
\t\t\t  </form>
\t\t  </div><!-- /#frm_subscribe -->
\t\t  <div id=\"notification-normal\"></div>
\t\t</div><!-- /.box-content -->
 \t</div>
 </div>
 </div>
</div><!-- /.box -->
<script type=\"text/javascript\">
function email_subscribe(){
\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: 'index.php?route=extension/module/ttnewslettersubscribe/subscribe',
\t\t\tdataType: 'html',
            data:\$(\"#subscribe\").serialize(),
\t\t\tsuccess: function (html) {
\t\t\ttry {
\t\t\t
\t\t\t\teval(html);
\t\t\t
\t\t\t} catch (e) {
\t\t\t}
\t\t\t\t
\t\t\t}}); 
\t
\t
}
function email_unsubscribe(){
\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
\t\t\tdataType: 'html',
            data:\$(\"#subscribe\").serialize(),
\t\t\tsuccess: function (html) {
\t\t\t\t\ttry {
\t\t\t\t\t
\t\t\t\t\t\teval(html);
\t\t\t\t\t
\t\t\t\t\t} catch (e) {
\t\t\t\t\t}
\t\t\t}}); 
\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
\t
}
</script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
\t\t\$('#subscribe_email').keypress(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                email_subscribe();
            }
\t\t\tvar name= \$(this).val();
\t\t  \t\$('#subscribe_name').val(name);
        });
\t\t\$('#subscribe_email').change(function() {
\t\t var name= \$(this).val();
\t\t  \t\t\$('#subscribe_name').val(name);
\t\t});
\t
    });
</script>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/ttnewslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  47 => 14,  45 => 13,  41 => 12,  36 => 10,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div class="newletter-subscribe col-sm-9">*/
/* <div id="newletter-boxes" class="newletter-container">*/
/*  <div id="dialog-normal" class="window">*/
/* 	<div class="box">*/
/* 	  <div class="newletter-title col-sm-5"><h2 class="tt-title">{{ heading_title3 }}</h2></div>*/
/* 	  <div class="box-content newleter-content col-sm-7">*/
/* 	  <label>{{ newletter_lable  }}</label>*/
/* 		  <div id="form_subscribe">*/
/* 			  <form name="subscribe" id="subscribe">*/
/* 					 <input type="text" placeholder="{{ entry_email  }}" value="" name="subscribe_email" id="subscribe_email">*/
/* 					  <input type="hidden" value="" name="subscribe_name" id="subscribe_name" />*/
/* 					<a class="button btn btn-primary" onclick="email_subscribe()"><span>{{ entry_button  }}</span><i class="fa fa-paper-plane"></i></a>*/
/* 					{% if option_unsubscribe %}*/
/* 					<a class="button btn btn-primary" onclick="email_unsubscribe()"><span>{{ entry_unbutton  }}</span><i class="fa fa-telegram-plane"></i></a>*/
/* 					{% endif %} */
/* 			  </form>*/
/* 		  </div><!-- /#frm_subscribe -->*/
/* 		  <div id="notification-normal"></div>*/
/* 		</div><!-- /.box-content -->*/
/*  	</div>*/
/*  </div>*/
/*  </div>*/
/* </div><!-- /.box -->*/
/* <script type="text/javascript">*/
/* function email_subscribe(){*/
/* 	$.ajax({*/
/* 			type: 'post',*/
/* 			url: 'index.php?route=extension/module/ttnewslettersubscribe/subscribe',*/
/* 			dataType: 'html',*/
/*             data:$("#subscribe").serialize(),*/
/* 			success: function (html) {*/
/* 			try {*/
/* 			*/
/* 				eval(html);*/
/* 			*/
/* 			} catch (e) {*/
/* 			}*/
/* 				*/
/* 			}}); */
/* 	*/
/* 	*/
/* }*/
/* function email_unsubscribe(){*/
/* 	$.ajax({*/
/* 			type: 'post',*/
/* 			url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',*/
/* 			dataType: 'html',*/
/*             data:$("#subscribe").serialize(),*/
/* 			success: function (html) {*/
/* 					try {*/
/* 					*/
/* 						eval(html);*/
/* 					*/
/* 					} catch (e) {*/
/* 					}*/
/* 			}}); */
/* 	$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); */
/* 	*/
/* }*/
/* </script>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/* 		$('#subscribe_email').keypress(function(e) {*/
/*             if(e.which == 13) {*/
/*                 e.preventDefault();*/
/*                 email_subscribe();*/
/*             }*/
/* 			var name= $(this).val();*/
/* 		  	$('#subscribe_name').val(name);*/
/*         });*/
/* 		$('#subscribe_email').change(function() {*/
/* 		 var name= $(this).val();*/
/* 		  		$('#subscribe_name').val(name);*/
/* 		});*/
/* 	*/
/*     });*/
/* </script>*/
