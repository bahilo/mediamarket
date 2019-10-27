<?php

/* OPC170_02/template/extension/module/slideshow.twig */
class __TwigTemplate_06487ddb1ed868cdbfdad9c44fbb6058b0184daaa365e8e1121fc58e42f06152 extends Twig_Template
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
        echo "<div class=\"slideshow-panel col-sm-8\">
<div class=\"ttloading-bg ttloader\"></div>
<div class=\"swiper-viewport\">
  <div id=\"slideshow";
        // line 4
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"slideshow-main swiper-container\">
    <div class=\"swiper-wrapper\"> 
\t  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "      \t<div class=\"swiper-slide text-center\">
\t\t\t";
            // line 8
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 9
                echo "\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\">
\t\t\t\t<img src=\"";
                // line 10
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t</a>
\t\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />
\t\t\t";
            }
            // line 15
            echo "\t\t</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "   </div>
   \t<div class=\"swiper-pagination slideshow";
        // line 18
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-prev\"></div>
\t<div class=\"swiper-button-next\"></div>
  </div>
  </div>
</div>
</div>
<script type=\"text/javascript\"><!--
var swiper = new Swiper('#slideshow";
        // line 27
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "', {
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 30
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0,
\teffect: 'fade',
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
--></script>";
    }

    public function getTemplateName()
    {
        return "OPC170_02/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  81 => 27,  69 => 18,  66 => 17,  59 => 15,  51 => 13,  43 => 10,  38 => 9,  36 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="slideshow-panel col-sm-8">*/
/* <div class="ttloading-bg ttloader"></div>*/
/* <div class="swiper-viewport">*/
/*   <div id="slideshow{{ module }}" class="slideshow-main swiper-container">*/
/*     <div class="swiper-wrapper"> */
/* 	  {% for banner in banners %}*/
/*       	<div class="swiper-slide text-center">*/
/* 			{% if banner.link %}*/
/* 				<a href="{{ banner.link }}">*/
/* 				<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/* 				</a>*/
/* 				{% else %}*/
/* 				<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/* 			{% endif %}*/
/* 		</div>*/
/*       {% endfor %}*/
/*    </div>*/
/*    	<div class="swiper-pagination slideshow{{ module }}"></div>*/
/*   <div class="swiper-pager">*/
/*     <div class="swiper-button-prev"></div>*/
/* 	<div class="swiper-button-next"></div>*/
/*   </div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* var swiper = new Swiper('#slideshow{{ module }}', {*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 1,*/
/* 	pagination: '.slideshow{{ module }}',*/
/* 	paginationClickable: true,*/
/* 	nextButton: '.swiper-button-next',*/
/*     prevButton: '.swiper-button-prev',*/
/*     spaceBetween: 0,*/
/* 	effect: 'fade',*/
/* 	autoplay: 2500,*/
/*     autoplayDisableOnInteraction: true,*/
/* 	loop: true*/
/* });*/
/* --></script>*/
