<?php

/* OPC170_02/template/extension/module/carousel.twig */
class __TwigTemplate_8a82c0705f5bcd996ea876ab7c8a1128252506dfb1d92f993ed57cc1158919a9 extends Twig_Template
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
        echo "<div class=\"brand-carousel\">
<div class=\"box-heading\"><h3>";
        // line 2
        echo (isset($context["brand_heading_title"]) ? $context["brand_heading_title"] : null);
        echo "</h3></div>
<div class=\"swiper-viewport\">
  <div id=\"carousel";
        // line 4
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container brand-items\">
    <div class=\"swiper-wrapper\">
\t  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "      <div class=\"swiper-slide text-center\">
\t  ";
            // line 8
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 9
                echo "\t  <a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>
\t  ";
            } else {
                // line 11
                echo "\t  <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />
\t  ";
            }
            // line 13
            echo "\t  </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t  </div>
  </div>
  <div class=\"swiper-pagination carousel";
        // line 17
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>
  </div>
</div>
</div>
<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 25
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tautoplay: 3000,
\t//pagination: '.carousel";
        // line 28
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpagination: false,
\tpaginationClickable: false,
    prevButton: '.swiper-button-prev',
\tnextButton: '.swiper-button-next',
\t
 // Default parameters
  slidesPerView: 5,
  
  // Responsive breakpoints
  breakpoints: {
\t    // when window width is <= 1200px
\t    1300: {
\t      slidesPerView: 4
\t    },
\t \t// when window width is <= 991px
\t    991: {
\t      slidesPerView: 4
\t    },
\t \t// when window width is <= 767px
\t    767: {
\t      slidesPerView: 3
\t    },
\t    // when window width is <= 480px
\t    480: {
\t      slidesPerView: 2
\t\t}
   }

});
--></script>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  81 => 25,  70 => 17,  66 => 15,  59 => 13,  51 => 11,  41 => 9,  39 => 8,  36 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="brand-carousel">*/
/* <div class="box-heading"><h3>{{ brand_heading_title }}</h3></div>*/
/* <div class="swiper-viewport">*/
/*   <div id="carousel{{ module }}" class="swiper-container brand-items">*/
/*     <div class="swiper-wrapper">*/
/* 	  {% for banner in banners %}*/
/*       <div class="swiper-slide text-center">*/
/* 	  {% if banner.link %}*/
/* 	  <a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>*/
/* 	  {% else %}*/
/* 	  <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/* 	  {% endif %}*/
/* 	  </div>*/
/*       {% endfor %}*/
/* 	  </div>*/
/*   </div>*/
/*   <div class="swiper-pagination carousel{{ module }}"></div>*/
/*   <div class="swiper-pager">*/
/*     <div class="swiper-button-prev"></div>*/
/*     <div class="swiper-button-next"></div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#carousel{{ module }}').swiper({*/
/* 	mode: 'horizontal',*/
/* 	autoplay: 3000,*/
/* 	//pagination: '.carousel{{ module }}',*/
/* 	pagination: false,*/
/* 	paginationClickable: false,*/
/*     prevButton: '.swiper-button-prev',*/
/* 	nextButton: '.swiper-button-next',*/
/* 	*/
/*  // Default parameters*/
/*   slidesPerView: 5,*/
/*   */
/*   // Responsive breakpoints*/
/*   breakpoints: {*/
/* 	    // when window width is <= 1200px*/
/* 	    1300: {*/
/* 	      slidesPerView: 4*/
/* 	    },*/
/* 	 	// when window width is <= 991px*/
/* 	    991: {*/
/* 	      slidesPerView: 4*/
/* 	    },*/
/* 	 	// when window width is <= 767px*/
/* 	    767: {*/
/* 	      slidesPerView: 3*/
/* 	    },*/
/* 	    // when window width is <= 480px*/
/* 	    480: {*/
/* 	      slidesPerView: 2*/
/* 		}*/
/*    }*/
/* */
/* });*/
/* --></script>*/
