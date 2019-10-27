<?php

/* OPC170_02/template/common/footer.twig */
class __TwigTemplate_0bf6ab76a19b9848a1614e123abeff55c6cd99fef3e74a4907b119d3db36c0e4 extends Twig_Template
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
        echo "<footer>
";
        // line 2
        if ((isset($context["footer_top"]) ? $context["footer_top"] : null)) {
            // line 3
            echo "<div class=\"footer-top\">
";
            // line 4
            echo (isset($context["footer_top"]) ? $context["footer_top"] : null);
            echo "
</div>
";
        }
        // line 7
        echo "<div class=\"footer-container\">
<div class=\"container\">
\t<div class=\"row\">
\t\t";
        // line 10
        if ((isset($context["footer_left"]) ? $context["footer_left"] : null)) {
            // line 11
            echo "\t\t<div class=\"footer-column footer-left-cms col-sm-2\">
\t\t";
            // line 12
            echo (isset($context["footer_left"]) ? $context["footer_left"] : null);
            echo "
\t\t</div>
\t\t";
        }
        // line 15
        echo "\t\t<div class=\"footer-right col-sm-10\">
\t\t
\t\t  ";
        // line 17
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 18
            echo "\t\t  <div class=\"col-sm-3 footer-column ";
            echo ("footer-" . twig_lower_filter($this->env, twig_replace_filter((isset($context["text_information"]) ? $context["text_information"] : null), array(" " => "-"))));
            echo "\">
\t\t\t<h5>";
            // line 19
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 22
                echo "\t\t\t  <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t</ul>
\t\t  </div>
\t\t  ";
        }
        // line 27
        echo "\t\t\t\t
\t\t  <div class=\"col-sm-3 footer-column ";
        // line 28
        echo ("footer-" . twig_lower_filter($this->env, twig_replace_filter((isset($context["text_extra"]) ? $context["text_extra"] : null), array(" " => "-"))));
        echo "\">
\t\t\t<h5>";
        // line 29
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t  <li><a href=\"";
        // line 31
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 32
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 33
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 34
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
\t\t\t</ul>
\t\t  </div>
\t\t  
\t\t  <div class=\"col-sm-3 footer-column ";
        // line 38
        echo ("footer-" . twig_lower_filter($this->env, twig_replace_filter((isset($context["text_account"]) ? $context["text_account"] : null), array(" " => "-"))));
        echo "\">
\t\t\t<h5>";
        // line 39
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t  <li><a href=\"";
        // line 41
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 42
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 43
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 44
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 45
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
\t\t\t</ul>
\t\t  </div>
\t\t  
\t\t  <div class=\"col-sm-3 footer-column ";
        // line 49
        echo ("footer-" . twig_lower_filter($this->env, twig_replace_filter((isset($context["text_service"]) ? $context["text_service"] : null), array(" " => "-"))));
        echo "\">
\t\t\t<h5>";
        // line 50
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t  <li><a href=\"";
        // line 52
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 53
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
\t\t\t  <li><a href=\"";
        // line 54
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
\t\t\t</ul>
\t\t  </div>
\t
\t\t";
        // line 58
        if ((isset($context["footer_right"]) ? $context["footer_right"] : null)) {
            // line 59
            echo "\t\t  <div class=\"footer-column footer-right-cms col-sm-3\">
\t\t ";
            // line 60
            echo (isset($context["footer_right"]) ? $context["footer_right"] : null);
            echo "
\t\t  </div>
\t\t";
        }
        // line 63
        echo "\t\t
\t\t\t<div id=\"tttop-link-block\">
\t\t\t\t<h3 class=\"title_block \">Best in offer</h3>
\t\t\t\t<ul class=\"block_content\" id=\"tttoplink\">
\t\t\t\t\t\t<li class=\"tttoplink tthome\">
\t\t\t\t\t\t\t<a href=\"#\" title=\"home\">Home</a></li>
\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"Digital Group\" href=\"#\">Digital Group</a></li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"Web Marketplace\" href=\"#\">Web Marketplace</a></li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"books and media\" href=\"#\">books and media</a></li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"Quadcopters\" href=\"#\">Quadcopters</a></li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"Brands\" href=\"#\">Brands</a></li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"electronics\" href=\"#\">electronics</a></li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"categorized\" href=\"#\">categorized</a></li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"About Company\" href=\"#\">About Company</a></li>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t<li class=\"tttoplink\">
\t\t\t\t\t\t\t<a onclick=\"window.open(this.href);return false;\" title=\"Suppliers\" href=\"#\">Suppliers</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t</div>
</div>
</div>
<div class=\"footer-bottom\">
\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"footer-bottom-link col-sm-6\">
\t\t<p>";
        // line 107
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
\t</div>
\t";
        // line 109
        if ((isset($context["footer_bottom"]) ? $context["footer_bottom"] : null)) {
            // line 110
            echo "\t<div class=\"footer-bottom-cms col-sm-6\">
 \t";
            // line 111
            echo (isset($context["footer_bottom"]) ? $context["footer_bottom"] : null);
            echo "
\t</div>
\t";
        }
        // line 114
        echo "\t</div>
\t</div>
</div>
</footer>
</div>

";
        // line 120
        if ((isset($context["module_tt_live_search_status"]) ? $context["module_tt_live_search_status"] : null)) {
            // line 121
            echo "
\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\tvar tt_live_search = {
\t\t\t\t\tselector: '#header-search input[name=\\'search\\']',
\t\t\t\t\ttext_no_matches: '";
            // line 125
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "',
\t\t\t\t\theight: '50px'
\t\t\t\t}

\t\t\t\t\$(document).ready(function() {
\t\t\t\t\tvar html = '';
\t\t\t\t\thtml += '<div class=\"live-search\">';
\t\t\t\t\thtml += '\t<ul>';
\t\t\t\t\thtml += '\t</ul>';
\t\t\t\t\thtml += '<div class=\"result-text\"></div>';
\t\t\t\t\thtml += '</div>';

\t\t\t\t\t//\$(tt_live_search.selector).parent().closest('div').after(html);
\t\t\t\t\t\$(tt_live_search.selector).after(html);

\t\t\t\t\t\$(tt_live_search.selector).autocomplete({
\t\t\t\t\t\t'source': function(request, response) {
\t\t\t\t\t\t\tvar filter_name = \$(tt_live_search.selector).val();
\t\t\t\t\t\t\tvar cat_id = 0;
\t\t\t\t\t\t\tvar module_tt_live_search_min_length = '";
            // line 144
            echo abs((isset($context["module_tt_live_search_min_length"]) ? $context["module_tt_live_search_min_length"] : null));
            echo "';
\t\t\t\t\t\t\tif (filter_name.length < module_tt_live_search_min_length) {
\t\t\t\t\t\t\t\t\$('.live-search').css('display','none');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse{
\t\t\t\t\t\t\t\tvar html = '';
\t\t\t\t\t\t\t\thtml += '<li style=\"text-align: center;height:10px;\">';
\t\t\t\t\t\t\t\thtml +=\t'<img class=\"loading\" src=\"image/catalog/demo/banners/loading.gif\" />';
\t\t\t\t\t\t\t\thtml +=\t'</li>';
\t\t\t\t\t\t\t\t\$('.live-search ul').html(html);
\t\t\t\t\t\t\t\t\$('.live-search').css('display','block');

\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/tt_live_search&filter_name=' +  encodeURIComponent(filter_name),
\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\tsuccess: function(result) {
\t\t\t\t\t\t\t\t\t\tvar products = result.products;
\t\t\t\t\t\t\t\t\t\t\$('.live-search ul li').remove();
\t\t\t\t\t\t\t\t\t\t\$('.result-text').html('');
\t\t\t\t\t\t\t\t\t\tif (!\$.isEmptyObject(products)) {
\t\t\t\t\t\t\t\t\t\t\tvar show_image = ";
            // line 164
            echo abs((isset($context["module_tt_live_search_show_image"]) ? $context["module_tt_live_search_show_image"] : null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\tvar show_price = ";
            // line 165
            echo abs((isset($context["module_tt_live_search_show_price"]) ? $context["module_tt_live_search_show_price"] : null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\tvar show_description = ";
            // line 166
            echo abs((isset($context["module_tt_live_search_show_description"]) ? $context["module_tt_live_search_show_description"] : null));
            echo ";
\t\t\t\t\t\t\t\t\t\t\t\$('.result-text').html('<a href=\"";
            // line 167
            echo (isset($context["module_tt_live_search_href"]) ? $context["module_tt_live_search_href"] : null);
            echo "'+filter_name+'\" class=\"view-all-results\">";
            echo twig_escape_filter($this->env, (isset($context["text_view_all_results"]) ? $context["text_view_all_results"] : null));
            echo " ('+result.total+')</a>');

\t\t\t\t\t\t\t\t\t\t\t\$.each(products, function(index,product) {
\t\t\t\t\t\t\t\t\t\t\t\tvar html = '';

\t\t\t\t\t\t\t\t\t\t\t\thtml += '<li>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<a href=\"' + product.url + '\" title=\"' + product.name + '\">';
\t\t\t\t\t\t\t\t\t\t\t\tif(product.image && show_image){
\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-image col-sm-3 col-xs-4\"><img alt=\"' + product.name + '\" src=\"' + product.image + '\"></div>';
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"search-description col-sm-9 col-xs-8\">';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-name\">' + product.name ;
\t\t\t\t\t\t\t\t\t\t\t\tif(show_description){
\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<p>' + product.extra_info + '</p>';
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\t\t\t\t\t\tif(show_price){
\t\t\t\t\t\t\t\t\t\t\t\t\tif (product.special) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-price\"><span class=\"special\">' + product.price + '</span><span class=\"price\">' + product.special + '</span></div>';
\t\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '\t<div class=\"product-price\"><span class=\"price\">' + product.price + '</span></div>';
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<span style=\"clear:both\"></span>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</a>';
\t\t\t\t\t\t\t\t\t\t\t\thtml += '</li>';
\t\t\t\t\t\t\t\t\t\t\t\t\$('.live-search ul').append(html);
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tvar html = '';
\t\t\t\t\t\t\t\t\t\t\thtml += '<li style=\"text-align: center;height:10px;\">';
\t\t\t\t\t\t\t\t\t\t\thtml +=\ttt_live_search.text_no_matches;
\t\t\t\t\t\t\t\t\t\t\thtml +=\t'</li>';

\t\t\t\t\t\t\t\t\t\t\t\$('.live-search ul').html(html);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\$('.live-search').css('display','block');
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\t'select': function(product) {
\t\t\t\t\t\t\t\$(tt_live_search.selector).val(product.name);
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\t\$(document).bind( \"mouseup touchend\", function(e){
\t\t\t\t\t  var container = \$('.live-search');
\t\t\t\t\t  if (!container.is(e.target) && container.has(e.target).length === 0)
\t\t\t\t\t  {
\t\t\t\t\t    container.hide();
\t\t\t\t\t  }
\t\t\t\t\t});
\t\t\t\t});
\t\t\t//--></script>
\t\t";
        }
        // line 225
        echo "

";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 228
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 230,  413 => 228,  409 => 227,  405 => 225,  342 => 167,  338 => 166,  334 => 165,  330 => 164,  307 => 144,  285 => 125,  279 => 121,  277 => 120,  269 => 114,  263 => 111,  260 => 110,  258 => 109,  253 => 107,  207 => 63,  201 => 60,  198 => 59,  196 => 58,  187 => 54,  181 => 53,  175 => 52,  170 => 50,  166 => 49,  157 => 45,  151 => 44,  145 => 43,  139 => 42,  133 => 41,  128 => 39,  124 => 38,  115 => 34,  109 => 33,  103 => 32,  97 => 31,  92 => 29,  88 => 28,  85 => 27,  80 => 24,  69 => 22,  65 => 21,  60 => 19,  55 => 18,  53 => 17,  49 => 15,  43 => 12,  40 => 11,  38 => 10,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/* {% if footer_top %}*/
/* <div class="footer-top">*/
/* {{ footer_top }}*/
/* </div>*/
/* {% endif %}*/
/* <div class="footer-container">*/
/* <div class="container">*/
/* 	<div class="row">*/
/* 		{% if footer_left %}*/
/* 		<div class="footer-column footer-left-cms col-sm-2">*/
/* 		{{ footer_left }}*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		<div class="footer-right col-sm-10">*/
/* 		*/
/* 		  {% if informations %}*/
/* 		  <div class="col-sm-3 footer-column {{ 'footer-' ~ text_information|replace({' ': '-'})|lower }}">*/
/* 			<h5>{{ text_information }}</h5>*/
/* 			<ul class="list-unstyled">*/
/* 			 {% for information in informations %}*/
/* 			  <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/* 			  {% endfor %}*/
/* 			</ul>*/
/* 		  </div>*/
/* 		  {% endif %}*/
/* 				*/
/* 		  <div class="col-sm-3 footer-column {{ 'footer-' ~ text_extra|replace({' ': '-'})|lower }}">*/
/* 			<h5>{{ text_extra }}</h5>*/
/* 			<ul class="list-unstyled">*/
/* 			  <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/* 			  <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/* 			  <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/* 			  <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/* 			</ul>*/
/* 		  </div>*/
/* 		  */
/* 		  <div class="col-sm-3 footer-column {{ 'footer-' ~ text_account|replace({' ': '-'})|lower }}">*/
/* 			<h5>{{ text_account }}</h5>*/
/* 			<ul class="list-unstyled">*/
/* 			  <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 			  <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 			  <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/* 			  <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/* 			  <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/* 			</ul>*/
/* 		  </div>*/
/* 		  */
/* 		  <div class="col-sm-3 footer-column {{ 'footer-' ~ text_service|replace({' ': '-'})|lower }}">*/
/* 			<h5>{{ text_service }}</h5>*/
/* 			<ul class="list-unstyled">*/
/* 			  <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 			  <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/* 			  <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* 			</ul>*/
/* 		  </div>*/
/* 	*/
/* 		{% if footer_right %}*/
/* 		  <div class="footer-column footer-right-cms col-sm-3">*/
/* 		 {{ footer_right }}*/
/* 		  </div>*/
/* 		{% endif %}*/
/* 		*/
/* 			<div id="tttop-link-block">*/
/* 				<h3 class="title_block ">Best in offer</h3>*/
/* 				<ul class="block_content" id="tttoplink">*/
/* 						<li class="tttoplink tthome">*/
/* 							<a href="#" title="home">Home</a></li>*/
/* 						 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="Digital Group" href="#">Digital Group</a></li>*/
/* 								 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="Web Marketplace" href="#">Web Marketplace</a></li>*/
/* 								 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="books and media" href="#">books and media</a></li>*/
/* 								 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="Quadcopters" href="#">Quadcopters</a></li>*/
/* 								 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="Brands" href="#">Brands</a></li>*/
/* 								 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="electronics" href="#">electronics</a></li>*/
/* 								 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="categorized" href="#">categorized</a></li>*/
/* 								 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="About Company" href="#">About Company</a></li>*/
/* 								 */
/* 						<li class="tttoplink">*/
/* 							<a onclick="window.open(this.href);return false;" title="Suppliers" href="#">Suppliers</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			*/
/* 			</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* <div class="footer-bottom">*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 	<div class="footer-bottom-link col-sm-6">*/
/* 		<p>{{ powered }}</p>*/
/* 	</div>*/
/* 	{% if footer_bottom %}*/
/* 	<div class="footer-bottom-cms col-sm-6">*/
/*  	{{ footer_bottom }}*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	</div>*/
/* 	</div>*/
/* </div>*/
/* </footer>*/
/* </div>*/
/* */
/* {% if module_tt_live_search_status %}*/
/* */
/* 			<script type="text/javascript"><!--*/
/* 				var tt_live_search = {*/
/* 					selector: '#header-search input[name=\'search\']',*/
/* 					text_no_matches: '{{ text_empty }}',*/
/* 					height: '50px'*/
/* 				}*/
/* */
/* 				$(document).ready(function() {*/
/* 					var html = '';*/
/* 					html += '<div class="live-search">';*/
/* 					html += '	<ul>';*/
/* 					html += '	</ul>';*/
/* 					html += '<div class="result-text"></div>';*/
/* 					html += '</div>';*/
/* */
/* 					//$(tt_live_search.selector).parent().closest('div').after(html);*/
/* 					$(tt_live_search.selector).after(html);*/
/* */
/* 					$(tt_live_search.selector).autocomplete({*/
/* 						'source': function(request, response) {*/
/* 							var filter_name = $(tt_live_search.selector).val();*/
/* 							var cat_id = 0;*/
/* 							var module_tt_live_search_min_length = '{{ module_tt_live_search_min_length|abs }}';*/
/* 							if (filter_name.length < module_tt_live_search_min_length) {*/
/* 								$('.live-search').css('display','none');*/
/* 							}*/
/* 							else{*/
/* 								var html = '';*/
/* 								html += '<li style="text-align: center;height:10px;">';*/
/* 								html +=	'<img class="loading" src="image/catalog/demo/banners/loading.gif" />';*/
/* 								html +=	'</li>';*/
/* 								$('.live-search ul').html(html);*/
/* 								$('.live-search').css('display','block');*/
/* */
/* 								$.ajax({*/
/* 									url: 'index.php?route=extension/module/tt_live_search&filter_name=' +  encodeURIComponent(filter_name),*/
/* 									dataType: 'json',*/
/* 									success: function(result) {*/
/* 										var products = result.products;*/
/* 										$('.live-search ul li').remove();*/
/* 										$('.result-text').html('');*/
/* 										if (!$.isEmptyObject(products)) {*/
/* 											var show_image = {{ module_tt_live_search_show_image|abs }};*/
/* 											var show_price = {{ module_tt_live_search_show_price|abs }};*/
/* 											var show_description = {{ module_tt_live_search_show_description|abs }};*/
/* 											$('.result-text').html('<a href="{{ module_tt_live_search_href }}'+filter_name+'" class="view-all-results">{{ text_view_all_results|e }} ('+result.total+')</a>');*/
/* */
/* 											$.each(products, function(index,product) {*/
/* 												var html = '';*/
/* */
/* 												html += '<li>';*/
/* 												html += '<a href="' + product.url + '" title="' + product.name + '">';*/
/* 												if(product.image && show_image){*/
/* 													html += '	<div class="product-image col-sm-3 col-xs-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';*/
/* 												}*/
/* 												html += '<div class="search-description col-sm-9 col-xs-8">';*/
/* 												html += '	<div class="product-name">' + product.name ;*/
/* 												if(show_description){*/
/* 													html += '<p>' + product.extra_info + '</p>';*/
/* 												}*/
/* 												html += '</div>';*/
/* 												if(show_price){*/
/* 													if (product.special) {*/
/* 														html += '	<div class="product-price"><span class="special">' + product.price + '</span><span class="price">' + product.special + '</span></div>';*/
/* 													} else {*/
/* 														html += '	<div class="product-price"><span class="price">' + product.price + '</span></div>';*/
/* 													}*/
/* 												}*/
/* 												html += '</div>';*/
/* 												html += '<span style="clear:both"></span>';*/
/* 												html += '</a>';*/
/* 												html += '</li>';*/
/* 												$('.live-search ul').append(html);*/
/* 											});*/
/* 										} else {*/
/* 											var html = '';*/
/* 											html += '<li style="text-align: center;height:10px;">';*/
/* 											html +=	tt_live_search.text_no_matches;*/
/* 											html +=	'</li>';*/
/* */
/* 											$('.live-search ul').html(html);*/
/* 										}*/
/* 										$('.live-search').css('display','block');*/
/* 										return false;*/
/* 									}*/
/* 								});*/
/* 							}*/
/* 						},*/
/* 						'select': function(product) {*/
/* 							$(tt_live_search.selector).val(product.name);*/
/* 						}*/
/* 					});*/
/* */
/* 					$(document).bind( "mouseup touchend", function(e){*/
/* 					  var container = $('.live-search');*/
/* 					  if (!container.is(e.target) && container.has(e.target).length === 0)*/
/* 					  {*/
/* 					    container.hide();*/
/* 					  }*/
/* 					});*/
/* 				});*/
/* 			//--></script>*/
/* 		{% endif %}*/
/* */
/* */
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </body></html>*/
