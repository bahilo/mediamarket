<?php

/* OPC170_02/template/common/header.twig */
class __TwigTemplate_1fc5145c9fb01f89310fe928993119075948d6648266802a0ce0a05c514fe0de extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>

<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!--<link href=\"catalog/view/theme/";
        // line 25
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "/stylesheet/TemplateTrip/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />-->

<link href=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/theme/OPC170_02/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/ttblogstyle.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/ttcountdown.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/category-feature.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/animate.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/newsletter.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        // line 35
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 36
            echo "\t<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/ttblogstyle-rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/ttcountdown-rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/newsletter-rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        }
        // line 41
        echo "<link href=\"catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/lightbox.css\" rel=\"stylesheet\" type=\"text/css\" />

";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 44
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>

<!-- TemplateTrip custom Theme JS START -->
<script src=\"catalog/view/javascript/TemplateTrip/addonScript.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/TemplateTrip/lightbox-2.6.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/TemplateTrip/waypoints.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/TemplateTrip/tt_quickview.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/TemplateTrip/bootstrap-notify.min.js\" type=\"text/javascript\"></script>
<!-- TemplateTrip custom Theme JS END -->

";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 59
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 63
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 67
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</head>

<body class=\"";
        // line 71
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
<div id=\"page\">
<header>
<nav id=\"top\">
  <div class=\"container\">
\t<div class=\"header-top-left\">
\t\t";
        // line 77
        if ((isset($context["header_left"]) ? $context["header_left"] : null)) {
            // line 78
            echo "\t\t\t<div class=\"header-left-cms\">
\t\t\t ";
            // line 79
            echo (isset($context["header_left"]) ? $context["header_left"] : null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 82
        echo "\t\t
\t
\t</div>

\t<div class=\"header-top-right\">
\t\t<div class=\"contact-link\">
\t\t\t<ul>
\t\t\t <li class=\"header-phone pull-left\">
\t\t\t\t<a href=\"";
        // line 90
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\"></i>
\t\t\t\t<span>";
        // line 91
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span>
\t\t\t\t</a>
\t\t\t </li>
\t\t\t <li class=\"header-mail\">
\t\t\t\t<a href=\"";
        // line 95
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-envelope\"></i>
\t\t\t\t<span>";
        // line 96
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t";
        // line 101
        if ((isset($context["header_right"]) ? $context["header_right"] : null)) {
            // line 102
            echo "\t\t\t<div class=\"header-right-cms\">
\t\t\t";
            // line 103
            echo (isset($context["header_right"]) ? $context["header_right"] : null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 106
        echo "    </div>
  </div>
</nav>
<div class=\"full-header\">
  <div class=\"container\">
\t
  \t<div class=\"header-left\">
        <div id=\"logo\">
\t\t\t";
        // line 114
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 115
            echo "\t\t\t\t<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t";
        } else {
            // line 117
            echo "          \t\t<h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 119
        echo "      </div>
    </div>
\t\t
\t\t
\t
\t\t";
        // line 124
        if ((isset($context["header_top"]) ? $context["header_top"] : null)) {
            // line 125
            echo "\t\t<div class=\"header-top-cms col-sm-8\">
\t\t\t";
            // line 126
            echo (isset($context["header_top"]) ? $context["header_top"] : null);
            echo "
\t\t</div>
\t\t";
        }
        // line 129
        echo "\t\t  
\t\t<div class=\"header-right\">
\t\t  <div id=\"ttspecialoffer\">
\t\t\t  <div class=\"offer\"><a href=\"";
        // line 132
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">Best Offers !</a></div>
\t\t  </div>
\t\t</div>
\t\t
\t\t<div class=\"search\">";
        // line 136
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
\t<!--";
        // line 137
        if ((isset($context["header_left"]) ? $context["header_left"] : null)) {
            // line 138
            echo "\t<div class=\"header-left-cms col-sm-3\">
\t ";
            // line 139
            echo (isset($context["header_left"]) ? $context["header_left"] : null);
            echo "
\t</div>
\t";
        }
        // line 141
        echo "-->
  </div>
  
</div>

<div class=\"header-bottom-block\">
<div class=\"container\">
\t";
        // line 148
        if ((isset($context["header_bottom"]) ? $context["header_bottom"] : null)) {
            // line 149
            echo "\t\t<div class=\"header-bottom\">
\t\t\t";
            // line 150
            echo (isset($context["header_bottom"]) ? $context["header_bottom"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 153
        echo "\t<div id=\"tttoplink_block\">
     <ul id=\"tt_toplink\" class=\"block_content\">
\t      <li class=\"tttoplink tthome\"><a title=\"home\" href=\"#\">Home</a></li>
          <li class=\"tttoplink\"><a href=\"";
        // line 156
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li class=\"tttoplink\"><a href=\"";
        // line 157
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li class=\"tttoplink\"><a href=\"";
        // line 158
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
\t\t  <li class=\"tttoplink\"><a href=\"";
        // line 159
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
\t\t";
        // line 160
        if (((isset($context["blog_enable"]) ? $context["blog_enable"] : null) == true)) {
            // line 161
            echo "\t\t\t<li class=\"tttoplink\"> <a href=\"";
            echo (isset($context["all_blogs"]) ? $context["all_blogs"] : null);
            echo "\">
\t\t\t<span data-hover=\"";
            // line 162
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</span>
\t\t</a></li>       
\t";
        }
        // line 165
        echo "        </ul>
\t</div>
\t<div class=\"right-block\">
\t\t<div class=\"user-info\">
\t\t  <div class=\"dropdown\"><a href=\"";
        // line 169
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i>
 <span class=\"ttuserheading\">";
        // line 170
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span><i class=\"fa fa-caret-down\"></i></a>
          <ul class=\"dropdown-menu dropdown-menu-right account-link-toggle\">
            ";
        // line 172
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 173
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\"><i class='fa fa-user'></i> ";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 174
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\"><i class='fa fa-calendar'></i> ";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 175
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\"><i class='fa fa-credit-card'></i> ";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 176
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\"><i class='fa fa-download'></i> ";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 177
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class='fa fa-sign-out'></i> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t<li><a href=\"";
            // line 178
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-sm hidden-md\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</span></a></li>
\t\t\t<li class=\"ttlanguage\">";
            // line 179
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "</li>
\t\t\t<li class=\"ttcurrency\">";
            // line 180
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "</li>
            ";
        } else {
            // line 182
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\"><i class='fa fa-user'></i> ";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 183
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\"><i class='fa fa-sign-in'></i> ";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t<li><a href=\"";
            // line 184
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-sm hidden-md\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</span></a></li>
\t\t\t<li class=\"ttlanguage\">";
            // line 185
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "</li>
\t\t\t<li class=\"ttcurrency\">";
            // line 186
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "</li>
            ";
        }
        // line 188
        echo "          </ul>
\t\t  </div>
        </div>
\t\t<div class=\"cart\">";
        // line 191
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
\t</div>
</div>
</div>
\t
</header>
<!--<div class=\"header-content-title\">
</div>-->";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 191,  487 => 188,  482 => 186,  478 => 185,  470 => 184,  464 => 183,  457 => 182,  452 => 180,  448 => 179,  440 => 178,  434 => 177,  428 => 176,  422 => 175,  416 => 174,  409 => 173,  407 => 172,  402 => 170,  396 => 169,  390 => 165,  382 => 162,  377 => 161,  375 => 160,  369 => 159,  363 => 158,  357 => 157,  351 => 156,  346 => 153,  340 => 150,  337 => 149,  335 => 148,  326 => 141,  320 => 139,  317 => 138,  315 => 137,  311 => 136,  304 => 132,  299 => 129,  293 => 126,  290 => 125,  288 => 124,  281 => 119,  273 => 117,  261 => 115,  259 => 114,  249 => 106,  243 => 103,  240 => 102,  238 => 101,  230 => 96,  226 => 95,  219 => 91,  215 => 90,  205 => 82,  199 => 79,  196 => 78,  194 => 77,  185 => 71,  181 => 69,  173 => 67,  169 => 66,  166 => 65,  157 => 63,  153 => 62,  150 => 61,  139 => 59,  135 => 58,  121 => 46,  108 => 44,  104 => 43,  100 => 41,  93 => 36,  91 => 35,  78 => 25,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* */
/* <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <!--<link href="catalog/view/theme/{{ theme_path }}/stylesheet/TemplateTrip/bootstrap.min.css" rel="stylesheet" media="screen" />-->*/
/* */
/* <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/theme/OPC170_02/stylesheet/stylesheet.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/ttblogstyle.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/ttcountdown.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/category-feature.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/animate.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/newsletter.css" rel="stylesheet" type="text/css" />*/
/* {% if direction=='rtl' %}*/
/* 	<link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/rtl.css" rel="stylesheet" type="text/css" />*/
/* 	<link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/ttblogstyle-rtl.css" rel="stylesheet" type="text/css" />*/
/* 	<link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/ttcountdown-rtl.css" rel="stylesheet" type="text/css" />*/
/* 	<link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/newsletter-rtl.css" rel="stylesheet" type="text/css" />*/
/* {% endif %}*/
/* <link href="catalog/view/theme/OPC170_02/stylesheet/TemplateTrip/lightbox.css" rel="stylesheet" type="text/css" />*/
/* */
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* */
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* */
/* <!-- TemplateTrip custom Theme JS START -->*/
/* <script src="catalog/view/javascript/TemplateTrip/addonScript.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/TemplateTrip/lightbox-2.6.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/TemplateTrip/waypoints.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/TemplateTrip/tt_quickview.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/TemplateTrip/bootstrap-notify.min.js" type="text/javascript"></script>*/
/* <!-- TemplateTrip custom Theme JS END -->*/
/* */
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* */
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* */
/* <body class="{{ class }}">*/
/* <div id="page">*/
/* <header>*/
/* <nav id="top">*/
/*   <div class="container">*/
/* 	<div class="header-top-left">*/
/* 		{% if header_left %}*/
/* 			<div class="header-left-cms">*/
/* 			 {{ header_left }}*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		*/
/* 	*/
/* 	</div>*/
/* */
/* 	<div class="header-top-right">*/
/* 		<div class="contact-link">*/
/* 			<ul>*/
/* 			 <li class="header-phone pull-left">*/
/* 				<a href="{{ contact }}"><i class="fa fa-phone"></i>*/
/* 				<span>{{ telephone }}</span>*/
/* 				</a>*/
/* 			 </li>*/
/* 			 <li class="header-mail">*/
/* 				<a href="{{ contact }}"><i class="fa fa-envelope"></i>*/
/* 				<span>{{ email }}</span>*/
/* 				</a>*/
/* 			</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		{%  if header_right %}*/
/* 			<div class="header-right-cms">*/
/* 			{{ header_right }}*/
/* 			</div>*/
/* 		{% endif %}*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <div class="full-header">*/
/*   <div class="container">*/
/* 	*/
/*   	<div class="header-left">*/
/*         <div id="logo">*/
/* 			{% if logo %}*/
/* 				<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/* 			{% else %}*/
/*           		<h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}*/
/*       </div>*/
/*     </div>*/
/* 		*/
/* 		*/
/* 	*/
/* 		{% if header_top %}*/
/* 		<div class="header-top-cms col-sm-8">*/
/* 			{{ header_top }}*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		  */
/* 		<div class="header-right">*/
/* 		  <div id="ttspecialoffer">*/
/* 			  <div class="offer"><a href="{{ special }}">Best Offers !</a></div>*/
/* 		  </div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="search">{{ search }}</div>*/
/* 	<!--{% if header_left %}*/
/* 	<div class="header-left-cms col-sm-3">*/
/* 	 {{ header_left }}*/
/* 	</div>*/
/* 	{% endif %}-->*/
/*   </div>*/
/*   */
/* </div>*/
/* */
/* <div class="header-bottom-block">*/
/* <div class="container">*/
/* 	{% if header_bottom %}*/
/* 		<div class="header-bottom">*/
/* 			{{ header_bottom }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div id="tttoplink_block">*/
/*      <ul id="tt_toplink" class="block_content">*/
/* 	      <li class="tttoplink tthome"><a title="home" href="#">Home</a></li>*/
/*           <li class="tttoplink"><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li class="tttoplink"><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li class="tttoplink"><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/* 		  <li class="tttoplink"><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 		{% if blog_enable == true %}*/
/* 			<li class="tttoplink"> <a href="{{ all_blogs }}">*/
/* 			<span data-hover="{{ text_blog }}">{{ text_blog }}</span>*/
/* 		</a></li>       */
/* 	{% endif %}*/
/*         </ul>*/
/* 	</div>*/
/* 	<div class="right-block">*/
/* 		<div class="user-info">*/
/* 		  <div class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>*/
/*  <span class="ttuserheading">{{ text_account }}</span><i class="fa fa-caret-down"></i></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right account-link-toggle">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}"><i class='fa fa-user'></i> {{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}"><i class='fa fa-calendar'></i> {{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}"><i class='fa fa-credit-card'></i> {{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}"><i class='fa fa-download'></i> {{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}"><i class='fa fa-sign-out'></i> {{ text_logout }}</a></li>*/
/* 			<li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/* 			<li class="ttlanguage">{{ language }}</li>*/
/* 			<li class="ttcurrency">{{ currency }}</li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}"><i class='fa fa-user'></i> {{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}"><i class='fa fa-sign-in'></i> {{ text_login }}</a></li>*/
/* 			<li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/* 			<li class="ttlanguage">{{ language }}</li>*/
/* 			<li class="ttcurrency">{{ currency }}</li>*/
/*             {% endif %}*/
/*           </ul>*/
/* 		  </div>*/
/*         </div>*/
/* 		<div class="cart">{{ cart }}</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* 	*/
/* </header>*/
/* <!--<div class="header-content-title">*/
/* </div>-->*/
